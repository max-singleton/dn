<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Необходимые Мета-теги всегда на первом месте -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
        integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body class="page">

<style>
</style>


<div class='promo'>
	<!-- Включение слайдера -->
	<?php include 'slider.php'; ?>
    
    <div class="container ">
        <div class="row header">
            <div class="col-xl-3 col-lg-3 col-md-3 ">
                <div class="container logo">
                    <a href="/"><img class="logos" src="./img/Logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-9 col-md-9">
				<!-- Включение блока с контактной информацией -->
				<?php include 'top_contacts.php'; ?>
				
				<!-- Включение верхнего меню -->
				<?php include 'top_menu.php'; ?>  
            </div>
                <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mid-banner">
            <div class="col-xl-8 nazv-organ">Сайт организаций<br> ООО "Достояние" и ООО "Наследие".</div>
            <div class="col-xl-4">
			<!-- Включение блока c датой, временем и температурой -->
			<?php include 'date_time_temp.php'; ?>
            </div>
        </div>
    </div>
	
	<!-- Блок с двумя кнопками и последним объявлением -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 buttons">
                <a class="button-1" href="">Передать показания счетчиков</a>
                <a class="button-2" href="">Задать свой вопрос</a>
            </div>			
            <div class="col-xl-6 page-neizv ">
                <div class="block">
				<!-- Включение блока с последним объявленим -->
				<?php include 'advert.php'; ?>				
            </div>
        </div>
    </div><!-- Закрывается блок с двумя кнопками -->	
</div><!-- Закрывается блок промо со слайдером, блоком с датой/временем/температурой и последним объявлением -->

	<!-- Включения блока с кратким описанием о компании -->
	<?php include 'about.php'; ?>    
	
	<!-- Включение блока последних новостей --> 	
	<?php include 'news.php'; ?>
	
    <!-- Включение входа в личный кабинет -->
	<?php include 'login.php'; ?>   
	
    <!-- Включеник карты сайта -->
	<?php include 'map.php'; ?>
    
	<!-- Включение футера -->
    <?php include 'footer.php'; ?>
	
	<!-- Включение мобильного меню -->
	<?php include 'mobile_menu.php'; ?>	
    
    <!-- Скрипты. jQuery первый, затем Tether, затем Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
	
		<!-- Скрипты-велосипеды -->
	
	<!--Получение текущего времени-->
    <script>
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
    </script>
	
    <!--Получение текущей даты-->
    <script>
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
    </script>
	
    <!--Исправление оформления значения температуры, полученной от стороннего API -->
    <script>
        $(document).ready(function(){
            $("#\\31 d96936aca5de9b7017747afda3c27c6 > a").css({"color": "#fff", "line-height":"26px"});
            $("#\\31 d96936aca5de9b7017747afda3c27c6 > a").css('line-height', '26px');
            $("#\\31 d96936aca5de9b7017747afda3c27c6 > a > div.weatherInformer22-temp").css({"font-size":"24px", "top":"0px"});
        });
    </script>
	
</body>

</html>