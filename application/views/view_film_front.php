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

  <div id="page" class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Trending</em> Right Now</h4>
                </div>
                <div class="owl-features owl-carousel">
                  <div class="item">
                    <div class="thumb">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank">
                      <img src="<?php echo base_url()?>assets/poster/08042020160519.png" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                      </a>
                    </div>
                    <h4>Fast & Furious 7<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank">
                      <img src="<?php echo base_url()?>assets/poster/08042020154348.png" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                      </a>
                    </div>
                    <h4>Mr.Bean<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank">
                      <img src="<?php echo base_url()?>assets/poster/download.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                      </a>
                    </div>
                    <h4>Dilan 1990<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank">
                      <img src="<?php echo base_url()?>assets/poster/The_Raid_Poster.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                      </a>
                    </div>
                    <h4>The Raid<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank">
                      <img src="<?php echo base_url()?>assets/poster/Contoh-Poster-Film-Kartun-One-Piece-Film-Gold-2016.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    </a>
                    <h4>One Piece<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank">
                      <img src="<?php echo base_url()?>assets/poster/nG7bjpDvbuz2fvo5F1HP4z2QJgj.jpg" alt="">
                      <div class="hover-effect">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    </a>
                    <h4>Pertaruhan<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
              </div>
              <br>
              <div class="container">
            <?php $this->load->view('nav_menu/filter.php'); ?>
          </div>
            </div>
            <div class="col-lg-4">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4><em>Top</em> Views</h4>
                </div>
                <ul>
                  <li>
                    <img src="<?php echo base_url()?>assets/poster/08042020112413.jpg" alt="" class="templatemo-item">
                    <h4>Avenger end game</h4>
                    <h6>Marvel</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo base_url()?>assets/poster/cek.jpg" alt="" class="templatemo-item">
                    <h4>Cek Toko Sebelah</h4>
                    <h6>Komedi</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo base_url()?>assets/poster/download.jpg" alt="" class="templatemo-item">
                    <h4>Dilan 1990</h4>
                    <h6>Drama</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="https://youtu.be/yinFWWqIe8Q" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- ***** Featured Games End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <?php $this->load->view($konten); ?>
          </div>
          <br>
          <div class="col-lg-12">
            <div class="main-border-button">
              <a href="#page">Up</a>
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
          <p class="text-muted">Copyright &copy; 2023 Cinematis.com. All rights reserved.</p>
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
