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
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/5be573901b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Data Barang</title>
    
  
  </head>
  <body>
  <?php
$query = mysqli_query($koneksi, "SELECT max(id_barang) as idTerbesar FROM barang");
                                $data = mysqli_fetch_array($query);
                                $idBarang = $data['idTerbesar'];
                        
                                $urutan = (int) substr($idBarang, 3, 3);
                                $urutan++;
                        
                                $huruf = "IB";
                                $idBarang = $huruf . sprintf("%02s", $urutan);
                                ?>
    <!-- tampilan navbar -->
    <nav>
        <!-- menampilkan logo -->
        <div  class="logo-name">
            <img src="image/gbr_logo1.png" width="200">
        </div>

        <!-- menampilkan navbar -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed">
              <li><a href="home.php">
                  <i class="uil uil-estate link"></i>
                      <span class="link-name">Home</span>
                  </a></li>
              <li><a href="performa.php">
                  <i class="uil uil-chart"></i>
                      <span class="link-name">Performa Toko</span>
                  </a></li>
              <li><a href="#">
                  <i class="uil uil-message"></i>
                      <span class="link-name">Pengiriman</span>
                  </a></li>
              <li><a href="data_barang.php" class="rounded-pill" style="background-color: #FF69B4;">
                  <i class="uil uil-edit"></i>
                      <span class="link-name">Data Barang</span>
                  </a></li>
              <li><a href="#">
                  <i class="uil uil-file-info-alt"></i>
                      <span class="link-name">Laporan</span>
                  </a></li>
              <li><a href="akun.php">
                  <i class="uil uil-user"></i>
                      <span class="link-name">Akun</span>
                  </a></li>
              <li><a href="login.php">
                  <i class="uil uil-sign-out-alt"></i>
                      <span class="link-name">Logout</span>
                  </a></li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i></i>
            
            <form action="" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="search_div">
                    <input type="text" name="query" class="search_input" placeholder="Search"><button type="submit" name="cari" class="search_button">
                            <i class="uil-search"></i>
                        </button>
                        
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
      <form method="POST" class="form-input" action="action.php" enctype="multipart/form-data">
      <input type="file" name="gbr_produk" class="form-control" id="exampleFormControlInput1" required="">
      <section class="upload.php"></section>
      <div class="image-preview" id="imagePreview">
          <img src="" alt="Image Preview" class="image-preview__image">
          <span class="image-preview__default-text">Image Preview</span>
        </div>

        <script>
          const inpFile = document.getElementById("exampleFormControlInput1");
          const previewContainer = document.getElementById("imagePreview");
          const previewImage = previewContainer.querySelector(".image-preview__image");
          const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

          inpFile.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
              const reader = new FileReader();

              previewDefaultText.style.display = "none";
              previewImage.style.display = "block";

              reader.addEventListener("load", function() {
                console.log(this);
                previewImage.setAttribute("src", this.result);
              });

              reader.readAsDataURL(file);
            }
          });
        </script>
        
    </div>
    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Id Barang</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_id"
                            value="<?php echo $idBarang ?>" readonly>
                        </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_nama" placeholder="masukan nama barang..." required="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Warna</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_warna" placeholder="masukan warna..." required="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
      <select class="form-select" name="txt_ukuran" aria-label="Default select example" required="">
  <option selected>Pilih Ukuran...</option>
  <option value="S">S</option>
  <option value="M">M</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
  <option value="XXL">XXL</option>
</select>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Kategori</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_kategori" placeholder="baju, hoodie, sepatu, etc" required="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga Beli</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaBeli" placeholder="masukan harga beli barang" required="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga Jual</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaJual" placeholder="masukan harga jual barang" required="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Stok</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_stok" placeholder="stok barang anda" required="">
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
      <?php
      $query = $_POST['query'];
      if($query != ''){
        $tampil = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama LIKE '%$query%' OR kategori LIKE '%$query%' OR ukuran LIKE '%$query%' ");
      } else{
        $tampil = mysqli_query($koneksi, "SELECT * FROM barang order by id_barang asc");
      }
      if(mysqli_num_rows($tampil)){
      while ($data = mysqli_fetch_array($tampil)){
      ?>
      <tr>
        <td><img src="image/<?php echo $data['gambar'];?>"width="100px"></td>
        <td><?= $data['id_barang']?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['warna']?></td>
        <td><?= $data['ukuran']?></td>
        <td><?= $data['kategori']?></td>
        <td><?= $data['harga_beli']?></td>
        <td><?= $data['harga_jual']?></td>
        <td><?= $data['stok']?></td>
        <td><?= $data['deskripsi']?></td>
        <!-- <td><button type="submit" class="btn btn-danger mb-3" name="hal">hapus</button></td> -->
        <td>
           <a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bupdate" class="btn btn-light mb-3"><i class="uil uil-edit-alt"></i></a> 
           <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="uil uil-trash-alt"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
      </div>
      <div class="modal-body">
        Apakah anda yain akan menghapus produk ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bhapus"class="btn btn-danger mb-3">Hapus</a>
      </div>
    </div>
  </div>
</div> 
        </td>
      </tr>
      <?php }} else{
          echo'<tr><td colspan="11">Data Yang Dicari Tidak Ada...</td></tr>';
      }?>

       
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
    </section>
    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>
