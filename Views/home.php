<?php
// Include konfigurasi database
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link to Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #FCE1F5, #FCE1F5); /* Gradasi latar belakang */
            color: #e0e0e0;
        }
        h1 {
            color: #FFA1D9;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Efek teks */
        }
        h2 {
            color: #FFA1D9;
            font-weight: 500;
        }
        h3 {
            color: #FF73C7;
        }
        p {
            color: #FFA1D9;
        }
        .card {
            background-color: rgba(31, 31, 31, 0.9); /* Transparansi untuk card */
            border: none;
            color: #ddd;
            margin-bottom: 2rem;
            border-radius: 12px; /* Menghaluskan sudut */
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px); /* Efek hover card */
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
        }
        .card-body {
            padding: 2.5rem 2rem;
            border-radius: 12px;
            background-color: #E4E0E1;
            text-align: center; /* Latar belakang gradasi pada card body */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3); /* Bayangan lembut pada card body */
        }
        .card-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #FE87CE; /* Warna judul emas */
        }
        .card-text {
            font-size: 1.1rem;
            color: #1A1A19;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .btn-custom {
            background-color: #F0BB78;
            color: rgb(0, 0, 0);
            padding: 1.2rem 3rem;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #FFA1D9;
            transform: scale(1.1); /* Efek zoom tombol saat di hover */
        }
        .d-flex {
            justify-content: space-evenly;
        }
        .footer {
            background-color: #FCE1F5;
            padding: 1.5rem;
            text-align: center;
            color: #bbb;
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
        }
        .footer p {
            margin: 0;
            letter-spacing: 1px;
        }
        /* Menambahkan gaya untuk bingkai pada gambar */
        .carousel-item img {
            height: 250px; /* Menyesuaikan tinggi gambar */
            width: auto;
            object-fit: cover;
            border: 5px solid #F0BB78; /* Bingkai gambar */
            border-radius: 10px; /* Menambahkan sudut melengkung pada bingkai */
        }
    </style>
</head>
<body>
    <div class="container mt-7">
        <!-- Menambahkan konten tambahan untuk menyambut pengguna -->
        <h1 class="text-center mb-3">Selamat Datang di Website Kami!</h1>
        <h2 class="text-center mb-5">Laper atau Haus? Yuk, Cek di Sini!</h2>

        <div class="row mt-3">
        <div class="col-md-3">
            <img src="assets/Foto/download.jpeg" alt="Artikel Terbaru" class="img-fluid mb-3">
            <h3>Rendang</h3>
            <p>Rendang adalah masakan khas Minangkabau, Sumatra Barat, yang terbuat dari daging sapi dimasak dengan santan dan rempah-rempah. Rasanya pedas, gurih, dan kaya bumbu.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/download (1).jpeg" alt="Program Edukasi" class="img-fluid mb-3">
            <h3>Mie Ayam</h3>
            <p>Mie ayam adalah mie dengan potongan ayam, disajikan dengan kuah kaldu dan bumbu khas.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/Nasi Goreng illustration Indonesian food with cartoon style.jpeg" alt="Komunitas" class="img-fluid mb-3">
            <h3>Nasi Goreng</h3>
            <p>Nasi goreng adalah nasi yang digoreng dengan bumbu seperti bawang, kecap manis, dan cabai. Sering ditambah telur, ayam, atau udang.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/RAWON soup traditional food Indonesia.jpeg" alt="Komunitas" class="img-fluid mb-3">
            <h3>Rawon</h3>
            <p>Rawon adalah sup daging sapi khas Jawa Timur, berkuah hitam karena menggunakan kluwek, dengan rasa gurih dan sedikit pedas.</p>
        </div>
    </div>
</div>

<div class="row mt-4">
        <div class="col-md-3">
            <img src="assets/Foto/Cilok illustration Indonesian food with cartoon style.jpeg" alt="Artikel Terbaru" class="img-fluid mb-3">
            <h3>Cilok</h3>
            <p>Cilok adalah makanan khas Indonesia yang terbuat dari tepung tapioka, dibentuk bulat, dan direbus. Biasanya disajikan dengan sambal kacang atau saus pedas.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/Premium Vector _ Kue serabi traditional snacks from indonesia.jpeg" alt="Program Edukasi" class="img-fluid mb-3">
            <h3>Kue Serabi</h3>
            <p>Kue serabi berasal dari Jawa Barat, Indonesia. Kue ini populer di daerah seperti Bandung dan sekitarnya.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/Premium Vector _ Dadar gulung hand drawn indonesian food illustrated.jpeg" alt="Komunitas" class="img-fluid mb-3">
            <h3>Dadar Gulung</h3>
            <p>Dadar gulung berasal dari Indonesia, terutama populer di Jawa. Kue ini terbuat dari adonan tepung yang digulung dengan isi kelapa parut manis.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/Premium Vector _ Pempek indonesian food cartoon flat design style.jpeg" alt="Komunitas" class="img-fluid mb-3">
            <h3>Pempek</h3>
            <p>Pempek adalah makanan khas Palembang, Sumatra Selatan, yang terbuat dari ikan dan tepung sagu. Biasanya disajikan dengan kuah cuka pedas manis.</p>
        </div>
    </div>
</div>

<div class="row mt-4">
        <div class="col-md-3">
            <img src="assets/Foto/Ilustrasi es buah.jpeg" alt="Artikel Terbaru" class="img-fluid mb-3">
            <h3>Es Buah</h3>
            <p>Es buah berasal dari Indonesia, populer sebagai hidangan penyegar di cuaca panas.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/download (2).jpeg" alt="Program Edukasi" class="img-fluid mb-3">
            <h3>Es Doger</h3>
            <p>Bergabunglah dengan program edukasi kami dan tingkatkan keterampilan Anda di bidang yang Anda minati.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/cendol.jpeg" alt="Komunitas" class="img-fluid mb-3">
            <h3>Es Cendol</h3>
            <p>Es doger berasal dari Jakarta, Indonesia. Minuman ini terbuat dari es serut, kelapa muda, ketan hitam, dan susu kental manis, biasanya diberi topping seperti roti atau tape ketan.</p>
        </div>
        <div class="col-md-3">
            <img src="assets/Foto/Ronde.jpeg" alt="Komunitas" class="img-fluid mb-3">
            <h3>Ronde</h3>
            <p>Ronde berasal dari Jawa, Indonesia. Minuman ini sering dijumpai di berbagai pasar malam atau sebagai hidangan musim dingin.</p>
        </div>
    </div>
</div>


    <!-- Include Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>