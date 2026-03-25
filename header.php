<?php 
$menu = $_GET['menu'] ?? 'utama'; 
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biskut Klasik</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Questrial&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="page-body">
    <div class="container">

        <!-- HEADER -->
        <div class="header-wrapper">
            <h2 class="site-title">Biskut Klasik</h2>

            <nav class="nav-menu">
                <a href="index.php?menu=utama" 
                   class="nav-link <?= ($menu == 'utama') ? 'active' : '' ?>">
                   Utama
                </a>

                <a href="index.php?menu=tempah" 
                   class="nav-link <?= ($menu == 'tempah') ? 'active' : '' ?>">
                   Tempah
                </a>

                <a href="index.php?menu=invois" 
                   class="nav-link <?= ($menu == 'invois') ? 'active' : '' ?>">
                   Invois
                </a>
            </nav>
        </div>