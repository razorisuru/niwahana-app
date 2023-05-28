<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body style="background: url(img/bg.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;">
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$loginId = $_SESSION['id'];

		
	// checking empty fields
	if(empty($name) || empty($qty) || empty($price)) {
				
		if(empty($name)) {
			echo "<br><p class='text-danger p-1 d-flex fs-3 justify-content-center text-uppercase alert alert-danger rounded-5'>Name field is empty.</p><br/>";
			// echo "<script type='text/javascript'>alert('Name error!')</script>";
		}
		
		if(empty($qty)) {
			echo "<p class='text-danger p-1 d-flex fs-3 justify-content-center text-uppercase alert alert-danger rounded-5'>Quantity field is empty.</p><br/>";
		}
		
		if(empty($price)) {
			echo "<p class='text-danger p-1 d-flex fs-3 justify-content-center text-uppercase alert alert-danger rounded-5'>Price field is empty.</p><br/>";
		}
		
		//link to the previous page
		echo "<br/><div class='text-center'><a class='btn btn-primary' href='javascript:self.history.back();'><i class='bi bi-house-door-fill'></i> Go Back</a></div>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO products(name, qty, price, login_id) VALUES('$name','$qty','$price', '$loginId')");
		
		//display success message
		echo "<br/><br/><div class='row'><div class='col-md-3'></div><div class='col-md-6 text-center justify-content-center'><p class='text-success p-1 fs-3 text-uppercase alert alert-success rounded-5'><br/>Data added successfully.<br/><br/><a class='btn btn-primary' href='view.php'>View Result</a><br/><br/></p></div><div class='col-md-3'></div></div>";
	
	}
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
