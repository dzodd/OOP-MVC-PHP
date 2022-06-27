<?php 
include_once 'Config/Connection.php';
include_once 'Controllers/Controller.php';


$Controller = new control();

if(!isset($_REQUEST['c'])){
    $Controller->product();
}else{
    $action = $_REQUEST['c'];
    call_user_func(array($Controller ,$action));
}