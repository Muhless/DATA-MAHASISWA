<?php
include "koneksi.php";

if (isset($_POST['aksi'])) {

    // untuk tambah data
    if ($_POST['aksi'] == 'add') {

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelamin = $_POST['jenis_kelamin'];
        $foto = $_FILES['foto']['name'];
        $alamat = $_POST['alamat'];

        $dir = "img/";
        $tmpfile = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmpfile, $dir . $foto);

        $query = "INSERT INTO kelas_b VALUES(null, '$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: index.php");
        } else {
            echo "$query";
        }




        // untuk edit data
    } else if ($_POST['aksi'] == "edit") {
        header("location : index.php");
    }
}





// hapus data
if (isset($_GET['hapus'])) {
    $id_siswa = $_GET['hapus'];

    $queryShow = "SELECT * FROM kelas_b WHERE id_siswa = '$id_siswa';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("img/".$result['foto']);

    $query = "DELETE FROM kelas_b WHERE id_siswa = '$id_siswa';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
    } else {
        echo $query;
    }
}
