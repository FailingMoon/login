<?php
include("sql_connect.php");
if(isset($_GET['pid'])){
	$res=mysqli_query($mysqli,"SELECT * FROM products WHERE productID=".$_GET['pid']);

	$product=mysqli_fetch_row($res);
}else{
	header("location:index.php");
}
?>
<html>
<head>
	<title>Item List</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
<?php include("navbar.php"); ?>
<h2 class="text-center">View Products</h2>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<h3 class="text-center">
			<img src="<?php echo $product[4]; ?>" class="img-thumbnail">
			<?php echo $product[1]; ?>
			<p><small>Price: <?php echo $product[2]; ?></small></p>
			<br><br>
			<div class="col-sm-8 col-sm-offset-2 bordered">
				<p class="text-center">Description: <?php echo $product[3];?></p>
			</div>
		</h3>
	</div>
	</div>
</div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script>
</script>