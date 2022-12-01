<?php
require "koneksi.php"

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Trusted: Login</title>
  </head>
  <body>
    <div class="container text-center">
        <div class="col">
            <img src="image/TRST.png" class="img-fluid" alt="50" width="170">
    </div>
    </div>
    <div class="container text-center">   
        <div class="row">
          <div class="col">
            <div class="container text-center">
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
            <form class="row gx-3 gy-2 align-items-center">
                <div class="col">
                <div class="login-form">

                        <form action="" method="post">
                        <label class="visually-hidden" for="specificSizeInputName" width="300">Name</label>
                        <input type="text" name = "username" class="form-control" id="specificSizeInputName" placeholder="Username"width="300">

                        <label class="visually-hidden" for="specificSizeInputName">Name</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                            <a href="./reset-password.html" class="text-decoration-none">Lupa password?</a>
                        
                        <button class="btn btn-danger" name="login"> Login </button>
                        <h10>Belum mempunyai akun?</h10><a href="/A1_Project/Register_page.html" class="link-secondary">Daftar sekarang</a>
           </from>
                  <!-- <form action="" method="post">	
                      <label class="visually-hidden" for="specificSizeInputName" width="300">Name</label>
                      <input type="text" name = "username" class="form-control" id="specificSizeInputName" placeholder="Username"width="300">
                    
                      <label class="visually-hidden" for="specificSizeInputName">Name</label>
                      <input type="password" nname= "password" class="form-control" id="specificSizeInputName" placeholder="Password">
>
                      <a class="btn btn-danger" name="login"> Login </a> </div>
                                    
                      <h10>Belum mempunyai akun?</h10><a href="/A1_Project/Register_page.html" class="link-secondary">Daftar sekarang</a>
                                </div> -->
                              <!-- </form> -->
                              <?php
                                          if(isset($_POST['login'])){
                                              $username = htmlspecialchars($_POST['username']);
                                              $password = htmlspecialchars($_POST['password']);
                          
                                              $query =  mysqli_query($koneksi, "SELECT * FROM login WHERE ussername='$username' and password='$password'");
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
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
    </body>
    </html>
