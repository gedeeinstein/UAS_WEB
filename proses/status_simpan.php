<?php
// session_start();

// $id_status = 0;

// include 'koneksi.php';
require '../koneksi.php';

// if (isset($_POST['simpan'])) {
  $nm_status = $_POST['nm_status'];
  

  $query = "INSERT INTO status_tbl (nm_status) VALUES ('$nm_status')";
  $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  mysqli_close($koneksi);
  // mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  header('location: ../status.php');


   // if($sql)
   // {
   //  header('location: status.php');
   // }
   //  else
   //  {
   //    echo "Data Gagal Disimpan <br />";
   //    echo  mysqli_error($koneksi);
   //  }
  // }

  // $showdata = "SELECT * FROM status_tbl";
  // $data_status = mysqli_query($koneksi, $showdata);


?>