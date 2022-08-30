<?php 

session_start();
//koneksi ke database
$koneksi = mysqli_connect('localhost','root','','rfc');

// tombol simpan
if(isset($_POST['save'])) {
  $namaproduk = $_POST['nama_produk'];
  $deskripsi = $_POST['deskripsi_produk'];
  $harga = $_POST['harga_produk'];
  $stok = $_POST['stok_produk'];
  $gambar = $_POST['gambar'];

  $insert = mysqli_query($koneksi, "insert into produk (nama,deskripsi,harga,stok,gambar) values ('$namaproduk','$deskripsi','$harga','$stok','$gambar')");

  if ($insert) {
    echo '
    <script>
    alert("Submit Berhasil");
    window.location.href="form.php"
    </script>';
    
  }else {
    echo '
    <script>
    alert("Submit Gagal");
    window.location.href="form.php"
    </script>';
  }
}

// contact us
if(isset($_POST['send'])) {
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $insert = mysqli_query($koneksi, "insert into contact (nama,email,subject,message) values ('$nama','$email','$subject','$message')");

  if ($insert) {
    echo '
    <script>
    alert("Pengiriman Berhasil");
    window.location.href="pages-contact.php"
    </script>';
    
  }else {
    echo '
    <script>
    alert("Pengiriman Gagal");
    window.location.href="pages-contact.php"
    </script>';
  }
}
?>