<?php
require 'db.php';
session_start();
if (!empty($_SESSION['id'])) {
    session_destroy();
    session_unset();
    header("Location: index.php");
	$uid = $_SESSION['id'];
    $q = "UPDATE users SET logout = NOW(), status = 'Offline' WHERE id = '$uid'" ;
    $r = mysqli_query($con,$q);
    exit();
}else {
    header("Location: signin.php");
    
}
?>
 