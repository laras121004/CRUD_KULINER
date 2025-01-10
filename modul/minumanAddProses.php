<?php
// Check if the submit button has been clicked
if (isset($_POST['submit'])) {
    // Get and sanitize input data
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // Validate drink name field
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>
            window.alert('Field is required');
            window.location='?page=minumanAdd';
        </script>";
    } 
    elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($nama_minuman))) {
        echo "<script>
            window.alert('Only letters and white space allowed');
            window.location='?page=minumanAdd';
        </script>";
    }
    // Validate region field
    elseif (empty($daerah_minuman) || strlen(($daerah_minuman)) == 0) {
        echo "<script>
            window.alert('Field is required');
            window.location='?page=minumanAdd';
        </script>";
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($daerah_minuman))) {
        echo "<script>
            window.alert('Only letters and white space allowed');
            window.location='?page=minumanAdd';
        </script>";
    }
    else {
        // Check for duplicate data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman='$nama_minuman'"));
        
        if ($cek > 0) {
            echo "<script>
                window.alert('Data sudah tersedia');
                window.location='?page=minumanAdd';
            </script>";
        } 
        else {
            // Create and execute query
            $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) 
                     VALUES ('$nama_minuman', '$daerah_minuman')";
            $sql = mysqli_query($conn, $query);

            // Check if data was successfully saved
            if ($sql) {
                echo "<script>
                    window.alert('Data berhasil ditambah!');
                    window.location='?page=minuman';
                </script>";
            } 
            else {
                echo "<script>
                    window.alert('Gagal menambah data!');
                    window.location='?page=minuman';
                </script>";
            }
        }
    }
}