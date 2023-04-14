<?php
function select($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    $rows   = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// fungsi tambah data
function tambah_data($post)
{
    global $db;

    $nim            = strip_tags($post['nim']);
    $nama           = strip_tags($post['nama']);
    $jenis_kelamin  = strip_tags($post['jenis_kelamin']);
    $foto           = upload_file();
    $alamat         = strip_tags($post['alamat']);


    // check upload foto
    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO kelas_b VALUES (null, '$nim', '$nama', '$jenis_kelamin', '$foto', '$alamat');";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


// fungsi delete data
function delete_data($id_siswa){
    global $db;

    $query = "DELETE FROM kelas_b WHERE id_siswa = $id_siswa";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



// fungsi upload file
function upload_file()
{
    global $db;

    $namaFile           = $_FILES['foto']['name'];
    $ukuranFile         = $_FILES['foto']['size'];
    $error              = $_FILES['foto']['error'];
    $tmpname            = $_FILES['foto']['tmp_name'];

    // check file yang duipload
    $ekstensifileValid   = ['jpg', 'jpeg', 'png'];
    $ekstensifile        = explode('.', $namaFile);
    $ekstensifile        = strtolower(end($ekstensifile));

    // check format ekstensi file
    if (!in_array($ekstensifile, $ekstensifileValid)) {
        echo "<script>
            alert('Format File Tidak Valid');
            document.location.href = 'tambah-data.php';
            </script>";
        die();
    }

    // check ukuran file <2MB
    if ($ukuranFile > 2048000) {
        echo "<script>
                alert('File Melebihi Batas Maximum 2MB');
                document.location.href = 'tambah-data.php';
                </script>";
        die();
    }

    // generate nama file baru
    $namaFileBaru   = uniqid();
    $namaFileBaru   .= '.';
    $namaFileBaru   .= $ekstensifile;

    // pindahkan hasil upload ke folder
    move_uploaded_file($tmpname, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}
