<div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="aboutus-wrapper">
                    <div class="row">
                      <div class="col-lg-12 mb-5 mb-sm-2">
                        <h1 class="mt-5 left-center mb-5">
                      <ol class="breadcrumb float-sm-right" style="background-color: white;">
                        <li class="breadcrumb-item"><a href="#">PengaduanS</a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                          </ol>
                          </h1>  

        <section class="content">
            <div class="container-fluid">
        </div>
            <br>
            <br>
            <a class="btn btn-success" href="<?php echo base_url('Pengaduan/tambah_pengaduan') ?>"><i class="fa fa-plus"></i>Tambah Data Pengaduan Anda</a>
        </p>
         <div class="scrollable" style="overflow:scroll;">
             <strong><h3 style="text-align: center;">
                Histori Pengaduan
            </h3>
            </strong>
            <table class="table table-striped table-bordered">
                <thead>

                    <tr>
                        <th>
                            <a href="#" data-sort="id">Id</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">Nama Pelapor</a>
                        </th>
                        <th>
                            <a href="#" data-sort="id">Alamat</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Tanggal</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Isi</a>
                        </th>
                        
                        <th>
                            <a href="#" data-sort="isi">Keterangan</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Opsi</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach ($pengaduan->result() as $key => $p) { ?>
                    <tr data-key="1">
                        <td><?= $p->id ?></td>
                        <td><?= $p->nama_pelapor ?></td>
                        <td><?= $p->alamat ?></td>
                        <td><?= $p->tgl ?></td>
                        <td><?= substr(strip_tags($p->isi), 0, 50) . '...' ?></td>
                        <td><?= $p->keterangan ?></td>
                         <td>
                            <i class="far fa-edit"></i>
                            <a href="<?php echo base_url('admin/edit_berita/') . $p->id ?>">Edit</a> |
                            <i class="fas fa-trash-alt"></i>
                            <a href="<?php echo base_url('admin/hapus_berita/') . $p->id ?>">Hapus</a>
                        </td>
                          <?php } ?>
                </tbody>
            </table>
        </div>

</div>
</section>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

               
                        