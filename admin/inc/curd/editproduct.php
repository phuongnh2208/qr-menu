<?php
	include('../../../inc/config/config.php');

	$id=mysqli_real_escape_string($conn,$_GET['product']);

	$pname=mysqli_real_escape_string($conn,$_POST['pname']);
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	$price=mysqli_real_escape_string($conn,$_POST['price']);
	//$old_price=$_POST['old_price'];
	$desc= mysqli_real_escape_string($conn,$_POST['desc']);
	$location = mysqli_real_escape_string($conn, trim($_POST['photo'] ?? ''));

	$sql="select * from product where productid='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	if($location === ''){
		$location = mysqli_real_escape_string($conn, $row['photo']);
	}

	$sql="update product set productname='$pname',description='$desc', categoryid='$category', price='$price', photo='$location' where productid='$id'";
 	$res = $conn->query($sql);

	 if($res)
	 {
	 	
	 	header('location:../../dashboard.php?page=2');

	 }
	
?>