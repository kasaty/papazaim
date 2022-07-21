<?php
session_start();

if(!isset($_SESSION['Login']))
{
    header('Location: login.php');
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
                <span class="page-title">Анкета</span>
                <div class="get__money-items">
                        <div class="itemtextblock">
                            <div class="content--text">

                                <div class="default-block content--image">
                            	<form action="/register_auto/anket.php" method="POST" enctype='multipart/form-data'>
                                    <div style='display:flex;flex-direction:column;align-items: center;'>
		                            <input class="input_anket" type='text' name="Name" required placeholder="Имя">
		                            <input class="input_anket" type="text" name="Surname" required placeholder="Фамилия">
                                    <input class="input_anket" type="text" name="MiddleName" required placeholder="Отчество">
                                    <input class="input_anket" type="text" data-mask="phone" name="Number" required placeholder="Введите телефон">
                                    <input class="input_anket" type="email" name="Email" required placeholder="Введите почту">
                                    <input class="input_anket" type="text" name="Job" required placeholder="Занятость">
                                    </div>
                                    <div>
                                    <div>
                                             <div class="display-flex-jus src">
                                                <span>Ваш доход </span>
                                                <div class="display-range-inner" id="display-Income">15</div>
                                            </div>
                                    <input type="range" min="30000" max="120000" id="Income" name="Income" value="30000" step="5000" oninput="fun()">
                                            <div class="display-flex-jus rc">
                                        <span>30.000</span>
                                        <span>75.000</span>
                                        <span>120.000</span>
                                            </div>
                                    </div>



                                    <div>
                                            <div class="display-flex-jus src">
                                                <span>Сумма займа</span>
                                                <div class="display-range-inner" id="display-Amounts">15</div>
                                            </div>
                                    <input type="range" min="5000" max="80000" id="Amounts" name="Amounts" value="5000" step="5000" oninput="fun()">
                                            <div class="display-flex-jus rc">
                                        <span>5000</span>
                                        <span>40.000</span>
                                        <span>80.000</span>
                                            </div>
                                        
                                    </div>
                                          
                                    <div>
                                            <div class="display-flex-jus src">
                                                <span>Срок займа</span>
                                                <div class="display-range-inner" id="display-Period">15</div>
                                            </div>
                                    <input type="range" min="3" max="36" id="Period" name="Period"  value="3" step="3" oninput="fun()">
                                            <div class="display-flex-jus rc">
                                        <span>3 месяца</span>
                                        <span>1 год 6 месяцев</span>
                                        <span>3 года</span>
                                            </div>
                                    </div>

		                        </div>                   
                                    <p>
		                            	<div style="font-size: 0.9em;"><label for="file-uploader"style="cursor: pointer;font-size: 0.9em;color: #007bff;">Прикрепить фото паспорта</label></div>
                                        <input type="File" id="file-uploader" name="File" multiple style="opacity: 0;position: absolute;z-index: -1;display:none;">
                                        <span id="selected_filename"  style="font-size: 0.9em;color: #007bff;"></span>
                                    </p>
                                <div style='display:flex;flex-direction:column;align-items: center;'>
                                <button type="submit" class="button-action" style="font-weight:300;font-size:18px;padding: 12px 40px;">Отправить</button>
                                </div>
	                            </form>                                
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php require 'block_app.php';?> 
                </div>
            <div>
            <p style="font-size:14px;text-align:center;opacity: .3;"><a href="/" style="text-decoration: none;">Главная страница</a> > Анкета<p>
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


<?php
}
?>
