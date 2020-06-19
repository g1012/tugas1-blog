<h2>TAMBAH POST</h2>
<form method="POST" action="Proses_post.php">
	<table>
		<tr>
			<td>Date Post</td>
			<td><input type="date" name="post_date"></td>
		</tr>
		<tr>
			<td>Slug Post</td>
			<td><input type="text" name="post_slug"></td>
		</tr>
		<tr>
			<td>Litle Post</td>
			<td><input type="text" name="post_litle"></td>
		</tr>
		<tr>
			<td>Text Post</td>
			<td><textarea name="post_text"></textarea></td>
		</tr>
		<tr>
			<td>Category Id</td>
			<td><input type="number" name="catt_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="Simpan"></td>
		</tr>
	</table>
</form>