<?php

include_once 'libraries/autoload.inc.php';
class control
{
    public $ModelCategory;
    Public $ModelProduct;
    public function __construct(){
        $this->ModelCategory = new Category();
        $this->ModelProduct = new Product();
    }
    public function category(){
        include_once 'views/category.php';
    }
    public function product(){
        include_once 'views/Product.php';
    }
    public function createProduct(){
        include_once 'views/create-product.php';
    }
    public function store(){
        $pro = new product();
        $pro->ProductName = $_POST['product-name'];
        $pro->CategoryId = $_POST['category-id'];
        //xu ly upload
        if (!empty($_FILES['product-image'])) {
            
            $filename = time() . '.' . $_FILES['product-image']['name'];
        }

        if ($_FILES["product-image"]['error'] != 0) {
            $e = 'Dữ liệu upload bị lỗi';
            
        }
        if (!isset($_FILES["product-image"])) {
            $e = "Dữ liệu không đúng cấu trúc";
            
        }
        $target_dir    = "Resources/img/";
        $target_file   = $target_dir . $filename;
        $allowUpload   = true;
        $file = $_FILES['product-image']['name'];               // ikn i missing what =))
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $MAXSIZE   = 800000;
        $allowtypes    = array('jpg', 'png', 'jpeg');


        //check size
        if ($_FILES["product-image"]["size"] > $MAXSIZE) {

            $allowUpload = false;
        }
        //check type
        if (!in_array($ext, $allowtypes)) {
          
            $allowUpload = false;
        }

        if ($allowUpload)
        {
            // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
            if (move_uploaded_file($_FILES["product-image"]["tmp_name"], $target_file))
            {
              
                $pro->ProductImage=$filename;
                
            
      
            }
           
        }
        else
        {
            $pro->ProductImage=$file;
        }

       
        $this->ModelProduct->create($pro);
        header("Location: ?c=product");
    }
    public function findProduct(){
        $EditProduct = new Product();
   
        if(isset($_REQUEST['id'])){
            $EditProduct = $this->ModelProduct->findId($_REQUEST['id']);
        }

        include_once 'views/edit-Product.php';
      
    }
    public function copyProduct(){
        $EditProduct = new Product();
   
        if(isset($_REQUEST['id'])){
            $EditProduct = $this->ModelProduct->findId($_REQUEST['id']);
        }

        include_once 'views/copy-Product.php';
      
    }
    public function copy(){
        $product = new product();
        $product->ProductName = $_POST['product-name'];
        $product->CategoryId = $_POST['category-id'];
        $product->ProductImage = $_POST['product-image'];
      
        $this->ModelProduct->create($product);
        header("Location: ?c=product");

    }
    public function editProduct(){
        $EditProduct = new product();
        $EditProduct->ProductName = $_POST['product-name'];
        $EditProduct->ProductId = $_POST['product-id'];
        $EditProduct->CategoryId = $_POST['category-id'];
        if(empty($_FILES["product-image"]["tmp_name"])){     //Neu khong upload anh
        $EditProduct->ProductImage= $_POST['product-image'];
        $this->ModelProduct->edit($EditProduct);
        header("Location: ?c=product");
        }
        $OldFile=$_POST['product-image'];
        if (!empty($_FILES['product-image'])) {
            
            $filename = time() . '.' . $_FILES['product-image']['name'];

        }

        if ($_FILES["product-image"]['error'] != 0) {
            $e = 'Dữ liệu upload bị lỗi';
            
        }
        $target_dir    = "Resources/img/";
        $target_file   = $target_dir . $filename;
        $allowUpload   = true;
        $file = $_FILES['product-image']['name'];               // ikn i missing what =))
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $MAXSIZE   = 800000;
        $allowtypes    = array('jpg', 'png', 'jpeg');


        //check size
        if ($_FILES["product-image"]["size"] > $MAXSIZE) {

            $allowUpload = false;
        }
        //check type
        if (!in_array($ext, $allowtypes)) {
          
            $allowUpload = false;
        }

        if (!isset($_FILES["product-image"])) {
            $e = "Bạn chưa nhập ảnh cho sản phẩm";
            $allowUpload = false;
            
        }
        
        if ($allowUpload)
        {
            // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
            if (move_uploaded_file($_FILES["product-image"]["tmp_name"], $target_file))
            {
                $EditProduct->ProductImage=$filename;
      
            }
           
        }
        else
        {
            $EditProduct->ProductImage= $OldFile;
        }
        
        $this->ModelProduct->edit($EditProduct);
        
            $OldDir = 'Resources/img/'.$OldFile;
          if (file_exists($OldDir)){
            unlink($OldDir);
          }
       

              
            
        
        
        include_once 'views/edit-Product.php';
    }
    public function destroyProduct(){
     
        $OldProduct = $this->ModelProduct->findId($_REQUEST['id']);
        $OldFile= $OldProduct->ProductImage;
        $OldDir = 'Resources/img/'.$OldFile;
        unlink($OldDir);
        $this->ModelProduct->delete($_REQUEST['id']);
        header("Location: index.php");
    }
    public function DetailProduct(){
        $EditProduct = new product();
   
        if(isset($_REQUEST['id'])){
            $EditProduct = $this->ModelProduct->findId($_REQUEST['id']);
        }

        include_once 'views/detail-Product.php';
    }
   
}
