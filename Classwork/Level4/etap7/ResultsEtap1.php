<div class="body_answer">
.
    <?php
    require_once('../../../conect.php');
    ?>
    <link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level4/etap7/resault.js" defer></script>
<?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Struggle</th><th>Shoot</th><th>Save</th><th>Освобождать</th></tr>
        <?php if (ucfirst($_POST[one]) == Бороться ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Бороться){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Стрелять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Стрелять){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Сохранить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Сохранить ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Liberate ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Liberate ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Invade </th><th>Point</th><th>Order</th><th>Защищать</th></tr>
    <?php if (ucfirst($_POST[five]) == Вторгаться ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Вторгаться){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Направлять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Направлять){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Заказывать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Заказывать ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Defend ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Defend ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Divide </th><th>Count</th><th>Consider</th><th>Произносить</th></tr>
    <?php if (ucfirst($_POST[nine]) == Делить){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Делить){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Cчитать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Cчитать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Рассматривать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Рассматривать ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Pronounce ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Pronounce ){$ot++;}else{$not++;}?><br>
</table>

<br><br><br>
<table>
    <tr><th>Количество ошибок</th><th>Количество правильных ответов</th></tr>
    <tr><td><?php echo $not   ?><br></td><td><?php echo $ot   ?></td>

</table>
    <?php
if($not>1){
    ?><div id="but_answer"> <a href="Etap1Test.php" class="btn btn-danger"   role="button" >Повторить</a></div>


    <?
}else{
    ?><div id="but_answer"> <a href="../level4.php" class="btn btn-success" id="coo"  role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>