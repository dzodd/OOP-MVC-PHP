<?php 



class Product 
{
    public $CDB;
    public $ProductId;
    public $ProductName;
    public $CategoryId;
    public $ProductImage;
    public function __construct()
    {
        
        try{
            $this ->CDB=connection::connect();
        }catch(Exception $e){
            die ($e->getMessage());
        }
    } 
    public function listAllProduct(){
        try{
            $query="SELECT product.ProductId , product.ProductName , product.ProductImage , category.CategoryName FROM `Product`, `category`  WHERE product.CategoryId=category.CategoryId order by product.ProductId ASC";
            $smt =$this ->CDB->prepare($query);
            $smt->execute();
            return $smt ->fetchAll(PDO::FETCH_OBJ);
            

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function create(product $data){
        try {
            $query = "INSERT INTO Product ( ProductName ,ProductImage , CategoryId) values (?,?,?) ";
            $this->CDB->prepare($query)->execute(array($data->ProductName,$data->ProductImage,$data->CategoryId));
            

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
    public function findId($id){
        try{
            $query="SELECT * From Product where ProductId=?";
            $smt =$this ->CDB->prepare($query);
            $smt->execute(array($id));
            return $smt ->fetch(PDO::FETCH_OBJ);
            

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Edit(product $data){
        try {
            $query = "UPDATE Product set ProductName=? ,ProductImage=? , CategoryId=? where ProductId=?";
            $this->CDB->prepare($query)->execute(array($data->ProductName,$data->ProductImage,$data->CategoryId , $data->ProductId));
            

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
    public function delete($id){
       try {
            $query = "DELETE FROM product where ProductId = ?";
            $smt = $this ->CDB->prepare($query);
            $smt ->execute(array($id));
       } catch (Exception $e) {
            die($e->getMessage());
       }
    }

}

