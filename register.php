<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="homee">
    <?php
include("connection.php");
include("header.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-danger p-1 fs-3 text-uppercase alert alert-danger rounded-5 text-center'><br/>All fields should be filled. Either one or many fields are empty.<br/><br/><a class='btn btn-primary' href='register.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
	
	} else {
		mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-success p-4 fs-3 text-uppercase alert alert-success rounded-5 text-center'><br/>Registration successfully<br/><br/><a class='btn btn-primary' href='login.php'>Login <i
        class='fa-sharp fa-solid fa-arrow-right-to-bracket'></i></a><br/><br/></p></div></div>";
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
                                <input type="text" name="name" class="form-control" placeholder="Enter Username">
                                <label>Full Name</label>
                            </div>

                            <div class="form-floating mt-2">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                <label>Email</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                <label>User Name</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter Password">
                                <label>Password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mt-3 mb-4">
                            <a href="#!" style="text-decoration: none;" class="" data-bs-toggle="modal"
                                            data-bs-target="#privacy">Aggrement</a>
                                
                            </div>
                            <br>
                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btnlogin btn-block mt-4 mb-4">
                                Sign up <i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i>
                            </button>
                            <a href="index.php" class="btn btnlogin btn-block mt-4 mb-4">
                                Go Back to Login <i class="fa-solid fa-backward fa-beat"></i>
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

    <div class="modal fade" id="privacy" tabindex="-1" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="privacy">Privacy policy</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ducimus voluptatibus itaque,
                    aspernatur laborum odit vitae eveniet neque odio nesciunt, similique reprehenderit minus enim non
                    architecto nisi necessitatibus earum sit repellendus velit in quod. Aliquam quas, repudiandae
                    debitis neque atque aliquid qui ab consequatur veritatis quis est incidunt sapiente facilis.
                    Voluptas beatae pariatur aut explicabo, illum cupiditate sequi delectus dolorum amet. Necessitatibus
                    veritatis ex vitae asperiores reiciendis totam ratione nesciunt porro, quae, rem eveniet aut
                    doloremque delectus saepe assumenda at itaque quia quaerat harum. Eaque odit laudantium quo
                    cupiditate, harum ea consectetur neque, dignissimos numquam repudiandae laborum nesciunt eligendi
                    dolorum similique deserunt nobis et. In voluptate dolor optio eos quasi unde quod nesciunt enim ea
                    inventore dolores, molestias ipsum earum quam sunt autem perferendis veniam possimus mollitia error
                    quo delectus? Itaque libero, quisquam voluptatibus, nemo nulla ab sint nobis hic recusandae
                    laudantium assumenda repudiandae quibusdam ipsa nostrum natus minus ea magnam explicabo atque
                    ratione ut debitis tempore exercitationem earum! Assumenda quidem accusamus iusto eum, reprehenderit
                    error distinctio beatae doloremque cupiditate quia tempore molestias fugit, dolorum saepe explicabo
                    rerum? Aliquid quibusdam sequi tempore ea suscipit nulla maxime quaerat ipsam commodi labore ducimus
                    similique iste qui, aspernatur animi explicabo corporis vel. Eveniet. <br><br>
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                     />
                                <label class="form-check-label" for="form2Example33">
                                    Accept
                                </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Accept</button> -->
                </div>
            </div>
        </div>
    </div>






    <?php
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>