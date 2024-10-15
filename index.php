<?php
include './admin/db.php';
$sql = "SELECT * FROM product";
$product = mysqli_query($con,$sql);
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
	<div class="container mt-5 border p-5">
		<h2 class="text-center text-primary">Product Details</h2>
		<div class="row mt-5">
			<?php
				foreach ($product as $key => $va) {
			?>
				<div class="card" style="width: 18rem;">
					<img src="<?=$url?>admin/uploads/<?=$va['product_image']?>" class="card-img-top" alt="...">
					<div class="card-body">
					    <h5 class="card-title"><?=$va['product_name']?>(₹<?=number_format($va['product_price'], 2, '.', ',')?>)</h5>
					    <p class="card-text"><?=$va['product_desription']?></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>