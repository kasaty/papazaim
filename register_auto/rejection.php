<?php
    require_once '../connect/connect.php';
    $Accept = 0;
    
    $addid = $_POST['addid'];
    $getDate = mysqli_query($connect, "SELECT * FROM `anket` WHERE id = $addid");
    
    while($row = mysqli_fetch_array($getDate)){
        $rowAccept = $row[0];
    }        
    $result = mysqli_query($connect, "UPDATE anket SET Status = $Accept WHERE  id = $addid");
        if(!$result){
            die("Неверный запрос");
            }

    header("Location: /admin/index.php");

?>