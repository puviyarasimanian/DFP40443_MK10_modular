<?php
$data = [
    ['gambar'=>'kuih_semperit.png'],
    ['gambar'=>'biskut_mazola.png'],
    ['gambar'=>'buah_pinggang.jpg'],
    ['gambar'=>'tart_nanas.png'],
];
?>

<h1 class="page-title">Selamat Datang</h1>

<div class="gallery-row">
<?php foreach ($data as $produk): ?>
    <img src="gambar/<?= $produk['gambar'] ?>" class="gallery-thumb">
<?php endforeach; ?>
</div>

<div class="instructions-section">
<h3>Cara Membuat Tempahan</h3>
<p>
Klik Tempah → isi → tekan Teruskan → cetak invois.
</p>
</div>