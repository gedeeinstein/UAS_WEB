<?php 
    $title = "Master Data Suplier";
    $master = "active menu-open";
    $suplier = "active";
    $suplier_active="active open";
    $title_section = "Mengelola Suplier";
    include "pengaturan/koneksi.php";
    // include "proses/status_simpan.php"; for status INDEX.PHP
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
	<section class="content">
		<div id="messages"></div>
		<a href="status_tambah_frm.php"><button class="btn btn-primary" data-toggle="modal">Add Data Status</button></a><br><br>
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

        while ($data = mysqli_fetch_assoc($sql)) {
        
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
       mysqli_close($koneksi);
    ?>
         </tbody>
        </table>
      </div>
    </div>
  <section>
</div>

<?php include "pengaturan/footer.php";?>