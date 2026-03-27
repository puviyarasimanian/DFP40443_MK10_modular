<?php
session_start();

$menu = $_GET['menu'] ?? 'utama';

// DATA
$data = [
    [
        'id' => 1,
        'nama' => 'Kuih Semperit',
        'gambar' => 'kuih_semperit.png',
        'harga' => ['pek_mini' => 2.00, 'kecil' => 17.00, 'besar' => 34.00]
    ],
    [
        'id' => 2,
        'nama' => 'Biskut Mazola',
        'gambar' => 'biskut_mazola.png',
        'harga' => ['pek_mini' => 2.00, 'kecil' => 20.00, 'besar' => 40.00]
    ],
    [
        'id' => 3,
        'nama' => 'Buah Pinggang',
        'gambar' => 'buah_pinggang.jpg',
        'harga' => ['pek_mini' => 2.00, 'kecil' => 22.00, 'besar' => 44.00]
    ],
    [
        'id' => 4,
        'nama' => 'Tart Nanas',
        'gambar' => 'tart_nanas.png',
        'harga' => ['pek_mini' => 2.00, 'kecil' => 25.00, 'besar' => 50.00]
    ],
];
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biskut Klasik</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Questrial&display=swap" rel="stylesheet">

    <!-- ✅ EXTERNAL CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="page-body">

<div class="container">

    <!-- HEADER -->
    <div class="header-wrapper">
        <h2 class="site-title">Biskut Klasik</h2>

        <nav class="nav-menu">
            <a href="index.php?menu=utama" class="nav-link <?= ($menu=='utama')?'active':'' ?>">Utama</a>
            <a href="index.php?menu=tempah" class="nav-link <?= ($menu=='tempah')?'active':'' ?>">Tempah</a>
            <a href="index.php?menu=invois" class="nav-link <?= ($menu=='invois')?'active':'' ?>">Invois</a>
        </nav>
    </div>

    <!-- CONTENT -->
    <?php
    switch ($menu) {

        case "utama":
            include "utama.php";
            break;

        case "tempah":
            include "tempah.php";
            break;

        case "invois":
            include "invois.php";
            break;

        default:
            echo "<h2>Menu tidak ditemukan</h2>";
    }
    ?>

</div>

<!-- FOOTER -->
<footer class="main-footer">
    &copy; 2026 Sabri bin Saep
</footer>

</body>
</html>