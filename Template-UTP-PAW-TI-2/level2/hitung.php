<?php
$ukuran = $_POST["ukuran"];
$warna = $_POST["warna"];
$halaman = $_POST["halaman"];
$rangkap = $_POST["rangkap"];

$tarif = 0;
$total = 0;
$valid = false;
$pesan = "Perhitungan belum dibuat.";

// Kerjakan Level 2 di sini
    //die(var_dump($ukuran, $warna, $halaman, $rangkap));
    if($ukuran == "A4") {
        if($warna == "Hitam Putih"){
            $tarif = 500;
        } else {
            $tarif = 1500;
        }
    } else {
        if($warna == "Hitam Putih") {
            $tarif = 700;
        } else {
            $tarif = 1800;
        }
    }
    $valid = true;
// ....

if ($valid) {
    $total = $tarif * $halaman * $rangkap;
}
