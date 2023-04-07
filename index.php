<?php

$title = "Data Mahasiswa";

include "layout/header.php";

$id_siswa = select("SELECT * FROM kelas_b");
?>

<div class="card container mt-2">
    <div class="card-body">
        <h5 class="card-title">Prodi Teknik Informatika</h5>
        <p class="card-text">Kelas B1-B2</p>
        <a href="tambah-data.php" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

<div class="container mt-3">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>No</th>          
            <th>NISN</th> 
            <th>Nama</th>          
            <th>Jenis Kelamin</th>          
            <th>Foto</th>          
            <th>Alamat</th>        
            <th>aksi</th>  
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($id_siswa as $siswa) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $siswa['nim']; ?></td>
                    <td><?= $siswa['nama']; ?></td>
                    <td><?= $siswa['jenis_kelamin']; ?></td>
                    <td><?= $siswa['foto']; ?></td>
                    <td><?= $siswa['alamat']; ?></td>
                    <td class="text-center" style="width:15%">
                        <a class="btn btn-success">Edit</a>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                    
                </tr>
            <?php endforeach;  ?>
        </tbody>
    </table>
</div>

<form action="" method="post">

</form>

<?php
include "layout/footer.php";
?>