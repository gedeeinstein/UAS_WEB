<?php
  include '../pengaturan/koneksi.php';
  $id = $_GET['id_merk'];
  $nama = $_POST['nm_merk'];
  $sts = $_POST['status'];
  $sql = "UPDATE merk SET nm_merk = '$nama',status='$sts' WHERE id_merk = '".$id."'" ;

  
  mysqli_query($koneksi,$sql);
  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Berhasil Diperbaharui"); location.href="../merk.php"';
    echo '</script>';
    //header("location: merk.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../merk_tambah.php'>Kembali Ke Form</a>";
  }
?>