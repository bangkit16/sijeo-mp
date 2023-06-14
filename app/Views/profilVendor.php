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
    <title>Profil Vendor</title>
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

        .btn-chat-with-us:hover {
            color: #FFA931 !important;
            background-color: white !important;
            border: 1px solid #FFA931 !important;
        }

        .btn-love-vendor:hover {
            color: white !important;
            background-color: #FFA931 !important;
            border: 1px solid #FFA931 !important;
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
                        <a href="http://"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 25px; height: 25px; fill: black;">
                                <title>message-processing-outline</title>
                                <path d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2M20 16H5.2L4 17.2V4H20V16M17 11H15V9H17M13 11H11V9H13M9 11H7V9H9" />
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
                <a href="" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Store</a>
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
        <div class="d-flex justify-content-center align-items-center my-5">
            <img src="<?= base_url(); ?>img/profVen1.jpg" class="img-fluid" style="width: 1320px; height: 545px; border-radius: 20px;">
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center align-items-stretch mb-5 mx-5">
            <div class="p-0 ms-5">
                <img src="<?= base_url(); ?>img/logovendor1.jpg" class="img-fluid" style="width: 113px; height: 113px; border-radius: 100%;">
            </div>
            <div class="p-0 me-auto d-flex flex-column justify-content-start align-items-center">
                <div class="ps-4" style="font-size: 28px; font-weight: 600;">Alea Decoration, MALANG</div>
                <div class="ps-4 d-flex flex-row justify-content-center align-items-center me-auto">
                    <div class="p-0" style="font-size: 24px;">Acara Dies Natalis</div>
                    <div class="mx-1 garis_vertikal p-0"></div>
                    <div class="p-0"><svg width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="30" height="21" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_600_831" transform="matrix(0.00169903 0 0 0.00242718 -0.0148058 0)" />
                                </pattern>
                                <image id="image0_600_831" width="606" height="412" xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                    <div class="p-0" style="font-size: 24px;">Malang</div>
                </div>
                <div class="ps-4 pt-3 d-flex flex-row justify-content-center align-items-center me-auto">
                    <div class="pe-4 d-flex flex-column">
                        <div style="font-size: 28px; font-weight: 600;">218</div>
                        <div style="font-size: 20px;">Love</div>
                    </div>
                    <div class="pe-4 d-flex flex-column">
                        <div style="font-size: 28px; font-weight: 600;">1,5 M</div>
                        <div style="font-size: 20px;">Views</div>
                    </div>
                    <div class="pe-4 d-flex flex-column">
                        <div style="font-size: 28px; font-weight: 600;">42</div>
                        <div style="font-size: 20px;">Reviews</div>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center me-auto ps-4 pt-3">
                    <div>
                        <img src="<?= base_url(); ?>img/instagram.png" class="img-fluid p-0" style="width: 34px; height: 34px;">
                    </div>
                    <div style="font-size: 20px;" class="ms-3">:</div>
                    <div style="font-size: 20px;" class="ms-3">Alea_Dec12</div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center me-auto ps-4 pt-3">
                    <div>
                        <img src="<?= base_url(); ?>img/gmail.png" class="img-fluid p-0" style="width: 34px; height: 34px;">
                    </div>
                    <div style="font-size: 20px;" class="ms-3">:</div>
                    <div style="font-size: 20px;" class="ms-3">AleaDec12@gmail.com</div>
                </div>
            </div>
            <div class="p-0 mx-4">
                <a href="http://" type="button" class="btn btn-primary btn-chat-with-us" style="width: 289px; background-color: #FFA931; color: white; border: 1px solid #FFA931; font-size: 24px;">Chat With Us</a>
            </div>
            <div class="p-0 me-5">
                <a href="http://" type="button" class="btn btn-primary btn-love-vendor" style="width: 289px; background-color: white; border: 1px solid #FFA931; color: #FFA931; font-size: 24px;">Love Vendor</a>
            </div>
        </div>
        <hr class="mx-5">
        <div class="d-flex flex-column my-5 mx-5 justify-content-center align-items-center text-center">
            <div style="font-size: 32px; font-weight: 600;" class="mb-4">Tentang</div>
            <div style="font-size: 24px;">Penyedia layanan penyewaan peralatan dan dekorasi yang menghadirkan segala yang Anda butuhkan untuk menciptakan atmosfer yang sempurna dalam acara Dies Natalis. Dari panggung dan tenda yang elegan hingga peralatan meja dan kursi yang berkualitas tinggi, kami menyediakan solusi yang komprehensif untuk kebutuhan logistik acara Anda. Dengan beragam pilihan dekorasi tema dan pencahayaan yang menarik, kami membantu menciptakan suasana yang sesuai dengan visi Anda. Dengan layanan pengiriman dan instalasi yang profesional, Event Pro Rentals akan memastikan acara Dies Natalis Anda berjalan dengan lancar dan terlihat luar biasa.</div>
        </div>
        <hr class="mx-5">
        <span style="font-size: 32px; font-weight: 600; text-align: center;" class="my-5">Event</span>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>