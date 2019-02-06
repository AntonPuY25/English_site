<div class="body_answer">
.
    <?php
    require_once('../../../conect.php');
    ?>
    <link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level2/etap7/resault.js" defer></script>

    <?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Come</th><th>Say</th><th>Leave</th><th>Покупать</th></tr>
        <?php if (ucfirst($_POST[one]) == Приходить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Приходить){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Сказать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Сказать){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Оставлять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Оставлять ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Buy ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Buy ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Get </th><th>Keep</th><th>Read</th><th>Говорить</th></tr>
    <?php if (ucfirst($_POST[five]) == Получить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Получить){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Хранить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Хранить){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Читать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Читать ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Tell ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Tell ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Know </th><th>Understand</th><th>Write</th><th>Начинать</th></tr>
    <?php if (ucfirst($_POST[nine]) == Знать){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Знать){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Понимать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Понимать){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Писать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Писать ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Begin ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Begin ){$ot++;}else{$not++;}?><br>
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
    ?><div id="but_answer"> <a href="../level2.php" class="btn btn-success"  id="coo"  role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>