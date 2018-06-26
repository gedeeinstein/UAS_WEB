            <?php
              if(isset($_POST['submit'])) 
              { 
                  $id = $_POST['id_kategori'];
                  $nama = $_POST['nama_kategori'];
                  $sts = $_POST['status'];
                  
                  $sql = "INSERT INTO kategori (id_kategori,nm_kategori,status) VALUES('$id','$nama','$sts')";
                  mysqli_query($koneksi,$sql);
                  $num=mysqli_affected_rows($koneksi);
                  if ($num > 0){
                  
                  }               
              }
            ?>