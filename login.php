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
            <img src="TRST 4.jpg" class="img-fluid" alt="50" width="170">
    
            </div>
    </div>
    <div class="container text-center">   
        <div class="row">
          <div class="col">
            <div class="container text-first">
                <div class="col">
                <div class="row"> 
                    <img src="login.jpg" class="img-fluid" large="100">
                </div>
            </div>
        </div>
          </div>
          <div class="col order-first">
            <div class="container text-left">
            <h1>Hai, Selamat Datang</h1>
                <h1>Trustedvers!</h1>
            </div>
    <div>
        <form action="login.php" method="post">		
            <table>
                <tr>
                    <div class="form-group mb-3">
                    <td><input type="text" placeholder="Username" class="form-control rounded-pill" name="username"></td>
                    </div>
                </tr>
                <div> 
                <tr>
                    <div class="form-group mb-3">
                    <td><input type="password" placeholder="Password" class="form-control rounded-pill"name="password"></td>
                    </div>
                </tr>
                
                <!-- <div>
                    <button type="submit" class="btn btn-danger rounded pill" name="submit">Daftar</button>
                </div> -->
            </table>
            <tr>
                    <td></td>
                    <button class="btn btn-danger" name="login"> Login </button>
                </tr>
            <!-- <h10>Belum mempunyai akun?</h10><a href="/A1_Project/Register_page.html" class="link-secondary">Daftar sekarang</a> -->
            <div class="text-center">
                <p class="small text-muted fz-13">Sudah mempunyai akun? <a href="/bootstrap/bootstrap-5.0.2-dist/register.php" class="link-secondary"> Daftar Sekarang</a></p>
            </div>
        </form>
    </div>
    <?php
                if(isset($_POST['login'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query =  mysqli_query($koneksi, "SELECT * FROM register WHERE ussername='$username' and password='$password'");
                    $count = mysqli_num_rows($query);
                    echo $count;

                    if( $count > 0){
                        $_SESSION['username'] = $username;
                        $_SESSION['logged_in'] = true;

                        header("location:Home_page.html");
                    }
                    else{
                        echo "Password atau Email salah";
                    }
                        }
                        ?>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
</body>
</html>