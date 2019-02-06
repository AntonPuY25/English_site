var button1 = document.getElementById('Lessonbutton');
var button2 = document.getElementById('Lessonbutton2');

var cont = document.getElementById('testtest');
var left = 0;
button1.onclick = function () {

    if (left == -400){
        left = -400;
        cont.style.left = left + '%';
    }else {
        left = left - 100;
        cont.style.left = left + '%';
    }
};

button2.onclick = function () {

    if (left <=-100){
        left= left + 100;
        cont.style.left = left + '%';
    }else if(left <= -200) {
        left = left + 100;
        cont.style.left = left + '%';
    }else if(left <= -300) {
        left = left + 100;
        cont.style.left = left + '%';
    }else if(left <= -400) {
        left = left + 100;
        cont.style.left = left + '%';
    } else if (left = 0){
        left =0;

    }
};
