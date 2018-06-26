<?php
$cnn = mysqli_connect('localhost','root','','db_kampus');
if(!$cnn){
echo "Koneksi Gagal <br/>";
}else{
echo "Koneksi Berhasil <br/>";
}
mysqli_select_db($cnn,"db_kampus");
$sql = "SELECT id_user, username, password FROM user;";
//$delete = "DELETE FROM user where id_user='$a';";
$tampil = mysqli_query($cnn,$sql);
while ($data = mysqli_fetch_array($tampil)){ 
	echo "Kode User 	: ". $data['id_user']."<br/>"; 
	echo "Nama User		: ". $data['username']."<br/>"; 
	echo "Password 		: ". $data['password']."<br/>"; 
	echo "<br/>";
	echo "<br/>";
	echo "Action 	:";
}
?>


<a href="form_user.php">Kembali Tambah User</a>

<!-- https://belajarphp.net/cara-update-dan-delete-data-mysql-dengan-php/ -->