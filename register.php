<?php
include_once("db.php");
if(isset($_POST['btn-save'])) {
$username = $_POST['username'];
$alumni_id = $_POST['alumni_id'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname =  $_POST['lname'];
$status = "Offline";
$graduated = $_POST['graduated'];
$dob = $_POST['dob'];
$verify = "0";
$campus = $_POST['campus'];
$department = $_POST['department'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$job = "N/A";
$picture = 'default-avatar.png';
$register = date('Y-m-d H:i:s');
$password = (password_hash($_POST['password'], PASSWORD_BCRYPT));
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($con, $sql);
$rows = mysqli_fetch_assoc($result);
$sql = "SELECT * FROM users WHERE email='$email'";
$resultset = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultset);
if($username == $rows['username']){
echo "1";
}elseif($email == $row['email']){
echo "2";
}else {
$query = mysqli_query($con,"SELECT id FROM users WHERE fname like '$fname' and mname like '$mname' and lname like '$lname' and verify like '$verify' and alumni_id = '$alumni_id'");
$get = mysqli_fetch_assoc($query);
$id = $get['id'];
if ($get > 0) {
$sql = "UPDATE  users  SET  dob ='$dob', gender ='$gender', contact ='$contact', email ='$email', username ='$username', password ='$password', status ='$status', verify ='1', picture ='$picture', department ='$department', course ='$course', graduated ='$graduated', campus ='$campus' WHERE id = '$id'";
			mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);
			echo "registered";
}else{
	echo "unregistered";
}
}
}
?>