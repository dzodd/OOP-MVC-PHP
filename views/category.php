<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Category</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Resources/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet"  href="Resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Resources/css/adminlte.min.css">


</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="https://lampart-vn.com/wp-content/uploads/2019/12/logo.png" alt="Lampart-Logo" >
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?c=product" class="nav-link">Product</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?" class="nav-link">Category</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?c=product" class="brand-link">
      <img src="https://lampart-vn.com/wp-content/uploads/2019/12/logo.png" alt="AdminLTE Logo"  height="25" width="130">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <i class="fa-solid fa-bars"> </i>
              <p>
                 Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
     
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?c=product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
            </ul>
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
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Category</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


<!-- box Info -->
<div class="card-header border-transparent">

    <h3 class="card-title">All Categories</h3>
    <div class="card-tools">

        <a href="{{ route('dashboard.category.create') }}" title="Create New"
        class="fa-solid fa-circle-plus fa-2xl"></a>
       
    
    </div>

</div>
<!-- Main content -->


<!-- Info boxes -->
<div class="card">


    <div class="card-body p-0">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="white-text center-align">ID</th>
                    <th class="white-text center-align">Name</th>
                    <th class="white-text center-align">Action</th>
                </tr>
            </thead>
            <tbody>
          
            <?php  
           
            foreach ($this->ModelCategory->listAllCategory()  as $cate) :    ?>
                    <tr>

                  <td>   <?php echo   $cate->CategoryId ?></td> 
                        <td><?php  echo $cate->CategoryName ?></td>
                        <!-- <td>
                            @if ($cate->status == 1)
                                <span class="badge badge-success"> Enable</span>
                            @else
                                <span class="badge badge-danger"> Disabled</span>
                            @endif
                        </td> -->
                        <td>
                            <a href="{{ route('dashboard.category.product', $cate->id) }}" title="product"
                                class="fa-solid fa-pen-to-square fa-xl"></a>
                            <a href="{{ route('dashboard.category.delete', $cate->id) }}" title="Delete"
                                class="fa-solid fa-circle-minus fa-xl"></a>
                            <a href="{{ route('dashboard.category.show', $cate->id) }}" title="Copy"
                                class="fa-solid fa-copy fa-xl"></a>
                                
                            <a href="{{ route('dashboard.category.show', $cate->id) }}" title="Show"
                                class="fa-solid fa-eye fa-xl"></a>
                           
                             
                        </td>


                    </tr>
              <?php endforeach; ?>
                </tfoot>
        </table>
    </div>
</div>
<!-- /.row -->


<!-- /.row -->

<!-- Main row -->

<!-- /.row -->
</div>


<!-- /.content -->
</section>
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
    <strong>Lê Hải Dương</a>.</strong>
    Test Intern PhP
    <div class="float-right d-none d-sm-inline-block">
      <b></b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="Resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="Resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Resources/js/adminlte.js"></script>
<script src="https://kit.fontawesome.com/cdb64ec79b.js" crossorigin="anonymous"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="Resources/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="Resources/plugins/raphael/raphael.min.js"></script>
<script src="Resources/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="Resources/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="Resources/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="Resources/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Resources/js/pages/dashboard2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
