<?php
include_once("db.php");
if(isset($_POST['btn-save'])) {
$username = $_POST['username'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname =  $_POST['lname'];
$status = "Offline";
$verify = "0";
$graduated = $_POST['graduated'];
$dob = $_POST['dob'];
$campus = $_POST['campus'];
$department = $_POST['department'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$job = "N/A";
$picture = 'default-avatar.png';
$register = date('Y-m-d H:i:s');
//


//
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
$sql = "INSERT INTO users(fname,mname,lname,dob,gender,contact,email,job,username, password,status,register,verify,picture,department,course,graduated,campus) " . "VALUES('$fname','$mname','$lname','$dob','$gender','$contact','$email','$job','$username','$password','$status','$register','$verify','$picture','$department','$course','$graduated','$campus')";
mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);
echo "registered";

}
}
?>