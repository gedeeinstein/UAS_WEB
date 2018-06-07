<?php
//koneksi ke MySql
$cnn=mysqli_connect('localhost','root','');
if(!$cnn){
	echo "Koneksi Gagal";
	}
else{
	echo "Koneksi Berhasil";	
}

$sql = "create database db_kampus2";

if(mysqli_query($cnn, $sql)){
	echo "Database Berhasil dibuat";
}else{
	echo "Gagal membuat database" .mysqli_error($cnn);
}
mysqli_close($cnn);
?>