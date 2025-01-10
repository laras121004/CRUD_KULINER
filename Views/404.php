<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Not Found</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }
        .error-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .error-content {
            max-width: 600px;
        }
        .error-title {
            font-size: 100px;
            font-weight: bold;
            color: #16C47F;
        }
        .error-message {
            font-size: 24px;
            margin: 20px 0;
        }
        .error-description {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .error-btn {
            background-color: #16C47F;
            color: white;
            border: none;
            padding: 10px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
        .error-btn:hover {
            background-color: #12a34b;
        }
    </style>
</head>
<body>

<div class="error-container">
    <div class="error-content">
        <div class="error-title">404</div>
        <div class="error-message">Oops! Page Not Found</div>
        <div class="error-description">The page you are looking for doesn't exist or has been moved. Please check the URL or return to the homepage.</div>
        <a href="/" class="error-btn">Go to Homepage</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>