<?php
require_once "../helpers/function.php";
if(empty($_SESSION['user']))
{
    header("Location:http://localhost:3000/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>история игр</title>
    <link rel="icon" href="..images/картинка.png ">
    <link rel="stylesheet" href="..styles/main.css">
</head>
<body>
    <header>
        <img width="100px"height="100px"src="images/картинка.png"alt="Логотип">
        <h1>История игр</h1>
    </header>
    <nav>
        <a href="/">Фото</a>
        <a href="/logout.php">О себе</a>
         
    </nav>
    </html>