<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 pl-4 pt-2 align-self-center">
        <h3 class="text">Edit Paket</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Paket</a></li>
                <li class="breadcrumb-item active">Edit Paket</li>
            </ol>
        </div>
    </div>
<!-- End Bread Crumb -->
<!-- Container fluid --> 
<div class="container-fluid">
    <!-- Start Page Content --> 
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/kelola_gallery/proses_edit/<?PHP echo $this->uri->segment('3')?>"
                    method="post">
                    <div class="form-body">
                        <h4 class="card-title mb-8">Form Edit Paket</h4>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Nama Paket</label>
                                    <input type="text" id="firstName" require class="form-control input-default" name="nama_paket"
                                    value="<?php echo $gallery->nama_paket ?>">
                                </div>
                            </div>
                        </div>
					<div class="row p-t-20">
						<div class="col-md-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Harga</label>
                                    <input type="text" id="firstName" require class="form-control input-default" name="harga"
                                    value="<?php echo $gallery->harga ?>">
                                </div>
                        </div>
					</div>
					<div class="row p-t-20">
						<div class="col-md-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Diskon</label>
                                    <input type="text" id="firstName" require class="form-control input-default" name="diskon"
                                    value="<?php echo $gallery->diskon ?>">
                                </div>
                        </div>
					</div>
                </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                        <a href="<?php echo base_url();?>index.php/kelola_kategori/view_kategori"><button type="button" class="btn btn-inverse">Batal</button></a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container fluid --> 
</div>