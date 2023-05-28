<?php session_start(); ?>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="homee">
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "<div class='row'><div class='col-md-3'></div><div class='col-md-6 text-center justify-content-center'><p class='text-danger p-1 fs-3 text-uppercase alert alert-danger rounded-5'><br/>Either username or password field is empty.<br/><br/><a class='btn btn-primary' href='login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div><div class='col-md-3'></div></div>";
		
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['role'] = $row['role'];
		} else {
			echo "<div class='row'><div class='col-md-3'></div><div class='col-md-6 text-center justify-content-center'><p class='text-danger p-1 fs-3 text-uppercase alert alert-danger rounded-5'><br/>Invalid username or password.<br/><br/><a class='btn btn-primary' href='login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div><div class='col-md-3'></div></div>";
			
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}
	}
} else {
?>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="card icardbg mt-5">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <img class="img-fluid mx-auto d-block" src="img/rz.png" width="150px">
                </div>
                <div class="card-body">
                    <form name="form1" method="post" action="">
                        <div class="form-floating mt-2">
                            <input type="text" name="username"  class="form-control" placeholder="Enter Username">
                            <label>Username</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" name="password"  class="form-control" placeholder="Enter Password">
                            <label>Password</label>
                        </div>
                        <div class="btn-group text-center d-flex mt-2">
                            <input type="submit" name="submit" class="form-control btn btn-success">
                            <input type="reset" class="form-control btn btn-danger">
                        </div>
                        <!-- <p class="input">Please <a href="/login">Login</a> or <a href="/register">Register</a> to view your tracking link.</p> -->
                    </form>
					<p>Don't have an account! <a class=" logbtn text-light p-1 rounded-2" href="register.php">Register here!</a></p>
                </div>
            </div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 text-center mt-5 mt-5">
			<a class="btn btn-warning" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a> <br />
		</div>
		<div class="col-md-4"></div>
	</div>
<?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
