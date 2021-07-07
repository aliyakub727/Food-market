<?php
include('assets/template/koneksi.php');
?>
<link rel="stylesheet" href="assets/css/main.css">
<div class="container">
    <div class="row custom-menu1">
        <div class="col-12 col-4">
            <h1>Healthy Food Restaurant</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </div>
    </div>
</div>

<div class="container-fluid " style="margin-top: 35em;">
    <div class="card">
        <div class="card-header">
            Table Promo
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Order Id</th>
                    <th>Nama Pengguna</th>
                    <th>Nama Menu</th>
                    <th>Jumlah Pesanan</th>
                    <th>Kode_promo</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                $tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM tbl_order order by order_id desc");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['order_id'] ?></td>
                        <td><?php echo $data['nama_pengguna'] ?></td>
                        <td><?php echo $data['namamenu'] ?></td>
                        <td><?php echo $data['jumlah_pesanan'] ?></td>
                        <td><?php echo $data['kode_promo'] ?></td>
                        <td><?php echo $data['total'] ?></td>
                        <td>
                            <a href="?page=dikirim&order_id=<?php echo $data['order_id'] ?>" onclick="return confirm('Apakah Yakin Pesanan sudah dikirim ?')" class="btn btn-danger">Dikirim</a>
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