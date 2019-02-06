var cont = document.getElementById('testtest');
var left = 0;
var but = document.getElementById('button_lesson1_1');
var but2 = document.getElementById('button_lesson1_2');
var but3 = document.getElementById('button_lesson1_3');
var but4 = document.getElementById('button_lesson1_4');
var but5 = document.getElementById('button_lesson1_5');
var but6 = document.getElementById('button_lesson1_6');
var but7 = document.getElementById('button_lesson1_7');
var but8 = document.getElementById('button_lesson1_8');
var but9 = document.getElementById('button_lesson1_9');
var but10 = document.getElementById('button_lesson1_10');
var but11 = document.getElementById('button_lesson1_11');
var but12 = document.getElementById('button_lesson1_12');

var num1 = document.getElementById('num2_1');

var num2_1 = document.getElementById('num3_1');
var num2_2 = document.getElementById('num3_2');

var num3_1 = document.getElementById('num4_1');
var num3_2 = document.getElementById('num4_2');
var num3_3 = document.getElementById('num4_3');

var num4_1 = document.getElementById('num5_1');
var num4_2 = document.getElementById('num5_2');
var num4_3 = document.getElementById('num5_3');
var num4_4 = document.getElementById('num5_4');

var num5_1 = document.getElementById('num6_1');
var num5_2 = document.getElementById('num6_2');
var num5_3 = document.getElementById('num6_3');
var num5_4 = document.getElementById('num6_4');
var num5_5 = document.getElementById('num6_5');


var num6_1 = document.getElementById('num7_1');
var num6_2 = document.getElementById('num7_2');
var num6_3 = document.getElementById('num7_3');
var num6_4 = document.getElementById('num7_4');
var num6_5 = document.getElementById('num7_5');
var num6_6 = document.getElementById('num7_6');

var num7_1 = document.getElementById('num8_1');
var num7_2 = document.getElementById('num8_2');
var num7_3 = document.getElementById('num8_3');
var num7_4 = document.getElementById('num8_4');
var num7_5 = document.getElementById('num8_5');
var num7_6 = document.getElementById('num8_6');
var num7_7 = document.getElementById('num8_7');

var num8_1 = document.getElementById('num9_1');
var num8_2 = document.getElementById('num9_2');
var num8_3 = document.getElementById('num9_3');
var num8_4 = document.getElementById('num9_4');
var num8_5 = document.getElementById('num9_5');
var num8_6 = document.getElementById('num9_6');
var num8_7 = document.getElementById('num9_7');
var num8_8 = document.getElementById('num9_8');


var num9_1 = document.getElementById('num10_1');
var num9_2 = document.getElementById('num10_2');
var num9_3 = document.getElementById('num10_3');
var num9_4 = document.getElementById('num10_4');
var num9_5 = document.getElementById('num10_5');
var num9_6 = document.getElementById('num10_6');
var num9_7 = document.getElementById('num10_7');
var num9_8 = document.getElementById('num10_8');
var num9_9 = document.getElementById('num10_9');




var num10_1 = document.getElementById('num11_1');
var num10_2 = document.getElementById('num11_2');
var num10_3 = document.getElementById('num11_3');
var num10_4 = document.getElementById('num11_4');
var num10_5 = document.getElementById('num11_5');
var num10_6 = document.getElementById('num11_6');
var num10_7 = document.getElementById('num11_7');
var num10_8 = document.getElementById('num11_8');
var num10_9 = document.getElementById('num11_9');
var num10_10 = document.getElementById('num11_10');

var color1;
var color2;
var color3;
var color4;
var color5;
var color6;
var color7;
var color8;
var color9;
var color10;


var erors =0 ;
var eror = document.getElementById('errors');



but.onclick = function gar() {
    var rez =  document.getElementById('testsok').value;
    var newRez = rez.toUpperCase();
    if(newRez == 'ПУСТОЙ'){
        left = left - 100;
        cont.style.left = left + '%';
        color1 = 'green';
        num1.style.background = color1;

    }else{
        left = left - 100;
        cont.style.left = left + '%';
        color1 = 'red';
        erors = erors + 1;
        eror.innerHTML = erors;
        num1.style.background = color1;

    }

};

but2.onclick = function () {
    var rez1 =  document.getElementById('testsok2').value;
    var newRez1 = rez1.toUpperCase();
    if(newRez1 == 'OLD'){
        left = left - 100;
        cont.style.left = left + '%';
        color2 = 'green';
        num2_1.style.background = color1;
        num2_2.style.background = color2;

    }else{
        left = left - 100;
        cont.style.left = left + '%';
        color2 = 'red';
        num2_1.style.background = color1;
        num2_2.style.background = color2;
        erors = erors + 1;
        eror.innerHTML = erors;
    }

};
but3.onclick = function () {
    var rez2 =  document.getElementById('testsok3').value;
    var newRez2 = rez2.toUpperCase();
    if(newRez2 == 'NEW'){
        left = left - 100;
        cont.style.left = left + '%';
        color3 = 'green';
        num3_1.style.background = color1;
        num3_2.style.background = color2;
        num3_3.style.background = color3;

    }else{
        left = left - 100;
        cont.style.left = left + '%';
        color3 = 'red';
        num3_1.style.background = color1;
        num3_2.style.background = color2;
        num3_3.style.background = color3;
        erors = erors + 1;
        eror.innerHTML = erors;
    }

};
but4.onclick = function () {
    var rez3 =  document.getElementById('testsok4').value;
    var newRez3 = rez3.toUpperCase();
    if(newRez3 == 'ПОЛНЫЙ'){
        left = left - 100;
        cont.style.left = left + '%';
        color4 = 'green';
        num4_1.style.background = color1;
        num4_2.style.background = color2;
        num4_3.style.background = color3;
        num4_4.style.background = color4;

    }else{
        left = left - 100;
        cont.style.left = left + '%';
        color4 = 'red';
        num4_1.style.background = color1;
        num4_2.style.background = color2;
        num4_3.style.background = color3;
        num4_4.style.background = color4;
        erors = erors + 1;
        eror.innerHTML = erors;

    }

};
but5.onclick = function () {
    var rez4 = document.getElementById('testsok5').value;
    var newRez4 = rez4.toUpperCase();
    if (newRez4 == 'OLD') {
        left = left - 100;
        cont.style.left = left + '%';
        color5 = 'green';
        num5_1.style.background = color1;
        num5_2.style.background = color2;
        num5_3.style.background = color3;
        num5_4.style.background = color4;
        num5_5.style.background = color5;

    } else {
        left = left - 100;
        cont.style.left = left + '%';
        color5 = 'red';
        num5_1.style.background = color1;
        num5_2.style.background = color2;
        num5_3.style.background = color3;
        num5_4.style.background = color4;
        num5_5.style.background = color5;
        erors = erors + 1;
        eror.innerHTML = erors;
    }
};
but6.onclick = function () {
    var rez4 = document.getElementById('testsok6').value;
    var newRez4 = rez4.toUpperCase();
    if (newRez4 == 'HIGH') {
        left = left - 100;
        cont.style.left = left + '%';
        color6 = 'green';
        num6_1.style.background = color1;
        num6_2.style.background = color2;
        num6_3.style.background = color3;
        num6_4.style.background = color4;
        num6_5.style.background = color5;
        num6_6.style.background = color6;

    } else {
        left = left - 100;
        cont.style.left = left + '%';
        color6 = 'red';
        num6_1.style.background = color1;
        num6_2.style.background = color2;
        num6_3.style.background = color3;
        num6_4.style.background = color4;
        num6_5.style.background = color5;
        num6_6.style.background = color6;
        erors = erors + 1;
        eror.innerHTML = erors;
    }
};
but7.onclick = function () {
    var rez4 = document.getElementById('testsok7').value;
    var newRez4 = rez4.toUpperCase();
    if (newRez4 == 'FAST') {
        left = left - 100;
        cont.style.left = left + '%';
        color7 = 'green';
        num7_1.style.background = color1;
        num7_2.style.background = color2;
        num7_3.style.background = color3;
        num7_4.style.background = color4;
        num7_5.style.background = color5;
        num7_6.style.background = color6;
        num7_7.style.background = color7;

    } else {
        left = left - 100;
        cont.style.left = left + '%';
        color7 = 'red';
        num7_1.style.background = color1;
        num7_2.style.background = color2;
        num7_3.style.background = color3;
        num7_4.style.background = color4;
        num7_5.style.background = color5;
        num7_6.style.background = color6;
        num7_7.style.background = color7;
        erors = erors + 1;
        eror.innerHTML = erors;
    }
};

but8.onclick = function () {
    var rez4 = document.getElementById('testsok8').value;
    var newRez4 = rez4.toUpperCase();
    if (newRez4 == 'СТАРЫЙ') {
        left = left - 100;
        cont.style.left = left + '%';
        color8 = 'green';
        num8_1.style.background = color1;
        num8_2.style.background = color2;
        num8_3.style.background = color3;
        num8_4.style.background = color4;
        num8_5.style.background = color5;
        num8_6.style.background = color6;
        num8_7.style.background = color7;
        num8_8.style.background = color8;

    } else {
        left = left - 100;
        cont.style.left = left + '%';
        color8 = 'red';
        num8_1.style.background = color1;
        num8_2.style.background = color2;
        num8_3.style.background = color3;
        num8_4.style.background = color4;
        num8_5.style.background = color5;
        num8_6.style.background = color6;
        num8_7.style.background = color7;
        num8_8.style.background = color8;
        erors = erors + 1;
        eror.innerHTML = erors;
    }
};



but9.onclick = function () {
    var rez4 = document.getElementById('testsok9').value;
    var newRez4 = rez4.toUpperCase();
    if (newRez4 == 'EMPTY') {
        left = left - 100;
        cont.style.left = left + '%';
        color9 = 'green';
        num9_1.style.background = color1;
        num9_2.style.background = color2;
        num9_3.style.background = color3;
        num9_4.style.background = color4;
        num9_5.style.background = color5;
        num9_6.style.background = color6;
        num9_7.style.background = color7;
        num9_8.style.background = color8;
        num9_9.style.background = color9;

    } else {
        left = left - 100;
        cont.style.left = left + '%';
        color9 = 'red';
        num9_1.style.background = color1;
        num9_2.style.background = color2;
        num9_3.style.background = color3;
        num9_4.style.background = color4;
        num9_5.style.background = color5;
        num9_6.style.background = color6;
        num9_7.style.background = color7;
        num9_8.style.background = color8;
        num9_9.style.background = color9;
        erors = erors + 1;
        eror.innerHTML = erors;
    }
};



but10.onclick = function () {
    var rez4 = document.getElementById('testsok10').value;
    var newRez4 = rez4.toUpperCase();
    if (newRez4 == 'ВЫСОКИЙ') {
        left = left - 100;
        cont.style.left = left + '%';
        color10 = 'green';
        num10_1.style.background = color1;
        num10_2.style.background = color2;
        num10_3.style.background = color3;
        num10_4.style.background = color4;
        num10_5.style.background = color5;
        num10_6.style.background = color6;
        num10_7.style.background = color7;
        num10_8.style.background = color8;
        num10_9.style.background = color9;
        num10_10.style.background = color10;

    } else {
        left = left - 100;
        cont.style.left = left + '%';
        color10 = 'red';
        num10_1.style.background = color1;
        num10_2.style.background = color2;
        num10_3.style.background = color3;
        num10_4.style.background = color4;
        num10_5.style.background = color5;
        num10_6.style.background = color6;
        num10_7.style.background = color7;
        num10_8.style.background = color8;
        num10_9.style.background = color9;
        num10_10.style.background = color10;
        erors = erors + 1;
        eror.innerHTML = erors;
    }


    if (erors > 0) {
        but11.onclick = function one() {
            left = 0;
            cont.style.left = left + '%';
            num10_1.style.background = color1;
            num10_2.style.background = color2;
            num10_3.style.background = color3;
            num10_4.style.background = color4;
            num10_5.style.background = color5;
            num10_6.style.background = color6;
            num10_7.style.background = color7;
            num10_8.style.background = color8;
            num10_9.style.background = color9;
            num10_10.style.background = color10;
            location.reload();
        };
        but12.style.display = 'none';
    } else {
        but12.onclick = function two() {
            left = 0;
            cont.style.left = left + '%';
            num10_1.style.background = color1;
            num10_2.style.background = color2;
            num10_3.style.background = color3;
            num10_4.style.background = color4;
            num10_5.style.background = color5;
            num10_6.style.background = color6;
            num10_7.style.background = color7;
            num10_8.style.background = color8;
            num10_9.style.background = color9;
            num10_10.style.background = color10;
        };
        but11.style.display = 'none';
    }

    eror.innerHTML = erors;

};

$('#coo').bind('click',function () {

    document.cookie = 'error94=' + encodeURIComponent('94') + '; max-age=' + 3156000 + '; path =/';


});