<?php
include "koneksi.php";

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == 'add') {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];


        $query = "INSERT INTO kelas_b VALUES(null, '$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: index.php");
        } else {
            echo "$query";
        }
    }
} 





// hapus data
if  (isset($_GET['hapus'])){
    $id_siswa = $_GET['hapus'];
    $query = "DELETE FROM kelas_b WHERE kelas_b = '$id_siswa';";

    $sql = mysqli_query($conn, $query);

    if ($sql){
        header("location: index.php");
    } else {
        echo "$query";
    }
} 
