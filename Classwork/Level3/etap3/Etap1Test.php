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
            Palm
        </div>
            <br>
                <div class="col-md-3">
                    <lable>
                        <input type="radio" name="one" id="radio1" value="Запястье" >Запястье

                    </lable></div>

                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio2" value="Природа" >Природа

                    </lable></div>
                <div class="col-md-3"> <lable>
                        <input type="radio" name="one" id="radio3" value="Ладонь" >Ладонь

                    </lable></div>
                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio4" value="Голень" >Голень

                    </lable></div>
                                            <br><br><br><br>

            <div class="name-test1">
                Index finger
            </div>
        <br>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio1" value="Thumb" ><img src="../../../image/Level3/etap3/thumb.png" class="kartinka">

                    </lable></div>
                <div class="col-md-3">  <lable>
                    <input type="radio" name="two" id="radio2" value="Ringfinger" ><img src="../../../image/Level3/etap3/ring-finger.png" class="kartinka">

                    </lable></div>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio3" value="Middlefinger" ><img src="../../../image/Level3/etap3/Middle-finger.png" class="kartinka">

                    </lable></div>
                <div class="col-md-3"><lable>
                    <input type="radio" name="two" id="radio4" value="Indexfinger" ><img src="../../../image/Level3/etap3/Index-finger.png" class="kartinka">

                    </lable>
                </div>


        <div class="name-test1">

            <br><br><br><br>
                <audio controls>
                    <source src="../../../audio/Level3/etap3/Toe.mp3">
                </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio1" value="Ноготь" >Ноготь

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="three" id="radio2" value="Палецноги" >Палец ноги

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio3" value="Большойпалец" >Большой палец

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="three" id="radio4" value="Голень" >Голень

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Борода
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio1" value="Beard" >Beard

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="four" id="radio2" value="Heel" >Heel

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio3" value="Chin" >Chin

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="four" id="radio4" value="Cheek" >Cheek

            </lable></div><br> <br><br></div>










    <div class="col-md-4"> <div class="name-test1">
            Lip
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="five" id="radio1" value="Подбородок" >Подбородок

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio2" value="Лоб" >Лоб

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="five" id="radio3" value="Губа" >Губа

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio4" value="Бровь" >Бровь

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
            Fist
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio1" value="Cheek" ><img src="../../../image/Level3/etap3/сheek.png" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="six" id="radio2" value="Wrist" ><img src="../../../image/Level3/etap3/wrist.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio3" value="Shin" ><img src="../../../image/Level3/etap3/shin.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="six" id="radio4" value="Fist" ><img src="../../../image/Level3/etap3/fist.png" class="kartinka">

            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../../audio/Level3/etap3/Wrist.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio1" value="Грудь" >Грудь

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="seven" id="radio2" value="Лоб" >Лоб

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio3" value="Пятка" >Пятка

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="seven" id="radio4" value="Запястье" >Запястье

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Талия
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio1" value="Waist" >Waist

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eight" id="radio2" value="Breast" >Breast

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio3" value="Shin" >Shin

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eight" id="radio4" value="Beard" >Beard

            </lable></div><br> <br><br></div>














    <div class="col-md-4"> <div class="name-test1">
            Intestine
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="nine" id="radio1" value="Кишка" >Кишка

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio2" value="Мозг" >Мозг

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="nine" id="radio3" value="Печень" >Печень

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio4" value="Легкие" >Легкие

            </lable></div>
        <br><br><br><br>

        <div class="name-test1">
            Brain
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio1" value="Brain" ><img src="../../../image/Level3/etap3/brain.png" class="kartinka">

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="ten" id="radio2" value="Kidney" ><img src="../../../image/Level3/etap3/kidney.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio3" value="Lungs" ><img src="../../../image/Level3/etap3/lungs.png" class="kartinka">

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="ten" id="radio4" value="Liver" ><img src="../../../image/Level3/etap3/lliver.png" class="kartinka">

            </lable>
        </div>


        <div class="name-test1">

            <br><br><br><br>
            <audio controls>
                <source src="../../../audio/Level3/etap3/Skull.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio1" value="Печень" >Печень

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eleven" id="radio2" value="Губа" >Губа

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio3" value="Лоб" >Лоб

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eleven" id="radio4" value="Череп" >Череп

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Кишечник
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio1" value="Kidney" >Kidney

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="twelve" id="radio2" value="Intestines" >Intestines

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio3" value="Liver" >Liver

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="twelve" id="radio4" value="Shin" >Shin

            </lable></div>  <br> <br><br></div>





        <div id="button_etap">
            <input type ="submit" class="btn btn-success"   id="button2" value="Отправить">
        </div>
</form>
</div>