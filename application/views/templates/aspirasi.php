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
                        <li class="breadcrumb-item"><a href="#">AspirasiS</a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                          </ol>
                          </h1>  

        <section class="content">
            <div class="container-fluid">
        </div>
            <br>
            <br>
            <a class="btn btn-success" href="<?php echo base_url('aspirasi/tambah_aspirasi') ?>"><i class="fa fa-plus"></i> Tambah Aspirasi Anda</a>
        </p><br>
          <div class="scrollable" style="overflow:scroll;">
            <strong><h3 style="text-align: center;">
                Histori Aspirasi
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
                            <a href="#" data-sort="id">Email</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Tanggal</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Isi</a>
                        </th>
                        <!-- <th>
                            <a href="#" data-sort="isi">Gambar</a>
                        </th>
                        <th>
                            <a href="#" data-sort="isi">Keterangan</a>
                        </th> -->
                        <th>
                            <a href="#" data-sort="isi">Opsi</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach ($aspirasi->result() as $key => $A) { ?>
                    <tr data-key="1">
                        <td><?= $A->id ?></td>
                        <td><?= $A->nama_pelapor ?></td>
                        <td><?= $A->alamat ?></td>
                        <td><?= $A->email ?></td>
                        <td><?= $A->tgl ?></td>
                        <td><?= substr(strip_tags($A->isi), 0, 50) . '...' ?></td>
                         <td>
                            <i class="far fa-edit"></i>
                            <a href="<?php echo base_url('aspirasi/edit_aspirasi/') . $A->id ?>">Edit</a> |
                            <i class="fas fa-trash-alt"></i>
                            <a href="<?php echo base_url('aspirasi/hapus_aspirasi/') . $A->id ?>">Hapus</a>
                        </td>
                        
                          <?php } ?>
                          
                </tbody>
               
            </table>
            
       

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

               
                        