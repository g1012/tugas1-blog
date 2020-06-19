<?php

include "app/Album.php";

$id = $_GET['id'];
$album = new Album();
$row = $album->edit_album($id);
?>
<h2>EDIT ALBUM</h2>
<form method="POST" action="Proses_album.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>Nama Category</td>
			<td><input type="text" name="album_nama" value="<?php echo $row['album_nama']; ?>"></td>
		</tr>
		<tr>
			<td>Text Category</td>
			<td><textarea name="album_text"><?php echo $row['album_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>Pothos Id</td>
			<td><input type="number" name="pothoss_id" value="<?php echo $row['pothoss_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>