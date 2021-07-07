<?php
include('assets/template/koneksi.php');
//persiapan hapus data
$hapus = mysqli_query($koneksi_ke_db, "DELETE FROM tbl_promo WHERE kode_promo = '$_GET[kode_promo]'");
if ($hapus) {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputpromo");
} else {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputpromo");
}
