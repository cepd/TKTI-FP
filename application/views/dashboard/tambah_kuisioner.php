
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
                <h3 class="card-title">Tambah Kuisioner</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('Dashboard/tambah_kuisioner');?>" method="post">
                <div class="card-body">
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kategori Kuisioner</label>
                   
                    <select class="form-control" name="kategori" id="exampleFormControlSelect1">
                    <option disabled selected >- Pilih - </option>
                    <?php foreach($kategori as $get){ ?>
                    <option value="<?= $get->id_subkategori;?>">Kategori : <?=  $get->nama;?> |<?= $get->nama_subkategori;?></option>
                    <?php } ?>    
                    </select>
                    <?= form_error('kategori','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pertanyaan</label>
                    <input type="text" class="form-control" name="pertanyaan" id="exampleInputEmail1" >
                    <?= form_error('pertanyaan','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Level</label>
                    <select class="form-control" name="level" id="exampleFormControlSelect1">
                       <option disabled selected >- Pilih - </option>
                        <option value="0">Level 0</option>
                        <option value="1">Level 1</option>
                        <option value="2">Level 2</option>
                        <option value="3">Level 3</option>
                        <option value="4">Level 4</option>
                        <option value="5">Level 5</option>
                    </select>
                    <?= form_error('level','<small class="text-danger pl-3">','</small>');?>
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