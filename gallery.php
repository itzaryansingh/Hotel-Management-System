<?php include "header.php" ?>

<div>
          <img src="carousel-1.jpg" class="contact_img">
          <div class="contact_text2">
          <h1 class="text-center  display-3 text-white" data-aos="fade-right" data-aos-duration="1400">GALLERY</h1>
          <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
                        </ol>
                    </nav></div>
          </div>


<div class="container mt-5">
      <div class="text-center" data-aos="fade-up" data-aos-duration="1400">
                    <h6 class="section-title text-center text-warning text-uppercase">Gallery</h6>
                    <h1 class="mb-5">Explore Our <span class="text-warning text-uppercase">Gallery</span></h1>
                </div>

<div class="gallery mb-5" data-aos="fade-up" data-aos-duration="1400"> 
        <div class="image">
          <img src="gallery/presidential_suite.jpg" alt="Image 1" style="height:185px;" onclick="openModal('gallery/presidential_suite.jpg', 'Presidential Suite')">
        </div>
        <div class="image">
          <img src="gallery/King_room1.jpg" alt="Image 2" style="height:185px;" onclick="openModal('gallery/King_room1.jpg', 'King Room')">
        </div>
        <div class="image">
          <img src="gallery/queen_room1.jpg" alt="Image 3"style="height:185px;"  onclick="openModal('gallery/queen_room1.jpg', 'Queen Room')">
        </div>
        <div class="image">
          <img src="gallery/SP1.jpeg" alt="Image 4" style="height:185px;" onclick="openModal('gallery/SP1.jpeg','Scenic Hotel')">
        </div>
        <div class="image">
          <img src="gallery/SP2.jpeg" alt="Image 5" style="height:185px;" onclick="openModal('gallery/SP2.jpeg','Room')">
        </div>
        <div class="image">
          <img src="gallery/SP3.jpg" alt="Image 6" style="height:185px;" onclick="openModal('gallery/SP3.jpg','Swimming Pool')">
        </div>
        <div class="image">
          <img src="gallery/child_room1.jpg" alt="Image 7" style="height:185px;" onclick="openModal('gallery/child_room1.jpg', 'Children Room')">
        </div>
        <div class="image">
          <img src="gallery/double_room1.jpg" alt="Image 8" style="height:185px;" onclick="openModal('gallery/double_room1.jpg', 'Double Room')">
        </div>
        <div class="image">
          <img src="gallery/single_room1.jpg" alt="Image 9" style="height:185px;" onclick="openModal('gallery/single_room1.jpg', 'Single Room')">
        </div>
      </div>
</div>

      <div id="modal" class="modal" style="margin-top: 70px;">
        <span class="close" onclick="closeModal()">×</span>
        <img id="modal-image" src="" alt="Modal Image">
        <div id="caption" class="caption"></div>
      </div>



<?php include "footer.php" ?>