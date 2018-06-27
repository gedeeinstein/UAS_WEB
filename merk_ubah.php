<?php 
    $title = "Data Merk Barang";
    $barang_tambah = "active";
    $title_section = "Merk Barang";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
    <?php include "pengaturan/content-header.php" ?> 
        <section class="content">
            
        <?php 
          $id = $_GET['id_merk'];
          //$name = $_POST['nm_merk'];
          $query = "SELECT * FROM merk WHERE id_merk = '".$id."'";
          $sql = mysqli_query($koneksi, $query);
          $data = mysqli_fetch_array($sql);
          mysqli_close($koneksi);
        ?> 
         
            
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Update Merk Barang</h3>
            </div>
            <!-- FORM TAMBAH DATA BARANG -->
            <form role="form" action="proses/merk_ubah.php?id_merk=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_merk">ID MERK</label>
                  <input type="text" class="form-control" id="id_merk" name="id_merk" placeholder="id merk" readonly value="<?php echo $id; ?>"/>
                </div>

                <div class="form-group">
                  <label for="nama_merk">Nama Merk</label>
                  <input type="text" class="form-control" id="nm_merk" name="nm_merk" placeholder="Nama Merk" autocomplete="on" value="<?php echo $data['nm_merk']; ?>"/>
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
                <a href="barang_merk.php" class="btn btn-warning">Back</a>
              </div>
            </form>
        </div>

        

        <section>
</div>
<?php include "pengaturan/footer.php";?>