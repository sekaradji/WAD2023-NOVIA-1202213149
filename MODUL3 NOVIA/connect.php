<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
	
$host = "localhost:3308"; 
$username = "root"; 
$password = ""; 
$database = "modul3_novia"; 

$connect = mysqli_connect($host, $username, $password, $database);

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
	if(!$connect) {
		die("Koneksi Gagal Terhubung".mysqli_connect_error());
	}
// 
?>