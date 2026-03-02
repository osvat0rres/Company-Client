<?php
    include "database.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];

        if(!empty($id)){
            $sql = "DELETE FROM inventory WHERE id = '$id'";

            if($connect->query($sql) === TRUE){
                echo "Record deleted successfully";
            }else{
                echo "Error deleting record: " . $connect->error;
            }
        };
    };


    $connect->close();


?>