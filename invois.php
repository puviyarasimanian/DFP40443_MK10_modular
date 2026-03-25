<?php
if(!isset($_SESSION['invois'])){
echo "<script>alert('Tiada tempahan');window.location='index.php?menu=tempah';</script>";
exit();
}

$data=$_SESSION['invois'];
?>

<h1 class="page-title">Invois</h1>

<p><?= $data['nama'] ?></p>

<table class="invoice-table">
<tr><th>Produk</th><th>Saiz</th><th>Qty</th><th>Jumlah</th></tr>

<?php foreach($data['items'] as $item): ?>
<tr>
<td><?= $item['nama'] ?></td>
<td><?= $item['saiz'] ?></td>
<td><?= $item['qty'] ?></td>
<td>RM <?= number_format($item['jumlah'],2) ?></td>
</tr>
<?php endforeach; ?>

<tr>
<td colspan="3">Jumlah Besar</td>
<td>RM <?= number_format($data['total'],2) ?></td>
</tr>
</table>

<button onclick="window.print()">Cetak</button>