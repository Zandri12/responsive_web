<!DOCTYPE html>
<html>
<head>
	<title>ambil_data</title>
</head>
<body>

<table>
		<form method="post" action="../update_gallery_proses" enctype="multipart/form-data">
			<input type="hidden" name="id_gallery" value="<?php echo $gallery['id_gallery'];?>">
			<tr>
				<td>judul</td>
				<td><input type="text" name="judul" value="<?php echo $gallery['judul'];?>"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><textarea name="keterangan"><?php echo $gallery['keterangan'];?></textarea></td>
			</tr>
			<tr><td ><input type="submit" class="tombol" value="kirim"><input type="reset" class="tombol" value="reset"></td></tr>
		</form>
	</table>
	<table align="right">
		<form method="post" action="../update_gallery_proses" enctype="multipart/form-data">
			<input type="hidden" name="id_gallery" value="<?php echo $gallery['id_gallery'];?>">
			<tr align="right">
				<td><img src="<?php echo base_url().'images/'.$gallery['gambar'];?>" height="100px" width="100px"></td>
				<td><?php echo $gallery['judul'];?></td>
			</tr>
			<tr>
			</tr>
		</form>
	</table>

</body>
</html>