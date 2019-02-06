<div class="body_answer">
    .
<?php
require_once('../../../conect.php');
?>
<link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level4/etap8/resault.js" defer></script>
<?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Rich</th><th>Cloud</th><th>Order</th><th>Иногда</th></tr>
        <?php if (ucfirst($_POST[one]) == Богатый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Богатый){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Cloud ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Cloud){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Заказывать ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Заказывать ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Sometimes ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[four] == Sometimes ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Point </th><th>Lightning</th><th>Considerate</th><th>Певец</th></tr>
    <?php if (ucfirst($_POST[five]) == Направлять ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Направлять){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Lightning ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Lightning){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Внимательный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Внимательный ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Singer ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Singer ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>В основном</th><th>Constellation</th><th>Weak</th><th>Оттепель</th></tr>
    <?php if (ucfirst($_POST[nine]) == Mostly ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Mostly){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Constellation ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Constellation){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Слабый ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Слабый ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Thawing ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Thawing ){$ot++;}else{$not++;}?><br>
</table>

<br><br><br>
<table>
    <tr><th>Количество ошибок</th><th>Количество правильных ответов</th></tr>
    <tr><td><?php echo $not   ?><br></td><td><?php echo $ot   ?></td>

</table>
    <?php
if($not>1){
    ?><div id="but_answer"> <a href="Etap8Test.php" class="btn btn-danger" role="button" >Повторить</a></div>


    <?
}else{
    ?><div id="but_answer"> <a href="../level4.php" class="btn btn-success" id="coo"  role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>
</div>