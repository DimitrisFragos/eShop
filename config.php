<?php
	
	$sname= "localhost";
	$unmae= "eShop";
	$password = "Asd123!.";
	$db_name = "eshopdb";
	
	$conn = new mysqli("localhost","eShop",'Asd123!.',"eshopdb");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>