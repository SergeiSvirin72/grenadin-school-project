<?php
	include ('../db.php');
	$result = mysqli_query($conn, "SELECT * FROM news LIMIT 18446744073709551610 OFFSET $_GET[offset]");
	$row=mysqli_num_rows($result);
	echo $row;
	mysqli_close($conn);
?>