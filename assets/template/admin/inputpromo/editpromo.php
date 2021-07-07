<?php
include('assets/template/koneksi.php');
$tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM tbl_promo WHERE kode_promo = '$_GET[kode_promo]'");
$data = mysqli_fetch_array($tampil);
if ($data) {
    //menampung data
    $vkode_promo = $data['kode_promo'];
    $vnamamenu = $data['namamenu'];
    $vpotongan = $data['jumlah_potongan'];
}


?>
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Form Input Data
        </div>
        <div class="card-body">
            <form method="POST" action="?page=actioneditpromo" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Promo</label>
                    <input type="text" name="ikodepromo" value="<?php echo $vkode_promo ?>" class="form-control" placeholder="Masukkan Kode Promo">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Menu</label>
                    <select class="form-control" name="inamamenu">
                        <option selected value="<?php echo $vnamamenu ?>"><?php echo $vnamamenu ?></option>
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
                    <input name="ijumlahpromo" value="<?php echo $vpotongan ?>" class=" form-control" placeholder="Masukkan Jumlah Promo">
                </div>
                <button type="submit" class="btn btn-primary" name="bsimpan">Submit</button>
            </form>
        </div>
    </div>
</div>