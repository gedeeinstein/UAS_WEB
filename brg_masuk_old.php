<?php 
    $title = "Data Barang Master";
    $barang = "active";
    $barang_active="active open";
    $title_section = "Mengelola Barang";
    require_once "pengaturan/koneksi.php";
    require_once "pengaturan/header.php";
    require_once "pengaturan/header-menu.php";
    require_once "pengaturan/sidebar-menu.php";


    $kode_total = "SELECT max(id_masuk) as maxKode from barang_masuk"; // mencari kode barang dengan nilai paling besar
    $eksekusi1 = mysqli_query($koneksi,$kode_total);  // kueri eksekusi di php
    $data = mysqli_fetch_array($eksekusi1);
    $id_bar = $data['maxKode'];
    $id_urut = (int) substr($id_bar, 3, 3);
    $id_urut++;
    $char = "BMS";
    $id_bar = $char . sprintf("%03s", $id_urut);


?>

<div class="content-wrapper">
    <section class="content">
    <div id="messages"></div>
        
    <?php 

    $query_brg_details = "SELECT * FROM detail_masuk a INNER JOIN barang b 
    ON a.id_barang = b.id_barang where a.id_masuk='".$id_bar."' order by a.id_barang desc ";
    // where a.id_masuk='".$id_bar."'*/
    $data1 = mysqli_query($koneksi, $query_brg_details) or die("database error:". mysqli_error($koneksi));

    ?>

    <!-- ISI KONTEN WEB -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Barang Masuk</h3>
    </div>

    <div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="form-group">
                <label>Nama Suplier</label>
                <select class="select2" name="nama_suplier" style="width: 100%;" id="nama_suplier">
                    <?php
                        $query = "SELECT * from suplier";
                        $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                        while($data = mysqli_fetch_array($sql)){;
                    ?>
                            <option value="<?= $data['id_suplier']; ?>"><?= $data['nama_suplier'];?></option>
                    <?php   
                         } 
                    ?>

                </select>
                </div>
            </div>

            <div class="form-group">
                <label>Tanggal Masuk</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <!-- <input type="text" class="form-control pull-right" id="datepicker"> -->
                     <input type="text" class="form-control pull-right" id="datepicker" name="tgl_masuk">
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Total Barang Masuk</label>
                <div class="input-group date">
                    <?php 

                    $query_tot = ("SELECT sum(qty) FROM detail_masuk where id_masuk = '".$id_bar."'");
                    $sql_tot = mysqli_query($koneksi, $query_tot);

                    while ($tot_qty = mysqli_fetch_array($sql_tot)) {
                    ?>

                    <div class="input-group-addon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <input type="number" class="form-control pull-right" value="<?php echo $tot_qty['sum(qty)'];?>" readonly id="total_qty" name="total_qty">
                    <?php } ?>
                </div>
            </div>

            <div class="form-group">
                <label>ID MASUK</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="id_brg_masuk" name="id_brg_masuk" value="<?php echo $id_bar; ?>" readonly>
                </div>
            </div>

        </div>
    </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Pilih Barang</button> 
<button type="submit" class="btn btn-success" name="save_all" id="save_all">Simpan</button>  <!-- data-toggle="modal" data-target="#modal-simpan" -->  
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Reset Data</button> 


<hr />

    <table id="manageTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 

            if ($id_bar != null) {
                    while ($data_show = mysqli_fetch_assoc($data1)){
                

            ?>
                    <tr role="row" class="odd">
                        <td><?= $data_show['nama_barang']; ?></td>
                        <td><?= $data_show['qty']; ?></td>
                        <td><a href="#" class="btn btn-default"><i class="fa fa-pencil"></i></a> <button type="button" class="btn btn-default" onclick="removeFunc(3)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td>
                    </tr>
            <?php 
                    }
                    }
            ?>

        </tbody>
    </table>
    </div> <!-- Div Close Body -->

    </div> <!-- Class Box -->   
    </section>
</div> <!-- Content Wrapper -->


<!-- MODAL BARANG MASUK -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="box-title">Tambah Barang</h3>
      </div>
      <form role="form" action="proses/brg_masuk_proses.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
                <input type="hidden" class="form-control pull-right" id="id_brg_masuk" name="id_brg_masuk" value="<?php echo $id_bar; ?>" readonly>
                <label>Nama Barang</label>
                <select class="form-control select2" name="id_barang" style="width: 100%;">
                    <?php
                        $query = "SELECT * from barang";
                        $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                        while($data = mysqli_fetch_array($sql)){;
                    ?>
                        <option value="<?= $data['id_barang']; ?>"><?= $data['nama_barang'];?></option>
                    <?php   
                        } 
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nm_status">QTY</label>
                <input type="number" class="form-control" id="nm_status" name="qty_brg" placeholder="Qty" autocomplete="on" required/>
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


<div class="modal modal-default fade" id="modal-simpan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Simpan Data Masuk</h4>
            </div>
        <form role="form" action="proses/brg_masuk_proses.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <p>Simpan Semua Data barang Masuk ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="save_all" name="save_all">Simpan</button>
            </div>
        </form>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal modal-default fade" id="modal-hapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Simpan Data</h4>
            </div>
            <div class="modal-body">
                <p>Hapus Semua Inputan Data Barang Masuk ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" name="delete_all">Delete All</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include "pengaturan/footer.php";?>

<script>
$(document).ready(function(){
$('.select2').select2()
$('#datepicker').datepicker({
    autoclose: true
})
});

</script>
<script>
    $(document).ready(function(){
    $('#insert_form').on("submit", function(event){  
    event.preventDefault();  
      if($('#nama_suplier').val() == "")  
      {  
       alert("Nama Suplier Dibutuhkan");  
      }  
      else if($('#id_brg_masuk').val() == '')  
      {  
       alert("ID Barang Masuk Dibutuhkani");  
      }  
      else if($('#datepicker').val() == '')
      {  
       alert("Tanggal Barang Masuk dibutuhkan");  
      }
      else if($('#total_qty').val() == '')
      {  
       alert("Total Barang Kosoong");  
      }
       
      else  
      {  
       $.ajax({  
        url:"proses/brg_masuk.php",  
        method:"POST",  
        data:$('#insert_form').serialize(),  
        success: function() {
                    $('#messages').load("transaksi_brg_masuk.php");
        }
        // success:function(data){  
        //  $('#insert_form')[0].reset();  
        //  // $('#add_data_Modal').modal('hide');  
        //  // $('#employee_table').html(data);  
        // }  
   });  
  }  
 });

});  

</script>

<!-- <script>
$(document).ready(function() {
$("#save_all").click(function() {
var nama_suplier = $("#nama_suplier").val();
var id_brg_masuk = $("#id_brg_masuk").val();
var tgl_masuk = $("tgl_masuk").val();
var total_qty = $("#total_qty").val();
// var save_all = $("#save_all").val();
//var msg = $("#message").val();
if (nama_suplier == '' || id_brg_masuk == '' || tgl_masuk == '' || total_qty == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("proses/brg_masuk_proses.php", {
nama_suplier1: nama_suplier,
id_brg_masuk1: id_brg_masuk,
tgl_masuk1: tgl_masuk,
total_qty1: total_qty,
// save_all1: save_all,
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});

</script> -->


