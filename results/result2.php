<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<script src ="result2.js" defer></script>

<?php
$ot = 0;
$not = 0;

?>
<div id="bodyTestResult">

<div id="testpro">
<table>

    <div class="namelevel">  Уровень 1</div>


    <tr><th>Swim </th><th>Bed </th><th>Cheese </th><th>Year </th><th>House </th><th>Отец</th><th>Семь</th><th>Example</th></tr>
    <?php if (ucfirst($_POST[Fortyone]) == Плавать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[Fortyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[Fortyone]));}?></td>
    <?php if ($_POST[Fortyone] == Плавать){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[Fortytwo]) == Кровать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[Fortytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[Fortytwo]));}?></td>
    <?php   if ($_POST[Fortytwo] == Кровать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fortythree]) == Сыр ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fortythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fortythree]));}?></td>
    <?php  if ($_POST[fortythree] == Сыр ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[fortyfour]) == Год ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fortyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fortyfour]));}?></td>
    <?php   if ($_POST[fortyfour] == Год ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[fortyfive]) == Дом ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fortyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fortyfive]));}?></td>
    <?php   if ($_POST[fortyfive] == Дом ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[fortysix]) == Father ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fortysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fortysix]));}?></td>
    <?php if (ucfirst($_POST[fortysix]) == Father ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[Fortyseven]) == Seven ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[Fortyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[Fortyseven]));}?></td>
    <?php if (ucfirst($_POST[Fortyseven]) == Seven ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[fortyeight]) == Example ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fortyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fortyeight]));}?></td>
    <?php if (ucfirst($_POST[fortyeight]) == Example ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 2</div>

    <tr><th>Bottle  </th><th>Sofa  </th><th>Sponge  </th><th>Bicycle  </th><th>Level  </th><th>Поезд</th><th>Мост</th><th>Cry</th></tr>


    <?php if (ucfirst($_POST[fortynine]) == Бутылка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fortynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fortynine]));}?></td>
    <?php       if ($_POST[fortynine] == Бутылка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fifty]) == Диван ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fifty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fifty]));}?></td>
    <?php      if ($_POST[fifty] == Диван){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftyone]) == Губка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftyone]));}?></td>
    <?php     if ($_POST[fiftyone] == Губка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftytwo]) == Велосипед ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftytwo]));}?></td>
    <?php     if ($_POST[fiftytwo] == Велосипед){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftythree]) == Уровень ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftythree]));}?></td>
    <?php    if ($_POST[fiftythree] == Уровень){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftyfour]) == Train ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftyfour]));}?></td>
    <?php    if (ucfirst($_POST[fiftyfour]) == Train ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftyfive]) == Bridge ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftyfive]));}?></td>
    <?php   if (ucfirst($_POST[fiftyfive]) == Bridge ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftysix]) == Cry ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftysix]));}?></td>
    <?php    if (ucfirst($_POST[fiftysix]) == Cry ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 3</div>

    <tr><th>Novel  </th><th>Glass  </th><th>Screen  </th><th>Letter  </th><th>Scissors  </th><th>Будущее</th><th>Кастрюля</th><th>Bell</th></tr>


    <?php if (ucfirst($_POST[fiftyseven]) == Роман ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftyseven]));}?></td>
    <?php     if ($_POST[fiftyseven] == Роман){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftyeight]) == Стакан ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftyeight]));}?></td>
    <?php    if ($_POST[fiftyeight] == Стакан){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiftynine]) == Экран ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiftynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiftynine]));}?></td>
    <?php    if ($_POST[fiftynine] == Экран){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixty]) == Письмо ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixty]));}?></td>
    <?php     if ($_POST[sixty] == Письмо){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtyone]) == Ножницы ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtyone]));}?></td>
    <?php     if ($_POST[sixtyone] == Ножницы){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtytwo]) == Future ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtytwo]));}?></td>
    <?php    if (ucfirst($_POST[sixtytwo]) == Future ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtythree]) == Pan ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtythree]));}?></td>
    <?php     if (ucfirst($_POST[sixtythree]) == Pan ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtyfour]) == Bell ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtyfour]));}?></td>
    <?php     if (ucfirst($_POST[sixtyfour]) == Bell ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 4</div>

    <tr><th>Majority  </th><th>Description  </th><th>Equipment  </th><th>Import  </th><th>Require  </th><th>Достаточно</th><th>Устал</th><th>Trust</th></tr>


    <?php if (ucfirst($_POST[sixtyfive]) == Большинство ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtyfive]));}?></td>
    <?php      if ($_POST[sixtyfive] == Большинство){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtysix]) == Описание ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtysix]));}?></td>
    <?php      if ($_POST[sixtysix] == Описание){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtyseven]) == Оборудование ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtyseven]));}?></td>
    <?php     if ($_POST[sixtyseven] == Оборудование){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtyeight]) == Импортировать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtyeight]));}?></td>
    <?php     if ($_POST[sixtyeight] == Импортировать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixtynine]) == Требовать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixtynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixtynine]));}?></td>
    <?php    if ($_POST[sixtynine] == Требовать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventy]) == Enough ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventy])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventy]));}?></td>
    <?php    if (ucfirst($_POST[seventy]) == Enough ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventyone]) == Tired ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventyone]));}?></td>
    <?php    if (ucfirst($_POST[seventyone]) == Tired ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventytwo]) == Trust ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventytwo]));}?></td>
    <?php     if (ucfirst($_POST[seventytwo]) == Trust ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <div class="namelevel">  Уровень 5</div>

      <tr><th>Rid  </th><th>Apprehend  </th><th>Definitely  </th><th>Interfere  </th><th>Weaken  </th><th>Осуществимый</th><th>Коренной</th><th>Introduce</th></tr>


    <?php if (ucfirst($_POST[seventythree]) == Освобождать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventythree]));}?></td>
    <?php      if ($_POST[seventythree] == Освобождать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventyfour]) == Предчувствовать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventyfour]));}?></td>
    <?php      if ($_POST[seventyfour] == Предчувствовать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventyfive]) == Определенно ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventyfive]));}?></td>
    <?php     if ($_POST[seventyfive] == Определенно){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventysix]) == Препятствовать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventysix]));}?></td>
    <?php    if ($_POST[seventysix] == Препятствовать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventyseven]) == Ослабевать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventyseven]));}?></td>
    <?php     if ($_POST[seventyseven] == Ослабевать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventyeight]) == Feasible ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventyeight]));}?></td>
    <?php    if (ucfirst($_POST[seventyeight]) == Feasible ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seventynine]) == Root ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventynine]));}?></td>
    <?php    if (ucfirst($_POST[seventynine]) == Root ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eighty]) == Introduce ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eighty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eighty]));}?></td>
    <?php     if (ucfirst($_POST[eighty]) == Introduce ){$ot++;}else{$not++;}?><br>
</table>
<br><br><br><br><br><br><br>





<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

</body>
</html><br>
<table>
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