<?php
error_reporting(0);
require ('koneksi.php');
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
    <title>Pengiriman Barang</title>
</head>
<body>
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
                <li><a href="pengiriman.php" class="rounded-pill" style="background-color: #C52A81;">
                    <i class="uil uil-message" style="color: black ;"></i>
                        <span class="link-name" style="color: black;">Pengiriman</span>
                    </a></li>
                <li><a href="data_barang.php">
                    <i class="uil uil-edit"></i>
                        <span class="link-name">Data Barang</span>
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

    <section class="content dashboard">
		<div class="top">
			<div class="col-md-12">
				<div class="box box-primary">
                    <div class="notifications">
                        <i class="uil uil-bell"></i>
                        <a href="login.php"><img src="image/lutpi.png" alt=""><span class="link-name">Toko Bang Lutfi</span></a>
                    </div>
                </div>

                <div class="box-header mt-5" >
                    <form action="" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control bg-light border-o" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" name="cari" class="btn btn-primary">
                                    <i class="uil-search"></i></button>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="uil uil-plus"></i>
                                    Tambah
                                    </button>
                                <!-- <button type="button" class="btn btn-success">
                                    <i class="uil uil-plus"></i>&nbsp;Tambah&nbsp;</button> -->
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal -->
                <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Pengiriman</h1>
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
                    <label for="exampleFormControlInput1" class="form-label">Id Pengiriman</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_idPengiriman" placeholder="masukan nama barang...">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_tanggal" placeholder="masukan warna...">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pelanggan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_pelanggan" placeholder="masukan ukuran...">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Resi</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_noResi" placeholder="baju, hoodie, sepatu, etc">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_keterangan" placeholder="masukan harga beli barang">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_status" placeholder="masukan harga jual barang">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger mb-3">Kosongkan</button>
                        <button type="submit" class="btn btn-success mb-3" name="bsimpan">Simpan</button>
                    </div>
                    </div>
                </div>
                </div> -->

		        <table class="table" action="">
                        <!-- <table border="DEL1" class="table table-striped" action=""> -->
						<thead>
						  <tr>
							<th scope="col">Id Pengiriman</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Pelanggan</th>
                            <th scope="col">No Resi</th>
							<th scope="col">Keterangan</th>
							<th scope="col">Status</th>
							<th scope="col">Aksi</th>
						  </tr>
						</thead>
						<tbody>
                            <?php
                                $query = $_POST['query'];
                                if ($query != ''){
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM pengiriman WHERE pelanggan LIKE '%$query%'");
                                } else{
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM pengiriman");
                                }
                                $no = DEL1;

                                if(mysqli_num_rows($tampil)){
                                while ($data = mysqli_fetch_array($tampil)){
                                ?>
                            <tr>
                                <td><?= $data['id_Pengiriman'] ?></td>
                                <td><?= $data['tanggal'] ?></td>
                                <td><?= $data['pelanggan'] ?></td>
                                <td><?= $data['no_resi'] ?></td>
                                <td><?= $data['keterangan'] ?></td>
                                <td><?= $data['status'] ?></td>
                                <td>
                                    <a href="edit.php?id_barang=<?php echo $data['id_pengiriman']; ?>" name="bupdate" class="btn btn-light mb-3"><i class="uil uil-edit-alt"></i></a>
                                    <a href="hapus.php?id_barang=<?php echo $data['id_pengiriman']; ?>" name="bhapus"class="btn btn-danger mb-3"><i class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php
                                }} else{
                                    echo'<tr><td colspan="7">Data yang Dicari Tidak Ada...</td></tr>';
                                }?>
						</tbody>
					</table>
					<?php echo $this->pagination->create_links();?>
					</div>
				
				</div>
			</div>
		</div>
	</section>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
</body>
</html>

