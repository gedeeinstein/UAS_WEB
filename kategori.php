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
    <?php include "pengaturan/content-header.php" ?> 
        <section class="content">
            <?php //include "pengaturan/content-section.php" ?> 
            <div id="messages"></div>
            <a href="barang_kategori_tambah.php"><button class="btn btn-primary" data-toggle="modal">Add Category</button></a>
            <br><br>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Categories</h3>
  </div>


<div class="box-body">
            <div id="manageTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              <div class="row">
                <div class="col-sm-6">
                  <!-- <div class="dataTables_length" id="manageTable_length">
                    <label>Show 
                      <select name="manageTable_length" aria-controls="manageTable" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entries
                    </label>
                  </div> -->
                </div>
                <div class="col-sm-6">
                  <div id="manageTable_filter" class="dataTables_filter">
                    <!-- <label>Search:
                      <input type="search" class="form-control input-sm" placeholder="" aria-controls="manageTable">
                    </label> -->
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

                 $query = "SELECT * FROM kategori"; // Query untuk menampilkan semua data kategori
                 $sql = mysqli_query($koneksi, $query);

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td class='sorting_1'>".$data['nm_kategori']."</td>";
                    echo "<td class=''><span class='label label-success'>".$data['status']."</td>";
                    echo "<td class=''>
                    <a type='button' class='btn btn-default' href='form_ubah.php?id_kategori=".$data['id_kategori']."'><i class='fa fa-pencil'></i></a> 
                    <a type='button' class='btn btn-default' href='proses_hapus.php?id_kategori=".$data['id_kategori']."'><i class='fa fa-trash'></i></a></td>";
                    echo "</tr>";
                  }
                ?>

                <?php
                // $table = "kategori";
                // $primary_key = "id_kategori";
                // $columns = array(
                //   array( 'db' => 'nama_kategory', 'dt' => 0),
                //   array( 'db' => 'status', 'dt' => 1 )
                // );
                // echo json_encode(
                //   SSP::simple( $_GET, $koneksi, $table, $primary_key, $columns )
                // );

                ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info" id="manageTable_info" role="status" aria-live="polite">Showing 1 to 10 of 17 entries</div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="manageTable_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous disabled" id="manageTable_previous">
                      <a href="#" aria-controls="manageTable" data-dt-idx="0" tabindex="0">Previous</a>
                    </li>
                    <li class="paginate_button active">
                      <a href="#" aria-controls="manageTable" data-dt-idx="1" tabindex="0">1</a>
                    </li>
                    <li class="paginate_button ">
                      <a href="#" aria-controls="manageTable" data-dt-idx="2" tabindex="0">2</a></li>
                      <li class="paginate_button next" id="manageTable_next">
                        <a href="#" aria-controls="manageTable" data-dt-idx="3" tabindex="0">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
        </div>
  </div>
  </section>
</div>

<script>
    $(document).ready(function() {
	   $('#example').DataTable( {
	        "processing": true,
	        "serverSide": true,
	        "ajax": "load-data.php",
	    } );
	} );
	</script>
<?php include "pengaturan/footer.php";?>