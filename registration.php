<?php 
	include "connection.php";

	if(isset($_POST['email'])and isset($_POST['password'])and isset($_POST['name']) and isset($_POST['surname'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	if (empty($name) || empty($email) || empty($password)||empty($surname)){
		echo "Fill empty fields!";
		return;
	}
	$res=mysql_query("SELECT * FROM registration WHERE email='$email'");
	$myrow=mysql_fetch_array ($res);
	if(!empty($myrow['email'])){
		echo "Your login is busy. Please try again.";
		return;
	}
    else{
		$password=($password);
		$result=mysql_query("INSERT INTO registration VALUES (NULL,'$email','$password','$name','$surname')",$db);
		// header("Location:index4.php");
	}
	
}
?>