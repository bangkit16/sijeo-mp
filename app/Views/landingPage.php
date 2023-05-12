<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        .btn-primary-custom {
            background-color: #FFA931;
            color: white;
            font-size: 14px;
            padding: 3px 28px;
            align-content: en;
        }
        .btn-outline-primary-custom{
            border-color: #FFA931;
            color: #FFA931;
            font-size: 14px;
            padding: 3px 28px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container-fluid text-center" style="background-color: white;">
            <div class=" d-flex flex-row justify-content-end p-2">
                <div class="mx-3">

                </div>
                <div class="mx-3" style="font-size: 14px;">
                    <span>Menjadi Vendor? <a href="http://localhost:8080/register" style="color: #FFA931; text-decoration: none;">Daftar</a></span>
                </div>
                <div class="mx-3" style="font-size: 14px;">
                    <span>Ingin memesan?</span>
                </div>
                <div class="mx-3" style="font-size: 14px;">
                    <a class="btn btn-outline-primary-custom" href="http://localhost:8080/login">Masuk</a>
                </div>
                <div class="mx-3" style="font-size: 16px;">
                    <a class="btn btn-primary-custom" href="http://localhost:8080/register">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>