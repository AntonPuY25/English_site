<?php
require_once('../../../conect.php');
?>
<link href ="../../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css"/>




<div id="etapresault">
<form role ="form1" method="POST" action="ResultsEtap1.php">
    <br><br><br>
    <div class="col-md-4">
        <div class="name-test1">
            Treat
        </div>
            <br>
                <div class="col-md-3">
                    <lable>
                        <input type="radio" name="one" id="radio1" value="Общение" >Общение

                    </lable></div>

                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio2" value="Связи" >Связи

                    </lable></div>
                <div class="col-md-3"> <lable>
                        <input type="radio" name="one" id="radio3" value="Рассматривать" >Рассматривать

                    </lable></div>
                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio4" value="Взаимный" >Взаимный

                    </lable></div>


            <div class="name-test1">
                <br><br>
                <audio controls>
                    <source src="../../../audio/Level5/etap4/Communication.mp3">
                </audio>
            </div>
        <br>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio1" value="Взаимный">Взаимный

                    </lable></div>
                <div class="col-md-3">  <lable>
                    <input type="radio" name="two" id="radio2" value="Отношения">Отношения

                    </lable></div>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio3" value="Общение">Общение

                    </lable></div>
                <div class="col-md-3"><lable>
                    <input type="radio" name="two" id="radio4" value="Встретить">Встретить

                    </lable>
                </div>


        <div class="name-test1">

            <br><br>
                <audio controls>
                    <source src="../../../audio/Level5/etap4/Contact.mp3">
                </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio1" value="Расставаться" >Расставаться

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="three" id="radio2" value="Отношения" >Отношения

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio3" value="Контакт" >Контакт

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="three" id="radio4" value="Знакомство" >Знакомство

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Неприязнь
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio1" value="Dislike" >Dislike

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="four" id="radio2" value="Like" >Like

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio3" value="Love" >Love

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="four" id="radio4" value="Meet" >Meet

            </lable></div><br> <br><br></div>










    <div class="col-md-4"> <div class="name-test1">
            Loathe
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="five" id="radio1" value="Дружба" >Дружба

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio2" value="Одобрить" >Одобрить

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="five" id="radio3" value="Ненавидеть" >Ненавидеть

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio4" value="Неодобрение" >Неодобрение

            </lable></div>


        <div class="name-test1">
            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap4/Approve.mp3">
            </audio>
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio1" value="Осуждение" >Осуждение

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="six" id="radio2" value="Дружба" >Дружба

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio3" value="Осужденный" >Осужденный

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="six" id="radio4" value="Одобрить" >Одобрить

            </lable>
        </div>


        <div class="name-test1">

            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap4/Enemy.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio1" value="Враг" >Враг

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="seven" id="radio2" value="Расставание" >Расставание

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio3" value="Разделение" >Разделение

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="seven" id="radio4" value="Друг" >Друг

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Враждебность
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio1" value="Hostility" >Hostility

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eight" id="radio2" value="Hatred" >Hatred

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio3" value="Hate" >Hate

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eight" id="radio4" value="Parting" >Parting

            </lable></div><br> <br><br></div>














    <div class="col-md-4"> <div class="name-test1">
            Separation
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="nine" id="radio1" value="Осуждение" >Осуждение

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio2" value="Знакомство" >Знакомство

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="nine" id="radio3" value="Ненавидеть" >Ненавидеть

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio4" value="Разделение" >Разделение

            </lable></div>


        <div class="name-test1">
            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap4/Trust.mp3">
            </audio>
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio1" value="Ссора" >Ссора

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="ten" id="radio2" value="Спор" >Спор

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio3" value="Доверять" >Доверять

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="ten" id="radio4" value="Оставлять" >Оставлять

            </lable>
        </div>


        <div class="name-test1">

            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap4/Worry.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio1" value="Оставлять" >Оставлять

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eleven" id="radio2" value="Осужденный" >Осужденный

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio3" value="Переживать" >Переживать

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eleven" id="radio4" value="Взаимный" >Взаимный

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Оставлять
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio1" value="Argue" >Argue

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="twelve" id="radio2" value="Quarrel" >Quarrel

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio3" value="Abandon" >Abandon

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="twelve" id="radio4" value="Leave" >Leave

            </lable></div>  <br> <br><br></div>





        <div id="button_etap">
            <input type ="submit" class="btn btn-success"   id="button2" value="Отправить">
        </div>
</form>
</div>