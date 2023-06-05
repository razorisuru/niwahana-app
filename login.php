<?php session_start(); ?>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css?v=<?php echo time(); ?>">
</head>

<body class="homee">
<?php
include("connection.php");
include("header.php");

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

<section class="vh-100" style="background-color: #010439;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-5-strong" style="border-radius: 1rem;background: hsla(0, 0%, 100%, 0.85);
        backdrop-filter: blur(30px);">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/indexbg2.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form name="form1" method="post" action="">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold ">Niwahana Web App</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-floating mt-2">
                            <input type="text" name="username"  class="form-control" placeholder="Enter Username">
                            <label>Username</label>
                        </div>

                        <div class="form-floating mt-2">
                            <input type="password" name="password"  class="form-control" placeholder="Enter Password">
                            <label>Password</label>
                        </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block mt-2" type="submit" name="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



	
<?php
}
?>

<?php
	include("footer.php");
?>
</body>
</html>
