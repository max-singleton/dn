<style>

    /*| Navigation submenu |*/
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

<ul id="ocomp">
    <li>
        <ul class="submenu">
            <li><a href="about-company.php">О КОМПАНИИ</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="services.php">Услуги</a></li>
            <li><a href="jobs.php">Вакансии</a></li>
            <li><a href="paidServices.php">Платные работы</a></li>
            <li><a href="docs.php">Документы</a></li>
        </ul>
    </li>
</ul>
