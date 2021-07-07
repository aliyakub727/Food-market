<?php

include('assets/template/koneksi.php');
$tnamamenu = $_POST['namenu'];
$tharga = $_POST['iharga'];
$tjumlahpesanan = $_POST['ijumlahpesanan'];
$tkodepromo = $_POST['ikodepromo'];
$ttotal = $_POST['itotal'];
$torder_id = $_POST['orderid'];
$tnamapengguna =  $_SESSION['username'];
$query = ("INSERT INTO tbl_order Values('$torder_id','$tnamapengguna','$tnamamenu','$tharga','$tjumlahpesanan','$tkodepromo','$ttotal')");
mysqli_query($koneksi_ke_db, $query);
if ($query) {
    header("location:http://localhost/food-market/dashboarduser.php?page=order");
}
