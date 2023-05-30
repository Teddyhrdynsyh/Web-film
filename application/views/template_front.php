<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url()?>assets/front/images/c.png">

    <title>MOVIESTATION</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/owl.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!---->
  </head>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <?php $this->load->view('nav_menu/menu_front.php') ?>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="page" class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="featured-games header-text">
                <div class="heading-section">
                  <h4>Trending Movies</h4>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner rounded-5">
                    <div class="carousel-item active">
                      <img src="<?php echo base_url()?>assets/front/images/raid.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo base_url()?>assets/front/images/serigala.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo base_url()?>assets/front/images/ps.jpg" class="d-block" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
          <!-- ***** Banner End ***** -->
          <br>

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <?php $this->load->view($konten); ?>
          </div>
          <div class="most-popular">
            <?php $this->load->view($upcoming); ?>
          </div>
          <!-- ***** Most Popular End ***** -->
          <br>
          <div class="col-lg-12">

            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="text-muted">Copyright &copy; 2023 MOVIESTATION. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url()?>assets/front/js/isotope.min.js"></script>
  <script src="<?php echo base_url()?>assets/front/js/owl-carousel.js"></script>
  <script src="<?php echo base_url()?>assets/front/js/tabs.js"></script>
  <script src="<?php echo base_url()?>assets/front/js/popup.js"></script>
  <script src="<?php echo base_url()?>assets/front/js/custom.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </body>

</html>
