<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="homee">
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "<div class='row'><div class='col-md-3'></div><div class='col-md-6 text-center justify-content-center'><p class='text-danger p-1 fs-3 text-uppercase alert alert-danger rounded-5'><br/>All fields should be filled. Either one or many fields are empty.<br/><br/><a class='btn btn-primary' href='register.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div><div class='col-md-3'></div></div>";
	
	} else {
		mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "<div class='row'><div class='col-md-3'></div><div class='col-md-6 text-center justify-content-center'><p class='text-success p-1 fs-3 text-uppercase alert alert-success rounded-5'><br/>Registration successfully<br/><br/><a class='btn btn-primary' href='login.php'>Login</a><br/><br/></p></div><div class='col-md-3'></div></div>";
	}
} else {
?>

<!-- Section: Design Block -->
<section style="background-color: #010439;" class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('img/indexbg.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -170px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form name="form1" method="post" action="">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="form-floating mt-2">
                            <input type="text" name="name"  class="form-control" placeholder="Enter Username">
                            <label>Full Name</label>
                        </div>

						<div class="form-floating mt-2">
                            <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                            <label>Email</label>
                        </div>
						<div class="form-floating mt-2">
                            <input type="text" name="username"  class="form-control" placeholder="Enter Username">
                            <label>User Name</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" name="password"  class="form-control" placeholder="Enter Password">
                            <label>Password</label>
                        </div>

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
              </label>
            </div> -->
			<br>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 mb-4">
              Sign up
            </button>
			<a href="index.php" class="btn btn-primary btn-block mt-4 mb-4">
              Go Back to Login
			</a>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-facebook"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->








<?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
