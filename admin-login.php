<?php
session_start();
include "db.php";

if(!empty($_SESSION['uname'])){
	?>
	<script>
		document.location = "admin.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<?php
	include "bootstrap.php";
	?>
	<style type="text/css">
	.form-card{
		width: 300px;
		margin:auto;
	}
	@media screen and (max-width:400px){
		.form-card{
			width:100%;

		}
	}
</style>
</head>
<body style="background: #f3f3f3;font-family: 'Source Sans Pro', Helvetica, sans-serif;">
	<div class="container">
		<br>
		<center>
			<img src="images/logo.svg" alt="" />
			<h3 class="text-center my-4">Admin login</h3>
		</center>
		<div class="card form-card" style="border-radius: 6px;">
			<div class="card-body">
				<label style="font-size: 13px;font-weight: bold;">Username :</label>
				<input type="username" style="border-radius: 6px;" name="username" id="username" class="username form-control" autocomplete="off">
				<br>
				<label style="font-size: 13px;font-weight: bold;">Password :</label>
				<input type="password" style="border-radius: 6px;" name="password" id="password" class="password form-control">
				<br>
				<button class="btn btn-success btn-block" onclick="login_admin();">Login</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function login_admin(){
			var req = new XMLHttpRequest();
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			req.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					if(this.responseText == "ok"){
						document.location = "admin.php";
					}else{
						alert(this.responseText);
					}
				}
			}
			req.open("POST", "login-admin-process.php?username="+username+"&password="+password, false);
			req.send();
		}
	</script>
</body>
</html>