<?php
	include ('../db.php');
		mysqli_query($conn, "DELETE FROM request_rent WHERE id=".$_GET['id']."");
	mysqli_close($conn);
?>