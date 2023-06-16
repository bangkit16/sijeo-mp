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
            font-size: 18px;
            font-weight: 600;
            background-color: #FFA931;
            color: white;
            padding: 3px 28px;
        }

        .btnchat:hover {
            border-color: #FFA931 !important;
            background-color: white !important;
            color: #FFA931 !important;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important;
        }

        .btnUkuran:hover {
            border: 1px solid #FFA931;
            background-color: white !important;
            color: #FFA931 !important;
        }

        .btnWarna {
            width: 209px;
            height: 42px;
            font-weight: 600;
            background-color: #D9D9D9;
            cursor: pointer;
            font-size: 18px;
            color: black;
            padding: 3px 28px;
            border: none;
            border-radius: 5px;
        }

        .active,
        .btnWarna:hover {
            border: 1px solid #FFA931;
            background-color: white;
            color: #FFA931;
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

        .inline-group {
            max-width: 9rem;
            padding: .5rem;
        }

        .inline-group .form-control {
            text-align: right;
        }

        .form-control[type="number"]::-webkit-inner-spin-button,
        .form-control[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .dhidden {
            display: none;
            transition: 2s ease;
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
    </style>
    <script>
        let data = JSON.parse('<?= json_encode($store) ?>');
        let dataPaket = JSON.parse('<?= json_encode($paketDetail) ?>');
    </script>
</head>


<body>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
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
                        <span style="font-weight: 600;"><?= $vendor['nama_vendor']; ?>, <?= $vendor['kota']; ?></span>
                        <div class="pt-1">
                            <span class="pt-5"><?= $vendor['email_vendor']; ?> | <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="black" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg> <?= $vendor['kota']; ?></span>
                        </div>
                        <div class="pt-1">
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
                            <span> 9 (reviews)</span>
                        </div>
                        <a href="btn"></a>
                    </div>
                </div>
            </div>
            <div class="col-7 pt-1">
                <span style="font-weight: 600;font-size: 30px;"><?= $paketDetail['nama_paket']; ?></span><br>
                <span style="color: #FFA931; font-weight: 500;font-size: 30px;">IDR <?= $paketDetail['idr']; ?></span>
                <br><br><br><br><br>
                <a style="font-size: 18px; margin-top: 5rem; width: auto;" class="d-flex flex-row align-items-center justify-content-center btn btnchat" href="https://wa.me/+6289616693464">Chat</a>
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
                                </svg> Wilayah <?= $paketDetail['area_pelayanan']; ?> dan sekitarnya</span>
                        </div>
                    </div>
                    <div class="row row-cols-auto">
                        <div class="col-3">
                            <span>KAPASITAS ORANG</span>
                        </div>
                        <div class="col-9">
                            <span>Max. <?= $paketDetail['kapasitas_orang']; ?></span>
                        </div>
                    </div>
                    <div class="row row-cols-auto">
                        <div class="col-3">
                            <span>PERIODE ACARA</span>
                        </div>
                        <div class="col-9">
                            <span>Max. <?= $paketDetail['periode_acara']; ?></span>
                        </div>
                    </div>
                    <div class="row row-cols-auto">
                        <div class="col-3">
                            <span>DETAIL FASILITAS</span>
                        </div>
                        <div class="col-9">
                            <span><?= $paketDetail['desc_vendor']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="d-flex justify-content-center align-items-center pt-3" style="font-size: 20px; font-weight: bold;">
            <span>Apakah kamu sedang melengkapi kebutuhan acaramu?</span>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="font-size: 20px; font-weight: bold;">
            <span>Lihat apa yang kami tawarkan di “Store”!</span>
        </div>
        <div class="d-flex flex-row align-items-center pt-5">
            <span style="font-size: 32px; font-weight: 600;">Store&nbsp;</span>
            <span style="font-size: 20px; padding-top: 7px;color: #8C8282;">(Pilih store untuk melihat detail)</span>
        </div>
        <div class="d-flex row mt-3 row-cols-md-4 g-4 row" id="dropStore">
            <script>
                const dataArr = [];

                function findProducts(data_ids) {
                    return data.filter((dt) => {
                        return data_ids.includes(parseInt(dt.id_store))
                    })
                }

                function tambah(i, j) {
                    const dkor = document.querySelectorAll('#dkor');
                    dkor[i].classList.remove('dhidden');
                    if (!dataArr.includes(j)) {
                        dataArr.push(j);
                    }

                }


                function hapus(i, j) {
                    const dkor = document.querySelectorAll('#dkor');
                    dkor[i].classList.add('dhidden');
                    const index = dataArr.indexOf(j);
                    if (index !== -1) {
                        dataArr.splice(index, 1);
                    }
                }
                // var dataArr = [1, 2, 3];
                // var jsonData = JSON.stringify(dataArr);
                // var currentUrl = window.location.href;

                // $("#btn").click(function() {
                //     $.ajax({
                //         url: "detail.php",
                //         type: "POST",
                //         data: {
                //             data: jsonData
                //         },
                //         success: function(response) {
                //             console.log(response);
                //         },
                //         error: function(xhr, status, error) {
                //             console.error(error);
                //         }
                //     });
                // });
            </script>
            <?php
            // Ambil data dari permintaan POST
            // $jsonData = $_POST['data'];

            // // Ubah JSON menjadi array PHP
            // $dataArr = json_decode($jsonData, true);

            // // Gunakan data array PHP
            // foreach ($dataArr as $value) {
            //     echo $value . "<br>";
            // }
            ?>
            <?php for ($i = 0; $i < count($store); $i++) { ?>
                <div class="col mb-auto">
                    <!-- <a style="text-decoration: none;" href="http://"> -->
                    <div class="card my-auto">
                        <!-- <img style="height: 18rem;" src="<?= base_url(); ?>/img/store 1.jpg" class="card-img-top "> -->
                        <img src="<?= base_url(); ?>/img/<?= $store[$i]['gambar']; ?>" class=" card-img-top" style="height: 300px;object-fit: cover;">
                        <div class="card-body">
                            <div style="height: 4rem">
                                <span style="font-size: 20px; font-weight: 600;width:100% " class="card-title"><?= $store[$i]['nama_store']; ?></span>
                            </div>
                            <p class="card-text  mb-1" style="color: #FFA931;font-size: 18px; font-weight: 500;">Rp <?= $store[$i]['harga_store']; ?></p>
                        </div>
                        <input type="hidden" value="<?= $i; ?>">
                        <button type="submit" class="btn btn-warning m-2" name='btn' id="btnn" onclick="tambah(<?= $i; ?> , <?= $store[$i]['id_store'] ?>)">Tambah</button>
                    </div>
                    <!-- </a> -->
                </div>
            <?php }; ?>

        </div>
        <div class="d-flex ms-5 my-5">
            <span style="font-size: 30px; font-weight: 600;">Detail Pemesanan Store</span>
        </div>

        <?php for ($i = 0; $i < count($store); $i++) { ?>
            <div id="dkor" class="card dhidden mb-3 ms-5" style="max-width: 1122px; border: none;">

                <div class="row g-0 border">
                    <div class="col-md-4 p-3">
                        <img src="<?= base_url(); ?>/img/<?= $store[$i]['gambar']; ?>" class=" img-fluid rounded-start" style="height: 300px;object-fit: cover;"" alt=" ...">
                    </div>
                    <div class="col-md-8 p-2">
                        <div class="card-body pt-0 d-flex flex-column ">
                            <div class="d-flex mt-3">

                                <h5 class="card-title" style="font-size: 24px; font-weight: 600;"><?= $store[$i]['nama_store']; ?></h5>
                                <button type="button" class="btn-close ms-auto " onclick="hapus(<?= $i; ?>    , <?= $store[$i]['id_store'] ?>)" aria-label="Close"></button>
                            </div>
                            <span style="font-size: 20px;">Catatan</span>
                            <form action="">
                                <input type="hidden" name="" value="<?= $store[$i]['id_store']; ?>" id="<?= $store[$i]['id_store']; ?>">
                                <textarea name="" cols="60" rows="6" id="catatan<?= $store[$i]['id_store']; ?>"></textarea>
                            </form>

                            <hr>

                            <div class="jumlahForm align-items-center d-flex flex-rows"><br>
                                <div class="d-flex flex-column">
                                    <span style="font-size: 20px;">Jumlah</span>
                                    <span style="font-size: 14px;">*minimum pemesanan 50 pcs</span>
                                </div>
                                <div class="input-group inline-group ms-auto">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input id="qty<?= $store[$i]['id_store']; ?>" class="form-control quantity" min="50" name="quantity" value="50" type="number" style="text-align: center;">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }; ?>

    </div>
    <div class="d-flex flex-row align-items-center justify-content-center">
        <button style="font-size: 18px; margin-top: 1rem; margin-bottom: 3rem; width: 800px; height: 45px;" onclick="showItems()" class="d-flex align-items-center justify-content-center btn btnchat" data-bs-toggle="modal" data-bs-target="#exampleModalToggle1">Pesan Sekarang</button>
    </div>
    <hr>
    <div class="container-fluid text-center">
        <h2>PAKET EVENT TERKAIT LAINNYA</h2>
        <br>
        <div class="row mt-3 row-cols-md-5 g-4 row" style="text-align: start;">
            <?php foreach ($paket as $paket) :  ?>
                <div class="col mb-auto">
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
        <br><br>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h3 class="py-5" style="font-weight: 600;">Pesan Sekarang</h3>
                    <div class="row row-cols-auto mx-5" style="height: 140px; width: 589px; align-items: center; border-color: black; border-style: solid; border-radius: 20px; border-width: 1px;">
                        <div class="col-3">
                            <img src="<?= base_url(); ?>/img/<?= $paketDetail['gambar']; ?>" class="img-fluid" style="height: 120px; width: auto;">
                        </div>
                        <div class="col-9 d-flex flex-column justify-content-center">
                            <span><?= $paketDetail['nama_paket']; ?></span>
                            <span style="color: #FFA931;"><?= $paketDetail['idr']; ?></span>
                        </div>
                    </div>
                    <span class=" mt-4" style="font-weight: 600;">Store</span>
                    <!-- ================================ -->
                    <div id="itempix">
                        <div class="mt-3">

                        </div>
                    </div>
                    <script>
                        const itemsWr = document.querySelector("#itempix");

                        function showItems() {
                            itemsWr.innerHTML = ''
                            let selected = findProducts(dataArr)
                            selected.forEach(el => {


                                itemsWr.innerHTML +=
                                    `
                            <div class="row row-cols-auto mx-5 mt-4" style="height: 140px; width: 589px; align-items: center; border-color: black; border-style: solid; border-radius: 20px; border-width: 1px;">
                                <div class="col-3">
                                    <img src="${el.gambar}" alt="">
                                </div>
                                <div class="col-9 d-flex flex-column justify-content-center">
                                    <span>${el.nama_store}</span>
                                    <span style="color: #FFA931;">${el.harga_store}</span>
                                </div>
                            </div>
                            `

                            });
                        }
                    </script>
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
                                <button type="button" onclick="showItems2()" class="btn" style="background-color: #FFA931; width: 285px; height: 60px;" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Bayar DP</button>
                                <br>
                                <button type="button" onclick="showItems3()" class="btn" style="background-color: #FFA931; width: 285px; height: 60px;" data-bs-toggle="modal" data-bs-target="#exampleModalToggle3">Bayar Lunas </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="container-fluid">
                        <h3 class="py-5 text-center" style="font-weight: 600;">Rangkuman Pembayaran</h3>
                        <div class="row mx-5 mt-3">
                            <div class="col-8 d-flex justify-content-start" style="font-weight: 600;">
                                <h4>Detail Pemesanan</h4>
                            </div>
                            <div class="col-4 d-flex justify-content-start" style="font-weight: 600;">
                                <h4>Jumlah</h4>
                            </div>
                        </div>
                        <div class="row mx-5">
                            <div class="col-8 d-flex justify-content-start">
                                <span><?= $paketDetail["nama_paket"]; ?></span>
                            </div>
                            <div class="col-4 d-flex justify-content-start">
                                <span>Rp <?= $paketDetail["idr"]; ?>,-</span>
                            </div>
                        </div>
                        <div id="itempixx">
                            <div class="mx-5">

                            </div>
                        </div>
                        <script>
                            function hitung() {
                                let selected = findProducts(dataArr)
                                console.log('selected', selected)
                                selected.forEach(el => {

                                });
                            }
                            const itemsWrr = document.querySelector("#itempixx");
                            let sub = 0;

                            function showItems2() {
                                let selected = findProducts(dataArr)
                                console.log('selected', selected)
                                itemsWrr.innerHTML = '';

                                selected.forEach(el => {

                                    let qtyElement = document.querySelector('#qty' + el.id_store)
                                    let catElement = document.querySelector('#catatan' + el.id_store)
                                    itemsWrr.innerHTML +=
                                        `
                                        <div class="row mx-5">
                                            <div class="col-8 justify-content-start">
                                                <span>${el.nama_store}</span>
                                                <p class="ms-3">Catatan: <br>${catElement.value}</p>
                                            </div>
                                            <div class="col-4 justify-content-start">
                                                <span>Rp ${el.harga_store} x ${qtyElement.value},-</span>
                                            </div>
                                        </div>
                                        `
                                    sub += el.harga_store * qtyElement.value
                                });
                                const subElement = document.querySelector('#sub')
                                const ttlElement = document.querySelector('#total')
                                subElement.innerHTML = `Rp. ${sub} ,-`
                                ttlElement.innerHTML = `Rp. ${60 / 100 * (parseInt(sub) + parseInt(dataPaket.idr))} ,-`

                            }
                        </script>
                        <!-- <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <span>Dresscode Kaos + Sablon (All Size) Rp 60.000 x 150 pcs</span>
                            </div>
                            <div class="col-4 justify-content-start">
                                <span>Rp 9.0000.000,-</span>
                            </div>
                        </div> -->
                        <hr class="mx-5">
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start" style="font-weight: 600;">
                                <h4>Metode Pembayaran</h4>
                            </div>
                        </div>
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <span>TRANSFER - BANK BRI</span>
                            </div>
                        </div>
                        <hr class="mx-5">
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="col-4 justify-content-start">
                                <span id="sub">Rp 29.0000.000,-</span>
                            </div>
                        </div>
                        <hr class="mx-5">
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <h4>Total Pembayaran</h4>
                                <h6>DP 60%</h6>
                            </div>
                            <div class="col-4 justify-content-start" style="font-weight: 600;">
                                <span id="total">Rp 29.0000.000,-</span>
                            </div>
                        </div>
                        <hr class="mx-5">
                        <div class="d-flex flex-column text-center align-items-center py-5">
                            <button type="button" class="btn" style="background-color: #FFA931; width: 285px; height: 60px;" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">Lanjutkan Pembayaran</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="container-fluid">
                        <h3 class="py-5 text-center" style="font-weight: 600;">Rangkuman Pembayaran</h3>
                        <div class="row mx-5 mt-3">
                            <div class="col-8 d-flex justify-content-start" style="font-weight: 600;">
                                <h4>Detail Pemesanan</h4>
                            </div>
                            <div class="col-4 d-flex justify-content-start" style="font-weight: 600;">
                                <h4>Jumlah</h4>
                            </div>
                        </div>
                        <div class="row mx-5">
                            <div class="col-8 d-flex justify-content-start">
                                <span><?= $paketDetail["nama_paket"]; ?></span>
                            </div>
                            <div class="col-4 d-flex justify-content-start">
                                <span>Rp <?= $paketDetail["idr"]; ?>,-</span>
                            </div>
                        </div>
                        <div id="itempixxx">

                        </div>
                        <script>
                            function hitung() {
                                let selected = findProducts(dataArr)
                                console.log('selected', selected)
                                selected.forEach(el => {

                                });
                            }
                            const itemsWrrr = document.querySelector("#itempixxx");
                            let subb = 0;

                            function showItems3() {
                                let selected = findProducts(dataArr)
                                console.log('selected', selected)
                                itemsWrrr.innerHTML = '';

                                selected.forEach(el => {

                                    let qtyElement = document.querySelector('#qty' + el.id_store)
                                    let catElement = document.querySelector('#catatan' + el.id_store)
                                    itemsWrrr.innerHTML +=
                                        `
                                        <div class="row mx-5">
                                            <div class="col-8 justify-content-start">
                                                <span>${el.nama_store}</span>
                                                <p class="ms-3">Catatan: <br>${catElement.value}</p>
                                            </div>
                                            <div class="col-4 justify-content-start">
                                                <span>Rp ${el.harga_store} x ${qtyElement.value},-</span>
                                            </div>
                                        </div>
                                        `
                                    subb += el.harga_store * qtyElement.value
                                });
                                const subbElement = document.querySelector('#subb')
                                const ttllElement = document.querySelector('#totall')
                                subbElement.innerHTML = `Rp. ${subb} ,-`
                                ttllElement.innerHTML = `Rp. ${parseInt(subb) + parseInt(dataPaket.idr)} ,-`

                            }
                            let idPaket = dataPaket.id;
                            let id_user = sessionStorage.getItem('id');
                            let status = "Lunas"
                            let totalP = parseInt(subb) + parseInt(dataPaket.idr)
                        </script>
                        <!-- <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <span>Dresscode Kaos + Sablon (All Size) Rp 60.000 x 150 pcs</span>
                            </div>
                            <div class="col-4 justify-content-start">
                                <span>Rp 9.0000.000,-</span>
                            </div>
                        </div> -->
                        <hr class="mx-5">
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start" style="font-weight: 600;">
                                <h4>Metode Pembayaran</h4>
                            </div>
                        </div>
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <span>TRANSFER - BANK BRI</span>
                            </div>
                        </div>
                        <hr class="mx-5">
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="col-4 justify-content-start">
                                <span id="subb">Rp 29.0000.000,-</span>
                            </div>
                        </div>
                        <hr class="mx-5">
                        <div class="row mx-5">
                            <div class="col-8 justify-content-start">
                                <h4>Total Pembayaran</h4>
                            </div>
                            <div class="col-4 justify-content-start" style="font-weight: 600;">
                                <span id="totall">Rp 29.0000.000,-</span>
                            </div>
                        </div>
                        <hr class="mx-5">
                        <div class="d-flex flex-column text-center align-items-center py-5">
                            <button type="button" class="btn" style="background-color: #FFA931; width: 285px; height: 60px; color: white;" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">Lanjutkan Pembayaran</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalLabel4" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="container-fluid">
                        <h3 class="py-5 text-center" style="font-weight: 600;">Pembayaran</h3>
                        <div class="d-flex flex-column text-center align-items-center py-2">
                            <span class="mx-5 mb-5">harap periksa email anda , setelah ini kami akan mingirimkan kode billing pembayaran melalui email anda . harap selesaikan pembayaran sebelum tenggat yang telah diberikan.</span>
                            <button type="button" class="btn mt-5" style="background-color: #FFA931; width: 285px; height: 60px;"><a href="http://localhost:8080/" style="text-decoration: none; color: white;">Kembali ke Beranda</a></button>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script>
        $('.btn-plus, .btn-minus').on('click', function(e) {
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.input-group').find('input');
            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
        })

        // Add active class to the current button (highlight it)
        var header = document.getElementById("selectWarna");
        var btns = header.getElementsByClassName("btnWarna");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }


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
</body>

</html>