<div class="row">
  <div class="col-lg-12">
    <div class="row">
      <?php
          $n=1;foreach ($film as $data) 
          {?>
      <div class="col-lg-3 col-sm-6">
        <div class="item">
          <a href="https://youtu.be/yinFWWqIe8Q" target="_blank">
          <img src="<?php echo base_url()?>assets/poster/<?php echo $data->gambar ?>" alt="">
          <h4><?php echo $data->nama_film?><br><span><?php echo $data->tahun?></span><span><?php echo $data->nama_kategori?></span></h4>
          <ul>
            <li><i class="fa fa-star"></i><?php echo $data->rating?></li>
            <li><i class="fa fa-download"></i> 2.3M</li>
          </ul>
          </a>
        </div>
      </div>
      <?php 
      }?>
      <div class="col-lg-12">
        <div class="main-button">
          <a href="browse.html">Discover Popular</a>
        </div>
      </div>
    </div>
  </div>
</div>
