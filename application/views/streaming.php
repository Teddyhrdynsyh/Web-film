
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
        <div class="page-content">
            <div class="row">
                <?php foreach ($film as $data): ?>
                <div class="d-flex justify-content-between">
                    <h2 class="my-3"><?php echo $data['nama_film']; ?></h2>
                    <h3 class="my-3"><i class="fa fa-star"></i><?php echo $data['rating']; ?></h3>
                </div>
                
                <div class="embed-responsive embed-responsive-16by9">
                    <h1><?php echo $data['nama_film']; ?></h1>
                    <iframe src="<?php echo $data['tautan']; ?>" title="YouTube video" allowfullscreen></iframe>
                </div>
            <?php endforeach; ?>
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
  <script>
    // Fungsi untuk menangani pencarian saat tombol Enter ditekan
    function handleKeyPress(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            searchFilm();
        }
    }

    // Fungsi untuk melakukan pencarian film
    function searchFilm() {
        var searchText = document.getElementById('searchText').value;

        // Mengirim permintaan pencarian menggunakan AJAX
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>index.php/beranda/search',
            data: {
                searchKeyword: searchText
            },
            dataType: 'json',
            success: function(response) {
                // Menampilkan hasil pencarian
                var searchResults = document.getElementById('searchResults');
                searchResults.innerHTML = '';

                for (var i = 0; i < response.length; i++) {
                    var film = response[i];
                    var resultItem = document.createElement('div');
                    resultItem.innerHTML = film.judul;
                    searchResults.appendChild(resultItem);
                }
            }
        });
    }
</script>

  </body>

</html>
