<?php
include "koneksi.php";

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == 'add') {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $kelamin = $_POST['kelamin'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];


        $query = "INSERT INTO kelas_b VALUES(null, '$nisn', '$nama', '$kelamin', '$jurusan', '$alamat')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location : index.php");
        } else {
            echo "$query";
        }
    }
}
