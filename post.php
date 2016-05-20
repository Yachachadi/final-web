<?php 
	session_start();
	include "connection.php";
	$message = $_POST['message'];
	$user = $_SESSION['name'];
	$sql = "insert into message values(null, '".$user."' ,'".$message."')";
	if (mysql_query($sql)){
		header("Location:profile.php");
	} else echo $_SESSION['name'];
 ?>