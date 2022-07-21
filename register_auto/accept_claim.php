<?php
    require_once '../connect/connect.php';
    $Accept = 1;
    
    $addid = $_POST['addid'];
    $getDate = mysqli_query($connect, "SELECT * FROM `report` WHERE id = $addid");
    $result = mysqli_query($connect, "UPDATE report SET Status = $Accept WHERE  id = $addid");
        if(!$result){
            die("Неверный запрос");
            }

    header("Location: /admin/claim.php");

?>