<style>

    /*| Navigation |*/

    nav{
        /*background: #334;*/ /* Задаем основной фон меню */
        padding: 0 3%; /* Задаем внутренние отступы */
    }

    nav ul {
        list-style: none; /* Убираем маркер для элементов списка */
    }

    nav ul li {
        display:inline-block;/*Выстраиваем пункты меню в ряд по горизонтали */
    }

    nav ul li a {
        display:block; /* Настраиваем оформление пунктов меню */
        padding: 15px 20px;
        font-family: Roboto;
        font-style: normal;
        font-weight: bold;
        font-size: 16px;
        line-height: 19px;
        color: #FFFFFF;
        letter-spacing: 1px;
        text-decoration: none;
        text-transform: uppercase;
        /*border-top: 1px solid #445;*/
    }
    nav ul li a:hover{
        /*Цвет ссылки при наведении*/
        color: red;
    }

    nav ul li:hover {
        background: #445; /* Меняем фон пункта меню при наведении указателя мыши */
    }

    nav ul li ul {
        display: none; /* Прячем пункты выпадающего блока меню */
        position:absolute;
        background: #334; /* Задаем фон выпадающего блока меню */
    }

    nav ul li:hover ul {
        display:block; /* Отображаем подменю при наведении мыши */
        Z-index:4;
    }

    nav ul li ul li {
        display:block; /* Выстраиваем по вертикали пункты выпадающего меню */
    }

</style>

<div class="container">
        <div class="row menu">
            <div class="col-xl-12 col-md-12 navig nav">
                <nav role="navigation">
                    <ul>
                        <li><a href="/">ГЛАВНАЯ</a></li>
                        <li><a href="about-company.php">О КОМПАНИИ</a>
                            <ul class="submenu">
                                <li><a href="news.php">НОВОСТИ</a></li>
                                <li><a href="services.php">УСЛУГИ</a></li>
                                <li><a href="jobs.php">ВАКАНСИИ</a></li>
                                <li><a href="paidServices.php">ПЛАТНЫЕ РАБОТЫ</a></li>
                                <li><a href="docs.php">ДОКУМЕНТЫ</a></li>
                            </ul>
                        </li>
                        <li><a href="contacts.php">КОНТАКТНАЯ ИНФОРМАЦИЯ</a>
                            <ul class="submenu">
                                <li><a href="contacts.php">ГРАФИК РАБОТЫ</a></li>
                                <li><a href="requisites.php">РЕКВИЗИТЫ</a></li>
                            </ul>
                        </li>
                        <li><a href="doma-v-obsluzgivanii.php">ДОМА В ОБСЛУЖИВАНИИ</a>
                            <ul class="submenu">
                                <li><a href="doma-dostoyanie.php">ООО "Достояние"</a></li>
                                <li><a href="doma-nasledie.php">ООО "Наследие"</a></li>
                            </ul>
                        </li>
                        <li><a href="ask.php">ЗАДАТЬ ВОПРОС?</a></li>
                    </ul>
                </nav>
            </div>
        </div>
</div>

<!-- Скрипт для красивого выпадания меню -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(".five li ul").hide();
        $(".five li:has('.submenu')").hover(
            function(){
                $(".five li ul").stop().fadeToggle(300);}
        );
    </script>