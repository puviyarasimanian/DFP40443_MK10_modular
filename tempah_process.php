<?php
session_start();
include "data.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars(trim($_POST['nama_pelanggan']));
    $tempahan = $_POST['tempahan'] ?? [];

    $items = [];
    $jumlah_besar = 0;

    foreach ($tempahan as $produk_id => $saiz_list) {

        foreach ($data as $produk) {

            if ($produk['id'] == $produk_id) {

                foreach ($saiz_list as $saiz => $kuantiti) {

                    $kuantiti = (int)$kuantiti;

                    if ($kuantiti > 0) {

                        $harga = $produk['harga'][$saiz];
                        $jumlah = $harga * $kuantiti;

                        $items[] = [
                            'nama_produk' => $produk['nama'],
                            'saiz' => $saiz,
                            'kuantiti' => $kuantiti,
                            'harga' => $harga,
                            'jumlah' => $jumlah
                        ];

                        $jumlah_besar += $jumlah;
                    }
                }
            }
        }
    }

    // VALIDATION
    if ($jumlah_besar == 0) {
        echo "<script>alert('Sila pilih sekurang-kurangnya satu produk'); window.location='index.php?menu=tempah';</script>";
        exit();
    }

    $_SESSION['invois_data'] = [
        'nama' => $nama,
        'items' => $items,
        'jumlah_besar' => $jumlah_besar
    ];

    header("Location: index.php?menu=invois");
    exit();
}
?>