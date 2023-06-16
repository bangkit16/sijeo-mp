<!doctype html>
<html lang="en">

<head>
    <title>SI JEO Event Organizer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playball&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
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
            background-attachment: fixed;

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



        .galery {
            line-height: 1.5;
            /* overflow: hidden; */
            display: flex;
            align-items: center;
            margin-bottom: 120px;
        }

        .wrapper {
            position: relative;
            flex-grow: 1;
            margin: auto;
            padding-right: 120px;
            padding-left: 120px;
            /* max-width: 1200px;
            max-height: 1200px; */


            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(4, 1fr);
            grid-gap: 2vmin;
            justify-items: center;
            align-items: center;
        }

        .wrapper IMG {
            z-index: 1;
            grid-column: span 2;
            max-width: 100%;
            margin-bottom: -52%;
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            transform: scale(1);
            transition: all .25s;

            &:nth-child(11n + 1) {
                grid-column: 2 / span 2;
            }

            &:hover {
                z-index: 2;
                transform: scale(2);
            }
        }

        .latest {
            margin: 40px 0px;
            padding: 20px 0px;
            margin-top: 100px;
            border-top: solid 5px #FFA931;
            border-bottom: solid 5px #FFA931;

            width: max-content;
        }

        .review {
            background-color: #EBEBEB;
            padding: 60px 120px;
        }

        .garis_vertikal {
            border-left: 1px black solid;
            height: 25px;
            width: 0px;
        }

        .custom-form {
            border-bottom: 1px solid white !important;
            border-radius: 0%;
        }

        #nama::placeholder {
            color: white;
            font-size: 20px;
        }

        #email::placeholder {
            color: white;
            font-size: 20px;
        }

        .ft-tentang:hover {
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
        <div class="container-fluid text-center bg-1-lanpaggue">
            <div class="d-flex flex-row align-items-center justify-content-end p-2">
                <div class="me-auto">
                    <a href="http://localhost:8080/"><img src="<?= base_url(); ?>/img/logo si jeo.png" class="img-fluid" style="width: auto; height: 120px"></a>
                </div>
                <div class="mx-5">
                    <a href="http://localhost:8080/" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Home</a>
                </div>
                <div class="mx-5">
                    <a href="#tentang" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Tentang</a>
                </div>
                <div class="mx-5">
                    <a href="http://localhost:8080/vendor" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Vendor</a>
                </div>
                <div class="mx-5">
                    <a href="#lastestEvent" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Lastest Event</a>
                </div>
                <div class="mx-5">
                    <a href="#review" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Review</a>
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
                    <a class="btn btn-siapkan-event" href="https://wa.me/+6289616693464"> <svg xmlns="http://www.w3.org/2000/svg" id="ikon-wa" viewBox="0 0 25 25" style="width: 30px; height: 30px; fill: white;">
                            <title>whatsapp</title>
                            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
                        </svg> Siapkan Event Bersama Kami</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center overflow px-5 py-5" style="font-size: 18px;" id="tentang">
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
    <div class="foto">
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
    <br>
    <div class="container-fluid text-center">
        <div class="d-flex flex-row justify-content-center align-items-start my-5">
            <div><img src="<?= base_url(); ?>/img/caraPesan.png" class="img-fluid mx-1" style="width: 625px; height: 907px;"></div>
            <div><img src="<?= base_url(); ?>/img/daftarVendor.png" class="img-fluid mx-1" style="width: 667px; height: 907px;"></div>
        </div>
    </div>
    <div class="container-fluid galery d-flex flex-column" id="lastestEvent">
        <div class="latest">
            <h1 style="font-weight: 600;">LASTEST EVENT</h1>
        </div>
        <br>
        <div class="wrapper">
            <img src="https://muralsyourway.vtexassets.com/arquivos/ids/240880-825-auto?width=825&height=auto&aspect=true" alt="">
            <img src="https://source.unsplash.com/random/600x600?concert" alt="">
            <img src="https://source.unsplash.com/random/700x700?party" alt="">
            <img src="https://source.unsplash.com/random/800x800?birthday" alt="">
            <img src="https://source.unsplash.com/random/800x800?concert" alt="">
            <img src="https://source.unsplash.com/random/900x900?concert" alt="">
            <img src="https://source.unsplash.com/random/1000x1000?concert" alt="">
            <img src="https://source.unsplash.com/random/1100x1100?concert" alt="">
            <img src="https://source.unsplash.com/random/500x500?concert" alt="">
            <img src="https://source.unsplash.com/random/400x400?concert" alt="">
            <img src="https://source.unsplash.com/random/300x300?concert" alt="">
            <img src="https://source.unsplash.com/random/1200x1200?concert" alt="">
            <img src="https://source.unsplash.com/random/1300x1300?concert" alt="">
            <img src="https://source.unsplash.com/random/1400x1400?concert" alt="">
            <img src="https://source.unsplash.com/random/1500x1500?concert" alt="">
            <img src="https://source.unsplash.com/random/1600x1600?concert" alt="">
        </div>
    </div>
    <div class="review container-fluid" id="review">
        <span style="font-weight: 500;font-size: 32px;">Review</span><br>
        <div class="row">
            <div class="col-4">

                <div class="card mb-3 justify-content-center mt-5" style="max-width: 100%">
                    <div style="width: 50%;height: 100% ;border-radius: 100%; overflow: hidden" class="m-auto mt-5">
                        <img src="<?= base_url(); ?>/img/review1.png" class="img-fluid mx-auto" alt="..." style=";"><br>
                    </div>
                    <div class="card-body justify-content-center m-auto">
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="card-body justify-content-center text-center">
                        <h5 class="card-title m-auto">Kelly</h5>
                        <p class="card-text m-auto">SI JEO merupakan website yang sangat membantu saya dalam merencanakan pernikahan saya</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3 justify-content-center mt-5" style="max-width: 100%">
                    <div style="width: 50%;height: 100% ;border-radius: 100%; overflow: hidden" class="m-auto mt-5">
                        <img src="<?= base_url(); ?>/img/review2.png" class="img-fluid mx-auto" alt="..." style=";"><br>
                    </div>
                    <div class="card-body justify-content-center m-auto">
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="card-body justify-content-center text-center">
                        <h5 class="card-title m-auto">Jackson</h5>
                        <p class="card-text m-auto">Website yang sangat bermanfaat, maju terus dan terimakasih SI JEO berkat kalian pernikahan saya lancar</p>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card mb-3 justify-content-center mt-5" style="max-width: 100%">
                    <div style="width: 50%;height: 100% ;border-radius: 100%; overflow: hidden" class="m-auto mt-5">
                        <img src="<?= base_url(); ?>/img/review3.png" class="img-fluid mx-auto" alt="..." style=";"><br>
                    </div>
                    <div class="card-body justify-content-center m-auto">
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span style="color: #FFA931;" class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="card-body justify-content-center text-center">
                        <h5 class="card-title m-auto">Hasan</h5>
                        <p class="card-text m-auto">tampilan website gampang untuk dimengerti dan sistem pemesanannya pun cukup simple dan gampang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="d-flex justify-content-center align-items-center my-5" style="font-family: 'Playball', cursive; font-size: 64px;">M&nbsp;E&nbsp;E&nbsp;T&nbsp;&nbsp;&nbsp;O&nbsp;U&nbsp;R&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;E&nbsp;A&nbsp;M</div>
        <div class="d-flex flex-column justify-content-center align-items-center my-5" style="font-size: 20px;">
            <div>Apa yang membuat SI JEO berbeda? Tim kami</div>
            <div>selalu percaya dan benar-benar menyukai apa yang</div>
            <div>kami lakukan untuk para client. Kebersamaan kami</div>
            <div>selama ini menghasilkan sebuah sinergi yang anda</div>
            <div>butuhkan untuk event anda</div>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center my-5">
            <div class="me-auto my-5">
                <svg width="291" height="213" viewBox="0 0 291 213" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="291" height="213" fill="url(#pattern0)" fill-opacity="0.5" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_598_180" transform="matrix(0.00195312 0 0 0.00266835 0 -0.183099)" />
                        </pattern>
                        <image id="image0_598_180" width="512" height="512" xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div>
                    <img src="<?= base_url(); ?>/img/bangkit 2.png" class="img-fluid mb-3" style="height: 177px; width: 177px; border-radius: 100%; border: 3px solid black;">
                </div>
                <div style="font-size: 24px; font-weight: 500;">Bangkit Maulana C</div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div>
                    <img src="<?= base_url(); ?>/img/febry.png" class="img-fluid mb-3" style="height: 177px; width: 177px; border-radius: 100%; border: 3px solid black;">
                </div>
                <div style="font-size: 24px; font-weight: 500;">Ega Fadhilla F</div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div style="height: 177px; width: 177px;"></div>
            </div>
        </div>
        <div class="d-flex flex-row my-5">
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div>
                    <img src="<?= base_url(); ?>/img/ferly.png" class="img-fluid mb-3" style="height: 177px; width: 177px; border-radius: 100%; border: 3px solid black;">
                </div>
                <div style="font-size: 24px; font-weight: 500;">Ferly Yanuar P</div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div>
                    <img src="<?= base_url(); ?>/img/khosyi.png" class="img-fluid mb-3" style="height: 177px; width: 177px; border-radius: 100%; border: 3px solid black;">
                </div>
                <div style="font-size: 24px; font-weight: 500;">Khosyi Nasywa I</div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div>
                    <img src="<?= base_url(); ?>/img/rasyid.png" class="img-fluid mb-3" style="height: 177px; width: 177px; border-radius: 100%; border: 3px solid black;">
                </div>
                <div style="font-size: 24px; font-weight: 500;">Rasyid Razeka A</div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse justify-content-center align-items-center my-5">
            <div class="ms-auto my-5">
                <svg width="291" height="213" viewBox="0 0 291 213" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="291" height="213" fill="url(#pattern0)" fill-opacity="0.5" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_598_180" transform="matrix(0.00195312 0 0 0.00266835 0 -0.183099)" />
                        </pattern>
                        <image id="image0_598_180" width="512" height="512" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAG66AABuugHW3rEXAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAwBQTFRF////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACyO34QAAAP90Uk5TAAECAwQFBgcICQoLDA0ODxAREhMUFRYXGBkaGxwdHh8gISIjJCUmJygpKissLS4vMDEyMzQ1Njc4OTo7PD0+P0BBQkNERUZHSElKS0xNTk9QUVJTVFVWV1hZWltcXV5fYGFiY2RlZmdoaWprbG1ub3BxcnN0dXZ3eHl6e3x9fn+AgYKDhIWGh4iJiouMjY6PkJGSk5SVlpeYmZqbnJ2en6ChoqOkpaanqKmqq6ytrq+wsbKztLW2t7i5uru8vb6/wMHCw8TFxsfIycrLzM3Oz9DR0tPU1dbX2Nna29zd3t/g4eLj5OXm5+jp6uvs7e7v8PHy8/T19vf4+fr7/P3+6wjZNQAAGYFJREFUGBntwQdgjIf/B+Dv3SWRLREhIWZJ7JLYo4pqzaChKKW2xixir6q9Z1SpWUVsatXW2mqPiB1bkL3v7vv389fWSN73vcuN9y6f5yEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADcfT7rEPwwFGTZv+8auOuQ6cu33ock5Ye9+T2ldNHdm9avXju5NEhvTo1LOtOYFXsitZuPyx0+/kXLFFC+L5lP/ZoVC4XgUVzqdl7zqbTT7Ssr8Tr+5ePbVGEwOLkazRi/Q0tG0b0oVkdP7YlsAjKkm2n7HnGBpd6dmmfWq4Ecla0208nEtmItDc3jKhtRyBD7kE/3WKTSNw9qLyCQEbsao8/qWFTilrXrQiBLJTuvyOBzeHWoq9yE5hV3vYrHrIZac9O/cKBwDw8eh7Wsvkl/BZoR2Bqzu1+T2O5iP6lvorAdOwC1ySyvDydX0NBYArKOj+/ZDm6N9WfwNgqznjI8nX9hxIExpNvTATL3fkQDwKjqLQ6jbMo/d6x3ZtXL5k3deyQvl3bfdmgduWAmvUD23QKHjhq4qxFK9f/fvBaAmdV0pKPCQxN1eoo600deWzdjP4tq+RXkjj3co17jF9x4EYy6+9wkIrAgNxD7rE+Us8uHdCqqo+K9OHp36z3rIPRrJd7QzwIDMRvQQLrLO7I3E7lbSnrCjUfu+Ue6y5pyccEBvD5Ti3r5vHOCa2KKciQ3OsMWHkxnXV0OEhFkCUO3a+wLjQnxzf0IiPJEdBt9RPWyb0hHgR6c/3hOevg1k9B7mRkirLf70hgHSQtKkigF/uBz1myl+u7FyUTsf1k3LF0lix1njeBzlRd77NEqQeHV1KSabkGzr3KUiVNy02gE0WrcJYmamFDRzKPfB02pbA0cT+6EUj3+RmWJH5VIxsyJ9cOO9NZkugRzgTSVDnAUqRu/sqBzM+j+wENS/FsgAOBuFKbWQLNvs5uJBfefY+xFA+D7QiEFVquYXEn+nmRvBQafJYluNtZRZA511mpLOrOiKIkR76j77C4iOYEmfnyIYs68qWK5ErZ/ACL216YICMFtrKY1JX+JG9lfk5iMUnD7Qjep+ofzyKejfMm+cs1+C6LuVaX4F3+Z1jExS72ZBlULQ6ymNVeBP9xmqFmQdrt9ciSlFucxMJieisJ3mhyjwXFzytOlsZjyD0WdqYSwf94r2dBydM8yBLZdLnLgjShbvQWl/Y9e7Z3oexG8V0MC0lf7EOWyq7XIxb09Bv6R9EFcfxKfGhJylbKHGMh2jBfsmQOg6JY0CFfeq3sM34jfZI9ZRs5xqexkD0BZOlcRsWwkKiP6ZWyz/g/EXUom/gknIWcqEPWwH1iAgt4XoGILvA7lrhTNpBzkZYFXG5O1iLPzGTOXLiCavJ7Hrciq9fiIQu421FJViT/wjTOVH36jT+w1YesmvdGFhDTz46sTJHVnJnNFM4figtWkNVSdI9hAeu9yQp9epUzdp3COSNHS5GV8j3MAu42JutkOyyRM3KTwjlDqWPsyArZjkjhzKlnOJHVKryNM3CbwjgTV6qT1al8kQWcrkBWrdk9/sA6qseZ0S70JKuSa66GMxffT0lWznFyGr+nHilucKZihzmQ1cgxKJoFbPGhbKDUYX7HDQVRQAxnLrKDgqyCos0dFvCgBWUTHZ7yf2IC6JWqcSzgbD2yArVOsgDNXBfKNtwXaviNuKr0mv95FrKjNFk4300s5EIlylb8lyfyK8nLStMbNkOTWID6Zy+yYLnnpbGA5GE2lN3k7Ngn+FsPekux/SwkYYwTWSj7ITEs5GBxgv/59gULedRFRRZI0e4eC4nuoiD4f3l+Y0GXGpHFqXuGBYV5Efyn4V0WdLa1iiyIIvA4C7ofSPAOp5lqFnSzRw6yEDbfXGFB2vkuBO+reI6FPR7iShbAofddFnalOkEGbAYnsbCYSXlJ5txGPGNhqWPsCDL20V4WkbywKMmY99Q4FvFXSYLMdXjEItRrypNMFVuUwiKieioIhDiNSWAxu+qQDAWs1bCI5Ck5CcR4L1azmIih3iQr7r3Oshjtr4UIpCi9k0WptzWzIZlQ1F2dzKIOVSSQqt45Fvdkqh/JgM/IWywuPJBAB8qO91mCvzo5kVnZBu3UsLhnwTYEunEYHscSxC2uSmZTavozliBpoiuB7jwXpLMUV0KKkxnk63GMpdCuKECgH78tLE349No2ZEKKgLFntCzJ/goE+vvkIEv0cnVbNzIJh6aLHrJEpxoTZE2VLVqWKP3gAF8ysvzdtyexVHvrEWRdyeVpLNn16bVtyEgUAWP/Zsk0GyoSGEbBOYksXdz+Sc29ycDcvxi9I4qlS1vqR2A4uX94wTqJ3BDyiRMZhF2lXiuva1kXCbN8CAzLecAD1pH6ws9dyigpK4q2nX08hXX0YqwHgeHZdQ5n3cX/tWJsh1o+CtKNZ5U2wxbvi2Ld3f/eicA4lEGnWU8p13eHhrT0dycRTmWa9pu99VIC6ym8sy2BEVVbHMdZEX3l1MHf1y2bP2X0oO86BDX8pOYXLdr3GDBy0txf1mzbf+LiU86KlLX1lQRG5tTpT5al831zEZiE7+THLDMxoQEEpmMTuCWdZUN7sL0DgYnlHRzOsvBg/EcEZlHjl3g2s7SNjVQEZuPc9reXbDZJ27p5EpiZTe3p19kMHixq4kAgD8UHHExnE9KeGeNPICtubVa/ZJNI2tY9H4EMqT6ZFs5G9nBREwcC+fIJmno4gY0i7cyCDr4KAtlTfdz9l8saNqQ7a7+vbk9gQVzqDtvymA0gdt+EwLwEFqlgq/Grjz3Wsn5e/r1hWqdSSgIL51CyUa/pG89Gs0SJV36fN6BF+ZwE1sWtwpcDpy1cuXH3n2evP4hO43+pYx/dOH/0j82/Lpo5vG3VvATZgq1bft8KASUK5MpBAAAAAAAAAAAAAAAAAACWSeHoUcCvfPV6TVt/Gzxo1KTZPy+eO3l0SK/ObQLr1/AvUdDTSUlghZTelYP6zwg7/kDDIrRPz2yeG9K2ZiEbAsvn6t+s95Tf/ryTxjrTPDyxfuaAVlXzElgk70YjNtzUctY92T2lbUkVgcVQ+H41afdTNqikk4uCqzsTyJydf5d5f8WzkWgjwkY0zk8gT8qKQ/ensPHdWdzGk0BminQLe8Emoz0/vaETgUy4By28ySaXenhUNRsCM7P7dMJJDZtL7La+pQjMJmennYlsbo+Wfm5DYHr2LTelsDw8C62lIDAlmy9WxLGc3J9ekcBEFNXnP2P5ufFjKQLjKzvpLsvVxWFFCYypyPDLLG8n+nsTGEn9HVo2BHX8s7vXzv61d9vaZaHzlqzetPvwqUu3HkWnskGkh9UkMDyHbpc5K2Iv7Vw0smNdX6+ctpQJpVPuQlVafj9z/fEHGs6Ks53sCQwq34TnrBd1xL5l47o1KO1KOrEpWKNNyNzNZ16yfqIm+BAYTKXVaay7hGOh3Ss5UNYUajZmy13WQ3pYTQJDsPnqKOvqye5Jrf2UZCjudb5fcTGddXW2kz1BFrkPjmSdPFg3rIEXGUEO/87zjqaxTqIm+BBkQfHQBNZB/Pa+JcmonBrOvMi6SA+rRqAnn8XpLJn62LhatmQKeb9eGsk62FWRQA8e05NZqogFzXOSKfn12hzDkm0uS6Aj55GxLE30uq6FyAxUVUceUrM02jW+BDqw6/OUJUla1zwHmY9n8J9alkS9rDCBRMoOd1iKtB3tncncCgw6w5KkLcxPIEWzyyyB9nBPD5KH4qOushTJM/MQiPn0OEvw90AfkpNyk26zBAkT3QmEVNjN4sLH+JL8VJ39iMXFjHYmyIzLPA2L0WyuTTKlbLqXxd0PIshYiwcsJm52UZKzUqEJLGrXRwQf8tnCYm73dyW5cxtwi8Ukj85B8C5lv3gWcbiFkiyBsuleFhNRn+BtFU6zsNSV/mQ5SoUmsIi1+Qj+4TRdzYKejfMiy+I24BYLi+unInit8V0WdL+7PVkeZeApFnauKr3Dxt7ehrIf7zAW9HyAPVmoZhdYkPbnXPSvSsuTmZOXVqDsRdEzhoXE/+BKlkvR5joLivpWQa/ZbeQ39vlRNlLqKAtJme1Jlk317R0WtMWOXrHbyv9KGWlL2YTd2FQWoF5akCyf7XcPWciOHET0C7/tclXKFqpfZSEbS5J1sB/wjAWsJvJK43do5rmQ1XNZoGUBeyuR9XAeEc2Z0hSikfy++03JyjW9zwJO1SPr4jY+njMzic7zh8K8yIrlDWMB0d0UZHW813AmrlA4ZyC6q4KsVeeXLGBNXrJK9a5zhm5QOGfokC9ZpWIHWMCdhmSt7EYkcQZu0XHOWPIIW7I6NkOSOHPpUx3JihXZzh86ScGcmYtVycpUPMcCTpUnK9f8Hr/vO3JN4MxofytMVqTASi1nLq6Pkqye4+Q0fkeCK9FwzlzKNDeyEq4Tk1jAZh/KFkoe5LcNp1cms4AX/e3ICtgEP2MBD5pTttH+Cf9rMr02XsMCbrYiixcYzgI081woG8k5O4FfixtNb1S9xEKOVyeLVvEQC7lUlbIZ1+Djl/4+HOxC/7IdkcxCNhQji1VotZYFpIyyJSDyPchC0uZ4kEXKOSWFhRzxI3hN0eUlC4kZbE8Wx7bPcxYS00NB8I+861hQZD9Hsig5etxiQZvyEbytcSQLihrlThbDJeQRC3rYguA9znM0LCh+ej6yCJ7jo1mQ9qecBB+qfIGFpS4uTrJXcG4SC7tWiyBDtsOSWZgmzJ9kreTydBaWNi4HQWaKH2Axe+qQbFXerGURx0oTCPkygsWcaK4gOaq/n8Xca6cgEGbbJ4rFhA/MQzLjFnyOxcQMsScQl3NyMotJ29RYRbKhqPNrMotJm5ubQJqCq7Qs6uHE4iQLPiNvsbhNxQmkCzjIEhzu6EhmZtdyp4bFnaxJoJsmV1mC2J+rkBmVmRnFEtxpoyDQlarnE5bi8gBPMgvX7idZiuhBOQj04fxjIkuh/nNwKTKxwr33pLIUabNyEegr/1I1S3Nrzme2ZCLKahMvsTTa9R8RZEXRhcksUez6DrnJ6FyClj9jidJXlSHIKq/JsSyV5ujQMmREhfv8kcpSJc0vTGAIOYc+YenuhH5TnIygQMvpl1i66Al5CAzF/rvbrIsXu8Y2yEUG41R78KaHrIvHg10JDEn19QXWUcSqXhVtKYsUpTotOq9m3dzskYPA4BodYZ0lH53Zvrq3gvThEdBy/N5Y1tn5NioCo6ixXcv6SL62MzSkZUAuksS5bGC/WVsuxLFejjQkMJ4yi2JZf7EXtswK+a7Dl1/UrFA8X04bekPp4vVRuer1m7fvMWBK2Oko1l/y6uoExuXY8QgbSMqLyKuX70QlsYGc7eVOYAK+Ux6z7LycV57AVGyabVOzjGj3tbUnMCnvoREsE5E/FCYwg09WJrHZpYZ9oSQwk5w9D6vZjDRH+3kQmFWudmtj2CziN37rSSADNnVm3mATiwxtkINAPkqEHFGziWhPjy5PIDu52q2NYaNL2t49H4FM2daduD+WjSb56MxARwJ5U5bq9NM5NRuYNnxFcIAtgYVwrDVofSQbSNTvoz53J7A43s0m7n/OWRJ3fHbbogQWzKVcs/5ztl1KYJ2kRuxeOLhVRQ8Ca+FZufXQRX/ciNeykKTIw8vHdKjloySwVo6ehUtXrtOkdec+Q3+cuWjx7AnD+3VtG1ivatmieZ2VBAAAAAAAAAAAAAAAAABgoZTOnoVK+AeUKpzHRUVg/RyK1+04MnTl+h0HT1y88TA6hd+SFvPo1qVTh3ZuXLXoh24Ny7gRWA3bwrW+HjJ/69ko1kH8tb1Lx3VrWNaNwHLl/mzQrycfaTgrEq7tmtympIrAoiiKBv24/T4bTNLJRd9VcyawAHb+neceiWUj0EaEDW+Un0C+vNovu5DGxhW1d0wNGwLZcWww4yKbSNy2vqUI5EMZMHR/CpvWwxXfeBPIQMEu656zeVye3cSFwIzsA+dfZ7NK+3NMZQKzUH2+PJbl4PbEcgSmVm3eU5aPK6OKEZhOmYm3WW7ODPQhMIXCwy6yLGmPBHsSGFee3kdZxtR7vs1JYCyKprvUbFhJ8Wo2rJSNdQmMwbnPDc4a9f1j62aOHdy7c5tm9WtU8CuQ21FBRHZu+YqVrVKncasOPQeMnLRs3/VEzqLLPZ0IDKzwjBjWk/rB8bCZ37eq6qMiaTw+bvLdxFWHbqWwvqJnFCUwoFob1ayHxOOh3asXUJGeFHkrtp648xHrQ7P9cwWBQdh98zfr7PneqV+XVJIh5KkfsvqKmnV2rZczQZblGf2YdXN38+imBcjA7Ct2nf9nHOsmdk5xgiwptzSFdXFldhN3MhpF8W7rolgX2l0NFQT6qriHdfBw5TfeZHSKCiF7klgH11orCPTht17LUsVv71eKTCZH3YmnNCzZ+UACnfksUbM06UfH1rQlU3P/MjSCpTrxGYFOPGYksySpW1u7kLkU7HecJTpUg0Ay59GxLIXmYDd3Mq8iQy+wNDsDCCSx6/uUpfh7YH6Sg5LjIliSjaUJRCk73mUJbvzgR/IRMC2SJdD8WoxAWPMrLO7RrEokM4qaC56xuPTFBQgy9/ExFpUeVk9JcqT6PCydRaVMdiLImOO0dBbzckoBki+fiVEs6l5zgow0vstirvZ0JHmz73yORf1ehOB93mEsQrvzCwVZgE82qFlE0kg7grcpg2NYWMICP7IUBSY9ZxHXPyP4T7njLOzuIDeyJA5dLrCItfkI/p/jlHQWdCxIRRan9iYNC4rrryJ4pcFtFnS+MVmmsptZ2Pnq9JYa85cvn1+NshuvtSzo5tcKslgVd7Mg7RIPeqP5RX7tbHvKThQ9olnIo562ZNFqHmJBz1vSa+3U/I+DxSnb8DvCQl4OcSCLV/8kC9F0oFdaq/k/ycNtKVuwHZnCAhInuJFVCDzPAjTfENk84ndcrELZQJVLLCBtvhdZC8VX4Zy55/bUkt+jmetCVs55joYzp1lVhKyJquNtzlRH+oM/ENmUrFqjeyzgr7JkbWz7xHAm/qRwzkCYF1ktz99YQHR3BVmhvKs4YxEUzhmJ7qYg69ThOQtY60VW6tOrnJGbdJUzdtiPrFCRP1jAnYZkvWyHJPKHbtA8zkTKSFuyMqqBiZw59TRHsmoFN/MHZlFpztTVRmRV6pxjAafLk9VrcpvfU4poH2duX3myGiW2s4D4vkrKBhzGp/Lb9hGRx0XOnGa5D1mFPKHpLGCLD2UTvvv4Pxc96JU8V1lA0ngXsnj2w2JZwIMWlI20ecRvXM1Dr7ku0LKAJz1VZNEU7SNZgDbUlbIVx86n+JVzne3pH9WvsJCrjcmCfXqGhVytQdmPXyX/EvQ2u9EpLGR/BbJQfltZSOpYO4L/KXGEhWhX+JAF8pyfzkKOliJ4Q9E9moUkTfIkC+M6PJaFxAUrCP7jvZ4FJc4tRBYk78QYFrTVh+BdgfdZUPrK0mQhiixIZkGPWxJ8wGW+hgVpt1YjC1D2VzUL0i52I8hItcss4nBDkrka27UsLOJTgkzYjkxhEefbqEi+Gh1hEekT7Aky57uNxdzsaU+ypGp7gcXsLUsg7NO/WczjYV4kO269brGYSw0JRCnaR7KY9K3NbEhGFHV/TWYxj7uqCKSwHxbLop5MLUEyUWDUbRaVMNaJQCrPBeks7mgXZzI7u1a7NSxKs8SbQBd+W1mChKU1yazKzn7OEuwuS6Cr2mdYiutDvMlMcvY8zVJc+JxAD4p291gK9Y5u3mRybm3XJLEUDzspCfRjPzSWJdGeGlWeTOij7w+ksyTxoxwJ9Jd7UgxLFLmgQQ4yAWXNKVdZorhpeQmyxnXoE5YqfuO3nmRULi1XRLFUUaPcCbLOvuctlkxzdGg5JRlHsd57UlmyyH6OBIahanuedRB/cHKLfGRQuRqM2fmcdRDeyZbAgBoeYd082Di4tjMZgF3lPqsiWDdngpQEBlZ9m5Z1pL64uGs5Femv2NdzTqSwrg7UJzCGMqvSWXcp13eHhrT0dycdOJVp2m/21ksJrDvtlioExlJoXgLrK+bsxunBDf1clJQphWORel0nrDnxlPWVurI0gTE5dznGWZT8/N61M4d3blgROu2HwYPGTJm/LOz3g6eu3HmWqOWsudQ/N4HRlZz2lGUo9qfKBKZh23y7muXlcAdHAhPyHhrBsvFoUnECk/tkeSLLQPrmJioCs3DtdoLN7FpIXgIzKtL3j1Q2E83x4WUJzM6l5YooNrn4jZ3yEMiEsvqkS2xCd+d/kYNAXgr32ZPKJqA5PrwcgSy5BC1/wEb1YlOnPARylv/LKYcS2AjSTs//xldBYAFU5botuaRhw7m9pn81ewKL4lJn6OZHnGUxe8c3zUNgoQo06TNz8/lY1kPytZ0LBgWVVBBYvlwBLUNCd4UnswTqOwd+GdmuureCwNoo8tUI6hgcMnZa6IoNu478HX7/ZWp6zMOIc3/t2bTqpxnjhvTu9FXdIjYEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgKP8HFbVjulDNbOwAAAAASUVORK5CYII=" />
                    </defs>
                </svg>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div>
                    <img src="<?= base_url(); ?>/img/risma.png" class="img-fluid mb-3" style="height: 177px; width: 177px; border-radius: 100%; border: 3px solid black;">
                </div>
                <div style="font-size: 24px; font-weight: 500;">Wiraswanti Rismanda P</div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div>
                    <img src="<?= base_url(); ?>/img/nadia.png" class="img-fluid mb-3" style="height: 177px; width: 177px; border-radius: 100%; border: 3px solid black;">
                </div>
                <div style="font-size: 24px; font-weight: 500;">Sabila Nadia I</div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center mx-auto my-5">
                <div style="height: 177px; width: 177px;"></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid text-center" style="background-color: #45484E;">
            <div class="d-flex flex-row px-5 pb-5">
                <div class="d-flex flex-column mx-auto">
                    <div class="my-5 me-auto">
                        <a href="http://localhost:8080/"><img src="<?= base_url(); ?>/img/logo si jeo.png" class="img-fluid" style="height: auto; width: 197px;"></a>
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
                    <div class=" mt-2 me-auto"><a href="#tentang" class="ft-tentang" style="text-decoration: none; font-size: 20px; color: white;">Tentang</a></div>
                    <div class="mt-1 me-auto" style="font-size: 20px; color: white;">Penawaran dan Promo</div>
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
                            <input type="text" name="message" class="form-control custom-form mt-2 p-0 pb-2" id="email" style="border: none; background-color: #45484E; color: #FFFFFF; font-size: 20px;" placeholder="Apa yang dapat kami bantu?">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        // 'https://images.pexels.com/photos/3941286/pexels-photo-3941286.jpeg',
        // 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60',
        // 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
    </script>
</body>

</html>