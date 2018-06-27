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
            <a href="merk_tambah.php"><button class="btn btn-primary" data-toggle="modal">Add Merk</button></a>
            <br> <br>
        <!-- Memulai Isi Konten Merk -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Merk</h3>
            </div>
        <div class="box-body">
        

            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Brand Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
        <?php
            $query = "SELECT * FROM merk /* where status ='active'*/"; // Query untuk menampilkan semua data merk
            $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
            while( $data = mysqli_fetch_assoc($sql) ) {
        
        ?>
                  <tr role="row" class="odd">
                        <td><?php echo $data["nm_merk"]; ?></td>
                        <td><span class="label label-success"><?php echo $data["status"]; ?></span></td>
                        <td><a href="merk_ubah.php?id_merk=<?php echo $data["id_merk"]; ?>" class="btn btn-default"><i class="fa fa-pencil"></i></a> 
                        <a href="proses/merk_hapus.php?id_merk=<?php echo $data["id_merk"];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
    <!--akhir konten wrapper di div bawah ini  -->
</div>
<?php include "pengaturan/footer.php";?>