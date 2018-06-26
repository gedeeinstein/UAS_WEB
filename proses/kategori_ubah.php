<?php
  include '../pengaturan/koneksi.php';
  $id = $_GET['id_kategori'];
  $nama = $_POST['nama_kategori'];
  $sts = $_POST['status'];
  $sql = "UPDATE kategori SET nm_kategori = '$nama', status = '$sts' WHERE id_kategori = '".$id."' ";


  mysqli_query($koneksi,$sql);
  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data berhasil di Ubah"); location.href="../kategori.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../kategori_tambah.php'>Kembali Ke Form</a>";
  }
?>