<?php
  include '../pengaturan/koneksi.php';
  $id = $_POST['id_kategori'];
  $nama = $_POST['nama_kategori'];
  $sts = $_POST['status'];
  $sql = "INSERT INTO kategori (id_kategori,nm_kategori,status) VALUES('$id','$nama','$sts')";
  mysqli_query($koneksi,$sql);
  if($sql){
    echo '<script language="javascript">';
    echo 'alert("Data Ditambahkan"); location.href="../kategori.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../kategori_tambah.php'>Kembali Ke Form</a>";
  }
?>