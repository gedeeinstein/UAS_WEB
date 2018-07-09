<?php 
    $title = "Data Barang Masuk";
    $master = "active menu-open";
    $barang = "active";
    $barang_active="active open";
    $title_section = "Kelola Barang Masuk";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
    <section class="content">
     <div id="messages"></div>

<?php       
	$id = $_GET['id_masuk'];
	$query = "SELECT * FROM detail_masuk WHERE id_masuk= '".$id."'";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);
	// mysqli_close($koneksi);
?> 


<div class="box-body" id="modal-details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" data-dismiss="modal" aria-label="Close" href="transaksi_brg_masuk.php"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title">Details Barang Masuk <?php echo $id; ?></h4>
            </div>
  <div class="modal-body">
            <?php 
            
            // $id_masuk = $data['id_masuk'];

            $query_brg_details = "SELECT * FROM detail_masuk a INNER JOIN barang b ON a.id_barang = b.id_barang where a.id_masuk='".$id."' order by a.id_barang desc ";
            $data1 = mysqli_query($koneksi, $query_brg_details);
            
            ?>

    <table id="manageTable" class="table table-bordered table-striped">
        <thead>
          <tr>
              <th>Nama Barang</th>
              <th>Qty</th>
          </tr>
        </thead>
        <tbody>
            <?php 

            if ($id != null) {
            while ($data_show = mysqli_fetch_array($data1)){
            ?>
            <tr role="row" class="odd">
                <td><?= $data_show['nama_barang']; ?></td>
                <td><?= $data_show['qty']; ?></td>
            </tr>
            <?php 
                    }
                    }
            ?>

        </tbody>
    </table>


  </div>

            <div class="modal-footer">
                <a type="button" href="transaksi_brg_masuk.php" class="btn btn-default pull-left" data-dismiss="modal">Close</a>
                <!-- <button type="button" class="btn btn-danger" name="delete_all">Delete All</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






</section>
</div>
<?php include "pengaturan/footer.php";?>