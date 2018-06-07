<?php
$cnn = mysqli_connect('localhost','root','','db_kampus');
if(!$cnn){
echo "Koneksi Gagal <br/>";
}else{
echo "Koneksi Berhasil <br/>";
}
mysqli_select_db($cnn,"db_kampus");
$sql = "SELECT kode_mk, nama_mk, sks, semester FROM matakuliah;";
$tampil = mysqli_query($cnn,$sql);
while ($data = mysqli_fetch_array($tampil)){ 
	echo "Kode MK 	: ". $data['kode_mk']."<br/>"; 
	echo "Nama MK	: ". $data['nama_mk']."<br/>"; 
	echo "SKS 	 	: ". $data['sks']."<br/>"; 
	echo "Semester	: ". $data['semester']."<br/>"; 
	echo "<br/>";
}
?>