<?php
	include "./navbar.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM product WHERE id = $id";
	mysqli_query($con,$sql);
	$_SESSION['flash_message'] = [
	    'message' => 'Product Delete successfully!',
	    'type' => 'danger'  // success, error, info, warning, etc.
	];
	redirect($url .'admin');
	// echo $sql;
?>