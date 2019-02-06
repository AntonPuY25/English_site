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
            Physician
        </div>
            <br>
                <div class="col-md-3">
                    <lable>
                        <input type="radio" name="one" id="radio1" value="Терапевт" >Терапевт

                    </lable></div>

                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio2" value="Хирург" >Хирург

                    </lable></div>
                <div class="col-md-3"> <lable>
                        <input type="radio" name="one" id="radio3" value="Врач" >Врач

                    </lable></div>
                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio4" value="Гинеколог" >Гинеколог

                    </lable></div>


            <div class="name-test1">
                <br><br>
                <audio controls>
                    <source src="../../../audio/Level5/etap1/Doctor.mp3">
                </audio>
            </div>
        <br>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio1" value="Зубнойврач">Зубной врач

                    </lable></div>
                <div class="col-md-3">  <lable>
                    <input type="radio" name="two" id="radio2" value="Ревматолог">Ревматолог

                    </lable></div>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio3" value="Хирург">Хирург

                    </lable></div>
                <div class="col-md-3"><lable>
                    <input type="radio" name="two" id="radio4" value="Врач">Врач

                    </lable>
                </div>


        <div class="name-test1">

            <br><br>
                <audio controls>
                    <source src="../../../audio/Level5/etap1/Midwife.mp3">
                </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio1" value="Окулист" >Окулист

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="three" id="radio2" value="Терапевт" >Терапевт

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio3" value="Акушерка" >Акушерка

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="three" id="radio4" value="Медсестра" >Медсестра

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Больница
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio1" value="Medicalcenter" >Medical center

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="four" id="radio2" value="Hospital" >Hospital

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio3" value="Maternityhospital" >Maternity hospital

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="four" id="radio4" value="Polyclinic" >Polyclinic

            </lable></div><br> <br><br></div>










    <div class="col-md-4"> <div class="name-test1">
            Coplaints
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="five" id="radio1" value="Бессонница" >Бессонница

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio2" value="Задыхаться" >Задыхаться

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="five" id="radio3" value="Лечение" >Лечение

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio4" value="Жалобы" >Жалобы

            </lable></div>


        <div class="name-test1">
            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap1/Oculist.mp3">
            </audio>
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio1" value="Массажист" >Массажист

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="six" id="radio2" value="Окулист" >Окулист

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio3" value="Акушерка" >Акушерка

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="six" id="radio4" value="Зубнойврач" >Зубной врач

            </lable>
        </div>


        <div class="name-test1">

            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap1/Sneeze.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio1" value="Кашель" >Кашель

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="seven" id="radio2" value="Задыхаться" >Задыхаться

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio3" value="Насморк" >Насморк

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="seven" id="radio4" value="Чихать" >Чихать

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Изжога
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio1" value="Pregnancy" >Pregnancy

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eight" id="radio2" value="Heartburn" >Heart burn

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio3" value="Runnynose" >Runny nose

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eight" id="radio4" value="Cough" >Cough

            </lable></div><br> <br><br></div>














    <div class="col-md-4"> <div class="name-test1">
            Insomnia
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="nine" id="radio1" value="Беременность" >Беременность

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio2" value="Изжога" >Изжога

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="nine" id="radio3" value="Бессонница" >Бессонница

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio4" value="Менструация" >Менструация

            </lable></div>


        <div class="name-test1">
            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap1/Pain.mp3">
            </audio>
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio1" value="Боль" >Боль

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="ten" id="radio2" value="Кашель" >Кашель

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio3" value="Синяк" >Синяк

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="ten" id="radio4" value="Ожог" >Ожог

            </lable>
        </div>


        <div class="name-test1">

            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap1/Boil.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio1" value="Синяк" >Синяк

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eleven" id="radio2" value="Шишка" >Шишка

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio3" value="Перелом" >Перелом

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eleven" id="radio4" value="Нарыв" >Нарыв

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Волдырь
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio1" value="Lump" >Lump

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="twelve" id="radio2" value="Fracture" >Fracture

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio3" value="Burn" >Burn

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="twelve" id="radio4" value="Blister" >Blister

            </lable></div>  <br> <br><br></div>





        <div id="button_etap">
            <input type ="submit" class="btn btn-success"   id="button2" value="Отправить">
        </div>
</form>
</div>