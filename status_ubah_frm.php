<?php 
// session_start();
    $title = "Master Data Status";
    $master = "active menu-open";
    $suplier = "active";
    $suplier_active="active open";
    $title_section = "Mengelola Status";
    // include "status_simpan.php";
    include 'koneksi.php';
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
  <section class="content">
    <div id="messages">
    </div>
        <!-- <div class="modal fade" id="modal-info"> -->
          <div class="box-body">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="box-title">Ubah Status</h3>
              </div>
        <?php 
        require 'koneksi.php';
          $id_status = $_GET['id_status'];
          $query = "SELECT * FROM status_tbl where id_status = '".$id_status."'";
          $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
          $data = mysqli_fetch_array($sql);
          mysqli_close($koneksi);

        ?> 

          <form role="form" action="proses/status_ubah.php?id_status=<?php echo $data['id_status']; ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">


        <div class="form-group">
                  <input type="hidden" class="form-control" id="id_status" name="id_status" value="<?php echo $data['id_status']; ?>" autocomplete="on" />
                </div>                
        <div class="form-group">
                  <label for="nm_status">Nama Status</label>
                  <input type="text" class="form-control" id="nm_status" name="nm_status" value="<?php echo $data['nm_status']; ?>" autocomplete="on" />
                </div>
            <!-- <?php //} ?> -->

              </div>
          
              <div class="modal-footer">
                <a type="button" class="btn btn-default pull-left" href="status.php">Close</a>
                <button type="submit" class="btn btn-primary" name="ubah" value="Simpan">Update</button>
              </div>
          </form>
            </div>
          </div>
        </div>
        </section>
      </div>
      <?php include "pengaturan/footer.php";?>