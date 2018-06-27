<?php
//Connection for database
include '../pengaturan/koneksi.php';
//Select Database
$sql = "SELECT * FROM kategori";
$result = $koneksi->query($sql);
?>
<!doctype html>
<html>
<body>
<h1 align="center">Employee Details</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>ID</th>
<th>Name</th>
<th>STATUS</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['id_kategori']; ?></td>
 <td><?php echo $row['nm_kategori']; ?></td>
 <td><?php echo $row['status']; ?></td>
 <!--Edit option -->
 <td><a href="edit.php?id_kategori=<?php echo $row['id_kategori']; ?>" alt="edit" >Edit</a></td>
 <!-- Delete Buttion -->
 <td><input type="button" onClick="deleteme(<?php echo $row['id_kategori']; ?>)" name="Delete" value="Delete"></td>
 </tr>
 <!-- Javascript function for deleting data -->
 <script language="javascript">
 function deleteme(delid)
 {
 if(confirm("Do you want Delete!")){
 window.location.href='delete.php?id_kategori=' +delid+'';
 return true;
 }
 } 
 </script>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>