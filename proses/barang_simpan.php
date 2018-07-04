<?php
  include '../pengaturan/koneksi.php';
  $id_brg = $_POST['id_barang']; //ambil data id barang dan jadikan variabke id_barang
  $nama_barang = $_POST['product_name'];//Ambil Nama barang yang dikirim dari form Tambah
  $sku = $_POST['sku'];
  $stok = $_POST['qty'];
  $deskripsi = $_POST['deskripsi'];
  $merk = $_POST['brands'];
  $kategori = $_POST['category'];
  $gudang = $_POST['store'];
  $status = $_POST['status'];
  // $gambar = $_POST['gambar'];
  // if(isset($_POST['update_gambar'])){
  try {
        $gambar = $_FILES['product_image']['name'];
        $tmp = $_FILES['product_image']['tmp_name'];
        
        // $gambar_baru = date('dmYHis').$gambar;
        // $gambar_baru = date('dmYHis').'_'.md5($gambar . microtime());
        // $lokasi = "../assets/images/".$gambar_baru;
        $ekstension = substr( $gambar, strrpos( $gambar, '.' ) + 1); 
        $gambar_baru = date('dmYHis').'_'.md5($gambar).'.'.$ekstension;
        $lokasi = "../assets/images/".$gambar_baru;

        if (move_uploaded_file($tmp, $lokasi))
        {
          // $sql = mysqli_query($koneksi,$query);
          // $data = mysqli_fetch_array($sql);
            if($id_brg!='' && $nama_barang !='' && $sku !='' && $merk !='')
            {
              $query = "INSERT INTO barang VALUES('".$id_brg."', '".$gambar_baru."', '".$sku."', '".$nama_barang."', '".$kategori."', '".$merk."', '".$gudang."', '".$stok."', '".$deskripsi."', '".$status."')";

              $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));

              if($sql)
              {
                  header('location: ../barang_master.php');
              }else
              {
                  echo 'Gagal Menyimpan Data Cek Errornya disini <br />';
                  echo mysqli_error($koneksi);
                  echo "<br><a href='../barang_tambah.php'>Kembali Ke Form</a>";
              }
          
              // if(is_file("../assets/images/".$data['gambar']))
              //   unlink("../assets/images/".$data['gambar']);
              // if($nama_barang !='' && $sku !='' && $merk !='')
              // {
              // $query2 = "UPDATE barang set gambar='".$gambar_baru."', sku='".$sku."', nama_barang='".$nama_barang."', id_kategori='".$kategori."', id_merk='".$merk."', id_gudang='".$gudang."', stok='".$stok."', deskripsi='".$deskripsi."', status='".$status."' where id_barang='".$id_brg."' ";
              // }
            }//Akhir Dari pengecekan jika data barang tidak ada yang kosong
        
        }else
        {
          echo 'Harus Ada Gambarnya';
          // header("location: ../barang_ubah.php?id_barang='".$id_brg."'");
          echo mysqli_error($koneksi);
          echo "<br><a href='../barang_tambah.php'>Kembali Ke Form</a>";
        }
      }
    catch(Exception $Ex)
      {
        $warning = error_get_last();
      }
    mysqli_close($koneksi);
  // }else{
    // if($nama_barang !='' && $sku !='' && $merk !='')
    //   {
    //     $query = "UPDATE barang set sku='".$sku."', nama_barang='".$nama_barang."', id_kategori='".$kategori."', id_merk='".$merk."', id_gudang='".$gudang."', stok='".$stok."', deskripsi='".$deskripsi."', status='".$status."' where id_barang='".$id_brg."' ";
    //     $sql = mysqli_query($koneksi, $query);
    //     if($sql)
    //     {
    //       header('location: ../barang_master.php');
    //     }else
    //     {
    //       echo 'Gagal Query';
    //       echo mysqli_error($koneksi);
    //       echo "<br><a href='../barang_ubah.php?id_barang=".$id_brg."'>Kembali Ke Form</a>";
    //     }
    //   }
  // }

  // $sql = "UPDATE merk SET nm_merk = '$nama',status='$sts' WHERE id_merk = '".$id."'" ;

  
  // mysqli_query($koneksi,$sql);
  // if($sql){
  //   echo '<script language="javascript">';
  //   echo 'alert("Data Berhasil Diperbaharui"); location.href="../barang_master.php"';
  //   echo '</script>';
  //   //header("location: barang_master.php");
  // }else{
  //   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  //   echo "<br><a href='../barang_ubah.php?id_barang='".$id_barang."''>Kembali Ke Form</a>";
  // }
?>