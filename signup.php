<?php include "dbcon.php"?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
    
<body>

<div class="container mt-5">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1400">
            <div class="col-md-6 pb-3 ">
                <div class="card rounded-3">
                    <div class="card-body">
                        <h4 class="card-title login mb-3" data-aos="fade-right" data-aos-duration="1400">Sign Up</h4>

                        <?php
                        if(isset($_POST['btnsignup']))
                        {
                                $username=mysqli_real_escape_string($con,$_POST['username']);
                                $email=mysqli_real_escape_string($con,$_POST['email']);
                                $password=mysqli_real_escape_string($con,$_POST['password']);
                                $confirmpassword=mysqli_real_escape_string($con,$_POST['confirmpassword']);
                                $qry="insert into login(username,email,password,currentdate) values('$username','$email','$password',now())";
                                
                                if ($password == $confirmpassword) {
                                    echo "Passwords match";
                                        
                                        if(mysqli_query($con,$qry)){
                                            echo "<script>alert('Thank You For Sign Up!')</script>";
                                            echo "<script> 
                                            window.location.href='login.php';
                                            </script>";
                                        }
                                        else{
                                            echo mysqli_error($con);
                                        }
                                    } 
                                    else {
                                        echo "<script>alert('Passwords do not match. Please try again.')</script>";
                                    }
                                
                        }
                        ?>

                        <form action="#" method="post">
                            <div class="mb-3">
                            <div class="form-floating">
                                          <input type="name" class="form-control rounded-3" name="username" placeholder="Username">
                                          <label>Username</label>
                                      </div>
                            </div>
                            <div class="mb-3">
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
                            <div class="mb-3">
                            <div class="form-floating">
                                          <input type="password" class="form-control rounded-3" name="confirmpassword" placeholder="Password">
                                          <label>Confirm Password</label>
                                      </div>
                            </div>
                    </div>
                    <div class="row">
                              <div class="col text-center pb-2">
                            <button type="submit" name="btnsignup" class="btn btn-warning btn_signin align-center" >Sign Up</button></div></div>
                            <div class="col text-center pt-3">
                                        <p>Old User?<a href="login.php"class="text-primary"> Login</a></p>
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