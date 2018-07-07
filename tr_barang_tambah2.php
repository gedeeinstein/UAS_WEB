<?php
// $koneksi=mysqli_connect("localhost", "root", "", "z_uas_web");
include "koneksi.php";
$number=count($_POST['hidden_nama_barang']);
$id = $_POST["id_masuk"];
$id_supp = $_POST["supplier"];
if($number>0){
	for ($i=0; $i < $number ; $i++) { 
		/*if(trim($_POST["hidden_id_masuk"]) !=''){

			$id_masuk= $_POST["hidden_id_masuk"];
			$nama_barang= $_POST["hidden_nama_barang"];
			$qty=$_POST["hidden_qty"];
		*/
			$data = array(
				 'nama_barang' => $_POST["hidden_nama_barang"][$i],
				'qty' => $_POST["hidden_qty"][$i]);

			$query="INSERT INTO detail_masuk VALUES ('','".$id."','".$data['nama_barang']."','".$data['qty']."','".$id_supp."')";
			$sql = mysqli_query($koneksi,$query);

		/*}*/
	}
}
$datetime = date('Y-m-d');
$query2="INSERT INTO barang_masuk VALUES ('".$id."','".$id_supp."','$datetime')";
$sql2 = mysqli_query($koneksi,$query2);

?>