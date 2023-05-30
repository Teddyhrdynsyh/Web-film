<!-- Bread crumb -->
<div class="row page-titles">
	<div class="col-md-5 pl-4 pt-2 align-self-center">
		<h3 class="text">Tambah Paket</h3> </div>
		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Paket</a></li>
				<li class="breadcrumb-item active">Tambah Paket</li>
			</ol>
		</div>
	</div>
<!-- End Bread crumb -->
	<!-- Container fluid -->
	<div class="container-fluid">
		<!-- Start Page Content -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card card-outline-info">
					<div class="card-body">
						<form action="<?php echo base_url()?>index.php/kelola_gallery/proses_tambah" method="post" enctype="multipart/form-data">
							<div class="form-body">
								<h4 class="card-title mb-8">Form Input Paket</h4>
								<hr>
								<div class="row mt-5">
									<div class="col-md-12">
										<div class="form-group has-success">
										<label class="control-label">Nama Paket</label>
										<input type="text" required class="form-control input-default" name="nama_paket">
										</div>
									</div>
								</div>
								<div class="row p-t-20">
									<div class="col-md-12">
										<div class="form-group has-success">
										<label class="control-label">Harga</label>
										<input type="text" id="firstName" required class="form-control input-default" name="harga">
										</div>
									</div>
								</div>
								<div class="row p-t-20">
									<div class="col-md-12">
										<div class="form-group has-success">
										<label class="control-label">Diskon</label>
										<input type="text" id="firstName" class="form-control input-default" name="diskon">
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions">
							<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Simpan</button>
								<a href="<?php echo base_url();?>index.php/kelola_gallery/view_gallery"><button type="button" class="btn btn-inverse">Batal</button></a> </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!-- Row -->
</div>