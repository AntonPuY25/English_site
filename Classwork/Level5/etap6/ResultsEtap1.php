<div class="body_answer">
.
    <?php
    require_once('../../../conect.php');
    ?>
    <link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level5/etap6/resault.js" defer></script>
<?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Faith</th><th>Religion</th><th>Catholicism</th><th>Индуизм</th></tr>
        <?php if (ucfirst($_POST[one]) == Вераисповедание ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Вераисповедание){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Религия ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Религия){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Католичество ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Католичество ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Hinduism ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Hinduism ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Muslim </th><th>God</th><th>Saint</th><th>Рай</th></tr>
    <?php if (ucfirst($_POST[five]) == Мусульманин ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Мусульманин){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Бог ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Бог){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Святой ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Святой ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Paradise ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Paradise ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Confession </th><th>Devil</th><th>Witch</th><th>Ад</th></tr>
    <?php if (ucfirst($_POST[nine]) == Исповедь){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Исповедь){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Дьявол ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Дьявол){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Ведьма ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Ведьма ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Hell ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Hell ){$ot++;}else{$not++;}?><br>
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
    ?><div id="but_answer"> <a href="../level5.php" class="btn btn-success"  id="coo" role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>