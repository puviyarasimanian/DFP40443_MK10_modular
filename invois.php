<?php
if (!isset($_SESSION['invois_data'])) {
    echo "Tiada invois";
    return;
}

$inv = $_SESSION['invois_data'];
?>

<h1>Invois</h1>

<p>Nama: <?= $inv['nama'] ?></p>

<table border="1">
    <tr>
        <th>Produk</th>
        <th>Saiz</th>
        <th>Kuantiti</th>
        <th>Jumlah</th>
    </tr>

    <?php foreach ($inv['items'] as $item): ?>
        <tr>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['saiz'] ?></td>
            <td><?= $item['qty'] ?></td>
            <td><?= $item['jumlah'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Total: RM <?= $inv['total'] ?></h3>