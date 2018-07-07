<?php 
    $title = "Mengelola Kategori Barang";
    $kategori = "active";
    $title_section = "Kategori Barang";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<div class="content-wrapper">
  <section class="content">
    <div id="messages"></div>
      <!-- <a href="kategori_tambah.php"><button class="btn btn-primary" data-toggle="modal">Add Category</button></a> -->  
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah Kategori</button> 
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Categories</h3>
  </div>
<div class="box-body">
  <div id="manageTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
    <div class="row">
      <div class="col-sm-6">
        
      </div>
      <div class="col-sm-6">
        <div id="manageTable_filter" class="dataTables_filter">
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <table id="manageTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="manageTable_info">
          <thead>
            <tr role="row">
              <th class="sorting_desc" tabindex="0" aria-controls="manageTable" rowspan="1" colspan="1" aria-label="Category Name: activate to sort column ascending" aria-sort="descending">Category Name</th>
              <th class="sorting" tabindex="0" aria-controls="manageTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
              <th class="sorting" tabindex="0" aria-controls="manageTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr role="row" class="odd">
              <?php 
              $query = "SELECT * FROM kategori /* where status ='active'*/"; // Query untuk menampilkan semua data kategori
              $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
              
              while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td class='sorting_1'>".$data['nm_kategori']."</td>";
                    echo "<td class=''><span class='label label-success'>".$data['status']."</td>";
                    echo "<td class=''>
                    <a type='button' class='btn btn-default' href='kategori_ubah.php?id_kategori=".$data['id_kategori']."'><i class='fa fa-pencil'></i></a> 
                    <a type='button' class='btn btn-default' href='proses/kategori_hapus.php?id_kategori=".$data['id_kategori']."'><i class='fa fa-trash'></i></a></td>";
                    echo "</tr>";
                  }
                  // mysqli_close($koneksi);
                  ?>
                    
            </tr>
          </tbody>
        </table>
      </div>
    </div>





</div>
</div>
</div>
</section>
<div class="modal fade" id="modal-default">
        <?php 
          $kode_total = "SELECT max(id_kategori) as maxKode from kategori"; // mencari kode barang dengan nilai paling besar
          $eksekusi1 = mysqli_query($koneksi,$kode_total);  // kueri eksekusi di php
          $data = mysqli_fetch_array($eksekusi1);
          $id_kat = $data['maxKode'];
          $id_urut = (int) substr($id_kat, 3, 3);
          $id_urut++;
          $char = "KTG";
          $id_kat = $char . sprintf("%03s", $id_urut);
          // mysqli_close($koneksi);
      ?> 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="box-title">Add Kategori</h3>
      </div>
    <form role="form" action="proses/kategori_simpan.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
          <label for="id_kategori">ID Kategori</label>
          <input type="text" readonly class="form-control" id="id_kategori" name="id_kategori" value="<?php echo $id_kat; ?>" />
        </div>
      
        <div class="form-group">
          <label for="nm_status">Nama Kategori</label>
          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" autocomplete="on" required/>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" id="status" name="status">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          </select>
        </div>
      </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Save Changes</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog --> 
</div>
</div>
<!-- 
<script>
    $(document).ready(function() {
	   $('#example').DataTable( {
	        "processing": true,
	        "serverSide": true,
	        "ajax": "load-data.php",
	    } );
	} );
	</script> -->
<?php include "pengaturan/footer.php";?>