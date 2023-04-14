<?php
$title = "Form Edit Data";

include "layout/header.php";

$id_siswa   = (int) $_GET['id_siswa'];
$siswa      = select("SELECT * FROM kelas_b WHERE id_siswa = $id_siswa")[0];
?>

<div class="card container mt-2">
    <div class="card-body">
        <h5 class="card-title">Form Edit Data</h5>
        <p class="card-text">Kelas B1-B2</p>
    </div>
</div>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" id="id_siswa" value="<?= $siswa['id_siswa']; ?>">

        <div class="container mt-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $siswa['nim'] ?>">
        </div>

        <div class="container mt-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ?>">
        </div>

        <div class="container mt-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
                <option value="Laki-Laki"<?= $jenis_kelamin == 'Laki-Laki' ? 'selected' : null ?>>Laki-Laki</option>
                <option value="Perempuan"<?= $jenis_kelamin == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
            </select>
        </div>

        <div class="container mt-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" value="<?= $siswa['foto'] ?>" onchange="previewImg()">

            <img src="assets/img/<?= $siswa['foto']; ?>" alt="" style="width: 10%;" class="img-thumbnail img-preview mt-2">
        </div>

        <div class="container mt-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat'] ?>">
        </div>

<div class="container mt-3 mb-5">
    <button class="btn btn-success">Edit</button>
</div>

    </form>
</div>

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');

        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function(e){
            imgPreview.src = e.target.result;
        }
    }
</script>

<?php
include "layout/footer.php";
?>