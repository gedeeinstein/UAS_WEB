<?php

//memulai session
    session_start();

    //jika ada session, maka akan diarahkan ke halaman dashboard admin
    if(isset($_SESSION['id_user'])){

        //mengarahkan ke halaman dashboard admin
        header("Location: home.php");
        die();
    } else {
        header("location: login.php");
    }

    //mengincludekan koneksi database
    include "koneksi.php";

?>
