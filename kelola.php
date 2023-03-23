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
    <form action="" method="$_POST">
        <div class="container">
            <!-- body -->
            <div class="card mt-3">
                <div class="card-header">
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand">Data Mahasiswa Universitas Muhammadiyah Tangerang</a>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Cari</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nim" placeholder="Silahkan ketikkan NIM anda">
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
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option selected>-Jurusan-</option>
                        <option value="teknik-informatika">Teknik Informatika</option>
                        <option value="teknik-industri">Teknik Industri</option>
                        <option value="teknik-mesin">Teknik Mesin</option>
                        <option value="teknik-elektro">Teknik Elektro</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat" name="alamat" placeholder="Silahkan ketikkan alamat anda" rows="3"></textarea>
                </div>
            </div>

            <a href="index.php" type="button" class="btn btn-primary">
                <i class="fa-solid fa-floppy-disk"></i>
                Simpan Perubahan
            </a>

            <a href="index.php" type="button" class="btn btn-danger">
                <i class="fa-solid fa-reply"></i>
                Batal
            </a>

        </div>
    </form>
</body>

</html>