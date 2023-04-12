<?php
$title = "Form Tambah Data";

include "layout/header.php";


if(isset($_POST['tambah'])){
    if (tambah_data($_POST) > 0 ){
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'index.php';
            </script>";
    }
}

?>

<div class="card container mt-2">
    <div class="card-body">
        <h5 class="card-title">Form Tambah Data</h5>
        <p class="card-text">Kelas B1-B2</p>
    </div>
</div>

<div class="container mt-2">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="container mt-2">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM anda..." required>
        </div>

        <div class="container mt-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="nama" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama anda..." required>
        </div>

        <div class="container mt-2">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" id="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin...</option>
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
            </select>
        </div>

        <div class="container mt-2">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" required>
        </div>

        <div class="container mt-2">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda..." required>
        </div>


        <div class="container mt-4">
            <a href="index.php" class="btn btn-danger" ><i class="fa-solid fa-delete-left"> Kembali</i></a>
            <button class="btn btn-primary" name="tambah" ><i class="fa-solid fa-plus"> Tambah</i></button>
        </div>
    </form>

</div>

<?php
include "layout/footer.php"
?>