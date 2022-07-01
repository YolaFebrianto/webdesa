<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Agenda</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Agenda</li>
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
                    <li class="active">||Agenda</li>
                </ul>
            </div>
        </div>
        <a class="btn btn-success" href="<?php echo base_url('admin/tambahagenda') ?>">Create</a>
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
                            <a href="#" data-sort="id">Nama Agenda</a>
                        </th>
                        <th>
                            <a href="#" data-sort="judul">Tanggal</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">isi agenda</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">Mulai Agenda</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">Selesai Agenda</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Keterangan</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">Opsi</a>
                        </th>
                    </tr>
                </thead>
                <?php foreach ($agenda->result() as $key => $value) { ?>
                <tr data-key="1">
                    <td><?= $value->id_agenda ?></td>
                    <td><?= $value->nama_agenda ?></td>
                    <td><?= $value->tgl ?></td>
                    <td><?= substr(strip_tags($value->isi_agenda), 0, 2) . '...' ?></td>
                    <td><?= $value->mulai_agenda ?></td>
                    <td><?= $value->selesai_agenda ?></td>
                    <td><?= $value->keterangan_agenda ?></td>
                    <td>
                        <i class="far fa-edit"></i><a
                            href="<?php echo base_url('admin/edit_agenda/') . $value->id_agenda ?>">Edit</a> |
                        <i class="fas fa-trash-alt"></i><a
                            href="<?php echo base_url('admin/hapus_agenda/') . $value->id_agenda ?>">Hapus</a>
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

            </table>
        </div>

</div>
</section>
</div>