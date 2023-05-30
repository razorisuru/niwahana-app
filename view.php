<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id ASC");


// $query1 = "SELECT * FROM login WHERE id=".$_SESSION['id'];
// $result2 = $mysqli->query($query1);

// // Fetch data and assign to a PHP variable
// $data1 = $result2->fetch_assoc();
// $role = $data1['role'];
// echo $role;

// Close the connection
// $mysqli->close();
?>

<html>
<head>
	<title>Homepage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<body style="background: url(img/bg.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;">
	
	
		
	

	<div class="mt-5 row container">
		<div class="col-md-1"></div>
		<div class="col-md-10 ">
	
				<div class="float">
				<!-- <?php
				global $role;
				$role = $_SESSION['role'];
					// echo $role;
					if ($role == 'super_admin' || $role == 'admin'){
						echo"<a class='btn btn-outline-success' href='add.html'><i class='bi bi-file-plus-fill'></i> Add New Data</a>";
					}
				?> -->
				</div>
				

		<br/>
	</div>
		
		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-secondary">
			<div class="container">
					<a class="navbar-brand btn btn-warning" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
					<div class="row">
						<div class="text-bg-light text-center rounded-2" id="sqft"></div>
                        <div class="text-bg-light text-center rounded-2" id="sqft1"></div>
                        <div class="text-bg-light text-center rounded-2" id="cost"></div>
					</div>
					<div class=" d-flex float-end">
						<a class="btn btn-danger" href="logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a>
					</div>
					
			</div>	
			
		</nav>
	
	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10  text-center">
			<h3 class="text-center p-2 text-light mt-3 rounded-3 text-bg-success ">WEB Application for Niwahana</h3>  
			</div>
			<div class="col-md-1"></div>
		</div>

	<div class="row 1stphase">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="card icd">
                    <div class="card-header">
                        <h4 class="text-center">1st phase</h4>
                    </div>
                    <div class="card-body">
                      <div class="phase1">
                          <form id="frm1" method="post" action="">
                              <section class="sec1 input-group">
                                <div class="input-group-text">Living Room&nbsp;</div>
                                <input type="number" class="form-control" id="i1" placeholder="Quantity">
                                <label for="l1"></label>
                                <input type="number" class="form-control" id="l1" placeholder="Length">
                                <label for="w1"></label>
                                <input type="number" class="form-control" id="w1"  placeholder="Width">
                                <p class="ilw1 po" id="ilw1"></p>
                              </section>

                              <section class="sec2 input-group mt-2">
                                <div class="input-group-text">Bedroom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                <input type="number" class="form-control" id="i2" placeholder="Quantity">
                                <label for="l2"></label>
                                <input type="number" class="form-control" id="l2" placeholder="Length">
                                <label for="w2"></label>
                                <input type="number" class="form-control" id="w2"  placeholder="Width">
                                <p class="ilw2 po" id="ilw2"></p>
                              </section>

                              <section class="sec3 input-group mt-2">
                                <div class="input-group-text">Dining Room</div>
                                <input type="number" class="form-control" id="i3" placeholder="Quantity">
                                <label for="l3"></label>
                                <input type="number" class="form-control" id="l3" placeholder="Length">
                                <label for="w3"></label>
                                <input type="number" class="form-control" id="w3"  placeholder="Width">
                                <p class="ilw3 po" id="ilw3"></p>
                              </section>

                              <section class="sec4 input-group mt-2">
                                <div class="input-group-text">Bath Room &nbsp;&nbsp;</div>
                                <input type="number" class="form-control" id="i4" placeholder="Quantity">
                                <label for="l4"></label>
                                <input type="number" class="form-control" id="l4" placeholder="Length">
                                <label for="w4"></label>
                                <input type="number" class="form-control" id="w4"  placeholder="Width">
                                <p class="ilw4 po" id="ilw4"></p>
                              </section>
                              <!-- <button class="btn" type="button" onclick="multiply()">Calculate</button> -->
                              <!-- <input class="btn" type="submit" name="submit" /> -->
                            </form>
                            <div class="text-center card-footer"></div>
                            <div class="col-md-4">
                              
							
                            </div>
                            <button onclick="sendData()">Send Data</button>
                            <div id="response"></div>
                      </div>
                    </div>
                </div>
		</div>
		<div class="col-md-1"></div>
	</div>
	

	<div class="row mt-5 2ndphase">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="card icd">
                    <div class="card-header">
                        <h4 class="text-center">2nd phase</h4>
                    </div>
                    <div class="card-body">
                      <div class="phase2">
                          <div class="row container-fluid">
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/placeholder-image.webp" class="img-fluid" alt="...">
									
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/placeholder-image.webp" class="img-fluid" alt="...">
									
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/placeholder-image.webp" class="img-fluid" alt="...">
									
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/placeholder-image.webp" class="img-fluid" alt="...">
									
								</div>
							</div>
						</div>
					</div>
                            <div class="text-center card-footer"></div>
                            
                      		</div>
                    </div>
                </div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
		

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="app.js"></script>
	<script>
var myvalue = gg;
$("#mydata").val(myvalue);
</script>
</body>
</html>
