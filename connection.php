<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "empresa";

	$mysqli = new mysqli($server, $user, $pass, $bd);
	if ($mysqli->connect_errno) {
		echo "connection failed";
	}else
		echo "";
?>