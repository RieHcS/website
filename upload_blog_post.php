<?php
session_start();
include "db.php";

$title = $_REQUEST['title'];
$context = htmlspecialchars($_REQUEST['context'], ENT_QUOTES);

$sql = "INSERT INTO blog_posts (`title`,`context`,`up_date`) VALUES ('$title','$context','')";

if(empty($title) || empty($context)){
	echo "Fill out all fields";
}else{
	if(mysqli_query($con,$sql)){
		echo "ok";
	}else{
		echo "SQL Failed";
	}
}
?>