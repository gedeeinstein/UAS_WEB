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
     <a href="tr_brg_masuk_tambah.php"><button class="btn btn-primary" data-toggle="modal">Tambah Barang Masuk</button></a>
	 <br>
	 <br>
        <div class="box">	 
        	<div class="box-header">
                <h3 class="box-title">List Barang Masuk</h3>
            </div>
            <div class="box-body">
               <!-- KONTEN DISINI-->
            </div>
        </div>	
    <section>
</div>

<?php include "pengaturan/footer.php";?>