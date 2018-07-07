<?php
// session_start();

// $id_status = 0;

// include 'koneksi.php';
require 'koneksi.php';

$edit_states = false;

if (isset($_POST['simpan'])) {
  $nm_status = $_POST['nm_status'];
  if($nm_status !=''){
  $query = "INSERT INTO status_tbl (nm_status) VALUES ('$nm_status')";
  $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  // mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  header('location:status.php');
  }else {
    $response['messages'] = "Error in the database while removing the product information";
    header('location:status.php');
    echo json_encode($response);
  }
  echo json_encode($response);
  }

  if (isset($_POST['ubah'])) {
  $id_status = mysql_real_escape_string($_POST['id_status']);
  $nm_status = mysql_real_escape_string($_POST['nm_status']);
  
  $query = "UPDATE status_tbl set nm_status = '$nm_status' where id_status = '".$id_status."' ";
  $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  // mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  header('location:status.php');

  }


  // $showdata = "SELECT * FROM status_tbl";
  // $data_status = mysqli_query($koneksi, $showdata);


?>