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
            <style>
                @import url('https://fonts.googleapis.com/css?family=Mukta:700');
                * {
                    box-sizing: border-box;
                }
                *::before, *::after {
                    box-sizing: border-box;
                }
                button {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    outline: none;
                    border: 0;
                    vertical-align: middle;
                    text-decoration: none;
                    background: transparent;
                    padding: 0;
                    font-size: inherit;
                    font-family: inherit;
                }
                button.learn-more {
                    width: 12rem;
                    height: auto;
                }
                button.learn-more .circle {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: relative;
                    margin: 0;
                    width: 3rem;
                    height: 3rem;
                    background: #4a76a8;
                    border-radius: 1.625rem;
                }
                button.learn-more .circle .icon {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    margin: auto;
                    background: #fff;
                }
                button.learn-more .circle .icon.arrow {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    left: 0.625rem;
                    width: 1.125rem;
                    height: 0.125rem;
                    background: none;
                }
                button.learn-more .circle .icon.arrow::before {
                    position: absolute;
                    content: '';
                    top: -0.25rem;
                    right: 0.0625rem;
                    width: 0.625rem;
                    height: 0.625rem;
                    border-top: 0.125rem solid #fff;
                    border-right: 0.125rem solid #fff;
                    transform: rotate(45deg);
                }
                button.learn-more .button-text {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    padding: 0.75rem 0;
                    margin: 0 0 0 1.85rem;
                    color: #4a76a8;
                    font-weight: 700;
                    line-height: 1.6;
                    text-align: center;
                    /*text-transform: uppercase;*/
                }
                button:hover .circle {
                    width: 100%;
                }
                button:hover .circle .icon.arrow {
                    background: #fff;
                    transform: translate(1rem, 0);
                }
                button:hover .button-text {
                    color: #fff;
                }
                @supports (display: grid) {
                    #container {
                        grid-area: main;
                        align-self: center;
                        justify-self: center;
                    }
                }

            </style>


            <div id="container">
                <span style="font-size:18px;font-weight:bold;">&#8226; Тарифы на коммунальные услуги на 2019 год &nbsp;</span>
                <button class="learn-more">
                    <div class="circle">
                        <span class="icon arrow"></span>
                    </div>

                    <a href="uplouds/tarif2019.doc" download><p class="button-text">Скачать</p></a>
                </button>
            </div>

            <!--Надо флексбокс применить потом-->
            <br><br><br><br><br><br><br><br><br><br><br>

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