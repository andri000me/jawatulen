<body>
	<h3 align="center">Daftar Barang</h3>
	
	<table class="table table-striped table-bordered table-hover" align="center" style="margin:20px auto;" border="1";>
		<tr>
			<th width="200">No.</th>
			<th width="50" align="center">Nama Barang</th>
			<th width="200" align="center">Gambar</th>
			<th width="200">Kategori</th>
			<th width="200">Brand</th>
			<th width="200">Deskripsi Barang</th>
			<th width="200">Syarat Sewa</th>
			<th width="200">Harga Sewa Per Jam</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($inputbarang as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u-> namabarang ?></td>
			<td><img src="image/<?php echo $u-> gambar ?>"></td>
			<td><?php echo $u-> kategori ?></td>
			<td><?php echo $u-> brand ?></td>
			<td><?php echo $u-> deskripsibarang ?></td>
			<td><?php echo $u-> syaratsewa ?></td>
			<td><?php echo $u-> hargasewa ?></td>
			<td>
			      <?php echo anchor('menu/edit/'.$u -> idbarang,'Edit'); ?>
                              <?php echo anchor('menu/hapus/'. $u -> idbarang,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>

