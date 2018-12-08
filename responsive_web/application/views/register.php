<!DOCTYPE html>
<html>
<head>
	<title>register_Form</title>
</head>
<body>
	
<form action="daftar_proses" method="POST">
			<tr>
	<table border="2" align="center">
				<td>username</td>
				<td><input type="text" name="user" placeholder="isi nis anda"></td>
			</tr>
			<tr  >
				<td>Password</td>
				<td><input type="Password" name="password" ></td>
			</tr>
			<tr>
				<td>level</td>
				<td><input type="radio" name="level" value="admin">admin
				<input type="radio" name="level" value="pengunjung" >pengunjung</td>
			</tr>
			<tr>
				<td colspan="2" >
				<input type="submit" value="register" ></td>
			</tr>
		</form>
	</table>
	<div align="center">
	<p>jika udah punya akun<p align="center"><?php echo anchor('login/login2','login'); ?></p></p></div>
</body>
</html>