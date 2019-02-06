<div class="body_answer">
.
    <?php
    require_once('../../../conect.php');
    ?>
    <link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level4/etap1/resault.js" defer></script>
<?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Rain</th><th>Snow</th><th>Sunny</th><th>Погода</th></tr>
        <?php if (ucfirst($_POST[one]) == Дождь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Дождь){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Snow ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Snow){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Солнечно ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Солнечно ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Weather ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Weather ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Cloudy</th><th>Lightning</th><th>Moisture</th><th>Радуга</th></tr>
    <?php if (ucfirst($_POST[five]) == Облачный ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Облачный){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Lightning ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Lightning){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Влажность ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Влажность ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Rainbow ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Rainbow ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Thunder</th><th>Snowflake</th><th>Sunset</th><th>Лужа</th></tr>
    <?php if (ucfirst($_POST[nine]) == Гром ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Гром){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Snowflake ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Snowflake){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Закат ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Закат ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Puddle ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Puddle ){$ot++;}else{$not++;}?><br>
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