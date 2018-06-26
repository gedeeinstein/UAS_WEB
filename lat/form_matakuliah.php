<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Mata Kuliah</title>
</head>
<body>
<h2>Form Mata Kuliah</h2>

<br/><br/>
<form action="proses_matakuliah.php" method="post">
<table>
<tr>
<td>Kode Mata Kuliah</td>
<td><input type="textfield" name="kode_mk" maxlength="50" size="50" /></td>
</tr>
<tr>
<td>Nama Mata Kuliah</td>
<td><input type="textfield" name="nama_mk" maxlength="50" size="50"
/></td>
</tr>
<tr>
<td>SKS</td>
<td><input type="textfield" name="sks" maxlength="100" size="50" /></td>
</tr>
<tr>
<td valign="top">Semester</td>
<td>
<input type="textfield" name="semester" maxlength="100" size="50" />
</td>
</tr>

<td>&nbsp</td>
<td><input type="submit" name="kirim" value="Kirim"></td>
</tr>
</table>
</form>
</body>
</html>