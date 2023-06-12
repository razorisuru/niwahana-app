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
// $result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id ASC");


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
    <title>WEB Application for Niwahana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="css/view.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <?php
	include("header.php");
?>
</head>

<body class="main-container" style="height: 200vh;">


    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navc">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="view.php">
                <img src="img/logo2.png" alt="Logo" width="40" class="d-inline-block align-text-top">
                Niwahana
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars" style="color:#fff; font-size:28px;"></i>
                    <!-- <i class="bi bi-list" style="color:#fff; font-size:28px;"></i> -->
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php if ($_SESSION['role'] == 'super_admin') {
                        echo"<li class='nav-item'>
                        <a class='nav-link text-light' href='admin/includes/home.php'>Admin Dashboard</a>
                    </li>";
                    }?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Gallery</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btnprofile dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome <?php echo $_SESSION['name'] ?>
                    </button>
                    <ul class="btnprofiledropdown dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profile" href="#">Profile
                                <i class="fa-solid fa-user"></i></a></li>
                        <li><a class="dropdown-item" href="logout.php"><span class="btnprofiledropdownlogout">Logout <i
                                        class="fa-solid fa-arrow-right-from-bracket"></i></span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-2 modi">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $_SESSION['name'] ?>'s Profile <i
                            class="fa-solid fa-user"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/logo.png" class="img-thumbnail float-end" width="80" alt="...">
                    Full Name : <?php echo $_SESSION['name'] ?><br>
                    User Name : <?php echo $_SESSION['valid'] ?><br>
                    E-Mail : <?php echo $_SESSION['email'] ?><br><br>
                    <div class="text-light rounded-1 modalcost" id="sqftmodal"></div>
                    <div class="text-light rounded-1 modalcost" id="modalcost"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btnclose float-start">Print</button>
                    <button type="button" class="btn btnclose" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- phase 1 -->
    <div class="container main-container">
        <div class="card mt-5 p1css cardc">
            <div class="card-header">
                <h4 class="text-center">Measures</h4>
            </div>
            <div class="card-body">
                <form id="frm1" method="post" action="">
                    <section class="sec1 input-group">
                        <div class="input-group-text">Living Room&nbsp;</div>
                        <input type="number" class="form-control" id="i1" placeholder="Quantity">
                        <label for="l1"></label>
                        <input type="number" class="form-control" id="l1" placeholder="Length">
                        <label for="w1"></label>
                        <input type="number" class="form-control" id="w1" placeholder="Width">
                        <p class="ilw1 po" id="ilw1"></p>
                    </section>

                    <section class="sec2 input-group mt-2">
                        <div class="input-group-text">Bedroom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <input type="number" class="form-control" id="i2" placeholder="Quantity">
                        <label for="l2"></label>
                        <input type="number" class="form-control" id="l2" placeholder="Length">
                        <label for="w2"></label>
                        <input type="number" class="form-control" id="w2" placeholder="Width">
                        <p class="ilw2 po" id="ilw2"></p>
                    </section>

                    <section class="sec3 input-group mt-2">
                        <div class="input-group-text">Dining Room</div>
                        <input type="number" class="form-control" id="i3" placeholder="Quantity">
                        <label for="l3"></label>
                        <input type="number" class="form-control" id="l3" placeholder="Length">
                        <label for="w3"></label>
                        <input type="number" class="form-control" id="w3" placeholder="Width">
                        <p class="ilw3 po" id="ilw3"></p>
                    </section>

                    <section class="sec4 input-group mt-2">
                        <div class="input-group-text">Bath Room &nbsp;&nbsp;</div>
                        <input type="number" class="form-control" id="i4" placeholder="Quantity">
                        <label for="l4"></label>
                        <input type="number" class="form-control" id="l4" placeholder="Length">
                        <label for="w4"></label>
                        <input type="number" class="form-control" id="w4" placeholder="Width">
                        <p class="ilw4 po" id="ilw4"></p>
                    </section>
                    <!-- <button class="btn" type="button" onclick="multiply()">Calculate</button> -->
                    <div class="mx-auto p-4 mt-2 me-0 float-end">
                        <input class="btn btnprofile" type="submit" name="submit" value="Enter Values To The Database" />
                    </div>
                </form>
                <div class="text-bg-secondary rounded-2">
                    <div class="ms-2" id="sqft"></div>
                    <div class="ms-2" id="sqft1"></div>
                    <div class="ms-2" id="cost"></div>
                </div>

            </div>
        </div>

        <!-- phase 2 -->
        <div class="card mt-5 cardc p1css">
            <div class="card-header">
                <h4 class="text-center">Architecture Theme</h4>
            </div>
            <div class="card-body">
                <div class="phase2">
                    <div class="row container-fluid">
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="img/2.1.png" width="400" class="img-fluid image-box" alt="Image 1"
                                    onclick="updateTotal(0.1)">
                                <h4 class="mt-4">Ex 4</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="img/2.2.png" width="400" class="img-fluid image-box" alt="..."
                                    onclick="updateTotal(0.2)">
                                <h4 class="mt-4">Ex 4</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="img/2.3.png" width="400" class="img-fluid image-box" alt="..."
                                    onclick="updateTotal(0.3)">
                                <h4 class="mt-4">Ex 4</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="img/2.4.png" width="400" class="img-fluid image-box" alt="..."
                                    onclick="updateTotal(0.4)">
                                <h4 class="mt-4">Ex 4</h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p>Final cost : <span id="fcost">0.00</span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- phase 3 -->
        <div class="card mt-5 cardc p1css">
            <div class="card-header">
                <h4 class="text-center">Type of Lands</h4>
            </div>
            <div class="card-body">
                <div class="phase3">
                    <div class="row container-fluid">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="img/3.1.png" width="300" class="img-fluid image-box" alt=""
                                    onclick="updateTotal2(0.1)">
                                <h4 class="mt-4">Flat Land</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="img/3.2.png" width="300" class="img-fluid image-box" alt="..."
                                    onclick="updateTotal2(0.1)">
                                <h4 class="mt-4">Upper Slope</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="img/3.3.png" width="300" class="img-fluid image-box" alt="..."
                                    onclick="updateTotal2(0.2)">
                                <h4 class="mt-4">Lower Slope</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p>Final cost : <span id="fcost2">0.00</span></p>

                    </div>
                </div>
            </div>
        </div>

        <!-- phase 4 -->
        <div class="card mt-5 cardc p1css">
            <div class="card-header">
                <h4 class="text-center">Contract Type</h4>
            </div>
            <div class="card-body">
                <div class="phase4">
                    <div class="container">
                        <form>
                            <div class="row">
                                <div class="col-lg-3"><label class="radio-inline">
                                        <input type="radio" name="optradio" checked onclick="updateTotal3(0.1)">
                                        <b>Daily
                                            Paid</b><br>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore sequi est,
                                        quae corporis cumque! Odit, necessitatibus?
                                    </label></div>
                                <div class="col-lg-3"><label class="radio-inline">
                                        <input type="radio" name="optradio" onclick="updateTotal3(0.2)"> <b>Contract
                                        </b><br>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore sequi est,
                                        quae corporis cumque! Odit, necessitatibus?
                                    </label></div>
                                <div class="col-lg-3"><label class="radio-inline">
                                        <input type="radio" name="optradio" onclick="updateTotal3(0.3)"> <b>Piece
                                            Work</b> <br>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore sequi est,
                                        quae corporis cumque! Odit, necessitatibus?
                                    </label>
                                </div>
                                <div class="col-lg-3"><label class="radio-inline">
                                        <input type="radio" name="optradio" onclick="updateTotal3(0.4)"> <b>Through
                                            Supervisor</b> <br>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore sequi est,
                                        quae corporis cumque! Odit, necessitatibus?
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Final cost : <span id="fcost3">0.00</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>









    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="app.js"></script>
    <script src="insert.js"></script>

</body>

</html>