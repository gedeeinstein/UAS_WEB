<?php 
    $title = "Ubah Data Suplier";
    $barang_tambah = "active";
    $title_section = "Data Suplier";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<?php 
	$id_suplier = $_GET['id_suplier'];
	$query = "SELECT * FROM suplier where id_suplier = '".$id_suplier."'";
    $sql = mysqli_query($koneksi, $query) or die("database error:". mysqli_error($koneksi));
	$data = mysqli_fetch_array($sql);
    mysqli_close($koneksi);

?> 
<div class="content-wrapper">
  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Ubah Data Suplier</h3>
      </div>
<!-- FORM TAMBAH DATA BARANG -->
    <form role="form" action="proses/suplier_ubah.php?id_suplier=<?php echo $id_suplier; ?>" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label for="id_suplier">ID Suplier</label>
            <input type="text" class="form-control" maxlenght="12" id="id_suplier" name="id_suplier" autocomplete="on"  value="<?php echo $id_suplier; ?>" readonly/>
        </div>

        <div class="form-group">
          <label for="nama_suplier">Nama Suplier</label>
            <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" value="<?php echo $data['nama_suplier'];?>" maxlength="120" />
        </div>

        <div class="form-group">
          <label for="alamat_suplier">Alamat</label>
            <input type="text" class="form-control" id="alamat_suplier" name="alamat_suplier" value="<?php echo $data['alamat'];?>" maxlength="160" />
        </div>

        <div class="form-group">
          <label for="telepon_suplier">Telepon</label>
            <input type="number" class="form-control" id="telepon_suplier" name="telepon_suplier" value="<?php echo $data['telepon'];?>"maxlength="15" />
        </div>

        <div class="form-group">
          <label for="status">Email</label>
          <input type="email" class="form-control" id="email_suplier" name="email_suplier" value="<?php echo $data['email'];?>" maxlength="30" />
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save Changes</button>
          <a href="suplier.php" class="btn btn-warning">Back</a>
      </div>
  </form>
</div>

<section>
</div>

<?php include "pengaturan/footer.php";?>