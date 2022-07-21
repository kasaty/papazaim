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
.content--heading {font-size: 24px;font-weight: normal;margin-bottom: 16px;color: #000;margin-top: 20px;}
.content--text a, .content--text {font-size: 18px;line-height: 29px;font-weight: normal;margin-top:15px;}
.page-title{font-size:40px;margin-bottom:55px; display:block;}
.calculator-input{width: 300px;}
.content--image {margin: 40px 0;border-radius: 12px;}
.default-block {background: #fff;box-shadow: 0 2px 20px rgb(0 0 0 / 10%);border-radius: 10px;padding:40px;position: relative;display: flex;flex-direction: column;}
</style>

<?php require 'header_footer/header.php';?>
<div class="dwaca">
    <div class="layout__cell">
                <span class="page-title">Контакты</span>
                <div class="get__money-items">
                    <div class="itemtextblock">

                        <div class="content--text">
                        <p>Место нахождения Общества: 454091, Омская область, г. Омск, ул. Щербанева, д. 27, пом. 43, офис 308</p>
                        <p>Почтовый адрес: 620000, Свердловская область, г. Екатеринбург, ул. Ленина, 39 А/Я 124.</p>
                        <p>Адрес обособленного подразделения: Cвердловская область, город Екатеринбург, ул. Белинского, д. 83, оф. 2001.</p>
                        <p>Общество предоставляет онлайн займы. Выдача займов в офисе (офлайн заем), Обществом не осуществляется.</p>
                        <p>Режим работы Общества: 07.00 - 18.00 часов Московского времени, суббота – воскресенье выходной.</p>
                        <p>Генеральный директор Общества Масленникова Екатерина Анатольевна, назначена с 06.12.2019 года.</p>   
                        </div>                       
                        </div>

                <div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2c84da2b6ff589b0c728858a3e8f641c406578b29d9d4a9488e4b6041738e7b9&amp;width=820&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>

                        <p class="content--heading">Служба поддержки</p>
                        <div class="default-block content--image">
                        <span style="margin-bottom:3%;" >При возникновении проблем при заполнении заявки или на сайте, напишите нам и мы с вами свяжемся в максимально короткие сроки. Подробно опишите проблему.</span>
                            	<form action="/register_auto/contack.php" method="post">
                                    <div style="display:flex;">
		                            <input class="input_report" type='text' name="Name" required placeholder="Имя">
		                            <input class="input_report" type="Email" name="Email" required placeholder="Email">
                                    <input class="input_report" type='text' data-mask="phone" name="Number" required placeholder="Введите свой телефон">
                                    </div>
                                    <p><textarea class="input_report_messeng" name="Messeng" required placeholder="Сообщение"></textarea></p>
                                <button type="submit" class="button-action" style="font-weight:300;font-size:18px;padding: 12px 40px;">Отправить</button>

	                            </form>
                        </div>
                        <?php require 'block_app.php';?>
                    </div>
                </div>
            <div style="position:sticky;top:20px;">
            <p style="font-size:14px;text-align:center;opacity: .3;"><a href="/" style="text-decoration: none;">Главная страница</a> > <a href="/about-us.php" style="text-decoration: none;">О нас</a> > Контакты<p>
            
            <div class="menu--aside">
                        <a href="/documents.php" class="menuitem--aside">Документы</a>
                        <div class="current__menuitem menuitem--aside">Контакты</div>
            </div>


            <div style="position:sticky;top:20px;"><?php require 'calcul.php';?></div>   
            </div>
    </div>
</div>



<?php require 'header_footer/footer.php';?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="main.js"></script>

</body>
</html><!DOCTYPE html>
