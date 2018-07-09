<?php
require_once('../pengaturan/koneksi.php');
if(!empty($_POST))
{

	$id_masuk = mysqli_real_escape_string($koneksi, $_POST['id_brg_masuk']);
	$suplier = mysqli_real_escape_string($koneksi, $_POST['id_suplier']);
	$tgl_msk = mysqli_real_escape_string($koneksi, $_POST['tgl_masuk']);
	$total_brg = mysqli_real_escape_string($koneksi, $_POST['total_qty']);

	if ($id_masuk !='' && $suplier !='' && $tgl_msk !='') {
		
		$query = "INSERT INTO barang_masuk (id_masuk, id_suplier, tgl_masuk, total_barang) VALUES ('$id_masuk','$suplier','$tgl_masuk', '$total_brg')";
		$sql = mysql_query($koneksi, $query);

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

	?>