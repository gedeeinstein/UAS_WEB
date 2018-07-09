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
    <?php include "pengaturan/content-header.php" ?> 
    <section class="content">
     <div id="messages"></div>
     <a href="brg_masuk.php"><button type="submit" name="tambah_data" class="btn btn-primary">Tambah Barang Masuk</button></a> - <a href="transaksi_brg_masuk_print.php"><button  class="btn btn-default">Print</button></a>
	 <br>
	 <br>
        <div class="box">	 
        	<div class="box-header">
                <h3 class="box-title">List Barang Masuk</h3>
            </div>
            <div class="box-body">
               <!-- KONTEN DISINI-->
<table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID Transaksi</th>
                <th>Nama Suplier</th>
                <th>Tgl Transaksi</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Action</th>


              </tr>
              </thead>
              <?php  
              $query ="SELECT * FROM barang_masuk a INNER JOIN suplier b ON a.id_suplier = b.id_suplier";
                $sql = mysqli_query($koneksi,$query);
                while( $data = mysqli_fetch_assoc($sql) ) {
                // while ($data = mysqli_fetch_assoc($sql){
              ?>
              <tbody>
                  <tr role="row" class="odd">
                        <td><?php echo $data["id_masuk"]; ?></td>
                        <td><?php echo $data["nama_suplier"]; ?></td>
                        <td><?php echo $data["tgl_masuk"]; ?> </td>
                        <td><?php echo $data["telepon"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><input type="button" name="id_masuk" id="<?php echo $data["id_masuk"]; ?>" class="btn btn-success view_details" data-toggle="modal" data-target="#modal-details" value="view">
                        <a href="?id_masuk=<?php echo $data["id_masuk"];?>" type="button" class="btn btn-default"><i class="fa fa-trash"></i></a></td>

                        <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Reset Data</button>  
                          <a href="?id_masuk=<?php // echo $data["id_masuk"]; ?>" class="btn btn-success" data-toggle="modal" data-target="#modal-details"><i class="fa fa-list"></i></a> 

  
                        -->
                    </tr>
                    <?php
                        }
                        // mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
            

            </div>
        </div>	
    <section>
</div>

<div class="modal modal-default fade" id="modal-details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Details Barang Masuk <?php echo $data["id_masuk"]; ?></h4>
            </div>
            <div class="modal-body">
            <?php 

            $query_brg_details = "SELECT * FROM detail_masuk a INNER JOIN barang b 
              ON a.id_barang = b.id_barang where a.id_masuk='".$data["id_masuk"]."' order by a.id_barang desc ";
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

            if ($data["id_masuk"] != null) {
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
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-danger" name="delete_all">Delete All</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php include "pengaturan/footer.php";?>