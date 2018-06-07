<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Buku Tamu</title>
</head>
<body>
<h2>Form Mahasiswa</h2>

<br/><br/>
<form action="proses_tambah.php" method="post">
<table>
<tr>
<td>NIM</td>
<td><input type="textfield" name="nim" maxlength="50" size="50" /></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="textfield" name="nama" maxlength="50" size="50"
/></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="textfield" name="alamat" maxlength="100" size="50" /></td>
</tr>
<tr>
<td valign="top">Telepon</td>
<td>
<input type="textfield" name="telepon" maxlength="100" size="50" />
</td>
</tr>

<td>&nbsp</td>
<td><input type="submit" name="kirim" value="Kirim"></td>
</tr>
</table>
</form>
</body>
</html>