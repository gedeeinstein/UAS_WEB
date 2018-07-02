<?php
  include '../pengaturan/koneksi.php';
  $id_suplier = $_POST['id_suplier'];
  $nama_suplier = $_POST['nama_suplier'];
  $alamat_suplier = $_POST['alamat_suplier'];
  $telepon = $_POST['telepon_suplier'];
  $email = $_POST['email_suplier'];

  // $sql = "INSERT INTO suplier (id_suplier,nama_suplier,alamat, email, telepon) VALUES('$id','$nama','$sts')";
  

  // mysqli_query($koneksi,$sql);
  if($id_suplier!='' && $nama_suplier !='' && $alamat_suplier !='' && $telepon !='' && $email!='')
  {
    $query = "INSERT INTO suplier VALUES('".$id_suplier."', '".$nama_suplier."', '".$alamat_suplier."', '".$email."', '".$telepon."')";
    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
      
    if($sql)
    {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpann"); location.href="../suplier.php"';
      echo '</script>';
      header('location: ../suplier.php');
    }else
    {
      echo 'Gagal Menyimpan Data Cek Errornya disini <br />';
      echo mysqli_error($koneksi);
      echo "<br><a href='../suplier_tambah.php'>Kembali Ke Form</a>";
    }
  }





  // if($sql){
  //   header("../location: kategori.php");
  //   echo '<script language="javascript">';
  //   echo 'alert("Data Ditambahkan"); location.href="../kategori.php"';
  //   echo '</script>';
  //   //header("location: kategori.php");
  // }else{
  //   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  //   echo "<br><a href='../kategori_tambah.php'>Kembali Ke Form</a>";
  // }
?>