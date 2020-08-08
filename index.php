<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<p class="logout">Поздравляем! Вы вошли на защищенную страницу. <a href="logout.php">Нажмите здесь</a> для выхода.</p>
<a class="link-page" href="import.php">Журнал импорта</a>
<a class="link-page" href="import.php">Журнал экспорта</a>
<a class="link-page" href="import.php">Журнал транзита</a>
<a class="link-page" href="import.php">Журнал задержанных грузов</a>
<!-- <div class="embed-responsive"></div> -->





</body>
</html>
