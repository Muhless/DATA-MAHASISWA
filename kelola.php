<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD dengan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9be1b4beee.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- body -->
        <div class="card mt-3">
            <div class="card-body mt-2">
                <h5 class="card-title">Data Mahasiswa Kelas B1-B2</h5>
                <!-- <a href="kelola.php" class="btn btn-primary mt-3">
                        <i class="fa-solid fa-plus"></i>
                        Tambah Data</a> -->
            </div>
        </div>
    </div>



    <form action="proses.php" method="POST">
        <div class="container mt-4">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Silahkan ketikkan NIM anda">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Silahkan ketikkan nama anda">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="kelamin" name="kelamin">
                        <option selected>-Jenis Kelamin-</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <div class="mb-3">
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat" name="alamat" placeholder="Silahkan ketikkan alamat anda" rows="3"></textarea>
                </div>
            </div>

            <div>
                <?php
                if (isset($_GET['ubah'])) {

                ?>
                    <button type="submit" type="button" name="aksi" value="edit" class="btn btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan Perubahan
                    </button>
                <?php
                } else {
                ?>
                    <button type="submit" type="button" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Tambahkan Data
                    </button>
                <?php
                }
                ?>

                <a href="index.php" type="button" class="btn btn-danger">
                    <i class="fa-solid fa-reply"></i>
                    Batal
                </a>
            </div>

        </div>
    </form>
</body>

</html>