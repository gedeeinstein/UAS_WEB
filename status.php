<?php 
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
		<div id="messages"></div>
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
        
        $query = "SELECT * FROM status_tbl";
        $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));

        while ($data = mysqli_fetch_array($sql)) {
        
    ?>
           <tr role="row" class="odd">
			<td><?php echo $data['id_status']; ?></td>
			<td><?php echo $data['nm_status']; ?></td>
			<td><a href="status_ubah_frm.php?id_suplier=<?php echo $data['id_suplier'];?>" class="btn btn-default"><i class="fa fa-pencil"></i></a> 
 			<a href="proses/suplier_hapus.php?id_suplier=<?php echo $data['id_suplier'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
            <!-- <button onclick="myFunction()" class="btn btn-default"><i class="fa fa-trash"></i></button></td> -->
            </td>		  
           </tr>

    <?php 
       }
       // mysqli_close($koneksi);
    ?>
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
                <h3 class="box-title">Form Status Barang</h3>
              </div>
          <form role="form" action="status_simpan.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
<!--               	<div class="form-group">
                  <label for="nm_status">ID Status</label>
                  <input type="number" class="form-control" id="id_status" name="id_status" />
                </div> -->

				<div class="form-group">
                  <label for="nm_status">Nama Status</label>
                  <input type="text" class="form-control" id="nm_status" name="nm_status" placeholder="Nama Status" autocomplete="on" />
                </div>

              </div>
          
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="simpan" class="btn btn-primary" value="Simpan">Save changes</button>
              </div>
          </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


<?php 

// if (isset($_POST['simpan'])) {
// 	  $nm_status = $_POST['nm_status'];
// 	  $query = "INSERT INTO status_tbl (nm_status) VALUES ('$nm_status')";
// 	  $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
// 	  // mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
// 	  header('location: status.php');
// }
?>



  <section>
</div>

<?php include "pengaturan/footer.php";?>