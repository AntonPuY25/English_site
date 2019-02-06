<div class="body_answer">
.
<?php
require_once('../../conect.php');
?>
<link href ="../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../Style/etap1/resault.js" defer></script>

    <?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Bye </th><th>Boy</th><th>Day</th><th>White</th></tr>
        <?php if (ucfirst($_POST[one]) == Пока ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Пока){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Boy ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Boy){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == День ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == День ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == White ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == White ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Man </th><th>Apple</th><th>Black</th><th>Girl</th></tr>
    <?php if (ucfirst($_POST[five]) == Мужчина ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Мужчина){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Apple ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Apple){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Чёрный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Чёрный ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Girl ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Girl ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Please </th><th>Seven</th><th>Human</th><th>Night</th></tr>
    <?php if (ucfirst($_POST[nine]) == Пожалуйста ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Пожалуйста){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Seven ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Seven){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Человек ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Человек ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Night ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Night ){$ot++;}else{$not++;}?><br>
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
    ?><div id="but_answer"> <a href="../level1.php" id="coo" class="btn btn-success"   role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>