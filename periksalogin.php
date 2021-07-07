<?php
session_start();
include('assets/template/koneksi.php');
$username = $_POST['u-name'];
$password = $_POST['pass'];
$login = mysqli_query($koneksi_ke_db, "select * from pengguna where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("Location:http://localhost/food-market/dashboardadmin.php");
    } else if ($data['level'] == "user") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        // alihkan ke halaman dashboard pegawai
        header("Location:http://localhost/food-market/dashboarduser.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }
}
