<?php 
// koneksi ke database
require 'function.php';
// menagkap parameter ID di LINK Update
$id_update = $_GET['id'];

// query ambil data dari database
$data_update = mysqli_query($koneksi,"SELECT * FROM produk WHERE id = '$id_update'");
// $produk = mysqli_fetch_array($data_update);

while($produk = mysqli_fetch_array($data_update)) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/RFCICON.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/RFC.svg" alt=""> -->
        <span class="d-none d-lg-block">Restu Fried Chicken</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="form.php">
              <i class="bi bi-circle"></i><span>Input Data</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tabel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-data.php">
              <i class="bi bi-circle"></i><span>Data Produk</span>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="menu.php">
        <i class='bx bx-food-menu'></i>
          <span>List Menu</span>
        </a>
      </li>
      <!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Get In Touch</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Data Produk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Update Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-lg-12 aligns-items-center justify-content-center w-75 mx-auto">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Data Produk</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="POST">
                <div class="col-12">
                  <label for="inputName" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" id="inputName" name="nama_produk" value="<?php echo $produk ["nama"]; ?>">
                </div>
                <div class="col-12">
                  <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi_produk" value="<?php echo $produk ["deskripsi"]; ?>">
                </div>
                <div class="col-12">
                  <label for="inputHarga" class="form-label">Harga</label>
                  <input type="text" class="form-control" id="inputHarga" name="harga_produk" value="<?php echo $produk ["harga"]; ?>">
                </div>
                <div class="col-12">
                  <label for="inputStok" class="form-label">Stok</label>
                  <input type="text" class="form-control" id="inputStok" name="stok_produk" value="<?php echo $produk ["stok"]; ?>">
                </div>
                <div class="col-12">
                  <label class="col-sm-2 col-form-label">Upload Gambar</label>
                  <div class="col-sm-12">
                  <input class="form-control" type="file" id="formFile" name="gambar" value="<?php echo $produk ["gambar"]; ?>">
                  </div>
                </div>
                <div class="text-center d-grid gap-2">
                  <button type="submit" name="update" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

              <?php } ?>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Restu Gusti Armando</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php 

// UPDATE DATA
if (isset($_POST['update'])) {
	// ambil data dari database tampilkan ke form
  $namaproduk = $_POST['nama_produk'];
  $deskripsi = $_POST['deskripsi_produk'];
  $harga = $_POST['harga_produk'];
  $stok = $_POST['stok_produk'];
  $gambar = $_POST['gambar'];

  if (!$gambar) {
    $query = "UPDATE produk SET 
					nama = '$namaproduk',
					deskripsi = '$deskripsi',
					harga = '$harga',
					stok = '$stok'

			  WHERE id = '$id_update'";
  }else {
    $query = "UPDATE produk SET 
					nama = '$namaproduk',
					deskripsi = '$deskripsi',
					harga = '$harga',
					stok = '$stok',
          gambar = '$gambar'
			  WHERE id = '$id_update'";
  }
					
	$update = mysqli_query($koneksi, $query);

	// alert
	if ($update) {
		echo "<script>
				alert ('Data Berhasil Diupdate!');
				window.location.href='tables-data.php';	
			  </script>";
	} else {
		echo "<script>
		        alert ('Data Gagal Diupdate!');
		        window.location.href='tables-data.php';	
		      </script>";
	}
}

?>