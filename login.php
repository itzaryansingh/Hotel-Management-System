<?php include "dbcon.php"?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body style="margin-top: 150px;">
    
<div class="container mt-5 ">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1400">
        <div class="col-md-6 pb-3 ">
            <div class="card rounded-3">
                <div class="card-body">
                    <h4 class="card-title login mb-3" data-aos="fade-right" data-aos-duration="1400">Login</h4>
                    <?php
                    if (isset($_POST['btnlogin'])) {
                    
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $password = mysqli_real_escape_string($con, $_POST['password']);
                        $qry = "select * from login where email = '$email' and password='$password'";
                        $run = mysqli_query($con, $qry);
                        if (mysqli_num_rows($run) > 0) {
                            echo "<script> 
                                window.location.href='dashboard.php';
                                </script>";
                        } else {
                            echo "<script> alert('Username or Password Invalid!')</script>";
                            echo mysqli_error($con);
                        }
                    }
                    ?>
                    <form action="#" method="post">
                        <div class="mb-3" >
                            <div class="form-floating">
                                <input type="email" class="form-control rounded-3" name="email" placeholder="Username">
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="password" class="form-control rounded-3" name="password" placeholder="Password">
                                <label>Password</label>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col text-center pb-2">
                        <button type="submit" class="btn btn-warning align-center" name="btnlogin">Sign In</button>
                    </div>
                </div>
                <div class="col text-center pt-3">
                    <p>New User?<a href="signup.php" class="text-primary"> Create Account</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>