<div class="container fixed">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="<?php echo base_url()?>assets/front/images/logofilm.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                    <form id="search" action="<?php echo base_url()?>index.php/beranda/search">
                        <input type="text" placeholder="Search" id="searchText" name="searchKeyword" />
                        <i class="fa fa-search"></i>
                    </form>
                    </div>

                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?php echo base_url()?>index.php/beranda" class="active">Home</a></li>
                        <div class="dropdown mt-1">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="color:  #ff3399">Genre</button>
                            <ul class="dropdown-menu">
                            <?php foreach($kategori as $data)
                            {?>
                                <li><a href="<?php echo base_url()?>index.php/beranda/view_kategori_front/<?php echo $data->id_kategori?>"><?php echo $data->nama_kategori?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                        <li><a href="<?php echo base_url()?>berlangganan" class="active">Berlangganan</a></li>
                        <?php if($this->session->userdata("level")) {?>
                            <li><a href="login/logout">Logout<img src="<?php echo base_url()?>assets/front/images/profile.png" alt=""></a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url()?>login">Login<img src="<?php echo base_url()?>assets/front/images/profile.png" alt=""></a></li>
                        <?php } ?>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>