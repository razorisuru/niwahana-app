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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link href="css/view.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<?php
	include("header.php");
?>
</head>

<body style="background: url(img/bg.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;">
	
	
		
	

	<div class="mt-5 row container">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 ">
	
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
					<p class="text-bg-light text-center rounded-2">Final cost : <span id="fcost3">0.00</span></p>
					</div>
					<div class=" d-flex float-end">
						<a class="btn btn-danger" href="logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a>
					</div>
					
			</div>	
			
		</nav>

		









	
	<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10  text-center">
			<h3 class="text-center p-2 text-light mt-3 rounded-3 text-bg-success ">WEB Application for Niwahana</h3>  
			</div>
			<div class="col-sm-1"></div>
		</div>

	<div class="row 1stphase">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
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
							<div class="text-bg-light rounded-2" id="sqft"></div>
                        	<div class="text-bg-light rounded-2" id="sqft1"></div>
							<div class="text-bg-light rounded-2" id="cost"></div>
                            </div>
                            <button onclick="sendData()">Send Data</button>
                            <div id="response"></div>
                      </div>
                    </div>
                </div>
		</div>
		<div class="col-sm-1"></div>
	</div>
	

	<div class="row mt-5 2ndphase">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
		<div class="card icd">
                    <div class="card-header">
                        <h4 class="text-center">Architecture Theme</h4>
                    </div>
                    <div class="card-body">
                      <div class="phase2">
                          <div class="row container-fluid">
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/2.1.png" class="img-fluid image-box" alt="Image 1" onclick="updateTotal(0.1)">
									
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/2.2.png" class="img-fluid image-box" alt="..." onclick="updateTotal(0.2)">
									
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/2.3.png" class="img-fluid image-box" alt="..." onclick="updateTotal(0.3)">
									
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<img src="img/2.4.png" class="img-fluid image-box" alt="..." onclick="updateTotal(0.4)">
									
								</div>
							</div>
						</div>
						
					</div>
					
                            <div class="text-center card-footer">
							<p>Final cost : <span id="fcost">0.00</span></p>
							</div>
                            
                      		</div>
                    </div>
                </div>
		</div>
		<div class="col-sm-1"></div>
	</div>

	<div class="row mt-5 3rdphase">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
		<div class="card icd">
                    <div class="card-header">
                        <h4 class="text-center">Type of Lands</h4>
                    </div>
                    <div class="card-body">
                      <div class="phase3">
                          <div class="row container-fluid">
							<div class="col-md-4">
								<div class="text-center">
									<img src="img/3.1.png" class="img-fluid image-box" alt="" onclick="updateTotal2(0.0)">
									<p>Flat Land</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="text-center">
									<img src="img/3.2.png" class="img-fluid image-box" alt="..." onclick="updateTotal2(0.1)">
									<p>Upper Slope</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="text-center">
									<img src="img/3.3.png" class="img-fluid image-box" alt="..." onclick="updateTotal2(0.2)">
									<p>Lower Slope</p>
								</div>
							</div>
						  </div>
						
						</div>
						
								<div class="text-center card-footer">
								<p>Final cost : <span id="fcost2">0.00</span></p>
								</div>
								
								  </div>
						</div>
					</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	
		<div class="row mt-5 4thphase">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
		<div class="card icd">
                    <div class="card-header">
                        <h4 class="text-center">Employment Method</h4>
                    </div>
                    <div class="card-body">
                      <div class="phase4">
                          <div class="row container-fluid">
							<div class="col-md-3">
								<div class="text-center">
									<button class="btn btn-primary" onclick="updateTotal3(0.1)">Daily Paid</button>
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<button class="btn btn-primary" onclick="updateTotal3(0.2)">Contract Workers</button>
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<button class="btn btn-primary" onclick="updateTotal3(0.3)">PieceWork</button>
								</div>
							</div>
							<div class="col-md-3">
								<div class="text-center">
									<button class="btn btn-primary" onclick="updateTotal3(0.4)">Through Supervisor</button>
								</div>
							</div>
						  </div>
						
						</div>
						
								<div class="text-center card-footer">
								<!-- <p>Final cost : <span id="fcost3">0.00</span></p> -->
								</div>
								
								  </div>
						</div>
					</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
		

	<?php
	include("footer.php");
?>
	<script src="app.js"></script>
	
</body>
</html>
