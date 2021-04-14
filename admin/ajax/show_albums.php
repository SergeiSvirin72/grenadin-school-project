<?php
	include ('../db.php');
	$result = mysqli_query($conn, "SELECT * FROM albums");
	while($row=mysqli_fetch_assoc($result))
	{
		$inner_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM media WHERE album='$row[id]'");
		$inner_row = mysqli_fetch_assoc($inner_result);
	?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><a href="../media.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></td>
			<td><?php echo $inner_row['total'];?></td>
			<td><a href="javascript:void(0);" data="<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
		</tr>
<?php
	}
	mysqli_close($conn);
?>	