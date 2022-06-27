<?php

class connection{
    public static function connect(){
        $x = new PDO("mysql:host=localhost;dbname=lamparttest;charset = uft8","root","");
        $x->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $x;
    }
}