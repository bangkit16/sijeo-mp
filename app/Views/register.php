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
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url(https://via.placeholder.com/1500x1000);
            background-size: cover;
            background-position: center;
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
            background-color: #fff;
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
            transform: translateX(-5px);
            font-size: 20px;
            color: #959698;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row form-container ">
            <div class="col-6 ">

            </div>
            <div class="col-6 d-flex justify-content-center ">
                <div class="login-form">
                    <form>
                        <div class="row ">
                            <div class="col" style="text-align: left; ">
                                <h2 style="font-size: 40px; font-weight: 500;">Daftar</h2>
                            </div>
                            <div class="col d-flex align-items-center justify-content-end" style="text-align: right; ">
                                <h2 style="font-size: 32px; font-weight: 500;color: #FFA931;">Masuk</h2>
                            </div>
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
                            <input type="text" class="form-control" placeholder="Nama Depan">
                            <input type="text" class="form-control " name="kata_sandi" placeholder="Nama Belakang" id="pass" style="margin-left:25px;">
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input type="text" class="form-control" placeholder="Alamat Email">
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input type="text" class="form-control" placeholder="Kata Sandi">
                        </div>
                        <div class="mb-3 mt-3 d-flex flex-row mb-5">
                            <input type="text" class="form-control" placeholder="Konfirmasi Kata Sandi">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>