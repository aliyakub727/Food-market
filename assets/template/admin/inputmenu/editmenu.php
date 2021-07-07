<?php
include('assets/template/koneksi.php');
$tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM daftarmenu WHERE namamenu = '$_GET[nama]'");
$data = mysqli_fetch_array($tampil);
if ($data) {
    //menampung data
    $vnamamenu = $data['namamenu'];
    $vrincian = $data['rincianmenu'];
    $vharga = $data['harga'];
    $vgambar = $data['gambar'];
}


?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Form Input Data
        </div>
        <div class="card-body">
            <form method="POST" action="?page=actionedit" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Menu</label>
                    <input type="text" name="namenu" value="<?php echo $vnamamenu ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea type="text" name="deskrip" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $vrincian ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="iharga" value="<?php echo $vharga ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Masukan Gambar makanan</label>
                    <input type="file" value="<?php echo $vgambar ?>" name="gambar_produk" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
            </form>
        </div>
    </div>
</div>