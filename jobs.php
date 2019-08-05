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
        <div class="col-md-4">

            <?php include 'about-company-submenu.php' ?>

        </div>
        <div class="col-md-8">
            <!--work_area. Начало -->

            <div class="alert alert-info col-md-12">
                <p>Маляры в количестве 2 человек. Зарплата от 17 000 рублей.</p>
                <hr>
                <p>Инженер производственно-технического отдела. Опыт в сфере ЖКХ (обслуживание МКД), знание программы
                    Smeta.RU. Должен знать технологию и способы ведения ремонтно-строительных работ, строительные нормы
                    и правила, сметные нормативные документы, порядок приемки работ, объектов и методы контроля их
                    качества. Заработная плата 20 000 рублей.</p>
                <hr>
                <p>Плотники-кровельщики в количестве 2 человек. Зарплата от 15 000 рублей.</p>
                <hr>
                <p>Слесари-сантехники. Зарплата от 15 000 рублей.</p>
            </div>
            <br>
            <div class="alert alert-danger col-md-12">
                <p>
                    По вопросам трудоустройства звонить по номеру <b>+7 (8352) 25-92-33</b>
                </p>
            </div>

            <!--work_area. Конец -->
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