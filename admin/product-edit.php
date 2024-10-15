<?php 
include './navbar.php'; 
	// echo "<pre>";
	// print_r($_GET['id']);

	$data = mysqli_query($con,'SELECT * FROM product WHERE id = "'.$_GET['id'].'"');

	// print_r($data);

	foreach ($data as $key => $va) {
?>
	<form action="<?= $url . 'admin/update_product.php' ?>" method="post" enctype="multipart/form-data">
		<div class="row mt-5 text-align-center justify-content-center">
			<h5 class="text-center">Add New Product</h5>
			<div class="col-md-8 border p-3">
				<div class="row">
					<div class="col-md-6 mb-3 border p-2">
						<label class="form-label">Product Name</label>
						<input type="text" value="<?=$va['product_name']?>" class="form-control" name="Product_name" placeholder="Enter Product Name">

						<input type="hidden" name="id" value="<?=$va['id']?>">
					</div>
					<div class="col-md-6 mb-3 border p-2">
						<label for="exampleFormControlTextarea1" class="form-label">Product Amount</label>
						<input class="form-control" value="<?=$va['product_price']?>" name="product_price" type="number" placeholder="Enter Amount">
					</div>

					<div class="col-md-12 mb-3 border p-2">
						<label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
						<textarea name="product_desription" class="form-control" rows="3"> <?=$va['product_desription']?> </textarea>
					</div>

					<div class="col-md-6 mb-3 border p-2">
						<label for="exampleFormControlTextarea1" class="form-label">Product Image</label>
						<input class="form-control" type="file" name="product_image" accept=".png, .jpg, .jpeg, .webp">
						<input type="hidden" name="product_image2" value="<?=$va['product_image']?>">
					</div>

					<div class="col-md-6">
						<img src="uploads/<?=$va['product_image']?>">
					</div>
					<div class="col-md-12">
						<button class="btn btn-primary w-100">Save Product</button>
					</div>
				</div>
			</div>
		</div>
	</form>
<?php
	}
?>