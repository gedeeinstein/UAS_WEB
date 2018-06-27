<?php
  include '../pengaturan/koneksi.php';
  $id = $_POST['id_merk'];
  $nama = $_POST['nm_merk'];
  $sts = $_POST['status'];
  $sql = "INSERT INTO merk (id_merk,nm_merk,status) VALUES('$id','$nama','$sts')";
  mysqli_query($koneksi,$sql);
  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Ditambahkan"); location.href="../merk.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../merk_tambah.php'>Kembali Ke Form</a>";
  }
?>