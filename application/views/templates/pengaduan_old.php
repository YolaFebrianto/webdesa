<div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="aboutus-wrapper">
                    <h1 class="mt-5 text-center mb-5">
                    Pengaduan 
                    </h1>
                    <div class="row">
                      <div class="col-lg-12 mb-5 mb-sm-2">
                        <!-- <form class="border_all"> -->
                         <section class="content">
       
            <h3>Masukkan Pengaduan Anda Dengan Menggunakan Bahasa Indonesia Baik Dan Benar.</h3><br>
       
        
        <form action="<?php echo base_url('admin/tambahberita'); ?>" method="post" enctype="multipart/form-data">
            <table align="center" border="0">
              <style type="text/css">
                tr {
                  font-size: large;
                  font: bold;
                }
              </style>
                <tr>
                    <td>tanggal</td>
                    <td><input type="date" name="tgl"></td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td><input type="text" name="nama" disabled></td>
                </tr>
                 <tr>
                    <td>Email </td>
                    <td><input type="email" name="email" disabled></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>isi</td>
                    <td><textarea type="text" name="isi" id="isi">
      </textarea></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar"></td>
                </tr> 
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan"></td>
                </tr>  
                <tr>
                    <td><input type="submit" name="btnsubmit" value="Tambah" /></td>
                </tr>
            </table>
        </form><br>

</div>
</section>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
// ClassicEditor
//    .create(document.querySelector('#isi'),{
//    })
//     .then(editor => {
//       window.editor = editor;
//         })
//         .catch(err =>{
//           console.error(err.stack);
//         });
CKEDITOR.replace('isi');
</script>

<div class="scrollable" style="overflow: scroll;">
      <strong style="text-align: center;">
          <h3>History Aspirasi</h3>
        </strong>
         <div class="table">
          <table>
             
                <tr>
                    <th>No.</th>
                    <th>Nama Pelapor</th>
                    <th>Alamat</th>
                    <th>Tgl</th>
                    <th>Isi</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Opsi</th>
                    
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            
                  </tr>
                </div>
              </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>