<?php
	include ('../db.php');
	$result = mysqli_query($conn, "SELECT * FROM media");
	while($row=mysqli_fetch_assoc($result))
	{
		$inner_result = mysqli_query($conn, "SELECT name AS album_name FROM albums WHERE id='$row[album]'");
		$inner_row = mysqli_fetch_assoc($inner_result);
	?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><a href="../images/media/<?php echo $row['path'];?>" target="_blank"><img src="../images/media/<?php echo $row['path'];?>"></a></td>		
			<td><a href="../media.php?id=<?php echo $row['album'];?>"><?php echo $inner_row['album_name'];?></a></td>
			<td><a href="javascript:void(0);" data="<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
		</tr>
<?php
	}
	mysqli_close($conn);
?>	