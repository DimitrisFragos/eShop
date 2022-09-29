<?php
	
	$sname= "localhost";
	$unmae= "root";
	$password = "";
	$db_name = "eshopdb";
	
	$conn = new mysqli("localhost","root","","eshopdb");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>