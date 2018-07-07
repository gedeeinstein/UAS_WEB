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

if (isset($_POST['save_all'])) {
	$id_masuk = $_POST['id_brg_masuk'];
	$suplier = $_POST['id_suplier'];
	$tgl_msk = $_POST['tgl_masuk'];

	if ($id_masuk !='' && $suplier !='' && $tgl_msk !='') {
		
		$query = "INSERT INTO barang_masuk (id_masuk, id_suplier, tgl_masuk) VALUES ('$id_masuk','$suplier','$tgl_masuk')";
		$sql = mysql_query($koneksi, $query);

		if ($sql) {
			header('location: ../transaksi_brg_masuk.php');
		}else{
			echo 'Gagal Simpan Data';
		echo mysqli_error($koneksi);	
		}
	}

	# code...
}




?>