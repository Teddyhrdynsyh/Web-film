<div class="col-lg-3 col-sm-6">
        <div class="item">
          <?php
          $n=1;foreach ($gallery as $data) 
          {?>
          <img src="<?php echo base_url()?>assets/gallery/<?php echo $data->nama_paket ?>" alt="">
          <?php }?>
          <?php
          $n=1;foreach ($film as $data)
          {?>
          <h4><?php echo $data->nama_film?><br><span><?php echo $data->sinopsis?></span></h4>
          <ul>
            <li><i class="fa fa-star"></i> 4.8</li>
            <li><i class="fa fa-download"></i> 2.3M</li>
          </ul>
          <?php }?>
        </div>