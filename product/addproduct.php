<?php
include("sql_connect.php");
?>
<html>
<head>
	<title>Add Product</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
<?php include("navbar.php"); ?>
<h2 class="text-center">Add Product</h2>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Insert new game</h3>
			</div>
		<div class="panel-body">
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<input type="text" name= "pname" class="form-control" placeholder="Name">
				<input type="text"  name ="pprice" class="form-control" placeholder="price">
				<input type="text"  name ="desc" class="form-control" placeholder="desc">
				<input type="file"  name ="pphoto" class="form-control">
				<button class='btn btn-success pull-left'>Submit</button>
			</form>
	</div>
</div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>