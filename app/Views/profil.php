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
    <title>Profil Customer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .bg-1-lanpaggue {
            background-image: url("<?= base_url(); ?>/img/landing page 1.png");
            background-size: cover;
            background-repeat: no-repeat;
        }

        #link-nav2:hover {
            color: #FFA931 !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid text-center bg-1-lanpaggue sticky-top">
        <div class="d-flex flex-row align-items-center justify-content-end p-2">
            <div class="me-auto">
                <a href="http://localhost:8080/"><img src="<?= base_url(); ?>/img/logo si jeo.png" class="img-fluid" style="width: auto; height: 60px"></a>
            </div>
            <div class="mx-5">
                <a href="<?= base_url(); ?>" id="link-nav2" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">Home</a>
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
    </div>
    <div class="container-fluid d-flex" style="height: 180px; background-color: #FFA931;">
        <div class="row">
            <div class="col ms-5 d-flex flex-col justify-content-center align-items-center">
                <img src="<?= base_url(); ?>/img/vector rasyid.png" class="img-fluid" style="width: 115px; height: 115px; border-radius: 100%;">
            </div>
            <div class="col ms-2 d-flex flex-col justify-content-center align-items-center">
                <span style="font-size: 32px; font-weight: 600; color: white;"><?= $_SESSION['username']; ?></span>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 mt-5" style="background-color: #EBEBEB;">
        <div class="row g-0 py-3">
            <div class="col-6 d-flex justify-content-start align-items-center ps-5" style="font-size: 20px; font-weight: 600;">Nama</div>
            <div class="col-6 d-flex justify-content-end align-items-center pe-5" style="font-size: 20px;">Nadelye Aurorae</div>
        </div>
        <hr class="mx-5 my-0">
        <div class="row g-0 py-3">
            <div class="col-6 d-flex justify-content-start align-items-center ps-5" style="font-size: 20px; font-weight: 600;">Jenis Kelamin</div>
            <div class="col-6 d-flex justify-content-end align-items-center pe-5" style="font-size: 20px;">Perempuan</div>
        </div>
        <hr class="mx-5 my-0">
        <div class="row g-0 py-3">
            <div class="col-6 d-flex justify-content-start align-items-center ps-5" style="font-size: 20px; font-weight: 600;">Tempat Lahir</div>
            <div class="col-6 d-flex justify-content-end align-items-center pe-5" style="font-size: 20px;">Malang</div>
        </div>
        <hr class="mx-5 my-0">
        <div class="row g-0 py-3">
            <div class="col-6 d-flex justify-content-start align-items-center ps-5" style="font-size: 20px; font-weight: 600;">Tanggal Lahir</div>
            <div class="col-6 d-flex justify-content-end align-items-center pe-5" style="font-size: 20px;">09-05-2003</div>
        </div>
        <hr class="mx-5 my-0">
        <div class="row g-0 py-3">
            <div class="col-6 d-flex justify-content-start align-items-center ps-5" style="font-size: 20px; font-weight: 600;">Email</div>
            <div class="col-6 d-flex justify-content-end align-items-center pe-5" style="font-size: 20px;">auroraenadyline@gmail.com</div>
        </div>
        <hr class="mx-5 my-0">
        <div class="row g-0 py-3">
            <div class="col-6 d-flex justify-content-start align-items-center ps-5" style="font-size: 20px; font-weight: 600;">No HP</div>
            <div class="col-6 d-flex justify-content-end align-items-center pe-5" style="font-size: 20px;">089567492512</div>
        </div>
        <hr class="mx-5 my-0">
        <div class="row g-0 py-3">
            <div class="col-6 d-flex justify-content-start align-items-center ps-5" style="font-size: 20px; font-weight: 600;">Alamat</div>
            <div class="col-6 d-flex justify-content-end align-items-center pe-5" style="font-size: 20px;">Lowokwaru, Malang</div>
        </div>
        <hr class="mx-5 my-0">
    </div>
    <h4 class="mt-5 ms-5" style="font-weight: 600;">Riwayat Pesanan</h4>
    <div class="container-fluid my-4 px-0">
        <div class="row g-0 py-2 mx-5" style="background-color: #D9D9D9; border-radius: 10px;">
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px; font-weight: 600;">Kode Pesanan</div>
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px; font-weight: 600;">Nama Pesanan</div>
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px; font-weight: 600;">Nama Vendor</div>
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px; font-weight: 600;">Status</div>
        </div>
        <div class="row g-0 py-2 mx-5" style="background-color: #EBEBEB; border-radius: 10px;">
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px;">#0001</div>
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px;">Paket Platinum Acara Dies Natalis ALEA (Decoration 2023 untuk Mahasiswa)</div>
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px;">Alea Decoration</div>
            <div class="col-3 d-flex justify-content-center align-items-center" style="font-size: 14px;">Proses</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>