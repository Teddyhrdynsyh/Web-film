<div class="dropdown">
	<button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" style="color:  #ff3399">Genre</button>
	<ul class="dropdown-menu">
	<?php foreach($kategori as $data)
	{?>
		<li><a href="<?php echo base_url()?>index.php/beranda/view_kategori_front/<?php echo $data->id_kategori?>"><?php echo $data->nama_kategori?></a></li>
		<?php }?>
	</ul>
</div>