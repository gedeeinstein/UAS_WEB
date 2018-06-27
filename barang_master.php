<?php 
    $title = "Master Data Barang";
    $master = "active menu-open";
    $barang = "active";
    $barang_active="active open";
    $title_section = "Mengelola Barang";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
<!-- Untuk Menampilkan Breadcum Otomatis Sesuai Isi Halaman -->
<?php include "pengaturan/content-header.php" ?> 
    <section class="content">
        <?php //include "pengaturan/content-section.php" ?> 
            <div id="messages"></div>
                <a href="barang_tambah.php"><button class="btn btn-primary" data-toggle="modal">Add Barang</button></a>
            <br>
            <br>
    <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Barang</h3>
            </div>
        <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Gambar</th>
                <th>SKU</th>
                <th>Nama Produk</th>
                <!--<th>Harga</th>-->
                <th>Qty</th>
                <th>Gudang</th>
                <th>Availability</th>
                 <?php //if(in_array('updateProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?> 
                  <th>Action</th>
<?php
$query = "SELECT * FROM barang";
$sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
while( $data = mysqli_fetch_assoc($sql) ) {
?>
              </tr>
              </thead>
              <tbody>
                  <tr role="row" class="odd">
                      <td><img src="assets/images/<?php echo $data["gambar"]; ?>" alt="<?php echo $data["nama_barang"]; ?>" class="img-circle" width="50" height="50"></td>
                        <td><?php echo $data["sku"]; ?></td>
                        <td><?php echo $data["nama_barang"]; ?></td>
                        <td><?php echo $data["stok"]; ?> </td>
                        <td><?php echo $data["id_gudang"]; ?></td>
                        <td><span class="label label-success"><?php echo $data["status"]; ?></span></td>
                        <td><a href="barang_ubah.php?id_barang=<?php echo $data["id_barang"]; ?>" class="btn btn-default"><i class="fa fa-pencil"></i></a> 
                        <button href="proses/barang_hapus.php?id_barang=<?php echo $data["id_barang"]; ?>" type="button" class="btn btn-default"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <?php
                        }
                        mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
          </div>
        </div>
    <section>
</div>

<?php include "pengaturan/footer.php";?>