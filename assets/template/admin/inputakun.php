<div class="container-fluid">
    <div class="card" style="margin-top: 2em;">
        <div class="card-header">
            Tabel Daftar Menu
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>No_telp</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                $tampil = mysqli_query($koneksi_ke_db, "SELECT * FROM pengguna order by username desc");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['username'] ?></td>
                        <td><?php echo $data['password'] ?></td>
                        <td><?php echo $data['no_telp'] ?></td>
                        <td><?php echo $data['level'] ?></td>
                        <td>
                            <a href="?page=hapusakun&akun=<?php echo $data['username'] ?>" onclick="return confirm('Apakah Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</div>