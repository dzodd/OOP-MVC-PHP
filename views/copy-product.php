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
              <h1 class="m-0">Copy Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="?c=Product">Dashboard</a></li>
                <li class="breadcrumb-item ">Product</li>
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
          <h3 class="card-title">Copy Product</h3>
          <div class="card-tools">
            <a href="?c=Product" title="Back" class="fa-solid fa-backward-step fa-2xl"></a>


          </div>
        </div>
        <!-- End box Info -->
        <div class="card">
          <div class="card-body p-0">
            <form id="quickForm" action="?c=copy" method="POST" enctype="multipart/form-data" >
              <div class="card-body">
              
                 
                  <input type="text" value="<?php echo $EditProduct->ProductImage ?>" name="product-image" class="form-control" hidden >
                <div class="form-group">
                  <label for="exampleInputEmail1">Name Product</label>
                  <input type="text" value="<?php echo $EditProduct->ProductName ?>" name="product-name" class="form-control" placeholder="Enter name product">
                </div>
            
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <select name="category-id" id="" required="" class="form-control">
                    <option value="1" style="display:none">Select categories</option>
                    <?php foreach ($this->ModelCategory->listAllCategory()  as $cate) : ?>
                      <option  value="<?php echo $cate->CategoryId ?>" <?php echo $cate->CategoryId == $EditProduct->CategoryId ? 'selected' : '' ?>>   <?php echo $cate->CategoryName ?>  </option>
                    
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group" style="width: 150px; height:150px; ;position: relative;border-radius:100%">
                  <img src="Resources/img/<?php echo $EditProduct->ProductImage?>" alt="Image Product" style="width: 100%; height:100%;border-radius:100%;z-index:-1" id="output-image">
                
                

                </div>
                <input   type="file"  name="product-image" id="product-img">
                <!-- /.card-body -->
                <div class="card-footer">
                  <button  type="submit" class="btn btn-primary">Clone</button>
                </div>
            </form>
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