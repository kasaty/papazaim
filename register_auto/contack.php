<?php
    require_once '../connect/connect.php';
    
    $Name = $_POST['Name'];
    $Messeng = $_POST['Messeng'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];


    $result = mysqli_query($connect, "INSERT INTO `contack` (`Name`, `Email`, `Number`, `Messeng`) VALUES 
                                                        ('$Name', '$Email', '$Number', '$Messeng')");
        if(!$result){
            die("Неверный запрос");
        }
    sleep(1);
    header("Location: /contacts.php");

    ?>
