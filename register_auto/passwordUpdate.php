<?php
    require_once '../connect/connect.php';

    session_start();
    $Number = $_SESSION['Login'];
    
    $OldPassword = $_POST['OldPassword'];
    $NewPassword = $_POST['NewPassword'];
    $NewRepeatPassword = $_POST['NewRepeatPassword'];
    $NewPassword = md5($NewPassword);
    $OldPassword = md5($OldPassword);
    $NewRepeatPassword = md5($NewRepeatPassword);

    $getDate = mysqli_query($connect, "SELECT * FROM `firstdata` WHERE `Number` = '$Number'");
    $row = mysqli_fetch_array($getDate);
    
    $BdOldPassword = $row[6];
    $Email = $row[5];

    if($OldPassword == $BdOldPassword){
        if($NewPassword == $NewRepeatPassword){
            $result = mysqli_query($connect, "UPDATE `firstdata` SET `Password`='$NewPassword' WHERE `Number` = '$Number'");
            if(!$result){
                    die("Неверный запрос");
                }
            sleep(1);
            header("Location: /profile.php");

        }else{
            die("Введенные пароли не совпадают");
        }

    }else{
        die("Ваш старый пароль не совпадает");
    }

    


    $to = $Email;
    $subject = 'Ваш новый пароль';
    $message = $NewPassword;

    mail($to, $subject, $message);
    header("Location: /profile.php");

?>