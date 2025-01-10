<?php
// Skrip Proses Update

// Cek apakah tombol update sudah diklik
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // Validasi field nama minuman
    if (empty($nama_minuman)) {
        echo "<script>
            alert('Field Nama Minuman is required!');
            window.location = '?page=minuman';
        </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) {
        echo "<script>
            alert('Only letters and white space are allowed for Nama Minuman!');
            window.location = '?page=minuman';
        </script>";
    } elseif (empty($daerah_minuman)) {
        // Validasi field daerah minuman
        echo "<script>
            alert('Field Daerah Minuman is required!');
            window.location = '?page=minuman';
        </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) {
        echo "<script>
            alert('Only letters and white space are allowed for Daerah Minuman!');
            window.location = '?page=minuman';
        </script>";
    } else {
        // Update data
        $query = "UPDATE tbl_minuman 
                  SET nama_minuman = '$nama_minuman', daerah_minuman = '$daerah_minuman' 
                  WHERE id_minuman = '$id'";
        $sql = mysqli_query($conn, $query);

        // Periksa apakah proses update berhasil
        if ($sql) {
            echo "<script>
                alert('Data berhasil diupdate!');
                window.location = '?page=minuman';
            </script>";
        } else {
            echo "<script>
                alert('Gagal update data!');
                window.location = '?page=minuman';
            </script>";
        }
    }
}