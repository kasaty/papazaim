<?php
require_once '../connect/connect.php';

$login = $_POST['Number'];
$password = $_POST['Password'];
$password = md5($password);

//Check table users
//Отправляет запрос на базу данных
$mysqli_check = mysqli_query($connect, "select * from firstdata where Number='$login'");
//Выбирает строку из результатов в ассоциативном массиве
$row = mysqli_fetch_array($mysqli_check);


$quary_b = mysqli_query($connect, "select * from firstdata where Password='$password' and Number='$login'");
$row_pass = mysqli_fetch_array($quary_b);

if(!empty($login) and !empty($password)){
    if ($login == $row['Number'] and $password == $row_pass['Password']) {
    session_start();
        if(!isset($_SESSION['Login'])){
            $_SESSION['Login'] = $login;
            if($login == "+7(950)783-70-63"){
                header('Location: /admin/index.php');

            }else{
            header('Location: /index.php');
            }
            }else{
                header('Location: /index.php');
                }

        session_write_close();
        }else{
            echo 'Некоректный пользователь';
            header('Location: ../login.php');
            }
    }else{
        echo 'Пустой логин или пароль';
        header('Location: ../login.php');
        }

?>