<div class="body_answer">
.
    <?php
    require_once('../../../conect.php');
    ?>
    <link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level2/etap6/resault.js" defer></script>
<?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Engine</th><th>Bicycle</th><th>Bus</th><th>Авария</th></tr>
        <?php if (ucfirst($_POST[one]) == Двигатель ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Двигатель){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Bicycle ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Bicycle){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Автобус ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Автобус ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Accident ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Accident ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Tyre</th><th>Train</th><th>Highway</th><th>Пешеход</th></tr>
    <?php if (ucfirst($_POST[five]) == Покрышка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Покрышка){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Train ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Train){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Шоссе ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Шоссе ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Pedestrian ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Pedestrian ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Tram</th><th>Station</th><th>Transport</th><th>Лодка</th></tr>
    <?php if (ucfirst($_POST[nine]) == Трамвай ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Трамвай){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Station ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Station){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Транспорт ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Транспорт ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Boat ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Boat ){$ot++;}else{$not++;}?><br>
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
    ?><div id="but_answer"> <a href="../level2.php" id="coo" class="btn btn-success"   role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>