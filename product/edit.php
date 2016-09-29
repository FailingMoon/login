<?php
include("sql_connect.php");
if(isset($_GET['pid'])){
	$res=mysqli_query($mysqli,"SELECT * FROM products WHERE productID=".$_GET['pid']);

	$data=mysqli_fetch_row($res);
}else{
	header("location:index.php");
}
?>
<html>
<head>
	<title>Add Product</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
<?php include("navbar.php"); ?>
<h2 class="text-center">Edit</h2>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Edit game details</h3>
			</div>
		<div class="panel-body">
			<form method="POST" action="update.php" enctype="multipart/form-data">
				<input type="text" value="<?php echo $data[1]; ?>" name="pname" class="form-control" placeholder="Name">
				<input type="text" value="<?php echo $data[0]; ?>" name="id" class="form-control	hide" placeholder="id">
				<input type="text"  value="<?php echo $data[2]; ?>" name="pprice" class="form-control" placeholder="price">
				<input type="text"  value="<?php echo $data[3]; ?>" name="desc" class="form-control" placeholder="desc">
				<input type="file"  value="<?php echo $data[4]; ?>" name="pphoto" class="form-control">
				<button class='btn btn-success pull-left'>Submit</button>
			</form>
	</div>
</div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>