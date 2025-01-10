<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drink List</title>
    <!-- Link to Bootstrap and DataTables CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables/datatables.min.css" rel="stylesheet">
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
            background-color: #FFBCE4;
            border: none;
            color: #ddd;
            transition: transform 0.3s ease; /* Animasi saat kursor diarahkan */
        }
        .card:hover {
            transform: scale(1.05); /* Efek timbul (zoom-in) */
        }
        .card-body {
            background-color: #FFA1D9;
            border-radius: 8px;
            padding: 2rem;
            transition: transform 0.3s ease; /* Animasi saat kursor diarahkan */
        }
        .card-body:hover {
            transform: scale(1.0); /* Efek timbul (zoom-in) */
        }
        .table {
            background-color: rgb(69, 61, 182);
            border-radius: 8px;
            color: #ddd;
            transition: transform 0.3s ease; /* Animasi saat kursor diarahkan */
        }
        .table:hover {
            transform: scale(1.0); /* Efek timbul (zoom-in) */
        }
        .table-dark th {
            background-color: #FF00D0;
            color: hsl(320, 27.30%, 97.80%);
        }
        .btn-primary {
            background-color: rgb(89, 34, 255);
            border: none;
            color: white;
        }
        .btn-primary:hover {
            background-color: #e64a19;
        }
        .btn-sm {
            padding: 0.5rem 1rem;
        }
        .btn-warning {
            background-color: #fbc02d;
            color: #FCE1F5;
        }
        .btn-warning:hover {
            background-color: #f9a825;
        }
        .btn-danger {
            background-color: #d32f2f;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c62828;
        }
        .footer {
            background-color: #FCE1F5;
            padding: 1rem;
            text-align: center;
            color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Minuman!🥤</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="?page=minumanAdd" class="btn btn-primary">[+] Add Drink</a>
        </div>

        <!-- Card Body Wrapper for Table -->
        <div class="card">
            <div class="card-body">
                <table id="drinkTable" class="table table-striped table-bordered" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Minuman</th>
                            <th>Asal Minuman</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "includes/config.php";
                        $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
                        $sql = mysqli_query($conn, $query);
                        $nomor = 1;
                        if (mysqli_num_rows($sql) == 0) { ?>
                            <tr>
                                <td colspan="4" class="text-center"><i>No data</i></td>
                            </tr>
                        <?php } else {
                            while ($data = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $nomor++; ?>
                                    </td>
                                    <td>
                                        <?= $data["nama_minuman"] ?>
                                    </td>
                                    <td>
                                        <?= $data["daerah_minuman"] ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
                <div class="mt-3">
                    <p class="text-light">🥤Total: <?= mysqli_num_rows($sql) ?></p>
                </div>
            </div>
        </div>

    </div>

    <!-- Include jQuery, Bootstrap JS, and DataTables JS -->
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/datatables/datatables.min.js"></script>

    <!-- DataTables Initialization -->
    <script>
        $(document).ready(function () {
            $('#drinkTable').DataTable({
                responsive: true,
                language: {
                    search: "Search:",
                    lengthMenu: "Display _MENU_ records per page",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    infoEmpty: "No records available",
                    zeroRecords: "No matching records found",
                }
            });
        });
    </script>
</body>
</html>