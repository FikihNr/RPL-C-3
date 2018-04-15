<?php
$this->load->view('admin/template/head');
$this->load->view('admin/template/topbar');
$this->load->view('admin/template/sidebar');
?>
<div class="container">   
  
</div>
  <section class="content-header">
    <h1>
        Data Pelajar
           </h1>
           <br>
    <!-- Tombol untuk menampilkan modal-->
  
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
        <li class="active">Data Pelajar</li>
    </ol>
</section>
<section class="content">

<div id="container">
  
    <h1>
       
        
    </h1>
  
<div class="form-group">

  <?php foreach($siswa as $u){ ?>
  <form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
    <table style="margin:20px auto;">
      <tr>
        <td>Nama</td>
        <td>
          <input type="hidden" name="id" value="<?php echo $u->id_siswa ?>">
          <input type="text" name="nama" value="<?php echo $u->nama ?>">
        </td>
      </tr>
      
      <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
      </tr>
    </table>
  </form> 
  <?php } ?>
   </div>
</div>
</section>
  <?
$this->load->view('admin/template/js');

?>

  <?php
  $this->load->view('admin/template/foot');
  ?>