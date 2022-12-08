<?php
require "koneksi.php"

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Trusted: Login</title>	
</head>

<body>
<div class="container text-center">
    <div class="mt-4">
        <div class="col">
            <img src="image/TRST.png" class="img-fluid" alt="50" width="170">
        </div>
    </div>
</div>
    <div class="container text-center">   
        <div class="row">
          <div class="col">
          <img src="image/gbr_login1.png" class="img-fluid" large="100">
            <div class="container text-center">
                <!-- <div class="col"> -->
                <div class="row"> 
                <div class="container text-left">
            </div>
                    
                </div>
            <!-- </div> -->
        </div>
          </div>
          <div class="col order-first">
            <div class="container text-left">
            <h1>Hai, Selamat Datang</h1>
                <h1>Trustedvers!</h1>
            </div>
    <div>
        <form action="login.php" method="post">		
            <div class="container-fluid">
                <div class="row mt-4">
                <div class="col">
                <td><input type="text" placeholder="Username" class="form-control rounded-pill" name="username"></td>
                </div> 
                <div class="row mt-2">
                <td><input type="password" placeholder="password" class="form-control rounded-pill" name="password"></td>
                </div>
                <div class="row mt-4">
                    <button class="btn btn-danger" name="login"> Login </button>
                    </div>
                </div>
            <div class="text-center">
                <p class="small text-muted fz-13">Sudah mempunyai akun? <a href="register.php" class="link-secondary"> Daftar Sekarang</a></p>
            </div>
        </form>
    </div> 

    <?php
                if(isset($_POST['login'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $sql =  mysqli_query($koneksi, "SELECT * FROM register WHERE ussername='$username' and password='$password'");
                    $cek = mysqli_num_rows($sql);
                    if($cek > 0) {
                        $_SESSION['username'] = $_POST['username'];

                        echo "<script> alert('berhasil');
                        document.location='home.php';
                        </script>";
                    }
                    else{
                        echo "<script> alert('gagal');
                        document.location='login.php';
                        </script>";
                    }
                        }
                        ?>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
</body>
</html>