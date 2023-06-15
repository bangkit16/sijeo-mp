<!doctype html>
<html lang="en">

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Vendor SI JEO</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .garis_vertikal {
            border-left: 1px black solid;
            height: 25px;
            width: 0px;
        }

        .bg-1-lanpaggue {
            background-image: url("<?= base_url(); ?>/img/landing page 1.png");
            background-size: cover;
            background-repeat: no-repeat;
        }

        #link-nav2:hover {
            color: #FFA931 !important;
        }

        .btn-primary-custom {
            background-color: #FFA931;
            color: white;
            font-size: 14px;
            padding: 3px 28px;
        }

        .btn-outline-primary-custom {
            border-color: #FFA931;
            color: #FFA931;
            font-size: 14px;
            padding: 3px 28px;
        }


        .btn-siapkan-event {
            background-color: #FFA931;
            color: white;
            font-size: 25px;
            padding: 4px 30px;
            border-radius: 25px;
        }

        .btn:hover {
            border-color: white;
            color: white;
        }

        .btn:active {
            border-color: white !important;
            color: white !important;
        }

        #btn-daftar:hover {
            background-color: white;
            color: #FFA931;
            border-color: #FFA931;
        }

        #btn-daftar:active {
            background-color: white !important;
            color: #FFA931 !important;
            border-color: #FFA931 !important;
        }

        #btn-masuk:hover {
            background-color: #FFA931;
            color: white;
        }

        #link-daftar:hover {
            color: black !important;
        }

        #link-nav2:hover {
            color: #FFA931 !important;
        }

        /* .carousel-inner .carousel-item-next.carousel-item-start,
        .carousel-inner .carousel-item-prev.carousel-item-end {
            transform: translateX(50%);
        }

        .carousel-inner .carousel-item-start.active,
        .carousel-inner .carousel-item-end.active {
            transform: translateX(0);
        } */

        .carousel-inner .carousel-item-start,
        .carousel-inner .carousel-item-end {
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            border-radius: 25px;
            height: 100%;
            overflow: hidden;
        }

        .carousel-inner {
            border-radius: 25px;
            height: 100%;
            overflow: hidden;
        }

        .carousel-item img {
            border-radius: 25px;
            height: 100%;
            width: auto;
        }

        .checked {
            color: orange;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container-fluid text-center sticky-top" style="background-color: white;">
            <div class=" d-flex flex-row align-items-center justify-content-end p-2">
                <?php if (isset($_SESSION['username'])) : ?>
                    <div class="mx-3" style="font-size: 14px;">
                        <img src="<?= base_url(); ?>/img/vector rasyid.png" class="img-fluid" style="width: 30px; height: 30px; border-radius: 100%;">
                        <span>&nbsp;&nbsp;&nbsp;<?= $_SESSION['username']; ?></span>
                    </div>
                    <div class="mx-3 garis_vertikal" style="font-size: 14px;">

                    </div>
                    <div class="mx-3" style="font-size: 14px;">
                        <a href="http://localhost:8080/notifikasi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 25px; height: 25px; fill: black;">
                                <title>bell-ring-outline</title>
                                <path d="M10,21H14A2,2 0 0,1 12,23A2,2 0 0,1 10,21M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M17,11A5,5 0 0,0 12,6A5,5 0 0,0 7,11V18H17V11M19.75,3.19L18.33,4.61C20.04,6.3 21,8.6 21,11H23C23,8.07 21.84,5.25 19.75,3.19M1,11H3C3,8.6 3.96,6.3 5.67,4.61L4.25,3.19C2.16,5.25 1,8.07 1,11Z" />
                            </svg></a>
                    </div>
                    <div class="mx-3" style="font-size: 14px;">
                        <a class="btn btn-primary-custom" href="<?= base_url(); ?>Customer/logout" id="btn-daftar">Logout</a>
                    </div>
                <?php endif; ?>
                <?php if (!isset($_SESSION['username'])) : ?>
                    <div class="mx-3" style="font-size: 14px;">
                        <span>Menjadi Vendor? <a href="http://localhost:8080/daftarVendor" style="color: #FFA931; text-decoration: none;" id="link-daftar">Daftar</a></span>
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
                <?php endif; ?>
            </div>

        </div>
    </nav>
    <div class="container-fluid text-center bg-1-lanpaggue sticky-top shadow-sm ">
        <div class="d-flex flex-row align-items-center justify-content-end p-2">
            <div class="me-auto">
                <a href="http://localhost:8080/"><img src="<?= base_url(); ?>/img/logo si jeo.png" class="img-fluid" style="width: auto; height: 60px"></a>
            </div>
            <div class="mx-5">
                <a href="<?= base_url(); ?>" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Home</a>
            </div>
            <div class="mx-5">
                <a href="http://localhost:8080/#tentang" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Tentang</a>
            </div>
            <div class="mx-5">
                <a href="http://localhost:8080/vendor" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Vendor</a>
            </div>
            <div class="mx-5">
                <a href="http://localhost:8080/#lastestEvent" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Lastest Event</a>
            </div>
            <div class="mx-5">
                <a href="http://localhost:8080/#review" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Review</a>
            </div>
        </div>
    </div>
    <div class="container">

        <div id="carouselExampleAutoplaying" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url(); ?>img/vendor car 1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url(); ?>img/vendor car 2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url(); ?>img/vendor car 3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h2 class="mt-5 " style="font-weight: 600;">Paket Promo Event</h2>
        <div class="row mt-3 row-cols-md-5 g-4 roww" style="text-align: start;">
            <?php foreach ($paket as $paket) :  ?>
                <div class="col coll mb-auto">
                    <a style="text-decoration: none;" href="<?= base_url(); ?>detail/<?= $paket['id']; ?>">
                        <div class="card my-auto ">
                            <img src="<?= base_url(); ?>/img/<?= $paket['gambar']; ?>" class="card-img-top img-fluid" style="">
                            <div class="card-body">
                                <div style="height: 8rem">
                                    <span style="font-size: 16px; font-weight: 600;width:100% " class="card-title"><?= $paket['nama_paket']; ?></span>
                                </div>
                                <p class="card-text  mb-1" style="color: #FFA931;font-size: 15px; font-weight: 500;">Rp <?= $paket['idr']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <h2 class="mt-5 mb-5" style="font-weight: 600;">Vendor</h2>
        <div class="row mt-3 row-cols-md-5 g-4 roww" style="text-align: start;">
            <?php foreach ($vendor as $vendor) :  ?>
                <div class="col coll mb-auto">
                    <a style="text-decoration: none;" href="<?= base_url(); ?>detail/<?= $vendor['id_vendor']; ?>">
                        <div class="card my-auto">
                            <!-- <div class="card-header " style="width: 100%;height: 100%;overflow: hidden;border-radius: 100%;"> -->
                            <!-- </div> -->
                            <div class="card-body">
                                <img src="<?= base_url(); ?>/img/<?= $vendor['gambar']; ?>" class=" card-img-top" style="height: 200px;object-fit: cover;border-radius: 100%;">
                                <div style="height: 8rem ;" class="d-flex flex-column mt-4">
                                    <div class="p-1">

                                        <span style="font-size: 20px; font-weight: 600;width:100% " class="card-title"><?= $vendor['nama_vendor']; ?></span><br>
                                        <span style="font-size: 15px; font-weight: 500;width:100% " class="card-title"><?= $vendor['kota']; ?></span>
                                    </div>
                                    <br>
                                    <div class="pt-1 mb-auto">
                                        <?php
                                        for ($i = 0; $i < $vendor['rating']; $i++) {
                                            echo '<span class="fa fa-star checked"></span>';
                                        }
                                        // if (!$vendor['rating'] == 5) {
                                        $j = 5 - $vendor['rating'];
                                        for ($i = 0; $i < $j; $i++) {
                                            echo '<span class="fa fa-star"></span>';
                                        }
                                        // }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>