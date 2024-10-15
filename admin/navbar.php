<?php
	include './db.php';
	session_start();
	// session_destroy();
	if(!isset($_SESSION['admin_id']))
	{
		$link = $url.'admin/login.php';
		header('location:'.$link);
		// echo $link;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<nav class="bg-body-tertiary">
			    <a href="<?=$url.'admin'?>"><button class="btn btn-outline-success me-2" type="button">Product List</button></a>
			    <a href="<?=$url.'admin/add-product.php'?>"><button class="btn btn-sm btn-outline-secondary" type="button">Add Product</button></a>
			    <a href="<?=$url.'admin/logout.php'?>"><button class="btn btn-sm btn-outline-danger" type="button">Logout</button></a>
			</nav>
		</div>

		<?php
			if (isset($_SESSION['flash_message'])) {
			    $flash = $_SESSION['flash_message'];

			    // Display the flash message with a style based on its type
			    echo "<div class='alert alert-{$flash['type']}'>
			            {$flash['message']}
			          </div>";

			    // Unset the flash message to prevent it from showing again
			    unset($_SESSION['flash_message']);
			}
		?>

