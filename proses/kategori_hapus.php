<?php
  include '../pengaturan/koneksi.php';
  $id = $_GET['id_kategori'];
  $sql = "DELETE FROM kategori WHERE id_kategori = '".$id."' ";
  mysqli_query($koneksi,$sql);
  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Dihapus"); location.href="../kategori.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../kategori.php'>Kembali Ke List Kategori</a>";
  }
?>