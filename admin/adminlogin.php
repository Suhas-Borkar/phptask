<?php
	include './db.php';
	session_start();
	if(isset($_SESSION['admin_id']))
	{
		$link = $url.'admin';
		header('location:'.$link);
	}
	// echo "<pre>";
	// print_r($_POST);

	$email = $_POST['admin_email'];
	$password = $_POST['admin_password'];

	$query="SELECT * FROM admin WHERE email = '".$email."' AND password = '".$password."' ";
	// echo $query;
	// exit;
	$res=mysqli_query($con,$query) or die("SQL query failed");


	if (mysqli_num_rows($res)>0)
	{

		$all_data=mysqli_fetch_all($res,MYSQLI_ASSOC)[0];

		$_SESSION['admin_id'] = $all_data['id'];
		$_SESSION['admin_name'] = $all_data['name'];
		$_SESSION['admin_id'] = $all_data['email'];
		$_SESSION['admin_id'] = $all_data['password'];

		// print_r($all_data);	
		$_SESSION['flash_message'] = [
		    'message' => 'Admin Login successfully!',
		    'type' => 'success'  // success, error, info, warning, etc.
		];
		$link = $url.'admin';
		header('location:'.$link);

	}
	else
	{

		$_SESSION['flash_message'] = [
		    'message' => 'Admin Not Found!',
		    'type' => 'warning'  // success, error, info, warning, etc.
		];
		$link = $url.'admin';
		header('location:'.$link);
		// echo json_encode(array('messege'=>'no record found','status'=>false));
	}


	
?>