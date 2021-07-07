<?php
include('assets/template/koneksi.php');
$folder = "assets/template/admin/gambar/";
$filename = rand(0, 99) . basename($_FILES['gambar_produk']['name']);
$target_file = $folder . $filename;


//upload
if (move_uploaded_file($_FILES['gambar_produk']['tmp_name'], $target_file)) {
    //informasi

} else {
    //informasi
    echo "Mohon Maaf FIle terlalu besar";
}

$inamamenu = $_POST['namenu'];
$irincian = $_POST['deskrip'];
$iharga = $_POST['iharga'];
$koneksi_ke_db->query('UPDATE daftarmenu SET rincianmenu = "' . $irincian . '", harga = "' . $iharga . '", gambar = "' . $filename . '" WHERE namamenu = "' . $inamamenu . '"');
header("location:http://localhost/food-market/dashboardadmin.php?page=inputmenu");
