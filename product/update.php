<?php
if(isset($_POST['id'])){
	require("sql_connect.php");
	$res=mysqli_query($mysqli,"SELECT * FROM products WHERE productID=".$_POST['id']);
	$data=mysqli_fetch_row($res);

	$name=$_POST['pname'];
	$price=$_POST['pprice'];
	$desc=$_POST['desc'];
	$id=$_POST['id'];
	$ret=mysqli_query($mysqli,"UPDATE products SET prodName='".$name."',prodPrice='".$price."',prodDescription='".$desc."'  WHERE productID=".$id);
	if($ret){
		header("location:index.php");
	}else{
		echo "ERROR";
	}

}else{
	header("location:index.php");
}
?>