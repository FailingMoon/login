<?php
include("sql_connect.php");
?>
<html>
<head>
	<title>Steam Games</title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
<?php include("navbar.php"); ?>
<h2 class="text-center"> Steam Games</h2>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table table-bordered">
			<th>ID</th>
			<th>Game</th>
			<th>Price</th>
			<th>Options</th>

			<?php
			$result=mysqli_query($mysqli,"SELECT * FROM products");
			$names= array();
			$price= array();
			$img= array();

			if($result){
				$index=0;
				while($row=mysqli_fetch_array($result)){
					$names[]= $row[1];
					$price[]= $row[2];
					$img[]=$row[4];
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
					echo "<td>".$row[1]."</td>";
					echo "<td>".$row[2]."</td>";
					echo "<td>";
					echo 

						"<button class='btn btn-primary' alt='".$index++."'>
							<span class='glyphicon glyphicon-eye-open'></span>
							</button>";
					echo "<a href='edit.php?pid=".$row[0]."'>
					<button class='btn btn-warning'>
							<span class='glyphicon glyphicon-pencil'></span>
							</button></a> ";

					echo "<a href='delete.php?pid=".$row[0]."' class='check'><button class='btn btn-danger'>
							<span class='glyphicon glyphicon-remove'></span>
							</button></a>";
					echo "</td>";
					echo "</tr>";
				}
			}
			?>
		</table>
	</div>
</div>
<div class="modal fade myModal" tab-index="-1" role="dialog" aria-labelledby-"myModal">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="text-center">
				<p><strong>Name:</strong><span class='mod_name'></p>
				<p><strong>Price:</strong><span class='mod_price'></p>
				<img src='#' class="mod_img">
			</div>
			</div>
		</div>
</body>
</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script>
	var names= [<?php echo "'".join("','",$names)."'"; ?>];
	var price= [<?php echo "'".join("','",$price)."'"; ?>];
	var img= [<?php echo "'".join("','",$img)."'"; ?>];

	$(".check").on("click",function(){
		return confirm("Are you sure?");
	});

	$(".btn-primary").on("click",function(){
		var index = $(this).attr("alt");
		var productName= names[index];
		var prodPrice= price[index];
		var prodImage= img[index];
		$(".mod_name").text(productName);
		$(".mod_price").text(prodPrice);
		$(".mod_img").attr('src',prodImage);
		$(".modal").modal("show");
	});


</script>