<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<script src ="result1.js" defer></script>

 <?php
        $ot = 0;
        $not = 0;

        ?>
<div id="bodyTestResult">



<div id="testpro">
<table>

                                              <div class="namelevel">  Уровень 1</div>


    <tr><th>Elephant</th><th>Pink</th><th>Thanks</th><th>Bye</th><th>Mother</th><th>Прыгать</th><th>Бегать</th><th>Bad</th></tr>
    <?php if (ucfirst($_POST[one]) == Слон ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
    <?php if ($_POST[one] == Слон){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[two]) == Розовый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
    <?php   if ($_POST[two] == Розовый){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[three]) == Спасибо ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
    <?php  if ($_POST[three] == Спасибо ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[four]) == Пока ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
    <?php   if ($_POST[four] == Пока ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[five]) == Мама ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
     <?php   if ($_POST[five] == Мама ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Jump ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php if (ucfirst($_POST[six]) == Jump ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Run ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php if (ucfirst($_POST[seven]) == Run ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[eight]) == Bad ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php if (ucfirst($_POST[eight]) == Bad ){$ot++;}else{$not++;}?><br>
</table>
<table>
                                      <div class="namelevel">  Уровень 2</div>

    <tr><th>House </th><th>Pasta </th><th>Snow </th><th>Grandfather </th><th>Almost </th><th>Остров</th><th>Сайт</th><th>Country</th></tr>


    <?php if (ucfirst($_POST[nine]) == Дом ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php       if ($_POST[nine] == Дом){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ten]) == Макароны ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php      if ($_POST[ten] == Макароны){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Снег ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php     if ($_POST[eleven] == Снег){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Дедушка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php     if ($_POST[twelve] == Дедушка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirteen]) == Почти ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirteen]));}?></td>
    <?php    if ($_POST[thirteen] == Почти){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fourteen]) == Island ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fourteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fourteen]));}?></td>
    <?php    if (ucfirst($_POST[fourteen]) == Island ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiveteen]) == Site ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiveteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiveteen]));}?></td>
    <?php   if (ucfirst($_POST[fiveteen]) == Site ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixteen]) == Country ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixteen]));}?></td>
    <?php    if (ucfirst($_POST[sixteen]) == Country ){$ot++;}else{$not++;}?><br>
    </table>
<table>
                                     <div class="namelevel">  Уровень 3</div>

    <tr><th>Knife </th><th>Marriage </th><th>Property </th><th>Local </th><th>Avenue </th><th>Тюрьма</th><th>Бритва</th><th>Palace</th></tr>


    <?php if (ucfirst($_POST[seventeen]) == Нож ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventeen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventeen]));}?></td>
   <?php     if ($_POST[seventeen] == Нож){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eightteen]) == Брак ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightteen]));}?></td>
    <?php    if ($_POST[eightteen] == Брак){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[nineteen]) == Собственность ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nineteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nineteen]));}?></td>
    <?php    if ($_POST[nineteen] == Собственность){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twenty]) == Местный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twenty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twenty]));}?></td>
    <?php     if ($_POST[twenty] == Местный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyone]) == Проспект ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyone]));}?></td>
    <?php     if ($_POST[twentyone] == Проспект){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentytwo]) == Prison ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentytwo]));}?></td>
     <?php    if (ucfirst($_POST[twentytwo]) == Prison ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentythree]) == Razor ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentythree]));}?></td>
    <?php     if (ucfirst($_POST[twentythree]) == Razor ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyfour]) == Palace ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyfour]));}?></td>
    <?php     if (ucfirst($_POST[twentyfour]) == Palace ){$ot++;}else{$not++;}?><br>
    </table>
<table>
                                <div class="namelevel">  Уровень 4</div>

    <tr><th>Valley </th><th>Bed sheet </th><th>Chain </th><th>Departure </th><th>Scissors </th><th>Угол</th><th>Расчёска</th><th>Example</th></tr>


    <?php if (ucfirst($_POST[twentyfive]) == Долина ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyfive]));}?></td>
  <?php      if ($_POST[twentyfive] == Долина){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentysix]) == Простыня ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentysix]));}?></td>
   <?php      if ($_POST[twentysix] == Простыня){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyseven]) == Цепочка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyseven]));}?></td>
   <?php     if ($_POST[twentyseven] == Цепочка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyeight]) == Отъезд ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyeight]));}?></td>
    <?php     if ($_POST[twentyeight] == Отъезд){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentynine]) == Ножницы ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentynine]));}?></td>
    <?php    if ($_POST[twentynine] == Ножницы){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirty]) == Corner ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirty]));}?></td>
     <?php    if (ucfirst($_POST[thirty]) == Corner ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyone]) == Comb ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyone]));}?></td>
     <?php    if (ucfirst($_POST[thirtyone]) == Comb ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtytwo]) == Example ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtytwo]));}?></td>
    <?php     if (ucfirst($_POST[thirtytwo]) == Example ){$ot++;}else{$not++;}?><br>
</table>

<table>
                                 <div class="namelevel">  Уровень 5</div>

       <tr><th>Approximately </th><th>Completely </th><th>Explanation </th><th>Performed </th><th>Ordinary </th><th>Уязвимый</th><th>Тщеславие</th><th>Catching</th></tr>


    <?php if (ucfirst($_POST[thirtythree]) == Приблизительно ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtythree]));}?></td>
   <?php      if ($_POST[thirtythree] == Приблизительно){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyfour]) == Совершенно ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyfour]));}?></td>
  <?php      if ($_POST[thirtyfour] == Совершенно){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyfive]) == Объяснения ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyfive]));}?></td>
  <?php     if ($_POST[thirtyfive] == Объяснения){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtysix]) == Выступить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtysix]));}?></td>
     <?php    if ($_POST[thirtysix] == Выступить){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyseven]) == Обычный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyseven]));}?></td>
   <?php     if ($_POST[thirtyseven] == Обычный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyeight]) == Vulnerable ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyeight]));}?></td>
     <?php    if (ucfirst($_POST[thirtyeight]) == Vulnerable ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtynine]) == Vanity ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtynine]));}?></td>
     <?php    if (ucfirst($_POST[thirtynine]) == Vanity ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[Forty]) == Catching ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[Forty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[Forty]));}?></td>
    <?php     if (ucfirst($_POST[Forty]) == Catching ){$ot++;}else{$not++;}?><br>
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
    <tr><th >Количество ошибок</th><th>Количество правильных ответов</th><th>Ваш Уровень знаний</th></tr> <!--ряд с ячейками заголовков-->
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