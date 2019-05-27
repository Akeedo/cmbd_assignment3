<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'cmbd22';

$conn= mysqli_connect($host,$user,$password,$database);
if(!$conn){
	echo "Connect".mysqli_connect_error();
}

$sql = "SELECT * FROM 'products'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

$test = "Asus,Dell,Apple";

$arraytest = explode(',',$test);
print_r($arraytest);


// echo "<pre>";
// print_r($data);

 ?>
<!-- header -->
<?php include('components/header.php') ?> 
<div class="container">
	<div class="col-md-12">
		<h2>Product Information</h2>
		<form action="index.php" method="POST">
			<div class="form-group">
				<label for="product_name">Product Name</label>
				<input type="text" name="product_name" id="product_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="product_price">Product Price</label>
				<input type="text" name="product_price" id="product_price" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Product Description</label>
				<textarea name="description" id="description" rows="4" class="form-control"></textarea>
			</div>

			<div class="form-group text-right">
				<input type="submit" value="Submit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>

<!-- footer -->
<?php include('components/footer.php') ?>