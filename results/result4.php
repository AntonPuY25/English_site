<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<script src ="result4.js" defer></script>

<?php
$ot = 0;
$not = 0;

?>
<div id="bodyTestResult">

<div id="testpro">
<table>

    <div class="namelevel">  Уровень 1</div>


    <tr><th>Five  </th><th>Teacher  </th><th>Say  </th><th>Answer  </th><th>Apple  </th><th>Дождь</th><th>Лето</th><th>Class</th></tr>

    <?php if (ucfirst($_POST[onehundredtwentytwo]) == Пять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentytwo]));}?></td>
    <?php if ($_POST[onehundredtwentytwo] == Пять){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[onehundredtwentythree]) == Учитель ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentythree]));}?></td>
    <?php   if ($_POST[onehundredtwentythree] == Учитель){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredtwentyfour]) == Сказать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentyfour]));}?></td>
    <?php  if ($_POST[onehundredtwentyfour] == Сказать ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[onehundredtwentyfive]) == Ответ ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentyfive]));}?></td>
    <?php   if ($_POST[onehundredtwentyfive] == Ответ ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[onehundredtwentysix]) == Яблоко ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentysix]));}?></td>
    <?php   if ($_POST[onehundredtwentysix] == Яблоко ){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[onehundredtwentyseven]) == Rain ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentyseven]));}?></td>
    <?php if (ucfirst($_POST[onehundredtwentyseven]) == Rain ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredtwentyeight]) == Summer ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentyeight]));}?></td>
    <?php if (ucfirst($_POST[onehundredtwentyeight]) == Summer ){$ot++;}else{$not++;}?><br>



    <?php if (ucfirst($_POST[onehundredtwentynine]) == "Class" ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredtwentynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredtwentynine]));}?></td>
    <?php if (ucfirst($_POST[onehundredtwentynine]) == "Class" ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 2</div>

    <tr><th>Soup   </th><th>Turtle   </th><th>Basket   </th><th>Power   </th><th>Take   </th><th>Конец</th><th>Суббота</th><th>Grandmother</th></tr>


    <?php if (ucfirst($_POST[onehundredthirtyone]) == Суп ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtyone]));}?></td>
    <?php       if ($_POST[onehundredthirtyone] == Суп){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthirtytwo]) == Черепаха ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtytwo]));}?></td>
    <?php      if ($_POST[onehundredthirtytwo] == Черепаха){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthirtythree]) == Корзина ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtythree]));}?></td>
    <?php     if ($_POST[onehundredthirtythree] == Корзина){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthirtyfour]) == Мощность ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtyfour]));}?></td>
    <?php     if ($_POST[onehundredthirtyfour] == Мощность){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthirtyfive]) == Взять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtyfive]));}?></td>
    <?php    if ($_POST[onehundredthirtyfive] == Взять){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthirtysix]) == End ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtysix]));}?></td>
    <?php    if (ucfirst($_POST[onehundredthirtysix]) == End ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthirtyseven]) == Saturday ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtyseven]));}?></td>
    <?php   if (ucfirst($_POST[onehundredthirtyseven]) == Saturday ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredthirtyeight]) == Grandmother ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtyeight]));}?></td>
    <?php    if (ucfirst($_POST[onehundredthirtyeight]) == Grandmother ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 3</div>

    <tr><th>Enemy   </th><th>One hundred  </th><th>Contains   </th><th>Modern   </th><th>Famous   </th><th>Грязный</th><th>Страх</th><th>Wife</th></tr>


    <?php if (ucfirst($_POST[onehundredthirtynine]) == Враг ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredthirtynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredthirtynine]));}?></td>
    <?php     if ($_POST[onehundredthirtynine] == Враг){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtyone]) == Сто ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtyone]));}?></td>
    <?php    if ($_POST[onehundredfourtyone] == Сто){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtytwo]) == Содержать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtytwo]));}?></td>
    <?php    if ($_POST[onehundredfourtytwo] == Содержать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtythree]) == Современный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtythree]));}?></td>
    <?php     if ($_POST[onehundredfourtythree] == Современный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtyfour]) == Известный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtyfour]));}?></td>
    <?php     if ($_POST[onehundredfourtyfour] == Известный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtyfive]) == Dirty ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtyfive]));}?></td>
    <?php    if (ucfirst($_POST[onehundredfourtyfive]) == Dirty ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtysix]) == Fear ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtysix]));}?></td>
    <?php     if (ucfirst($_POST[onehundredfourtysix]) == Fear ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtyseven]) == Wife ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtyseven]));}?></td>
    <?php     if (ucfirst($_POST[onehundredfourtyseven]) == Wife ){$ot++;}else{$not++;}?><br>
</table>
<table>
    <div class="namelevel">  Уровень 4</div>

    <tr><th>Furious   </th><th>Adapt   </th><th>Inhibit   </th><th>Weaken   </th><th>Ordinary   </th><th>Фиолетовый</th><th>Страшный</th><th>Country</th></tr>


    <?php if (ucfirst($_POST[onehundredfourtyeight]) == Яростный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtyeight]));}?></td>
    <?php      if ($_POST[onehundredfourtyeight] == Яростный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfourtynine]) == Приспосабливаться ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfourtynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfourtynine]));}?></td>
    <?php      if ($_POST[onehundredfourtynine] == Приспосабливаться){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftyone]) == Подавлять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftyone]));}?></td>
    <?php     if ($_POST[onehundredfiftyone] == Подавлять){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftytwo]) == Ослабевать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftytwo]));}?></td>
    <?php     if ($_POST[onehundredfiftytwo] == Ослабевать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftythree]) == Обычный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftythree]));}?></td>
    <?php    if ($_POST[onehundredfiftythree] == Обычный){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftyfour]) == Purple ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftyfour]));}?></td>
    <?php    if (ucfirst($_POST[onehundredfiftyfour]) == Purple ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftyfive]) == Terrible ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftyfive]));}?></td>
    <?php    if (ucfirst($_POST[onehundredfiftyfive]) == Terrible ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftysix]) == Country ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftysix])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftysix]));}?></td>
    <?php     if (ucfirst($_POST[onehundredfiftysix]) == Country ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <div class="namelevel">  Уровень 5</div>

       <tr><th>Pretend   </th><th>Adhere   </th><th>Revolve   </th><th>Confession   </th><th>Fragile   </th><th>Сдерживать</th><th>Доверчивый</th><th>Attractive</th></tr>


    <?php if (ucfirst($_POST[onehundredfiftyseven]) == Притворяться ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftyseven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftyseven]));}?></td>
    <?php      if ($_POST[onehundredfiftyseven] == Притворяться){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftyeight]) == Прилипать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftyeight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftyeight]));}?></td>
    <?php      if ($_POST[onehundredfiftyeight] == Прилипать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredfiftynine]) == Вращаться ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredfiftynine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredfiftynine]));}?></td>
    <?php     if ($_POST[onehundredfiftynine] == Вращаться){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredsixtyone]) == Признание ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtyone])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtyone]));}?></td>
    <?php    if ($_POST[onehundredsixtyone] == Признание){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredsixtytwo]) == Хрупкий ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtytwo])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtytwo]));}?></td>
    <?php     if ($_POST[onehundredsixtytwo] == Хрупкий){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredsixtythree]) == Restrain ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtythree])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtythree]));}?></td>
    <?php    if (ucfirst($_POST[onehundredsixtythree]) == Restrain ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredsixtyfour]) == Credulous ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtyfour])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtyfour]));}?></td>
    <?php    if (ucfirst($_POST[onehundredsixtyfour]) == Credulous ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[onehundredsixtyfive]) == Attractive ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[onehundredsixtyfive])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[onehundredsixtyfive]));}?></td>
    <?php     if (ucfirst($_POST[onehundredsixtyfive]) == Attractive ){$ot++;}else{$not++;}?><br>
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