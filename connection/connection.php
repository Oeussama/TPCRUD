<?php 

$server = 'localhost';
$db = 'db_ifmit';
$username = 'root';
$password = '';

    try{
        $connnection = NEW PDO ("mysql:host=$server;dbname=$db",$username,$password);
    }catch(PDOException $e){
            echo $e->getMessage();
    }