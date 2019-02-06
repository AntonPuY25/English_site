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
            Country
        </div>
            <br>
                <div class="col-md-3">
                    <lable>
                        <input type="radio" name="one" id="radio1" value="Город" >Город

                    </lable></div>

                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio2" value="Страна" >Страна

                    </lable></div>
                <div class="col-md-3"> <lable>
                        <input type="radio" name="one" id="radio3" value="Область" >Область

                    </lable></div>
                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio4" value="Деревня" >Деревня

                    </lable></div>
                                            <br><br><br><br>

            <div class="name-test1">
                Skyscraper
            </div>
        <br>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio1" value="Palace" ><img src="../../../image/Level3/etap4/palace.jpg" class="kartinka">

                    </lable></div>
                <div class="col-md-3">  <lable>
                    <input type="radio" name="two" id="radio2" value="Bank" ><img src="../../../image/Level3/etap4/bank.png" class="kartinka">

                    </lable></div>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio3" value="Cafe" ><img src="../../../image/Level3/etap4/cafe.jpg" class="kartinka">

                    </lable></div>
                <div class="col-md-3"><lable>
                    <input type="radio" name="two" id="radio4" value="Skyscraper" ><img src="../../../image/Level3/etap4/skyscraper.jpg" class="kartinka">

                    </lable>
                </div>


        <div class="name-test1">

            <br><br><br><br>
                <audio controls>
                    <source src="../../../audio/Level3/etap4/District.mp3">
                </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio1" value="Адрес" >Адрес

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="three" id="radio2" value="Район" >Район

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio3" value="Область" >Область

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="three" id="radio4" value="Переулок" >Переулок

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Дворец
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio1" value="Building" >Building

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="four" id="radio2" value="Lane" >Lane

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio3" value="Region" >Region

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="four" id="radio4" value="Palace" >Palace

            </lable></div><br> <br><br></div>










    <div class="col-md-4"> <div class="name-test1">
            Store
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="five" id="radio1" value="Магазин" >Магазин

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio2" value="Школа" >Школа

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="five" id="radio3" value="Аллея" >Аллея

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio4" value="Площадь" >Площадь

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
            School
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio1" value="Store" ><img src="../../../image/Level3/etap4/drugstore.png" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="six" id="radio2" value="School" ><img src="../../../image/Level3/etap4/school.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio3" value="Hotel" ><img src="../../../image/Level3/etap4/hotel.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="six" id="radio4" value="Museum" ><img src="../../../image/Level3/etap4/museum.jpg" class="kartinka">
            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../../audio/Level3/etap4/Cinema.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio1" value="Кинотеатр" >Кинотеатр

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="seven" id="radio2" value="Музей" >Музей

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio3" value="Театр" >Театр

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="seven" id="radio4" value="Церковь" >Церковь

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Библиотека
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio1" value="Bookstore" >Bookstore

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eight" id="radio2" value="Library" >Library

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio3" value="Store" >Store

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eight" id="radio4" value="Church" >Church

            </lable></div><br> <br><br></div>














    <div class="col-md-4"> <div class="name-test1">
            Bakery
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="nine" id="radio1" value="Кафе" >Кафе

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio2" value="Кондитерская" >Кондитерская

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="nine" id="radio3" value="Пекарня" >Пекарня

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio4" value="Ресторан" >Ресторан

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
            Gas station
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio1" value="Gasstation" ><img src="../../../image/Level3/etap4/gas%20station.jpeg" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="ten" id="radio2" value="Postoffice" ><img src="../../../image/Level3/etap4/post%20office.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio3" value="Busstop" ><img src="../../../image/Level3/etap4/Bus-Stop.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="ten" id="radio4" value="Bookstore" ><img src="../../../image/Level3/etap4/bookstore.jpg" class="kartinka">

            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../../audio/Level3/etap4/Hospital.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio1" value="Пекарня" >Пекарня

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eleven" id="radio2" value="Больница" >Больница

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio3" value="Улица" >Улица

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eleven" id="radio4" value="Проспект" >Проспект

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Переулок
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio1" value="Square" >Square

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="twelve" id="radio2" value="Alley" >Alley

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio3" value="Lane" >Lane

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="twelve" id="radio4" value="Palace" >Palace

            </lable></div>  <br> <br><br></div>





        <div id="button_etap">
            <input type ="submit" class="btn btn-success"   id="button2" value="Отправить">
        </div>
</form>
</div>