<?php session_start(); ?>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css?v=<?php echo time(); ?>">
</head>

<body class="homee">
    <?php
include("connection.php");
include("header.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-danger p-5 fs-3 text-uppercase alert alert-danger rounded-5 text-center'><br/>Either username or password field is empty.<br/><br/><a class='btn btn-primary' href='login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
		
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
			$_SESSION['email'] = $row['email'];
		} else {
			echo "<div class='h-100 d-flex align-items-center justify-content-center bgg'><div><p class='text-danger p-5 fs-3 text-uppercase alert alert-danger rounded-5 text-center'><br/>Invalid username or password.<br/><br/><a class='btn btn-primary' href='login.php'><i class='bi bi-house-door-fill'></i> Go back</a><br/><br/></p></div></div>";
	
		}
    
		
		if(isset($_SESSION['valid'])) {
        if($_SESSION['role'] == "super_admin") {
			    header('Location: view.php');	
        }else{
			    header('Location: view.php');	
        }		
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
                                <img src="img/indexbg2.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form name="form1" method="post" action="">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <!-- <i class="fa-solid fa-house fa-2x me-3" style="color: #ff6162;"></i> -->
                                            <img src="img/logo2.png" alt="login form" class="img-fluid" width="50" />
                                            <span class="h1 fw-bold ">Niwahana Web App</span>
                                        </div>
                                        <div class="error"></div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Enter Username">
                                            <label>Username</label>
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter Password">
                                            <label>Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btnlogin btn-lg btn-block mt-2" type="submit"
                                                name="submit">Login <i
                                                    class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i></button>
                                        </div>

                                        <a class="small text-muted" data-bs-toggle="modal"
                                            data-bs-target="#forgotpassword" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="register.php" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted" data-bs-toggle="modal"
                                            data-bs-target="#terms">Terms of use.</a>
                                        <a href="#!" class="small text-muted" data-bs-toggle="modal"
                                            data-bs-target="#privacy">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="forgotpassword" tabindex="-1" aria-labelledby="forgotpassword" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="forgotpassword">Forgot Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    RELAX AND TRY TO REMEMBER YOUR PASSWORD!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="terms" tabindex="-1" aria-labelledby="terms" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="terms">Terms of use</h1>
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
                    similique iste qui, aspernatur animi explicabo corporis vel. Eveniet.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Accept</button>
                </div>
            </div>
        </div>
    </div>

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
                    similique iste qui, aspernatur animi explicabo corporis vel. Eveniet.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Accept</button>
                </div>
            </div>
        </div>
    </div>



    <?php
}
?>

    <?php
	include("footer.php");
?>
</body>

</html>