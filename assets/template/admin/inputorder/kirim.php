<?php
include('assets/template/koneksi.php');
//persiapan hapus data
$hapus = mysqli_query($koneksi_ke_db, "DELETE FROM tbl_order WHERE order_id = '$_GET[order_id]'");
if ($hapus) {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputorder");
} else {
    header("location:http://localhost/food-market/dashboardadmin.php?page=inputorder");
}
