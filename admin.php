<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<?php
	include "bootstrap.php";
	?>
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
				<button class="btn btn-success btn-block">Login</button>
			</div>
		</div>
	</div>
</body>
</html>