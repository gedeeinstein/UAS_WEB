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
<div class="box-body">
            <div id="manageTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              <div class="row">
                <div class="col-sm-6">
                  <div class="dataTables_length" id="manageTable_length">
                    <label>Show 
                      <select name="manageTable_length" aria-controls="manageTable" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entries
                    </label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div id="manageTable_filter" class="dataTables_filter">
                    <label>Search:
                      <input type="search" class="form-control input-sm" placeholder="" aria-controls="manageTable">
                    </label>
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
                <td class="sorting_1">UTENSIL</td>
                <td class="">
                  <span class="label label-success">Active</span>
                </td>
                <td class="">
                  <button type="button" class="btn btn-default" onclick="editFunc(5)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> 
                  <button type="button" class="btn btn-default" onclick="removeFunc(5)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr role="row" class="even">
                <td class="sorting_1">UNOX</td>
                <td class=""><span class="label label-success">Active</span></td>
                <td class="">
                  <button type="button" class="btn btn-default" onclick="editFunc(16)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> 
                  <button type="button" class="btn btn-default" onclick="removeFunc(16)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr role="row" class="odd">
                <td class="sorting_1">SPARE PART</td>
                <td class="">
                  <span class="label label-success">Active</span></td>
                  <td class="">
                    <button type="button" class="btn btn-default" onclick="editFunc(7)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> 
                    <button type="button" class="btn btn-default" onclick="removeFunc(7)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr role="row" class="even">
                  <td class="sorting_1">RANGE</td>
                  <td class="">
                    <span class="label label-success">Active</span></td>
                    <td class="">
                      <button type="button" class="btn btn-default" onclick="editFunc(9)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> 
                      <button type="button" class="btn btn-default" onclick="removeFunc(9)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">PLAT</td>
                    <td class="">
                      <span class="label label-success">Active</span>
                    </td><td class=""><button type="button" class="btn btn-default" onclick="editFunc(10)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-default" onclick="removeFunc(10)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td></tr><tr role="row" class="even"><td class="sorting_1">PERLENGKAPAN</td><td class=""><span class="label label-success">Active</span></td><td class=""><button type="button" class="btn btn-default" onclick="editFunc(18)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-default" onclick="removeFunc(18)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td></tr><tr role="row" class="odd"><td class="sorting_1">PERALATAN</td><td class=""><span class="label label-success">Active</span></td><td class=""><button type="button" class="btn btn-default" onclick="editFunc(20)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-default" onclick="removeFunc(20)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td></tr><tr role="row" class="even"><td class="sorting_1">MATERIAL</td><td class=""><span class="label label-success">Active</span></td><td class=""><button type="button" class="btn btn-default" onclick="editFunc(8)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-default" onclick="removeFunc(8)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td></tr><tr role="row" class="odd"><td class="sorting_1">JASA</td><td class=""><span class="label label-success">Active</span></td><td class=""><button type="button" class="btn btn-default" onclick="editFunc(11)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-default" onclick="removeFunc(11)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td></tr><tr role="row" class="even"><td class="sorting_1">GWF</td><td class=""><span class="label label-success">Active</span></td><td class=""><button type="button" class="btn btn-default" onclick="editFunc(12)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-default" onclick="removeFunc(12)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></td></tr></tbody></table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="manageTable_info" role="status" aria-live="polite">Showing 1 to 10 of 17 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="manageTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="manageTable_previous"><a href="#" aria-controls="manageTable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="manageTable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="manageTable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="manageTable_next"><a href="#" aria-controls="manageTable" data-dt-idx="3" tabindex="0">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <section>
</div>

<script type="text/javascript">
var manageTable;

$(document).ready(function() {
  $("#categoryNav").addClass('active');
  
  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    'ajax': 'fetchCategoryData',
    'order': []
  });

  // submit the create from 
  $("#createForm").unbind('submit').on('submit', function() {
    var form = $(this);

    // remove the text-danger
    $(".text-danger").remove();

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(), // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {

        manageTable.ajax.reload(null, false); 

        if(response.success === true) {
          $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
          '</div>');


          // hide the modal
          $("#addModal").modal('hide');

          // reset the form
          $("#createForm")[0].reset();
          $("#createForm .form-group").removeClass('has-error').removeClass('has-success');

        } else {

          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);

              id.closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.length > 0 ? 'has-error' : 'has-success');
              
              id.after(value);

            });
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>');
          }
        }
      }
    }); 

    return false;
  });

});

// edit function
function editFunc(id)
{ 
  $.ajax({
    url: 'fetchCategoryDataById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#edit_category_name").val(response.name);
      $("#edit_active").val(response.active);

      // submit the edit from 
      $("#updateForm").unbind('submit').bind('submit', function() {
        var form = $(this);

        // remove the text-danger
        $(".text-danger").remove();

        $.ajax({
          url: form.attr('action') + '/' + id,
          type: form.attr('method'),
          data: form.serialize(), // /converting the form data into array and sending it to server
          dataType: 'json',
          success:function(response) {

            manageTable.ajax.reload(null, false); 

            if(response.success === true) {
              $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');


              // hide the modal
              $("#editModal").modal('hide');
              // reset the form 
              $("#updateForm .form-group").removeClass('has-error').removeClass('has-success');

            } else {

              if(response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#"+index);

                  id.closest('.form-group')
                  .removeClass('has-error')
                  .removeClass('has-success')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  
                  id.after(value);

                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                '</div>');
              }
            }
          }
        }); 

        return false;
      });

    }
  });
}

// remove functions 
function removeFunc(id)
{
  if(id) {
    $("#removeForm").on('submit', function() {

      var form = $(this);

      // remove the text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { category_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');

            // hide the modal
            $("#removeModal").modal('hide');

          } else {

            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
          }
        }
      }); 

      return false;
    });
  }
}


</script>
<?php include "pengaturan/footer.php";?>