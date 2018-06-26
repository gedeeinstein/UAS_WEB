<?php 
    $title = "Data Barang Keluar";
    $master = "active menu-open";
    $barang = "active";
    $barang_active="active open";
    $title_section = "Data Barang Keluar";
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
            <a href="tr_brg_keluar_tambah.php"><button class="btn btn-primary" data-toggle="modal">Tambah Barang Keluar</button></a>
            <br>
            <br>
        <div class="box">    
            <div class="box-header">
                <h3 class="box-title">List Barang Keluar</h3>
            </div>
            <div class="box-body">
               <!-- KONTEN DISINI-->
            

            </div>
        </div>          
    </section>      
</div>

<?php include "pengaturan/footer.php";?>