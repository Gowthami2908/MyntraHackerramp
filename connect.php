<?php

	$servername = 'localhost:3310';
	$user 		= 'root';
	$pass 		= '';
	$db 		= 'insta_db';
	$conn 		= mysqli_connect($servername, $user, $pass, $db);
	
	if(!$conn){
		die("").'<br>';
	}
?>