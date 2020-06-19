<h2>Data Album</h2>
<a href="index.php?page=Input_album">Tambah</a>

<?php

require_once "app/Album.php";

$album = new Album();
$rows = $album->tampil_album();

?>

<table>
	<tr>
		<th>Id</th>
		<th>Nama Album</th>
		<th>Text Album</th>
		<th>Photos Id</th>
		<th>EDIT</th>
		<th>HAPUS</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>	
			<td><?php echo $row['album_id']; ?></td>
			<td><?php echo $row['album_nama']; ?></td>
			<td><?php echo $row['album_text']; ?></td>
			<td><?php echo $row['pothoss_id']; ?></td>
			<td><a href="index.php?page=Edit_album&id=<?php echo $row['album_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=Proses_album&delete-id=<?php echo $row['album_id']; ?>">Hapus</a></td>
		</tr>
	<?php } ?>
</table>