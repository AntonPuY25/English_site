<link href ="../Style/style.css" rel="stylesheet" type ="text/css"/>
<script type="text/javascript" src="../Style/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<div id="allconteinerTest">


<?php
require_once('../conect.php');

$h=date("s");

function test ()

{
    Global $h;
    if( $h >= 0 && $h < 5   )  {
        echo " <form role =\"form1\" method='POST'  action=\"../results/result1.php\">
    <div class=\"test-level1\">


        <div class=\"test_1\">
            <h3>Уровень 1</h3>
            <span class=\"name-test1\">
  Elephant
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio1\" value=\"Слон\" >Слон

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio2\" value=\"Носорог\" >Носорог

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio3\" value=\"Ленивец\" >Ленивец

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio4\" value=\"Морж\" >Морж

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Pink
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio1\" value=\"Свинья\" >Свинья

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio2\" value=\"Красный\" >Красный

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio3\" value=\"Розовый\" >Розовый

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio4\" value=\"Жёлтый\" >Жёлтый

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Thanks
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio1\" value=\"Пожалуйста\" >Пожалуйста

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio2\" value=\"Спасибо\" >Спасибо

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio3\" value=\"Довольный\" >Довольный

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio4\" value=\"Радостный\" >Радостный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Bye
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio1\" value=\"Остановка\" >Остановка

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio2\" value=\"Пока\" >Пока

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio3\" value=\"Крик\" >Крик

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio4\" value=\"Лечь\" >Лечь

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Mother </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio1\" value=\"Мама\" >Мама
            </lable>

            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio2\" value=\"Папа\" >Папа
            </lable>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio3\" value=\"Бабушка\" >Бабушка
            </lable>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio4\" value=\"Подушка\" >Подушка
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Прыгать\"</span><br>
            <lable  class=\"pole\" >
            <input type=\"text \" name=\"six\" autocomplete=\"off\"  id=\"radio1\"    >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Бегать\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"hidden \" name=\"seven\" autocomplete=\"off\"  id=\"radio1\"    >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
            <audio controls>

                <source src=\"../audio/test/bad.mp3\">
            </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"text \" name=\"eight\"   autocomplete=\"off\"  id=\"radio1\"    >
        </lable>
    </div>
<br><br><br>
        <div class=\"test-level2\">


            <div class=\"test_1\">
                <h3>Уровень 2</h3>
                <span class=\"name-test1\">
  House
</span>
                <br>
                <lable>
                    <input type=\"radio\" name=\"nine\" id=\"radio1\" value=\"Квартира\" >Квартира

                </lable>
                <lable>
                    <input type=\"radio\" name=\"nine\" id=\"radio2\" value=\"Стройка\" >Стройка

                </lable>
                <lable>
                    <input type=\"radio\" name=\"nine\" id=\"radio3\" value=\"Комната\" >Комната

                </lable>
                <lable>
                    <input type=\"radio\" name=\"nine\" id=\"radio4\" value=\"Дом\" >Дом

                </lable>

            </div>
            <br>
            <div class=\"test_1\">
<span class=\"name-test1\">
     Pasta
</span>
                <br>
                <lable>
                    <input type=\"radio\" name=\"ten\" id=\"radio1\" value=\"Паста\" >Паста

                </lable>
                <lable>
                    <input type=\"radio\" name=\"ten\" id=\"radio2\" value=\"Макароны\" >Макароны

                </lable>
                <lable>
                    <input type=\"radio\" name=\"ten\" id=\"radio3\" value=\"Порошок\" >Порошок

                </lable>
                <lable>
                    <input type=\"radio\" name=\"ten\" id=\"radio4\" value=\"Песок\" >Песок

                </lable>

            </div>
            <br>
            <div class=\"test_1\">
<span class=\"name-test1\">
     Snow
</span>
                <br>
                <lable>
                    <input type=\"radio\" name=\"eleven\" id=\"radio1\" value=\"Шоу\" >Шоу

                </lable>
                <lable>
                    <input type=\"radio\" name=\"eleven\" id=\"radio2\" value=\"Снег\" >Снег

                </lable>
                <lable>
                    <input type=\"radio\" name=\"eleven\" id=\"radio3\" value=\"Зима\" >Зима

                </lable>
                <lable>
                    <input type=\"radio\" name=\"eleven\" id=\"radio4\" value=\"Смех\" >Смех

                </lable>

            </div>
            <br>
            <div class=\"test_1\">
<span class=\"name-test1\">
     Grandfather
</span>
                <br>
                <lable>
                    <input type=\"radio\" name=\"twelve\" id=\"radio1\" value=\"Дядя\" >Дядя

                </lable>
                <lable>
                    <input type=\"radio\" name=\"twelve\" id=\"radio2\" value=\"Тётя\" >Тётя

                </lable>
                <lable>
                    <input type=\"radio\" name=\"twelve\" id=\"radio3\" value=\"Племянник\" >Племянник

                </lable>
                <lable>
                    <input type=\"radio\" name=\"twelve\" id=\"radio4\" value=\"Дедушка\" >Дедушка

                </lable>

            </div>
            <br>
            <div class=\"test_1\">
                <span class=\"name-test1\">  Almost </span>
                <br>
                <lable>
                    <input type=\"radio\" name=\"thirteen\" id=\"radio1\" value=\"Почти\" >Почти
                </lable>

                <lable>
                    <input type=\"radio\" name=\"thirteen\" id=\"radio2\" value=\"Предел\" >Предел
                </lable>
                <lable>
                    <input type=\"radio\" name=\"thirteen\" id=\"radio3\" value=\"Рядом\" >Рядом
                </lable>
                <lable>
                    <input type=\"radio\" name=\"thirteen\" id=\"radio4\" value=\"Аккуратно\" >Аккуратно
                </lable>
                <br><br>
            </div>
            <div class=\"test_1\">

                <span class=\"name-test\">  Напишите перевод слова: \"Остров\"</span><br>
                <lable  class=\"pole\" >
                    <input type=\"name\" name=\"fourteen\"  autocomplete=\"off\"  id=\"radio1\"  >
                </lable>
            </div>
            <br><br>
            <div class=\"test_1\">

                <span class=\"name-test\">  Напишите перевод слова: \"Сайт\"</span><br>
                <lable  class=\"pole\" >
                    <input type=\"name\" name=\"fiveteen\"  autocomplete=\"off\"  id=\"radio1\"    >
                </lable>
            </div>
            <br>

            <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
            <audio controls>

                <source src=\"../audio/test/country.mp3\">
            </audio><br><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"sixteen\"   autocomplete=\"off\" id=\"radio1\"    >
            </lable>
            <br><br>
        </div><br>

    <div class=\"test-level3\">


        <div class=\"test_1\">
            <h3>Уровень 3</h3>
            <span class=\"name-test1\">
     Knife
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio1\" value=\"Сигарета\" >Сигарета

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio2\" value=\"Нож\" >Нож

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio3\" value=\"Царь\" >Царь

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio4\" value=\"Лев\" >Лев

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Marriage
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio1\" value=\"Собственность\" >Собственность

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio2\" value=\"Свобода\" >Свобода

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio3\" value=\"Брак\" >Брак

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio4\" value=\"Укус\" >Укус

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Property
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio1\" value=\"Защитник\" >Защитник

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio2\" value=\"Свет\" >Свет

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio3\" value=\"Забор\" >Забор

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio4\" value=\"Собственность\" >Собственность

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Local
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio1\" value=\"Связь\" >Связь

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio2\" value=\"Местный\" >Местный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio3\" value=\"Разрыв\" >Разрыв

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio4\" value=\"Крыша\" >Крыша

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Avenue </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio1\" value=\"Проспект\" >Проспект
            </lable>

            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio2\" value=\"Площадь\" >Площадь
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio3\" value=\"Храм\" >Храм
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio4\" value=\"Восторг\" >Восторг
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Тюрьма\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twentytwo\"  autocomplete=\"off\"  id=\"radio1\"   >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Бритва\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twentythree\"   autocomplete=\"off\" id=\"radio1\"    >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/palace.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"twentyfour\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>


    <div class=\"test-level4\">


        <div class=\"test_1\">
            <h3>Уровень 4</h3>
            <span class=\"name-test1\">
    Valley
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio1\" value=\"Хлопок\" >Хлопок

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio2\" value=\"Долина\" >Долина

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio3\" value=\"Обрыв\" >Обрыв

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio4\" value=\"Ветер\" >Ветер

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Bed sheet
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio1\" value=\"Скатерть\" >Скатерть

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio2\" value=\"Простыня\" >Простыня

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio3\" value=\"Пол\" >Пол

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio4\" value=\"Подушка\" >Подушка

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Chain
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio1\" value=\"Чай\" >Чай

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio2\" value=\"Собственность\" >Собственность

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio3\" value=\"Цепочка\" >Цепочка

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio4\" value=\"Вздор\" >Вздор

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Departure
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio1\" value=\"Отъезд\" >Отъезд

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio2\" value=\"Упаковка\" >Упаковка

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio3\" value=\"Хлам\" >Хлам

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio4\" value=\"Лень\" >Лень

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Scissors </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio1\" value=\"Скатерть\" >Скатерть
            </lable>

            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio2\" value=\"Знакомство\" >Знакомство
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio3\" value=\"Острый\" >Острый
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio4\" value=\"Ножницы\" >Ножницы
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Угол\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirty\"  autocomplete=\"off\"  id=\"radio1\"   >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Расчёска\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtyone\"  autocomplete=\"off\"  id=\"radio1\"    >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/example.mp3\">
        </audio><br><br>
        <lable   class=\"pole\">
            <input type=\"name\" name=\"thirtytwo\"  autocomplete=\"off\"  id=\"radio1\"    >
        </lable>
        <br><br>
        <br><br></div>
    <br>

    <div class=\"test-level5\">


        <div class=\"test_1\">
            <h3>Уровень 5</h3>
            <span class=\"name-test1\">
  Approximately
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio1\" value=\"Случай\" >Случай

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio2\" value=\"Приблизительно\" >Приблизительно

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio3\" value=\"Проходимость\" >Проходимость

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio4\" value=\"Повторение\" >Повторение

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Completely
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio1\" value=\"Совершенно\" >Совершенно

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio2\" value=\"Закончено\" >Закончено

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio3\" value=\"Разногласие\" >Разногласие

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio4\" value=\"Суровость\" >Суровость

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Explanation
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio1\" value=\"Молчаливый\" >Молчаливый

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio2\" value=\"Милостливый\" >Милостливый

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio3\" value=\"Радость\" >Радость

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio4\" value=\"Объяснения\" >Объяснения

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Performed
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio1\" value=\"Бугалтер\" >Бугалтер

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio2\" value=\"Выступить\" >Выступить

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio3\" value=\"Достижение\" >Достижение

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio4\" value=\"Превосходство\" >Превосходство

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Ordinary </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio1\" value=\"Постепенно\" >Постепенно
            </lable>

            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio2\" value=\"Ненависть\" >Ненависть
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio3\" value=\"Обычный\" >Обычный
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio4\" value=\"Награда\" >Награда
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Уязвимый\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtyeight\"  autocomplete=\"off\"  id=\"radio1\"   >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Тщеславие\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtynine\"  autocomplete=\"off\"  id=\"radio1\"    >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/catching.mp3\">
        </audio><br><br>
        <lable class=\"pole\">
            <input type=\"name\" name=\"Forty\"  autocomplete=\"off\"  id=\"radio1\"    >
        </lable>
        <br><br>
        <br><br>
        

    </div>
<div id=\"button\">
            <input type =\"submit\" class=\"btn btn-success\"   id=\"button2\" value=\"Отправить\">
        </div>




</form>";
    } elseif ($h >= 5 && $h < 10 or $h >= 50 && $h < 55 ) {
        echo "<form role =\"form2\" method='POST'  action=\"../results/result2.php\">
    <div class=\"test-level1\">


        <div class=\"test_1\">
            <h3>Уровень 1</h3>
            <span class=\"name-test1\">
  Swim
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"Fortyone\" id=\"radio1\" value=\"Лежать\" >Лежать

            </lable>
            <lable>
                <input type=\"radio\" name=\"Fortyone\" id=\"radio2\" value=\"Плавать\" >Плавать

            </lable>
            <lable>
                <input type=\"radio\" name=\"Fortyone\" id=\"radio3\" value=\"Бежать\" >Бежать

            </lable>
            <lable>
                <input type=\"radio\" name=\"Fortyone\" id=\"radio4\" value=\"Стоять\" >Стоять

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Bed
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"Fortytwo\" id=\"radio1\" value=\"Стул\" >Стул

            </lable>
            <lable>
                <input type=\"radio\" name=\"Fortytwo\" id=\"radio2\" value=\"Кровать\" >Кровать

            </lable>
            <lable>
                <input type=\"radio\" name=\"Fortytwo\" id=\"radio3\" value=\"Дверь\" >Дверь

            </lable>
            <lable>
                <input type=\"radio\" name=\"Fortytwo\" id=\"radio4\" value=\"Стол\" >Стол

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Cheese
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fortythree\" id=\"radio1\" value=\"Салат\" >Салат

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortythree\" id=\"radio2\" value=\"Спасибо\" >Спасибо

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortythree\" id=\"radio3\" value=\"Сыр\" >Сыр

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortythree\" id=\"radio4\" value=\"Соль\" >Соль

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Year
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fortyfour\" id=\"radio1\" value=\"Год\" >Год

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortyfour\" id=\"radio2\" value=\"День\" >День

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortyfour\" id=\"radio3\" value=\"Неделя\" >Неделя

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortyfour\" id=\"radio4\" value=\"Месяц\" >Месяц

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  House </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fortyfive\" id=\"radio1\" value=\"Комната\" >Комната
            </lable>

            <lable>
                <input type=\"radio\" name=\"fortyfive\" id=\"radio2\" value=\"Двор\" >Двор
            </lable>
            <lable>
                <input type=\"radio\" name=\"fortyfive\" id=\"radio3\" value=\"Дом\" >Дом
            </lable>
            <lable>
                <input type=\"radio\" name=\"fortyfive\" id=\"radio4\" value=\"Район\" >Район
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Отец\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"fortysix\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Семь\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"Fortyseven\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/example.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"fortyeight\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
    </div>
    <br><br><br>
    <div class=\"test-level2\">


        <div class=\"test_1\">
            <h3>Уровень 2</h3>
            <span class=\"name-test1\">
  Bottle
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fortynine\" id=\"radio1\" value=\"Бумага\" >Бумага

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortynine\" id=\"radio2\" value=\"Посуда\" >Посуда

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortynine\" id=\"radio3\" value=\"Чашка\" >Чашка

            </lable>
            <lable>
                <input type=\"radio\" name=\"fortynine\" id=\"radio4\" value=\"Бутылка\" >Бутылка

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Sofa
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fifty\" id=\"radio1\" value=\"Люстра\" >Люстра

            </lable>
            <lable>
                <input type=\"radio\" name=\"fifty\" id=\"radio2\" value=\"Кровать\" >Кровать

            </lable>
            <lable>
                <input type=\"radio\" name=\"fifty\" id=\"radio3\" value=\"Кресло\" >Кресло

            </lable>
            <lable>
                <input type=\"radio\" name=\"fifty\" id=\"radio4\" value=\"Диван\" >Диван

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Sponge
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fiftyone\" id=\"radio1\" value=\"Горох\" >Горох

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyone\" id=\"radio2\" value=\"Снег\" >Снег

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyone\" id=\"radio3\" value=\"Губка\" >Губка

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyone\" id=\"radio4\" value=\"Смех\" >Смех

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Bicycle
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fiftytwo\" id=\"radio1\" value=\"Мотоцикл\" >Мотоцикл

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftytwo\" id=\"radio2\" value=\"Самокат\" >Самокат

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftytwo\" id=\"radio3\" value=\"Ролики\" >Ролики

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftytwo\" id=\"radio4\" value=\"Велосипед\" >Велосипед

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Level </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fiftythree\" id=\"radio1\" value=\"Возраст\" >Возраст
            </lable>

            <lable>
                <input type=\"radio\" name=\"fiftythree\" id=\"radio2\" value=\"Уровень\" >Уровень
            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftythree\" id=\"radio3\" value=\"Рядом\" >Рядом
            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftythree\" id=\"radio4\" value=\"Расстояние\" >Расстояние
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Поезд\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"fiftyfour\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Мост\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"fiftyfive\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/cry.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"fiftysix\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
    </div><br>

    <div class=\"test-level3\">


        <div class=\"test_1\">
            <h3>Уровень 3</h3>
            <span class=\"name-test1\">
     Novel
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fiftyseven\" id=\"radio1\" value=\"Роман\" >Роман

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyseven\" id=\"radio2\" value=\"Нож\" >Нож

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyseven\" id=\"radio3\" value=\"Страница\" >Страница

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyseven\" id=\"radio4\" value=\"Новый\" >Новый

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Glass
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fiftyeight\" id=\"radio1\" value=\"Гром\" >Гром

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyeight\" id=\"radio2\" value=\"Свобода\" >Свобода

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyeight\" id=\"radio3\" value=\"Посуда\" >Посуда

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftyeight\" id=\"radio4\" value=\"Стакан\" >Стакан

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Screen
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"fiftynine\" id=\"radio1\" value=\"Зеркало\" >Зеркало

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftynine\" id=\"radio2\" value=\"Экран\" >Экран

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftynine\" id=\"radio3\" value=\"Треск\" >Треск

            </lable>
            <lable>
                <input type=\"radio\" name=\"fiftynine\" id=\"radio4\" value=\"Собственность\" >Собственность

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Letter
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"sixty\" id=\"radio1\" value=\"Связь\" >Связь

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixty\" id=\"radio2\" value=\"Поздно\" >Поздно

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixty\" id=\"radio3\" value=\"Письмо\" >Письмо

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixty\" id=\"radio4\" value=\"Звонок\" >Звонок

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Scissors </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"sixtyone\" id=\"radio1\" value=\"Ножницы\" >Ножницы
            </lable>

            <lable>
                <input type=\"radio\" name=\"sixtyone\" id=\"radio2\" value=\"Лезвие\" >Лезвие
            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyone\" id=\"radio3\" value=\"Бритва\" >Бритва
            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyone\" id=\"radio4\" value=\"Расчёска\" >Расчёска
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Будущее\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"sixtytwo\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Кастрюля\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"sixtythree\"  autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/bell.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"sixtyfour\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>


    <div class=\"test-level4\">


        <div class=\"test_1\">
            <h3>Уровень 4</h3>
            <span class=\"name-test1\">
    Majority
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"sixtyfive\" id=\"radio1\" value=\"Большинство\" >Большинство

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyfive\" id=\"radio2\" value=\"Меньшество\" >Меньшество

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyfive\" id=\"radio3\" value=\"Колличество\" >Колличество

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyfive\" id=\"radio4\" value=\"Численность\" >Численность

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Description
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"sixtysix\" id=\"radio1\" value=\"Уважение\" >Уважение

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtysix\" id=\"radio2\" value=\"Важность\" >Важность

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtysix\" id=\"radio3\" value=\"Описание\" >Описание

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtysix\" id=\"radio4\" value=\"Мыслить\" >Мыслить

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Equipment
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"sixtyseven\" id=\"radio1\" value=\"Руководить\" >Руководить

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyseven\" id=\"radio2\" value=\"Собственность\" >Собственность

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyseven\" id=\"radio3\" value=\"Оборудование\" >Оборудование

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyseven\" id=\"radio4\" value=\"Суровый\" >Суровый

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Import
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"sixtyeight\" id=\"radio1\" value=\"Имитация\" >Имитация

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyeight\" id=\"radio2\" value=\"Упаковка\" >Упаковка

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyeight\" id=\"radio3\" value=\"Мусор\" >Мусор

            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtyeight\" id=\"radio4\" value=\"Импортировать\" >Импортировать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Require </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"sixtynine\" id=\"radio1\" value=\"Требовать\" >Требовать
            </lable>

            <lable>
                <input type=\"radio\" name=\"sixtynine\" id=\"radio2\" value=\"Великий\" >Великий
            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtynine\" id=\"radio3\" value=\"Хитрить\" >Хитрить
            </lable>
            <lable>
                <input type=\"radio\" name=\"sixtynine\" id=\"radio4\" value=\"Восторг\" >Восторг
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Достаточно\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"seventy\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Устал\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"seventyone\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/trust.mp3\">
        </audio><br><br>
        <lable   class=\"pole\">
            <input type=\"name\" name=\"seventytwo\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>

    <div class=\"test-level5\">


        <div class=\"test_1\">
            <h3>Уровень 5</h3>
            <span class=\"name-test1\">
  Rid
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventythree\" id=\"radio1\" value=\"Зависть\" >Зависть

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventythree\" id=\"radio2\" value=\"Мастер\" >Мастер

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventythree\" id=\"radio3\" value=\"Редкий\" >Редкий

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventythree\" id=\"radio4\" value=\"Освобождать\" >Освобождать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Apprehend
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventyfour\" id=\"radio1\" value=\"Забота\" >Забота

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventyfour\" id=\"radio2\" value=\"Лукавить\" >Лукавить

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventyfour\" id=\"radio3\" value=\"Знакомство\" >Знакомство

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventyfour\" id=\"radio4\" value=\"Предчувствовать\" >Предчувствовать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Definitely
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventyfive\" id=\"radio1\" value=\"Достаточно\" >Достаточно

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventyfive\" id=\"radio2\" value=\"Определенно\" >Определенно

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventyfive\" id=\"radio3\" value=\"Решимость\" >Решимость

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventyfive\" id=\"radio4\" value=\"Робкость\" >Робкость

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Interfere
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventysix\" id=\"radio1\" value=\"Угрожать\" >Угрожать

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventysix\" id=\"radio2\" value=\"Препятствовать\" >Препятствовать

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventysix\" id=\"radio3\" value=\"Смелость\" >Смелость

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventysix\" id=\"radio4\" value=\"Доказательство\" >Доказательство

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Weaken </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventyseven\" id=\"radio1\" value=\"Терпеть\" >Терпеть
            </lable>

            <lable>
                <input type=\"radio\" name=\"seventyseven\" id=\"radio2\" value=\"Жестокий\" >Жестокий
            <lable>
                <input type=\"radio\" name=\"seventyseven\" id=\"radio3\" value=\"Ослабевать\" >Ослабевать
            </lable>
            <lable>
                <input type=\"radio\" name=\"seventyseven\" id=\"radio4\" value=\"Ритмичность\" >Ритмичность
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Осуществимый\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"seventyeight\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Коренной\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"seventynine\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/introduce.mp3\">
        </audio><br><br>
        <lable class=\"pole\" >
            <input type=\"name\" name=\"eighty\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br>
       

    </div>

 <div id=\"button\">
            <input type =\"submit\" class=\"btn btn-success\"   id=\"button2\" value=\"Отправить\">
        </div>



</form>";
    } elseif ($h >= 10 && $h < 15 or $h >= 45 && $h < 50) {
        echo "<form role =\"form3\" method='POST'  action=\"../results/result3.php\">
    <div class=\"test-level1\">


        <div class=\"test_1\">
            <h3>Уровень 1</h3>
            <span class=\"name-test1\">
Friend
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightyone\" id=\"radio1\" value=\"Друг\" >Друг

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyone\" id=\"radio2\" value=\"Брат\" >Брат

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyone\" id=\"radio3\" value=\"Враг\" >Враг

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyone\" id=\"radio4\" value=\"Племянник\" >Племянник

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Teacher
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightytwo\" id=\"radio1\" value=\"Учитель\" >Учитель

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightytwo\" id=\"radio2\" value=\"Родственник\" >Родственник

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightytwo\" id=\"radio3\" value=\"Начальник\" >Начальник

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightytwo\" id=\"radio4\" value=\"Хозяин\" >Хозяин

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Cry
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightythree\" id=\"radio1\" value=\"Злость\" >Злость

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightythree\" id=\"radio2\" value=\"Слеза\" >Слеза

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightythree\" id=\"radio3\" value=\"Смех\" >Смех

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightythree\" id=\"radio4\" value=\"Плакать\" >Плакать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Child
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightyfour\" id=\"radio1\" value=\"Рост\" >Рост

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyfour\" id=\"radio2\" value=\"Чили\" >Чили

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyfour\" id=\"radio3\" value=\"Ребёнок\" >Ребёнок

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyfour\" id=\"radio4\" value=\"Сын\" >Сын

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Open </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightyfive\" id=\"radio1\" value=\"Восемь\" >Восемь
            </lable>

            <lable>
                <input type=\"radio\" name=\"eightyfive\" id=\"radio2\" value=\"Закрыто\" >Закрыто
            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyfive\" id=\"radio3\" value=\"Окно\" >Окно
            </lable>
            <lable>
                <input type=\"radio\" name=\"eightyfive\" id=\"radio4\" value=\"Открыто\" >Открыто
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Школа\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"eghtysix\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Птица\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"eightyseven\"  autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/stop.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"eightyeight\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
    </div>
    <br><br><br>
    <div class=\"test-level2\">


        <div class=\"test_1\">
            <h3>Уровень 2</h3>
            <span class=\"name-test1\">
Pasta
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightynine\" id=\"radio1\" value=\"Паста\" >Паста

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightynine\" id=\"radio2\" value=\"Макароны\" >Макароны

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightynine\" id=\"radio3\" value=\"Плоский\" >Плоский

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightynine\" id=\"radio4\" value=\"Кухня\" >Кухня

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Soap
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ninety\" id=\"radio1\" value=\"Мыло\" >Мыло

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninety\" id=\"radio2\" value=\"Суп\" >Суп

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninety\" id=\"radio3\" value=\"Cоль\" >Cоль

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninety\" id=\"radio4\" value=\"Миска\" >Миска

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Cup
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ninetyone\" id=\"radio1\" value=\"Кружка\" >Кружка

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyone\" id=\"radio2\" value=\"Кубок\" >Кубок

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyone\" id=\"radio3\" value=\"Гвоздь\" >Гвоздь

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyone\" id=\"radio4\" value=\"Посуда\" >Посуда

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Juice
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ninetytwo\" id=\"radio1\" value=\"Чай\" >Чай

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetytwo\" id=\"radio2\" value=\"Молоко\" >Молоко

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetytwo\" id=\"radio3\" value=\"Вода\" >Вода

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetytwo\" id=\"radio4\" value=\"Сок\" >Сок

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Strawberry </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ninetythree\" id=\"radio1\" value=\"Черника\" >Черника
            </lable>

            <lable>
                <input type=\"radio\" name=\"ninetythree\" id=\"radio2\" value=\"Фрукты\" >Фрукты
            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetythree\" id=\"radio3\" value=\"Клубника\" >Клубника
            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetythree\" id=\"radio4\" value=\"Персик\" >Персик
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Сильный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"ninetyfour\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Вопрос\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"ninetyfive\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/teacher.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"ninetysix\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
    </div><br>

    <div class=\"test-level3\">


        <div class=\"test_1\">
            <h3>Уровень 3</h3>
            <span class=\"name-test1\">
Subway
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ninetyseven\" id=\"radio1\" value=\"Ролики\" >Ролики

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyseven\" id=\"radio2\" value=\"Метро\" >Метро

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyseven\" id=\"radio3\" value=\"Мост\" >Мост

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyseven\" id=\"radio4\" value=\"Поезд\" >Поезд

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Razor
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ninetyeight\" id=\"radio1\" value=\"Шум\" >Шум

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyeight\" id=\"radio2\" value=\"Свобода\" >Свобода

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyeight\" id=\"radio3\" value=\"Страх\" >Страх

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetyeight\" id=\"radio4\" value=\"Бритва\" >Бритва

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Youth
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ninetynine\" id=\"radio1\" value=\"Сарказм\" >Сарказм

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetynine\" id=\"radio2\" value=\"Собственность\" >Собственность

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetynine\" id=\"radio3\" value=\"Твой\" >Твой

            </lable>
            <lable>
                <input type=\"radio\" name=\"ninetynine\" id=\"radio4\" value=\"Молодость\" >Молодость

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Population
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"hundred\" id=\"radio1\" value=\"Знаменитый\" >Знаменитый

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundred\" id=\"radio2\" value=\"Население\" >Население

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundred\" id=\"radio3\" value=\"Свадьба\" >Свадьба

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundred\" id=\"radio4\" value=\"Район\" >Район

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Familiar </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"hundredone\" id=\"radio1\" value=\"Семья\" >Семья
            </lable>

            <lable>
                <input type=\"radio\" name=\"hundredone\" id=\"radio2\" value=\"Рядом\" >Рядом
            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredone\" id=\"radio3\" value=\"Знакомый\" >Знакомый
            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredone\" id=\"radio4\" value=\"Круглый\" >Круглый
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Жертва\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"hundredtwo\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Зеркало\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"hundredthree\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/cabinet.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"hundredfour\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>


    <div class=\"test-level4\">


        <div class=\"test_1\">
            <h3>Уровень 4</h3>
            <span class=\"name-test1\">
Hate
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"hundredfive\" id=\"radio1\" value=\"Ненавидеть\" >Ненавидеть

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredfive\" id=\"radio2\" value=\"Поощрение\" >Поощрение

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredfive\" id=\"radio3\" value=\"Встреча\" >Встреча

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredfive\" id=\"radio4\" value=\"Колличество\" >Колличество

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Spend
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"hundredsix\" id=\"radio1\" value=\"Проводить\" >Проводить

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredsix\" id=\"radio2\" value=\"Весна\" >Весна

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredsix\" id=\"radio3\" value=\"Следующий\" >Следующий

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredsix\" id=\"radio4\" value=\"Разлить\" >Разлить

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Almost
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"hundredseven\" id=\"radio1\" value=\"Высота\" >Высота

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredseven\" id=\"radio2\" value=\"Рядом\" >Рядом

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredseven\" id=\"radio3\" value=\"Жираф\" >Жираф

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredseven\" id=\"radio4\" value=\"Почти\" >Почти

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Jealous
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"hundredeight\" id=\"radio1\" value=\"Желать\" >Желать

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredeight\" id=\"radio2\" value=\"Ревнующий\" >Ревнующий

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredeight\" id=\"radio3\" value=\"Кидать\" >Кидать

            </lable>
            <lable>
                <input type=\"radio\" name=\"hundredeight\" id=\"radio4\" value=\"Избранное\" >Избранное

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Reliable </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"hundrednine\" id=\"radio1\" value=\"Надёжный\" >Надёжный
            </lable>

            <lable>
                <input type=\"radio\" name=\"hundrednine\" id=\"radio2\" value=\"Пыль\" >Пыль
            </lable>
            <lable>
                <input type=\"radio\" name=\"hundrednine\" id=\"radio3\" value=\"Спокойствие\" >Спокойствие
            </lable>
            <lable>
                <input type=\"radio\" name=\"hundrednine\" id=\"radio4\" value=\"Восторг\" >Восторг
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Съедобный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredeleven\"  autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Качественный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredtwelve\"  autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/condemn.mp3\">
        </audio><br><br>
        <lable   class=\"pole\">
            <input type=\"name\" name=\"onehundredthree\" autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>

    <div class=\"test-level5\">


        <div class=\"test_1\">
            <h3>Уровень 5</h3>
            <span class=\"name-test1\">
Superfluous
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfour\" id=\"radio1\" value=\"Способность\" >Способность

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfour\" id=\"radio2\" value=\"Завистливый\" >Завистливый

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfour\" id=\"radio3\" value=\"Робкий\" >Робкий

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfour\" id=\"radio4\" value=\"Излишний\" >Излишний

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Versatile
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfive\" id=\"radio1\" value=\"Разносторонний\" >Разносторонний

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfive\" id=\"radio2\" value=\"Дизайнер\" >Дизайнер

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfive\" id=\"radio3\" value=\"Понимание\" >Понимание

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfive\" id=\"radio4\" value=\"Предчувствовать\" >Предчувствовать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Сonfess
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredsix\" id=\"radio1\" value=\"Совещание\" >Совещание

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsix\" id=\"radio2\" value=\"Признаваться\" >Признаваться

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsix\" id=\"radio3\" value=\"Надзор\" >Надзор

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsix\" id=\"radio4\" value=\"Рвение\" >Рвение

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
Ponder
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredseven\" id=\"radio1\" value=\"Обдумывать\" >Обдумывать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseven\" id=\"radio2\" value=\"Разрисовывать\" >Разрисовывать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseven\" id=\"radio3\" value=\"Неуклюжий\" >Неуклюжий

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseven\" id=\"radio4\" value=\"Смелость\" >Смелость

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Despise </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredeight\" id=\"radio1\" value=\"Ускорить\" >Ускорить
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredeight\" id=\"radio2\" value=\"Усвоить\" >Усвоить
                <lable>
                    <input type=\"radio\" name=\"onehundredeight\" id=\"radio3\" value=\"Слабость\" >Слабость
                </lable>
                <lable>
                    <input type=\"radio\" name=\"onehundredeight\" id=\"radio4\" value=\"Презирать\" >Презирать
                </lable>
                <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Восклицать\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundrednine\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Пересматривать\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredtwenty\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/eternal.mp3\">
        </audio><br><br>
        <lable class=\"pole\" >
            <input type=\"name\" name=\"onehundredtwentyone\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br>
       

    </div>

 <div id=\"button\">
            <input type =\"submit\" class=\"btn btn-success\"   id=\"button2\" value=\"Отправить\">
        </div>



</form>";
    } elseif ($h >= 15 && $h < 20 or $h >= 40 && $h < 45) {
        echo "<form role =\"form4\" method='POST'  action=\"../results/result4.php\">
    <div class=\"test-level1\">


        <div class=\"test_1\">
            <h3>Уровень 1</h3>
            <span class=\"name-test1\">
  Five
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentytwo\" id=\"radio1\" value=\"Семь\" >Семь

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentytwo\" id=\"radio2\" value=\"Шесть\" >Шесть

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentytwo\" id=\"radio3\" value=\"Пять\" >Пять

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentytwo\" id=\"radio4\" value=\"Один\" >Один

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Teacher
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentythree\" id=\"radio1\" value=\"Директор\" >Директор

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentythree\" id=\"radio2\" value=\"Старший\" >Старший

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentythree\" id=\"radio3\" value=\"Учитель\" >Учитель

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentythree\" id=\"radio4\" value=\"Друг\" >Друг

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Say
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfour\" id=\"radio1\" value=\"Сказать\" >Сказать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfour\" id=\"radio2\" value=\"Спасибо\" >Спасибо

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfour\" id=\"radio3\" value=\"Диалог\" >Диалог

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfour\" id=\"radio4\" value=\"Слово\" >Слово

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Answer
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfive\" id=\"radio1\" value=\"Запрет\" >Запрет

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfive\" id=\"radio2\" value=\"Рассказ\" >Рассказ

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfive\" id=\"radio3\" value=\"Ответ\" >Ответ

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentyfive\" id=\"radio4\" value=\"Книга\" >Книга

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Apple </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentysix\" id=\"radio1\" value=\"Клубника\" >Клубника
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredtwentysix\" id=\"radio2\" value=\"Апельсин\" >Апельсин
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentysix\" id=\"radio3\" value=\"Виноград\" >Виноград
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredtwentysix\" id=\"radio4\" value=\"Яблоко\" >Яблоко
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Дождь\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredtwentyseven\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Лето\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredtwentyeight\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/class.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"onehundredtwentynine\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
    </div>
    <br><br><br>
    <div class=\"test-level2\">


        <div class=\"test_1\">
            <h3>Уровень 2</h3>
            <span class=\"name-test1\">
  Soup
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyone\" id=\"radio1\" value=\"Соль\" >Соль

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyone\" id=\"radio2\" value=\"Ложка\" >Ложка

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyone\" id=\"radio3\" value=\"Суп\" >Суп

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyone\" id=\"radio4\" value=\"Еда\" >Еда

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Turtle
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtytwo\" id=\"radio1\" value=\"Змея\" >Змея

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtytwo\" id=\"radio2\" value=\"Черепаха\" >Черепаха

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtytwo\" id=\"radio3\" value=\"Мышь\" >Мышь

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtytwo\" id=\"radio4\" value=\"Ящерица\" >Ящерица

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Basket
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtythree\" id=\"radio1\" value=\"Мячь\" >Мячь

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtythree\" id=\"radio2\" value=\"Корзина\" >Корзина

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtythree\" id=\"radio3\" value=\"Шар\" >Шар

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtythree\" id=\"radio4\" value=\"Боль\" >Боль

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Power
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfour\" id=\"radio1\" value=\"Скорость\" >Скорость

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfour\" id=\"radio2\" value=\"Летать\" >Летать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfour\" id=\"radio3\" value=\"Мощность\" >Мощность

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfour\" id=\"radio4\" value=\"Ширина\" >Ширина

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Take </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfive\" id=\"radio1\" value=\"Помочь\" >Помочь
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfive\" id=\"radio2\" value=\"Взять\" >Взять
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfive\" id=\"radio3\" value=\"Просьба\" >Просьба
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtyfive\" id=\"radio4\" value=\"Боль\" >Боль
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Конец\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredthirtysix\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Суббота\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredthirtyseven\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/grandmother.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"onehundredthirtyeight\"  autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
    </div><br>

    <div class=\"test-level3\">


        <div class=\"test_1\">
            <h3>Уровень 3</h3>
            <span class=\"name-test1\">
     Enemy
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtynine\" id=\"radio1\" value=\"Защитник\" >Защитник

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtynine\" id=\"radio2\" value=\"Хвастун\" >Хвастун

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtynine\" id=\"radio3\" value=\"Враг\" >Враг

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredthirtynine\" id=\"radio4\" value=\"Боец\" >Боец

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     One hundred
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyone\" id=\"radio1\" value=\"Тысяча\" >Тысяча

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyone\" id=\"radio2\" value=\"Сто\" >Сто

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyone\" id=\"radio3\" value=\"Миллион\" >Миллион

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyone\" id=\"radio4\" value=\"Десять\" >Десять

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Contains
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtytwo\" id=\"radio1\" value=\"Содержать\" >Содержать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtytwo\" id=\"radio2\" value=\"Сумка\" >Сумка

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtytwo\" id=\"radio3\" value=\"Карман\" >Карман

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtytwo\" id=\"radio4\" value=\"Угостить\" >Угостить

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Modern
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtythree\" id=\"radio1\" value=\"Современный\" >Современный

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtythree\" id=\"radio2\" value=\"Дорогой\" >Дорогой

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtythree\" id=\"radio3\" value=\"Модель\" >Модель

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtythree\" id=\"radio4\" value=\"Дружелюбный\" >Дружелюбный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Famous </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyfour\" id=\"radio1\" value=\"Перспективный\" >Перспективный
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredfourtyfour\" id=\"radio2\" value=\"Услуга\" >Услуга
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyfour\" id=\"radio3\" value=\"Известный\" >Известный
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyfour\" id=\"radio4\" value=\"Вкусный\" >Вкусный
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Грязный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredfourtyfive\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Страх\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredfourtysix\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/wife.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"onehundredfourtyseven\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>


    <div class=\"test-level4\">


        <div class=\"test_1\">
            <h3>Уровень 4</h3>
            <span class=\"name-test1\">
    Furious
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyeight\" id=\"radio1\" value=\"Яростный\" >Яростный

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyeight\" id=\"radio2\" value=\"Дикий\" >Дикий

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyeight\" id=\"radio3\" value=\"Нахал\" >Нахал

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtyeight\" id=\"radio4\" value=\"Зной\" >Зной

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Adapt
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtynine\" id=\"radio1\" value=\"Положительный\" >Положительный

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtynine\" id=\"radio2\" value=\"Захват\" >Захват

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtynine\" id=\"radio3\" value=\"Принятие\" >Принятие

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfourtynine\" id=\"radio4\" value=\"Приспосабливаться\" >Приспосабливаться

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Inhibit
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyone\" id=\"radio1\" value=\"Подавлять\" >Подавлять

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyone\" id=\"radio2\" value=\"Хитрить\" >Хитрить

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyone\" id=\"radio3\" value=\"Скользкий\" >Скользкий

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyone\" id=\"radio4\" value=\"Хандра\" >Хандра

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Weaken
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftytwo\" id=\"radio1\" value=\"Будить\" >Будить

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftytwo\" id=\"radio2\" value=\"Ослабевать\" >Ослабевать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftytwo\" id=\"radio3\" value=\"Сосед\" >Сосед

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftytwo\" id=\"radio4\" value=\"Болезнь\" >Болезнь

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Ordinary </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftythree\" id=\"radio1\" value=\"Награда\" >Награда
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredfiftythree\" id=\"radio2\" value=\"Совесть\" >Совесть
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftythree\" id=\"radio3\" value=\"Мрак\" >Мрак
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftythree\" id=\"radio4\" value=\"Обычный\" >Обычный
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Фиолетовый\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredfiftyfour\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Страшный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredfiftyfive\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

  <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
            <audio controls>

                <source src=\"../audio/test/country.mp3\">
            </audio><br><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredfiftysix\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
            <br><br>
        </div><br>

    <div class=\"test-level4\">


        <div class=\"test_1\">
            <h3>Уровень 5</h3>
            <span class=\"name-test1\">
  Pretend
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyseven\" id=\"radio1\" value=\"Случайный\" >Случайный

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyseven\" id=\"radio2\" value=\"Соучастник\" >Соучастник

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyseven\" id=\"radio3\" value=\"Притворяться\" >Притворяться

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyseven\" id=\"radio4\" value=\"Агрессивный\" >Агрессивный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Adhere
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyeight\" id=\"radio1\" value=\"Прилипать\" >Прилипать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyeight\" id=\"radio2\" value=\"Посторонний\" >Посторонний

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyeight\" id=\"radio3\" value=\"Разногласие\" >Разногласие

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftyeight\" id=\"radio4\" value=\"Редкость\" >Редкость

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Revolve
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftynine\" id=\"radio1\" value=\"Вращаться\" >Вращаться

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftynine\" id=\"radio2\" value=\"Рассматривать\" >Рассматривать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftynine\" id=\"radio3\" value=\"Просьба\" >Просьба

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredfiftynine\" id=\"radio4\" value=\"Жалоба\" >Жалоба

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Confession
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyone\" id=\"radio1\" value=\"Регламент\" >Регламент

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyone\" id=\"radio2\" value=\"Поступок\" >Поступок

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyone\" id=\"radio3\" value=\"Консультация\" >Консультация

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyone\" id=\"radio4\" value=\"Признание\" >Признание

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Fragile </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtytwo\" id=\"radio1\" value=\"Успешный\" >Успешный
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredsixtytwo\" id=\"radio2\" value=\"Хрупкий\" >Хрупкий
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtytwo\" id=\"radio3\" value=\"Благополучный\" >Благополучный
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtytwo\" id=\"radio4\" value=\"Обыденный\" >Обыденный
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Сдерживать\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredsixtythree\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Доверчивый\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredsixtyfour\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/attractive.mp3\">
        </audio><br><br>
        <lable class=\"pole\" >
            <input type=\"name\" name=\"onehundredsixtyfive\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br>
        

    </div>
<div id=\"button\">
            <input type =\"submit\" class=\"btn btn-success\"   id=\"button2\" value=\"Отправить\">
        </div>




</form>";
    } elseif ($h >= 20 && $h < 25 or $h >= 35 && $h < 40) {
        echo "<form role =\"form5\" method='POST'  action=\"../results/result5.php\">
    <div class=\"test-level1\">


        <div class=\"test_1\">
            <h3>Уровень 1</h3>
            <span class=\"name-test1\">
  Dog
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtysix\" id=\"radio1\" value=\"Кот\" >Кот

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtysix\" id=\"radio2\" value=\"Собака\" >Собака

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtysix\" id=\"radio3\" value=\"Слон\" >Слон

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtysix\" id=\"radio4\" value=\"Свинья\" >Свинья

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Mouse
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyseven\" id=\"radio1\" value=\"Моль\" >Моль

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyseven\" id=\"radio2\" value=\"Птица\" >Птица

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyseven\" id=\"radio3\" value=\"Свинья\" >Свинья

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyseven\" id=\"radio4\" value=\"Мышь\" >Мышь

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Water
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyeight\" id=\"radio1\" value=\"Фильтр\" >Фильтр

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyeight\" id=\"radio2\" value=\"Речка\" >Речка

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyeight\" id=\"radio3\" value=\"Вода\" >Вода

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtyeight\" id=\"radio4\" value=\"Озеро\" >Озеро

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Milk
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtynine\" id=\"radio1\" value=\"Молоко\" >Молоко

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtynine\" id=\"radio2\" value=\"Мокрый\" >Мокрый

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtynine\" id=\"radio3\" value=\"Кефир\" >Кефир

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredsixtynine\" id=\"radio4\" value=\"Сметана\" >Сметана

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Left </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyone\" id=\"radio1\" value=\"Лево\" >Лево
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredseventyone\" id=\"radio2\" value=\"Право\" >Право
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyone\" id=\"radio3\" value=\"Сторона\" >Сторона
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyone\" id=\"radio4\" value=\"Под\" >Под
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Футбол\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredseventytwo\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Рука\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredseventythree\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/Read.MP3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"onehundredseventyfour\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
    </div>
    <br><br><br>
    <div class=\"test-level2\">


        <div class=\"test_1\">
            <h3>Уровень 2</h3>
            <span class=\"name-test1\">
  Positive
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyfive\" id=\"radio1\" value=\"Смешной\" >Смешной

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyfive\" id=\"radio2\" value=\"Смех\" >Смех

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyfive\" id=\"radio3\" value=\"Достаточный\" >Достаточный

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyfive\" id=\"radio4\" value=\"Положительный\" >Положительный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Table
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredseventysix\" id=\"radio1\" value=\"Стул\" >Стул

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventysix\" id=\"radio2\" value=\"Стол\" >Стол

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventysix\" id=\"radio3\" value=\"Кресло\" >Кресло

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventysix\" id=\"radio4\" value=\"Диван\" >Диван

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Game
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyseven\" id=\"radio1\" value=\"Игра\" >Игра

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyseven\" id=\"radio2\" value=\"План\" >План

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyseven\" id=\"radio3\" value=\"Уровень\" >Уровень

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyseven\" id=\"radio4\" value=\"Слово\" >Слово

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     City
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyeight\" id=\"radio1\" value=\"Страна\" >Страна

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyeight\" id=\"radio2\" value=\"Площадь\" >Площадь

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyeight\" id=\"radio3\" value=\"Деревня\" >Деревня

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventyeight\" id=\"radio4\" value=\"Город\" >Город

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Officer </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredseventynine\" id=\"radio1\" value=\"Рабочий\" >Рабочий
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredseventynine\" id=\"radio2\" value=\"Офицер\" >Офицер
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventynine\" id=\"radio3\" value=\"Военный\" >Военный
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredseventynine\" id=\"radio4\" value=\"Моряк\" >Моряк
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Понедельник\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredeightyone\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Семья\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredeightytwo\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/red.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"onehundredeightythree\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
    </div><br>

    <div class=\"test-level3\">


        <div class=\"test_1\">
            <h3>Уровень 3</h3>
            <span class=\"name-test1\">
     Lawyer
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfour\" id=\"radio1\" value=\"Ливень\" >Ливень

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfour\" id=\"radio2\" value=\"Юрист\" >Юрист

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfour\" id=\"radio3\" value=\"Аукцион\" >Аукцион

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfour\" id=\"radio4\" value=\"Судья\" >Судья

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Future
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfive\" id=\"radio1\" value=\"Будущее\" >Будущее

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfive\" id=\"radio2\" value=\"Фокус\" >Фокус

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfive\" id=\"radio3\" value=\"Прошлое\" >Прошлое

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyfive\" id=\"radio4\" value=\"Сказка\" >Сказка

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Dirty
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredeightysix\" id=\"radio1\" value=\"Смех\" >Смех

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightysix\" id=\"radio2\" value=\"Дрифт\" >Дрифт

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightysix\" id=\"radio3\" value=\"Дорогой\" >Дорогой

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightysix\" id=\"radio4\" value=\"Грязный\" >Грязный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Different
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyseven\" id=\"radio1\" value=\"Другой\" >Другой

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyseven\" id=\"radio2\" value=\"Трудный\" >Трудный

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyseven\" id=\"radio3\" value=\"Дождливый\" >Дождливый

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyseven\" id=\"radio4\" value=\"Дружелюбный\" >Дружелюбный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Subject </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyeight\" id=\"radio1\" value=\"Станция\" >Станция
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundredeightyeight\" id=\"radio2\" value=\"Услуга\" >Услуга
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyeight\" id=\"radio3\" value=\"Предмет\" >Предмет
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundredeightyeight\" id=\"radio4\" value=\"Цель\" >Цель
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Столица\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundredeightynine\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Шум\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundrednintyone\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/adventure.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"onehundrednintytwo\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>


    <div class=\"test-level4\">


        <div class=\"test_1\">
          
<h3>Уровень 4</h3>
            <span class=\"name-test1\">
    Represent
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundrednintythree\" id=\"radio1\" value=\"Подарок\" >Подарок

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintythree\" id=\"radio2\" value=\"Презентация\" >Презентация

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintythree\" id=\"radio3\" value=\"Представлять\" >Представлять

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintythree\" id=\"radio4\" value=\"Документ\" >Документ

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Yawn
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfour\" id=\"radio1\" value=\"Олень\" >Олень

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfour\" id=\"radio2\" value=\"Захват\" >Захват

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfour\" id=\"radio3\" value=\"Зевать\" >Зевать

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfour\" id=\"radio4\" value=\"Случай\" >Случай

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Wild
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfive\" id=\"radio1\" value=\"Мир\" >Мир

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfive\" id=\"radio2\" value=\"Хитрость\" >Хитрость

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfive\" id=\"radio3\" value=\"Дикий\" >Дикий

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyfive\" id=\"radio4\" value=\"Охранять\" >Охранять

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Behavior
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundrednintysix\" id=\"radio1\" value=\"Поведение\" >Поведение

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintysix\" id=\"radio2\" value=\"Злой\" >Злой

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintysix\" id=\"radio3\" value=\"Взгляд\" >Взгляд

            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintysix\" id=\"radio4\" value=\"Болезнь\" >Болезнь

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Pull </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyseven\" id=\"radio1\" value=\"Награда\" >Награда
            </lable>

            <lable>
                <input type=\"radio\" name=\"onehundrednintyseven\" id=\"radio2\" value=\"Мяч\" >Мяч
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyseven\" id=\"radio3\" value=\"Тянуть\" >Тянуть
            </lable>
            <lable>
                <input type=\"radio\" name=\"onehundrednintyseven\" id=\"radio4\" value=\"Рвать\" >Рвать
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Встречать\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundrednintyeight\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Сырой\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"onehundrednintynine\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/record.mp3\">
        </audio><br><br>
        <lable   class=\"pole\">
            <input type=\"name\" name=\"twohundone\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>

    <div class=\"test-level5\">

        <div class=\"test_1\">
            <h3>Уровень 5</h3>
            <span class=\"name-test1\">
  Equipment
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twohundtwo\" id=\"radio1\" value=\"Набор\" >Набор

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundtwo\" id=\"radio2\" value=\"Соучастник\" >Соучастник

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundtwo\" id=\"radio3\" value=\"Оборудование\" >Оборудование

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundtwo\" id=\"radio4\" value=\"Персонал\" >Персонал

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Comma
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twohundthree\" id=\"radio1\" value=\"Запятая\" >Запятая

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundthree\" id=\"radio2\" value=\"Точка\" >Точка

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundthree\" id=\"radio3\" value=\"Дефис\" >Дефис

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundthree\" id=\"radio4\" value=\"Точка с запятой\" >Точка с запятой

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Markup
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twohundfour\" id=\"radio1\" value=\"Палитра\" >Палитра

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundfour\" id=\"radio2\" value=\"Разметка\" >Разметка

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundfour\" id=\"radio3\" value=\"Марка\" >Марка

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundfour\" id=\"radio4\" value=\"Рамка\" >Рамка

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Talkative
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twohundfive\" id=\"radio1\" value=\"Объяснение\" >Объяснение

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundfive\" id=\"radio2\" value=\"Рассказ\" >Рассказ

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundfive\" id=\"radio3\" value=\"Разговорчивый\" >Разговорчивый

            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundfive\" id=\"radio4\" value=\"Признание\" >Признание

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Boiling </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twohundsix\" id=\"radio1\" value=\"Кипение\" >Кипение
            </lable>

            <lable>
                <input type=\"radio\" name=\"twohundsix\" id=\"radio2\" value=\"Хрупкий\" >Хрупкий
            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundsix\" id=\"radio3\" value=\"Огромный\" >Огромный
            </lable>
            <lable>
                <input type=\"radio\" name=\"twohundsix\" id=\"radio4\" value=\"Растворимый\" >Растворимый
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Цензура\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twohundseven\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Разъярённый\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twohundeight\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/gloomy.mp3\">
        </audio><br><br>
        <lable class=\"pole\" >
            <input type=\"name\" name=\"twohundnine\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br>
      

    </div>
     <div id=\"button\">
            <input type =\"submit\" class=\"btn btn-success\"   id=\"button2\" value=\"Отправить\">
        </div>
</form>"
;
    }elseif ($h >= 25 && $h < 30 or $h >= 55 && $h <= 59 ){
        echo " <form role =\"form6\" method='POST'  action=\"../results/result6.php\">
    <div class=\"test-level1\">


        <div class=\"test_1\">
            <h3>Уровень 1</h3>
            <span class=\"name-test1\">
  Cat
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio1\" value=\"Кот\" >Кот

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio2\" value=\"Собака\" >Собака

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio3\" value=\"Слон\" >Слон

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio4\" value=\"Свинья\" >Свинья

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Night
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio1\" value=\"Вечер\" >Вечер

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio2\" value=\"Ночь\" >Ночь

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio3\" value=\"День\" >День

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio4\" value=\"Утро\" >Утро

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Fire
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio1\" value=\"Грязь\" >Грязь

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio2\" value=\"Огонь\" >Огонь

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio3\" value=\"Вода\" >Вода

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio4\" value=\"Песок\" >Песок

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Window
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio1\" value=\"Вид\" >Вид

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio2\" value=\"Стол\" >Стол

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio3\" value=\"Дверь\" >Дверь

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio4\" value=\"Окно\" >Окно

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Apple </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio1\" value=\"Яблоко\" >Яблоко
            </lable>

            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio2\" value=\"Апельсин\" >Апельсин
            </lable>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio3\" value=\"Арбуз\" >Арбуз
            </lable>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio4\" value=\"Мандарин\" >Мандарин
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Сын\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"six\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Прыгать\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"seven\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/fly.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"eight\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
    </div>
    <br><br><br>
    <div class=\"test-level2\">


        <div class=\"test_1\">
            <h3>Уровень 2</h3>
            <span class=\"name-test1\">
  Week
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio1\" value=\"Месяц\" >Месяц

            </lable>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio2\" value=\"Год\" >Год

            </lable>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio3\" value=\"Неделя\" >Неделя

            </lable>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio4\" value=\"День\" >День

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Work
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio1\" value=\"Завод\" >Завод

            </lable>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio2\" value=\"Работа\" >Работа

            </lable>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio3\" value=\"Рабочий\" >Рабочий

            </lable>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio4\" value=\"Сотрудник\" >Сотрудник

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Goal
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio1\" value=\"Игра\" >Игра

            </lable>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio2\" value=\"Цель\" >Цель

            </lable>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio3\" value=\"План\" >План

            </lable>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio4\" value=\"Голый\" >Голый

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Bread
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio1\" value=\"Хлеб\" >Хлеб

            </lable>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio2\" value=\"Батон\" >Батон

            </lable>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio3\" value=\"Мука\" >Мука

            </lable>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio4\" value=\"Булка\" >Булка

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Cook </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio1\" value=\"Время\" >Время
            </lable>

            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio2\" value=\"Кухня\" >Кухня
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio3\" value=\"Делать\" >Делать
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio4\" value=\"Готовить\" >Готовить
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Костюм\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"fourteen\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Дедушка\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"fiveteen\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/one.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"sixteen\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
    </div><br>

    <div class=\"test-level3\">


        <div class=\"test_1\">
            <h3>Уровень 3</h3>
            <span class=\"name-test1\">
     Past
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio1\" value=\"Стоп\" >Стоп

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio2\" value=\"Прошлое\" >Прошлое

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio3\" value=\"Спешить\" >Спешить

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio4\" value=\"Подождать\" >Подождать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Fill
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio1\" value=\"Заполнить\" >Заполнить

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio2\" value=\"Здоровье\" >Здоровье

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio3\" value=\"Фокус\" >Фокус

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio4\" value=\"Пять\" >Пять

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Quickly
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio1\" value=\"Крик\" >Крик

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio2\" value=\"Смех\" >Смех

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio3\" value=\"Быстрый\" >Быстрый

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio4\" value=\"Грязный\" >Грязный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Sheet
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio1\" value=\"Лист\" >Лист

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio2\" value=\"Гром\" >Гром

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio3\" value=\"Дьявол\" >Дьявол

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio4\" value=\"Стирка\" >Стирка

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Keep </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio1\" value=\"Подача\" >Подача
            </lable>

            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio2\" value=\"Хранить\" >Хранить
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio3\" value=\"Шапка\" >Шапка
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio4\" value=\"Цель\" >Цель
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Проблема\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twentytwo\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Надежда\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twentythree\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/train.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"twentyfour\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>


    <div class=\"test-level4\">


        <div class=\"test_1\">
            <h3>Уровень 4</h3>
            
         <span class=\"name-test1\">
    Expensive
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio1\" value=\"Современный\" >Современный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio2\" value=\"Дорогой\" >Дорогой

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio3\" value=\"Особенный\" >Особенный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio4\" value=\"Эксперт\" >Эксперт

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Conduct
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio1\" value=\"Станок\" >Станок

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio2\" value=\"Проверка\" >Проверка

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio3\" value=\"Поведение\" >Поведение

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio4\" value=\"Контроль\" >Контроль

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Evidence
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio1\" value=\"Привидение\" >Привидение

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio2\" value=\"Доказательства\" >Доказательства

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio3\" value=\"Сорт\" >Сорт

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio4\" value=\"Покой\" >Покой

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Especially
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio1\" value=\"Особенный\" >Особенный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio2\" value=\"Оборудование\" >Оборудование

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio3\" value=\"Личный\" >Личный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio4\" value=\"Обозначенный\" >Обозначенный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Construction </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio1\" value=\"Лего\" >Лего
            </lable>

            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio2\" value=\"Собрание\" >Собрание
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio3\" value=\"Строительство\" >Строительство
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio4\" value=\"Мощность\" >Мощность
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Связь\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirty\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Поколение\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtyone\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/convenient.mp3\">
        </audio><br><br>
        <lable   class=\"pole\">
            <input type=\"name\" name=\"thirtytwo\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>

    <div class=\"test-level5\">

        <div class=\"test_1\">
            <h3>Уровень 5</h3>
            <span class=\"name-test1\">
  Introduction
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio1\" value=\"Знакомство\" >Знакомство

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio2\" value=\"Представление\" >Представление

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio3\" value=\"Обозначение\" >Обозначение

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio4\" value=\"Введение\" >Введение

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Opportunity
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio1\" value=\"Особенность\" >Особенность

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio2\" value=\"Возможность\" >Возможность

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio3\" value=\"Препятствие\" >Препятствие

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio4\" value=\"Обозначенный\" >Обозначенный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Definitely
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio1\" value=\"Определенно\" >Определенно

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio2\" value=\"Сложный\" >Сложный

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio3\" value=\"Различный\" >Различный

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio4\" value=\"Посторонний\" >Посторонний

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Scarce
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio1\" value=\"Объяснение\" >Объяснение

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio2\" value=\"Очко\" >Очко

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio3\" value=\"Недостаточный\" >Недостаточный

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio4\" value=\"Признание\" >Признание

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Intestine </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio1\" value=\"Органы\" >Органы
            </lable>

            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio2\" value=\"Внутренний\" >Внутренний
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio3\" value=\"Желудок\" >Желудок
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio4\" value=\"Кишка\" >Кишка
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Опыт\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtyeight\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Восхитительный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtynine\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/slate.mp3\">
        </audio><br><br>
        <lable class=\"pole\" >
            <input type=\"name\" name=\"Forty\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br>
        

    </div>
    <div id=\"button\">
            <input type =\"submit\" class=\"btn btn-success\"   id=\"button2\" value=\"Отправить\">
        </div>
</form>";

    } else{
        echo "<form role =\"form7\" method='POST'  action=\"../results/result7.php\">
    <div class=\"test-level1\">


        <div class=\"test_1\">
            <h3>Уровень 1</h3>
            <span class=\"name-test1\">
  Big
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio1\" value=\"Толстый\" >Толстый

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio2\" value=\"Большой\" >Большой

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio3\" value=\"Маленький\" >Маленький

            </lable>
            <lable>
                <input type=\"radio\" name=\"one\" id=\"radio4\" value=\"Средний\" >Средний

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Morning
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio1\" value=\"Вечер\" >Вечер

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio2\" value=\"Ночь\" >Ночь

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio3\" value=\"День\" >День

            </lable>
            <lable>
                <input type=\"radio\" name=\"two\" id=\"radio4\" value=\"Утро\" >Утро

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Time
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio1\" value=\"Час\" >Час

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio2\" value=\"Минута\" >Минута

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio3\" value=\"День\" >День

            </lable>
            <lable>
                <input type=\"radio\" name=\"three\" id=\"radio4\" value=\"Время\" >Время

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Forest
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio1\" value=\"Дерево\" >Дерево

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio2\" value=\"Стол\" >Стол

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio3\" value=\"Лес\" >Лес

            </lable>
            <lable>
                <input type=\"radio\" name=\"four\" id=\"radio4\" value=\"Быстрый\" >Быстрый

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Boss </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio1\" value=\"Большой\" >Большой
            </lable>

            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio2\" value=\"Начальник\" >Начальник
            </lable>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio3\" value=\"Мощный\" >Мощный
            </lable>
            <lable>
                <input type=\"radio\" name=\"five\" id=\"radio4\" value=\"Фаворит\" >Фаворит
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Рука\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"six\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Дверь\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"seven\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/yellow.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"eight\"  autocomplete=\"off\"  id=\"radio1\"  >
        </lable>
    </div>
    <br><br><br>
    <div class=\"test-level2\">


        <div class=\"test_1\">
            <h3>Уровень 2</h3>
            <span class=\"name-test1\">
  Angry
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio1\" value=\"Сердитый\" >Сердитый

            </lable>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio2\" value=\"Страшный\" >Страшный

            </lable>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio3\" value=\"Милый\" >Милый

            </lable>
            <lable>
                <input type=\"radio\" name=\"nine\" id=\"radio4\" value=\"Грустный\" >Грустный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Travel
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio1\" value=\"Завод\" >Завод

            </lable>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio2\" value=\"Лодка\" >Лодка

            </lable>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio3\" value=\"Поезд\" >Поезд

            </lable>
            <lable>
                <input type=\"radio\" name=\"ten\" id=\"radio4\" value=\"Путешествовать\" >Путешествовать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Sky
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio1\" value=\"Крик\" >Крик

            </lable>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio2\" value=\"Птица\" >Птица

            </lable>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio3\" value=\"План\" >План

            </lable>
            <lable>
                <input type=\"radio\" name=\"eleven\" id=\"radio4\" value=\"Небо\" >Небо

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Shoes
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio1\" value=\"Сахар\" >Сахар

            </lable>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio2\" value=\"Штаны\" >Штаны

            </lable>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio3\" value=\"Обувь\" >Обувь

            </lable>
            <lable>
                <input type=\"radio\" name=\"twelve\" id=\"radio4\" value=\"Шорох\" >Шорох

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Dream </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio1\" value=\"Звонить\" >Звонить
            </lable>

            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio2\" value=\"Петь\" >Петь
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio3\" value=\"Сон\" >Сон
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirteen\" id=\"radio4\" value=\"Мечта\" >Мечта
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Жена\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"fourteen\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Деньги\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"fiveteen\"  autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/number.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"sixteen\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
    </div><br>

    <div class=\"test-level3\">


        <div class=\"test_1\">
            <h3>Уровень 3</h3>
            <span class=\"name-test1\">
     Boat
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio1\" value=\"Взрывчатка\" >Взрывчатка

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio2\" value=\"Лодка\" >Лодка

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio3\" value=\"Скутер\" >Скутер

            </lable>
            <lable>
                <input type=\"radio\" name=\"seventeen\" id=\"radio4\" value=\"Мост\" >Мост

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Nail
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio1\" value=\"Заполнить\" >Заполнить

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio2\" value=\"Колесо\" >Колесо

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio3\" value=\"Гвоздь\" >Гвоздь

            </lable>
            <lable>
                <input type=\"radio\" name=\"eightteen\" id=\"radio4\" value=\"Номер\" >Номер

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Set
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio1\" value=\"Крик\" >Крик

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio2\" value=\"Сайт\" >Сайт

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio3\" value=\"Период\" >Период

            </lable>
            <lable>
                <input type=\"radio\" name=\"nineteen\" id=\"radio4\" value=\"Устанавливать\" >Устанавливать

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Hair
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio1\" value=\"Голова\" >Голова

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio2\" value=\"Волосы\" >Волосы

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio3\" value=\"Глаза\" >Глаза

            </lable>
            <lable>
                <input type=\"radio\" name=\"twenty\" id=\"radio4\" value=\"Рот\" >Рот

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Weather </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio1\" value=\"Погода\" >Погода
            </lable>

            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio2\" value=\"Богатство\" >Богатство
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio3\" value=\"Следующий\" >Следующий
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyone\" id=\"radio4\" value=\"Скелет\" >Скелет
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Записка\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twentytwo\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Глава\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"twentythree\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/move.mp3\">
        </audio><br><br>
        <lable  class=\"pole\" >
            <input type=\"name\" name=\"twentyfour\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>


    <div class=\"test-level4\">


        <div class=\"test_1\">
            <h3>Уровень 4</h3>
        
         <span class=\"name-test1\">
    Necessary
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio1\" value=\"Запасной\" >Запасной

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio2\" value=\"Необходимо\" >Необходимо

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio3\" value=\"Особенный\" >Особенный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyfive\" id=\"radio4\" value=\"Знакомый\" >Знакомый

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Slowly
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio1\" value=\"Старый\" >Старый

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio2\" value=\"Сладкий\" >Сладкий

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio3\" value=\"Медленно\" >Медленно

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentysix\" id=\"radio4\" value=\"Сонный\" >Сонный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Familiar
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio1\" value=\"Знаменитый\" >Знаменитый

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio2\" value=\"Знакомый\" >Знакомый

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio3\" value=\"Случайный\" >Случайный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyseven\" id=\"radio4\" value=\"Семейный\" >Семейный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Afraid
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio1\" value=\"Самостоятельный\" >Самостоятельный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio2\" value=\"Испуганный\" >Испуганный

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio3\" value=\"Смелый\" >Смелый

            </lable>
            <lable>
                <input type=\"radio\" name=\"twentyeight\" id=\"radio4\" value=\"Лучший\" >Лучший

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Excellent </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio1\" value=\"Отлично\" >Отлично
            </lable>

            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio2\" value=\"Выполненно\" >Выполненно
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio3\" value=\"Получаться\" >Получаться
            </lable>
            <lable>
                <input type=\"radio\" name=\"twentynine\" id=\"radio4\" value=\"Значимый\" >Значимый
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Частный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirty\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Уставший\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtyone\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/expensive.mp3\">
        </audio><br><br>
        <lable   class=\"pole\">
            <input type=\"name\" name=\"thirtytwo\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br></div>
    <br>

    <div class=\"test-level5\">


        <div class=\"test_1\">
            <h3>Уровень 5</h3>
            <span class=\"name-test1\">
  Bilingual
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio1\" value=\"Двуязычный\" >Двуязычный

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio2\" value=\"Длинный\" >Длинный

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio3\" value=\"Достигший\" >Достигший

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtythree\" id=\"radio4\" value=\"Алиментарный\" >Алиментарный

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Transparent
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio1\" value=\"Прозрачный\" >Прозрачный

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio2\" value=\"Коммуникабельный\" >Коммуникабельный

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio3\" value=\"Сквозной\" >Сквозной

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfour\" id=\"radio4\" value=\"Механический\" >Механический

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Liquid
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio1\" value=\"Жидкость\" >Жидкость

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio2\" value=\"Железо\" >Железо

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio3\" value=\"Звук\" >Звук

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyfive\" id=\"radio4\" value=\"Материал\" >Материал

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
<span class=\"name-test1\">
     Austere
</span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio1\" value=\"Далёкий\" >Далёкий

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio2\" value=\"Робкий\" >Робкий

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio3\" value=\"Строгий\" >Строгий

            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtysix\" id=\"radio4\" value=\"Худощавый\" >Худощавый

            </lable>

        </div>
        <br>
        <div class=\"test_1\">
            <span class=\"name-test1\">  Sticky </span>
            <br>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio1\" value=\"Гибкий\" >Гибкий
            </lable>

            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio2\" value=\"Лишний\" >Лишний
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio3\" value=\"Липкий\" >Липкий
            </lable>
            <lable>
                <input type=\"radio\" name=\"thirtyseven\" id=\"radio4\" value=\"Бурный\" >Бурный
            </lable>
            <br><br>
        </div>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Обида\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtyeight\"  autocomplete=\"off\"  id=\"radio1\"  >
            </lable>
        </div>
        <br><br>
        <div class=\"test_1\">

            <span class=\"name-test\">  Напишите перевод слова: \"Бесчеловечный\"</span><br>
            <lable  class=\"pole\" >
                <input type=\"name\" name=\"thirtynine\"   autocomplete=\"off\" id=\"radio1\"  >
            </lable>
        </div>
        <br>

        <span class=\"name-test\">  Напишите  слово которое вы услышите  </span><br>
        <audio controls>

            <source src=\"../audio/test/independent.mp3\">
        </audio><br><br>
        <lable class=\"pole\" >
            <input type=\"name\" name=\"Forty\"   autocomplete=\"off\" id=\"radio1\"  >
        </lable>
        <br><br>
        <br><br>
       

    </div>
     <div id=\"button\">
            <input type =\"submit\" class=\"btn btn-success\"   id=\"button2\" value=\"Отправить\">
        </div>
</form>"
;

    }

}

echo test();







require_once('../conect.php');
?>

</div>
