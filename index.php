<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="homee" >

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
			<h3 class="text-center p-2 text-light mt-3 rounded-3 text-bg-success">WEB Application for Niwahana</h3>  
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div style="background: rgba(146, 100, 254, 0.432);
    					border-radius: 16px;
    					box-shadow: 0 4px 30px rgb(0, 0, 0);
						backdrop-filter: blur(5.1px);
						-webkit-backdrop-filter: blur(5.1px);
						border: 1px solid rgb(255, 255, 255);
						height: 500px;" class="card icardbg lgbg">
				<div class="card-body lgbg text-center">
					<div class="card-title ">
					</div>
					<?php
					
					// echo $role;
							if(isset($_SESSION['valid'])) {			
								include("connection.php");					
								$result = mysqli_query($mysqli, "SELECT * FROM login");
								global $role;
								$role = $_SESSION['role'];
							?>
								<div class="row ">
									<div class="col-md-2"></div>
									<div class="col-md-8 bg-primary-subtle border border-primary-subtle rounded-4 p-4">
										<h3 class="text-primary">Welcome <?php echo $_SESSION['name'] ?></h3>
										<?php 
											if ($role == 'super_admin'){
												echo"<a class='btn btn-warning' href='admin/includes/home.php'>Admin Dashboard</a>";
											}
										?>
									</div>
									<div class="col-md-2"></div>
								</div>		
								<br/><br/><br/><br/>
								<a class="btn btn-lg btn-success" href='view.php'><i class="bi bi-collection"></i> View App</a>
								<br/><br/><br/><br/><br/>
								<a class="btn btn-danger" href='logout.php'><i class="bi bi-box-arrow-left"></i> Logout</a>
							<?php	
							} else {
								echo "<p class='text-danger bg-success-subtle rounded-1 p-2'>You must be logged in to view this page</p>";
								echo "<img src='img/welcome.png' class='img-fluid' width='650'>";
								echo "<br/><br/><a class='btn btn-success' href='login.php'>Login</a>  <a class='btn btn-info' href='register.php'>Register</a>";
							}
							?>
				</div>
			  </div>
		</div>
		<div class="col-md-2"></div>
	</div>

	

	<div class="row">
    <div class="col-md-12">
      <!-- <marquee behavior="" direction=""><h3>BSC/WD/22/35/3</h3></marquee> -->
    </div>
  </div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
