<?php
	include ('../db.php');
		mysqli_query($conn, "DELETE FROM news WHERE id=".$_GET['id']."");
	mysqli_close($conn);
?>