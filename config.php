<?php
	
	$sname= "software.security";
	$unmae= "eShop";
	$password = "Asd123!.";
	$db_name = "eshopdb";
	
	$conn = new mysqli("software.security","eShop",'Asd123!.',"eshopdb");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>