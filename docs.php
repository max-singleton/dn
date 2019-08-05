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

            <div class="col-md-8 col-sm-12 col-xs-12">
                <!--work_area. Начало -->

                <div class="">
                    <center><h3>
                            Тарифы на коммунальные услуги на 2019 год
                        </h3></center>
                </div>

                <style>
                    td, tr {
                        border: 2px solid #fff;
                        text-align: center;
                    }

                    .velosiped {
                        overflow-x: scroll;
                    }
                </style>

                <div class="velosiped">
                    <table class="table table-hover alert-info">
                        <thead class="table-info alert-primary">
                        <tr>
                            <th style="border: 2px solid #007099" scope="col">
                                #<br><br><br>
                            </th>
                            <th style="border: 2px solid #007099" scope="col">
                                Наименование услуг<br><br><br>
                            </th>
                            <th style="border: 2px solid #007099" scope="col">
                                Единица измерения<br><br>
                            </th>
                            <th style="border: 2px solid #007099" scope="col">
                                Размер платы, тариф на единицу услуг (руб. коп.) с 01.01.2019
                            </th>
                            <th style="border: 2px solid #007099" scope="col">
                                Размер платы, тариф на единицу услуг (руб. коп.) с 01.07.2019
                            </th>
                            <th style="border: 2px solid #007099" scope="col">
                                Нормативно-правовой документ<br><br>
                            </th>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <td>
                                <b>1</b>
                            </td>
                            <td>
                                Тепловая энергия, используемая на отопление
                            </td>
                            <td>
                                руб./Гкал
                            </td>
                            <td>
                                1548,77
                            </td>
                            <td>
                                1556,02
                            </td>
                            <td>
                                Постановление Государственной службы ЧР по конкурентной политике и тарифам от 14 декабря
                                2018 г. № 134-32/т.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>2</b>
                            </td>
                            <td>
                                Компонент на теплоноситель ГВС
                            </td>
                            <td>
                                руб./куб. м.
                            </td>
                            <td>
                                35,90
                            </td>
                            <td>
                                36,58
                            </td>
                            <td rowspan="2">
                                Постановление Государственной службы ЧР по конкурентной политике и тарифам от 14 декабря
                                2018 г. № 135-32/гв.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>3</b>
                            </td>
                            <td>
                                Компонент на тепловую энергию ГВС
                            </td>
                            <td>
                                руб./Гкал
                            </td>
                            <td>
                                1548,77
                            </td>
                            <td>
                                1556,02
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>4</b>
                            </td>
                            <td>
                                Холодное водоснабжение
                            </td>
                            <td>
                                руб./куб. м.
                            </td>
                            <td>
                                18,08
                            </td>
                            <td>
                                18,46
                            </td>
                            <td rowspan="2">
                                Постановление Государственной службы ЧР по конкурентной политике и тарифам от 06 декабря
                                2018 г. № 83-30/в.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>5</b>
                            </td>
                            <td>
                                Водоотведение
                            </td>
                            <td>
                                Руб./Гкал
                            </td>
                            <td>
                                20,98
                            </td>
                            <td>
                                21,37
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>6</b>
                            </td>
                            <td>
                                Электроэнергия в жилых домах, оборудованных газовыми плитами
                            </td>
                            <td>
                                Руб./кВт в час
                            </td>
                            <td>
                                3,30
                            </td>
                            <td>
                                3,36
                            </td>
                            <td rowspan="4">
                                Постановление Государственной службы ЧР по конкурентной политике и тарифам от12 декабря 2018
                                г. № 128-32/э
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>7</b>
                            </td>
                            <td>
                                Электроэнергия в жилых домах, оборудованных стационарными электро-плитами
                            </td>
                            <td>
                                Руб/кВт в час
                            </td>
                            <td>
                                2,31
                            </td>
                            <td>
                                2,35
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>8</b>
                            </td>
                            <td>
                                Тариф за электроэнергию в жилых домах, оборудованных газовыми плитами, дифференцированный по
                                зонам суток: дневная зона / ночная зона
                            </td>
                            <td>
                                Руб/кВт в час
                            </td>
                            <td>
                                3,80 / 2,15
                            </td>
                            <td>
                                3,86 / 2,19
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>9</b>
                            </td>
                            <td>
                                Тариф за электроэнергию в жилых домах, оборудованных стационарными электроплитами,
                                дифференцированный по зонам суток: дневная зона / ночная зона
                            </td>
                            <td>
                                руб./кВт в час
                            </td>
                            <td>
                                2,66 / 1,49
                            </td>
                            <td>
                                2,70 / 1,52
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <b>10</b>
                            </td>
                            <td>
                                Тариф по обращению с твёрдыми коммунальными отходами
                            </td>
                            <td>
                                руб./куб. м.
                            </td>
                            <td>
                                449,71
                            </td>
                            <td>
                                456,82
                            </td>
                            <td>
                                Постановление Государственной службы ЧР по конкурентной политике и тарифам от 06 декабря
                                2018 г. № 109-30/в.
                            </td>
                        </tr>

                        </tbody>
                    </table>
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