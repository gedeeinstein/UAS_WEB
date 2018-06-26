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
          
          $id = $_GET['id_kategori'];
          $query = "SELECT * FROM kategori WHERE id_kategori= '".$id."'";
          $sql = mysqli_query($koneksi, $query);
          $data = mysqli_fetch_array($sql);
          mysqli_close($koneksi);
          ?> 
            
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Form Kategori Barang</h3>
            </div>
            <!-- FORM TAMBAH DATA BARANG -->
            <form role="form" action="proses/kategori_ubah.php?id_kategori=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_kategori">ID Kategori</label>
                  <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="id Kategori" autocomplete="on" value="<?php echo $id ?>" readonly/> 
                  <!-- Menggunakan Kode Otomatis Kategori -->
                </div>

                <div class="form-group">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" value="<?php echo $data['nm_kategori']; ?>" autocomplete="on" />
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
        <section>
</div>
<?php include "pengaturan/footer.php";?>