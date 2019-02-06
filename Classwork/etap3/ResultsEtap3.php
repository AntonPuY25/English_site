<div class="body_answer">
.
<?php
require_once('../../conect.php');
?>
<link href ="../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"/>
    <script src ="../../Style/etap3/resault.js" defer></script>

    <?php
$ot = 0;
$not = 0;

?>

                                <h2 id="zag">Результат:</h2>
<table>
    <tr><th>Grandmother </th><th>Aunt</th><th>Grandfather</th><th>Брат</th></tr>
        <?php if (ucfirst($_POST[one]) == Бабушка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[one])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[one]));}?></td>
        <?php if ($_POST[one] == Бабушка){$ot++;}else{$not++;}?><br>


        <?php if (ucfirst($_POST[two]) == Тётя ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[two])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[two]));}?></td>
        <?php   if ($_POST[two] == Тётя){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[three]) == Дедушка ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[three])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[three]));}?></td>
        <?php  if ($_POST[three] == Дедушка ){$ot++;}else{$not++;}?><br>

        <?php if (ucfirst($_POST[four]) == Brother ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[four])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[four]));}?></td>
        <?php  if ($_POST[four] == Brother ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Family </th><th>Husband</th><th>Name</th><th>Дочь</th></tr>
    <?php if (ucfirst($_POST[five]) == Семья ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[five])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[five]));}?></td>
    <?php if ($_POST[five] == Семья){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[six]) == Муж ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[six])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[six]));}?></td>
    <?php   if ($_POST[six] == Муж){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[seven]) == Имя ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[seven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[seven]));}?></td>
    <?php  if ($_POST[seven] == Имя ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eight]) == Daughter ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eight])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eight]));}?></td>
    <?php  if ($_POST[eight] == Daughter ){$ot++;}else{$not++;}?><br>
</table>

<table>
    <tr><th>Mother </th><th>Dad</th><th>Father</th><th>Внук</th></tr>
    <?php if (ucfirst($_POST[nine]) == Мама ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[nine])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[nine]));}?></td>
    <?php if ($_POST[nine] == Мама){$ot++;}else{$not++;}?><br>


    <?php if (ucfirst($_POST[ten]) == Отец ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[ten])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[ten]));}?></td>
    <?php   if ($_POST[ten] == Отец){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[eleven]) == Папа ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[eleven])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[eleven]));}?></td>
    <?php  if ($_POST[eleven] == Папа ){$ot++;}else{$not++;}?><br>

    <?php if (ucfirst($_POST[twelve]) == Grandson ){?><td bgcolor="#adff2f"><?php echo   (ucfirst ($_POST[twelve])); ?></td> <?php }else{ ?> <td bgcolor="red"><?php echo (ucfirst ($_POST[twelve]));}?></td>
    <?php  if ($_POST[twelve] == Grandson ){$ot++;}else{$not++;}?><br>
</table>

<br><br><br>
<table>
    <tr><th>Количество ошибок</th><th>Количество правильных ответов</th></tr>
    <tr><td><?php echo $not   ?><br></td><td><?php echo $ot   ?></td>

</table>
    <?php
if($not>1){
    ?><div id="but_answer"> <a href="Etap3Test.php" class="btn btn-danger" role="button" >Повторить</a></div>


    <?
}else{
    ?><div id="but_answer"> <a href="../level1.php"  id="coo" class="btn btn-success"   role="button" >Следующий уровень</a></div>
    <?php
}
    ?>









</div>