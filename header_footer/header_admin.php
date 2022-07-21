<header class="header">
    <a href='index.php'><img src="../resources/images/logo.svg"  width="150px" height="80px"/></a>
    <nav class="navigation">
        <a href="index.php" title="Как получить деньги" >Анкеты</a>
        <a href="claim.php" title="Как оформить займ" >Жалобы</a>
        <a href="wish.php" title="Как получить деньги" >Пожелание | Предложения</a>
    </nav>
<?php
session_start();
if(!isset($_SESSION['Admin'])) {?> 
    <a href="/exit.php"><button class="cabinet">Выход</button></a>
<?php }
session_write_close();
?>
</header>