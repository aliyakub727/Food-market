<?php
include('assets/template/koneksi.php');
//persiapan hapus data
$hapus = mysqli_query($koneksi_ke_db, "DELETE FROM pengguna WHERE username = '$_GET[akun]'");
if ($hapus) {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputakun");
} else {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputakun");
}
