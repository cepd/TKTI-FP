<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/jqvmap/jqvmap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css');?>">
  
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/summernote/summernote-bs4.min.css');?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/toastr/toastr.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css');?>">
  <link href="<?= base_url('assets/adminlte/js-switch/bootstrap-toggle.min.css');?>" rel="stylesheet">

  
  <!-- select2-->
  <link href="/select2.min.css" rel="stylesheet" />
  <link href="/select2-bootstrap.css" rel="stylesheet">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
</ul>    
  <!-- Left navbar links -->


  <!-- SEARCH FORM -->
  

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    
    <!-- Notifications Dropdown Menu -->
   
  </ul>
</nav>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url('assets/logo.jpg');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Kuisioner</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/user.jpg');?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
  
      
      
        <li class="nav-header">Fitur</li>
        <li class="nav-item">
          <a href="<?= base_url('Dashboard/kategori_kuisioner');?>" class="nav-link">
            <i class="nav-icon fas fa-question"></i>
            <p>Kategori Kuisioner</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('Dashboard/subkategori_kuisioner');?>" class="nav-link">
            <i class="nav-icon fas fa-question"></i>
            <p>Sub Kategori</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="<?= base_url('Dashboard/kuisioner');?>" class="nav-link">
            <i class="nav-icon fas fa-question"></i>
            <p>Kuisioner</p>
          </a>
        </li>

      
       
       
        
        <li class="nav-item">
          <a href="<?= base_url('Dashboard/logout');?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Logout</p>
          </a>
        </li>
        
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>