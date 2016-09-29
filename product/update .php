<?php
if(isset($_POST['id'])){
	require("sql_connect.php");
	$res=mysqli_query($mysqli,"SELECT * FROM products WHERE productID=".$_POST['id']);
	$data=mysqli_fetch_row($res);
}else{
	header("location:index.php");
}
 ?>