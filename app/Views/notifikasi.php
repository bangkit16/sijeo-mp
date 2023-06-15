<!DOCTYPE html>
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
    <title>Notifikasi</title>
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

        .bg-1-lanpaggue {
            background-image: url("<?= base_url(); ?>/img/landing page 1.png");
            background-size: cover;
            background-repeat: no-repeat;
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
                    <div class="mx-3 garis_vertikal" style="font-size: 14px;"></div>
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
    <div class="container-fluid text-center">
        <div class="d-flex justify-content-start align-items-center mt-5 ms-5">
            <h4 style="font-weight: 600;">Notifikasi</h4>
        </div>
        <div class="mx-5 mt-4" style="border: 2px solid #959698; border-radius: 10px;">
            <div class="row mx-3 my-3">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url() ?>svg/notif.svg" alt="">
                </div>
                <div class="col-11 d-flex justify-content-start align-items-center">
                    Pesan Notifikasi Disini
                </div>
            </div>
            <hr class="my-0">
            <div class="row mx-3 my-3">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url() ?>svg/notif.svg" alt="">
                </div>
                <div class="col-11 d-flex justify-content-start align-items-center">
                    Pesan Notifikasi Disini
                </div>
            </div>
            <hr class="my-0">
            <div class="row mx-3 my-3">
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url() ?>svg/notif.svg" alt="">
                </div>
                <div class="col-11 d-flex justify-content-start align-items-center">
                    Pesan Notifikasi Disini
                </div>
            </div>
            <hr class="my-0">
        </div>
    </div>
    <footer>
        <div class="container-fluid text-center" style="background-color: #45484E;">
            <div class="d-flex flex-row px-5 pb-5">
                <div class="d-flex flex-column mx-auto">
                    <div class="my-5 me-auto">
                        <img src="<?= base_url(); ?>/img/logo si jeo.png" class="img-fluid" style="height: auto; width: 197px;">
                    </div>
                    <div class="me-auto mb-1" style="font-size: 25px; color: white;">Sosial Media</div>
                    <div class="d-flex flex-row mx-auto">
                        <div>
                            <img src="<?= base_url(); ?>/img/footer_facebook.png" class="img-fluid me-1" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <img src="<?= base_url(); ?>/img/footer_twitter.png" class="img-fluid mx-1" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <img src="<?= base_url(); ?>/img/footer_instagram.png" class="img-fluid mx-1" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <img src="<?= base_url(); ?>/img/footer_tiktok.png" class="img-fluid mx-1" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <img src="<?= base_url(); ?>/img/footer_youtube.png" class="img-fluid mx-1" style="width: 40px; height: 40px;">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column mx-auto">
                    <div class="mt-5 me-auto" style="font-size: 25px; font-weight: 600; color: white;">Tentang Kami</div>
                    <div class="mt-2 me-auto" style="font-size: 20px; color: white;">Tentang</div>
                    <div class="mt-1 me-auto" style="font-size: 20px; color: white;">Penawaran dan Promo</div>
                    <div class="mt-1 me-auto" style="font-size: 20px; color: white;">Karir</div>
                </div>
                <div class="d-flex flex-column mx-auto">
                    <div class="mt-5 me-auto" style="font-size: 25px; font-weight: 600; color: white;">Layanan</div>
                    <div class="mt-2 me-auto" style="font-size: 20px; color: white;">Katalog</div>
                    <div class="mt-1 me-auto" style="font-size: 20px; color: white;">Vendor</div>
                    <div class="mt-1 me-auto" style="font-size: 20px; color: white;">Store</div>
                </div>
                <div class="d-flex flex-column mx-auto">
                    <div class="mt-5 me-auto" style="font-size: 25px; font-weight: 600; color: white;">Hubungi Kami</div>
                    <div>
                        <form style="width: 412px;">
                            <input type="text" class="form-control custom-form mt-2 p-0 pb-2" style="border-style: none; background-color: #45484E; color: #FFFFFF; font-size: 20px;" id="nama" placeholder="Nama">
                            <input type="email" class="form-control custom-form mt-2 p-0 pb-2 " id="email" style="border: none; background-color: #45484E; color: #FFFFFF; font-size: 20px;" placeholder="Email">
                            <input type="email" class="form-control custom-form mt-2 p-0 pb-2" id="email" style="border: none; background-color: #45484E; color: #FFFFFF; font-size: 20px;" placeholder="Apa yang dapat kami bantu?">
                            <div class="d-flex justify-content-end align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" fill="white" class="bi bi-arrow-right mt-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h5 class="m-0 pb-3" style="color: white;">Copyright @ 2023 - SI JEO Event Organizer</h5>
        </div>
    </footer>
</body>

</html>