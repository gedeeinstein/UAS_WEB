  
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Cari">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="dashboard.php">
            <i class="fa fa-calendar"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i> 
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
                <a href="#"><i class="fa fa-dot-circle-o"></i>Merk
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                    <a href="merk.php"><i class="fa fa-circle-o"></i>Daftar Merk</a>
                    </li>
                    <li>
                    <a href="merk_tambah.php"><i class="fa fa-circle-o"></i>Tambah Merk</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-dot-circle-o"></i>Kategori<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="kategori.php"><i class="fa fa-circle-o"></i>Daftar Kategori</a>
                    </li>
                    <li>
                      <a href="kategori_tambah.php"><i class="fa fa-circle-o"></i>Tambah Kategori</a>
                    </li>
                  </ul>            
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-dot-circle-o"></i>Barang
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
              <ul class="treeview-menu">
                <li>
                <a href="barang_master.php"><i class="fa fa-circle-o"></i>Daftar Barang</a>
                </li>
                <li>
                <a href="barang_tambah.php"><i class="fa fa-circle-o"></i>Tambah Barang</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Trasnsaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php //echo $barang_masuk; ?>"><a href="transaksi_brg_masuk.php"><i class="fa fa-cart-plus"></i> Barang Masuk</a></li>
            <li class="<?php //echo $barang_keluar; ?>"><a href="transaksi_brg_keluar.php"><i class="fa fa-cart-arrow-down"></i> Barang Keluar</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>