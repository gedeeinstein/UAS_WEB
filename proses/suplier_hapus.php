<?php
session_start();
  include '../pengaturan/koneksi.php';
  $id_suplier = $_GET['id_suplier'];


  $query = "DELETE FROM suplier WHERE id_suplier = '".$id_suplier."'";
  $sql = mysqli_query($koneksi,$query) or die("database error:". mysqli_error($koneksi));
  

   //  if($sql)
   // {
   //  $_SESSION['messages'] = "DATA DIHAPUS";
   //  header('location: status.php');
   // }
   //  else
   //  {
   //    echo "Data Gagal Disimpan <br />";
   //    echo  mysqli_error($koneksi);
   //  }

  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Dihapus"); location.href="../status.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo mysqli_error($koneksi);
    echo "<br><a href='../status.php'>Kembali Ke List Suplier</a>";
  }
    mysqli_close($koneksi);

?>