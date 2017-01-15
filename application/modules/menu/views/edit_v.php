<!DOCTYPE html>
<html>

<body>
	<h3 align="center">Edit Data</h3>
	
	<?php foreach($edit as $u){ ?>
	<form action="<?php echo base_url(). 'menu/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Barang</td>
				<td>
					<input type="hidden" name="idbarang" value="<?php echo $u->idbarang ?>">
					<input type="text" name="namabarang" value="<?php echo $u->namabarang ?>">
				</td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><input type="file" name="nim" value="<?php echo $u->gambar ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<?php
						$option = array(
							'Sewa Mobil' => 'Sewa Mobil',
							'Sewa Motor' => 'Sewa Motor',
							'Sewa PS' => 'Sewa PS',
							'Sewa Camera' => 'Sewa Camera',
							'Sewa Laptop' => 'Sewa Laptop',
							'Sewa Tratak' => 'Sewa Tratak',
							);
							
							echo form_dropdown('kategori', $option, $u->kategori);
						?>

					
				</td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand" value="<?php echo $u->brand ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi Barang</td>
				<td><input type="text" name="deskripsibarang" value="<?php echo $u->deskripsibarang ?>"></td>
			</tr>
			<tr>
				<td>Syarat Sewa</td>
				<td><input type="text" name="syaratsewa" value="<?php echo $u->syaratsewa ?>"></td>
			</tr>
			<tr>
				<td>Harga Sewa Per Jam</td>
				<td><input type="text" name="hargasewa" value="<?php echo $u->hargasewa ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="<?php echo base_url(); ?>menu/daftarbarang"><input type="submit" value="Simpan"></a></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>