$(document).ready(function(){
    $('.delete_employee').click(function(e){
    e.preventDefault();
    var merk_id = $(this).attr('data-merk-id');
    var parent = $(this).parent("td").parent("tr");
    bootbox.dialog({
    message: "Apakah anda yakin akan menghapus Data ini ?",
    title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
    buttons: {
    success: {
    label: "Batal",
    className: "btn-success",
    callback: function() {
    $('.bootbox').modal('hide');
    }
    },
    danger: {
    label: "Hapus!",
    className: "btn-danger",
    callback: function() {
    $.ajax({
    type: 'POST',
    url: 'proses/merk_hapus.php',
    data: 'id_merk='+merk_id
    })
    .done(function(response){
    bootbox.alert(response);
    parent.fadeOut('slow');
    })
    .fail(function(){
    bootbox.alert('Error....');
    })
    }
    }
    }
    });
    });
    });