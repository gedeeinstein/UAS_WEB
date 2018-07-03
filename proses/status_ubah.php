<?php
  include '../pengaturan/koneksi.php';
  $id_status = $_GET['id_status'];
  $nm_status = $_POST['nm_status'];
  
  if($id_status!='' && $nm_status!='' )
  {
    $query = "UPDATE status_tbl SET nm_status = '$nm_status' where id_status = '".$id_status."'";

    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
      
    if($sql)
    {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Diubah"); location.href="../suplier.php"';
      echo '</script>';
      header('location: ../status.php');
    }else
    {
      echo 'Gagal Menyimpan Data Cek Errornya disini <br />';
      echo mysqli_error($koneksi);
      echo "<br><a href='../status_ubah.php?id_status=$id_status'>Kembali Ke Form</a>";
    }
  }
?>




<?php
  include '../pengaturan/koneksi.php';
  $id_status = $_POST['id_status'];
  $nm_status = $_POST['nm_status'];
  // $alamat_suplier = $_POST['alamat_suplier'];
  // $telepon = $_POST['telepon_suplier'];
  // $email = $_POST['email_suplier'];

  // $sql = "INSERT INTO suplier (id_suplier,nama_suplier,alamat, email, telepon) VALUES('$id','$nama','$sts')";
  

  // mysqli_query($koneksi,$sql);
  if($id_status!='' && $nm_status !='')
  {
    $query = "INSERT INTO status_tbl VALUES('".$id_status."', '".$nm_status."')";
    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
      
    if($sql)
    {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpann"); location.href="../suplier.php"';
      echo '</script>';
      header('location: ../status.php');
    }else
    {
      echo 'Gagal Menyimpan Data Cek Errornya disini <br />';
      echo mysqli_error($koneksi);
      echo "<br><a href='../status_tambah.php'>Kembali Ke Form</a>";
    }
  }