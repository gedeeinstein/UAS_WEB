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

if (isset($_POST['simpan_data'])) {
// if(!empty($_POST)){
	$id_masuk = mysqli_real_escape_string($koneksi, $_POST['id_brg_masuk']);
	$suplier = mysqli_real_escape_string($koneksi, $_POST['nama_suplier']);
	$tgl_msk = mysqli_real_escape_string($koneksi, $_POST['tgl_masuk']);
	$total_brg = mysqli_real_escape_string($koneksi, $_POST['total_qty']);

	if ($id_masuk !='' && $suplier !='' && $tgl_msk !='') {
		
		$query = "INSERT INTO barang_masuk (id_masuk, id_suplier, tgl_masuk, total_barang) VALUES ('$id_masuk','$suplier','$tgl_masuk', '$total_brg')";
		$sql = mysqli_query($koneksi, $query);

		if ($sql) {
			mysqli_close($koneksi);
			echo mysqli_error($koneksi);	
			header('location: ../transaksi_brg_masuk.php');

		}else{
		echo 'Gagal Simpan Data';
		echo mysqli_error($koneksi);	
		}
	}
}
	# code...
// }


// if (isset($_POST['save_all'])) {
// 	$id_brg_masuk2 = $_POST['id_brg_masuk1'];
// 	$nama_suplier2 = $_POST['nama_suplier1'];
// 	$tgl_msk2 = $_POST['tgl_masuk1'];
// 	$total_qty2 = $_POST['total_qty1'];

// 	if ($id_brg_masuk2 !='' && $nama_suplier2 !='' && $tgl_msk2 !='' && $total_qty2 !='') {
		
// 		$query = "INSERT INTO barang_masuk (id_masuk, id_suplier, tgl_masuk, total_barang) VALUES ('$id_brg_masuk2','$nama_suplier2','$tgl_msk2', '$total_qty2')";
// 		$sql = mysqli_query($koneksi, $query);

// 		if ($sql) {
// 			header('location: ../transaksi_brg_masuk.php');
// 		}else{
// 			echo 'Gagal Simpan Data';
// 			echo mysqli_error($koneksi);
// 			header('location: ../brg_masuk.php');
// 		}
// 	} else{
// 		echo mysqli_error($koneksi);
// 		// echo 'Gagal Simpan BBBBB';
// 		// header('location: ../brg_masuk.php');
// 	}
// }else{
// 		// echo 'Gagal Simpan DDDDD';
// 		// header('location: ../brg_masuk.php');
// }






?>