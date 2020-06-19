<?php

include "app/Category.php";

$id = $_GET['id'];
$cat = new Category();
$row = $cat->edit_category($id);
?>
<h2>EDIT CATEGORY</h2>
<form method="POST" action="Proses_category.php">
	<input type="hidden" name="cat_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>Nama Category</td>
			<td><input type="text" name="cat_nama" value="<?php echo $row['cat_nama']; ?>"></td>
		</tr>
		<tr>
			<td>Text Category</td>
			<td><textarea name="cat_text"><?php echo $row['cat_text']; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>