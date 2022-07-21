<?php
    require_once '../connect/connect.php';
    
    session_start();
 
    $Surname = $_POST['Surname'];
    $Name = $_POST['Name'];
    $MiddleName = $_POST['MiddleName'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    function gen_password($length = 6)
    {				
        $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP'; 
        $size = strlen($chars) - 1; 
        $password = '';
        while($length--) {
            $password .= $chars[random_int(0, $size)]; 
        }
        return $password;
    }
    $newPassword = gen_password(8);
    $newPAassword = md5($newPassword);
    mysqli_query($connect, "INSERT INTO `firstdata` (`Surname`, `Name`, `MiddleName`, `Number`, `Email`, `password`) VALUES ('$Surname', '$Name', '$MiddleName', '$Number', '$Email', '$newPAassword')");
    $to = $Email;
    $subject = 'Ваш пароль';
    $message = $newPassword;

    mail($to, $subject, $message);

    header("Location: /login.php");


?>
