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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Vendor</title>
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

        .btn-daftar:hover {
            border: 1px solid #FFA931 !important;
            color: #FFA931 !important;
            background-color: #E4E0E0 !important;
        }

        .btn-selesai:hover {
            border: 1px solid #FFA931 !important;
            color: #FFA931 !important;
            background-color: white !important;
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
    <div class="container-fluid" style="background-color: #E4E0E0;">
        <h3 class="text-center py-5" style="font-weight: 600;">FORMULIR PENDAFTARAN VENDOR</h3>
        <form>
            <div class="row mx-5 d-flex justify-content-center align-items-center mb-3">
                <div class="col-4">
                    <label for="namaVendor" class="form-label" style="font-weight: 500; font-size: 30px;">Nama Vendor</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="namaVendor" style="border: 1px solid black;" required>
                </div>
            </div>
            <div class="row mx-5 d-flex justify-content-center align-items-center mb-3">
                <div class="col-4">
                    <label for="emailVendor" class="form-label" style="font-weight: 500; font-size: 30px;">Email Vendor</label>
                </div>
                <div class="col-8">
                    <input type="email" class="form-control" id="emailVendor" style="border: 1px solid black;" required>
                </div>
            </div>
            <div class="row mx-5 d-flex justify-content-center align-items-center mb-3">
                <div class="col-4">
                    <label for="noVendor" class="form-label" style="font-weight: 500; font-size: 30px;">No. Hp Vendor</label>
                </div>
                <div class="col-8">
                    <input type="number" minlength="11" class="form-control" id="noVendor" style="border: 1px solid black;" required>
                </div>
            </div>
            <div class="row mx-5 d-flex justify-content-center align-items-center mb-3">
                <div class="col-4">
                    <label for="alamatVendor" class="form-label" style="font-weight: 500; font-size: 30px;">Alamat Vendor</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="alamatVendor" style="border: 1px solid black;" required>
                </div>
            </div>
            <div class="row mx-5 d-flex justify-content-center mb-5">
                <div class="col-4">
                    <label for="deskripsiVendor" class="form-label" style="font-weight: 500; font-size: 30px;">Deskripsi Vendor</label>
                </div>
                <div class="col-8">
                    <textarea name="deskripsiVendor" class="form-control" id="deskripsiVendor" cols="30" rows="10" style="border: 1px solid black;" required></textarea>
                </div>
            </div>
            <div class="d-flex text-center justify-content-center align-items-center mx-5 pb-5">
                <input type="submit" class="btn btn-daftar" style="background-color: #FFA931; width: 285px; height: 60px; color: white;" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" value="Daftar">
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="py-5" style="font-weight: 600;">Pemberitahuan</h3>
                    <div class="text-center">
                        <span>harap tunggu , pihak kami akan</span>
                    </div>
                    <div class="text-center">
                        <span>menghubungi anda melalui Whatsapp untuk</span>
                    </div>
                    <div class="text-center pb-5">
                        <span>proses selanjutnya.</span>
                    </div>
                    <div class="d-flex text-center align-items-center justify-content-center mx-5 pb-5">
                        <button type="submit" class="btn btn-selesai" style="background-color: #FFA931; width: 285px; height: 60px; color: white;">Selesai</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>