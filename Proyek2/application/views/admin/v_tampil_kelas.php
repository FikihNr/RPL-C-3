<?php
$this->load->view('admin/template/head');
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>
<div class="container">		
	
 
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Input Data Kelas</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
				    <section class="content">
<div class="form-group">
<form action="<?php echo base_url();?>index.php/admin/crud_kelas/tambah_aksi" method="post">
  <label>Nama</label><br>
  <input type="text" name="nama" class="form-control"><br>
 

  <input type="submit" name="Tambah" class="btn btn-primary" value="Submit">
     </form>
   </div>
  </section>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
   </div>
	<section class="content-header">
    <h1>
        Data Kelas
           </h1>
           <br>
    <!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Tambah Data</button>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Kelas</li>
    </ol>
</section>
<section class="content">

<div id="container">
	
    <h1>
       
        
    </h1>
	
	
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th class="info">No</th>
			<th class="info">Nama</th>
			<th class="info">Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($kelas as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td>
			      <?php echo anchor('crud_pengajar/edit/'.$u->id_kelas,'<button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button>'); ?>
                              <?php echo anchor('crud_pengajar/hapus/'.$u->id_kelas,'<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
</section>
  <?
$this->load->view('admin/template/js');

?>

  <?php
  $this->load->view('admin/template/foot');
  ?>