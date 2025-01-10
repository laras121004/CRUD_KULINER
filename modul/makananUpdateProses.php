<?php
// Skrip Proses Update

// Cek apakah tombol update sudah diklik
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $input_nama_makanan = inputData($_POST['nama_makanan']);
    $input_daerah_makanan = inputData($_POST['daerah_makanan']);
    $nama_makanan = mysqli_real_escape_string($conn, $input_nama_makanan);
    $daerah_makanan = mysqli_real_escape_string($conn, $input_daerah_makanan);

    // Validasi field nama makanan
    if (empty($nama_makanan)) {
        echo "<script>
            alert('Field Nama Makanan is required!');
            window.location = '?page=makanan';
        </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_makanan)) {
        echo "<script>
            alert('Only letters and white space are allowed for Nama Makanan!');
            window.location = '?page=makanan';
        </script>";
    } elseif (empty($daerah_makanan)) {
        // Validasi field daerah makanan
        echo "<script>
            alert('Field Daerah Makanan is required!');
            window.location = '?page=makanan';
        </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_makanan)) {
        echo "<script>
            alert('Only letters and white space are allowed for Daerah Makanan!');
            window.location = '?page=makanan';
        </script>";
    } else {
        // Update data
        $query = "UPDATE tbl_makanan 
                  SET nama_makanan = '$nama_makanan', daerah_makanan = '$daerah_makanan' 
                  WHERE id_makanan = '$id'";
        $sql = mysqli_query($conn, $query);

        // Periksa apakah proses update berhasil
        if ($sql) {
            echo "<script>
                alert('Data berhasil diupdate!');
                window.location = '?page=makanan';
            </script>";
        } else {
            echo "<script>
                alert('Gagal update data!');
                window.location = '?page=makanan';
            </script>";
        }
    }
}