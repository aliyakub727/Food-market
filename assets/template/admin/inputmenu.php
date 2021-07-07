<?php
include('assets/template/koneksi.php');




//jika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
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

    //data akan disimpan baru
    $simpan = mysqli_query($koneksi_ke_db, "INSERT INTO daftarmenu (namamenu, rincianmenu, harga, gambar) Values('$_POST[namenu]','$_POST[deskrip]','$_POST[iharga]','$filename')");
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
<div class="container">
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
                    <label for="exampleInputEmail1">Nama Menu</label>
                    <input type="text" name="namenu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea type="text" name="deskrip" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="iharga" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Masukan Gambar makanan</label>
                    <input type="file" name="gambar_produk" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary" name="bsimpan">Submit</button>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card" style="margin-top: 2em;">
        <div class="card-header">
            Tabel Daftar Menu
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Nama Menu</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                $tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM daftarmenu order by namamenu desc");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['namamenu'] ?></td>
                        <td><?php echo $data['rincianmenu'] ?></td>
                        <td><?php echo $data['harga'] ?></td>
                        <td><?php echo $data['gambar'] ?></td>
                        <td>
                            <a href="?page=edit&nama=<?php echo $data['namamenu'] ?>" class="btn btn-primary">Edit</a>
                            <a href="?page=hapus&nama=<?php echo $data['namamenu'] ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</a>
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