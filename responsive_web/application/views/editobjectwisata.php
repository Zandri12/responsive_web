<!DOCTYPE html>
<html>
<head>
	<title>ambil_data</title>
</head>
<body>

<table>
		<form method="post" action="../update_object_proses" enctype="multipart/form-data">
			<input type="hidden" name="id_objek" value="<?php echo $objeck_wisata['id_objek'];?>">
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $objeck_wisata['nama'];?>"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><textarea name="alamat"><?php echo $objeck_wisata['alamat'];?></textarea></td>
			</tr>
			<tr>
				<td>jam buka</td>
				<td><input type="time" name="jambuka" value="<?php echo $objeck_wisata['jam_buka'];?>"></td>
			</tr>
			<tr>
				<td>jam tutup</td>
				<td><input type="time" name="jamtutup" value="<?php echo $objeck_wisata['jam_tutup'];?>"></td>
			</tr>
			
			<tr>
				<td>keterangan</td>
				<td><textarea name="keterangan"><?php echo $objeck_wisata['keterangan'];?></textarea></td>
			</tr>
			<tr><td ><input type="submit" class="tombol" value="kirim"><input type="reset" class="tombol" value="reset"></td></tr>
		</form>
	</table>
	<table align="right">
		<form method="post" action="../update_object_proses" enctype="multipart/form-data">
			<input type="hidden" name="id_objek" value="<?php echo $objeck_wisata['id_objek'];?>">
			<tr align="right">
				<td><img src="<?php echo base_url().'images/'.$objeck_wisata['gambar'];?>" height="100px" width="100px"></td>
				<td><?php echo $objeck_wisata['nama'];?></td>
			</tr>
			<tr>
			</tr>
		</form>
	</table>

</body>
</html>