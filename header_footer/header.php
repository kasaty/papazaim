<header class="header">
    <a href='index.php'><img src="../resources/images/logo.svg" class='logo' width="150px" height="80px"/></a>


        <nav class="navigation">
            <a class='navA'href="get-money.php" title="Как оформить займ" >Как оформить займ</a>
            <a class='navA'href="on-card.php" title="Как получить деньги" >Как получить деньги</a>
            <a class='navA'href="bank-card.php" title="Как погасить" >Как погасить</a>
            <a class='navA'href="about-us.php">О нас</a>
            <a class='navA'href="faq.php" title="Вопросы и ответы">Вопросы и ответы</a>
            <a class='navA'href="claim.php" title="Пожаловаться">Пожаловаться</a>
        
<?php
session_start();
if(!isset($_SESSION['Login'])) {?>
<a href="login.php"><button class="cabinet">Личный кабинет</button></a>
<?php } else {?>
    <a href="profile.php"><button class="cabinet">Личный кабинет</button></a>   
    <a href="exit.php"><button class="cabinet">Выход</button></a>
<?php }
session_write_close();
?>
</nav>
<div class="burger">
            <span></span> 
        </div>
</header>