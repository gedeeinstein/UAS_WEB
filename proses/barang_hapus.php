<?php
  include '../pengaturan/koneksi.php';
  $id = $_GET['id_barang'];
  // $gambar = $_GET['gambar'];
  // $delete = datetime();
  // $sql = "UPDATE BARANG set deleted_at = '".$delete."' WHERE id_barang = '".$id."' ";
  $sql = "DELETE FROM BARANG WHERE id_barang = '".$id."'";
  mysqli_query($koneksi,$sql);
  if($sql){

    echo '<script language="javascript">';
    echo 'alert("Data Dihapus"); location.href="../barang_master.php"';
    echo '</script>';
    //header("location: kategori.php");
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../barang_master.php'>Kembali Ke List Kategori</a>";
  }
mysqli_close($koneksi);

?>