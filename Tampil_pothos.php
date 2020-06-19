<h2>Data Pothos</h2>
<a href="index.php?page=Input_pothos">Tambah</a>

<?php

require_once "app/Pothos.php";

$pothos = new Pothos();
$rows = $pothos->tampil_pothos();

?>

<table>
	<tr>
		<th>Id</th>
		<th>Date photos</th>
		<th>Litle photos</th>
		<th>Text photos</th>
		<th>Post Id</th>
		<th>EDIT</th>
		<th>HAPUS</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>	
			<td><?php echo $row['pothos_id']; ?></td>
			<td><?php echo $row['pothos_date']; ?></td>
			<td><?php echo $row['pothos_litle']; ?></td>
			<td><?php echo $row['pothos_text']; ?></td>
			<td><?php echo $row['postt_id']; ?></td>
			<td><a href="index.php?page=Edit_pothos&id=<?php echo $row['pothos_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=Proses_pothos&delete-id=<?php echo $row['pothos_id']; ?>">Hapus</a></td>
		</tr>
	<?php } ?>
</table>