<?php 
	include 'connection.php';
	if($_POST['email'] != "" and $_POST['password'] != ""){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$res=mysql_query ("SELECT * from registration where email='$email' and password='$password' ");
		$myrow=mysql_fetch_array($res);
		if($email==$myrow['email']){
			$password=($password);
				if($password==$myrow['password']){
				session_start();
				$_SESSION['id']=$myrow['id'];
				$_SESSION['name']=$myrow['name'];
				$_SESSION['email']=$myrow['email'];
				$_SESSION['password']=$myrow['password'];
				header("Location:profile.php");
			}else{
				echo "Your login or password are incorect";
			}
		}else echo "Your login or password are incorrect";
}else echo "Fill the inputs pls bro!";
?>