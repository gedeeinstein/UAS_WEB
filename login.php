  <?php 
$title = "LOGIN";

  include "pengaturan/koneksi.php";
  include "pengaturan/header.php";
  ?>
	<?php

    //apabila tombol login di klik akan menjalankan skript dibawah ini
	if( isset( $_REQUEST['login'] ) ){

        //mendeklarasikan data yang akan dimasukkan ke dalam database
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

        //skript query ke insert data ke dalam database
		$sql = mysqli_query($koneksi, "SELECT id_user, username, nama, level FROM user WHERE username='$username' AND password=MD5('$password')");

        //jika skript query benar maka akan membuat session
		if( $sql){
			list($id_user, $username, $nama, $level) = mysqli_fetch_array($sql);

            //membuat session
            $_SESSION['id_user'] = $id_user;
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $nama;
			$_SESSION['level'] = $level;

			header("Location: home.php");
			die();
		} else {

			$_SESSION['err'] = '<strong>ERROR!</strong> Username dan Password tidak ditemukan.';
			header('Location: login.php');
			die();
		}

    }
    ?>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>SISTO</b> DINTARA</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login Untuk Mengakses Sistem</p>


    <form action="" method="post" role="form">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>

  </div>
 
</div>

<!-- jQuery 3 -->
<!-- Bootstrap 3.3.7 -->
<!-- iCheck -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
