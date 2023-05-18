<!doctype html>
<html lang="en">

<head>
    <title>Login SI JEO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .gmbr {
            background-image: url("<?= base_url(); ?>/img/login image.png");
            background-size: cover;
            background-repeat: no-repeat;

        }
        .btn:hover{
            color: white !important;
            background-color: #FFA931 !important;
        }
        #link-daftar:hover{
            color: black !important;
        }
        #link-lupasandi:hover{
            color: #FFA931 !important;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="login" style="overflow: hidden;">
            <div class="row" style="height: 100vh">
                <div class="col-7 gmbr ">
                    <!-- <img src="<?= base_url(); ?>/img/login image.png" class="img-fluid" alt="" style="height: 20cm; width: 100%; ";> -->
                </div>
                <div style="height: 100%;" class="col-5 mt-5">
                    <div class="row">
                        <div class="col" style="text-align: left; margin-left: 40px;">
                            <h2 style="font-size: 40px; font-weight: 600;">Masuk</h2>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br>
                    <div class="d-flex px-4" style="margin-left: 20px; margin-right: 40px;">
                        <div class="flex-fill">
                            <hr style="color: #959698; border: 1px solid;">
                        </div>
                        <div class="flex-fill">
                            <p style="text-align: center; color: #959698;">atau lanjutkan dengan</p>
                        </div>
                        <div class="flex-fill">
                            <hr style="color: #959698; border: 1px solid;">
                        </div>
                    </div>
                    <!-- <div class="row" style="padding: 40px;">
                        <div class="d-flex col-4 p-2" style="">
                            <hr>
                            
                        </div>
                        <div class="col-4 align-middle">
                            <p class="align-middle ">atau lanjutkan dengan</p>
                        </div>
                        <div class="col-4 p-2" style="">
                            <hr>
                        </div>
                    </div> -->
                    <br><br>
                    <form action="<?= base_url(); ?>/Customer/login" method="post" style="margin-left: 40px; margin-right: 60px;">

                        <div class="mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Alamat Email" style="border: 0px; border-bottom: solid 1px; border-color: #959698; border-radius: 0px;">
                        </div>
                        <br>
                        <div class="mb-3">
                            <input name="password" type="password" class="form-control" placeholder="Kata Sandi" id="pass" style="border: 0px; border-bottom: solid 1px; border-color: #959698; border-radius: 0px;">
                        </div>
                        <br><br><br>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit" style="background-color: #959698; border: none; height: 50px;">Lanjutkan</button>
                        </div>
                        <br>
                        <h5 style="font-size: 15px; text-align: center; font-weight: 500;"><a id="link-lupasandi" href="" style="text-decoration: none; color: red;">Lupa Kata Sandi?</a></h5>
                        <br>
                        <h5 style="font-size: 15px; text-align: center; font-weight: 500;">Belum Punya Akun? <a href="http://localhost:8080/register" style="color: #FFA931; text-decoration: none;" id="link-daftar">Daftar</a></h5>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>