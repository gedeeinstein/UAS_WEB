<?php
  include '../pengaturan/koneksi.php';
  $id_status = $_GET['id_status'];


  $query = "DELETE FROM status_tbl WHERE id_status = '".$id_status."'";
  $sql = mysqli_query($koneksi,$query);
  
  if($sql)
   {
    // $_SESSION['messages'] = "DATA DIHAPUS";
    header('location: ../status.php');
   }
    else
    {
      echo "Data Gagal Disimpan <br />";
      echo  mysqli_error($koneksi);
    }

  // if($sql){
  //   echo '<script language="javascript">';
  //   echo 'alert("Data Status Dihapus"); location.href="../status.php"';
  //   echo '</script>';
  //   //header("location: kategori.php");
  // }else{
  //   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  //   echo "<br><a href='../status.php'>Kembali Ke List Status</a>";
  // }


?>