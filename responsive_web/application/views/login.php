<!DOCTYPE html>
<html>
<head>
	<title>loginForm</title>
</head>
<body>
	
<form action="login_proses" method="POST">
			<tr>
	<table border="2" align="center">
				<td>username</td>
				<td><input type="text" name="username" placeholder="isi nis anda"></td>
			</tr>
			<tr  >
				<td>Password</td>
				<td><input type="Password" name="password" ></td>
			</tr>
			<tr>
				<td colspan="2" >
				<input type="submit" name="login" value="login" ></td>
			</tr>
		</form>
	</table>
	<p align="center">udah punya akun?</p>
<h3 align="center"><?php echo anchor('login/daftar','register');
	?></h3>
</body>
</html>