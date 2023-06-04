<!doctype html>
<html lang="en">

<head>
    <title>SI JEO Event Organizer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
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
            height: 700px;
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

        #ikon-wa:hover {
            fill: white;
        }

        .foto {
            background-image: url("<?= base_url(); ?>img/lp1.jpg");
            background-size: cover;
            position: relative;

        }

        .foto::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .mengapa {
            margin-top: 100px;
            padding: 20px 30px;
            padding-right: 50px;
            background-color: #FFA931;
            width: fit-content;
            border-radius: 0px 100px 100px 0px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
        }

        .mengapaa {
            margin-top: 30px;
            padding: 20px 30px;
            width: fit-content;
        }

        .rig {
            text-align: right !important;
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
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 25px; height: 25px; fill: black;">
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
                        <span>Menjadi Vendor? <a href="" style="color: #FFA931; text-decoration: none;" id="link-daftar">Daftar</a></span>
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
        <div class="container-fluid text-center bg-1-lanpaggue">
            <div class="d-flex flex-row align-items-center justify-content-end p-2">
                <div class="me-auto">
                    <a href="http://localhost:8080/"><img src="<?= base_url(); ?>/img/logo si jeo.png" class="img-fluid" style="width: auto; height: 120px"></a>
                </div>
                <div class="mx-5">
                    <a href="http://localhost:8080/" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Home</a>
                </div>
                <div class="mx-5">
                    <a href="" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Tentang</a>
                </div>
                <div class="mx-5">
                    <a href="http://localhost:8080/vendor" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Vendor</a>
                </div>
                <div class="mx-5">
                    <a href="" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Store</a>
                </div>
                <div class="mx-5">
                    <a href="" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Lastest Event</a>
                </div>
                <div class="mx-5">
                    <a href="" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Review</a>
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
                <div class="d-flex flex-row">
                    <a class="btn btn-siapkan-event" href=""> <svg xmlns="http://www.w3.org/2000/svg" id="ikon-wa" viewBox="0 0 25 25" style="width: 30px; height: 30px; fill: white;">
                            <title>whatsapp</title>
                            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
                        </svg> Siapkan Event Bersama Kami</a>
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
    <div class="foto" style="">
        <div class="container-fluid mx-auto d-flex flex-column" style="padding: 90px 225px;position: relative;z-index: 2;">
            <span class="mx-auto" style="font-weight: 700;font-size: 55px;color: white; text-align: center;">Sejarah</span><br>
            <span class="mx-auto" style="font-weight: 400;font-size: 24px;color: white; text-align: center;padding: 150px 0px">SI JEO merupakan jasa Event Organizer terkenal di Malang. Sebagai EO berpengalaman dan profesional, prioritas utama kami adalah kepuasan konsumen. <br><br>

                SI JEO menawarkan banyak pilihan paket acara, meliputi catering, full dekorasi, wardrobe, MUA, foto dan video. Dengan pilihan paket yang beragam, anda bisa menyesuaikan menurut harga dan selera.</span><br>

        </div>
    </div>
    <div class="">
        <div class="mengapa ">
            <span style="font-weight: 500;font-size: 32px;">Mengapa SI JEO ? </span><br>
            <span style="font-weight: 400;font-size: 20px;">sebagai penyelenggara event anda</span>
        </div>
        <div class="container-fluid d-flex flex-row" style="padding: 30px 50px;">
            <img class="m-3 align-self-start" src="<?= base_url(); ?>svg/brainstorming.svg" style="width: 100px;" alt="">
            <div class="p-3" style="width: 700px;">
                <span style="font-weight: 500;font-size: 32px;">Solid Teamwork </span><br>
                <span style="font-weight: 400;font-size: 24px;">Kami percaya akan kekuatan sinergi dari seluruh anggota team yang sudah bekerjasama selama bertahun-tahun, yang selalu siap sedia membantu melancarkan kegiatan bazaar, outbound, gathering, launching, virtual event, webinar, seminar, serta kegiatan anda yang lain</span>
            </div>
        </div>
        <div class="container-fluid d-flex flex-row-reverse" style="padding: 30px 50px; background-color: #FFA931;">
            <img class="m-3 align-self-start" src="<?= base_url(); ?>svg/timesaving.svg" style="width: 100px;" alt="">
            <div class="p-3" style="width: 700px;text-align: end;">
                <span class="rig" style="font-weight: 500;font-size: 32px;">Time Saving</span><br>
                <span style="font-weight: 400;font-size: 24px;">Sebagai EO terbaik yang terus berkembang dan belajar, kami terus melakukan riset atas berbagai elemen event. Kami bisa membantu anda mencari ide terbaik dan mengimplementasikannya, termasuk vendor-vendor profesional yang dibutuhkan. Anda bisa menghemat sumber daya (waktu dan tenaga) anda dan bersinergi bersama dengan kami</span>
            </div>
        </div>
        <div class="container-fluid d-flex flex-row" style="padding: 30px 50px;">
            <img class="m-3 align-self-start" src="<?= base_url(); ?>svg/creativethinking.svg" style="width: 100px;" alt="">
            <div class="p-3" style="width: 700px;">
                <span style="font-weight: 500;font-size: 32px;">Creative Thinking</span><br>
                <span style="font-weight: 400;font-size: 24px;">Seiring dengan berjalannya waktu, kami mendapatkan wawasan serta pengalaman bernilai mengenai cara-cara mensukseskan suatu kegiatan. Kita terus mengikuti trend dan tempat terkini serta inovasi terbaru / canggih. Kami mengajak anda untuk berdiskusi berbagai ide yang menarik, manajemen perhitungan biaya, serta detail yang lain untuk membantu anda membuat kegiatan yang spesial.</span>
            </div>
        </div>
        <div class="container-fluid d-flex flex-row-reverse" style="padding: 30px 50px; background-color: #FFA931;">
            <img class="m-3 align-self-start" src="<?= base_url(); ?>svg/inovativethinking.svg" style="width: 100px;" alt="">
            <div class="p-3" style="width: 700px;text-align: end;">
                <span class="rig" style="font-weight: 500;font-size: 32px;">Inovative Ideas </span><br>
                <span style="font-weight: 400;font-size: 24px;">Kami percaya akan kekuatan sinergi dari seluruh anggota team yang sudah bekerjasama selama bertahun-tahun, yang selalu siap sedia membantu melancarkan kegiatan bazaar, outbound, gathering, launching, virtual event, webinar, seminar, serta kegiatan anda yang lain</span>
            </div>
        </div>
        <br>
    </div>
    <div class="mengapaa ">
        <span style="font-weight: 500;font-size: 32px;">Vendor</span><br>
        <span style="font-weight: 400;font-size: 20px;">Lihat Rekomendasi Sesuai Budget</span>
    </div>
    <div class="" style="padding: 0px 120px;">

        <div class=" row mt-3 row-cols-md-5 g-4 roww" style="text-align: start;">
            <?php foreach ($paket as $paket) :  ?>
                <div class="col coll mb-auto">
                    <a style="text-decoration: none;" href="<?= base_url(); ?>detail/<?= $paket['id']; ?>">
                        <div style="box-shadow: 0px 25px 106px rgba(0,0,0,0.1); border: none;" class="card my-auto ">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>