<?php

include('assets/template/koneksi.php');
$tnamapengguna = $_POST['inama'];
$tusername = $_POST['iusername'];
$tpassword = $_POST['ipassword'];
$tnotelp = $_POST['inotelp'];
$level = "user";
$query = ("INSERT INTO pengguna Values('$tnamapengguna','$tusername','$tpassword','$tnotelp','$level')");
mysqli_query($koneksi_ke_db, $query);
if ($query) {
    header("location:http://localhost/food-market/");
}
