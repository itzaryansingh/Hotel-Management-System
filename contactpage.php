<?php include "header.php" ?>
<div>
          <img src="carousel-1.jpg" class="contact_img">
          <div class="contact_text" data-aos="fade-up" data-aos-duration="1400">
          <h1 class="text-center display-3 text-white">CONTACT US</h1>
          <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav></div>
          </div>

<!-- Contact Start -->
        <div class="container-fluid py-5 pt-5">
          <div class="container">
              <div class="text-center" data-aos="fade-up" data-aos-duration="1400">
                  <h6 class="section-title text-center text-warning text-uppercase">Contact Us</h6>
                  <h1 class="mb-5">Contact For Any<span class="text-warning"> Query</span></h1>
              </div>
              <div class="row g-4" data-aos="fade-up" data-aos-duration="1400">
                  <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55540.63738741321!2d74.98920694034517!3d29.537052574608037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39114db0893d723d%3A0xc51125be998c4f95!2sSirsa%2C%20Haryana%20125055!5e0!3m2!1sen!2sin!4v1721627560076!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                  </div>
                  <div class="col-md-6">
                      <div>
                        
                        <?php
                        if(isset($_POST['btncontact']))
                        {
                                $name=mysqli_real_escape_string($con,$_POST['name']);
                                $phone=mysqli_real_escape_string($con,$_POST['phone']);
                                $email=mysqli_real_escape_string($con,$_POST['email']);
                                $subject=mysqli_real_escape_string($con,$_POST['subject']);
                                $message=mysqli_real_escape_string($con,$_POST['message']);
                                $qry="insert into tbcontact(name,phone,email,subject,message,currentdate) values('$name','$phone','$email','$subject','$message',now())";
                                if(mysqli_query($con,$qry))
                                {
                                    echo "<script>alert('Thank You For Contact Us!')</script>";
                                }
                                else
                                {
                                    echo mysqli_error($con);
                                }
                        }
                        ?>

                          <form action="#" method = "post">
                              <div class="row g-3" data-aos="fade-up" data-aos-duration="1400">
                                  <div class="col-md-6">
                                      <div class="form-floating">
                                          <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                          <label>Your Name</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-floating">
                                          <input type="tel" class="form-control" id="name" name="phone" placeholder="Your PhoneNo.">
                                          <label >Your PhoneNo.</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                          <label >Your Email</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                          <label >Subject</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                          <label >Message</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <button class="btn contact_btn btn-primary w-100 h-10" name= "btncontact" type="submit">Send Message</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
            <!-- contact end -->


<?php include "footer.php" ?>