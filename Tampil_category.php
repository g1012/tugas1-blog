<h2>Data Category</h2>
<a href="index.php?page=Input_category">Tambah</a>

<?php

require_once "app/Category.php";

$category = new Category();
$rows = $category->tampil_category();

?>

<table>
	<tr>
		<th>Id</th>
		<th>Nama Category</th>
		<th>Text Category</th>
		<th>EDIT</th>
		<th>HAPUS</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>	
			<td><?php echo $row['cat_id']; ?></td>
			<td><?php echo $row['cat_nama']; ?></td>
			<td><?php echo $row['cat_text']; ?></td>
			<td><a href="index.php?page=Edit_category&id=<?php echo $row['cat_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=Proses_category&delete-id=<?php echo $row['cat_id']; ?>">Hapus</a></td>
		</tr>
	<?php } ?>
</table>