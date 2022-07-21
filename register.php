<?php
session_start();
if(isset($_SESSION['Login']))
{
    header("Location: index.php");
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация|Авторизация</title>
    <link type="text/css" href="resources/style.css" rel="stylesheet" media="screen, projection">
	<link rel="shortcut icon" href="../resources/images/logo.svg" type="image/svg">
</head>
<body class="full-bg-wh">

<a href='index.php'><img src="../resources/images/logo.svg"  width="150px" height="80px"/></a>

<div class="form-center">
	<form class="form-reg" action="/register_auto/registr.php" method="POST">
		<p><input class="input_rl" type="text" name="Surname" required placeholder="Введите фамилию"></p>
		<p><input class="input_rl" type="text" name="Name" required placeholder="Введите имя"></p>
		<p><input class="input_rl" type="text" name="MiddleName" required placeholder="Введите отчество"></p>
		<p><input class="input_rl" type="text" data-mask="phone" name="Number" required placeholder="Введите телефон"></p>
		<p><input class="input_rl" type="email" name="Email" required placeholder="Введите почту"></p>
		<button type="submit" class="button-action">Зарегистрироваться</button>
				<p>
					<div style="font-family: sans-serif;">У вас уже есть аккаунт? - <a href="/login.php">Авторизируйтесь!</a></div>
                </p>
                <p>
					<div style="font-family: sans-serif;">Хочешь вернутсья ?- <a href="/index.php">На главную!</a></div>
				</p>
				
	</form>
</div>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="main.js"></script>

</body>
</html>
