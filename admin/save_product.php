<?php
include './db.php';

echo "<pre>";
print_r($_POST);
print_r($_FILES);

if(isset($_FILES['product_image']['name']))
{
	$product_image=time().$_FILES['product_image']['name'];
	move_uploaded_file($_FILES['product_image']['tmp_name'],'uploads/'.$product_image);
}else{
	$product_image='';
}

$product_name = addslashes($_POST['Product_name']);
$product_price = addslashes($_POST['product_price']);
$product_desription = addslashes($_POST['product_desription']);
$date = date('Y-m-d H:i:s');

if($product_name && $product_price && $product_desription)
{
	$sql="INSERT INTO product (product_name,product_price,product_desription,product_image,add_date) VALUES ('$product_name','$product_price','$product_desription','$product_image','$date')";

	mysqli_query($con,$sql);
	// echo $sql;

	$_SESSION['flash_message'] ='Product saved successfully!';
 	redirect($url .'admin');
}else{
	// alert('All Details Required');
	// redirect($url.'admin');
	redirect($url . 'admin');

}

?>