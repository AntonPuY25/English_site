<div class="body_answer">
    .
<?php
require_once('../../../conect.php');
?>
<link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level3/etap8/resault.js" defer></script>
<?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Joy</th><th>Stone</th><th>Expensive</th><th>Ладонь</th></tr>
        <?php if (ucfirst($_POST[one]) == Радость ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Радость){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Stone ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Stone){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Дорогой ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Дорогой ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Palm ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[four] == Palm ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Roll </th><th>Skyscraper</th><th>Skull</th><th>Аптека</th></tr>
    <?php if (ucfirst($_POST[five]) == Катить ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Катить){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Skyscraper ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Skyscraper){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Череп ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Череп ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Drugstore ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Drugstore ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Shame</th><th>Spain</th><th>Star</th><th>Кулак</th></tr>
    <?php if (ucfirst($_POST[nine]) == Стыд ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Стыд){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Spain ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Spain){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Звезда ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Звезда ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Fist ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Fist ){$ot++;}else{$not++;}?><br>
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
    ?><div id="but_answer"> <a href="../level3.php" class="btn btn-success" id="coo"  role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>
</div>