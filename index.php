<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './template/head.php'; ?>
</head>

<body class="page">

<div class='promo'>
	<!-- Включение слайдера -->
	<?php include './template/slider.php'; ?>
    <!-- Включение header -->
    <?php include './template/header.php'; ?>

    <div class="container">
        <div class="row mid-banner">
            <div class="col-xl-8 col-md-8 nazv-organ">Сайт организаций<br> ООО "Достояние" и ООО "Наследие".</div>
            <div class="col-xl-4">
			<!-- Включение блока c датой, временем и температурой -->
			<?php include './template/date_time_temp.php'; ?>
            </div>
        </div>
    </div>
	
	<!-- Блок с двумя кнопками и последним объявлением -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 buttons">
                <a class="button-1" href="/pages/personal/index.php">Передать показания счетчиков</a>
                <a class="button-2" href="/pages/ask.php">Задать свой вопрос</a>
            </div>			
            <div class="col-xl-6 page-neizv ">
                <div class="block">
				<!-- Включение блока с последним объявленим -->
				<?php include './template/advert.php'; ?>
            </div>
        </div>
    </div><!-- Закрывается блок с двумя кнопками -->	
</div><!-- Закрывается блок промо со слайдером, блоком с датой/временем/температурой и последним объявлением -->

	<!-- Включения блока с кратким описанием о компании -->
	<?php include './template/about.php'; ?>
	
	<!-- Включение блока последних новостей --> 	
	<?php include './template/news.php'; ?>
	
    <!-- Включение входа в личный кабинет -->
	<?php include './template/login.php'; ?>
	
    <!-- Включеник карты сайта -->
	<?php include './template/map.php'; ?>
    
	<!-- Включение футера -->
    <?php include './template/footer.php'; ?>
	
	<!-- Включение мобильного меню -->
	<?php include './template/mobile_menu.php'; ?>
    
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
	
    <!-- Скрипты-велосипеды для главной страницы -->
    <script><?php echo file_get_contents('myScriptsHomePage.js'); ?></script

</body>

</html>