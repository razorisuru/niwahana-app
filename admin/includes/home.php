<?php session_start(); ?>
<!-- Header -->
<?php include "../header.php"?>

<body style="background: url(../../img/bg.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;">


    <?php
  if ($_SESSION['role'] == 'super_admin'){
?>
    <div class="container">
        <h1 class="text-center">ADMIN DASHBOARD</h1>
        <div class="row ">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <a href="../../register.php" class='btn btn-outline-dark '> <i class="bi bi-person-plus"></i> Register A
                    New User</a>
                <a href="../../index.php" class="btn btn-warning "><i class="bi bi-house-door-fill"></i> HOME </a>
                <a class="btn btn-danger" href='../../logout.php'><i class="bi bi-box-arrow-left"></i> Logout</a>
            </div>



        </div>


        <table class="table table-primary rounded-4 mt-5 table-hover tablebg">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col" colspan="3" class="text-center">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php
            $query="SELECT * FROM login";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $name = $row['name'];        
              $username = $row['username'];         
              $role = $row['role'];        

              echo "<tr class='table-warning'>";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$username}</td>";
              echo " <td >{$role} </td>";

              echo " <td class=''> <a href='view.php?user_id={$id}' class='btn btn-sm btn-outline-success'> <i class='bi bi-eye'></i> </a> </td>";

              echo " <td class='' > <a href='update.php?edit&user_id={$id}' class='btn btn-sm btn-outline-secondary'><i class='bi bi-pencil'></i> </a> </td>";

              echo " <td  class=''>  <a href='delete.php?delete={$id}'\" onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-sm btn-outline-danger'> <i class='bi bi-trash'></i> </a> </td>";
              echo " </tr> ";
                  }  
                ?>
                </tr>
            </tbody>
        </table>

        <table class="table table-primary rounded-4 mt-5 table-hover tablebg">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Quantity1</th>
                    <th scope="col">Length1</th>
                    <th scope="col">Width1</th>
                    <!-- <th scope="col" colspan="3" class="text-center">Operations</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php
            $query="SELECT * FROM details2";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $name = $row['Name'];        
              $email = $row['email'];         
              $Quantity1 = $row['Quantity1'];        
              $Length1 = $row['Length1'];        
              $Width1 = $row['Width1'];        

              echo "<tr class='table-warning'>";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$email}</td>";
              echo " <td >{$Quantity1} </td>";
              echo " <td >{$Length1} </td>";
              echo " <td >{$Width1} </td>";

              // echo " <td class=''> <a href='view.php?user_id={$id}' class='btn btn-sm btn-outline-success'> <i class='bi bi-eye'></i> </a> </td>";

              // echo " <td class='' > <a href='update.php?edit&user_id={$id}' class='btn btn-sm btn-outline-secondary'><i class='bi bi-pencil'></i> </a> </td>";

              // echo " <td  class=''>  <a href='delete.php?delete={$id}'\" onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-sm btn-outline-danger'> <i class='bi bi-trash'></i> </a> </td>";
              // echo " </tr> ";
                  }  
                ?>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- a BACK button to go to the index page -->
    <div class="container text-center mt-5">

        <div>

            <?php 
    }else {
      header('Location: ../../view.php');
    }
  ?>

            <!-- Footer -->
            <?php include "../footer.php" ?>
</body>