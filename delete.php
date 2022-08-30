<?php 
// koneksi database
require 'function.php';
// menangka parameter id pada link hapus di ACTION
$id = $_GET["id"]; //id di ambil dari action delete dan update

// query hapus data berdasarkan nama
$delete = mysqli_query($koneksi, "DELETE FROM produk WHERE id = '$id'");

// alert
if ($delete) {
		echo "<script>
				alert ('Data Berhasil Dihapus!');
				window.location.href='tables-data.php';	
			  </script>";
	} else {
		echo "<script>
		        alert ('Data Gagal Dihapus!');
		        window.location.href='tables-data.php';	
		      </script>";
	}
 ?>