<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars($_POST['nama_pelanggan']);
    $tempahan = $_POST['tempahan'];

    $items = [];
    $total = 0;

    foreach ($tempahan as $id => $saiz_list) {

        foreach ($data as $p) {
            if ($p['id'] == $id) {

                foreach ($saiz_list as $saiz => $qty) {

                    if ($qty > 0) {

                        $harga = $p['harga'][$saiz];
                        $jumlah = $qty * $harga;

                        $items[] = [
                            'nama' => $p['nama'],
                            'saiz' => $saiz,
                            'qty' => $qty,
                            'jumlah' => $jumlah
                        ];

                        $total += $jumlah;
                    }
                }
            }
        }
    }

    $_SESSION['invois_data'] = [
        'nama' => $nama,
        'items' => $items,
        'total' => $total
    ];

    header("Location: index.php?menu=invois");
    exit();
}
?>

<h1>Borang Tempahan</h1>

<form method="POST">
    <?php foreach ($data as $produk): ?>

        <h3><?= $produk['nama'] ?></h3>

        <?php foreach ($produk['harga'] as $saiz => $harga): ?>

            <?= $saiz ?> (RM<?= $harga ?>)
            <input type="number" name="tempahan[<?= $produk['id'] ?>][<?= $saiz ?>]" value="0">

            <br>

        <?php endforeach; ?>

    <?php endforeach; ?>

    <input type="text" name="nama_pelanggan" placeholder="Nama" required>

    <button type="submit">Teruskan</button>
</form>