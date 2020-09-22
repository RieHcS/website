<?php
session_start();
include "db.php";
if(empty($_SESSION['uname'])){
	?>
	<script>
		document.location = "admin-login.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<?php
	include "bootstrap.php";
	?>
</head>
<body style="background: #f3f3f3;font-family: 'Source Sans Pro', Helvetica, sans-serif;">
	<div class="jumbotron text-center" style="margin-bottom: 0px;">
		<h1>Admin Home</h1>
	</div>
	<?php
		include "admin-navbar.php";
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h4>Card 1</h4>
					</div>
					<div class="card-body p-5">
						<div class="card-text">
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h4>Card 1</h4>
					</div>
					<div class="card-body p-5">
						<div class="card-text">
							
						</div>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h4>Card 1</h4>
					</div>
					<div class="card-body p-5">
						<div class="card-text">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		include "admin-footer.php";
	?>
</body>
</html>