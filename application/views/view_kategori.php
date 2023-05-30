<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 pl-4 pt-2 align-self-center">
        <h3 class="text">Kelola Kategori</h3> </div>
            <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Kategori</a></li>
            <li class="breadcrumb-item active">View Kategori</li>
        </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <h4 class="card-title">Data Kategori <a href="<?php echo base_url();?>index.php/kelola_kategori/tambah_kategori"><button type="button" class="btn btn-info btn-flat btn-sm m-3">Tambah Kategori</button></a></h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-borderd"
                        cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <?php
                            $n=1; foreach($kategori as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++?></td>
                                    <td><?php echo $data->nama_kategori ?></td>
                                    <td><a href="<?php echo base_url();?>index.php/kelola_kategori/edit_kategori/<?PHP echo $data->id_kategori ?>">
                                    <i class="fa fa-edit">Edit</i>
                                    </a>
                                    <a onclick="return hapus()" href="<?php echo base_url();?>index.php/kelola_kategori/hapus_kategori/<?PHP echo $data->id_kategori ?>">
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
    <!-- End Page Content -->
</div>
<!-- End Container Fluid -->