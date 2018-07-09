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
                        <td>
                        <a href="brg_details.php?id_masuk=<?php echo $data["id_masuk"]; ?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-list"></i></a> 

                        <a href="?id_masuk=<?php echo $data["id_masuk"];?>" type="button" class="btn btn-default"><i class="fa fa-trash"></i></a></td>

                        <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Reset Data</button>  
                          <a href="?id_masuk=<?php // echo $data["id_masuk"]; ?>" class="btn btn-success" data-toggle="modal" data-target="#modal-details"><i class="fa fa-list"></i></a> 

                          <input type="submit" name="id_masuk" id="<?php// echo $data["id_masuk"]; ?>" class="btn btn-success view_details" data-toggle="modal" data-target="#modal-details" value="view">
        
    
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
<?php include "pengaturan/footer.php";?>
