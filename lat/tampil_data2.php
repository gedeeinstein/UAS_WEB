<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Data Mahasiswa</title>
</head>
<body>
<h2>Daftar Data Mahasiswa</h2>
<?php
require("koneksi2.php");
$sql="select nim,nama,alamat,telp from mahasiwa";
$result=mysqli_query($conn,$sql);
echo "$sql";
$num=mysqli_num_rows($result);
if($num > 0){
?>
<table>
<tr bgColor="#ddcc45">
<th width="140">NIM</th>
<th width="200">Nama</th>
<th width="200">Alamat</th>
<th width="250">Telepon</th>
</tr>
<?php
while(list($nim,$nama,$alamat,$telp)=mysqli_fetch_array($result)){
?>
<tr>
<td Valign="top"><?php echo $nim; ?></td>
<td Valign="top"><?php echo $nama; ?></td>
<td Valign="top"><?php echo $alamat; ?></td>
<td Valign="top"><?php echo $telp; ?></td>
</tr>
<?php
}
?>
</table>
<?php
}else{
?>
<i>Belum ada data.</i>
<?php
}
?>
<br/><br/>
<div align="center">
[<a href="tambah_data.php">Isi Data</a>]
</div>
</body>
</html>