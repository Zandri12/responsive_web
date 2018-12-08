<!DOCTYPE html>
<html>
<head>
	<title>gallery file</title>
	<script type="text/javascript">
		window.alert("hi admin...ini gallerymu");
	</script>
</head>
<body>
	<h1>gallery</h1>
	<p align="center"><?php echo anchor('objectwisata/inigal','tambah_data');
	?></p>
<table border="2" align="center">
			<tr border="2">
				<td colspan="9" align="center">data utama</td>
			<tr>
				<td align="center">id_gallery</td>
				<td align="center">judul</td>
				<td align="center">keterangan</td>
				<td align="center">gambar</td>
				<td align="center" colspan="2">Action</td>

			</tr>
			<?php $No=1;
			foreach ($isigallery as $key) {
			?>
			<tr>

				<td><?php echo $key['id_gallery'];?></td>
				<td><?php echo $key['judul'];?></td>
				<td><?php echo $key['keterangan'];?></td>
				<td><img src="<?php echo base_url().'images/'.$key['gambar'];?>" height="100px" width="100px"></td>
				<td><?php echo anchor('objectwisata/edit_gallery/'.$key['id_gallery'],'EDIT');?></td>
				<td><?php echo anchor('objectwisata/delete_gallery/'.$key['id_gallery'],'HAPUS');?></td>
			</tr>
		<?php } ?>

</table>
</body>
</html>