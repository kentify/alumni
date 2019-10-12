<?php
session_start();
include_once("db.php");
if(isset($_POST['login_button'])) {
	$username = $_POST['username'];
	$adminpass = $_POST['password'];
	$sql = "SELECT * FROM admin WHERE username='$username'";
	$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);	
		
	 if(password_verify($adminpass , $row['password'])){	
	 	echo "ok";	
		$_SESSION['admin'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['job'] = $row['job'];
		$_SESSION['picture'] = $row['picture'];
		if(!empty($_POST["remember"])) {
				setcookie ("admin_login",$_POST["id"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["admin_login"])) {
					setcookie ("admin_login","");
				}
			}
	} else {				
		echo "Invalid credentials! Please try again."; // wrong details 
	}		
}
?>