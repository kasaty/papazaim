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
.default-block {background: #fff;box-shadow: 0 2px 20px rgb(0 0 0 / 10%);border-radius: 10px;padding: 40px;position: relative;display: flex;}
</style>

<?php require 'header_footer/header.php';?>
<div class="dwaca">
    <div class="layout__cell">
                <span class="page-title">О нас</span>
                <div class="get__money-items">
                    <div class="itemtextblock">

                        <div class="content--text">
                        ООО МКК «ПапаЗайм» – надежная финансовая организация, ведущая свою деятельность по всей территории России и обеспечивающая быстрое оформление и выдачу займов онлайн.
                        </div>
                        <div class="content--heading">Почему мы?</div>
                        <div class="content--text">
                        ПапаЗайм – это быстрый удобный онлайн способ решить текущие финансовые вопросы в случае, когда до зарплаты еще несколько дней, а Вам нужно «перехватить» деньги на оплату покупок, счетов или срочных платежей.
                        </div>                       
                        </div>

                        <div class="itemtextblock">
                            <div class="content--text">
                                <div class="default-block content--image"><img src="resources/images/about_us2.svg"/>
                                <p style="margin-left:25px;">Вам не нужно ехать в отделение банка и собирать справки, все происходит онлайн, с любого Вашего устройства. Быстро, понятно и в любое время.</p>
                            </div>
                             <p>ПапаЗайм одобрить заявку, даже когда отказывают банки. А закрытые займы у нас - положительно влияют на Вашу общую кредитную историю.</p>
                             <p>Онлайн калькулятор на сайте поможет выбрать нужную сумму и срок, а также посчитает конечную сумму выплаты.</p>
                             <p>Компания обеспечивает прозрачные условия предоставления займов без «скрытых» комиссий. Вся информация представлена на сайте papazaim.com, а все условия отражены в Правилах предоставления потребительских займов и общих условиях договора потребительского займа.</p>
                             <p>ПапаЗайм – сильное мужское плечо в трудной финансовой ситуации.</p>
                             <p>Займи у Папы, ведь Папа может - Папа поможет.</p>
                             <p>С пожеланиями и предложениями Вы можете написать нам: support@papazaim.com</br>Свидетельство Центрального банка РФ о внесении в Реестр микрофинансовых организаций получено нами 23 июля 2019 года за регистрационным номером 1903475009341</p>   
                            </div>
                        </div>
                    </div>
                </div>
            <div style="position:sticky;top:20px;">
            <p style="font-size:14px;text-align:center;opacity: .3;"><a href="/" style="text-decoration: none;">Главная страница</a> > О нас<p>
            <div class="menu--aside">
                        <a href="/documents.php" class="menuitem--aside">Документы</a>
                        <a href="/contacts.php" class="menuitem--aside">Контакты</a>
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
</html>