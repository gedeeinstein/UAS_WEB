
<?php
include_once("../pengaturan/koneksi.php");
$select = "DELETE from kategori where id_kategori='".$_GET['id_kategori']."'";
$query = mysqli_query($koneksi, $select) or die($select);
header ("Location: index.php");
?>