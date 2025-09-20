<?php include "adminheader.php"?>

<div class="container" style="margin-top:50px ;">
<div class="text-center">
                              <h1 class="section-title2 text-center text-warning text-uppercase" data-aos="fade-down" data-aos-duration="1400">Bookings</h1>
                    </div><hr>
<table class="table" data-aos="fade-up" data-aos-duration="1400">
          <thead>
        <tr>
            <th>Name</th>
            <th>Phone No.</th>
            <th>Email</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Adults</th>
            <th>Child</th>
            <th>Room</th>
            <th>Booking Date/Time</th>
        </tr>
    </thead>
    <tbody>
    <?php
          $qry="select * from book";
          $run=mysqli_query($con,$qry);
          while($data=mysqli_fetch_array($run)){
          echo "<tr>
            <td>".$data['name']."</td>
            <td>".$data['phone']."</td>
            <td>".$data['email']."</td>
            <td>".$data['checkin']."</td>
            <td>".$data['checkout']."</td>
            <td>".$data['adults']."</td>
            <td>".$data['child']."</td>
            <td>".$data['room']."</td>
            <td>".$data['currentdate']."</td>
        </tr>";
            }
            ?> 
    </tbody>
</table>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>