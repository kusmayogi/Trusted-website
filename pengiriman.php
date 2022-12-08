<?php
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
                                <a href="#" type="button" class="btn btn-success">
                                    <i class="uil uil-plus"></i>&nbsp;Tambah&nbsp;</a>
                            </div>
                        </div>
                    </form>
                </div>

		        <div class="tabel">
				    <div class="mt-2 row-2 col">
                        <table border="DEL1" class="table table-striped" action="">
						<thead>
						  <tr>
							<th>Id Pengiriman</th>
							<th>Tanggal</th>
							<th>Pelanggan</th>
                            <th>No Resi</th>
							<th>Keterangan</th>
							<th>Status</th>
							<th>Aksi</th>
						  </tr>
						</thead>
						<tbody>
                            <?php
                                $query = $_POST['query'];
                                if ($query != ''){
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM user_detail");
                                } else{
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM user_detail");
                                }
                                $no = BR1;

                                if(mysqli_num_rows($koneksi, $query)){
                                while ($datatampil = mysqli_fetch_array($tampil)){
                                ?>
                            <tr>
                                <td><?php $data[''] ?></td>
                                <td><?php $data[''] ?></td>
                                <td><?php $data[''] ?></td>
                                <td><?php $data[''] ?></td>
                                <td><?php $data[''] ?></td>
                                <td><?php $data[''] ?></td>
                                <td><?php $data[''] ?></td>
                                <td>
                                    <a href="edit.php?id_barang=<?php echo $data['id_pengiriman']; ?>" name="bupdate" class="btn btn-light mb-3"><i class="uil uil-edit-alt"></i></a>
                                    <a href="hapus.php?id_barang=<?php echo $data['id_pengiriman']; ?>" name="bhapus"class="btn btn-danger mb-3"><i class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php
                                $no++;
                                }} ?>
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