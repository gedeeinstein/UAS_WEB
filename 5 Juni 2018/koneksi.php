<?php
//koneksi ke MySql

$usr = 'root';
$cnn=mysqli_connect('localhost', $usr,'');
if(!$cnn){
	echo "Koneksi Gagal";
	}
else{
	echo "Koneksi Berhasil";	
	echo "<br />Selamat Datang ", $usr;	
}
?>