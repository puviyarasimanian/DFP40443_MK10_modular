<?php
include "data.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama_pelanggan'];
    $tempahan = $_POST['tempahan'];

    $items = [];
    $total = 0;

    foreach ($tempahan as $id => $saiz_list) {

        foreach ($data as $p) {
            if ($p['id'] == $id) {

                foreach ($saiz_list as $saiz => $qty) {
                    if ($qty > 0) {

                        $harga = $p['harga'][$saiz];
                        $jumlah = $harga * $qty;

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

    $_SESSION['invois'] = [
        'nama' => $nama,
        'items' => $items,
        'total' => $total
    ];

    header("Location: index.php?menu=invois");
    exit();
}
?>

<h1>Tempah</h1>

<form method="POST">
<?php foreach ($data as $p): ?>
    <h3><?= $p['nama'] ?></h3>

    <?php foreach ($p['harga'] as $saiz => $harga): ?>
        <?= $saiz ?> (RM <?= $harga ?>)
        <input type="number" name="tempahan[<?= $p['id'] ?>][<?= $saiz ?>]" value="0"><br>
    <?php endforeach; ?>

<?php endforeach; ?>

<br>
Nama: <input type="text" name="nama_pelanggan" required>
<br><br>
<button type="submit">Submit</button>
</form>