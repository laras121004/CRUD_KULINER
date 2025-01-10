<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <!-- Link to Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        nav {
            background: linear-gradient(90deg, #FF73C7, #FFA1D9);
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        nav a {
            color:rgb(48, 48, 48);
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
            font-size: 25px;
            letter-spacing: 0.5px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        nav a:hover {
            background-color: rgb(0, 0, 0);
            transform: translateY(-3px);
        }
        nav a:active {
            background-color: rgba(255, 255, 255, 0.4);
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=makanan">Food</a>
        <a href="?page=minuman">Drink</a>
        <a href="?page=about">About</a>
        <a href="?page=contact">Contact</a>
    </nav>

    <!-- Include Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>