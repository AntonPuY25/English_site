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
            Rain
        </div>
            <br>
                <div class="col-md-3">
                    <lable>
                        <input type="radio" name="one" id="radio1" value="Дождь" >Дождь

                    </lable></div>

                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio2" value="Снег" >Снег

                    </lable></div>
                <div class="col-md-3"> <lable>
                        <input type="radio" name="one" id="radio3" value="Ветер" >Ветер

                    </lable></div>
                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio4" value="Туман" >Туман

                    </lable></div>
                                            <br><br><br><br>

            <div class="name-test1">
                Snow
            </div>
        <br>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio1" value="Rain" ><img src="../../../image/Level4/etap1/rain.jpg" class="kartinka">

                    </lable></div>
                <div class="col-md-3">  <lable>
                    <input type="radio" name="two" id="radio2" value="Fog" ><img src="../../../image/Level4/etap1/fog.jpg" class="kartinka">

                    </lable></div>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio3" value="Snow" ><img src="../../../image/Level4/etap1/snow.jpg" class="kartinka">

                    </lable></div>
                <div class="col-md-3"><lable>
                    <input type="radio" name="two" id="radio4" value="Hail" ><img src="../../../image/Level4/etap1/hail.png" class="kartinka">

                    </lable>
                </div>


        <div class="name-test1">

            <br><br><br><br>
                <audio controls>
                    <source src="../../../audio/Level4/etap1/Sunny.mp3">
                </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio1" value="Жара" >Жара

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="three" id="radio2" value="Холодно" >Холодно

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio3" value="Солнечно" >Солнечно

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="three" id="radio4" value="Осадки" >Осадки

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Погода
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio1" value="Hail" >Hail

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="four" id="radio2" value="Shower" >Shower

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio3" value="Mist" >Mist

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="four" id="radio4" value="Weather" >Weather

            </lable></div><br> <br><br></div>










    <div class="col-md-4"> <div class="name-test1">
            Cloudy
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="five" id="radio1" value="Лёгкийтуман" >Лёгкий туман

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio2" value="Облачный" >Облачный

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="five" id="radio3" value="Ледяной" >Ледяной

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio4" value="Холодно" >Холодно

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
            Lightning
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio1" value="Lightning" ><img src="../../../image/Level4/etap1/lightning.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="six" id="radio2" value="Mist" ><img src="../../../image/Level4/etap1/mist.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio3" value="Cloudy" ><img src="../../../image/Level4/etap1/cloudy.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="six" id="radio4" value="Shower" ><img src="../../../image/Level4/etap1/shower.jpg" class="kartinka">

            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../../audio/Level4/etap1/Moisture.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio1" value="Влажность" >Влажность

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="seven" id="radio2" value="Дождливый" >Дождливый

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio3" value="Облачный" >Облачный

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="seven" id="radio4" value="Осадки" >Осадки

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Радуга
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio1" value="Snowfall" >Snowfall

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eight" id="radio2" value="Rainbow" >Rainbow

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio3" value="Rainfall" >Rainfall

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eight" id="radio4" value="Lightning" >Lightning

            </lable></div><br> <br><br></div>














    <div class="col-md-4"> <div class="name-test1">
            Thunder
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="nine" id="radio1" value="Буря" >Буря

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio2" value="Гром" >Гром

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="nine" id="radio3" value="Молния" >Молния

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio4" value="Гроза" >Гроза

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
            Snowflake
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio1" value="Snowdrift" ><img src="../../../image/Level4/etap1/snowdrift.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="ten" id="radio2" value="Snowflake" ><img src="../../../image/Level4/etap1/snowflake.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio3" value="Icicle" ><img src="../../../image/Level4/etap1/icicle.jpg" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="ten" id="radio4" value="Cloud" ><img src="../../../image/Level4/etap1/cloud.png" class="kartinka">

            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../../audio/Level4/etap1/Sunset.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio1" value="Восход" >Восход

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eleven" id="radio2" value="Закат" >Закат

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio3" value="Оттепель" >Оттепель

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eleven" id="radio4" value="Сугроб" >Сугроб

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Лужа
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio1" value="Thawing" >Thawing

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="twelve" id="radio2" value="Puddle" >Puddle

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio3" value="Dew" >Dew

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="twelve" id="radio4" value="Cloud" >Cloud

            </lable></div>  <br> <br><br></div>





        <div id="button_etap">
            <input type ="submit" class="btn btn-success"   id="button2" value="Отправить">
        </div>
</form>
</div>