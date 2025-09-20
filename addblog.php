<?php include "adminheader.php"?>

<div class="container-fluid py-5 pt-5">
          <div class="container">
              <div class="text-center" data-aos="fade-down" data-aos-duration="1400">
                  <h1 class="mb-5 mt-5">Add<span class="text-warning"> Blog</span></h1>
              </div>
                  <div class="col" data-aos="fade-up" data-aos-duration="1400">
                      <div>
                        
                        <?php
                        if(isset($_POST['btnblog']))
                        {
                                $title=mysqli_real_escape_string($con,$_POST['title']);
                                $submit_by=mysqli_real_escape_string($con,$_POST['submit_by']);
                                $pic=$_FILES['pic']['name'];
                                $tpic=$_FILES['pic']['tmp_name'];
                                move_uploaded_file($tpic,"uploads/".$pic);
                                $message=mysqli_real_escape_string($con,$_POST['message']);
                                $qry="insert into addblog(title,submit_by,pic,message,currentdate) values('$title','$submit_by','$pic','$message',now())";
                                if(mysqli_query($con,$qry))
                                {
                                    echo "<script>alert('Blog Inserted!')</script>";
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
                                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                          <label>Title</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <input type="text" class="form-control" id="submitby" name="submit_by" placeholder="Submit By">
                                          <label >Submit By</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <input type="file" class="form-control" name="pic" id="pic" placeholder="Pic">
                                          <label >Image</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <textarea class="form-control" name="message" placeholder="Description" id="message" style="height: 150px"></textarea>
                                          <label >Description</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <button class="btn contact_btn btn-primary h-10" name= "btnblog" type="submit">Add Blog</button>
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
