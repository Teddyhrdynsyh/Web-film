<?php 
$level=$this->session->userdata('level');if($level=="Admin")
{
?>
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/dashboard" class="nav-link" class="active">
              <i class="fa fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/kelola_film/view_film" class="nav-link">
              <i class="fa fa-book"></i>
              <p>
                Kelola Film
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/kelola_kategori/view_kategori" class="nav-link">
              <i class="fa fa-list"></i>
              <p>
                Kelola Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/kelola_gallery/view_gallery" class="nav-link">
              <i class="fa fa-image"></i>
              <p>
                Daftar Paket
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url()?>index.php/login/logout" class="nav-link">
              <i class="fa fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      <?php }
      ?>