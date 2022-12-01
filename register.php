<?php
require "koneksi.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->

    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>

<body>
<div class="container text-center">
    <div class="mt-2">
        <div class="col">
            <img src="TRST.png" class="img-fluid" alt="50" width="170">
    
            </div>
    </div>
<div class="container-fluid">
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <img src="image/gambar 1.png" class="img-fluid" large="100">
                        </div>  
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <div class="text-center">
                                <h1 class="h3 text-gray-900 mb-1 fw-bold">Daftarkan Akun Trustedvers!</h1>
                                <p class="mb-4 text-muted">Yuk! isi data dibawah ini</p>
                            </div>
                            <div class="mt-4">
                            <form class="user" action="register.php" method="POST">
                                <div class="form-group row mb-3">
                                    <div class="col mb-3">
                                        <input type="text" class="form-control rounded-pill" id="FirstName"
                                            placeholder="Nama" name="txt_nama">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control form-control-user rounded-pill" id="InputUssername"
                                        placeholder="Ussername" name="txt_username">
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user rounded-pill"
                                            id="InputPassword" placeholder="Password" name="txt_password">
                                </div>
                                </div>
                    <div class="form-group mt-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <td><input type="password" placeholder="Repeat password" class="form-control rounded-pill" name="txt_repeatpassword"></td>
                    </div>
                    </div>
                            </form> 
                                <div class="mt-3 align text-center">
                                    <button type="submit" class ="btn btn-danger btn-user btn-block rounded-pill" name="submit">Daftar</button>
                                </div>
                                <div class="text-center">
                                <p class="small text-muted fz-13">Sudah mempunyai akun? <a href="login.php"> Login Sekarang!</a></p>
                            </div>
                        </div>
                    </tr>
                </div>
            </div>

    

    <!-- <div class="container"> -->

        <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="C:/xampp/htdocs/register/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
  </body>
  </html>
<?php
if(isset($_POST['submit'])){
    $txt_nama = htmlspecialchars($_POST['txt_nama']);
    $txt_username = htmlspecialchars($_POST['txt_username']);
    $txt_password = htmlspecialchars($_POST['txt_password']);
    $txt_repeatpassword = htmlspecialchars($_POST['txt_repeatpassword']);
    if ($txt_password==$txt_repeatpassword){
        $query =  mysqli_query($koneksi, "INSERT INTO `register` (`nama`, `ussername`, `password`) VALUES ('$txt_nama', '$txt_username', '$txt_password');");
        echo "<script> alert('berhasil');
            document.location='login.php';
                        </script>";


    }else{
        echo"password tidak sama";
    }

        }
        ?>