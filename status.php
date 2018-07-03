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
		<!-- <a href="status_tambah_frm.php"><button class="btn btn-primary" data-toggle="modal">Add Data Status</button></a><br><br> -->
		<!-- type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Data Status</button> 

	<div class="box">
      <div class="box-header">
		<h3 class="box-title">Data Status</h3>
      </div>

    <div class="box-body">
        <table id="manageTable" class="table table-bordered table-striped">
        <thead>
			<tr>
                <th>Kode Status</th>
                <th>Nama Status</th>
            </tr>
        </thead>
        <tbody>
    <?php 
    	// $edit_state = true;
       
        $query = "SELECT * FROM status_tbl";
        $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));

        while ($data = mysqli_fetch_array($sql)) {
        
    ?>
           <tr role="row" class="odd">
			<td><?php echo $data['id_status']; ?></td>
			<td><?php echo $data['nm_status']; ?></td>
			<td>
			<a href="status_ubah_frm.php?id_status=<?php echo $data['id_status'];?>" class="btn btn-info" data-toggle="modal"><i class="fa fa-pencil"></i></button> 
 			<!-- <button type="button" class="btn btn-info" name="btn_ubah" data-toggle="modal" data-target="#modal-info"><i class="fa fa-pencil"></i></button> -->
 			<a href="proses/status_hapus.php?id_status=<?php echo $data['id_status'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
            <!-- <button onclick="myFunction()" class="btn btn-default"><i class="fa fa-trash"></i></button></td> -->
            </td>		  
           </tr>

    <?php } ?>
         </tbody>
        </table>
      </div>
    </div>

		<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="box-title">Add Status Barang</h3>
              </div>
          <form role="form" action="status_simpan.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">


				<div class="form-group">
                  <!-- <input type="hidden" class="form-control" id="id_status" name="id_status" value="<?php //echo $id_status; ?>" /> -->
                </div>

				<div class="form-group">
                  <label for="nm_status">Nama Status</label>
                  <input type="text" class="form-control" id="nm_status" name="nm_status" placeholder="Nama Status" autocomplete="on" />
                	
                </div>

              </div>
          
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <?php //if ($edit_state == false): ?> -->
                	 <button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Save Changes</button>
                <!-- <?php //else: ?> -->
                	 
                <?php //endif ?>
               
              </div>
          </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!-- 

<?php 
// require 'koneksi.php';
//   $id = $data['id_status'];;
//   $query = "SELECT * FROM status_tbl where id_status = '".$id."'";
//   $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
//   $data = mysqli_fetch_array($sql);
//   // mysqli_close($koneksi);

?> 
        <div class="modal fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="box-title">Ubah Status</h3>
              </div>
              	<?php 
              	    
       				
           //    		$id_status = $_GET['id_status'];
           //    		$query = "SELECT * FROM status_tbl where id_status='".$id_status."' ";
			        // $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
           // 			// while ($data = mysqli_fetch_array($sql)) {
			        // $data = mysqli_fetch_array($sql);

              	 ?>

          <form role="form" action="proses/status_ubah.php?id_status=<?php //echo $data['id_status']; ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">


				<div class="form-group">
                  <input type="hidden" class="form-control" id="id_status" name="id_status" value="<?php //echo $data['id_status'];?>" autocomplete="on" />
                </div>              	
				<div class="form-group">
                  <label for="nm_status">Nama Status</label>
                  <input type="text" class="form-control" id="nm_status" name="nm_status" value="<?php //echo $data['nm_status']; ?>" autocomplete="on" />
                </div>
		<?php //} ?> -->

<!--               </div>
          
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="ubah" value="Simpan">Update</button>
              </div>
          </form>
            </div>
          </div> -->
        <!-- </div> -->



  <section>
</div>

<?php include "pengaturan/footer.php";?>