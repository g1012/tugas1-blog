<h2>TAMBAH ALBUM</h2>
<form method="POST" action="Proses_album.php">
	<table>
		<tr>
			<td>Nama Album</td>
			<td><input type="text" name="album_nama"></td>
		</tr>
		<tr>
			<td>Text Album</td>
			<td><textarea name="album_text"></textarea></td>
		</tr>
		<tr>
			<td>Pothoss Id</td>
			<td><input type="number" name="pothoss_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="Simpan"></td>
		</tr>
	</table>
</form>