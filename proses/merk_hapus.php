<?php
  include '../pengaturan/koneksi.php';
  $id = $_GET['id_merk'];
  $sql = "DELETE FROM merk WHERE id_merk = '".$id."' ";
  mysqli_query($koneksi,$sql);
  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Dihapus"); location.href="../merk.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../merk.php'>Kembali Ke List Kategori</a>";
  }
?>