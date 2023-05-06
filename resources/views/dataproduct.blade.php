<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Robot Education</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/adminpanel" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dataprogram" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Programs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dataproduct" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dataportofolio" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Portofolio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/datacontact" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Contacts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/datatestimoni" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Testimonials
              </p>
            </a>
          </li>
        </ul> 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product Tables</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Tables</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
    <a href="/tambahproduct" class="btn btn-success ">+ Tambah Data</a>
    <form method="GET" action="/dataproduct" class="d-flex mb-3 justify-content-end">
    <input type="search" name="search" class="form-control w-25 p-2 me-3 " id="exampleInputEmail1" aria-describedby="emailHelp">
    <button type="submit" class="btn btn-success p-2 mx-2 ">Search</button>
</form>  
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Foto</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Harga</th>
              <th scope="col">Link</th>
            </tr>
          </thead>
          <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($data as $index => $row)           
            <tr>
              <th scope="row">{{$index + $data->firstitem()}}</th>
              <td>{{$row->nama}}</td>
              <td> <img src="{{asset('fotoproduct/'.$row->foto)}}" alt="" style="width:50px;"></td>
              <td>{{$row->deskripsi}}</td>
              <td>{{$row->harga}}</td>
              <td>{{$row->link}}</td>
              <td>
                <a href="/deleteproduct/{{$row->id}}" class="btn btn-danger">Delete</a>
                <a href="/tampilproduct/{{$row->id}}" class="btn btn-warning text-white">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        <div class="mt-3 mb-5">
          {{$data->links()}}
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">AdminLTE</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('admin-lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-lte/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('admin-lte/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin-lte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-lte/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-lte/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
