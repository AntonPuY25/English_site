<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<script src ="result5.js" defer></script>

<?php
$ot = 0;
$not = 0;

?>
<div id="bodyTestResult">

<div id="testpro">
<table>

    <div class="namelevel">  Уровень 1</div>


    <tr><th>Dog  </th><th>Mouse  </th><th>Water  </th><th>Milk  </th><th>Left  </th><th>Футбол</th><th>Рука</th><th>Read</th></tr>

    <?php if (ucfirst($_POST[onehundredsixtysix]) == Собака ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtysix]));}?></td>
    <?php if ($_POST[onehundredsixtysix] == Собака){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[onehundredsixtyseven]) == Мышь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtyseven]));}?></td>
    <?php   if ($_POST[onehundredsixtyseven] == Мышь){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredsixtyeight]) == Вода ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtyeight]));}?></td>
    <?php  if ($_POST[onehundredsixtyeight] == Вода ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[onehundredsixtynine]) == Молоко ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtynine]));}?></td>
    <?php   if ($_POST[onehundredsixtynine] == Молоко ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[onehundredseventyone]) == Лево ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventyone]));}?></td>
    <?php   if ($_POST[onehundredseventyone] == Лево ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[onehundredseventytwo]) == Football ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventytwo]));}?></td>
    <?php if (ucfirst($_POST[onehundredseventytwo]) == Football ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredseventythree]) == Hand ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventythree]));}?></td>
    <?php if (ucfirst($_POST[onehundredseventythree]) == Hand ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[onehundredseventyfour]) == Read ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventyfour]));}?></td>
    <?php if (ucfirst($_POST[onehundredseventyfour]) == Read ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 2</div>

    <tr><th>Positive   </th><th>Table   </th><th>Game   </th><th>City   </th><th>Officer   </th><th>Понедельник</th><th>Семья</th><th>Red</th></tr>


    <?php if (ucfirst($_POST[onehundredseventyfive]) == Положительный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventyfive]));}?></td>
    <?php       if ($_POST[onehundredseventyfive] == Положительный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredseventysix]) == Стол ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventysix]));}?></td>
    <?php      if ($_POST[onehundredseventysix] == Стол){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredseventyseven]) == Игра ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventyseven]));}?></td>
    <?php     if ($_POST[onehundredseventyseven] == Игра){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredseventyeight]) == Город ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventyeight]));}?></td>
    <?php     if ($_POST[onehundredseventyeight] == Город){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredseventynine]) == Офицер ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseventynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseventynine]));}?></td>
    <?php    if ($_POST[onehundredseventynine] == Офицер){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightyone]) == Monday ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightyone]));}?></td>
    <?php    if (ucfirst($_POST[onehundredeightyone]) == Monday ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightytwo]) == Family ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightytwo]));}?></td>
    <?php   if (ucfirst($_POST[onehundredeightytwo]) == Family ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightythree]) == Red ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightythree]));}?></td>
    <?php    if (ucfirst($_POST[onehundredeightythree]) == Red ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 3</div>

    <tr><th>Lawyer   </th><th>Future   </th><th>Dirty   </th><th>Different   </th><th>Subject   </th><th>Столица</th><th>Шум</th><th>Adventure</th></tr>


    <?php if (ucfirst($_POST[onehundredeightyfour]) == Юрист ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightyfour]));}?></td>
    <?php     if ($_POST[onehundredeightyfour] == Юрист){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightyfive]) == Будущее ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightyfive]));}?></td>
    <?php    if ($_POST[onehundredeightyfive] == Будущее){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightysix]) == Грязный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightysix]));}?></td>
    <?php    if ($_POST[onehundredeightysix] == Грязный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightyseven]) == Другой ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightyseven]));}?></td>
    <?php     if ($_POST[onehundredeightyseven] == Другой){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightyeight]) == Предмет ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightyeight]));}?></td>
    <?php     if ($_POST[onehundredeightyeight] == Предмет){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeightynine]) == Capital ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeightynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeightynine]));}?></td>
    <?php    if (ucfirst($_POST[onehundredeightynine]) == Capital ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintyone]) == Noise ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintyone]));}?></td>
    <?php     if (ucfirst($_POST[onehundrednintyone]) == Noise ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintytwo]) == Adventure ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintytwo]));}?></td>
    <?php     if (ucfirst($_POST[onehundrednintytwo]) == Adventure ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 4</div>

    <tr><th>Represent   </th><th>Yawn   </th><th>Wild   </th><th>Behavior   </th><th>Pull   </th><th>Встречать</th><th>Сырой</th><th>Record</th></tr>


    <?php if (ucfirst($_POST[onehundrednintythree]) == Представлять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintythree]));}?></td>
    <?php      if ($_POST[onehundrednintythree] == Представлять){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintyfour]) == Зевать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintyfour]));}?></td>
    <?php      if ($_POST[onehundrednintyfour] == Зевать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintyfive]) == Дикий ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintyfive]));}?></td>
    <?php     if ($_POST[onehundrednintyfive] == Дикий){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintysix]) == Поведение ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintysix]));}?></td>
    <?php     if ($_POST[onehundrednintysix] == Поведение){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintyseven]) == Тянуть ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintyseven]));}?></td>
    <?php    if ($_POST[onehundrednintyseven] == Тянуть){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintyeight]) == Meet ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintyeight]));}?></td>
    <?php    if (ucfirst($_POST[onehundrednintyeight]) == Meet ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednintynine]) == Raw ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednintynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednintynine]));}?></td>
    <?php    if (ucfirst($_POST[onehundrednintynine]) == Raw ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundone]) == Record ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundone]));}?></td>
    <?php     if (ucfirst($_POST[twohundone]) == Record ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <div class="namelevel">  Уровень 5</div>

      <tr><th>Equipment   </th><th>Comma   </th><th>Markup   </th><th>Talkative   </th><th>Boiling   </th><th>Цензура</th><th>Разъярённый</th><th>Gloomy</th></tr>


    <?php if (ucfirst($_POST[twohundtwo]) == Оборудование ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundtwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundtwo]));}?></td>
    <?php      if ($_POST[twohundtwo] == Оборудование){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundthree]) == Запятая ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundthree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundthree]));}?></td>
    <?php      if ($_POST[twohundthree] == Запятая){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundfour]) == Разметка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundfour]));}?></td>
    <?php     if ($_POST[twohundfour] == Разметка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundfive]) == Разговорчивый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundfive]));}?></td>
    <?php    if ($_POST[twohundfive] == Разговорчивый){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundsix]) == Кипение ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundsix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundsix]));}?></td>
    <?php     if ($_POST[twohundsix] == Кипение){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundseven]) == Censorship ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundseven]));}?></td>
    <?php    if (ucfirst($_POST[twohundseven]) == Censorship ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundeight]) == Furious ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundeight]));}?></td>
    <?php    if (ucfirst($_POST[twohundeight]) == Furious ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twohundnine]) == Gloomy ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twohundnine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twohundnine]));}?></td>
    <?php     if (ucfirst($_POST[twohundnine]) == Gloomy ){$ot++;}else{$not++;}?><br>
</table>
<br><br><br><br><br><br><br>





<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

</body>
</html><br>
<table id="kra">
    <tr><th>Количество ошибок</th><th>Количество правильных ответов</th><th>Ваш Уровень знаний</th></tr> <!--ряд с ячейками заголовков-->
    <tr><td id="tdresult" style="background: red"><?php echo $not   ?><br></td><td id="tdresult" style="background: green"><?php echo $ot   ?></td> <td id="tdresult">     <?php
            if($not<3){
                echo"5 Уровень";
            }elseif ($not>=3 && $not < 5){
                echo"4 Уровень";
            }elseif ($not>=5 && $not < 8){
                echo"3 Уровень";
            }elseif ($not>=8 && $not < 10){
                echo"2 Уровень";
            }else{
                echo"1 Уровень";
            }
            ?>      </td></tr> <!--ряд с ячейками тела таблицы-->
</table>
    <div class="butResult">
        <input type ="submit" class="btn btn-danger"   id="buttonresult1" value="Повторить">
        <input type ="submit" class="btn btn-success"   id="buttonresult2" value="На главную">
    </div>
</div>
</div>