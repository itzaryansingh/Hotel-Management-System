<?php include "header.php" ?>

<div>
          <img src="carousel-1.jpg" class="contact_img">
          <div class="contact_text2">
          <h1 class="text-center  display-3 text-white"data-aos="fade-right" data-aos-duration="1400">BLOGS</h1>
          <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Blogs</li>
                        </ol>
                    </nav></div>
          </div>

<div class="container">
          <div class="row" style="margin-top:250px;" data-aos="fade-up" data-aos-duration="1200">
          <?php
          $qry="select * from addblog";
          $run=mysqli_query($con,$qry);
          while($data=mysqli_fetch_array($run)){
                    echo "<div class='col-md-4 my-5' data-aos='fade-up' data-aos-duration='1400'>
                     <div class='card'>
                        <img src='uploads/".$data['pic']."' class='card-img-top' style='height:200px;'>
                        <div class='card-body'>
                            <h5 class='card-title'>".$data['title']."</h5>
                            <a href='blog_detail.php?id=".$data['id']."' class='btn btn-warning'>Show More</a>
                        </div>
                    </div>
                </div>";
            }
            ?> 
          </div>
</div>

<?php include "footer.php" ?>