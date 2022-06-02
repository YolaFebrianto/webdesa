<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">berita</h1>
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
                    <li class="active">||berita</li>
                </ul>
            </div>
        </div>
        <h3 align="center">Masukkan isi:</h3>
        <form action="<?php echo base_url('admin/edit'); ?>" method="post" enctype="multipart/form-data">
            <table align="center" border="0">
                <input type="hidden" name="id" value="<?php echo $data['id_berita']; ?>">
                <tr>
                    <td>tanggal :</td>
                    <td><input type="date" name="tgl" value="<?php echo $data['tgl'] ?>" /></td>
                </tr>
                <tr>
                    <td> jam :</td>
                    <td><input type="time" name="jam" value="<?php echo $data['jam'] ?>" /></td>
                </tr>
                <tr>
                    <td> Judul :</td>
                    <td><input type="text" name="judul_berita" value="<?php echo $data['judul_berita'] ?>" /></td>
                </tr>
                <tr>
                    <td>isi </td>
                    <td><textarea type="text" name="isi_berita" id="isi"><?php echo $data['isi_berita']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td> author :</td>
                    <td><input type="text" name="author" value="<?php echo $data['author'] ?>" /></td>
                </tr>
                <tr>
                    <td> gambar :</td>
                    <td><input type="file" name="gambar" value="<?php echo $data['gambar'] ?>" /></td>
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