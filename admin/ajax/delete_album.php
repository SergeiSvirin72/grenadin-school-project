<?php
	include ('../db.php');
		mysqli_query($conn, "DELETE FROM media WHERE album=".$_GET['id']."");
		mysqli_query($conn, "DELETE FROM albums WHERE id=".$_GET['id']."");
	mysqli_close($conn);
?>