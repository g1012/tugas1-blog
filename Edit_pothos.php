<?php

include "app/Pothos.php";

$id = $_GET['id'];
$pothos = new Pothos();
$row = $pothos->edit_pothos($id);
?>
<h2>EDIT PHOTOS</h2>
<form method="POST" action="Proses_pothos.php">
	<input type="hidden" name="pothos_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>Date Photos</td>
			<td><input type="date" name="pothos_date" value="<?php echo $row['pothos_date']; ?>"></td>
		</tr>
		<tr>
			<td>Litle Photos</td>
			<td><input type="text" name="pothos_litle" value="<?php echo $row['pothos_litle']; ?>"></td>
		</tr>
		<tr>
			<td>Text Photos</td>
			<td><textarea name="pothos_text"><?php echo $row['pothos_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>Post Id</td>
			<td><input type="number" name="postt_id" value="<?php echo $row['postt_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>