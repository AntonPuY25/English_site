<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<script src ="result3.js" defer></script>

<?php
$ot = 0;
$not = 0;

?>
<div id="bodyTestResult">

<div id="testpro">
<table>

    <div class="namelevel">  Уровень 1</div>


    <tr><th>Friend  </th><th>Teacher  </th><th>Cry  </th><th>Child  </th><th>Open  </th><th>Школа</th><th>Птица</th><th>Stop</th></tr>

    <?php if (ucfirst($_POST[eightyone]) == Друг ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightyone]));}?></td>
    <?php if ($_POST[eightyone] == Друг){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[eightytwo]) == Учитель ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightytwo]));}?></td>
    <?php   if ($_POST[eightytwo] == Учитель){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eightythree]) == Плакать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightythree]));}?></td>
    <?php  if ($_POST[eightythree] == Плакать ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[eightyfour]) == Ребёнок ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightyfour]));}?></td>
    <?php   if ($_POST[eightyfour] == Ребёнок ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[eightyfive]) == Открыто ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightyfive]));}?></td>
    <?php   if ($_POST[eightyfive] == Открыто ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[eghtysix]) == School ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eghtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eghtysix]));}?></td>
    <?php if (ucfirst($_POST[eghtysix]) == School ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eightyseven]) == Bird ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightyseven]));}?></td>
    <?php if (ucfirst($_POST[eightyseven]) == Bird ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[eightyeight]) == Stop ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightyeight]));}?></td>
    <?php if (ucfirst($_POST[eightyeight]) == Stop ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 2</div>

    <tr><th>Pasta   </th><th>Soap   </th><th>Cup   </th><th>Juice   </th><th>Strawberry   </th><th>Сильный</th><th>Вопрос</th><th>Teacher</th></tr>


    <?php if (ucfirst($_POST[eightynine]) == Макароны ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightynine]));}?></td>
    <?php       if ($_POST[eightynine] == Макароны){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninety]) == Мыло ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninety])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninety]));}?></td>
    <?php      if ($_POST[ninety] == Мыло){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetyone]) == Кружка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetyone]));}?></td>
    <?php     if ($_POST[ninetyone] == Кружка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetytwo]) == Сок ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetytwo]));}?></td>
    <?php     if ($_POST[ninetytwo] == Сок){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetythree]) == Клубника ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetythree]));}?></td>
    <?php    if ($_POST[ninetythree] == Клубника){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetyfour]) == Strong ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetyfour]));}?></td>
    <?php    if (ucfirst($_POST[ninetyfour]) == Strong ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetyfive]) == Question ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetyfive]));}?></td>
    <?php   if (ucfirst($_POST[ninetyfive]) == Question ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetysix]) == Teacher ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetysix]));}?></td>
    <?php    if (ucfirst($_POST[ninetysix]) == Teacher ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 3</div>

    <tr><th>Subway   </th><th>Razor   </th><th>Youth   </th><th>Population   </th><th>Familiar   </th><th>Жертва</th><th>Зеркало</th><th>Cabinet</th></tr>


    <?php if (ucfirst($_POST[ninetyseven]) == Метро ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetyseven]));}?></td>
    <?php     if ($_POST[ninetyseven] == Метро){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetyeight]) == Бритва ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetyeight]));}?></td>
    <?php    if ($_POST[ninetyeight] == Бритва){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ninetynine]) == Молодость ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ninetynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ninetynine]));}?></td>
    <?php    if ($_POST[ninetynine] == Молодость){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundred]) == Население ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundred])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundred]));}?></td>
    <?php     if ($_POST[hundred] == Население){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundredone]) == Знакомый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredone]));}?></td>
    <?php     if ($_POST[hundredone] == Знакомый){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundredtwo]) == Victim ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredtwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredtwo]));}?></td>
    <?php    if (ucfirst($_POST[hundredtwo]) == Victim ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundredthree]) == Mirror ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredthree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredthree]));}?></td>
    <?php     if (ucfirst($_POST[hundredthree]) == Mirror ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundredfour]) == Cabinet ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredfour]));}?></td>
    <?php     if (ucfirst($_POST[hundredfour]) == Cabinet ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 4</div>

    <tr><th>Hate   </th><th>Spend   </th><th>Almost   </th><th>Jealous   </th><th>Reliable   </th><th>Съедобный</th><th>Качественный</th><th>Condemn</th></tr>


    <?php if (ucfirst($_POST[hundredfive]) == Ненавидеть ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredfive]));}?></td>
    <?php      if ($_POST[hundredfive] == Ненавидеть){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundredsix]) == Проводить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredsix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredsix]));}?></td>
    <?php      if ($_POST[hundredsix] == Проводить){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundredseven]) == Почти ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredseven]));}?></td>
    <?php     if ($_POST[hundredseven] == Почти){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundredeight]) == Ревнующий ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundredeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundredeight]));}?></td>
    <?php     if ($_POST[hundredeight] == Ревнующий){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[hundrednine]) == Надёжный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[hundrednine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[hundrednine]));}?></td>
    <?php    if ($_POST[hundrednine] == Надёжный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeleven]) == Edible ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeleven]));}?></td>
    <?php    if (ucfirst($_POST[onehundredeleven]) == Edible ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredtwelve]) == Qualitative ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwelve]));}?></td>
    <?php    if (ucfirst($_POST[onehundredtwelve]) == Qualitative ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthree]) == Condemn ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthree]));}?></td>
    <?php     if (ucfirst($_POST[onehundredthree]) == Condemn ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <div class="namelevel">  Уровень 5</div>

       <tr><th>Superfluous   </th><th>Versatile   </th><th>Сonfess   </th><th>Ponder   </th><th>Despise   </th><th>Восклицать</th><th>Пересматривать</th><th>Eternal</th></tr>


    <?php if (ucfirst($_POST[onehundredfour]) == Излишний ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfour]));}?></td>
    <?php      if ($_POST[onehundredfour] == Излишний){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfive]) == Разносторонний ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfive]));}?></td>
    <?php      if ($_POST[onehundredfive] == Разносторонний){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredsix]) == Признаваться ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsix]));}?></td>
    <?php     if ($_POST[onehundredsix] == Признаваться){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredseven]) == Обдумывать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredseven]));}?></td>
    <?php    if ($_POST[onehundredseven] == Обдумывать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredeight]) == Презирать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredeight]));}?></td>
    <?php     if ($_POST[onehundredeight] == Презирать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundrednine]) == Exclaim ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundrednine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundrednine]));}?></td>
    <?php    if (ucfirst($_POST[onehundrednine]) == Exclaim ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredtwenty]) == Revise ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwenty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwenty]));}?></td>
    <?php    if (ucfirst($_POST[onehundredtwenty]) == Revise ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredtwentyone]) == Eternal ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentyone]));}?></td>
    <?php     if (ucfirst($_POST[onehundredtwentyone]) == Eternal ){$ot++;}else{$not++;}?><br>
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