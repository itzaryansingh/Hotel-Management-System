 <!-- footer -->
 <div id="footer" class="container-fluid">
  <div class="row pb-3">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <h1 class="text-center fs-2 pt-5 fl"><i class="fa fa-duotone fa-hotel fa-lg pe-1"></i><span class="text-warning ">SCENIC</span>HOTEL</h1>
      <br><br><a href="login.php" class="ms-4"><i class="fa fa-light fa-lock fa-sm" style="color: #f7f7f8;"></i><span class="text-white ms-2">Admin Login</span></a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <h5 class="text-warning  pt-5 ps-4">Contact Us</h5>
      <p class=" text-white ps-4 pt-2"><i class="fa fa-location-dot pe-1"></i> Sirsa,Haryana</p>
      <p class=" text-white ps-4"><i class="fa fa-solid fa-phone pe-1"></i> 1234567890</p>
      <p class=" text-white ps-4"><i class="fa fa-solid fa-envelope pe-1"></i> scenichotel@gmail.com</p>
      <a href="" class="text-white ps-4 "><i class="fa fa-brands fa-x-twitter fa-xl"></i></a>
      <a href="" class="text-white ps-4 "><i class="fa fa-brands fa-instagram fa-xl"></i></a>
      <a href="" class="text-white ps-4 "><i class="fa fa-brands fa-facebook fa-xl"></i></a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <h5 class="text-warning  pt-5 ps-4">Facilities</h5>
      <span class="ps-4 pt-2 text-white"><i class="las la-angle-right"></i>Swimming Pool</span><br>
      <span href="" class="ps-4 text-white"><i class="las la-angle-right"></i>SPA</span><br>
      <span href="" class="ps-4 text-white"><i class="las la-angle-right"></i>Free WiFi</span><br>
      <span href="" class="ps-4 text-white"><i class="las la-angle-right"></i>Guided Tours</span><br>
      <span href="" class="ps-4 text-white"><i class="las la-angle-right"></i>And More...</span>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <h5 class="text-warning  pt-5 ">We Are Global</h5>
      <img src="https://demoxml.com/html/hotelbooking/img/footer-map-two.jpg" alt="" class="pt-2 imgf">
    </div>
  </div>
  <div class="row ">
  <hr><p class="text-center text-white ">© 2024 ScenicHotel. All rights reserve</p>
  </div>
</div>

<!-- footer ends -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="bootstrap.bundle.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
    $(this).text(Math.ceil(now));
}
});
});

});
  </script>
  <script>
    $('.clients-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 450,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 2
            },
            1200: {
                items: 2
            },
            1920: {
                items: 2
            }
        }
    });
</script>
<script>
        function openModal(imageSrc, imageAlt) {
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modal-image');
        const captionText = document.getElementById('caption');

        modal.style.display = 'block';
        modalImg.src = imageSrc;
        modalImg.alt = imageAlt;
        captionText.innerHTML = imageAlt;
        }

        function closeModal() {
        const modal = document.getElementById('modal');
        modal.style.display = 'none';
        }

      </script>

</html>
