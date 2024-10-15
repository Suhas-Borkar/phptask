<?php
include './navbar.php';
?>
	<div class="row mt-5 text-align-center justify-content-center">
		<h5 class="text-center">Product List</h5>
		<div class="col-md-9 border p-3">
			<div class="row">
				<table class="table">
					<thead>
					    <tr>
						    <th scope="col">#</th>
						    <th scope="col">action</th>
						    <th scope="col">Name</th>
						    <th scope="col">Price</th>
						    <th scope="col">Discription</th>
						    <th scope="col">Image</th>
						</tr>
				  	</thead>
				  	<tbody>
				  		<?php $product_data=mysqli_query($con,"SELECT * FROM product"); ?>
				  		<?php foreach ($product_data as $key => $value) { ?>
						    <tr>
						      	<th scope="row"><?=$key+1?></th>
						      	<td> 
						      		<a href="<?=$url.'admin/product-edit.php?id='?><?=$value['id']?>"> <button class="badge badge-primary text-primary m-0 p-1"> <i class="fa fa-edit"></i> </button> </a>
						      		<a href="<?=$url.'admin/delete-product.php?id='?><?=$value['id']?>"> <button class="badge badge-danger text-danger m-0 p-1"> <i class="fa fa-trash"></i> </button> </a>
						      	</td>
						      	<td><?=$value['product_name']?></td>
						      	<td><?=$value['product_price']?></td>
						      	<td><?=$value['product_desription']?></td>
						      	<td><img src="uploads/<?=$value['product_image']?>" class="img-fluid" style="height: 100px;">
						    </tr>

						<?php } ?>

				  	</tbody>
				</table>
			</div>
		</div>
	</div>
		
<?php
include './footer.php';
?>