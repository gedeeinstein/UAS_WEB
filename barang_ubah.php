<?php 
    $title = "Ubah Data Barang " ;
    $barang_tambah = "active";
    $title_section = "Tambah Barang";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
    <?php include "pengaturan/content-header.php" ?> 
        <section class="content">
            <?php 
            $id_brg = $_GET['id_barang'];
            //SELECT a.id_barang, a.gambar, a.sku, a.nama_barang, b.nm_kategori, c.nm_merk, d.nama_gudang, a.stok, a.deskripsi, e.nm_status STATUS FROM barang a INNER JOIN kategori b ON a.id_kategori = b.id_kategori INNER JOIN merk c ON a.id_merk = c.id_merk INNER JOIN gudang d ON a.id_gudang = d.id_gudang INNER JOIN status_tbl e ON a.status = e.id_status

            $query = "SELECT * FROM barang a
            INNER JOIN kategori b
            ON a.id_kategori = b.id_kategori
            INNER JOIN merk c
            ON a.id_merk = c.id_merk
            INNER JOIN gudang d
            ON a.id_gudang = d.id_gudang
            INNER JOIN status_tbl e
            ON a.status = e.id_status
            WHERE a.id_barang='".$id_brg."'";
            $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
            $data = mysqli_fetch_array($sql);
           
            ?> 
            
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ubah Barang <?php echo $data['nama_barang'];?></h3>
            </div>
            <!-- FORM TAMBAH DATA BARANG -->


            <form role="form" action="proses/barang_ubah.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  <label>Image Preview: </label>
                  <img src="assets/images/<?php echo $data['gambar'];?>" width="50%" height="50% " class="img-circle">
                </div>
                <div class="form-group">
                  <label for="product_image">Update Gambar</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="product_image" name="product_image" type="file">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="product_name">Nama Produk</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="nama produk" autocomplete="on" value="<?php echo $data['nama_barang'];?>"/>
                </div>

                <div class="form-group">
                  <label for="sku">SKU</label>
                  <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter sku" autocomplete="on" value="<?php echo $data['sku'];?>" />
                </div>

                <div class="form-group">
                  <label for="qty">Qty</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty" autocomplete="on" value="<?php echo $data['stok'];?>" />
                </div>

                <div class="form-group">
                  <label for="description">Deskripsi Produk</label>
                  
                  <textarea type="text" class="ckeditor" id="deskripsi" name="deskripsi">
                  <?php 
                    $query = "SELECT * FROM barang where id_barang='".$id_brg."'";
                    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                    $data2 = mysqli_fetch_assoc($sql)
                    //$desc_brg = $data2['deskripsi'];
                  ?>
                  <?= $data2['deskripsi'];?>
                  </textarea>
                </div>

        <div class="form-group">
            <label for="brands">Merek</label>
            <select class="form-control select_group" id="brands" name="brands">
            <!-- <option value="<?php //echo $data['id_merk']; ?>" selected><?php //echo $data['nm_merk']; ?></option> -->

            <?php //Menampilkan Data Merk Pada Drop Down
                $query = "SELECT * FROM merk";
                $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                while( $data2 = mysqli_fetch_assoc($sql) ) {
            ?>
                <option value="<?php echo $data2["id_merk"];?>"<?php if($data2['id_merk'] == $data['id_merk']) echo 'selected';?>><?php echo $data2["nm_merk"]; ?></option>
            <?php 
                }  
            ?>
            </select>
        </div>


        <div class="form-group">
            <label for="category">Kategory</label>
            <select class="form-control select_group" id="category" name="category" >
            <?php //Menampilkan Data Merk Pada Drop Down
                $query = "SELECT * FROM kategori";
                $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                while( $data2 = mysqli_fetch_assoc($sql)) {
            ?>
                <option value="<?php echo $data2["id_kategori"];?>"<?php if($data2['id_kategori'] == $data['id_kategori']) echo 'selected';?>><?php echo $data2["nm_kategori"]; ?></option>
            <?php 
                }  
            ?>
            </select>
        </div>


        <div class="form-group">
            <label for="store">Store</label>
            <select class="form-control select_group" id="store" name="store">
                <?php //Menampilkan Data Merk Pada Drop Down
                    $query = "SELECT * FROM gudang";
                    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                    while( $data2 = mysqli_fetch_assoc($sql)) {
                ?>
                    <option value="<?php echo $data2["id_gudang"];?>"<?php if($data2['id_gudang'] == $data['id_gudang']) echo 'selected';?>><?php echo $data2["nama_gudang"]; ?></option>
                <?php 
                    }  
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="store">Ketersediaan</label>
             <select class="form-control" id="availability" name="availability">
                 <?php //Menampilkan Data Merk Pada Drop Down
                    $query = "SELECT * FROM status_tbl";
                    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                    while( $data2 = mysqli_fetch_assoc($sql)) {
                 ?>
                    <option value="<?php echo $data2["id_status"];?>"<?php if($data2['id_status'] == $data['id_status']) echo 'selected';?>><?php echo $data2["nm_status"]; ?></option>
                 <?php 
                    }  
                 ?>
             </select>
        </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="barang_master.php" class="btn btn-warning">Back</a>
              </div>
            </form>
        </div>
    <section>
</div>

<!-- <script>CKEDITOR.replace('description');</script> -->



<?php include "pengaturan/footer.php";?>