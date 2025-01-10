<?php
// Base URL untuk mempermudah navigasi antar halaman
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Web Ini</title>
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
        .card-body {
            padding: 2rem;
            margin: 1rem;
            border-radius: 8px;
            background-color: #FF73C7;
        }
        .card-title {
            color: #f1f1f1;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .btn-custom {
            background-color: rgb(30, 220, 109);
            color: white;
            padding: 0.8rem 2rem;
            font-size: 1rem;
        }
        .btn-custom:hover {
            background-color: #e64a19;
        }
        .footer {
            background-color: #1e1e1e;
            padding: 1rem;
            text-align: center;
            color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tentang Web Ini</h1>
        <div class="card mx-auto" style="max-width: 40rem;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Mari Jelajahi Dunia Kuliner Bersama Kami</h5>
                <p class="mb-3">Situs ini adalah tempat terbaik untuk menemukan beragam informasi tentang makanan dan minuman dari berbagai daerah. Tidak hanya itu, Anda juga dapat menjadi bagian dari komunitas kami dengan menambahkan kuliner favorit Anda ke dalam daftar kami.</p>
                <p class="mb-3">Fitur-fitur canggih seperti pencarian cepat, pengurutan data, dan manajemen kuliner membuat pengalaman Anda lebih praktis dan menyenangkan. Kami menggunakan teknologi modern agar Anda dapat menjelajah tanpa hambatan.</p>
                <div class="d-flex justify-content-center mt-4">
                    <!-- Tombol Kembali ke Beranda -->
                    <a href="<?= $base_url ?>views/home.php" class="btn btn-custom">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>