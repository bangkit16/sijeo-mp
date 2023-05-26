<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <title>Vendor SI JEO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .btnpesan {
            background-color: #FFA931;
            color: white;
            font-size: 14px;
            padding: 3px 28px;
            height: 50px;
            width: 210px;
            font-weight: 600;
        }

        .btnchat {
            height: 50px;
            width: 175px;
            font-size: 18px;
            font-weight: 600;
            border-color: #FFA931;
            color: #FFA931;
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

        .flex-container {
            display: flex;
            flex-wrap: wrap;
        }

        .flex-item {
            flex: 1 1 33%;
            padding: 5px;
            border-radius: 10px;
        }

        .img-fluid {
            border-radius: 10px;
        }

        .checked {
            color: orange;
        }

        #more {
            display: none;
        }

        .custom-form {
            border-bottom: 1px solid black !important;
            border-radius: 0%;
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
    </nav>
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
    <div class="container-fluid px-5 mt-5">
        <div class="row">
            <div class="col-5">
                <div class="d-flex flex-column">
                    <div class="p-1 mx-auto">
                        <div class="flex-item">
                            <img src="<?= base_url(); ?>img/vendor-img-4.jpg" class="img-fluid" alt="Big Product Image">
                        </div>
                    </div>
                    <div class="p-1 d-flex flex-row ">
                        <div class="flex-item">
                            <img src="<?= base_url(); ?>img/vendor-img-2.jpg" class="img-fluid" alt="Small Product Image">
                        </div>
                        <div class="flex-item">
                            <img src="<?= base_url(); ?>img/vendor-img-3.jpg" class="img-fluid" alt="Small Product Image">
                        </div>
                        <div class="flex-item">
                            <img src="<?= base_url(); ?>img/vendor-img-1.jpg" class="img-fluid" alt="Small Product Image">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row row-cols-auto">
                    <div class="col-3">
                        <img src="<?= base_url(); ?>img/vector rasyid.png" class="img-fluid" aria-rowspan="3" style="width: 109px; height: 109px; border-radius: 100%;">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <span>Alea Decoration, MALANG</span>
                        <div class="pt-1">
                            <span class="pt-5">Acara Dies Natalis | <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="black" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg> Malang</span>
                        </div>
                        <div class="pt-1">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span> 9 (reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 pt-1">

                <span style="font-weight: 600;font-size: 30px;">Paket Platinum Acara Dies Natalis ALEA (Decoration) 2023 untuk Mahasiswa</span><br>
                <span style="color: #FFA931; font-weight: 500;font-size: 30px;">IDR 20.000.000</span>
                <br><br><br><br><br>
                <div style="margin-top: 5rem;" class="d-flex flex-row align-items-center">
                    <div class="d-flex align-items-center">
                        <a style="font-size: 18px;" class="d-flex btn align-items-center justify-content-center btnchat" href="http://localhost:8080/login" id="btn-masuk">Chat</a>
                    </div>
                    <div class="mx-2 d-flex align-items-center">
                        <button style="font-size: 18px;" class="d-flex btn btnpesan align-items-center justify-content-center my-auto" id="btn-daftar" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan Sekarang</button>
                    </div>
                </div>
                <hr>
                <span style="font-weight: 600;font-size: 30px;">DETAIL PAKET</span>
                <hr>
                <div class="container-fluid" style="text-align: justify;">
                    <div class="row row-cols-auto">
                        <div class="col-3">
                            <span>AREA PELAYANAN</span>
                        </div>
                        <div class="col-9">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="black" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg> Wilayah Malang dan sekitarnya</span>
                        </div>
                    </div>
                    <div class="row row-cols-auto">
                        <div class="col-3">
                            <span>KAPASITAS ORANG</span>
                        </div>
                        <div class="col-9">
                            <span>Max. 5000 orang</span>
                        </div>
                    </div>
                    <div class="row row-cols-auto">
                        <div class="col-3">
                            <span>PERIODE ACARA</span>
                        </div>
                        <div class="col-9">
                            <span>Max. 3 hari</span>
                        </div>
                    </div>
                    <div class="row row-cols-auto">
                        <div class="col-3">
                            <span>DETAIL FASILITAS</span>
                        </div>
                        <div class="col-9">
                            <ul style="list-style: none;">
                                <span>1. Dekorasi:</span>
                                <ul style="list-style: disc;">
                                    <li>Dekorasi panggung utama dengan backdrop yang mencakup logo universitas atau tema Dies Natalis.</li>
                                    <li>Pengaturan bunga segar atau bunga artifisial yang menarik perhatian di sekitar panggung dan area acara.</li>
                                    <li>Penggunaan balon kustom dengan warna dan desain yang sesuai dengan tema acara.</li>
                                </ul>
                                <span id="dots"></span><span id="more">
                                    <span>2. Pencahayaan:</span>
                                    <ul style="list-style: disc;">
                                        <li>Pencahayaan profesional yang menghasilkan efek dramatis dan atmosfer yang tepat.</li>
                                        <li>Penggunaan lampu sorot untuk memberikan penekanan pada panggung, backdrop, atau elemen dekorasi khusus lainnya.</li>
                                    </ul>
                                    <span>3. Hiasan Meja dan Kursi:</span>
                                    <ul style="list-style: disc;">
                                        <li>Pengaturan meja dan kursi dengan taplak meja yang elegan dan hiasan meja yang sesuai dengan tema.</li>
                                        <li>Penambahan aksesori seperti pita, kain, atau dekorasi tambahan yang menambahkan sentuhan mewah.</li>
                                    </ul>
                                    <span>4. Pemasangan Backdrop dan Display:</span>
                                    <ul style="list-style: disc;">
                                        <li>Pembuatan backdrop yang menampilkan tema Dies Natalis atau logo universitas dengan desain khusus.</li>
                                        <li>Penggunaan display atau papan pengumuman yang menampilkan informasi acara dan prestasi universitas.</li>
                                    </ul>
                                    <span>5. Aksesori dan Hiasan Tambahan:</span>
                                    <ul style="list-style: disc;">
                                        <li>Penggunaan bendera, poster, atau banner yang menggambarkan semangat Dies Natalis dan pencapaian universitas.</li>
                                        <li>Hiasan tambahan seperti gantungan kertas, bunga kertas, atau elemen dekoratif lainnya yang mendukung tema acara.</li>
                                    </ul>
                                    <span>6. Peralatan dan Perlengkapan:</span>
                                    <ul style="list-style: disc;">
                                        <li>Penyediaan peralatan suara dan pencahayaan yang berkualitas untuk memastikan kelancaran acara.</li>
                                        <li>Pengaturan panggung dan area acara dengan perlengkapan seperti podium, mikrofon, layar proyektor, atau peralatan teknis lainnya.</li>
                                    </ul>
                                </span>
                            </ul>
                            <button onclick="selengkapnya()" class="px-4" id="selengkapnya" style="border-color: #FFA931; background-color: white; border-radius: 10px;">Lihat Lebih Banyak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="container-fluid text-center">
            <h2>PAKET EVENT TERKAIT LAINNYA</h2>
            <br>
            <div class="row row-cols-1 row-cols-md-5 g-4" style="text-align: start;">
                <div class="col">
                    <div class="card">
                        <img src="<?= base_url(); ?>/img/card detail 1.png" class="card-img-top img-fluid" style="height: 276,04px;">
                        <div class="card-body">
                            <h5 class="card-title">Paket Platinum Acara Dies Natalis ALEA (Decoration) 2023 untuk Mahasiswa</h5>
                            <p class="card-text" style="color: #FFA931;">Rp 20.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?= base_url(); ?>/img/card detail 2.png" class="card-img-top img-fluid" style="height: 276,04px;">
                        <div class="card-body">
                            <h5 class="card-title">Eksklusif Webinar untuk Acara Perusahaan (Bundle Package)</h5>
                            <p class="card-text" style="color: #FFA931;">Rp 12.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?= base_url(); ?>/img/card detail 3.png" class="card-img-top img-fluid" style="height: 276,04px;">
                        <div class="card-body">
                            <h5 class="card-title">Paket Bundle Bazar All In Event</h5>
                            <br><br>
                            <p class="card-text" style="color: #FFA931;">Rp 10.000.000-Rp 25.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?= base_url(); ?>/img/card detail 4.png" class="card-img-top img-fluid" style="height: 276,04px;">
                        <div class="card-body">
                            <h5 class="card-title">Dies Natalis Eksklusif untuk Perusahaan (All Event Decoration)</h5>
                            <br>
                            <p class="card-text" style="color: #FFA931;">Rp 22.275.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?= base_url(); ?>/img/card detail 5.png" class="card-img-top img-fluid" style="height: 276,04px;">
                        <div class="card-body">
                            <h5 class="card-title">EVENTLY PROJECT Seminar & Webinar Bundle Package untuk Semua Acara</h5>
                            <p class="card-text" style="color: #FFA931;">Rp 12.00.000-Rp 25.000.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h3 class="py-5" style="font-weight: 600;">Pesan Sekarang</h3>
                        <div class="row row-cols-auto mx-5" style="height: 140px; width: 589px; align-items: center; border-color: black; border-style: solid; border-radius: 20px; border-width: 1px;">
                            <div class="col-3">
                                <img src="<?= base_url(); ?>/img/vector rasyid.png" class="img-fluid" style="height: 120px; width: auto;">
                            </div>
                            <div class="col-9 d-flex flex-column justify-content-center">
                                <span>Paket Platinum Acara Dies Natalis ALEA (Decoration) - Ready...</span>
                                <span style="color: #FFA931;">IDR 20.000.000</span>
                            </div>
                        </div>
                        <div class="row row-cols-auto mx-auto pt-5" style="height: auto; width: 589px;">
                            <span>Sebelum melanjutkan ke proses pembayaran, mohon lengkapi tanggal layanan dan metodee pembayaran terlebih dahulu</span>
                            <form class="pt-4" style="width: 100%;">
                                <label for="tgl" class="form-label" style="font-weight: 600;">Tanggal Layanan</label>
                                <input type="date" class="form-control custom-form" style="border-style: none;">
                                <label for="metodebyr" class="form-label pt-4" style="font-weight: 600;">Metode Pembayaran</label>
                                <select class="form-select custom-form" aria-label="Default select example" style="border: none;">
                                    <option selected></option>
                                    <option value="1">Transfer</option>
                                    <option value="2">Dana</option>
                                    <option value="3">LinkAja</option>
                                </select>
                                <div class="d-flex flex-column text-center align-items-center py-5">
                                    <button type="button" class="btn" style="background-color: #FFA931; width: 285px; height: 60px;">Bayar DP - Rp 6.000.000</button>
                                    <br>
                                    <button type="button" class="btn" style="background-color: #FFA931; width: 285px; height: 60px;">Lunas - Rp 20.000.000</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
            <script>
                function selengkapnya() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("selengkapnya");

                    if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        btnText.innerHTML = "Lihat Lebih Banyak";
                        moreText.style.display = "none";
                    } else {
                        dots.style.display = "none";
                        btnText.innerHTML = "Lihat Lebih Sedikit";
                        moreText.style.display = "inline";
                    }
                }
            </script>
        </div>
</body>

</html>