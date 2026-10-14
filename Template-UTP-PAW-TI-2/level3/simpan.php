<?php
session_start();
$_SESSION["ukuran"] = $_POST["ukuran"];
$_SESSION["warna"] = $_POST["warna"];
$_SESSION["halaman"] = $_POST["halaman"];
$_SESSION["rangkap"] = $_POST["rangkap"];
$_SESSION["tarif"] = $tarif;
$_SESSION["total"] = $total;

//die(var_dump($_SESSION));
// Kerjakan Level 3: simpan ringkasan