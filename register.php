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

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template
    <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->

</head>

<body>
<div class="container text-center">
    <div class="mt-4">
        <div class="col">
            <img src="TRST 4.jpg" class="img-fluid" alt="50" width="170">
    
            </div>
    </div>
        <!-- <div class="row align-item-left"> -->
        <div class="container text-first">
                <div class="col-lg-15 d-none d-lg-block">
                <div class="p-10">
                <img src="gambar 1.png" class="img-fluid">
                </div>
                </div>
                <p></p>
                <p class="h5 text-gray-900 fw-bold">Bergabung menjadi klien</p>
                <p class="h5 text-gray-900 fw-bold">Trustedvers siap raih cuan</p> 
                <p class="h5 text-gray-900 fw-bold">Lebih banyak!!!</p>
                </div>    
                </div>
                </img>
            </img>
        </div>

    

    <!-- <div class="container"> -->

        <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 text-gray-900 mb-1 fw-bold">Daftarkan Akun Trustedvers!</h1>
                                <p class="mb-4 text-muted">Yuk! isi data dibawah ini</p>
                            </div>
                            <form class="user" action="register.php" method="POST">
                                <div class="form-group row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control rounded-pill" id="FirstName"
                                            placeholder="Nama" name="txt_nama">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control form-control-user rounded-pill" id="InputUssername"
                                        placeholder="Ussername" name="txt_username">
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user rounded-pill"
                                            id="InputPassword" placeholder="Password" name="txt_password">
                                </div>
                                <tr>
                    <div class="form-group mb-3">
                    <td><input type="text" placeholder="Repeat password" class="form-control rounded-pill" name="txt_repeatpassword"></td>
                    </div>
                </tr>
                            </form> 
                                <div class="mb-3">
                                    <button type="submit" class ="btn btn-primary btn-user btn-block rounded-pill" name="submit">Daftar</button>
                                </div>
                                <div class="text-center">
                                <p class="small text-muted fz-13">Sudah mempunyai akun? <a href="login.php"> Login Sekarang!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
    }else{
        echo"password tidak sama";
    }

        }
        ?>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
                            

