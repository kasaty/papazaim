<?php
    require_once '../connect/connect.php';
    
    $Report_name = $_POST['Report_name'];
    $Email = $_POST['Email'];
    $Number_dogovor = $_POST['Number_dogovor'];
    $Messeng = $_POST['Messeng'];

    $nameFile =  $_FILES['File']['name'];
    $tmp_name = $_FILES['File']['tmp_name'];
    $RegFile = time() . $nameFile;
 
    move_uploaded_file($tmp_name, "../resources/dock_users_report/" . $RegFile );


    $result = mysqli_query($connect, "INSERT INTO `report` (`Report_name`, `Email`, `Number_dogovor`, `Messeng`, `File`) VALUES ('$Report_name', '$Email', '$Number_dogovor', '$Messeng', '$RegFile')");
        if(!$result){
            die("Неверный запрос");
        }
    sleep(1);
    header("Location: /claim.php");

    ?>

    
    





