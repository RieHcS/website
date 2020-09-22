<?php
session_start();

include "db.php";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM admin WHERE uname='$username' and pass='$password'";
$result = mysqli_query($con,$sql);
$row_num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if(empty($username) || empty($password)){
	echo "Fill out all fields";
}else{
	if($row_num <= 0 ){
		echo "Username or Password might be wrong.";
	}else{
		$_SESSION['uname'] = $row['uname'];
		echo "ok";
	}
}
?>