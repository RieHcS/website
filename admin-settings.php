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
		<h1>Admin Settings</h1>
	</div>
		<?php
			include "admin-navbar.php";
		?>
	<div class="container">
		<div class="card form-card">
			<div class="card-header">
				<h4>Setup Profile</h4>
			</div>
			<div class="card-body">
				<label for="firstname">First-name :</label>
				<input type="text" name="firstname" id="firstname" class="firstname form-control" autocomplete="off">
				<br>
				<label for="lastname">Last-name</label>
				<input type="text" name="lastname" id="lastname" class="lastname form-control" autocomplete="off">
				<br>
				<button onclick="" class="btn btn-primary btn-block">Save</button>
			</div>
		</div>
	</div>
	<?php
		include "admin-footer.php";
	?>
</body>
</html>