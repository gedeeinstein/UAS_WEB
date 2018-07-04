<?php
  include '../pengaturan/koneksi.php';
  $id_suplier = $_GET['id_suplier'];
  $nama_suplier = $_POST['nama_suplier'];
  $alamat_suplier = $_POST['alamat_suplier'];
  $telepon = $_POST['telepon_suplier'];
  $email = $_POST['email_suplier'];

  // if($id_suplier!='' && $nama_suplier !='' && $alamat_suplier !='' && $telepon !='' && $email!='')
  if($id_suplier!='')
  {
    $query = "UPDATE suplier SET nama_suplier = '$nama_suplier', alamat = '$alamat_suplier', email = '$email', telepon = '$telepon' where id_suplier = '".$id_suplier."'";

    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
      
    if($sql)
    {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Diubah"); location.href="../suplier.php"';
      echo '</script>';
      header('location: ../suplier.php');
    }else
    {
      echo 'Gagal Menyimpan Data Cek Errornya disini <br />';
      echo mysqli_error($koneksi);
      echo "<br><a href='../suplier_ubah.php?id_suplier=$id_suplier'>Kembali Ke Form</a>";
    }
  }
    mysqli_close($koneksi);
?>