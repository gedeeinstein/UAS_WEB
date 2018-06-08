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
            <?php //include "pengaturan/content-section.php" ?> 
            
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Form Kategori Barang</h3>
            </div>
            <!-- FORM TAMBAH DATA BARANG -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_kategori">ID Kategori</label>
                  <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="id Kategori" autocomplete="on"/>
                </div>

                <div class="form-group">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" autocomplete="on" />
                </div>

                 <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="availability" name="availability">
                    <option value="1">Aktif</option>
                    <option value="2">Tidak Aktif</option>
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