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
        <!--        <div class="col-md-1 ">
                </div>-->
            <div class="col-md-12">
                <!--work_area. Начало -->

                <style>
                    .text-3 {
                        margin-top: 50px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 18px;
                        line-height: 16px;
                        color: rgba(0, 0, 0, 0.7);
                    }

                    .text-4 {
                        color: rgba(0, 0, 0, 1);
                        margin-top: 10px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: 700;
                        font-size: 18px;
                        line-height: 28px;
                    }

                    .bg-white {
                        background: #FFFFFF;
                    }

                    .btn-but-3 {
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: 300;
                        font-size: 18px;
                        line-height: 21px;
                        padding: 23px 59px;
                        text-align: center;
                        margin-bottom: 40px;
                        border-radius: 500px;
                        color: #000;
                        border: 1px solid #4A76A8;
                        box-sizing: border-box;
                    }

                    .lk {
                        margin-top: 100px;
                    }

                    .d1 {
                        width: 27px;
                        height: 27px;
                        background: #FFBD59;
                        border-radius: 50%;
                    }

                    .privyazka {
                        padding: 0px 30px;
                        margin-top: 50px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: 800;
                        font-size: 24px;
                        line-height: 28px;
                        color: rgba(0, 0, 0, 0.7);
                    }

                    .privyazka-2 {
                        font-size: 18px;
                    }

                    .div-1 {
                        position: relative;
                        overflow: hidden;
                        height: 301px;
                        background: #FFFFFF;
                        box-shadow: 0px 5px 26px rgba(0, 0, 0, 0.08);
                        padding: 48px 31px;
                        margin: 31px;
                    }

                    .text-div-1 {
                        padding-top: 50px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 24px;
                        line-height: 28px;
                        color: #000000;
                    }

                    .text-div-melkij {
                        position: absolute;
                        bottom: 30px;
                        padding-top: 50px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 14px;
                        line-height: 16px;
                        color: #000000;
                    }

                    .arrow.right {
                        transform: rotate(270deg) translate(0px, 25px);
                        -webkit-transform: rotate(270deg) translate(0px, 25px);
                        -moz-transform: rotate(270deg) translate(0px, 25px);
                        -o-transform: rotate(270deg) translate(0px, 25px);
                        -ms-transform: rotate(270deg) translate(0px, 25px);
                    }

                    .circle {
                        position: absolute;
                        width: 306px;
                        height: 306px;
                        top: -45%;
                        background: #EBF4FB;
                        -moz-border-radius: 50%;
                        -webkit-border-radius: 50%;
                        border-radius: 50%;
                        right: -103px;
                    }
                </style>

                    <div class="row o-company">
                        <div class="col-xl-3 ">
                            <div class="zagolovok">ЛИЧНЫЙ КАБИНЕТ</div>
                            <div class="text-3">Организация</div>
                            <div class="text-4">ООО "Достояние"</div>
                            <div class="text-3">ФИО</div>
                            <div class="text-4"><?php echo lcfirst("Константинов Константин Константинович"); ?></div>
                            <div class="text-3">Телефон</div>
                            <div class="text-4">8 (800) 555-35-35</div>
                            <div class="text-3">E-mail</div>
                            <div class="text-4">konstantin@mail.ru</div>
                            <div class="text-3">Логин на сайте</div>
                            <div class="text-4">Konstantin_konstantinov88</div>
                            <br>
                            <div class="btn-but-3"><a href="" style="color: rgba(0, 0, 0, 0.867782)">Изменить личные
                                    данные</a></div>
                            <div class="btn-but-1"><a href="" style="color: #fff">Изменить пароль</a></div>
                        </div>
                        <div class="col-xl-1">
                        </div>
                        <div class="col-xl-8">
                            <div class="block lk">
                                <div class="alert alert-info" role="alert"
                                     style="background: #EBF4FB; border-radius: 10px;">
                                    <div class="d1 col-xl-1">
                                        <center><img src="/img/d1.png" alt=""></center>
                                    </div>
                                    <div class="col-xl-11" style="color: rgba(0, 0, 0, 0.7);">ВНИМАНИЕ</div>
                                    <br>
                                    <div class="privyazka">Вам нужно привязать лицевой счет, чтобы пользоваться всеми
                                        возможностями личного кабинета</div>
                                    <div class="privyazka privyazka-2">Для этого пройдите по ссылке: <a href=""
                                                                                                      target="_blank">Привязать
                                            лицевой счет</a></div>
                                </div>
                                <br>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-5 div-1">
                                            <div class="circle"></div>
                                            <div class="col-xl"><img src="/img/tachometer.png" alt=""></div>
                                            <div class="col-xl text-div-1">Передать<br> показания счетчиков</div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col text-div-melkij">
                                                        <a href="#" class="page-a" style="padding: 0px;">Перейти к
                                                            услуге<img class="vector" src="./img/Vector-right.svg"
                                                                       alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 div-1">
                                            <div class="circle"></div>
                                            <div class="col-xl"><img src="/img/printer.png" alt=""></div>
                                            <div class="col-xl text-div-1">Печать квитанции</div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col text-div-melkij">
                                                        <a href="#" class="page-a" style="padding: 0px;">Перейти к
                                                            услуге<img class="vector" src="./img/Vector-right.svg"
                                                                       alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--work_area. Конец -->
            </div>
        <!--        <div class="col-md-1 ">
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