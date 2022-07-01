<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Berita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Berita</li>
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
        <a class="btn btn-primary" href="<?php echo base_url('admin/tambahberita') ?>"><i class="fa fa-plus"></i> tambah data</a>
        </p>
        <div id="w0" class="grid-view">
            <table class="table table-striped table-bordered">
                <div class="scrollable" style="overflow:scroll;">
                <thead>
                    <tr>
                        <th>
                            <a href="#" data-sort="id">ID</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">tanggal</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">Jam</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Judul Berita</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Isi Berita</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Author</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Gambar</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Opsi</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($berita->result() as $key => $b) { ?>
                    <tr data-key="1">
                        <td><?= $b->id_berita ?></td>
                        <td><?= $b->tgl ?></td>
                        <td><?= $b->jam ?></td>
                        <td><?= $b->judul_berita ?></td>
                        <td><?= substr(strip_tags($b->isi_berita), 0, 50) . '...' ?></td>
                        <td><?= $b->author ?></td>
                        <td><?= $b->gambar ?></td>
                        <td>
                            <i class="far fa-edit"></i>
                            <a href="<?php echo base_url('admin/edit_berita/') . $b->id_berita ?>">Edit</a> |
                            <i class="fas fa-trash-alt"></i>
                            <a href="<?php echo base_url('admin/hapus_berita/') . $b->id_berita ?>">Hapus</a>
                        </td>
                        </td>
                        <?php } ?>

                        <a href=" #" title="View" aria-label="View" data-pjax="0">
                            <span class="glyphicon glyphicon-eye-open">
                            </span>
                        </a>
                        <a href="#" title="Update" aria-label="Update" data-pjax="0">
                            <span class="glyphicon glyphicon-pencil">
                            </span>
                        </a>

                </tbody>
                </div>
            </table>
        </div>

</div>
</section>
</div>