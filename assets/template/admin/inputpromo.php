<?php
include('assets/template/koneksi.php');

if (isset($_POST['bsimpan'])) {
    $tkode_promo = $_POST['ikodepromo'];
    $tnamamenu = $_POST['inamamenu'];
    $tjumlahpromo = $_POST['ijumlahpromo'];

    //data akan disimpan baru
    $simpan = mysqli_query($koneksi_ke_db, "INSERT INTO tbl_promo (kode_promo, namamenu, jumlah_potongan) Values('$tkode_promo','$tnamamenu','$tjumlahpromo')");
    if ($simpan) {
        echo "<script>
        alert('Simpan Data Sukses');
        header(location:http://localhost/food-market/assets/template/admin/inputmenu.php);
        </script>";
    } else {
        echo "<script>
        alert('Simpan Data Gagal');
        header(location:http://localhost/food-market/assets/template/admin/inputmenu.php);
        </script>";
    }
}

?>
<div class="container" style="margin-bottom: 35em;">
    <div class="row custom-menu1">
        <div class="col-12 col-4">
            <h1>Healthy Food Restaurant</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 35em;">
    <div class="card">
        <div class="card-header">
            Form Input Data
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Promo</label>
                    <input type="text" name="ikodepromo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kode Promo">
                </div>
                <div class="form-group">
                    <label>Nama Menu</label>
                    <select class="form-control" name="inamamenu">
                        <option selected>Nama Menu</option>
                        <?php
                        $tamp = "select * from daftarmenu";

                        $hasil = mysqli_query($koneksi_ke_db, $tamp);
                        $no = 0;
                        while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                        ?>
                            <option value="<?php echo $data['namamenu']; ?>"><?php echo $data['namamenu']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah promo</label>
                    <input type="text" name="ijumlahpromo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Promo">
                </div>
                <button type="submit" class="btn btn-primary" name="bsimpan">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Table Promo
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Kode Promo</th>
                    <th>Nama Menu</th>
                    <th>Jumlah Potongan Promo</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                $tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM tbl_promo order by kode_promo desc");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['kode_promo'] ?></td>
                        <td><?php echo $data['namamenu'] ?></td>
                        <td><?php echo $data['jumlah_potongan'] ?></td>
                        <td>
                            <a href="?page=editpromo&kode_promo=<?php echo $data['kode_promo'] ?>" class="btn btn-primary">Edit</a>
                            <a href="?page=hapuspromo&kode_promo=<?php echo $data['kode_promo'] ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</div>
<div class="custom-footer">
    <img src="assets/img/ft.png" class="img-fluid" alt="">
    <div class="container teks" style="margin-top: -15em;">
        <div class="row" style="color:white;">
            <div class="col-6">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quae magni, cumque harum dolore dolores, odio autem natus necessitatibus asperiores ipsa dolorum! Aspernatur sed soluta illum nostrum ut debitis sunt.</p>
                <p></p>
            </div>
            <div class="col-2 text-center">
                <h2>About</h2>
                <p>Team <br> join Us <br> Ethic <br> Goals</p>
            </div>
            <div class="col-2 text-center">
                <h2>About</h2>
                <p>Team <br> join Us <br> Ethic <br> Goals</p>
            </div>
            <div class=" col-2 text-center">
                <h2>About</h2>
                <p>Team <br> join Us <br> Ethic <br> Goals</p>
            </div>
        </div>
    </div>
</div>