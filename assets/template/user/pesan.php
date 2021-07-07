<?php
include('assets/template/koneksi.php');
$tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM tbl_promo WHERE kode_promo = '$_POST[ikodepromo]'");
$data = mysqli_fetch_array($tampil);
if ($data) {
    //menampung data
    $jumlahpotongan = $data['jumlah_potongan'];
}

$namamenu = $_POST['namenu'];
$rincian = $_POST['deskrip'];
$harga = $_POST['iharga'];
$jumlahpesanan = $_POST['ijumlahpesanan'];
$kodepromo = $_POST['ikodepromo'];
$total =  ($harga  *  $jumlahpesanan) - $jumlahpotongan;
$order_id = base_convert(microtime(false), 10, 36);
?>
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Form Pesanan
        </div>
        <div class="card-body">
            <form method="POST" action="?page=memesan" enctype="multipart/form-data">
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Order_id</label>
                    <input type="text" name="orderid" value="<?php echo $order_id ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Nama Menu</label>
                    <input type="text" name="namenu" value="<?php echo $namamenu ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea type="text" name="deskrip" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $rincian ?></textarea>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="iharga" value="<?php echo $harga ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Jumlah Pesanan</label>
                    <input name="ijumlahpesanan" value="<?php echo $jumlahpesanan ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label>Kode Promo</label>
                    <select class="form-control" name="ikodepromo">
                        <option value="<?php echo $kodepromo ?>"><?php echo $kodepromo ?></option>

                    </select>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputEmail1">Total</label>
                    <input name="itotal" class="form-control" value="<?php echo $total ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <button type="submit" class="btn btn-primary" value="simpan" style="margin-top: 20px;">Submit</button>
            </form>
        </div>
    </div>
</div>