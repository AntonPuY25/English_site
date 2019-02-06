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
            Supply
        </div>
            <br>
                <div class="col-md-3">
                    <lable>
                        <input type="radio" name="one" id="radio1" value="Снабжать" >Снабжать

                    </lable></div>

                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio2" value="Покупка" >Покупка

                    </lable></div>
                <div class="col-md-3"> <lable>
                        <input type="radio" name="one" id="radio3" value="Поставка" >Поставка

                    </lable></div>
                <div class="col-md-3">  <lable>
                        <input type="radio" name="one" id="radio4" value="Клиент" >Клиент

                    </lable></div>


            <div class="name-test1">
                <br><br>
                <audio controls>
                    <source src="../../../audio/Level5/etap2/Money.mp3">
                </audio>
            </div>
        <br>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio1" value="Инвестиции">Инвестиции

                    </lable></div>
                <div class="col-md-3">  <lable>
                    <input type="radio" name="two" id="radio2" value="Деньги">Деньги

                    </lable></div>
                <div class="col-md-3"> <lable>
                    <input type="radio" name="two" id="radio3" value="Залог">Залог

                    </lable></div>
                <div class="col-md-3"><lable>
                    <input type="radio" name="two" id="radio4" value="Гарантия">Гарантия

                    </lable>
                </div>


        <div class="name-test1">

            <br><br>
                <audio controls>
                    <source src="../../../audio/Level5/etap2/Transfer.mp3">
                </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio1" value="Зарабатывать" >Зарабатывать

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="three" id="radio2" value="Инвестиции" >Инвестиции

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="three" id="radio3" value="Покупатель" >Покупатель

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="three" id="radio4" value="Перевод" >Перевод

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Поставщик
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio1" value="Vendor" >Vendor

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="four" id="radio2" value="Supplier" >Supplier

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="four" id="radio3" value="Buyer" >Buyer

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="four" id="radio4" value="Provide" >Provide

            </lable></div><br> <br><br></div>










    <div class="col-md-4"> <div class="name-test1">
            Debt
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="five" id="radio1" value="Курс" >Курс

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio2" value="Обмен" >Обмен

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="five" id="radio3" value="Задолженность" >Задолженность

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="five" id="radio4" value="Убытки" >Убытки

            </lable></div>


        <div class="name-test1">
            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap2/Pay.mp3">
            </audio>
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio1" value="Платить" >Платить

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="six" id="radio2" value="Расплачиваться" >Расплачиваться

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="six" id="radio3" value="Оплата" >Оплата

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="six" id="radio4" value="Убытки" >Убытки

            </lable>
        </div>


        <div class="name-test1">

            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap2/Trade.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio1" value="Рынок" >Рынок

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="seven" id="radio2" value="Торговля" >Торговля

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="seven" id="radio3" value="Экспорт" >Экспорт

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="seven" id="radio4" value="Задолженность" >Задолженность

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Благотворительность
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio1" value="Charity" >Charity

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eight" id="radio2" value="Insurance" >Insurance

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eight" id="radio3" value="Damage" >Damage

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eight" id="radio4" value="Exchange" >Exchange

            </lable></div><br> <br><br></div>














    <div class="col-md-4"> <div class="name-test1">
            Transaction
        </div>
        <br>
        <div class="col-md-3">
            <lable>
                <input type="radio" name="nine" id="radio1" value="Спрос" >Спрос

            </lable></div>

        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio2" value="Сделка" >Сделка

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="nine" id="radio3" value="Торговля" >Торговля

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="nine" id="radio4" value="Задолженность" >Задолженность

            </lable></div>


        <div class="name-test1">
            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap2/Cost.mp3">
            </audio>
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio1" value="Курс" >Курс

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="ten" id="radio2" value="Убытки" >Убытки

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="ten" id="radio3" value="Страхование" >Страхование

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="ten" id="radio4" value="Стоимость" >Стоимость

            </lable>
        </div>


        <div class="name-test1">

            <br><br>
            <audio controls>
                <source src="../../../audio/Level5/etap2/Import.mp3">
            </audio>

        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio1" value="Маркетинг" >Маркетинг

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="eleven" id="radio2" value="Импортировать" >Импортировать

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="eleven" id="radio3" value="Брокер" >Брокер

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="eleven" id="radio4" value="Дилер" >Дилер

            </lable></div>



        <br><br><br><br>

        <div class="name-test1">
            Оплата
        </div>
        <br>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio1" value="Demand" >Demand

            </lable></div>
        <div class="col-md-3">  <lable>
                <input type="radio" name="twelve" id="radio2" value="Marketing" >Marketing

            </lable></div>
        <div class="col-md-3"> <lable>
                <input type="radio" name="twelve" id="radio3" value="Cost" >Cost

            </lable></div>
        <div class="col-md-3"><lable>
                <input type="radio" name="twelve" id="radio4" value="Payment" >Payment

            </lable></div>  <br> <br><br></div>





        <div id="button_etap">
            <input type ="submit" class="btn btn-success"   id="button2" value="Отправить">
        </div>
</form>
</div>