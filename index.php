<?php
session_start();

$menu = $_GET['menu'] ?? 'utama';

include "data.php";
include "header.php";

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
        echo "<h2 style='text-align:center;'>Menu tidak ditemukan</h2>";
}

include "footer.php";
?>