<?php
	include ('../db.php');
	
	$q = strip_tags(trim($_GET['q']));
	$result = mysqli_query($conn, "SELECT * FROM request_rent WHERE company_name LIKE '$q%'");
	while($row=mysqli_fetch_array($result))
	{
?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><a href="request_rent.php?id=<?php echo $row['id'];?>"><?php echo $row['company_name'];?></a></td>
			<td><a href="print_request_rent.php?id=<?php echo $row['id'];?>" class="btn btn-primary" target="_blank"><i class="fas fa-print"></i></a></td>
			<td><a href="javascript:void(0);" data="<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
		</tr>
<?php
	}

	mysqli_close($conn);
?>	