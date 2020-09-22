<?php
session_start();

if(session_destroy()){
	?>
	<script type="text/javascript">
		document.location = "admin-login.php";
	</script>
	<?php
}
?>