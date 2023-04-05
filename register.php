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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
    <div class="container text-center">
        <div class="mt-2">
            <div class="col">
                <img src="image/TRST.png" class="img-fluid" alt="50" width="170">

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
                                <form action="register.php" method="POST">
                                    <div class="form-group row mb-3">
                                        <input type="text" class="form-control rounded-pill" id="FirstName" placeholder="Nama" name="txt_nama" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <input type="email" class="form-control form-control-user rounded-pill" id="InputUssername" placeholder="Ussername" name="txt_username" required>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <input type="password" class="form-control form-control-user rounded-pill" id="InputPassword" placeholder="Password" name="txt_password" required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <div class="row mt-1">
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <td><button class="btn btn-danger rounded-pill" name="register"> Daftar </button></td>
                                            </div>
                                        </div>

                                </form>

                                <div class="text-center">
                                    <p class="small text-muted fz-13 mt-3">Sudah mempunyai akun? <a href="login.php"> Login Sekarang!</a></p>
                                </div>
                            </div>
                    </tr>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_POST['register'])) {
    $txt_nama = $_POST['txt_nama'];
    $txt_username = $_POST['txt_username'];
    $txt_password = $_POST['txt_password'];
    if ($txt_nama == '' || $txt_username == '' || $txt_password == '') { ?>
        <script type="text/javascript">
            alert('Data tidak boleh kosong');
        </script>
        <?php  } else {
        $sql_insert =  mysqli_query($koneksi, "INSERT INTO `penjual` (`nama_penjual`, `email`, `password_penjual`) VALUES ('$txt_nama', '$txt_username', '$txt_password');");
        if ($sql_insert) {
        ?><script>
                alert('Registrasi berhasil silakan login');
                document.location = 'login.php';
            </script><?php
                    }
                }
            }
                        ?>