<div class="body_answer">
.
    <?php
    require_once('../../../conect.php');
    ?>
    <link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../../Style/Level3/etap3/resault.js" defer></script>

    <?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Palm</th><th>Index finger</th><th>Toe</th><th>Борода</th></tr>
        <?php if (ucfirst($_POST[one]) == Ладонь ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Ладонь){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Indexfinger ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Indexfinger){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Палецноги ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Палецноги ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Beard ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Beard ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Lip</th><th>Fist</th><th>Wrist</th><th>Талия</th></tr>
    <?php if (ucfirst($_POST[five]) == Губа ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Губа){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Fist ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Fist){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Запястье ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Запястье ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Waist ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Waist ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Intestine</th><th>Brain</th><th>Skull</th><th>Кишечник</th></tr>
    <?php if (ucfirst($_POST[nine]) == Кишка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Кишка){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Brain ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Brain){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Череп ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Череп ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Intestines ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Intestines ){$ot++;}else{$not++;}?><br>
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
    ?><div id="but_answer"> <a href="../level3.php" class="btn btn-success" id="coo"  role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>