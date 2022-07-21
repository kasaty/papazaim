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
.header{position:relative;margin-bottom:55px;width: 100%;
box-shadow: 0px -5px 5px -5px rgba(34, 60, 80, 0.6) inset;}
.layout__cell {margin: 0 auto;max-width: 820px;}
.itemtextblock{margin-bottom: 70px;}
.content--heading {font-size: 24px;font-weight: normal;margin-bottom: 16px;color: #000;}
.content--text a, .content--text {font-size: 18px;line-height: 29px;font-weight: normal;margin-top:15px;}
.page-title{font-size:40px;margin-bottom:55px; display:block;}
.calculator-input{width: 300px;}
.content--image {margin: 40px 0;border-radius: 12px;}
.default-block {background: #fff;box-shadow: 0 2px 20px rgb(0 0 0 / 10%);border-radius: 10px;padding: 40px;position: relative;}
</style>

<?php require 'header_footer/header.php';?>
<div class="dwaca">
    <div class="layout__cell">
                <span class="page-title">Банковская карта</span>
                <div class="get__money-items">
                    <div class="itemtextblock">

                        <div class="content--text">
                        Займ можно погасить онлайн в Личном кабинете с помощью перевода. Оплату можно произвести с любой карты, любых банков.                        </div>
                        <div class="content--text">
                        1. Для этого необходимо зайти в ваш <?php
if(!isset($_SESSION['Login'])) {?>
<a href="login.php" style="text-align: center;font-size: 1em;color: #007bff;text-decoration:none;">личный кабинет</button></a>
<?php } else {?>
<a href="profile.php" style="text-align: center;font-size: 1em;color: #007bff;text-decoration:none;">личный кабинет</button></a>
<?php }
?>. Если Вы забыли пароль, перейдите в раздел «Забыли пароль?»</div>
                        </div>

                        <div class="itemtextblock">
                            <div class="content--text">
                                <div class="default-block content--image"><img src="resources/images/bk2.jpg"/></div>
                                <p>2. После того, как вы попали в личный кабинет, в блоке «Открытый займ» доступно окно ввода оплаты. Укажите сумму, которую хотите внести на Ваш счет. Активный заём Вы можете погасить частично, согласно Вашему графику платежей или полностью.</p>
                                <div class="default-block content--image"><img src="resources/images/bk3.jpg"/></div>
                                <p>3. Укажите номер карты, срок действия и имя держателя карты, с которой планируете погасить активный заём. Будьте внимательны и укажите все данные точно так же, как указано на лицевой стороне карты. Далее на обратной стороне карты найдите 3 или 4 цифры, введите их в поле CVC/CVV.</p>
                                <div class="default-block content--image"><img src="resources/images/bk4.jpg"/></div>
                                <p>4. После того как вы проверили корректность введенных вами данных банковской карты, нажмите кнопку «Оплата».</p>
                                <div class="default-block content--image"><img src="resources/images/bk5.jpg"/></div>
                                <p>5. Далее следуйте инструкциям банка, выпустившего Вашу карту. Вам необходимо будет ввести код подтверждения операции на странице Вашего банка.</p>
                                <p>6. После успешной оплаты к Вам придёт SMS-сообщение о погашении активного займа.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
            <p style="font-size:14px;text-align:center;opacity: .3;"><a href="/" style="text-decoration: none;">Главная страница</a> > Как погасить<p>
            <div style="position:sticky;top:20px;"><?php require 'calcul.php';?></div>   
            </div>
    </div>
</div>

<?php require 'header_footer/footer.php';?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="main.js"></script>

</body>
</html>