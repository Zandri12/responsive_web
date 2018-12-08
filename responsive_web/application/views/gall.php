<!DOCTYPE html>
<html>
<head>
	<title>gallery file</title>
</head>
<body>
	<h1 align="center">gallery</h1>
	?></p>
	<div align="center">
<table border="2" align="center">
			<tr border="2">
				<td colspan="9" align="center">data utama</td>
			<tr>
				<td align="center">id_gallery</td>
				<td align="center">judul</td>
				<td align="center">keterangan</td>
				<td align="center">gambar</td>

			</tr>
			<?php $No=1;
			foreach ($isigallery as $key) {
			?>
			<tr>

				<td><?php echo $key['id_gallery'];?></td>
				<td><?php echo $key['judul'];?></td>
				<td><?php echo $key['keterangan'];?></td>
				<td><img src="<?php echo base_url().'images/'.$key['gambar'];?>" height="100px" width="100px"></td>
			</tr>
		<?php } ?>

</table>
</div>
</body>
</html>