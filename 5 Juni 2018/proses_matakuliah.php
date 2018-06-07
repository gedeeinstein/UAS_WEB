<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Input Data Matakuliah</title>
</head>
<body>
<?php
if(isset($_POST["kirim"])){
$kode_mk = $_POST["kode_mk"];
$nama_mk = $_POST["nama_mk"];
$sks = $_POST["sks"];
$semester = $_POST["semester"];
require("koneksi2.php");
$sql="insert into matakuliah(kode_mk,nama_mk,sks,semester) values('$kode_mk','$nama_mk','$sks','$semester')";
echo "$sql";
mysqli_query($conn,$sql);
$num=mysqli_affected_rows($conn);
if ($num > 0){
?>
<h2>Terima Kasih - Mata Kuliah <?php echo $nama_mk; ?></h2>
<!-- <strong>Disimpan</strong>, -->
data Mata Kuliah telah tersimpan.<br/>
[<a href="tampildata_matkul.php">Lihat Daftar Komentar</a>]
<br/> <br/>
<?php
}else{
?>
<hr>error<h2>
Proses pencatatan data gagal. Silahkan Ulangi!
<br/>
[<a href="form_matakuliah.php">Kembali ke Form tambah Data</a>]
<?php
}
}
?>
</body>
</html>