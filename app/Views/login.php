<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .gmbr {
            background-image: url("<?= base_url(); ?>/img/login image.png");
            background-size: cover;
            background-repeat: no-repeat;

        }
    </style>
</head>

<body>
    <div class="">
        <div class="login" style="overflow: hidden;">
            <div class="row" style="height: 100%">
                <div class="col-7 gmbr ">
                    <!-- <img src="<?= base_url(); ?>/img/login image.png" class="img-fluid" alt="" style="height: 20cm; width: 100%; ";> -->
                </div>
                <div class="col-5 mt-5">
                    <div class="row">
                        <div class="col" style="text-align: left; margin-left: 40px;">
                            <h2 style="font-size: 40px;">Masuk</h2>
                        </div>
                        <div class="col" style="text-align: right; margin-right: 60px; color: #FFA931;">
                            <h2 class="align-middle" style="font-size: 32px;">Daftar</h2>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex px-4" style="margin-left: 20px; margin-right: 40px;">
                        <div class="flex-fill"><hr style="color: #959698; border: 1px solid;"></div>
                        <div class="flex-fill"><p style="text-align: center; color: #959698;">atau lanjutkan dengan</p></div>
                        <div class="flex-fill"><hr style="color: #959698; border: 1px solid;"></div>
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
                    <form style="margin-left: 40px; margin-right: 60px;">
                        <div class="mb-3">
                            <label for="alamat_email" class="form-label"></label>
                            <input type="email" class="form-control" placeholder="Alamat Email" style="border: 0px; border-bottom: solid 1px; border-color: #959698; border-radius: 0px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>