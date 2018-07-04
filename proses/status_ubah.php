<?php 

?> 

<?php



require '../koneksi.php';
  $id_status = $_GET['id_status'];
  $query = "SELECT * FROM status_tbl where id_status = '".$id_status."'";
  $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  $data = mysqli_fetch_array($sql);
  // mysqli_close($koneksi);


if (isset($_POST['ubah'])) {
  $id_status = $_GET['id_status'];
  $nm_status = $_POST['nm_status'];
  
  if ($id_status!='' && $nm_status!='') {
    # code...
  
  $query = "UPDATE status_tbl set nm_status = '$nm_status' where id_status = '".$id_status."' ";
  $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
  // mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));

  // header('location:../status.php');
  if($sql)
   {
    // $_SESSION['messages'] = "DATA DIHAPUS";
    header('location: ../status.php');
    mysqli_close($koneksi);
   }
    else
    {
      echo "Data Gagal DiUbah <br />";
      echo  mysqli_error($koneksi);

    }
  }
  }

  // }

  // $showdata = "SELECT * FROM status_tbl";
  // $data_status = mysqli_query($koneksi, $showdata);


?>