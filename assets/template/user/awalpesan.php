<?php
include('assets/template/koneksi.php');
$tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM daftarmenu WHERE namamenu = '$_GET[nama]'");
$data = mysqli_fetch_array($tampil);
if ($data) {
    //menampung data
    $vnamamenu = $data['namamenu'];
    $vrincian = $data['rincianmenu'];
    $vharga = $data['harga'];
}

?>
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Form Pesanan
        </div>
        <div class="card-body">
            <form method="POST" action="?page=cekpesanan" enctype="multipart/form-data">
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Nama Menu</label>
                    <input type="text" name="namenu" value="<?php echo $vnamamenu ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">

                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea type="text" name="deskrip" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $vrincian ?></textarea>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="iharga" value="<?php echo $vharga ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Jumlah Pesanan</label>
                    <input name="ijumlahpesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label>Kode Promo</label>
                    <select class="form-control" name="ikodepromo">
                        <option selected>Kode Promo</option>
                        <?php
                        $tamp = "select * from tbl_promo";

                        $hasil = mysqli_query($koneksi_ke_db, $tamp);
                        $no = 0;
                        while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                        ?>
                            <option value="<?php echo $data['kode_promo']; ?>"><?php echo $data['kode_promo']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" value="simpan" style="margin-top: 20px;">Submit</button>
            </form>
        </div>
    </div>
</div>