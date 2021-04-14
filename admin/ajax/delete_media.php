<?php
	include ('../db.php');
		mysqli_query($conn, "DELETE FROM media WHERE id=".$_GET['id']."");
	mysqli_close($conn);
?>