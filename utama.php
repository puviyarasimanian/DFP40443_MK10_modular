<?php
include "data.php";
?>

<h1>Selamat Datang</h1>

<div class="gallery-row">

<?php foreach($data as $produk): ?>

<img src="gambar/<?php echo $produk['gambar']; ?>" width="150">

<?php endforeach; ?>

</div>