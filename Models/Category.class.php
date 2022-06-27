<?php 



class Category 
{
    public $CDB;
    public function __construct()
    {
        
        try{
            $this ->CDB=connection::connect();
        }catch(Exception $e){
            die ($e->getMessage());
        }
    } 
    public function listAllCategory(){
        try{
            $query="SELECT * FROM Category order by CategoryId ASC";
            $smt =$this ->CDB->prepare($query);
            $smt->execute();
            return $smt ->fetchAll(PDO::FETCH_OBJ);
            

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
   

}

