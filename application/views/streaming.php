
<body>
	<?php
          $n=1;foreach ($film as $data) 
          {?>
    <div class="embed-responsive embed-responsive-16by9">
    	<iframe src="<?php echo $data->tautan?>" title="Vimeo video" allowfullscreen></iframe>
	</div>
	<?php
	 if($n++ == 1) {
          break;
      }
     }?>
</body>
