<?php 
    $title = "Data Kategori Barang";
    $barang_tambah = "active";
    $title_section = "Kategori Barang";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";

  

?>
<div class="content-wrapper">
    <?php include "pengaturan/content-header.php" ?> 
        <section class="content">
        <div id="messages"></div>
         <?php 
          $kode_total = "SELECT max(id_kategori) as maxKode from kategori"; // mencari kode barang dengan nilai paling besar
          $eksekusi1 = mysqli_query($koneksi,$kode_total);  // kueri eksekusi di php
          $data = mysqli_fetch_array($eksekusi1);
          $id_kat = $data['maxKode'];
          $id_urut = (int) substr($id_kat, 3, 3);
          $id_urut++;
          $char = "KTG";
          $id_kat = $char . sprintf("%03s", $id_urut);
          // mysqli_close($koneksi);
          ?> 
            
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Form Kategori Barang</h3>
            </div>
            <!-- FORM TAMBAH DATA BARANG -->
            <form role="form" action="proses/kategori_simpan.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_kategori">ID Kategori</label>
                  <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="id Kategori" autocomplete="on" value="<?php echo $id_kat; ?>" readonly/> 
                  <!-- Menggunakan Kode Otomatis Kategori -->
                </div>

                <div class="form-group">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" autocomplete="on" />
                </div>

                 <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="availability" name="status">
                    <option value="active">Aktif</option>
                    <option value="not-active">Tidak Aktif</option>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="barang_kategori.php" class="btn btn-warning">Back</a>
              </div>
            </form>
        </div>
        <?php   mysqli_close($koneksi); ?>
        <section>
</div>
<?php 
// mysql_close($koneksi);
include "pengaturan/footer.php";?>