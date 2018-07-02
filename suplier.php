<?php 
    $title = "Master Data Suplier";
    $master = "active menu-open";
    $suplier = "active";
    $suplier_active="active open";
    $title_section = "Mengelola Suplier";
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
            <a href="suplier_tambah_frm.php"><button class="btn btn-primary" data-toggle="modal">Add Suplier</button></a>
            <br>
            <br>

    <div class="box">
      <div class="box-header">
		<h3 class="box-title">Data Suplier</h3>
      </div>

    <div class="box-body">
        <table id="manageTable" class="table table-bordered table-striped">
        <thead>
			<tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php 
        
        $query = "SELECT * FROM suplier";
        $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));

        while ($data = mysqli_fetch_assoc($sql)) {
        
    ?>
           <tr role="row" class="odd">
			<td><?php echo $data['nama_suplier']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['telepon']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><a href="suplier_ubah_frm.php?id_suplier=<?php echo $data['id_suplier'];?>" class="btn btn-default"><i class="fa fa-pencil"></i></a> 
 			<a href="proses/suplier_hapus.php?id_suplier=<?php echo $data['id_suplier'];?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
            <!-- <button onclick="myFunction()" class="btn btn-default"><i class="fa fa-trash"></i></button></td> -->
            </td>		  
           </tr>
        </tbody>
        <?php
            }//menutup loping while
            mysqli_close($koneksi);
        ?>
        </table>
    </div>
    </div>
    
    <section>
</div>

<?php include "pengaturan/footer.php";?>