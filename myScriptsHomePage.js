<!--Получение текущего времени. Начало -->
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    t = setTimeout(function() {
        startTime()
    }, 500);
}
startTime();
<!--Получение текущего времени. Конец -->

<!--Получение текущей даты. Начало -->
Data = new Date();
Year = Data.getFullYear();
Month = Data.getMonth();
Day = Data.getDate();

// Преобразуем месяца
switch (Month)
{
    case 0: fMonth="января"; break;
    case 1: fMonth="февраля"; break;
    case 2: fMonth="марта"; break;
    case 3: fMonth="апреля"; break;
    case 4: fMonth="мае"; break;
    case 5: fMonth="июня"; break;
    case 6: fMonth="июля"; break;
    case 7: fMonth="августа"; break;
    case 8: fMonth="сентября"; break;
    case 9: fMonth="октября"; break;
    case 10: fMonth="ноября"; break;
    case 11: fMonth="декабря"; break;
}

// Вывод
document.getElementById('date').innerHTML = (Day+" "+fMonth+" "+Year);
<!--Получение текущей даты. Конец -->


<!--Исправление оформления значения температуры, полученной от стороннего API. Начало -->
$(document).ready(function(){
    $("#\\31 d96936aca5de9b7017747afda3c27c6 > a").css({"color": "#fff", "line-height":"26px"});
    $("#\\31 d96936aca5de9b7017747afda3c27c6 > a").css('line-height', '26px');
    $("#\\31 d96936aca5de9b7017747afda3c27c6 > a > div.weatherInformer22-temp").css({"font-size":"24px", "top":"0px"});
});
<!--Исправление оформления значения температуры, полученной от стороннего API. Конец -->
