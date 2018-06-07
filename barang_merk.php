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
            <?php //include "pengaturan/content-section.php" ?> 
            <div id="messages"></div>
            <a href="barang_merk_tambah.php"><button class="btn btn-primary" data-toggle="modal">Add Merk</button></a>
            <br> <br>
        <!-- Memulai Isi L\Konten Merk -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Barang</h3>
            </div>
        <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Brand Name</th>
                <th>Status</th>
                 <?php //if(in_array('updateProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?> 
                  <th>Action</th>
                <?php //endif; ?>
              </tr>
              </thead>
              <tbody>
                  <tr role="row" class="odd">
                        <td>Atmcool</td>
                        <td><span class="label label-success">Active</span></td>
                        <td><a href="#" class="btn btn-default"><i class="fa fa-pencil"></i></a> <button type="button" class="btn btn-default" onclick="removeFunc(3)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <tr role="row" class="even">
                        <td>Suneast</td>
                        <td><span class="label label-success">Active</span></td>
                        <td><a href="#" class="btn btn-default"><i class="fa fa-pencil"></i></a> <button type="button" class="btn btn-default" onclick="removeFunc(2)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td>
                    </tr>
                </tbody>

            </table>
          </div>
    </div>
        <section>
    <!--akhir konten wrapper di div bawah ini  -->
</div>
<?php include "pengaturan/footer.php";?>