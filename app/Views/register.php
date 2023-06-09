<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url("<?= base_url(); ?>/svg/bgregister.svg");
            background-size: cover;
            background-repeat: no-repeat;
            /* background-attachment: fixed; */
            background-position: center;
            background-position-y: 90px;
        }

        .form-container {
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 0;
        }

        .login-form {
            width: 100%;
            /* width: 682px; */
            height: 100%;
            margin: 54px;
            padding: 50px;
            background-color: rgba(255, 255, 255, 1);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border: 0px;
            border-bottom: solid 2px;
            border-color: #E9EAEA;
            border-radius: 0px;
        }

        .form-control::placeholder {
            /* transform: translateX(-5px); */
            font-size: 20px;
            color: #959698;
            font-weight: 500;
        }

        .form-check-input {
            height: 35px;
            width: 35px;
            border-radius: 100px !important;

        }

        .form-check-input:checked {

            background-color: #3CDB7F;
            border-style: none;
            outline-style: none !important;
        }

        .btnreg {
            background-color: #959698;
            width: 100%;
            height: 70px;
            color: white;
            font-size: 24px;
            font-weight: 400;
        }

        .btngoogle {
            background-color: #FAFAFA;
            border-color: #333;
            width: 100%;
            font-weight: 500;
            font-size: 24px;
            height: 70px;
            padding: 10px;
        }

        .imggoogle {
            width: auto;
            height: 80%;
            margin-right: 10px;
        }

        .kiri {
            width: 100%;
            /* width: 682px; */
            height: 100%;
            margin: 54px;
            padding: 50px;

        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row form-container ">
            <div class="col-6 d-flex align-self-start">
                <div class="kiri d-flex flex-column">
                    <span style="font-weight: 500; font-size: 32px;">Persiapkan Acara dengan Beragam Kemudahan & Penawaran Eksklusif</span>
                    <span style="font-weight: 400; font-size: 23px;">Daftar sekarang & dapatkan harga terbaik untuk lengkapi kebutuhan acara Anda</span>
                    <img class="mt-5" style="width: 100px;" src="<?= base_url(); ?>img/standard.png" alt="">
                    <span style="font-weight: 500; font-size: 24px;">Vendor & Produk Terlengkap</span>
                    <span style="font-weight: 400; font-size: 23px;">Lengkapi kebutuhan pernikahan Anda dengan 5.000+ pilihan produk dari 20.000 vendor acara profesional</span>
                    <img class="mt-5" style="width: 100px;" src="<?= base_url(); ?>img/shopping-cart (1).png" alt="">
                    <span style="font-weight: 500; font-size: 24px;">Sesuaikan Pesanan dengan Impian Anda</span>
                    <span style="font-weight: 400; font-size: 23px;">Ingin menyesuaikan pesanan dengan kebutuhan? Konsultasikan bersama vendor & pesan produk sesuai keinginan Anda</span>
                    <img class="mt-5" style="width: 100px;" src="<?= base_url(); ?>img/social-marketing.png" alt="">
                    <span style="font-weight: 500; font-size: 24px;">Promo Eksklusif & Hadiah Menarik</span>
                    <span style="font-weight: 400; font-size: 23px;">Jangan lewatkan kesempatan untuk memesan vendor dengan promo eksklusif di Si Jeo & beragam hadiah menarik selama online event!</span>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center ">
                <div class="login-form d-flex">
                    <form action="<?= base_url(); ?>Customer/register" method="post">
                        <div class="row ">
                            <div class="d-flex flex-row justifi-content-center align-items-start" style="text-align: left; ">
                                <h2 class="me-auto" style="font-size: 40px; font-weight: 500;">Daftar</h2>
                                <a href="<?= base_url(); ?>" class="btn ms-auto" style="font-size: 30px; font-weight: 500;text-decoration: none; color: #FFA931;">Home</a>
                            </div>
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <button class="btn btngoogle"><img class="imggoogle" src="<?= base_url(); ?>img/logo google.png" alt=""> Google</button>
                        </div>
                        <div class="row ">
                            <div class="d-flex flex-row justify-content-center align-items-center py-auto">

                                <div class="" style="width: 100%;">
                                    <hr style="color: #959698; border: 1px solid;">
                                </div>
                                <div class="d-flex justify-content-center align-items-center s" style="width: 100%;text-align: center; ">
                                    <p class="d-flex my-auto" style="color: #959698;">atau lanjutkan dengan</p>
                                </div>
                                <div class="" style="width: 100%;">
                                    <hr style="color: #959698; border: 1px solid;">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input name="password" type="password" class="form-control" placeholder="Kata Sandi" id="id_password">
                            <i class="bi bi-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;color: #959698;font-size: 1.5rem;"></i>
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input name="nohp" type="text" class="form-control" placeholder="Nomor Handphone">
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input name="sendemail" class="form-check-input mx-2" type="checkbox" value="">
                            <p>Saya ingin menerima email promo dan newsletter dari Si Jeo dan rekannya</p>
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <button type="submit" class="btn btnreg b">Lanjutkan</button>
                        </div>
                        <div class="mt-3 d-flex flex-row mb-5 justify-content-center">
                            <span style="font-weight: 400;font-size: 16px; " class="align-self-center">Dengan mendaftar, saya menyetujui <a href="" style="color: #FFA931;text-decoration: none;">Syarat dan Ketentuan</a> Si Jeo</span>
                        </div>
                        <div class="mb-2 mt-1 d-flex flex-row justify-content-center">
                            <span style="font-weight: 500;font-size: 20px;  margin-top: 50px;">Sudah Punya Akun? <a href="<?= base_url(); ?>login" style="color: #FFA931;text-decoration: none;">Masuk</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('bi bi-eye');
        });
    </script>
</body>

</html>