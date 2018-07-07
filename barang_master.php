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
                <th>Action</th>


<?php
// $query = "SELECT * FROM barang, gudang where barang.id_gudang= gudang.id_gudang";
$query = "SELECT a.id_barang, a.gambar, a.sku, a.nama_barang, b.nm_kategori, c.nm_merk, d.nama_gudang, a.stok, a.deskripsi, e.nm_status
STATUS FROM barang a
INNER JOIN kategori b
ON a.id_kategori = b.id_kategori
INNER JOIN merk c
ON a.id_merk = c.id_merk
INNER JOIN gudang d
ON a.id_gudang = d.id_gudang
LEFT JOIN status_tbl e
ON a.status = e.id_status ORDER BY nama_barang ASC";
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
                        <td><?php echo $data["nama_gudang"]; ?></td>
                        <td><span class="label label-success"><?php echo $data["STATUS"]; ?></span></td>
                        <td><a href="barang_ubah.php?id_barang=<?php echo $data["id_barang"]; ?>" class="btn btn-default"><i class="fa fa-pencil"></i></a> 
                        <a href="proses/barang_hapus.php?id_barang=<?php echo $data["id_barang"];?>" onClick="return confirm('Apakah anda yakin menghapus data ?')" type="button" class="btn btn-default" ><i class="fa fa-trash"></i></a></td>
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