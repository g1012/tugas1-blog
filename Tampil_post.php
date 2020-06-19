<h2>Data Post</h2>
<a href="index.php?page=Input_post">Tambah</a>

<?php

require_once "app/Post.php";

$post = new Post();
$rows = $post->tampil_post();

?>

<table>
	<tr>
		<th>Id</th>
		<th>Date Post</th>
		<th>Slug Post</th>
		<th>Litle Post</th>
		<th>Text Post</th>
		<th>Category Id</th>
		<th>EDIT</th>
		<th>HAPUS</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>	
			<td><?php echo $row['post_id']; ?></td>
			<td><?php echo $row['post_date']; ?></td>
			<td><?php echo $row['post_slug']; ?></td>
			<td><?php echo $row['post_litle']; ?></td>
			<td><?php echo $row['post_text']; ?></td>
			<td><?php echo $row['catt_id']; ?></td>
			<td><a href="index.php?page=Edit_post&id=<?php echo $row['post_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=Proses_post&delete-id=<?php echo $row['post_id']; ?>">Hapus</a></td>
		</tr>
	<?php } ?>
</table>