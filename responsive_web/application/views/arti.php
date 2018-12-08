<!DOCTYPE html>
<html>
<head>
	<title>artikel file</title>
<style type="text/css">
body{
	color: black;
	background-attachment: fixed;
	background-repeat: repeat-x;
	background-size: 100%;
}
table{
	background-color: white;
}
</style>
</head>

<body
style="background-image:url(<?php echo base_url()?>template/images/destination_1.jpg)">>
	<h1 align="center">News</h1>
	<p align="center">
		
<table border="3" align="center" id=artikel>
			<tr>
				<td colspan="9" align="center">data utama</td>
			<tr>
				<td align="center">id_artikel</td>
				<td align="center">judul</td>
				<td align="center">gambar</td>
				<td align="center">isi</td>
				<td align="center">penulis</td>

			</tr>
			<?php $No=1;
			foreach ($isiartikel as $key) {
			?>
			<tr>

				<td align="center"><?php echo $key['id_artikel'];?></td>
				<td align="center"><?php echo $key['judul'];?></td>
				<td align="center"><img src="<?php echo base_url().'images/'.$key['gambar'];?>" height="100px" width="100px"></td>
				<td align="center"><?php echo $key['isi'];?></td>
				<td align="center"><?php echo $key['penulis'];?></td>
			</tr>
		<?php } ?>

</table>
</div>
</p>
</body>
</html>