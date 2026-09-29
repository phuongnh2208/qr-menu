<?php
	include('../../../inc/config/config.php');

	$id = $_GET['product'];

	$sql="delete from product where productid='$id'";
	
	$res = $conn->query($sql);

	if($res) {
		header('location:../../dashboard.php?page=2');
		exit();
	}


	?>
	