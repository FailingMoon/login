<?php
    include("sql_connect.php");
	if(isset($_GET['pid'])){
    $id=$_GET['pid'];

    $res=mysqli_query($mysqli,"DELETE FROM products WHERE productID=".$id);
    header("location:index.php");
	}else{
		header("location:index.php");
	}
?>