<?php
    include "database.php";

    $item = $_POST['item'];
    $id = $_POST['id'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];

    $category = "";
    if(isset($_POST['category'])){
        $category = implode(",", $_POST['category']);
    }

    $sql = "INSERT INTO inventory(id, item, category, price,availability)
           VALUES('$id', '$item', '$category', '$price', '$availability')";
           
    if($connect->query($sql) === TRUE){
        header("Location: inventory.php");
    }else{
        echo "ERROR: " . $connect->error;
    }
?>