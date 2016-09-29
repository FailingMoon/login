<?php
	require("connector.php");
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username=$_POST['username'];
		$password=md5($_POST['password']);


		$result=mysqli_query($db, 
		"SELECT * FROM user where username='".$username."' AND password='".$password."'");

		if($result){
			$x=mysqli_num_rows($result);
			if($x==1){
				session_start();
				$_SESSION['user']=$username;
				header("location:homepage.php");
			}else{
				$login= false;
			}
		}
	}
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
	body{
		padding-top: 15%;
	}
	</style>
</head>
<body>

	<div class="col-md-4 col-md-offset-4">
	<?php
	if(isset($login) && $login==false){
	?>
		<div class="alert alert-danger">
		<span class="glyphicon glyphicon-exclamation-sign"></span>
		Login Failed!
	</div>
	<?php } ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Login</h2>
		</div>
		<div class="panel-body">
		<form method="POST" action="index.php" autocomplete="off">
			<input type="text" name="username" required="required" placeholder="Username" class="form-control">
			<br>
			<input type="password" name="password" required="required" placeholder="Password" class="form-control">
			<br>
			<span><a href="#">Forgot password?</span>
			<button class="btn btn-success pull-rigth">Login</button>
		</form>
		</div>
	</div>
</body>
</html>