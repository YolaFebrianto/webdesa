<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Aspirasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Aspirasi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div style="font-size:16px;">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url('admin') ?>">Home</a></li>
                    <li class="active">||News</li>
                </ul>
            </div>
        </div>
        <a class="btn btn-success">Data Aspirasi</a>
        </p>
        <div id="w0" class="grid-view">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>
                            <a href="#" data-sort="id">ID</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">Nama Pelapor</a>
                        </th>
                        <th>
                            <a href="#" data-sort="judul">Alamat</a>
                        </th>
                        <th>
                            <a href="#" data-sort="tanggal">tanggal</a>
                        </th>
                        <th>
                            <a href="#" data-sort="">isi</a>
                        </th>
                        <!--<th>-->
                        <!--    <a href="#" data-sort="isi">gambar</a>-->
                        <!--</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aspirasi->result() as $key => $value) { ?>
                    <tr data-key="1">
                        <td><?= $value->id ?></td>
                        <td><?= $value->nama_pelapor ?></td>
                        <td><?= $value->alamat ?></td>
                        <td><?= $value->tgl ?></td>
                        <td><?= substr(strip_tags($value->isi), 0, 70) . '...' ?></td>
                        <!--<td><?//= $value->gambar ?></td>-->
                        <td>
                            <i class="far fa-edit"></i><a
                                href="<?php echo base_url('admin/edit_aspirasi/') . $value->id ?>">Lihat</a>
                            |
                            <i class=" fas fa-trash-alt"></i><a
                                href="<?php echo base_url('admin/hapus_aspirasi/') . $value->id ?>">Hapus</a>
                        </td>
                        <?php } ?>

                        <a href="#" title="View" aria-label="View" data-pjax="0">
                            <span class="glyphicon glyphicon-eye-open">
                            </span>
                        </a>
                        <a href="#" title="Update" aria-label="Update" data-pjax="0">
                            <span class="glyphicon glyphicon-pencil">
                            </span>
                        </a>

                </tbody>
            </table>
        </div>

</div>
</section>
</div>