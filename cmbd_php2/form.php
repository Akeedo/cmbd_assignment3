
<!-- header -->
<?php include('components/header.php') ?>

<?php
	$error = ['product_error' => '', 'product_price' => '', 'description' => ''];

	$ProductName = $ProductPrice = $ProductDescription= '';

	$ProductName = htmlspecialchars($_POST['product_name']) ?? "";
	$ProductPrice = htmlspecialchars($_POST['product_price']) ?? "";
	 $ProductDescription = $_POST['description'] ?? "";
	 if(isset($_POST['create_product'])){
	 	if(empty($ProductName)){
			$error['product_error'] = "Please Enter Product Name";
			}
	if(empty($ProductPrice)){
			$error['product_price'] = "Please Enter Product Price";
			}
	if(empty($ProductDescription)){
		$error['description'] = "Please Enter Description";
		}
		if(!array_filter($error)){
			header('Location:index.php');
		}
	 }
?>
<div class="container">
	<div class="col-md-12">
		<h2>Product Information</h2>
		<form action="form.php" method="POST">
			<div class="form-group">
				<label for="product_name">Product Name</label>
				<input type="text" name="product_name" id="product_name" class="form-control" value="<?=$ProductName?>">
				<span style="color:red;"><?=$error['product_error']?></span>
			</div>
			<div class="form-group">
				<label for="product_price">Product Price</label>
				<input type="text" name="product_price" id="product_price" class="form-control" value="<?=$ProductPrice?>">
				<span style="color:red;"><?=$error['product_price']?></span>
			</div>
			<div class="form-group">
				<label for="description">Product Description</label>
				<textarea type="text" name="description" id="description" rows="5" class="form-control"><?php echo $ProductDescription; ?></textarea>
				<span style="color:red;"><?=$error['description']?></span>
			</div>

			<div class="form-group text-right">
				<input type="submit" name="create_product" value="Submit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>

<!-- footer -->
<?php include('components/footer.php') ?>