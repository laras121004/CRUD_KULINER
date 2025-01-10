<?php
require "includes/config.php";

// Ambil ID dari query string
$id = $_GET['id'];

// Buat query untuk mengambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan = $id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Food</title>
    <!-- Link to Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FCE1F5;
            color: #e0e0e0;
        }
        h1 {
            color: #FF73C7;
            font-weight: bold;
        }
        .card {
            background-color: #FF00D0;
            border: none;
            color: #ddd;
        }
        .card-title {
            color: #f1f1f1;
        }
        .form-control {
            background-color: #FFBCE4;
            color: #111111;
            border: 1px solid #444;
        }
        .form-control:focus {
            background-color: #FCE1F5;
            color: #fff;
            border-color: #555;
            box-shadow: none;
        }
        .btn-primary {
            background-color: rgb(89, 34, 255);
            border: none;
            color: white;
        }
        .btn-primary:hover {
            background-color: #e64a19;
        }
        .btn-danger {
            background-color: #d32f2f;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c62828;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Update Data Makanan</h1>
        <div class="card mx-auto" style="max-width: 40rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Edit Data Makanan</h5>
                <form method="post" action="?page=makananUpdateProses">
                    <!-- Menampung nilai ID yang akan di-edit -->
                    <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
                    <div class="mb-3">
                        <label for="namaMakanan" class="form-label d-block text-start">Nama Makanan</label>
                        <input type="text" id="namaMakanan" name="nama_makanan" class="form-control" value="<?= $data['nama_makanan'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="daerahMakanan" class="form-label d-block text-start">Asal Makanan</label>
                        <input type="text" id="daerahMakanan" name="daerah_makanan" class="form-control" value="<?= $data['daerah_makanan'] ?>" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="update" class="btn btn-primary me-2">Update</button>
                        <button type="button" class="btn btn-danger" onClick="document.location='?page=makanan'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>