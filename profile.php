<?php

session_start();

if(!isset($_SESSION['Login']))
{
    header('Location: /login.php');
}
else
{
?>
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Папа займ</title>
    <link type="text/css" href="resources/style.css" rel="stylesheet" media="screen, projection">
    <link rel="shortcut icon" href="../resources/images/logo.svg" type="image/svg">
</head>
<body>
<style>
.header{position:relative;margin-bottom:55px;width: 100%;box-shadow: 0px -5px 5px -5px rgba(34, 60, 80, 0.6) inset;}
.layout__cell {margin: 0 auto;max-width: 820px;}
.itemtextblock{margin-bottom: 70px;}
.content--heading {font-size: 24px;font-weight: normal;margin-bottom: 16px;color: #000;margin-top: 20px;}
.content--text a, .content--text {font-size: 18px;line-height: 29px;font-weight: normal;margin-top:15px;}
.page-title{font-size:40px;margin-bottom:55px; display:block;}
.calculator-input{width: 300px;}
.content--image {margin: 40px 0;border-radius: 12px;}
.default-block {background: #fff;box-shadow: 0 2px 20px rgb(0 0 0 / 10%);border-radius: 10px;padding: 40px;position: relative;display: flex;
    flex-direction: column-reverse;
    align-items: stretch;
    flex-wrap: wrap; margin:30px;}
.dwaca{display: flex;margin: 0 auto;width: 80%;flex-direction: row;align-items: center;}
</style>
<?php require 'header_footer/header.php';?>
<?php
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `firstdata` WHERE Number='$login'");
    $reportDb = mysqli_query($connect, "SELECT * FROM `report`");
    $anket = mysqli_query($connect, "SELECT * FROM `anket`");
    $row = mysqli_fetch_array($testquery);
    $rep = mysqli_fetch_array($reportDb);
    $ank = mysqli_fetch_array($anket);
?>
<div class="dwaca">
        
    <div>
    <span class="page-title">Личный кабинет</span>
    <div class="layout__cell">
        <span class="content--heading">Ваши данные</span>
        <div class="default-block ">
        
        <form action="/register_auto/passwordUpdate.php" method="post" id="example_2" style="display:none;">
        <input class="input_report" style="margin-top:10px;" type='text' name="OldPassword" required placeholder="Старый пароль">
        <input class="input_report" style="margin-top:10px;" type='text' name="NewPassword" required placeholder="Новый пароль">
        <input class="input_report" style="margin-top:10px;" type='text' name="NewRepeatPassword" required placeholder="Повторите новый пароль"><br>

        <div style='margin-top:10px;'><?php echo $hello;?></div><br>
        
        <button type="submit" class="button-action" style="margin-top:15px;width:150px;font-size:18px;">Сменить</button>
        </form>

<button id="example_2_1" onclick="
document.getElementById('example_2').style.display='none'; 
document.getElementById('example_2_1').style.display='none'; 
document.getElementById('example_2_2').style.display='block';" 
class="button-action" style="margin-bottom:15px;margin-right:auto;margin-left:auto;margin-top:15px;width:150px;font-size:18px;display:none;">Закрыть</button>
<button id="example_2_2" onclick=" 
document.getElementById('example_2').style.display='block';
document.getElementById('example_2_2').style.display='none'; 
document.getElementById('example_2_1').style.display='block';"
class="button-action" style="margin-right:auto;margin-left:auto;margin-top:15px;width:150px;font-size:18px;">Сменить пароль</button>
                <div class="puck"><p>Ваша почта</p><?php echo $row[5]; ?></div>
                <div class="puck"><p>Ваш номер телефона</p><?php echo $row[4]; ?></div>
                <div class="puck"><p>Ваше отчество</p><?php echo $row[3]; ?></div>  
                <div class="puck"><p>Ваша фамилия</p><?php echo $row[2]; ?></div>
                <div class="puck"><p>Ваше имя</p><?php echo $row[1]; ?></div>
         </div>
    </div>
        <div class="default-block">
            <div>
                <p class="content--heading">Жалобы</p>
            <table class='table'>
        <tr><th>Имя</th><th>Email</th><th>Номер договора</th><th>Файл</th><th>Дата</th><th>Статус жалобы</th></tr>
        <?php
        if($rep[7] == 0){
                $rejected_accept = "Не просмотрена";
            }else{
                $rejected_accept = "Просмотрена";
            }


        
        echo "<tr>";
        echo "<td>" . $rep[1] . "</td>";
        echo "<td>" . $rep[2] . "</td>";
        echo "<td>" . $rep[3] . "</td>";
        echo "<td>" . $rep[5] . "</td>";
        echo "<td>" . $rep[6] . "</td>";
        echo "<td>" . $rejected_accept . "</td>";
        echo "</tr>";
        ?>
            </table>
            </div>
            <div>
                <p class="content--heading">Заявки</p>
            <table class='table'>
        <tr><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Телефон</th><th>Почта</th><th>Номер договора</th><th>Сумма займа</th><th>Срок займа</th><th>Дата заявки</th><th>Статус заявки</th></tr>
        <?php
            if($ank[12] == NULL){
                    $ank_accept = "Не просмотрена";
                }else{
                if($ank[12] == 0){
                    $ank_accept = "Отклонена";
                }else{
                    $ank_accept = "Ободрена";
                }
            }
            
        echo "<tr>";
        echo "<td>" . $ank[2] . "</td>";
        echo "<td>" . $ank[1] . "</td>";
        echo "<td>" . $ank[3] . "</td>";
        echo "<td>" . $ank[4] . "</td>";
        echo "<td>" . $ank[5] . "</td>";
        echo "<td>" . $ank[13] . "</td>";
        echo "<td>" . $ank[8] . "</td>";
        echo "<td>" . $ank[9] . "</td>";
        echo "<td>" . $ank[11] . "</td>";
        echo "<td>" . $ank_accept . "</td>";
        echo "</tr>";
        ?>
            </table>
            </div>
        </div>
    </div>

</div>
<?php require 'header_footer/footer.php';?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="main.js"></script>

</body>
</html>
<?php
}
?>
