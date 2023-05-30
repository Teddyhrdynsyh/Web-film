<!-- Bread crumb -->
	<div class="row page-titles">
		<div class="col-md-5 pl-4 pt-2 align-self-center">
		<h3 class="text">Kelola Paket</h3> </div>
		<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Paket</a></li>
			<li class="breadcrumb-item active">View Paket</li>
		</ol>
		</div>
	</div>
	<!-- End Bread crumb -->
	<!-- Container fluid -->
	<div class="container-fluid">
		<!-- Start Page Content -->
		<div class="row">
			<div class="col-12">
				<div class="card ">
					<div class="card-body">
						<h4 class="card-title">Data Paket <a href="<?php echo base_url();?>index.php/kelola_gallery/tambah_gallery"><button type="button" class="btn btn-info btn-flat btn-sm m-3">Tambah Paket</button></a></h4>
					<div class="table-responsive m-t-40">
						<table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Paket</th>
								<th>Harga</th>
								<th>Diskon</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Paket</th>
								<th>Harga</th>
								<th>Diskon</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<?php
						$n=1; foreach($gallery as $data)
						{?>
						<tbody>
							<tr>
								<td><?php echo $n++?></td>
								<td><?php echo $data->nama_paket ?></td>
								<td><?php echo $data->harga ?></td>
								<td><?php echo $data->diskon ?></td>
								<td><a href="<?php echo base_url();?>index.php/kelola_gallery/edit_gallery/<?PHP echo $data->id_paket?>">
									<i class="fa fa-edit">Edit</i>
									</a>
									|
									<a onclick="return hapus()" href="<?php echo base_url();?>index.php/kelola_gallery/hapus_gallery/<?PHP echo $data->id_paket?>">
									<i class="fa fa-trash">Hapus</i>
									</a>
								</td>
							</tr>
						</tbody>
						<?php }?>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--End PAge Content -->
</div>
<!--EndContainer fluid -->