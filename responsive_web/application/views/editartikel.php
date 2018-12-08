<!DOCTYPE html>
<html>
<head>
	<title>editartikel_page</title>
</head>
<body>

<table>
		<form method="post" action="../update_artikel_proses" enctype="multipart/form-data">
			<input type="hidden" name="id_artikel" value="<?php echo $artikel['id_artikel'];?>">
			<tr>
				<td>judul</td>
				<td><input type="text" name="judul" value="<?php echo $artikel['judul'];?>"></td>
			</tr>
			<tr>
				<td>isi</td>
				<td><textarea name="isi"><?php echo $artikel['isi'];?></textarea></td>
			</tr>
			<tr>
				<td>penulis</td>
				<td><input type="text" name="penulis" value="<?php echo $artikel['penulis'];?>"></td>
			</tr>
			<tr><td ><input type="submit" class="tombol" value="kirim"><input type="reset" class="tombol" value="reset"></td></tr>
		</form>
	</table>
	<table align="right">
		<form method="post" action="../update_artikel_proses" enctype="multipart/form-data">
			<input type="hidden" name="id_artikel" value="<?php echo $artikel['id_artikel'];?>">
			<tr align="right">
				<td><img src="<?php echo base_url().'images/'.$artikel['gambar'];?>" height="100px" width="100px"></td>
				<td><?php echo $artikel['judul'];?></td>
			</tr>
			<tr>
			</tr>
		</form>
	</table>

</body>
</html>