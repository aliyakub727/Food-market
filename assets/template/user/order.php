<div class="container">
    <div class="row custom-menu1">
        <div class="col-12 col-4">
            <h1>Healthy Food Restaurant</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </div>
    </div>
</div>
<div class="container custom-populermenu">
    <h1>Popular Menu</h1>
    <div class="row" id="load_data">
        <?php
        include('assets/template/koneksi.php');
        $query = "SELECT * FROM daftarmenu ORDER BY namamenu ASC";
        $dewan1 = $koneksi_ke_db->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        while ($row = $res1->fetch_assoc()) {
            $tnamamenu = $row["namamenu"];
            $tfoto = $row["gambar"];
            $tharga = $row["harga"];
            if (strlen($tnamamenu) > 60) {
                $judul = substr($tnamamenu, 0, 60) . "...";
            }
            $trincian = $row["rincianmenu"];
            if (strlen($trincian) > 100) {
                $deskripsi = substr($trincian, 0, 100) . "...";
            }
        ?>
            <div class="col-sm-3">
                <div class="card" style="margin-top: 1em;">
                    <img class="card-img-top" src="assets/template/admin/gambar/<?php echo $tfoto ?>" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $tnamamenu ?></h2>
                        <p class="card-text"><?php echo $trincian ?></p>
                        <h5 class="card-text">Rp. <?php echo $tharga ?></h5>
                        <a href="?page=pesan&nama=<?php echo $tnamamenu ?>" class="btn btn-primary">Beli</a>
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