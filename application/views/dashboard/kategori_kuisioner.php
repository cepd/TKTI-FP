
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Dashboard');?>">Dashboard</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kategori kuisioner</h3>
             
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <a href="<?= base_url('Dashboard/tambah_kategori');?>" class="btn btn-success">+ data </a>
             <br>  
           
             <br>
             <?php if($this->session->flashdata('pesan')){?>
              <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('pesan');?>
              </div>
              <?php }?>
          
            
              
              <div class="table-responsive"> 
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th> 
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php $no = 1; foreach($kategori as $get) { ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td><?= $get->nama;?></td>
                    <td><?= $get->slug;?></td>
                    <td><a href="<?= base_url ('Dashboard/hapus_kategori/'.$get->id);?> "><i class="fa fa-trash" onclick="return confirm('yakin hapus data ini ?')"></a></i>
                    <a href="<?= base_url ('Dashboard/edit_kategori/'.$get->id);?>"><i class="fa fa-edit"></a></td>
                  <?php } ?>
            
                
                  </tr>
               
                
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>No</th>
                    <th>Kategori</th> 
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>