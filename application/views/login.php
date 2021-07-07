<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login to admin </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css');?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/Auth" class="h1">Nama aplikasi</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">
        <?php if($this->session->flashdata('pesan')){?>
        <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata('pesan');?>
         
        </div>
        <?php }?>
       
      </p>

      <form action="<?= base_url('Auth/p_login');?>" method="POST">
        <div class="input-group mb-3">
          <input type="text"  name="email"  class="form-control" placeholder="Email">
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
       
        </div>
        
        
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
      
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>

            </div>
            
          </div>
          
        </div>
      
      
        <div class="row">
          <div class="col-8">
          
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js');?>"></script>
</body>
</html>
