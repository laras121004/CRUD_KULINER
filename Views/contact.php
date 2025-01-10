<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <!-- Link to Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FCE1F5; /* Latar belakang gelap */
            color: #e0e0e0;
        }
        h1 {
            color: #FF73C7;
            font-weight: bold;
        }
        .card {
            background-color: #FF00D0; /* Latar belakang kartu gelap */
            border: none;
            color: #ddd;
        }
        .card-body {
            padding: 2rem;
            margin: 1rem;
            border-radius: 8px;
            background-color: #FFA1D9; /* Latar belakang kartu lebih terang */
        }
        .card-title {
            color: #f1f1f1;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .btn-custom {
            background-color: rgb(89, 34, 255);/* Warna tombol */
            color: white;
            padding: 0.8rem 2rem;
            font-size: 1rem;
        }
        .btn-custom:hover {
            background-color: #e64a19; /* Warna tombol saat hover */
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
        <h1 class="text-center mb-4">Hubungi Saya</h1>
        <div class="card mx-auto" style="max-width: 40rem;">
            <div class="card-body">
                <form method="post" action="?page=contactSubmit">
                    <div class="mb-3">
                        <label for="name" class="form-label d-block text-start">Nama Anda</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label d-block text-start">Email Anda</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label d-block text-start">Pesan Anda</label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Masukkan Pesan Anda " required></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-custom me-2">Send</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>