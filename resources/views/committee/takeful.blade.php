<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles as needed */
        section {
            text-align: center; /* To center the content */
            background-color: orangered; /* Orange background color */
            padding: 50px 0; /* Add padding for better spacing */
        }
        .container {
            margin-top: 50px; /* Top margin for the container */
        }
        .img img {
            width: 200px; /* Enlarge image size */
            height: auto; /* Maintain aspect ratio */
            margin: 20px; /* Spacing between images */
            transition: transform 0.3s ease; /* Add transition effect */
        }
        .img img:hover {
            transform: scale(1.1); /* Enlarge image on hover */
        }
        .btn {
            margin-top: 20px; /* Spacing between images and button */
        }
    </style>
</head>
<body>
<section>
    <div class="container">
        <div class="img">
            <a href="image/CamScanner 04-21-2024 14.23_1.jpg" download>
                <img src="image/CamScanner 04-21-2024 14.23_1.jpg" alt="W3Schools" class="img-fluid">
            </a>
            <a href="image/CamScanner 04-21-2024 14.23_2.jpg" download>
                <img src="image/CamScanner 04-21-2024 14.23_2.jpg" alt="W3Schools" class="img-fluid">
            </a>
        </div>
        <div class="btn">
            <a href="image/CamScanner 04-21-2024 14.23.pdf" download class="btn btn-primary">Download</a>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
