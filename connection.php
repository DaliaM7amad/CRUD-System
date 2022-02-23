<?php
try{
    $dsn="mysql:dbname=storedb;host=localhost";
    $dbusername="root";
    $dbpassword="";
    $connection= new PDO($dsn,$dbusername,$dbpassword);
}
catch(PDOException $exception){
    echo $exception->getMessage();
}