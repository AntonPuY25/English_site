<link href ="Style/style.css"  rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<script src ="Style/main.js" defer></script>
<?php
require_once('conect.php');

?>
<!doctype html >
<html>
<head>

    <meta charset ='utf-8'>
    <title>Изучаем Английский язык</title>

<body>
<nav class ="nav bar navbar-default">
    <div class="container-fluid">
        <div class="Logo">

            <a href="index.php" style="text-decoration: none">
                <span  id="PUY1" >PuY</span>

            </a>
        </div>
    </div>
</nav>
<div  class="body">


<div id="abauttext">

    Изучай английские слова вместе с  <h1>PuY</h1>



    <div id="puy1"> <img src="image/label.png"></div>


<div id="abauttext2">
    -   Выполняй <span id="abauttext3">письменные</span>  упражнения;<br>
    -   Выполняй <span id="abauttext3">устные</span>  упражнения;<br>
    -   Выполняй <span id="abauttext3">аудио</span>  упражнения.<br>

</div>

</div>
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

    <div  id="prava">
        Все права защищены &copy; <?=date('Y')?>


    </div>
</footer>
</body>
</html>


