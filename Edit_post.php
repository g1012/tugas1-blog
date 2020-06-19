<?php

include "app/Post.php";

$id = $_GET['id'];
$post = new Post();
$row = $post->edit_post($id);
?>
<h2>EDIT POST</h2>
<form method="POST" action="Proses_post.php">
	<input type="hidden" name="post_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>Date Post</td>
			<td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
		</tr>
		<tr>
			<td>Slug Post</td>
			<td><input type="text" name="post_slug" value="<?php echo $row['post_slug']; ?>"></td>
		</tr>
		<tr>
			<td>Litle Post</td>
			<td><input type="text" name="post_litle" value="<?php echo $row['post_litle']; ?>"></td>
		</tr>
		<tr>
			<td>Text Post</td>
			<td><textarea name="post_text"><?php echo $row['post_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>Category Id</td>
			<td><input type="number" name="catt_id" value="<?php echo $row['catt_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>