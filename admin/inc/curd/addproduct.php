<?php
	include('../../../inc/config/config.php');


	$pname=mysqli_real_escape_string($conn,$_POST['pname']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	$price=mysqli_real_escape_string($conn,$_POST['price']);
	//$old_price=$_POST['old_price'];
	$desc= mysqli_real_escape_string($conn,$_POST['desc']);
	$location = mysqli_real_escape_string($conn, trim($_POST['photo'] ?? ''));
	
	$sql="insert into product(productname,description, categoryid, price, photo) values ('$pname','$desc', '$category', '$price', '$location')";
	 $res = $conn->query($sql);

	 if($res)
	 {
	 	header('location:../../dashboard.php?page=2');

	 }

	

?>