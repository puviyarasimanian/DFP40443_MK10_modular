<?php
if (!isset($_SESSION['invois'])) {
    echo "Tiada invois.";
    return;
}

$inv = $_SESSION['invois'];
?>

<h1>Invois</h1>

<p>Nama: <?= $inv['nama'] ?></p>

<table border="1" cellpadding="10">
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
    <td>RM <?= $item['jumlah'] ?></td>
</tr>
<?php endforeach; ?>

<tr>
    <td colspan="3"><strong>Total</strong></td>
    <td><strong>RM <?= $inv['total'] ?></strong></td>
</tr>
</table>