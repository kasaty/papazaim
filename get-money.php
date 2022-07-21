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
.content--text a, .content--text {font-size: 18px;line-height: 29px;font-weight: normal;}
.page-title{font-size:40px;margin-bottom:55px; display:block;}
.calculator-input{width: 300px;}

</style>

<?php require 'header_footer/header.php';?>
<div class="dwaca">
    <div class="layout__cell">
                <span class="page-title">Как оформить займ</span>
                <div class="get__money-items">
                    <div class="itemtextblock">
                        <div class="content--heading">1. Выберите сумму и срок займа</div>
                        <div class="content--text">
                            Сумму и срок займа Вы выбираете самостоятельно с помощью калькулятора на нашем сайте. Вы сразу увидите крайнюю дату погашения займа, сумму начисляемого вознаграждения и общую сумму к выплате. Срок займа составляет от 5 до 30 дней, минимальная сумма займа — 1 000 рублей, максимальная — 15 000 рублей. Если у Вас уже есть профиль и погашенный заём – всё будет максимально просто - после этого шага Вам сразу придёт решение о выдаче займа.
                        </div>
                        </div>
                        <div class="itemtextblock">
                            <div class="content--heading">2. Зарегистрируйте профиль</div>
                            <div class="content--text">
                                <p>Внимательно ознакомьтесь с нашими Правилами предоставления займа, общими условиями займа, соглашениями и согласиями проставив галочки в подтверждение о согласии с условиями, указанными в документах и присоединению к ним. При повторном обращении к нам новая регистрация не потребуется.</p>
                                <p>Для завершения регистрации на сайте Вам необходимо ввести Ваш действующий номер телефона в соответствующее поле и нажать кнопку "Получить СМС-код". На указанный Вами номер мобильного телефона придет сообщение с уникальным кодом. Время получения СМС может занимать до 3 минут, но, как правило, оно приходит быстрее. Далее, введите СМС-код в специальное поле, заполните поля ИИН, укажите свой email и придумайте пароль к Вашему профилю. </p>
                            </div>
                        </div>
                        <div class="itemtextblock">
                            <div class="content--heading">3. Заполните анкету </div>
                            <div class="content--text">
                                <p>Для одобрения займа Вам необходимо предоставить достоверные данные, заполнив все поля
                                  предложенной анкеты. Обязательное требование для получения займа — действующий паспорт
                                  и действующая банковская карта любого банка России. Карта должна принадлежать Вам и на
                                  карте должна быть включена технология 3D-Secure. </p>
                                <p>Согласие с условиями договора на
                                  предоставление займа подтверждается электронной подписью путем ввода СМС-кода,
                                  полученного в СМС-сообщении на указанный при регистрации номер телефона.</p>
                            </div>
                        </div>
                        <div class="itemtextblock">
                            <div class="content--heading">4. Дождитесь решения о предоставлении займа</div>
                            <div class="content--text">Телефон, указанный в заявке, должен быть при Вас. На него может позвонить наш оператор, чтобы задать несколько вопросов. Окончательное решение поступит в виде смс- сообщения. Общее время рассмотрения заявки составляет от нескольких минут до одного дня.
                            </div>
                        </div>
                        <div class="itemtextblock">
                            <div class="content--heading">5. Займ одобрен!</div>
                            <div class="content--text">В случае одобрения мы отправим Вам деньги в течение нескольких минут. Зачисление суммы на Вашу банковскую карту зависит от скорости переводов Вашего банка. В личном кабинете вы всегда сможете просмотреть информацию о сумме, дате оплаты, возможностях продления займа.
                            </div>
                        </div>
                    </div>
                    <?php require 'block_app.php';?> 
                </div>
                
                  
                
            <div>
            <p style="font-size:14px;text-align:center;opacity: .3;"><a href="/" style="text-decoration: none;">Главная страница</a> > Как оформить займ<p>
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