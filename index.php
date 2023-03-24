<?php
include 'koneksi.php';

$no = 0;
$query = "SELECT * FROM `kelas_b`;";
$sql = mysqli_query($conn, $query);
?>


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
            <div class="card-body mt-2">
                <h5 class="card-title">Data Mahasiswa Kelas B1-B2</h5>
                <a href="kelola.php" class="btn btn-primary mt-3">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data</a>
            </div>
        </div>
        <!--  -->

        <!-- tabel -->
        <div>
            <div class="table-responsive mt-4">
                <table class="table align-middle table-bordered table-hover">
                    <thead>
                        <th>No.</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($result = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td>
                                    <center>
                                        <?php
                                        echo ++$no;
                                        ?>
                                    </center>
                                </td>
                                <td>
                                    <?php
                                    echo $result['nim'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['nama'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $result['jenis_kelamin']
                                    ?>
                                </td>
                                <td>
                                    <img src="img/
                                    <?php
                                    echo $result['foto']
                                    ?>" style="width: 50px">
                                </td>
                                <td>
                                    <?php
                                    echo $result['alamat']
                                    ?>
                                </td>
                                <td>
                                    <center>
                                        <a href="kelola.php?ubah=<?php echo $result['id_siswa'];
                                                                    ?>" type="button" class="btn btn-success"><i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="proses.php?hapus=<?php echo $result['id_siswa'];
                                                                    ?>" type=" button" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                        </a>
                                    </center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>