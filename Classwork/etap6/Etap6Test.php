<?php
require_once('../../conect.php');
?>
<link href ="../../Style/StyleLesson/styles.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"/>


<div id="etapresault">
<form role ="form1" method="POST" action="ResultsEtap6.php">
    <br><br><br>
    <div class="col-md-4">
        <div class="name-test1">
          Street
        </div>
            <br>
                <div class="col-md-3">
                    <lable>
                        <input type="radio" name="one" id="radio1" value="Кухня" >Кухня

                    </lable></div>

                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio2" value="Коттедж" >Коттедж

                    </lable></div>
                <div class="col-md-3"> <lable>
                        <input type="radio" name="one" id="radio3" value="Улица" >Улица

                    </lable></div>
                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio4" value="Веранда" >Веранда

                    </lable></div>
                                            <br><br><br><br>

            <div class="name-test1">
          Window
            </div>
        <br>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio1" value="Window" ><img src="../../image/etap6/window.png" class="kartinka">

                    </lable></div>
                <div class="col-md-3">  <lable>
                    <input type="radio" name="two" id="radio2" value="Room" ><img src="../../image/etap6/room.jpg" class="kartinka">

                    </lable></div>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio3" value="Kitchen" ><img src="../../image/etap6/kitchen.jpg" class="kartinka">

                    </lable></div>
                <div class="col-md-3"><lable>
                    <input type="radio" name="two" id="radio4" value="Sofa" ><img src="../../image/etap6/sofa.png" class="kartinka">

                    </lable>
                </div>


        <div class="name-test1">

            <br><br><br><br>
                <audio controls>
                    <source src="../../audio/etap6/Kitchen.mp3">
                </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio1" value="Крыша" >Крыша

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="three" id="radio2" value="Стол" >Стол

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio3" value="Веранда" >Веранда

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="three" id="radio4" value="Кухня" >Кухня

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Стул
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio1" value="Table" >Table

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="four" id="radio2" value="Chair" >Chair

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio3" value="Wall" >Wall

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="four" id="radio4" value="Hall" >Hall

            </lable></div><br> <br><br></div>










    <div class="col-md-4"> <div class="name-test1">
            Porch
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="five" id="radio1" value="Туалет" >Туалет

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio2" value="Дверь" >Дверь

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="five" id="radio3" value="Двор" >Двор

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio4" value="Веранда" >Веранда

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
            Garage
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio1" value="Roof" ><img src="../../image/etap6/roof.png" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="six" id="radio2" value="Garage" ><img src="../../image/etap6/garage.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio3" value="Yard" ><img src="../../image/etap6/yard.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="six" id="radio4" value="Table" ><img src="../../image/etap6/table.png" class="kartinka">

            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../audio/etap6/Yard.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio1" value="Стена" >Стена

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="seven" id="radio2" value="Двор" >Двор

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio3" value="Пол" >Пол

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="seven" id="radio4" value="Улица" >Улица

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Диван
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio1" value="Sofa" >Sofa

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eight" id="radio2" value="Roof" >Roof

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio3" value="Wall" >Wall

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eight" id="radio4" value="Bath" >Bath

            </lable></div><br> <br><br></div>














    <div class="col-md-4"> <div class="name-test1">
            Bed
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="nine" id="radio1" value="Зал" >Зал

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio2" value="Стена" >Стена

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="nine" id="radio3" value="Кровать" >Кровать

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio4" value="Пол" >Пол

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
           Room
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio1" value="Floor" ><img src="../../image/etap6/floor.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="ten" id="radio2" value="Door" ><img src="../../image/etap6/door.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio3" value="Chair" ><img src="../../image/etap6/chair.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="ten" id="radio4" value="Room" ><img src="../../image/etap6/room.jpg" class="kartinka">

            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../audio/etap6/Restroom.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio1" value="Туалет" >Туалет

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eleven" id="radio2" value="Спальня" >Спальня

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio3" value="Зал" >Зал

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eleven" id="radio4" value="Кухня" >Кухня

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Дом
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio1" value="Garage" >Garage

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="twelve" id="radio2" value="Cottage" >Cottage

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio3" value="House" >House

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="twelve" id="radio4" value="Room" >Room

            </lable></div>  <br> <br><br></div>





        <div id="button_etap">
            <input type ="submit" class="btn btn-success"   id="button2" value="Отправить">
        </div>
</form>
</div>