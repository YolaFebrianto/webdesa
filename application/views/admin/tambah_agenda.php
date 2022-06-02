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
<h3 align="center">Masukkan isi:</h3>
<form action="<?php echo base_url('admin/v_agenda'); ?>" method="post">
	<table align="center" border="0">
		<!-- <tr>
			<td>ID:</td>
			<td><input type="text" name="id"/></td>
		</tr> -->
    <tr>
      <td> Nama Agenda</td>
      <td><input type="text" name="nama"/></td>
    </tr>
		<tr>
			<td> Tanggal</td>
			<td><input type="date" name="tanggal"/></td>
		</tr>
		<tr>
			<td> isi agenda</td>
			<td><textarea type="text" name="isi" id="isi"></textarea></td>
		</tr>
    <tr>
      <td> jam mulai</td>
      <td><input type="time" name="mulai"/></td>
    </tr>
    <tr>
      <td>jam akhir</td>
      <td><input type="time" name="akhir"/></td>
    </tr>
    <tr>
      <td>keterangan</td>
      <td><textarea type="text" name="keterangan" id="isi"/></textarea></td>
    </tr>
		<tr>
			<td><input type="submit" name="btnsubmit" value="Tambah"/></td>
		</tr>
	</table>
</form>
       
</div>
  </section>
 </section> 
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.js"></script> 
    <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>          
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
          CKEDITOR.replace( 'isi' );
     </script>
     
              
