<?php
require 'db.php';
session_start();
if (!empty($_SESSION['admin'])) {
    session_destroy();
    session_unset();
    header("Location: index.php");
    exit();
}else {
    header("Location: index.php");
    
}
?>
 