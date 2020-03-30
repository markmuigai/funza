
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Multipurpose</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- styling --}}
  <link rel="stylesheet" href="{{ asset('/css/adminlte.min.css') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <router-link to="/register-school" class="nav-link">
          <p>Register School</p>
        </router-link>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./assets/img/project.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Funza Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./assets/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Test Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt blue"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/schools" class="nav-link">
              <i class="nav-icon fas fa-school cyan"></i>
              <p>
                All Schools
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/schoolProfile" class="nav-link">
              <i class="nav-icon fas fa-school cyan"></i>
              <p>
                My School
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cog green"></i>
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Users</p>
                </router-link>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/schoolProfile" class="nav-link">
                  <i class="fas fa-school cyan nav-icon"></i>
                  <p>My School</p>
                </router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/profile" class="nav-link">
              <i class="nav-icon fas fa-user orange"></i>
              <p>
                My Profile
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/developer" class="nav-link">
              <i class="nav-icon fas fa-cogs indigo"></i>
              <p>
                Developer
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off red"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
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
            <h2>School Admin</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="container-fluid">
        @yield('app.content')
      </div><!-- /.container-fluid -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    {{-- app.js --}}
    <script src="/js/app.js/"></script>
</body>
</html>
