
<link href ="Style/style.css" rel="stylesheet" type ="text/css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<script src ="Style/main.js" defer></script>
<?php
?>
<div id="logincon">




            <form action="Mailsub.php" method="POST">
                <div align="center">


                <div class="form-group1">
                    <label for="exampleInputName1" id="label">Введите ваше имя</label>
                    <input type="text" class="form-control" id="exmapleInputName" name="name" required placeholder="Например, Иван">
                </div>

                <div class="form-group1">
                    <label for="exampleInputpassword" id="label">Введите тему сообщения</label>
                    <input type="text" class="form-control" id="exmapleInputpassword" name="subject" placeholder="Укажите тему вашего обращения">
                </div>

                <div class="form-group1">
                    <label for="exampleInputpassword" id="label">Введите email</label>
                    <input type="text" class="form-control" id="exmapleInputemail" name="user_email" placeholder="@mail.ru">
                </div>
                <div class="form-group1">
                    <label for="exampleInputpassword" id="label"> Введите сообщение</label>
                    <textarea required name="message" cols="50" rows="10"></textarea><br><br>
                </div>
                    <div class="form-group1">
                        <input type ="submit" class="btn btn-info" value="Отправить сообщение">
                    </div>
            </form>
        </div>
    </div>

</div>
    </div>
</div>