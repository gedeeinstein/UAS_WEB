<?php
$dbname='db_kampus';
$host='localhost';
$password='';
$username='root';

$conn = mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()){
echo "Koneksi Gagal.";
exit();
}


?>