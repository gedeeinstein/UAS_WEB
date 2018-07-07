<?php 
require_once('../pengaturan/koneksi.php');

if (isset($_POST['simpan'])) {
	$id_masuk = $_POST['id_brg_masuk'];
	$id_brg_detail = $_POST['id_barang'];
	$qty_detail = $_POST['qty_brg'];
	// $suplier = $_POST['id_suplier'];


	if ($qty_detail !='') {
	
	$query = "INSERT INTO detail_masuk (id_masuk, id_barang, qty) VALUES ('$id_masuk', '$id_brg_detail', '$qty_detail')";
	$sql = mysqli_query($koneksi, $query);

	if ($sql) {
		header('location: ../brg_masuk.php'); 
	}
	else{
		echo 'Gagal Simpan Data';
		echo mysqli_error($koneksi);	
	}

	}
}





?>