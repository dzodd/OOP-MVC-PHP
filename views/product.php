<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'views/Layout/header.php' ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="https://lampart-vn.com/wp-content/uploads/2019/12/logo.png" alt="Lampart-Logo">
    </div>

    <!-- Navbar -->
    <?php include_once 'views/Layout/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once 'views/Layout/aside.php' ?>
    '
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">List Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="?c=product">Dashboard</a></li>
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
          <h3 class="card-title"></h3>
          <div class="card-tools">
            <a href="?c=createProduct" title="Create New" class="fa-solid fa-circle-plus fa-2xl"></a>

          </div>
        </div>
        <!-- End box Info -->
        <div class="card">
          <div class="card-body p-0">
            <table id="example" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="white-text center-align">ID</th>
                  <th class="white-text center-align">Name</th>
                  <th class="white-text center-align">Image</th>
                  <th class="white-text center-align">Category</th>
                  <th class="white-text center-align">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($this->ModelProduct->listAllProduct()  as $product) :    ?>
                  <tr>
                    <td><?php echo $product->ProductId ?></td>
                    <td><?php echo $product->ProductName ?></td>
                    <td>
                      <img src="Resources/img/<?php echo $product->ProductImage ?>" style="width:30px; border-radius:100%" class="img-circle elevation-2" alt="Image">
                    </td>
                    <td><?php echo $product->CategoryName ?></td>
                    <td>
                      <a href="?c=findProduct&id=<?php echo $product->ProductId ?>" title="Edit" class="fa-solid fa-pen-to-square fa-xl"></a>
                      <a href="?c=destroyProduct&id=<?php echo $product->ProductId ?>" title="Delete" class="fa-solid fa-circle-minus fa-xl"></a>
                      <a href="?c=copyProduct&id=<?php echo $product->ProductId ?>" title="Copy" class="fa-solid fa-copy fa-xl"></a>
                      <a href="?c=detailProduct&id=<?php echo $product->ProductId ?>" title="Show" class="fa-solid fa-eye fa-xl"></a>


                    </td>


                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- ./wrapper -->
  <footer class="main-footer">
    <strong>Lê Hải Dương</a>.</strong>
    Test Intern PhP
    <div class="float-right d-none d-sm-inline-block">
      <b></b> 3.2.0
    </div>
  </footer>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->

  <?php include_once 'views/Layout/script.php' ?>


</body>

</html>