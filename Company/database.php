<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "company";

    $connect = mysqli_connect($host,$user, $password, $database);

    // if($connect->connect_error){
    //     die("Connection failed: " . $connect->connect_error);
    // }else{
    //     echo "Connection seccesful";
    // }
?>