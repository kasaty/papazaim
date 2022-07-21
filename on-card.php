<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="vimeport" content="width=device-wigth"> 
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
                <span class="page-title">На карту</span>
                <div class="get__money-items">
                    <div class="itemtextblock">

                        <div class="content--text">
                        Современные карты позволяют моментально проводить платежи и переводы, поэтому мы используем самые надежные и проверенные временем платежные системы и их карты. Скорость решения по заявке позволяет за очень короткий промежуток времени совершить денежный перевод на Вашу карту, после чего Вы можете использовать эти деньги на любые цели.
                        </div>
                        <div class="content--text">
                        Главное при оформлении микрозайма - убедится, что карта принадлежит Вам, карта не просрочена и не заблокирована. Тогда процесс оформления заявки и получения денег займёт у вас минимум времени.
                        </div>
                        </div>

                        <div class="itemtextblock">
                            <div class="content--heading">Мы работаем со следующими платежными системами:</div>

                            <div class="inner-content type-card">
                            <img src="resources/images/visa.svg" />
                            <img src="resources/images/mastercard.svg" />
                            <img src="resources/images/world.svg" width="180px" height="180px"/>
                            </div>


                            <div class="content--text">
                                <div class="content--heading">Как правильно прикрепить свою карту в заявке?</div>
                                <p>1. На последнем шаге заполнения заявки необходимо будет сфотографировать лицевую сторону карты. Это необходимо для вашей безопасности, так мы проверяем, что владелец карты и ФИО в указанной Вами заявке совпадают.</p>
                                <div class="default-block content--image"><img src="resources/images/ok1.jpg"/></div>
                                <p>2. После этого появится окно где можно привязать Вашу карту. Нажмите «Добавить новую карту».</p>
                                <div class="default-block content--image"><img src="resources/images/ok2.jpg"/></div>
                                <p>3. Откроется окно ввода данных банковской карты. Необходимо указать данные Вашей банковской карты и нажать «Подтвердить карту».</p>
                                <div class="default-block content--image"><img src="resources/images/ok3.jpg"/></div>
                                <p>4. При подтверждении карты с Вашей карты спишется от 1 до 10 рублей и сразу же вернется на счет. После успешного подтверждения вы попадете в Ваш личный кабинет.</p>
                           
                            </div>
                        </div>
                    </div>
                    <?php require 'block_app.php';?> 
                </div>
            <div>
            <p style="font-size:14px;text-align:center;opacity: .3;"><a href="/" style="text-decoration: none;">Главная страница</a> > Как получить деньги<p>
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