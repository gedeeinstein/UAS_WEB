<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Input Data Mahasiswa</title>
</head>
<body>
<?php
if(isset($_POST["kirim"])){
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];
require("koneksi2.php");
$sql="insert into mahasiswa(nim,nama,alamat,telp) values('$nim','$nama','$alamat','$telepon')";
echo "$sql";
mysqli_query($conn,$sql);
$num=mysqli_affected_rows($conn);
if ($num > 0){
?>
<h2>Terima Kasih</h2>
<strong><?php echo $nama; ?></strong>,
data anda telah tersimpan.<br/>
[<a href="tampil_data.php">Lihat Daftar Komentar</a>]
<br/> <br/>
<?php
}else{
?>
<hr>error<h2>
Proses pencatatan data gagal. Silahkan Ulangi!
<br/>
[<a href="form_mahasiswa.php">Kembali ke Form tambah Data</a>]
<?php
}
}
?>
</body>
</html>