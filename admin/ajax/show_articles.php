<?php
	include ('../db.php');
	$result = mysqli_query($conn, "SELECT * FROM news");
	while($row=mysqli_fetch_array($result))
	{
		$date = date_create_from_format('Y-m-d', $row['date']);
?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><a href="../article.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></td>
			<td><?php echo date_format(date_create_from_format('Y-m-d', $row['date']), "d.m.Y");?></td>
			<td><a href="edit_article.php?id=<?php echo $row['id'];?>" data="<?php echo $row['id'] ?>" class="btn btn-primary"><i class="fas fa-pen"></i></a></td>
			<td><a href="javascript:void(0);" data="<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
		</tr>
<?php
	}
	mysqli_close($conn);
?>	