<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Galeri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Galeri</li>
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
                    <li class="active">||Galeri</li>
                </ul>
            </div>
        </div>
        <a class="btn btn-success" href="<?php echo base_url('admin/tambah_gambar') ?>">Create</a>
        </p>
        <div id="w0" class="grid-view">
            <div class="summary">Showing <b>1-4</b> of <b>4</b> items.</div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>
                            <a href="#" data-sort="id">ID</a>
                        </th>
                        <th>
                            <a href="#" data-sort="judul">Judul Galeri</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Tanggal </a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">gambar</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Opsi</a>
                        </th>
                    </tr>
                </thead>
                <?php foreach ($galeri->result() as $key => $value) { ?>
                <tr data-key="1">
                    <td><?= $value->id_galeri ?></td>
                    <td><?= $value->judul_galeri ?></td>
                    <td><?= $value->tgl ?></td>
                    <td><?= $value->gambar_galeri ?></td>

                    <td>
                        <i class="far fa-edit"></i><a
                            href="<?php echo base_url('admin/edit_gambar/') . $value->id_galeri ?>">Edit</a> |
                        <i class="fas fa-trash-alt"></i><a
                            href="<?php echo base_url('admin/hapus_gambar/') . $value->id_galeri ?>">Hapus</a>
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
