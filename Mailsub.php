<?php
if($_POST['name']  and  $_POST['message'] and $_POST['subject'] and  $_POST['user_email']){
    mail('rockmen2016@mail.ru',$_POST['subject'],$_POST['message'],$_POST['user_email'],$_POST['name']);
    echo 'Ваше сообщение отправлено';

}else{
    echo'False';
}

?>
<a href="index.php">На главную</a>
