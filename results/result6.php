<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<script src ="result6.js" defer></script>

<?php
$ot = 0;
$not = 0;

?>
<div id="bodyTestResult">

<div id="testpro">
<table>

    <div class="namelevel">  Уровень 1</div>


    <tr><th>Cat </th><th>Night </th><th>Fire </th><th>Window </th><th>Apple </th><th>Сын</th><th>Прыгать</th><th>Fly</th></tr>
    <?php if (ucfirst($_POST[one]) == Кот ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
    <?php if ($_POST[one] == Кот){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[two]) == Ночь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
    <?php   if ($_POST[two] == Ночь){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[three]) == Огонь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
    <?php  if ($_POST[three] == Огонь ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[four]) == Окно ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
    <?php   if ($_POST[four] == Окно ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[five]) == Яблоко ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php   if ($_POST[five] == Яблоко ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Son ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php if (ucfirst($_POST[six]) == Son ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Jump ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php if (ucfirst($_POST[seven]) == Jump ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[eight]) == Fly ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php if (ucfirst($_POST[eight]) == Fly ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 2</div>

    <tr><th>Week  </th><th>Work  </th><th>Goal  </th><th>Bread  </th><th>Cook  </th><th>Костюм</th><th>Дедушка</th><th>One</th></tr>


    <?php if (ucfirst($_POST[nine]) == Неделя ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php       if ($_POST[nine] == Неделя){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[ten]) == Работа ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php      if ($_POST[ten] == Работа){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Цель ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php     if ($_POST[eleven] == Цель){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Хлеб ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php     if ($_POST[twelve] == Хлеб){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirteen]) == Готовить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirteen]));}?></td>
    <?php    if ($_POST[thirteen] == Готовить){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fourteen]) == Suit ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fourteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fourteen]));}?></td>
    <?php    if (ucfirst($_POST[fourteen]) == Suit ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[fiveteen]) == Grandfather ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[fiveteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[fiveteen]));}?></td>
    <?php   if (ucfirst($_POST[fiveteen]) == Grandfather ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[sixteen]) == One ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[sixteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[sixteen]));}?></td>
    <?php    if (ucfirst($_POST[sixteen]) == One ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 3</div>

    <tr><th>Past  </th><th>Fill  </th><th>Quickly  </th><th>Sheet  </th><th>Keep  </th><th>Проблема</th><th>Надежда</th><th>Train</th></tr>


    <?php if (ucfirst($_POST[seventeen]) == Прошлое ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seventeen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seventeen]));}?></td>
    <?php     if ($_POST[seventeen] == Прошлое){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eightteen]) == Заполнить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eightteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eightteen]));}?></td>
    <?php    if ($_POST[eightteen] == Заполнить){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[nineteen]) == Быстрый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nineteen])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nineteen]));}?></td>
    <?php    if ($_POST[nineteen] == Быстрый){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twenty]) == Лист ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twenty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twenty]));}?></td>
    <?php     if ($_POST[twenty] == Лист){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyone]) == Хранить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyone]));}?></td>
    <?php     if ($_POST[twentyone] == Хранить){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentytwo]) == Problem ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentytwo]));}?></td>
    <?php    if (ucfirst($_POST[twentytwo]) == Problem ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentythree]) == Hope ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentythree]));}?></td>
    <?php     if (ucfirst($_POST[twentythree]) == Hope ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyfour]) == Train ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyfour]));}?></td>
    <?php     if (ucfirst($_POST[twentyfour]) == Train ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 4</div>

    <tr><th>Expensive  </th><th>Conduct  </th><th>Evidence  </th><th>Especially  </th><th>Construction  </th><th>Связь</th><th>Поколение</th><th>Convenient</th></tr>


    <?php if (ucfirst($_POST[twentyfive]) == Дорогой ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyfive]));}?></td>
    <?php      if ($_POST[twentyfive] == Дорогой){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentysix]) == Поведение ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentysix]));}?></td>
    <?php      if ($_POST[twentysix] == Поведение){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyseven]) == Доказательства ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyseven]));}?></td>
    <?php     if ($_POST[twentyseven] == Доказательства){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentyeight]) == Особенный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentyeight]));}?></td>
    <?php     if ($_POST[twentyeight] == Особенный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twentynine]) == Строительство ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twentynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twentynine]));}?></td>
    <?php    if ($_POST[twentynine] == Строительство){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirty]) == Link ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirty]));}?></td>
    <?php    if (ucfirst($_POST[thirty]) == Link ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyone]) == Generation ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyone]));}?></td>
    <?php    if (ucfirst($_POST[thirtyone]) == Generation ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtytwo]) == Convenient ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtytwo]));}?></td>
    <?php     if (ucfirst($_POST[thirtytwo]) == Convenient ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <div class="namelevel">  Уровень 5</div>

       <tr><th>Introduction  </th><th>Opportunity  </th><th>Definitely  </th><th>Scarce  </th><th>Intestine  </th><th>Опыт</th><th>Восхитительный</th><th>Slate</th></tr>


    <?php if (ucfirst($_POST[thirtythree]) == Введение ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtythree]));}?></td>
    <?php      if ($_POST[thirtythree] == Введение){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyfour]) == Возможность ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyfour]));}?></td>
    <?php      if ($_POST[thirtyfour] == Возможность){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyfive]) == Определенно ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyfive]));}?></td>
    <?php     if ($_POST[thirtyfive] == Определенно){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtysix]) == Недостаточный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtysix]));}?></td>
    <?php    if ($_POST[thirtysix] == Недостаточный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyseven]) == Кишка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyseven]));}?></td>
    <?php     if ($_POST[thirtyseven] == Кишка){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtyeight]) == Experience ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtyeight]));}?></td>
    <?php    if (ucfirst($_POST[thirtyeight]) == Experience ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[thirtynine]) == Delicious ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[thirtynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[thirtynine]));}?></td>
    <?php    if (ucfirst($_POST[thirtynine]) == Delicious ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[Forty]) == Slate ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[Forty])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[Forty]));}?></td>
    <?php     if (ucfirst($_POST[Forty]) == Slate ){$ot++;}else{$not++;}?><br>
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