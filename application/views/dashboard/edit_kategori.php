
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
          
             
              
              <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('Dashboard/update_kategori/'.$kategori->id);?>" method="post">
                <div class="card-body">
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Kuisioner</label>
                    <input type="text" class="form-control" name="kategori" value ="<?= $kategori->nama;?>"id="exampleInputEmail1" >
                    <?= form_error('kategori','<small class="text-danger pl-3">','</small>');?>
                  </div>
                 
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          
            
              
            
         
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>