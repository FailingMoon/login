<?php
	if(!isset($_POST['pname']) || !isset($_POST['pprice'])){
		echo "No data passed!";
		exit();
	} 

	$name=$_POST['pname'];
	$price=$_POST['pprice'];
	$desc=$_POST['desc'];
	
	if($_POST['pphoto']['error']==0){
		move_uploaded_file($_FILES['pphoto']['tmp_name'], 'images/'.$_POST['pphoto']['name']);
		$photo=$_FILES['pphoto']['name'];
		require("sql_connect.php");
		$res=mysqli_query($mysqli,"INSERT INTO products(productID,prodName,prodPrice,ProdDescription,ProdImage)
			VALUES(NULL,'".$name."','".$price."','".$desc."','images/".$photo."')");

		if($res){
			header("location:index.php");
		}else{
			echo "cant insert";
		}
	}
?>