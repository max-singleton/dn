<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './template/head.php'; ?>
</head>

<body class="page">

<div class='promo'>
    <div class="container" style="background:#4A76A8; max-width: 100%;">
        <!-- Включение header -->
        <?php include './template/header.php'; ?>
    </div>
</div>

	<!-- Контент. Начало -->
<div class="container bg-white">
    <div class="row o-company">
        <div class="col-xl-2 ">
        </div>
        <div class="col">
            <div class="col-md-8">
                <div class="alert alert-info" role="alert">
                    <center><h5><b>Реквизиты ООО "Достояние"</b></h5></center><br>
                    <b>428028, Чувашская Республика, г. Чебоксары</b><br>
                    <b>пр. Тракторостроителей, 69 Б</b><br>
                    <b>ИНН 2130205588</b><br>
                    <b>КПП 213001001</b><br>
                    <b>расчетный счет: 40702810300001061313 в АКБ "ЧувашКредитПромБанк" ПАО</b><br>
                    <b>БИК 049706725</b><br>
                    <b>ОГРН 1182130011436</b><br>
                    <b>Корреспондентский счет: 30101810200000000725</b><br>
                </div>
                <hr>
                <div class="alert alert-info" role="alert">
                    <center><h5><b>Реквизиты ООО "Наследие"</b></h5></center><br>
                    <b>428028, Чувашская Республика, г. Чебоксары</b><br>
                    <b>пр. Тракторостроителей, 69 Б</b><br>
                    <b>ИНН 2130124794</b><br>
                    <b>КПП 213001001</b><br>
                    <b>расчетный счет: 40702810800000060721 в АКБ "ЧувашКредитПромБанк" ПАО</b><br>
                    <b>БИК 049706725</b><br>
                    <b>ОГРН 1132130011551</b><br>
                    <b>Корреспондентский счет: 30101810200000000725</b><br>
                </div>
            </div>
        </div>

        <div class="col-xl-2 ">
        </div>
    </div>
</div>

    <!-- Контент. Конец -->
	
    <!-- Включение входа в личный кабинет -->
	<?php include './template/login.php'; ?>
    
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

</body>

</html>