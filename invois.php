<?php

if(!isset($_SESSION['invois_data'])){
echo "Belum ada tempahan.";
return;
}

$invois = $_SESSION['invois_data'];

?>

<h1>Invois</h1>

<p>Nama: <?php echo $invois['nama_pelanggan']; ?></p>
<p>No Invois: <?php echo $invois['no_invois']; ?></p>