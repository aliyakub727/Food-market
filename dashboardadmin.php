<?php
session_start();
include('assets/template/koneksi.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Administrator - Makanan</title>
</head>

<body>
    <?php
    include('assets/template/menuadmin.php');
    if (empty($_GET['page']) || $_GET['page'] == 'admin') {
        include('assets/template/admin/admin.php');
    } else {

        switch ($_GET['page']) {
            case 'inputakun':
                include('assets/template/admin/inputakun.php');
                break;
            case 'hapusakun':
                include('assets/template/admin/actionhapusakun.php');
                break;
            case 'inputmenu':
                include('assets/template/admin/inputmenu.php');
                break;
            case 'edit':
                include('assets/template/admin/inputmenu/editmenu.php');
                break;
            case 'hapus':
                include('assets/template/admin/inputmenu/deletemenu.php');
                break;
            case 'actionedit':
                include('assets/template/admin/inputmenu/actionedit.php');
                break;
            case 'inputpromo':
                include('assets/template/admin/inputpromo.php');
                break;
            case 'editpromo':
                include('assets/template/admin/inputpromo/editpromo.php');
                break;
            case 'actioneditpromo':
                include('assets/template/admin/inputpromo/actioneditpromo.php');
                break;
            case 'hapuspromo':
                include('assets/template/admin/inputpromo/deletepromo.php');
                break;
            case 'inputorder':
                include('assets/template/admin/inputorder.php');
                break;
            case 'dikirim':
                include('assets/template/admin/inputorder/kirim.php');
                break;
            case 'logout':
                include('logout.php');
                break;
        }
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>