<?php
    require_once '../connect/connect.php';
    
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $MiddleName = $_POST['MiddleName'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Job = $_POST['Job'];
    $Income = $_POST['Income'];
    $Amounts = $_POST['Amounts'];
    $Period = $_POST['Period'];
 
    $nameFile =  $_FILES['File']['name'];
    $tmp_name = $_FILES['File']['tmp_name'];
    $RegFile = time() . $nameFile;
 
    move_uploaded_file($tmp_name, "../resources/dock_users_anket/" . $RegFile );




    function Number_dogovor($length = 8)
    {				
        $chars = '1234567890'; 
        $size = strlen($chars) - 1; 
        $password = '';
        while($length--) {
            $password .= $chars[random_int(0, $size)]; 
        }
        return $password;
    }
    $Number_dogovor = Number_dogovor(10);


    $result = mysqli_query($connect, "INSERT INTO `anket` (`Name`, `Surname`, `MiddleName`, `Number`, `Email`, `Job`, `Income`, `Amounts`, `Period`, `File`, `Number_dogovor`) VALUES 
                                                        ('$Name', '$Surname', '$MiddleName', '$Number', '$Email', '$Job', '$Income', '$Amounts', '$Period', '$RegFile', '$Number_dogovor')");
        if(!$result){
            die("Неверный запрос");
        }
    sleep(1);
    header("Location: /anket.php");

    ?>

    