<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location:index.php");
}
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
</head>
<body>
	<h1 class="text-center">Welcome <?php echo $_SESSION['user']?>
	<p>
		<a href="index.php">
			<button class="btn btn-sm btn-danger">Sign out</button>
			
		</a>
	</p>
</h1>
</body>
</html>