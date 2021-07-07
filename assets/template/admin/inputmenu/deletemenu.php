<?php
include('assets/template/koneksi.php');
//persiapan hapus data
$hapus = mysqli_query($koneksi_ke_db, "DELETE FROM daftarmenu WHERE namamenu = '$_GET[nama]'");
if ($hapus) {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputmenu");
} else {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputmenu");
}
