<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengumuman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">berita</li>
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
                    <li class="active">||pengumuman</li>
                </ul>
            </div>
        </div>
        <h3 align="center">Masukkan isi:</h3>
        <form action="<?php echo base_url('admin/edit_pengumuman'); ?>" method="post">
            <table align="center" border="0">
                <input type="hidden" name="id_pengumuman" value="<?php echo $data['id_pengumuman']; ?>">
                <tr>
                    <td> Judul :</td>
                    <td><input type="text" name="judul_pengumuman" value="<?php echo $data['judul_pengumuman'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td>isi : </td>
                    <td><textarea type="text" name="isi_pengumuman"
                            id="isi"><?php echo $data['isi_pengumuman']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>tanggal:</td>
                    <td><input type="date" name="tgl" value="<?php echo $data['tgl'] ?>" /></td>
                </tr>
                <tr>
                    <td>author:</td>
                    <td><input type="text" name="pengumuman_author" value="<?php echo $data['pengumuman_author'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnsubmit" value="Simpan" /></td>
                </tr>
            </table>
        </form>

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