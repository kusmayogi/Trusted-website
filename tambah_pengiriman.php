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
    <title>Tambah Pengiriman Barang</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript'>
        $(window).load(function(){
        $("#noresi").change(function(){
            console.log($("#noresi option:selected").val());
                if ($("#noresi option:selected").val() == 'Diambil di Toko'){
                    $('#inputResi').prop('hidden', true);
                } else{
                    $('#inputResi').prop('hidden', false);
                }
            });
        });
    </script>

</head>

<body>
    <?php
    $query = mysqli_query($koneksi, "SELECT max(id_pengiriman) as idTerbesar FROM pengiriman");
    $data = mysqli_fetch_array($query);
    $idPengiriman = $data['idTerbesar'];

    $urutan = (int) substr($idPengiriman, 3, 3);
    $urutan++;

    $huruf = "PB";
    $idPengiriman = $huruf . sprintf("%03s", $urutan);
    ?>

    <!-- tampilan navbar -->
    <nav>
        <!-- menampilkan logo -->
        <div class="logo-name">
            <img src="image/gbr_logo1.png" width="200">
        </div>

        <!-- menampilkan navbar -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed">
                <li><a href="home.php" >
                        <i class="uil uil-estate link"></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="performa.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Performa Toko</span>
                    </a></li>
                <li><a href="pengiriman.php" class="rounded-pill" style="background-color: #FF69B4;">
                        <i class="uil uil-message"></i>
                        <span class="link-name">Pengiriman</span>
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
                        <span class="link-name">About</span>
                    </a></li>
                <li><a href="login.php">
                        <i class="uil uil-arrow-right"></i>
                        <span class="link-name">Log Out</span>
                    </a></li>

            </ul>
        </div>
    </nav>

    <!-- <div class="content-wrapper master"> -->
   
    <section class="content dashboard">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header" style="background-color: #FF69B4;">
                            <h4 class="mt-2" style="font-weight: bold;"><a href="pengiriman.php">
                                    <i class="uil uil-step-backward-circle" style="color: black;"></i></a> Form
                            Pengiriman</h4>
                        </div>

                        <!-- <form method="POST" action=""> -->
                        <div class="card-body">
                            <form method="POST" action="simpan_pengiriman.php">
                                <!-- <input type="hidden" class="form-control" id="id" name="id" value="" > -->
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">ID Pengiriman</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_idPengiriman" 
                                    value="<?php echo $idPengiriman ?>" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="col-sm-2 form-label">Tanggal</label>
                                    <input type="" required="required" class="form-control datepicker"
                                        id="tgl" name="txt_tanggal" value="<?php echo date("Y-m-d");?>" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pelanggan</label>
                                    <input type="text" class="form-control" required="required"
                                        id="exampleFormControlInput1" name="txt_pelanggan"
                                        placeholder="Masukkan nama pelanggan, ex: Ananta Johan">
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col"> 
                                        <label for="exampleFormControlInput1" class="form-label">Sistem Pengambilan Barang</label>
                                        <select id="noresi" name="txt_sistem" class="form-select text-muted"
                                        aria-label="Default select example" required="required">
                                            <option value="Diambil di Toko">Diambil di Toko</option>
                                            <option value="Dikirim di Rumah">Dikirim di Rumah</option>
                                        </select>
                                    </div>  
                                    <div class="col">
                                        <label for="exampleFormControlInput1" class="form-label">No Resi</label> 
                                        <input type="text" class="form-control" id="inputResi" value="" hidden
                                            name="txt_noResi" placeholder="Masukkan no resi, ex: JD40068XXXXX"/>
                                    </div>                               
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="txt_keterangan" placeholder="Masukkan keterangan" required="required">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                                    <select class="form-select text-muted" name="txt_status"
                                        aria-label="Default select example" required="required">
                                        <option selected>Pilih Status</option>
                                        <option value="Dikirim">Dikirim</option>
                                        <option value="Diterima">Diterima</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                </div>
                            
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Id Transaksi</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" required="required"
                                            id="txt_idTransaksi" name="txt_idTransaksi" value=""
                                            placeholder="Id Transaksi"/>
                                        <div class="input-group-append"><a href="pilih_transaksi.php" 
                                            type="button" class="btn btn-primary">
                                                Pilih Transaksi
                                            </a>
                                        </div>
                                    </div>   
                                </div>

                                <div class="card-footer mt-3">
                                    <a href="pengiriman.php" class="btn btn-danger ml-10">Cancel</a>
                                    <button type="reset" class="btn btn-warning" a
                                        href="tambah_pengiriman.php">Reset</button>
                                    <button type="submit" class="btn btn-primary" name="bsimpan" a
                                        href="pengiriman.php">Simpan</button>
                                </div>
                            </form>
                        </div>  

                        <!-- Modal Pilih Transaksi-->
                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tabel Transaksi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form>
                                                        <div class="card-body">

                                                            <div class="table-responsive">
                                                                <table class="table" action="">
                                                                    <thead>
                                                                        <tr align="center">
                                                                            <th scope="col" width="100px">Id</th>
                                                                            <th scope="col">Tanggal</th>
                                                                            <th scope="col">Total Barang</th>
                                                                            <th scope="col">Total Pembayaran</th>
                                                                            <th scope="col">Id Barang</th>
                                                                            <th scope="col">Nama Pembeli</th>
                                                                            <th scope="col">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                                                            // $query = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_transaksi desc");
                                                                            $query = mysqli_query($koneksi, "SELECT transaksi.id_transaksi, transaksi.tgl_transaksi, 
                                                                            transaksi.total_barang, transaksi.total_pembayaran, transaksi.id_barang ,pembeli.nama_pembeli 
                                                                            FROM transaksi
                                                                            INNER JOIN pembeli ON transaksi.id_pembeli=pembeli.id_pembeli ORDER BY id_transaksi DESC");
                                                                            if(mysqli_num_rows($query)){
                                                                                while ($data = mysqli_fetch_array($query)){
                                                                        ?>
                                                                        <tr align="center">
                                                                            <td><?= $data['id_transaksi'] ?></td>
                                                                            <td><?= $data['tgl_transaksi'] ?></td>
                                                                            <td><?= $data['total_barang'] ?></td>
                                                                            <td><?= $data['total_pembayaran'] ?></td>
                                                                            <td><?= $data['id_barang'] ?></td>
                                                                            <td><?= $data['nama_pembeli'] ?></td>
                                                                            <td>
                                                                                <!-- <button type="button" onclick="pilih()">Pilih</button> -->
                                                                                <button onclick="pilih()"
                                                                                    id="pilih_transaksi" name="pilih_transaksi" class="btn btn-success mb-3">
                                                                                    Pilih
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                            }} 
                                                                            
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <!-- modal -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

<!-- <script>
    document.getElementById("pilih_transaksi").addEventListener("click", tampilkan_id);
    
    function tampilkan_id(){
        var nilai_idTrans=document.getElementById("pilih_transaksi").innerHTML;
        document.getElementById("txt_idTransaksi").innerHTML=nilai_idTrans;
    }
</script> -->
</html>
