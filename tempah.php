<?php
include "data.php";
?>

<h1>Borang Tempahan</h1>

<form method="POST">

<?php foreach($data as $produk): ?>

<h3><?php echo $produk['nama']; ?></h3>

<?php foreach($produk['harga'] as $saiz => $harga): ?>

<label><?php echo $saiz; ?> (RM <?php echo $harga; ?>)</label>
<input type="number" name="tempahan[<?php echo $produk['id']; ?>][<?php echo $saiz; ?>]" value="0">

<br>

<?php endforeach; ?>

<?php endforeach; ?>

<br>
<input type="text" name="nama_pelanggan" placeholder="Nama pelanggan">

<button type="submit">Teruskan</button>

</form>