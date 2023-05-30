<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 pl-4 pt-2 align-self-center">
        <h3 class="text">Tambah Film</h3> </div>
            <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Film</a></li>
            <li class="breadcrumb-item active">Tambah Film</li>
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
                <form action="<?php echo base_url()?>index.php/kelola_film/proses_tambah" method="post" enctype="multipart/form-data">
                <div class="form-body">
                    <h4 class="card-title mb-8">Form Input Film</h4>
                    <hr>
                <div class="row mt-5">
                    <div class="col-md-12 pl-2">
                        <div class="form-group has-success">
                        <label class="control-label">Poster</label>
                        <input type="file" required class="form-control input-default" name="gambar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                        <label class="control-label">Nama Film</label>
                        <input type="text" id="firstName" required class="form-control input-default" name="nama_film">
                        </div>
                    </div>
                </div>
                
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                        <label class="control-label">Tahun</label>
                        <input type="text" id="firstName" required class="form-control input-default" name="tahun">
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                            <label class="control-label">Kategori</label>
                            <select  class="form-control" name="id_kategori">
                                <?php foreach ($list_kategori as $list)
                                {
                                    echo "<option value='$list->id_kategori'->$list->nama_kategori</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                        <label class="control-label">Rating</label>
                        <input type="text" id="firstName" required class="form-control input-default" name="rating">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                        <label class="control-label">Tautan</label>
                        <input type="text" id="firstName" required class="form-control input-default" name="tautan">
                        </div>
                    </div>
                </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Simpan</button>
                    <a href="<?php echo base_url();?>index.php/kelola_film/view_film"><button type="button"
                    class="btn btn-inverse">Batal</button></a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
</div>