<?php
include './navbar.php';
?>
		<form action="<?= $url . 'admin/save_product.php' ?>" method="post" enctype="multipart/form-data">
			<div class="row mt-5 text-align-center justify-content-center">
				<h5 class="text-center">Add New Product</h5>
				<div class="col-md-8 border p-3">
					<div class="row">
						<div class="col-md-6 mb-3 border p-2">
							<label class="form-label">Product Name</label>
							<input type="text" class="form-control" name="Product_name" placeholder="Enter Product Name">
						</div>
						<div class="col-md-6 mb-3 border p-2">
							<label for="exampleFormControlTextarea1" class="form-label">Product Amount</label>
							<input class="form-control" name="product_price" type="number" placeholder="Enter Amount">
						</div>

						<div class="col-md-6 mb-3 border p-2">
							<label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
							<textarea name="product_desription" class="form-control" rows="3"> </textarea>
						</div>

						<div class="col-md-6 mb-3 border p-2">
							<label for="exampleFormControlTextarea1" class="form-label">Product Image</label>
							<input class="form-control" type="file" name="product_image" accept=".png, .jpg, .jpeg, .webp">
						</div>
						<div class="col-md-12">
							<button class="btn btn-primary w-100">Save Product</button>
						</div>
					</div>
				</div>
			</div>
		</form>

<?php
include './footer.php';
?>