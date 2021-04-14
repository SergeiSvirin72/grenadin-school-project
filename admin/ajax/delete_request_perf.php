<?php
	include ('../db.php');
		mysqli_query($conn, "DELETE FROM request_perf WHERE id=".$_GET['id']."");
	mysqli_close($conn);
?>