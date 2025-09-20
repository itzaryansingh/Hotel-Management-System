<?php include 'header.php'?>

    <div class="container">
        <div class="row " style="margin-top: 60px;" data-aos="fade-up" data-aos-duration="1400">
            <?php
            $id=mysqli_real_escape_string($con,$_GET['id']);
            $qry="select * from addblog where id='$id'";
            $run=mysqli_query($con,$qry);
            while($data=mysqli_fetch_array($run))
            {
                echo "<div class='col-lg-12 mt-3 blog-clr' data-aos='fade-up' data-aos-duration='1400'>
                <img src='uploads/".$data['pic']." 'width='100%' style='height
                : 500px;'>
                <h3 class='my-5 text-center text-warning'>".$data['title']."</h3>
                <p class='text-center '><b>".$data['message']."</b></p>
                <p class='text-end fs-6 mt-5'><i class='la la-caret-right'></i>".$data['submit_by']."  ".$data['currentdate']."</p>

                </div>";
            }
            ?>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>