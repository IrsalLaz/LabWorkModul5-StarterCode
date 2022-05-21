<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="modul5";
	//buat koneksi dan cek disini
	$conn = mysqli_connect($server, $username, $pass, $dbname);
	if(!$conn){
		die("Connection failed: " . $conn->connect_error);
	  }	
	//echo "connected Succesfully";	
?>