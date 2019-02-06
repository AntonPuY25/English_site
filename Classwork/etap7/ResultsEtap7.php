<div class="body_answer">
.
<?php
require_once('../../conect.php');
?>
<link href ="../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../Style/etap7/resault.js" defer></script>

    <?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Head</th><th>Hand</th><th>Body</th><th>Кровь</th></tr>
        <?php if (ucfirst($_POST[one]) == Голова ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Голова){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Hand ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Hand){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Тело ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Тело ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Blood ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Blood ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Nose </th><th>Finger</th><th>Blood</th><th>Кость</th></tr>
    <?php if (ucfirst($_POST[five]) == Нос ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Нос){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Finger ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Finger){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Кровь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Кровь ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Bone ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Bone ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Belly</th><th>Heart</th><th>Elbow</th><th>Волосы</th></tr>
    <?php if (ucfirst($_POST[nine]) == Живот ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Живот){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Heart ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Heart){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Локоть ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Локоть ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Hair ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Hair ){$ot++;}else{$not++;}?><br>
</table>

<br><br><br>
<table>
    <tr><th>Количество ошибок</th><th>Количество правильных ответов</th></tr>
    <tr><td><?php echo $not   ?><br></td><td><?php echo $ot   ?></td>

</table>
    <?php
if($not>1){
    ?><div id="but_answer"> <a href="Etap7Test.php" class="btn btn-danger" role="button" >Повторить</a></div>


    <?
}else{
    ?><div id="but_answer"> <a href="../level1.php" class="btn btn-success"  id="coo" role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>