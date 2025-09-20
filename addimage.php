<?php include "adminheader.php"?>

<div class="container-fluid py-5 pt-5">
          <div class="container">
              <div class="text-center" data-aos="fade-down" data-aos-duration="1400">
                  <h1 class="mb-5 mt-5">Add<span class="text-warning"> Image</span></h1>
              </div>
                  <div class="col" data-aos="fade-up" data-aos-duration="1400">
                      <div>
                        
                        <?php
                        if(isset($_POST['btnimg']))
                        {
                                $image=$_FILES['image']['name'];
                                $timage=$_FILES['image']['tmp_name'];
                                move_uploaded_file($timage,"gallery/".$image);
                                $qry="insert into addimg(image,currentdate) values('$image',now())";
                                if(mysqli_query($con,$qry))
                                {
                                    echo "<script>alert('Image Inserted!')</script>";
                                }
                                else
                                {
                                    echo mysqli_error($con);
                                }
                        }
                        ?>

                          <form action="#" method = "post" enctype="multipart/form-data">
                              <div class="row g-3">
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <input type="file" class="form-control" name="image" id="pic" placeholder="Pic">
                                          <label >Image</label>
                                      </div>
                                  </div>
                                  
                                  <div class="col-12">
                                      <button class="btn contact_btn btn-primary h-10" name= "btnimg" type="submit">Add Image</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
