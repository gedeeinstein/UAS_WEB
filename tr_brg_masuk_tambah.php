  
<!DOCTYPE html>
<?php 
    $title = "Tambah Barang Masuk";
    $master = "active menu-open";
    $barang = "active";
    $barang_active="active open";
    $title_section = "Tambah Barang Masuk";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";

    $kode_total = "SELECT max(id_masuk) as maxKode from barang_masuk"; // mencari kode barang dengan nilai paling besar
          $eksekusi1 = mysqli_query($koneksi,$kode_total);  // kueri eksekusi di php
          $data = mysqli_fetch_array($eksekusi1);
          $id_bar = $data['maxKode'];
          $id_urut = (int) substr($id_bar, 3, 3);
          $id_urut++;
          $char = "BMS";
          $id_bar = $char . sprintf("%03s", $id_urut);
          //mysqli_close($koneksi);
          ?>
          
?>
<html>
<head> 
      <title>detail transaksi masuk</title>  
    <link rel="stylesheet" href="assets/baru/jquery-ui.css">
    <link rel="stylesheet" href="assets/baru/bootstrap.min.css">
    <script src="assets/baru/jquery-1.12.4.js"></script>
    <script src="assets/baru/jquery-ui.js"></script>
    <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    <!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
</head>  
    <body>  
      <div class="content-wrapper">
    <!-- Untuk Menampilkan Breadcum Otomatis Sesuai Isi Halaman -->
    <?php include "pengaturan/content-header.php" ?> 
    <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>
        <div class="box">
        <form method="post" id="detail_barang_masuk" class="form-horizontal">
           <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-12 control-label">Date: <?php echo date('Y-m-d') ?></label>
                </div>
                <div class="form-group">
                  <label class="col-sm-12 control-label">Date: <?php echo date('h:m a') ?></label>
                </div>
                  <div class="col-md-4 col-xs-12 pull pull-left">
                  <div class="form-group">
                    <label class="col-sm-5 control-label" style="text-align:left;">ID Masuk</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" id="id_masuk" name="id_masuk" placeholder="id masuk" autocomplete="on" value="<?php echo $id_bar; ?>" readonly/> 
                  <!-- Menggunakan Kode Otomatis Barang -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5 control-label" style="text-align:left;">Supplyer</label>
                    <div class="col-sm-7">
                     <select class="form-control select2" name="supplier" style="width:100%;" required>
                            <?php //Menampilkan Data Merk Pada Drop Down
                            $query = "SELECT * FROM suplier";
                            $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                            while( $data = mysqli_fetch_array($sql) ) { 
                            ?>
                              <option selected="selected" value="<?php echo $data["id_suplier"]; ?>"><?php echo $data["nama_suplier"]; ?></option>
                            <?php 
                            }
                            //mysqli_close($koneksi);
                            ?>
                      </select>
                    </div>
                    </div>
                    </div> 
                        <div class="table-responsive">
                         <table class="table table-striped table-bordered" id="tambah_data">
                          <tr>
                            <th style="width:80%">Product</th>
                            <th style="width:20%">Qty</th>
                            <th colspan="2"><button type="button" name="add" id="add" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                          </tr>
                         </table>
                        </div>
                        <div class="col-md-6 col-xs-12 pull pull-right">
                        <div class="form-group">
                            <label for="net_amount" class="col-sm-5 control-label">Total QTY</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off">
                              <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
                            </div>
                          </div>
                        </div>
                        
                       </form>
                       <div class="box-footer">
                          <button type="submit" name="insert" id="insert" class="btn btn-primary">SIMPAN</button>
                          <a href="transaksi_brg_masuk.php" class="btn btn-warning">Back</a>
                        </div>
                </div>

  <div id="table_input" title="Tambah Data">
   <div class="form-group">
    <label>Nama Barang</label>
    <select class="form-control select2" name="nama_barang" id="nama_barang" style="width:100%;">
                            <?php //Menampilkan Data Merk Pada Drop Down
                            $query = "SELECT * FROM barang";
                            $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
                            while( $data2 = mysqli_fetch_array($sql) ) { 
                            ?>
                              <option selected="selected" value="<?php echo $data2["id_barang"]; ?>"><?php echo $data2["nama_barang"]; ?></option>
                            <?php 
                            }
                            //mysqli_close($koneksi);
                            ?>
    </select>
    <span id="error_nama_barang" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>QTY</label>
    <input type="text" name="qty" id="qty" class="form-control" />
    <span id="error_qty" class="text-danger"></span>
   </div>
   <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-info">Save</button>
   </div>
  </div>
  <div id="action_alert" title="Action">
  </div>
</form>
</div>
</div>
</div>
</section>
</div>
    </body>  
</html> 

<script>  
$(document).ready(function(){
$('.select2').select2() 
 
 var count = 0;

 $('#table_input').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#table_input').dialog('option', 'title', 'Tambah Data');
  $('#nama_barang').val('');
  $('#qty').val('');
  $('#error_nama_barang').text('');
  $('#error_qty').text('');
  $('#nama_barang').css('border-color', '');
  $('#qty').css('border-color', '');
  $('#save').text('Save');
  $('#table_input').dialog('open');
 });
$('#save').click(function(){
    var error_nama_barang = '';
    var error_qty = '';
    var nama_barang = '';
    var qty = ''; 
    if($('#nama_barang').val() == '')
    {
      error_nama_barang = 'data required';
      $('#error_nama_barang').text(error_nama_barang);
      $('#nama_barang').css('border-color', '#cc0000');
      nama_barang = '';
    }
    else
    {
      error_nama_barang = '';
      $('#error_nama_barang').text(error_nama_barang);
      $('#nama_barang').css('border-color', '');
      nama_barang = $('#nama_barang').val();
    }
    if($('#qty').val() == '')
    {
      error_qty = 'data required';
      $('#error_qty').text(error_qty);
      $('#qty').css('border-color', '#cc0000');
      qty = '';
    }
    else
    {
      error_qty = '';
      $('#error_qty').text(error_qty);
      $('#qty').css('border-color', '');
      qty = $('#qty').val();
    }
    if(error_nama_barang != '' || error_qty != '')
    {
      return false;
    }
    else
    {
      if($('#save').text() == 'Save')
      {
        count = count + 1;
        output = '<tr id="row_'+count+'">';
        output += '<td>'+nama_barang+' <input type="hidden" name="hidden_nama_barang[]" id="nama_barang'+count+'" class="nama_barang" value="'+nama_barang+'" /></td>';
        output += '<td>'+qty+' <input type="hidden" name="hidden_qty[]" id="qty'+count+'" value="'+qty+'" /></td>';
        output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
        output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
        output += '</tr>';
        $('#tambah_data').append(output);
      }
      else
      {
        var row_id = $('#hidden_row_id').val();
        output = '<td>'+nama_barang+' <input type="hidden" name="hidden_nama_barang[]" id="nama_barang'+row_id+'" class="nama_barang" value="'+nama_barang+'" /></td>';
        output += '<td>'+qty+' <input type="hidden" name="hidden_qty[]" id="qty'+row_id+'" value="'+qty+'" /></td>';
        output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
        output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
        $('#row_'+row_id+'').html(output);
      }

      $('#tambah_data').dialog('close');
    }
  });

  $(document).on('click', '.view_details', function(){
    var row_id = $(this).attr("id");
    //var id_masuk = $('#id_masuk'+row_id+'').val();
    var nama_barang = $('#nama_barang'+row_id+'').val();
    var qty = $('#qty'+row_id+'').val();
    //$('#id_masuk').val(id_masuk);
    $('#nama_barang').val(nama_barang);
    $('#qty').val(qty);
    $('#save').text('Edit');
    $('#hidden_row_id').val(row_id);
    $('#tambah_data').dialog('option', 'title', 'Edit Data');
    $('#tambah_data').dialog('open');
  });

  $(document).on('click', '.remove_details', function(){
    var row_id = $(this).attr("id");
    if(confirm("Yakin ingin hapus data?"))
    {
      $('#row_'+row_id+'').remove();
    }
    else
    {
      return false;
    }
  });

  $('#action_alert').dialog({
    autoOpen:false
  });

  $('#detail_barang_masuk').on('submit', function(event){
    event.preventDefault();
    var count_data = 0;
    $('.nama_barang').each(function(){
      count_data = count_data + 1;
    });
    if(count_data > 0)
    {
      var form_data = $(this).serialize();
      $.ajax({
        url:"tr_barang_tambah2.php",
        method:"POST",
        data:form_data,
        success:function(data)
        {
          $('#detail_barang_masuk').find("tr:gt(0)").remove(); alert('Berhasil Tambah Data');document.location='transaksi_brg_masuk.php'; 
          $('#action_alert').dialog('open');
        }
      })
    }
    else
    {
      $('#action_alert').html('<p>Please Add atleast one data</p>');
      $('#action_alert').dialog('open');
    }
  });
  
});  
</script>