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
.default-block {background: #fff;box-shadow: 0 2px 20px rgb(0 0 0 / 10%);border-radius: 10px;padding: 40px;position: relative;display: flex;
    flex-direction: column-reverse;
    align-items: stretch;
    flex-wrap: wrap;
}
</style>

<?php require 'header_footer/header.php';?>
<div class="dwaca">
    <div class="layout__cell">
                <span class="page-title">Ваши права клиента нарушены?</span>
                <div class="get__money-items">
                    <div class="itemtextblock">

                        <div class="content--text">
                        Вы можете обратиться к нам в компанию через форму ниже. Все жалобы обязательно попадут к руководству компании и ваш вопрос будет решен с соблюдением всех прав заемщика, отраженных в федеральных законах, стандартах и предписаниях СРО и ЦБ, а также внутренних нормативах нашей компании.                        </div>         
                        </div>

                        <div class="itemtextblock">
                            <div class="content--text">

                                <div class="default-block content--image">
                                
                                <div style="display:flex;">
                                <img src="resources/images/report(1).svg"/>
                                <p style="margin-left:25px;">Мы предоставим вам ответ на электронную почту, указанную в форме в максимально короткие сроки</p>
                                </div>
                                
                                <div style="display:flex;">
                                <img src="resources/images/report(2).svg"/>
                                <p style="margin-left:25px;">Пожалуйста, заполните форму ниже</p>
                                </div>

                                <div style="display:flex;">
                                <img src="resources/images/report(3).svg"/>
                                <p style="margin-left:25px;">Нарушены ваши права как клиента?</p>
                                </div>

                                <div style="display:flex;">
                                <img src="resources/images/report(4).svg"/>
                                <p style="margin-left:25px;">Ваша жалоба будет рассмотрена на оперативном совещании</p>
                                </div>

                                </div>

                                <div class="default-block content--image">
                            	<form action="/register_auto/report.php" method="POST" enctype='multipart/form-data'>
                                    <div>
		                            <input class="input_report" type='text' name="Report_name" required placeholder="Имя">
		                            <input style="margin-left: 2%;s" class="input_report" type="Email" name="Email" required placeholder="Email">
                                    <input style="margin-left: 2%;s" class="input_report" type="text" name="Number_dogovor" required placeholder="Номер договора">
                                    <p><textarea class="input_report_messeng" name="Messeng" required placeholder="Сообщение"></textarea></p>
                                    </div>
		                            <p>
		                            	<div style="font-size: 0.9em;"><label for="file-uploader"style="cursor: pointer;font-size: 0.9em;color: #007bff;">Прикрепить файл</label></div>
                                        <input type="File" id="file-uploader" name="File" multiple style="opacity: 0;position: absolute;z-index: -1;display:none;">
                                        <span id="selected_filename"  style="font-size: 0.9em;color: #007bff;"></span>
                                    </p>
		                            <p>
		                            	<div style="font-size: 0.9em;">Для оспаривания кредитной истории<a href="/forma-zayavleniya-na-obzhalovanie-ki-2.docx" target="_blank" style="font-size: 0.9em;color: #007bff;text-decoration:none;"> скачайте форму </a>и прикрепите к обращению</div>
		                            
                                    </p>
                                <button type="submit" class="button-action" style="font-weight:300;font-size:18px;padding: 12px 40px;">Отправить</button>

	                            </form>                                
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php require 'block_app.php';?> 
                </div>
            <div>
            <p style="font-size:14px;text-align:center;opacity: .3;"><a href="/" style="text-decoration: none;">Главная страница</a> > Пожаловаться<p>
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