<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<script src ="result7.js" defer></script>

<?php
$ot = 0;
$not = 0;

?>
<div id="bodyTestResult">

<div id="testpro">
<table>

    <div class="namelevel">  Уровень 1</div>


    <tr><th>Big </th><th>Morning </th><th>Time </th><th>Forest </th><th>Boss </th><th>Рука</th><th>Дверь</th><th>Yellow</th></tr>
    <?php if (ucfirst($_POST[one]) == Большой ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
    <?php if ($_POST[one] == Большой){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[two]) == Утро ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
    <?php   if ($_POST[two] == Утро){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[three]) == Время ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
    <?php  if ($_POST[three] == Время ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[four]) == Лес ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
    <?php   if ($_POST[four] == Лес ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[five]) == Начальник ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php   if ($_POST[five] == Начальник ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Hand ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php if (ucfirst($_POST[six]) == Hand ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Door ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php if (ucfirst($_POST[seven]) == Door ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[eight]) == Yellow ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php if (ucfirst($_POST[eight]) == Yellow ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 2</div>

    <tr><th>Angry  </th><th>Travel  </th><th>Sky  </th><th>Shoes  </th><th>Dream  </th><th>Жена</th><th>Деньги</th><th>Number</th></tr>


    <?php if (ucfirst($_POST[nine]) == Сердитый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php       if ($_POST[nine] == Сердитый){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ten]) == Путешествовать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php      if ($_POST[ten] == Путешествовать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Небо ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php     if ($_POST[eleven] == Небо){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Обувь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php     if ($_POST[twelve] == Обувь){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirteen]) == Мечта ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirteen]));}?></td>
    <?php    if ($_POST[thirteen] == Мечта){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fourteen]) == Wife ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fourteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fourteen]));}?></td>
    <?php    if (ucfirst($_POST[fourteen]) == Wife ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiveteen]) == Money ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiveteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiveteen]));}?></td>
    <?php   if (ucfirst($_POST[fiveteen]) == Money ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixteen]) == Number ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixteen]));}?></td>
    <?php    if (ucfirst($_POST[sixteen]) == Number ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 3</div>

    <tr><th>Boat  </th><th>Nail  </th><th>Set  </th><th>Hair  </th><th>Weather  </th><th>Записка</th><th>Глава</th><th>Move</th></tr>


    <?php if (ucfirst($_POST[seventeen]) == Лодка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventeen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventeen]));}?></td>
    <?php     if ($_POST[seventeen] == Лодка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eightteen]) == Гвоздь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightteen]));}?></td>
    <?php    if ($_POST[eightteen] == Гвоздь){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[nineteen]) == Устанавливать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nineteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nineteen]));}?></td>
    <?php    if ($_POST[nineteen] == Устанавливать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twenty]) == Волосы ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twenty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twenty]));}?></td>
    <?php     if ($_POST[twenty] == Волосы){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyone]) == Погода ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyone]));}?></td>
    <?php     if ($_POST[twentyone] == Погода){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentytwo]) == Note ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentytwo]));}?></td>
    <?php    if (ucfirst($_POST[twentytwo]) == Note ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentythree]) == Chapter ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentythree]));}?></td>
    <?php     if (ucfirst($_POST[twentythree]) == Chapter ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyfour]) == Move ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyfour]));}?></td>
    <?php     if (ucfirst($_POST[twentyfour]) == Move ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 4</div>

    <tr><th>Necessary  </th><th>Slowly  </th><th>Familiar  </th><th>Afraid  </th><th>Excellent  </th><th>Частный</th><th>Уставший</th><th>Expensive</th></tr>


    <?php if (ucfirst($_POST[twentyfive]) == Необходимо ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyfive]));}?></td>
    <?php      if ($_POST[twentyfive] == Необходимо){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentysix]) == Медленно ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentysix]));}?></td>
    <?php      if ($_POST[twentysix] == Медленно){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyseven]) == Знакомый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyseven]));}?></td>
    <?php     if ($_POST[twentyseven] == Знакомый){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyeight]) == Испуганный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyeight]));}?></td>
    <?php     if ($_POST[twentyeight] == Испуганный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentynine]) == Отлично ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentynine]));}?></td>
    <?php    if ($_POST[twentynine] == Отлично){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirty]) == "Private" ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirty]));}?></td>
    <?php    if (ucfirst($_POST[thirty]) == "Private" ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyone]) == Tired ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyone]));}?></td>
    <?php    if (ucfirst($_POST[thirtyone]) == Tired ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtytwo]) == Expensive ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtytwo]));}?></td>
    <?php     if (ucfirst($_POST[thirtytwo]) == Expensive ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <div class="namelevel">  Уровень 5</div>

       <tr><th>Bilingual  </th><th>Transparent  </th><th>Liquid   </th><th>Austere  </th><th>Sticky  </th><th>Обида</th><th>Бесчеловечный</th><th>Independent</th></tr>


    <?php if (ucfirst($_POST[thirtythree]) == Двуязычный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtythree]));}?></td>
    <?php      if ($_POST[thirtythree] == Двуязычный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyfour]) == Прозрачный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyfour]));}?></td>
    <?php      if ($_POST[thirtyfour] == Прозрачный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyfive]) == Жидкость ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyfive]));}?></td>
    <?php     if ($_POST[thirtyfive] == Жидкость){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtysix]) == Строгий ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtysix]));}?></td>
    <?php    if ($_POST[thirtysix] == Строгий){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyseven]) == Липкий ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyseven]));}?></td>
    <?php     if ($_POST[thirtyseven] == Липкий){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyeight]) == Resentment ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyeight]));}?></td>
    <?php    if (ucfirst($_POST[thirtyeight]) == Resentment ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtynine]) == Inhuman ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtynine]));}?></td>
    <?php    if (ucfirst($_POST[thirtynine]) == Inhuman ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[Forty]) == Independent ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[Forty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[Forty]));}?></td>
    <?php     if (ucfirst($_POST[Forty]) == Independent ){$ot++;}else{$not++;}?><br>
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
                echo"4  Уровень";
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