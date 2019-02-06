<div class="body_answer">
.
<?php
require_once('../../conect.php');
?>
<link href ="../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../Style/etap4/resault.js" defer></script>

    <?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Yellow </th><th>Green</th><th>Red</th><th>Цвет</th></tr>
        <?php if (ucfirst($_POST[one]) == Жёлтый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Жёлтый){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Green ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Green){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Красный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Красный ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Color ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Color ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Orange </th><th>Black</th><th>Brown</th><th>Розовый</th></tr>
    <?php if (ucfirst($_POST[five]) == Оранжевый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Оранжевый){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Black ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Black){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Коричневый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Коричневый ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Pink ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Pink ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Purple </th><th>Yellow</th><th>Dark</th><th>Красный</th></tr>
    <?php if (ucfirst($_POST[nine]) == Фиолетовый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Фиолетовый){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Yellow ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Yellow){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Тёмный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Тёмный ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Red ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Red ){$ot++;}else{$not++;}?><br>
</table>

<br><br><br>
<table>
    <tr><th>Количество ошибок</th><th>Количество правильных ответов</th></tr>
    <tr><td><?php echo $not   ?><br></td><td><?php echo $ot   ?></td>

</table>
    <?php
if($not>1){
    ?><div id="but_answer"> <a href="Etap4Test.php" class="btn btn-danger" role="button" >Повторить</a></div>


    <?
}else{
    ?><div id="but_answer"> <a href="../level1.php" class="btn btn-success"  id="coo"  role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>