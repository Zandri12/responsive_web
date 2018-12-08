<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
	<style type="text/css">
.tombol{
	margin: 0;
	padding: 0;
	background-color: yellow;
	border-radius: 10%
	font-size:100px;
}
	</style>
</head>
<body><h1>formulir tambah data</h1>
	<legend></legend>
	<table>
		<form method="post" action="simpanobjectwisata" enctype="multipart/form-data">
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>jam buka</td>
				<td><input type="time" name="jambuka"></td>
			</tr>
			<tr>
				<td>jam tutup</td>
				<td><input type="time" name="jamtutup"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><textarea name="keterangan"></textarea></td>
			</tr>
			<tr>
				<td>gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr><td ><input type="submit" class="tombol"value="kirim"><input type="reset" class="tombol" value="reset"></td></tr>
		</form>
	</table>

</body>
</html>