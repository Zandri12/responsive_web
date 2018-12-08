<!DOCTYPE html>
<html>
<head>
	<title>admin file</title>
</head>
<body>
	<h1>data admin</h1>
	<p align="center"><?php echo anchor('objectwisata/index','tambah_data');
	?></p>
<table border="2" align="center">
			<tr border="2">
				<td colspan="9" align="center">data utama</td>
			<tr>
				<td align="center">id_object</td>
				<td align="center">nama</td>
				<td align="center">alamat</td>
				<td align="center" colspan="1">jam operasional</td>
				<td align="center">keterangan</td>
				<td align="center">gambar</td>
				<td align="center" colspan="2">Action</td>

			</tr>
			<?php $No=1;
			foreach ($objectwisataadmin as $key) {
			?>
			<tr>

				<td><?php echo $key['id_objek'];?></td>
				<td><?php echo $key['nama'];?></td>
				<td><?php echo $key['alamat'];?></td>
				<td><?php echo $key['jam_buka']."-".$key['jam_tutup'];?></td>
				<td><?php echo $key['keterangan'];?></td>
				<td><img src="<?php echo base_url().'images/'.$key['gambar'];?>" height="100px" width="100px"></td>
				<td><?php echo anchor('objectwisata/editdataobject/'.$key['id_objek'],'EDIT');?></td>
				<td><?php echo anchor('objectwisata/delete_object/'.$key['id_objek'],'HAPUS');?></td>
			</tr>
		<?php } ?>

</table>
</body>
</html>