<?php 
    $title = "Tambah Data Suplier";
    $barang_tambah = "active";
    $title_section = "Data Suplier";
    include "pengaturan/koneksi.php";
    include "pengaturan/header.php";
    include "pengaturan/header-menu.php";
    include "pengaturan/sidebar-menu.php";
?>
<?php 
          $kode_total = "SELECT max(id_suplier) as maxKode from suplier"; // mencari kode barang dengan nilai paling besar
          $eksekusi1 = mysqli_query($koneksi,$kode_total);  // kueri eksekusi di php
          $data = mysqli_fetch_array($eksekusi1);
          $id_merk = $data['maxKode'];
          $id_urut = (int) substr($id_merk, 3, 3);
          $id_urut++;
          $char = "SUP";
          $id_sup = $char . sprintf("%03s", $id_urut);
          mysqli_close($koneksi);
          ?> 
<div class="content-wrapper">
  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tambah Suplier</h3>
      </div>
<!-- FORM TAMBAH DATA BARANG -->
    <form role="form" action="proses/suplier_simpan.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label for="id_suplier">ID Suplier</label>
            <input type="text" class="form-control" maxlenght="12" id="id_suplier" name="id_suplier" autocomplete="on"  value="<?php echo $id_sup; ?>" readonly/>
        </div>

        <div class="form-group">
          <label for="nama_suplier">Nama Suplier</label>
            <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" placeholder="Nama Suplier" autocomplete="on" maxlength="120" />
        </div>

        <div class="form-group">
          <label for="alamat_suplier">Alamat</label>
            <input type="text" class="form-control" id="alamat_suplier" name="alamat_suplier" placeholder="Alamat Suplier" autocomplete="on" maxlength="160" />
        </div>

        <div class="form-group">
          <label for="telepon_suplier">Telepon</label>
            <input type="number" class="form-control" id="telepon_suplier" name="telepon_suplier" placeholder="Telp Suplier" autocomplete="on" maxlength="15" />
        </div>

        <div class="form-group">
          <label for="status">Email</label>
          <input type="email" class="form-control" id="email_suplier" name="email_suplier" placeholder="Email Suplier" autocomplete="on" maxlength="30" />
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save Changes</button>
          <a href="../suplier_ubah.php?id_suplier=<?php echo $id_suplier; ?>" class="btn btn-warning">Back</a>
      </div>
  </form>
</div>

<section>
</div>

<?php include "pengaturan/footer.php";?>