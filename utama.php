<?php include "data.php"; ?>

<h1>Selamat Datang</h1>

<div style="display:flex; gap:20px;">
    <?php foreach ($data as $produk): ?>
        <div>
            <img src="gambar/<?= $produk['gambar'] ?>" width="120">
            <p><?= $produk['nama'] ?></p>
        </div>
    <?php endforeach; ?>
</div>