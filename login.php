<?php
session_start();
include_once("db.php");
if(isset($_POST['login_button'])) {
	$username = $_POST['username'];
	$user_password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username='$username'";
	$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);	
	if($row['verify']=="0"){
		echo "nope";
	}else{
	 if(password_verify($user_password , $row['password'])){	
	 	echo "ok";	
		$_SESSION['id'] = $row['id'];
		$_SESSION['verify']= $row['verify'];
		$_SESSION['picture'] = $row['picture'];
		$uid = $row['id'];
		$q = "UPDATE users SET status = 'Online', login = NOW() WHERE id = '$uid'" ;
        $r = mysqli_query($con,$q);	
		if(!empty($_POST["remember"])) {
				setcookie ("member_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
			}
	} else {				
		echo "error"; // wrong details 
		}
	}		
}
?>