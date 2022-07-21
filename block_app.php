
<style>
.block__application--clear {
    margin-bottom: 10%;
}
.block__application--clear {
    position: relative;
}
.block__application--clear {

    display: flex;
    align-items: center;
    padding: 32px;
    background: #017AE8;
    border-radius: 12px;
    margin-top: 70px;
}


.get_money{
    background: #ffffff;
    color: #000000;
    height: 50px;
    align-self: center;
    border: none;
    border-radius: 10px;
    font-size: 1em;
    font-family: "Roboto Bold", sans-serif;
    font-weight: 300;
}
.block__application--clear a{
margin-left:1%;
width: 35%;
}
.get_money:hover
{
    color:#000000;
	background-color: #ffffffc2;
	cursor: pointer;
    transition: .3s linear;
    box-shadow: 0 2px 20px rgb(0 0 0 / 10%);
}
.title__application{
    font-size:1.2em;
    color: #ffffff;
}
.coin1{
    position: absolute;
    bottom:95%;
    right: 95%;
}

.coin2{
    position: absolute;
    bottom:90%;
    right: 30%;
}

.coin3{
    position: absolute;
    top:92%;
    right: 50%;
}

</style>


<div class="block__application--clear">
    <img src="resources/images/money1.svg" alt="" class="coin1">
    <img src="resources/images/money2.svg" alt="" class="coin2">
    <img src="resources/images/money3.svg" alt="" class="coin3">
    <div class="title__application">
    Заполните заявку за 8 минут и деньги будут у вас уже сегодня! Рассмотрение заявки мгновенно!
    </div>
    <a href="anket.php" style="text-decoration: none; color:#000000;"><button class="get_money">Получить деньги</button></a>
</div>