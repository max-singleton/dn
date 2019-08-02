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


            <style>

                /*| Navigation |*/

                nav{
                    /*background: #334;*/ /* Задаем основной фон меню */
                    padding: 0 3%; /* Задаем внутренние отступы */
                    z-index: 10000000000000000000000000000000000000000000000000;
                }

                ul {
                    list-style: none; /* Убираем маркер для элементов списка */
                }

                ul li {
                    display:inline-block;/*Выстраиваем пункты меню в ряд по горизонтали */
                }
                a{
                    color:#31708f;
                }
                #ocomp{
                    color:#ffffff;
                }
                ul li a {
                    display:block; /* Настраиваем оформление пунктов меню */
                    padding: 15px 20px;
                    font-family: Roboto;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 16px;
                    line-height: 19px;
                    text-color: #FFFFFF;
                    letter-spacing: 1px;
                    text-decoration: none;
                    /*text-transform: uppercase;*/
                    /*border-top: 1px solid #445;*/
                }
                ul > li > ul > li > a{
                    /*Выпадающее меню*/
                    align: center;
                    font-weight: bold;
                    clear: both;
                    border-radius: 50px;
                }
                ul li a:hover{
                    /*Цвет ссылки при наведении*/
                    color:#FFFFFF;
                    border-radius: 50px;
                }
                ul li:hover {
                    background: #4A76A8; /* Меняем фон пункта меню при наведении указателя мыши */
                    border-radius: 50px;
                }

                ul li ul {
                    /*display: none;*/ /* Прячем пункты выпадающего блока меню */
                    position:absolute;
                    z-index: 6;
                    /*background: #ccc;*/ /* Задаем фон выпадающего блока меню */
                    float: none;
                    padding-inline-start: 20px;
                }

                ul li:hover ul {
                    display:block; /* Отображаем подменю при наведении мыши */
                    Z-index:4;
                }

                ul li ul li {
                    display:block; /* Выстраиваем по вертикали пункты выпадающего меню */
                }

            </style>


                <ul id="ul" id="ocomp">
                    <li><a href="about-company.php">О КОМПАНИИ</a>
                        <ul class="submenu">
                            <li><a href="news.php">Новости</a></li>
                            <li><a href="services.php">Услуги</a></li>
                            <li><a href="jobs.php">Вакансии</a></li>
                            <li><a href="paidServices.php">Платные работы</a></li>
                            <li><a href="docs.php">Документы</a></li>
                        </ul>
                    </li>
                </ul>




        </div>
            <div class="col-md-8">
                <!--work_area. Начало -->

                <style>
                    h4{
                        text-align:center;
                    }
                </style>


                <div class="alert alert-info">
                    <h4>Изменение графика работы кассы, бухгалтерии и паспортного стола</h4>
                    <p>Доводим до Вашего сведения об изменении графика работы кассы, бухгалтерии и&nbsp;паспортного стола c мая 2019.<p>
                    <p>Время работы изменяется только по пятницам: с 8-00 до 19-00 на с 8-00 до 18-00, начиная с 17 мая 2019 года.</p>
                    <p>По субботам: с 8-00 до 13-00 без перерыва, начиная с 27 апреля по 28 сентября 2019 г.</p>
                </div>
                <hr>
                <div class="alert alert-info ">
                    <h4><u>К сведению собственников и нанимателей квартир.</u></h4>
                    <p>В целях практического налаживания работы кассы в более удобном для Потребителей месте, ООО "Наследие" организовало приём средств.</p>
                    <p><b>23 и 25 июля 2019 года.</b></p>
                    <p><b>Время работы: с 9.00 до 15.00.</b></p>
                    <p>Место обустроено в первом подъезде на первом этаже дома №16 по улице Пролетарской.</p>
                    <p>Доводим до сведения, что после завершения приёма средств будет подведён предварительный итог сбора по Вашему дому. Всем, кто не оплатил более двух месяцев (двух перидов), будет проведение ограничения или отключения коммунальных услуг.</p>
                    <p style="text-align:right">ООО "Наследие"</p>
                </div>

                <hr>

                <div class="alert alert-info">
                    <p>Доводим до вашего сведения, что по адресу пр.Тракторостроителей д.54/1 выходит срок поверки квартирных теплосчетчиков. На этом основании Вам необходимо провести поверку счетчиков
                    в организациях, имеющих аккредитацию по данному виду работ и представить копии свидетельств о поверке до 25 августа 2019 года.</p>
                </div>
                <hr>
                <div class="alert alert-info">
                    <p>Уважаемые пользователи, для входа на наш новый сайт достояние-наследие.рф, логин и пароль с сайта etker21.ru не подходит. Для удобного пользования возможностями сайта и личным кабинетом вам необходимо заново пройти регистрацию на сайте.
                    </p>
                </div>

                <!---

                 <br>
                <div class="alert alert-info col-md-8 offset-md-2">
                    <h5>Как оплачивать через Сбербанк Онлайн на компьютере</h5>
                    <ol>
                        <li>Зайти на сайт Сбербанк Онлайн online.sberbank.ru.</li>
                        <li>Найти пункт в меню "Переводы и платежи".</li>
                        <li>Далее найти пункт "ЖКХ и домашний телефон".</li>
                        <li>В поиске написать название необходимой организации (Достояние, Наследие, Эткер). Второй вариант: написать её ИНН или расчётный счет.</li>
                        <li>Нажать кнопку "Найти".</li>
                        <li>Если хотите оплатить квартплату, то выбрать расчетные счета в зависимости от организации по последним трём знакам расчетных счетов (313 - Достояние, 721 - Наследие, 952 - Эткер).</li>
                        <li>Если хотите оплатить капремонт, то вы должны знать хотя бы последнии 3 знака спец.счета вашего дома и соответственно его выбрать.</li>
                        <li>Вводим лицевой счет с пятью нулями в начале строки. Подтверждаем и оплачиваем.</li>
                    </ol>
                </div>
                <div class="alert alert-info col-md-8 offset-md-2">
                    <h5>Как оплачивать через Сбербанк Онлайн на телефоне</h5>
                    <ol>
                        <li>Зайти в приложение "Сбербанк".</li>
                        <li>
                        Выбрать "Платежи".</li>
                        <li>
                        Найти пункт "ЖКХ и домашний телефон".</li>
                        <li>
                        В поиске написать название необходимой организации (Достояние, Наследие, Эткер). </li>
                        <li>
                        Если хотите оплатить квартплату, то выбрать необходимую организацию, где указано "за коммунальные услуги".</li>
                        <li>
                        Если хотите оплатить капремонт, то выбрать необходимую организацию, где указано "капремонт и адрес ваше дома по которому Вы хотите оплатить капремонт".</li>
                        <li>
                        После того, как выбрали, вводим лицевой счёт с пятью нулями в начале строки. Подтверждаем и оплачиваем.</li>
                    </ol>
                </div>
                <div class="alert alert-info col-md-8 offset-md-2">
                    <h5>Как оплачивать через Сбербанк Онлайн на телефоне по штрихкоду</h5>
                    <ol>
                        <li>Зайти в приложение "Сбербанк".</li>
                        <li>
                        Выбрать "Платежи".</li>
                        <li>
                        Найти "Оплата по QR или штрихкоду".</li>
                        <li>
                        Подтверждаем и оплачиваем.</li>
                    </ol>
                    <p>
                         Комиссия по оплате капремонта не взимается. Процент комиссии по оплате за услуги ЖКХ в зависимости от способа оплаты разная и узнать о размере можно у работников Сбербанка.
                    </p>
                 <br>
                </div>
                 <br>

                -->

                <!--work_area. Конец -->
            </div>
<!--        <div class="col-xl-2 ">
        </div>-->
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