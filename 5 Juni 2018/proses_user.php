<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Input Data User</title>
</head>
<body>
<?php
if(isset($_POST["kirim"])){
$id_user = $_POST["id_user"];
$user = $_POST["user"];
$pass = $_POST["pass"];
require("koneksi2.php");
$sql="insert into user(id_user,username,password) values('$id_user','$user','$pass')";
echo "$sql";
mysqli_query($conn,$sql);
$num=mysqli_affected_rows($conn);
if ($num > 0){
?>
<h2>Terima Kasih <?php echo $username; ?></h2>
<strong> Data kamu telah tersimpan.</strong><br/>
[<a href="tampil_user.php">Lihat Daftar User</a>]
<br/> <br/>
<?php
}else{
?>
<hr>error<h2>
Proses pencatatan data gagal. Silahkan Ulangi!
<br/>
Kembali ke Form tambah Data [<a href="form_user.php">User</a>]
<?php
}
}
?>
</body>
</html>

