<?php

session_start();
if($_SESSION['Login'] == "+7(950)783-70-63"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Папа займ</title>
    <link type="text/css" href="../resources/style.css" rel="stylesheet" media="screen, projection">
</head>
<body>
<style>
.header{position:relative;margin-bottom:55px;width: 100%;}
.page-title{font-size:40px;margin-bottom:55px; display:block;}
table td{ 
    width:150px;
    text-align:center;
    word-break: break-all;
    border-top: 1px solid #e8edff;
    border-collapse:collapse;
    margin:15px 0px 15px 0px;
}
table td a{
    text-decoration:none;
    color:black;
}

tr:hover td {
  background: #e8edff;
}
table th{ 
    width:150px;
    text-align:center;
    word-break: break-all;
}

</style>
<?php require '../header_footer/header_admin.php';?>
<?php
    require_once '../connect/connect.php';
    $login = $_SESSION['Login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `firstdata`");
    $reportDb = mysqli_query($connect, "SELECT * FROM `report`");
    $anket = mysqli_query($connect, "SELECT * FROM `anket`");
    $row = mysqli_fetch_array($testquery);
    $rep = mysqli_fetch_array($reportDb);
?>
<div>
    <div style="margin-bottom:50px;">
        <span class="page-title" style="width:90%;margin:auto;margin-bottom:30px;">Пожелание | Предложения</span>
    </div>

        <div>
        <?php $sql = "SELECT * FROM contack"; ?>
        <?php if ($result = $connect->query($sql)) : ?>
                <table style="width:100%;margin:auto;">
                    <tr><th>Имя</th><th>Email</th><th>Номер</th><th style="width:350px;">Сообщение</th></tr>
                </table>

        <?php foreach ($result as $row) :  ?>
    
            
            <table style="width:100%;margin:auto;">

            <tr style="">
            <td><?= $row['Name'] ?></td>
            <td><?= $row['Email'] ?></td> 
            <td><?= $row['Number'] ?></td>
            <td style="width:350px;padding:15px 0px 15px 0px;"><?= $row['Messeng'] ?><input type="hidden" name="addid"  style='margin:15px 0px 15px 0px;'></td>
                </tr>
            </table>
            
        <?php endforeach; ?>
        <?php endif; ?>
        </div>

</div>
<?php require '../header_footer/footer_admin.php';?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="main.js"></script>
</body>
</html>
<?php
} else {
    echo "<script>history.back()</script>";
  }
?>