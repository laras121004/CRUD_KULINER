<?php
// Include konfigurasi database
include "includes/config.php";

// Ambil ID dari query string
$id = $_GET['id'];

// Buat query untuk menghapus data
$query = "DELETE FROM tbl_makanan WHERE id_makanan = $id";
$sql = mysqli_query($conn, $query);

// Periksa apakah query berhasil
if ($sql) {
    echo "<script>
        alert('Data berhasil dihapus!');
        window.location = '?page=makanan';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus!');
        window.location = '?page=makanan';
    </script>";
}
?>