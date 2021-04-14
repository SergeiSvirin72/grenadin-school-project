<?php
	if(!isset($_COOKIE['admin']) || $_COOKIE['admin']!="admin") {
		header( 'Location: auth.php' );
	}
?>