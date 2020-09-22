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
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Admin Page</h1>
		</div>
		<nav class="navbar navbar-expand-md bg-light navbar-light shadow-sm sticky-top">
		  <!-- Brand -->
		  <a class="navbar-brand" href="#">Admin</a>

		  <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!-- Navbar links -->
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Settings</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout-admin.php">Logout</a>
		      </li>
		    </ul>
		  </div>
		</nav>
		<br>
		<div class="row">
			<div class="col">
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
			<div class="col">
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
			<div class="col">
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
</body>
</html>