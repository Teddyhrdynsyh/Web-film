<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 pl-4 pt-2 align-self-center">
        <h3 class="text">Kelola Film</h3> </div>
            <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Film</a></li>
            <li class="breadcrumb-item active">View Film</li>
        </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12 m-2">
                <div class="card p-3">
                    <h4 class="card-title">Data Film<a href="<?php echo base_url();?>index.php/kelola_film/tambah_film"><button type="button" class="btn btn-info btn-flat btn-sm m-3">Tambah Film</button></a></h4>
                    <div class="table-responsive mb-4">
                        <table id="example23" class="display nowrap table table-hover table-striped table-borderd"
                        cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Poster</th>
                                    <th>Nama Film</th>
                                    <th>Tahun</th>
                                    <th>Kategori</th>
                                    <th>Rating</th>
                                    <th>Tautan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Poster</th>
                                    <th>Nama Film</th>
                                    <th>Tahun</th>
                                    <th>Kategori</th>
                                    <th>Rating</th>
                                    <th>Tautan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <?php
                            $n=1; foreach($film as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++?></td>
                                    <td><img src="<?php echo base_url()?>assets/poster/<?php echo $data->gambar ?>" witdh="200px" height="200px"></td>
                                    <td><?php echo $data->nama_film ?></td>
                                    <td><?php echo $data->tahun ?></td>
                                    <td><?php echo $data->nama_kategori ?></td>
                                    <td><?php echo $data->rating ?></td>
                                    <td><?php echo $data->tautan ?></td>
                                    <td><a href="<?php echo base_url();?>index.php/kelola_film/edit_film/<?PHP echo $data->id_film ?>">
                                    <i class="fa fa-edit">Edit</i>
                                    </a>
                                    <a onclick="return hapus()"href="<?php echo base_url();?>index.php/kelola_film/hapus_film/<?PHP echo $data->id_film ?>">
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