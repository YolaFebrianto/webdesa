<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">kontak</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">kontak</li>
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
                <li><a href="<?php echo base_url('') ?>">Home</a></li>
        <li class="active">||kontak</li>
      </ul>           
    </div>
    </div>
<h3 align="center">Masukkan isi:</h3>
<form action="<?php echo base_url('admin/v_pengumuman'); ?>" method="post">
	<table align="center" border="0">
		<tr>
			<td>ID:</td>
			<td><input type="text" name="id"/></td>
		</tr>
		<tr>
			<td> nama :</td>
			<td><input type="date" name="tanggal" /></td>
		</tr>
		<tr>
			<td> jabatan :</td>
			<td><input type="text" name="isi"/></td>
		</tr>
    <tr>
      <td> telepon :</td>
      <td><input type="text" name="isi"/></td>
    </tr>
		<tr>
			<td><input type="submit" name="btnsubmit" value="Tambah"/></td>
		</tr>
	</table>
</form>
       
</div>
  </section>

              
