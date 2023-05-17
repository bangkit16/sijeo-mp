<!doctype html>
<html lang="en">

<head>
    <title>SI JEO Event Organizer</title>
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
        .bg-1-lanpaggue{
            background-image: url("<?= base_url(); ?>/img/landing page 1.png");
            background-size: cover;
            background-repeat: no-repeat;
            height: 700px;
        }
        .btn-siapkan-event{
            background-color: #FFA931;
            color: white;
            font-size: 25px;
            padding: 4px 30px;
            border-radius: 25px;
        }
        .btn:hover{
            border-color: white;
            color: white;
        }
        .btn:active{
            border-color: #FFA931 !important;
            color: #FFA931 !important;
        }
        #btn-daftar:hover{
            background-color: white;
            color: #FFA931;
            border-color: #FFA931;
        }
        #btn-masuk:hover{
            background-color: #FFA931;
            color: white;
        }
        #btn-masuk:active{
            color: white !important;
        }
        #link-daftar:hover{
            color: black !important;
        }
        #link-daftar:active{
            color: #FFA931 !important;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container-fluid text-center sticky-top" style="background-color: white;">
            <div class=" d-flex flex-row align-items-center justify-content-end p-2">
                <div class="mx-3" style="font-size: 14px;">
                    <span>Menjadi Vendor? <a href="http://localhost:8080/register" style="color: #FFA931; text-decoration: none;" id="link-daftar">Daftar</a></span>
                </div>
                <div class="mx-3" style="font-size: 14px;">
                    <span>Ingin memesan?</span>
                </div>
                <div class="mx-3" style="font-size: 14px;">
                    <a class="btn btn-outline-primary-custom" href="http://localhost:8080/login" id="btn-masuk">Masuk</a>
                </div>
                <div class="mx-3" style="font-size: 14px;">
                    <a class="btn btn-primary-custom" href="http://localhost:8080/register" id="btn-daftar">Daftar</a>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center bg-1-lanpaggue">
            <div class="d-flex flex-row align-items-center justify-content-end p-2">
                <div class="me-auto">
                    <a href="http://localhost:8080/"><img src="<?= base_url(); ?>/img/logo si jeo.png" class="img-fluid" style="width: 163px; height: 124px;"></a>
                </div>
                <div class="mx-5">
                    <span style="color: white; font-size: 20px; font-weight: bold;">Home</span>
                </div>
                <div class="mx-5">
                    <span style="color: white; font-size: 20px; font-weight: bold;">Tentang</span>
                </div>
                <div class="mx-5">
                    <span style="color: white; font-size: 20px; font-weight: bold;">Vendor</span>
                </div>
                <div class="mx-5">
                    <span style="color: white; font-size: 20px; font-weight: bold;">Store</span>
                </div>
                <div class="mx-5">
                    <span style="color: white; font-size: 20px; font-weight: bold;">Lastest Event</span>
                </div>
                <div class="mx-5">
                    <span style="color: white; font-size: 20px; font-weight: bold;">Event</span>
                </div>
            </div>
            <br>
            <div class="container-fluid mt-5 px-5">
                <div class="d-flex flex-row">
                    <h1 style="color: white; font-size: 50px; font-weight: bold;">Solusi Layanan Event</h1>
                </div>
                <div class="d-flex flex-row">
                    <h1 style="color: white; font-size: 50px; font-weight: bold;">Organizer Terbaik</h1>
                </div>
                <div class="d-flex flex-row">
                    <h1 style="color: white; font-size: 50px; font-weight: bold;">Sejak 2015</h1>
                </div>
                <br>
                <div class="d-flex dlex-row">
                    <a class="btn btn-siapkan-event" href="">Siapkan Event Bersama Kami</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center overflow px-5 py-5" style="font-size: 18px;">
        <div class="py-5">
            <span>SI JEO merupakan jasa Event Organizer terkenal di Malang. Sebagai EO berpengalaman</span>
            <br>
            <span>dan profesional, prioritas utama kami adalah kepuasan konsumen.</span>
            <br><br>
            <span>SI JEO menawarkan banyak pilihan paket acara, meliputi catering, full dekorasi,</span>
            <br>
            <span>wardrobe, MUA, foto dan video. Dengan pilihan paket yang beragam, anda bisa</span>
            <br>
            <span>menyesuaikan menurut harga dan selera.</span>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>