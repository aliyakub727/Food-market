<?php
include('assets/template/koneksi.php');

$tkode_promo = $_POST['ikodepromo'];
$tnamamenu = $_POST['inamamenu'];
$tjumlahpromo = $_POST['ijumlahpromo'];
$koneksi_ke_db->query('UPDATE tbl_promo SET namamenu= "' . $tnamamenu . '", jumlah_potongan = "' . $tjumlahpromo . '" WHERE kode_promo = "' . $tkode_promo . '"');
header("location:http://localhost/food-market/dashboardadmin.php?page=inputpromo");
