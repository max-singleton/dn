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
<div class="container bg-gray">
    <div class="row o-company">
        <div class="col-xl-5">
            <div class="zagolovok">О компаниях ООО «Достояние» и ООО «Наследие»</div><br>
            <div class="text-1">Наша главная цель - удовлетворение потребностей населения, проживающего на
                территории,обслуживаемой нашими компаниями</div>
        </div>
        <div class="col-xl-7">
            <p class="text-2">Целью деятельности организаций в настоящее время является удовлетворение потребностей населения, проживающего на территории, обслуживаемой ООО «Достояние» и ООО «Наследие», в оказании услуг по содержанию, обслуживанию, эксплуатации и ремонту жилого и нежилого фондов в г. Чебоксары, а также домового хозяйства и оборудования, предоставлении услуг по содержанию придомовых территорий и предоставлению коммунальных услуг в соответствии с установленными стандартами, параметрами, критериями, нормами и требованиями к их качеству и безопасности согласно положений Закона РФ «О защите прав потребителей», условиями заключенных хозяйственных договоров и отраслевыми нормами и тарифами на оказание услуг.</p>
            <p class="text-2">На предприятиях действуют ремонтно-строительный участок, круглосуточная аварийно-диспетчерская служба, два технических участка.</p>
            <p class="text-2">Для осуществления деятельности по управлению жилым фондом создан отдел по работе с потребителями ЖКУ, расчетно-контрольная группа, паспортный стол, открыты кассы по приему платежей за жилищные и коммунальные услуги. На предприятии создана постоянно действующая аттестационная комиссия, члены которой прошли проверку знаний по правилам технической эксплуатации в комиссиях Чувашской РГТИ, в учебном центре Минстроя Чувашии.
            </p>
            <p class="text-2">В своей деятельности ООО «Достояние» и ООО «Наследие» исходит из интересов потребителей, их требований к качеству работ, услуг и других условий хозяйственных взаимоотношений.</p>
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