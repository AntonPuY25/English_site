//  Вход на главной старнице
var hat = document.getElementById('hat');
var imgCat = document.getElementById('picLabel');
imgCat.onmouseenter = function (event) {
       hat.style.fontSize =  40 +'px';
       console.log(event);
};
imgCat.onmouseleave = function (event) {
    hat.style.fontSize =  20 +'px';
};

          /* Форма авторизации*/