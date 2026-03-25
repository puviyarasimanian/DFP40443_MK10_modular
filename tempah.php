<?php
$data = [
['id'=>1,'nama'=>'Kuih Semperit','gambar'=>'kuih_semperit.png','harga'=>['pek_mini'=>2,'kecil'=>17,'besar'=>34]],
['id'=>2,'nama'=>'Biskut Mazola','gambar'=>'biskut_mazola.png','harga'=>['pek_mini'=>2,'kecil'=>20,'besar'=>40]],
['id'=>3,'nama'=>'Buah Pinggang','gambar'=>'buah_pinggang.jpg','harga'=>['pek_mini'=>2,'kecil'=>22,'besar'=>44]],
['id'=>4,'nama'=>'Tart Nanas','gambar'=>'tart_nanas.png','harga'=>['pek_mini'=>2,'kecil'=>25,'besar'=>50]],
];

if($_SERVER["REQUEST_METHOD"]=="POST"){

$nama = htmlspecialchars($_POST['nama_pelanggan']);
$tempahan = $_POST['tempahan'];
$items=[];
$total=0;

foreach($tempahan as $id=>$sizes){
    foreach($sizes as $size=>$qty){
        if($qty>0){
            foreach($data as $p){
                if($p['id']==$id){
                    $price=$p['harga'][$size];
                    $jumlah=$price*$qty;

                    $items[]=[
                        'nama'=>$p['nama'],
                        'saiz'=>$size,
                        'qty'=>$qty,
                        'jumlah'=>$jumlah
                    ];

                    $total+=$jumlah;
                }
            }
        }
    }
}

if($total==0){
echo "<script>alert('Pilih sekurang-kurangnya satu');window.location='index.php?menu=tempah';</script>";
exit();
}

$_SESSION['invois']=[
'nama'=>$nama,
'items'=>$items,
'total'=>$total
];

header("Location:index.php?menu=invois");
exit();
}
?>

<h1 class="page-title">Borang Tempahan</h1>

<form method="POST">

<div class="product-grid">
<?php foreach($data as $p): ?>
<div class="product-card">
<img src="gambar/<?= $p['gambar'] ?>" class="product-image">
<h3><?= $p['nama'] ?></h3>

<?php foreach($p['harga'] as $s=>$h): ?>
<?= $s ?> (RM<?= $h ?>)
<input type="number" name="tempahan[<?= $p['id'] ?>][<?= $s ?>]" value="0" class="qty-input" data-price="<?= $h ?>"><br>
<?php endforeach; ?>

</div>
<?php endforeach; ?>
</div>

<input type="text" name="nama_pelanggan" placeholder="Nama" required>

<h2 id="total-price">RM 0.00</h2>

<button type="submit">Teruskan</button>
</form>