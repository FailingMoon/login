<?php
	$db =mysqli_connect("localhost","root","","world");

	if(!$db){
		echo "Error : ". mysqli_connect_error();
		exit();
	}
?>
