<?php include "header.php" ?>

<div class="container-fluid py-5 ">
          <div class="container">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="1400">
                              <h6 class="section-title1 text-center text-warning text-uppercase" data-aos="fade-right" data-aos-duration="1200">Booking</h6>
                              <h1 class="mb-5"data-aos="fade-right" data-aos-duration="1200">Book Your<span class="text-warning"> Room</span></h1>
                    </div>
                    <?php
                        if(isset($_POST['btnbook']))
                        {
                                $name=mysqli_real_escape_string($con,$_POST['name']);
                                $phone=mysqli_real_escape_string($con,$_POST['phone']);
                                $email=mysqli_real_escape_string($con,$_POST['email']);
                                $checkin=mysqli_real_escape_string($con,$_POST['checkin']);
                                $checkout=mysqli_real_escape_string($con,$_POST['checkout']);
                                $adults=mysqli_real_escape_string($con,$_POST['adults']);
                                $child=mysqli_real_escape_string($con,$_POST['child']);
                                $room=mysqli_real_escape_string($con,$_POST['room']);
                                $qry="insert into book(name,phone,email,checkin,checkout,adults,child,room,currentdate) values('$name','$phone','$email','$checkin','$checkout','$adults','$child','$room',now())";
                                if(mysqli_query($con,$qry))
                                {
                                    echo "<script>alert('Thank You For Booking!')</script>";
                                }
                                else
                                {
                                    echo mysqli_error($con);
                                }
                        }
                        ?>
                    <form action="#" method="post">
                              <div class="row g-3" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="col-md-6">
                                                  <div class="form-floating">
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                                            <label>Your Name</label>
                                                  </div>
                                        </div>
                                        <div class="col-md-6">
                                                  <div class="form-floating">
                                                            <input type="tel" class="form-control" id="name" name="phone" placeholder="Your PhoneNo.">
                                                            <label>Your PhoneNo.</label>
                                                  </div>
                                        </div>
                                        <div class="col-12">
                                                  <div class="form-floating">
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                                            <label>Your Email</label>
                                                  </div>
                                        </div>
                                        <div class="col-6">
                                                  <div class="form-floating">
                                                            <input type="date" class="form-control" name="checkin" id="checkin" placeholder="Check In">
                                                            <label>Check In</label>
                                                  </div>
                                        </div>
                                        <div class="col-6">
                                                  <div class="form-floating">
                                                            <input type="date" class="form-control" name="checkout" id="checkout" placeholder="Check Out">
                                                            <label>Check Out</label>
                                                  </div>
                                        </div>
                                        <div class="col-6">
                                                  <div class="form-floating">
                                                  <select class="form-control bg-white text-dark" name="adults" id="adults">
                                                  <option value="None">No. Of Adults</option>
                                                  <option value="0">0</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                        </select>
                                                  </div>
                                        </div>
                                        <div class="col-6">
                                                  <div class="form-floating">
                                                  <select class="form-control bg-white text-dark" name="child" id="child">
                                                  <option value="None">No. Of Children</option>
                                                  <option value="0">0</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                        </select>
                                                  </div>
                                        </div>
                                        <div class="col-12">
                                                  <div class="form-floating">
                                                  <select class="form-control bg-white text-dark" name="room" id="room">
                                                  <option value="None">--Choose A Room--</option>
                                                  <option value="Presidential Suite">Presidential Suite</option>
                                                  <option value="King Room">King Room</option>
                                                  <option value="Queen Room">Queen Room</option>
                                                  <option value="Double Room">Double Room</option>
                                                  <option value="Single Room">Single Room</option>
                                                  <option value="Children Room">Children Room</option>
                                        </select>
                                                  </div>
                                        </div>
                                        <div class="col-12">
                                                  <button class="btn contact_btn btn-warning h-10" name="btnbook" type="submit" style="width: 80px">Book</button>
                                        </div>
                              </div>
                    </form>
          </div>
</div>
</div>
</div>
</div>

<?php include "footer.php" ?>