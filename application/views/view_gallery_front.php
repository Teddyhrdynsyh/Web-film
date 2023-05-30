<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url()?>assets/front/images/c.png">

    <title>Moviestation</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/owl.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

-->
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
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="game-details">
            <div class="row">
              <div class="col-lg-12 m-3">
                <h1 style="text-align: center;">Gallery</h1>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    
                    <?php
                    $n=1;foreach ($gallery as $data) 
                    {?>
                    <div class="col-lg-4">
                      <a href="<?php echo base_url()?>assets/gallery/<?php echo $data->nama_paket ?>" target="_blank">
                      <img src="<?php echo base_url()?>assets/gallery/<?php echo $data->nama_paket ?>" alt="" style="border-radius: 23px; margin-bottom: 10px;">
                      <h6><?php echo $data->harga ?></h6>
                      </a>
                    </div>
                      <?php 
                      }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="text-muted">Copyright &copy; 2023 Moviestation.com. All rights reserved.</p>
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
