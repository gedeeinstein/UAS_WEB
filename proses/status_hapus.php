<?php
  include '../pengaturan/koneksi.php';
  $id_status = $_GET['id_status'];


  $sql = "DELETE FROM status_tbl WHERE id_status = '".$id_status."'";
  mysqli_query($koneksi,$sql);
  

  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Status Dihapus"); location.href="../status.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../status.php'>Kembali Ke List Status</a>";
  }


?>