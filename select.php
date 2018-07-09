<?php  
//select.php  
if(isset($_POST["id_masuk"]))
{
 $output = '';
 require_once ('koneksi.php');

 $query = "SELECT * FROM detail_masuk a INNER JOIN barang b ON a.id_barang = b.id_barang where a.id_masuk= '".$_POST["id_masuk"]."'";
 $result = mysqli_query($koneksi, $query);
//  $output .= '  
//       <div class="table-responsive">  
//            <table class="table table-bordered">';
//     while($row = mysqli_fetch_array($result))
//     {
//      $output .= '
//      <tr>  
//             <td width="30%"><label>Name</label></td>  
//             <td width="70%">'.$row["name"].'</td>  
//         </tr>
//         <tr>  
//             <td width="30%"><label>Address</label></td>  
//             <td width="70%">'.$row["address"].'</td>  
//         </tr>
//      ';
//     }
//     $output .= '</table></div>';
//     echo $output;
}
?>