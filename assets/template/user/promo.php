<div class="container">
    <div class="row custom-menu1">
        <div class="col-12 col-4">
            <h1>Healthy Food Restaurant</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </div>
    </div>
</div>
<div class="container custom-populermenu">
    <h1>Kode Promo</h1>
    <div class="row" id="load_data">
        <?php
        include('assets/template/koneksi.php');
        $query = "SELECT * FROM tbl_promo ORDER BY kode_promo ASC";
        $dewan1 = $koneksi_ke_db->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        while ($row = $res1->fetch_assoc()) {
            $tkode_promo = $row["kode_promo"];
            $tnamamenu = $row["namamenu"];
            $tjumlah = $row["jumlah_potongan"];
            if (strlen($tkode_promo) > 20) {
                $judul = substr($tkode_promo, 0, 20) . "...";
            }
        ?>
            <div class="col-sm-4">
                <div class="card" style="margin-top: 1em;">
                    <div class="card-body text-center">
                        <h2 class="card-title"><?php echo $tkode_promo ?></h2>
                        <p class="card-text"><?php echo $tnamamenu ?></p>
                        <h5 class="card-text">Rp. <?php echo $tjumlah ?></h5>
                    </div>
                </div>
            </div>
        <?php } ?>
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