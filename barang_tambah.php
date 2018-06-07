<?php 
    $title = "Tambah Data Barang";
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
            <?php //include "pengaturan/content-section.php" ?> 
            
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Form Tambah Barang</h3>
            </div>
            <!-- FORM TAMBAH DATA BARANG -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="product_image">Image</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="product_image" name="product_image" type="file">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="product_name">Nama Produk</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="nama produk" autocomplete="on"/>
                </div>

                <div class="form-group">
                  <label for="sku">SKU</label>
                  <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter sku" autocomplete="on" />
                </div>

                <div class="form-group">
                  <label for="price">Harga</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="harga" autocomplete="on" />
                </div>

                <div class="form-group">
                  <label for="qty">Qty</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty" autocomplete="on" />
                </div>

                <div class="form-group">
                  <label for="description">Deskripsi Produk</label>
                  <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description" autocomplete="off"></textarea>
                <script>CKEDITOR.replace('description');</script>
                </div>

                <!-- <?php //if($attributes): ?>
                  <?php //foreach ($attributes as $k => $v): ?>
                  <label for="description">Tag Gambar</label>
                    <div class="form-group">
                      <label for="groups"><?php //echo $v['attribute_data']['name'] ?></label>
                      <select class="form-control select_group" id="attributes_value_id" name="attributes_value_id[]" multiple="multiple">
                        <?php //foreach ($v['attribute_value'] as $k2 => $v2): ?>
                          <option value="<?php //echo $v2['id'] ?>"><?php //echo $v2['value'] ?></option>
                        <?php //endforeach ?>
                      </select>
                    </div>    
                  <?php //endforeach ?>
                <?php //endif; ?> -->

                <div class="form-group">
                  <label for="brands">Merek</label>
                  <select class="form-control select_group" id="brands" name="brands[]"> <!--multiple="multiple" -->
                    <?php //foreach ($brands as $k => $v): ?>
                        <option value="1">Suneast</option>
                        <option value="2">Atmcool</option>
                        <option value="3">Unox</option>
                        <option value="<?php //echo $v['id'] ?>"><?php //echo $v['name'] ?></option>
                    <?php //endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="category">Kategory</label>
                  <select class="form-control select_group" id="category" name="category[]">
                    <option value="1">Equipment</option>
                    <option value="2">Utensil</option>
                    <option value="3">Custom</option>
                    <?php //endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store">Store</label>
                  <select class="form-control select_group" id="store" name="store">
                    <?php //foreach ($stores as $k => $v): ?>
                      <!-- <option value="<?php //echo $v['id'] ?>"><?php //echo $v['name'] ?></option> -->
                    <option value="1">Sunset Road 168</option>
                    <option value="2">PT. Dapur Inspirasi Nusantara</option>
                    <?php //endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store">Availability</label>
                  <select class="form-control" id="availability" name="availability">
                    <option value="1">Ada</option>
                    <option value="2">Tidak Ada</option>
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
<?php include "pengaturan/footer.php";?>