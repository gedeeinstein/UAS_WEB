<?php 
    $title = "Master Data Barang";
    $master = "active menu-open";
    $barang = "active";
    $barang_active="active open";
    $title_section = "Mengelola Barang";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
    <!-- Untuk Menampilkan Breadcum Otomatis Sesuai Isi Halaman -->
    <?php include "pengaturan/content-header.php" ?> 
    <section class="content">
        <?php //include "pengaturan/content-section.php" ?> 
            <div id="messages"></div>
            <a href="barang_tambah.php"><button class="btn btn-primary" data-toggle="modal">Add Barang</button></a>
            <br>
            <br>

    <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Barang</h3>
            </div>
        <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Gambar</th>
                <th>SKU</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Gudang</th>
                <th>Availability</th>
                 <?php //if(in_array('updateProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?> 
                  <th>Action</th>
                <?php //endif; ?>
              </tr>
              </thead>
              <tbody>
                  <tr role="row" class="odd">
                      <td><img src="assets/5b037b484a303.jpg" alt="GENERAL MEAT SLICER GSE 112-50" class="img-circle" width="50" height="50"></td>
                        <td>GENSLIGSE112-50</td>
                        <td>GENERAL MEAT SLICER GSE 112-50</td>
                        <td>12000000</td>
                        <td>495 </td>
                        <td>PT Dapur Inspirasi Nusantara</td>
                        <td><span class="label label-success">Active</span></td>
                        <td><a href="#" class="btn btn-default"><i class="fa fa-pencil"></i></a> <button type="button" class="btn btn-default" onclick="removeFunc(3)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <tr role="row" class="even">
                        <td><img src="assets/5b037982e29b6.jpg" alt="GENERAL MEAT GRINDER GSM 50-50" class="img-circle" width="50" height="50"></td>
                        <td>GENGSM50-50</td>
                        <td>GENERAL MEAT GRINDER GSM 50-50</td>
                        <td>5000000</td><td>95 </td>
                        <td>PT Dapur Inspirasi Nusantara</td>
                        <td><span class="label label-success">Active</span></td>
                        <td><a href="#" class="btn btn-default"><i class="fa fa-pencil"></i></a> <button type="button" class="btn btn-default" onclick="removeFunc(2)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td>
                    </tr>
                </tbody>

            </table>
          </div>
        </div>
    


    <section>

</div>

<?php include "pengaturan/footer.php";?>