<?php
  include '../pengaturan/koneksi.php';
  $id_suplier = $_GET['id_suplier'];


  $sql = "DELETE FROM suplier WHERE id_suplier = '".$id_suplier."'";
  mysqli_query($koneksi,$sql);
  

  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Dihapus"); location.href="../suplier.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../barang_master.php'>Kembali Ke List Kategori</a>";
  }


?>