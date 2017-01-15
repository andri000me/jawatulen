<!DOCTYPE html>
<html>

<body>
<h3 align="center">Form Input Barang Vendor</h3>
	<form action="<?php echo base_url();?>menu/prosesinput" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="namabarang" required=""></td>
			</tr>

			<tr>
				<td>Upload Gambar</td>
				<td><input type="file" name="gambar" required=""></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<select name="kategori" required="">
						<option value=""></option>
						<option value="Sewa Mobil">Sewa Mobil</option>
						<option value="Sewa Motor">Sewa Motor</option>
						<option value="Sewa PS">Sewa PS</option>
						<option value="Sewa Camera">Sewa Camera</option>
						<option value="Sewa Laptop">Sewa Laptop</option>
						<option value="Sewa Tratak">Sewa Tratak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand" required=""></td>
			</tr>
			<tr>
				<td>Deskripsi Barang</td>
				<td><textarea name="deskripsibarang" required=""></textarea></td>
			</tr>
			<tr>
				<td>Syarat Sewa</td>
				<td><input type="text" name="syaratsewa" required=""></td>
			</tr>
			<tr>
				<td>Harga Sewa Per Jam</td>
				<td><input type="text" name="hargasewa" required=""></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="<?php echo base_url(); ?>menu/daftarbarang"><input type="submit" value="Simpan"></a></td>
			</tr>
		</table>
	</form>	
</body>
</html>
