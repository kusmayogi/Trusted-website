<?php
error_reporting(0);
require "koneksi.php"

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/5be573901b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Data Barang</title>
</head>

<body>
    <!-- tampilan navbar -->
    <nav>
        <!-- Logo Navbar-->
        <div class="logo-image">
            <img src="image/gbr_logo.png" width="200">
        </div>

        <!-- navbar -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed nav-pills">
                <li><a href="home.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="product.html">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Performa Toko</span>
                    </a></li>
                <li><a href="pengiriman.php">
                        <i class="uil uil-message"></i>
                        <span class="link-name">Pengiriman</span>
                    </a></li>
                <li><a href="data_barang.php" class="rounded-pill" style="background-color: #C52A81;">
                        <i class="uil uil-edit" style="color: black ;"></i>
                        <span class="link-name" style="color: black;">Data Barang</span>
                    </a></li>
                <li><a href="laporan.php">
                        <i class="uil uil-file-info-alt"></i>
                        <span class="link-name">Laporan</span>
                    </a></li>
                <li><a href="akun.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Akun</span>
                    </a></li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i></i>
            <form action="" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" name="query" class="form-control bg-light border-o" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" name="cari" class="btn btn-primary">
                            <i class="uil-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="notifications">
                <i class="uil uil-bell" width="100"></i>
            </div>
            <a href="#"><img src="image/lutpi.png" alt=""><span class="link-name">Toko Bang Lutfi</span></a>
        </div>
        <div class="row">
            <div class="col mb-3">
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>
        <div class="tabel">
            <div class="mt-2">
                <div class="row-2">
                    <div class="col">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="uil uil-plus-square"></i>
                            Tambah Produk</button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <form method="POST" action="action.php" enctype="multipart/form-data">
                                                <label for="exampleFormControlInput1" class="form-label">Tambah Gambar</label>
                                                <input type="file" name="gbr_produk" class="form-control" id="exampleFormControlInput1" required="">
                                                <section class="upload.php"></section>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_nama" placeholder="masukan nama barang...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Warna</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_warna" placeholder="masukan warna...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
                                            <select class="form-select" name="txt_ukuran" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_kategori" placeholder="baju, hoodie, sepatu, etc">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Harga Beli</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaBeli" placeholder="masukan harga beli barang">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Harga Jual</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaJual" placeholder="masukan harga jual barang">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Stok</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_stok" placeholder="stok barang anda">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="txt_deskripsi" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-danger mb-3">Kosongkan</button>
                                        <button type="submit" class="btn btn-success mb-3" name="bsimpan">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <table class="table" action="action.php">
                            <thead>
                                <tr>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Id Barang</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Harga Beli</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="image/<?php echo $data['gambar']; ?>" width="100px"></td>
                                    <td><?= $data['id_barang'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['warna'] ?></td>
                                    <td><?= $data['ukuran'] ?></td>
                                    <td><?= $data['kategori'] ?></td>
                                    <td><?= $data['harga_beli'] ?></td>
                                    <td><?= $data['harga_jual'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['deskripsi'] ?></td>
                            </tbody>
                            <?php
                            $query = $_POST['query'];
                            if ($query != '') {
                                $tampil = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama LIKE '%$query%' OR kategori LIKE '%$query%' OR ukuran LIKE '%$query%' ");
                            } else {
                                $tampil = mysqli_query($koneksi, "SELECT * FROM barang order by id_barang asc");
                            }
                            if (mysqli_num_rows($tampil)) {
                                while ($data = mysqli_fetch_array($tampil)) {
                            ?>
                            <tr>
                                <td><img src="image/<?php echo $data['gambar']; ?>" width="100px"></td>
                                <td><?= $data['id_barang'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['warna'] ?></td>
                                <td><?= $data['ukuran'] ?></td>
                                <td><?= $data['kategori'] ?></td>
                                <td><?= $data['harga_beli'] ?></td>
                                <td><?= $data['harga_jual'] ?></td>
                                <td><?= $data['stok'] ?></td>
                                <td><?= $data['deskripsi'] ?></td>
                                <td> <a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bupdate" class="btn btn-light mb-3"><i class="uil uil-edit-alt"></i></a>
                                    <a href="hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bhapus" class="btn btn-danger mb-3"><i class="uil uil-trash-alt"></i></a>
                                </td>
                                </tbody>
                            <?php }
                            } else {
                                echo '<tr><td colspan="10">Data Yang Dicari Tidak Ada...</td></tr>';
                            } ?>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>