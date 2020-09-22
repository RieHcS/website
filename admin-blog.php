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
	<title>Admin Blog</title>
	<?php
	include "bootstrap.php";
	?>
</head>
<body style="background: #f3f3f3;font-family: 'Source Sans Pro', Helvetica, sans-serif;">
	<div class="jumbotron text-center bg-primary text-light" style="margin-bottom: 0px;">
		<h1>Admin Blog</h1>
	</div>
		<?php
			include "admin-navbar.php";
		?>
	<div class="container">
		<div class="card form-card">
			<div class="card-header">
				<h4>Create Blog Article</h4>
			</div>
			<div class="card-body">
				<label for="title">Title</label>
				<input type="text" name="firsttitlename" onkeyup="check_fields_epmty();" onkeydown="check_fields_epmty();" id="title" class="title form-control" autocomplete="off">
				<br>
				<label for="context">Context</label>
				<textarea name="context" id="context" onkeyup="check_fields_epmty();" onkeydown="check_fields_epmty();" class="context form-control" autocomplete="off" rows="5"></textarea>
				<br>
				<button onclick="if(confirm('Are you sure..?'))upload_blog_post();" class="publish_btn btn btn-primary btn-block" disabled="disabled">Publish</button>
			</div>
		</div>
	</div>


	<?php
		include "admin-footer.php";
	?>

	<script type="text/javascript">
		function check_fields_epmty(){
			var title = document.getElementById('title').value;
			var context = document.getElementById('context').value;
			if(title == "" || context == ""){
				$('.publish_btn').prop('disabled', true);
			}else{
				$('.publish_btn').prop('disabled', false);
			}
		}
		function upload_blog_post(){
			var req = new XMLHttpRequest();
			var title = document.getElementById('title').value;
			var context = document.getElementById('context').value;
			req.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					if(this.responseText == "ok"){
						location.reload();
					}else{
						alert(this.responseText);
					}
				}
			}
			req.open("POST", "upload_blog_post.php?title="+title+"&context="+context, false);
			req.send();
		}
	</script>
</body>
</html>