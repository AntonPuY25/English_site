<div class="body_answer">
.
    <?php
    require_once('../../../conect.php');
    ?>
    <link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level5/etap5/resault.js" defer></script>
<?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Nation</th><th>International</th><th>Quality</th><th>Свобода</th></tr>
        <?php if (ucfirst($_POST[one]) == Народ ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Народ){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Международный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Международный){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Равенство ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Равенство ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Freedom ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Freedom ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Inequality </th><th>Folks</th><th>Independent</th><th>Востребованность</th></tr>
    <?php if (ucfirst($_POST[five]) == Неравенство ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Неравенство){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Народ ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Народ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Независимый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Независимый ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Demand ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Demand ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Uprising </th><th>Slogan</th><th>Strike</th><th>Беспорядок</th></tr>
    <?php if (ucfirst($_POST[nine]) == Восстание){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Восстание){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Лозунг ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Лозунг){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Забастовка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Забастовка ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Disorder ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Disorder ){$ot++;}else{$not++;}?><br>
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
    ?><div id="but_answer"> <a href="../level5.php" class="btn btn-success" id="coo"  role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>