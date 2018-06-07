<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Membuat Mata Kuliah</title>
</head>
<body>
<h2>Form User</h2>

<br/><br/>
<form action="proses_user.php" method="post">
<table>
<tr>
<td>ID</td>
<td><input type="textfield" name="id_user" maxlength="10" size="50" /></td>
</tr>
<tr>
<td>Username</td>
<td><input type="textfield" name="user" maxlength="20" size="50"
/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" maxlength="15" size="50" /></td>
</tr>

<td>&nbsp</td>
<td><input type="submit" name="kirim" value="Kirim"></td>
</tr>
</table>
</form>
</body>
</html>