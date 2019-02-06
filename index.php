<?php
session_start();
require_once('conect.php');

?>
<!doctype html >
<html>
<head>

    <meta charset ='utf-8'>
    <meta name="keywords" content="английские слова, английский, english, english words, изучение английского, словарный запас, PuY, english puy, изучаем английский">
    <meta name="discription" content="Изучаем английские слова вместе с English PuY, пополняем словарный запас, выполняя упражнение разделенные по темам и по уровню сложности. На этом сайте английский может изучать как новичок , так и опытный англичанин закрепить свои знания. ">
    <title>Английские слова</title>

<body>
<nav class ="nav bar navbar-default">
    <div class="container-fluid">
        <div class="Logo">
            <span id="PUY" >PuY</span>
            <a href="index.php">
                <img src="image/label.png" style="width: 15%" title="PuY" alt="EnglishPuY">

            </a>

        </div>
        <div id="Abaut">
            <a href="Mail.php" title="Обратная связь">Обратная связь  </a>|
            <a href="Abaut.php" title="О нас">О нас</a>
        </div>
<div id="regist">



            <? if (isset($_SESSION['user_id'])){
                ?><a href ="index.php" > Главная</a>|
                <?php
            }else{?><a href="Login.php" title="Авторизация">Авторизация  </a>|
                <?php
            } ?>

            <?php if (isset($_SESSION['user_id'])){
                ?><a href ="logaut.php" > Выйти</a><?php
            } else {
                ?><a href="registr.php" title="Регистрация">Регистрация</a><?php
            } ?>




</div>
    </div>
</nav>
<div class="body">                                                               <? //  Оглавдение страницы  ?>
<div id="zaglav"> <h1>English words</h1></div>
    <br>
    <br>
    <br>
    <div id="text-glavny">
        Пополните свой словарный запас,
        Занимаясь по 10 минут в день.
    </div>


    <?php if (isset($_SESSION['user_id'])){
        ?>
        <div id="start1">
            <a href="Work.php"  >Начать обучение</a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="test-text">
            <p class="name-test1231"> Пройдите тест и узнайте ваш уровень </p>
            <a href="Test/test.php" class="btn btn-info"  id="button1" role="button" >Пройти тест</a>
        </div>
       <?php
    } else {
        ?>
        <div id="start">
            <a href="Work.php"  >Начать обучение</a>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="test-text">
            <p class="name-test1231"> Пройдите тест и узнайте ваш уровень </p>
            <a href="Test/test.php" class="btn btn-success"  id="button123" role="button" >Пройти тест</a>
        </div>
        <?php
    } ?>







</div>
<footer >
<div id="social">
    <a href="https://vk.com/public168189825">
        <img src="image/if_vk_1279056.png" alt="Группа английского">
    </a>
    <a href="#">
        <img src="image/if_facebook_circle_color_107175.png">
    </a>
    <a href="#" >
        <img style="width: 53px" src="image/if_twitter_313075.png">
    </a>
</div>
    <div id="prava">
        Все права защищены &copy; <?=date('Y')?>
    </div>
</footer>
</body>
</html>

