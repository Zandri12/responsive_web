<!DOCTYPE html>
<html>
<head>
	<title>artikel file</title>
	<script type="text/javascript">
		window.alert("hi admin...selamat datang di artikelmu");
	</script>
</head>
<body>
	<h1>keterangan_lebih_lanjut</h1>
	<p align="center"><?php echo anchor('objectwisata/iniart','tambah_data');
	?></p>
<table border="2" align="center">
			<tr border="2">
				<td colspan="9" align="center">data utama</td>
			<tr>
				<td align="center">id_artikel</td>
				<td align="center">judul</td>
				<td align="center">gambar</td>
				<td align="center">isi</td>
				<td align="center">penulis</td>
				
				<td align="center" colspan="2">Action</td>

			</tr>
			<?php $No=1;
			foreach ($isiartikel as $key) {
			?>
			<tr>

				<td><?php echo $key['id_artikel'];?></td>
				<td><?php echo $key['judul'];?></td>
				<td><img src="<?php echo base_url().'images/'.$key['gambar'];?>" height="100px" width="100px"></td>
				<td><?php echo $key['isi'];?></td>
				<td><?php echo $key['penulis'];?></td>
				<td><?php echo anchor('objectwisata/edit_artikel/'.$key['id_artikel'],'EDIT');?></td>
				<td><?php echo anchor('objectwisata/delete_artikel/'.$key['id_artikel'],'HAPUS');?></td>
			</tr>
		<?php } ?>

</table>
</body>
</html>