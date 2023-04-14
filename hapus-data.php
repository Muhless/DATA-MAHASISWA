<?php
include "config/app.php";

$id_siswa = (int) $_GET['id_siswa'];

if(delete_data($id_siswa) > 0 ){
    echo "<script>
    alert('Data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
} else {
echo "<script>
    alert('Data gagal dihapus');
    document.location.href = 'index.php';
    </script>";
}
?>