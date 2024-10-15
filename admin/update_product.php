<?php
include './navbar.php';
	echo "<pre>";
	print_r($_POST);
	print_r($_FILES);

	if($_FILES['product_image']['name'] != "" )
	{
		$product_image=time().$_FILES['product_image']['name'];
		move_uploaded_file($_FILES['product_image']['tmp_name'],'uploads/'.$product_image);
	}else{
		$product_image=addslashes($_POST['product_image2']);
	}

	$product_name = addslashes($_POST['Product_name']);
	$product_price = addslashes($_POST['product_price']);
	$product_desription = addslashes($_POST['product_desription']);
	$date = date('Y-m-d H:i:s');
	$id = intval($_POST['id']); 

	if($product_name && $product_price && $product_desription)
	{
		$sql = "UPDATE product SET 
			product_name='$product_name',
			product_price='$product_price',
			product_desription='$product_desription',
			product_image= '$product_image' 
			WHERE id = '$id' ";

		echo $sql;

		// $sql="INSERT INTO product (product_name,product_price,product_desription,product_image,add_date) VALUES ('$product_name','$product_price','$product_desription','$product_image','$date')";

		mysqli_query($con,$sql);


		// $_SESSION['flash_message'] ='Product saved successfully!';
		$_SESSION['flash_message'] = [
		    'message' => 'Product update successfully!',
		    'type' => 'success'  // success, error, info, warning, etc.
		];
	 	redirect($url .'admin');
	}else{
		// alert('All Details Required');
		// redirect($url.'admin');
		redirect($url . 'admin');

	}

?>