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
        <div class="col-md-4 ">

            <?php include 'contacts-submenu.php'?>

        </div>

            <div class="container col-md-8">

                <style type="text/css">
                    .tabs { width: 100%; padding: 0px; margin: 0 auto; }
                    .tabs>input { display:none; }
                    .tabs>div {
                        display: none;
                        padding: 12px;
                        border: 1px solid #C0C0C0;
                        background: #FFFFFF;
                    }
                    .tabs>label {
                        display: inline-block;
                        padding: 7px;
                        margin: 0 -5px -1px 0;
                        text-align: center;
                        color: #666666;
                        border: 1px solid #C0C0C0;
                        background: #EBF4FB;
                        cursor: pointer;
                    }
                    .tabs>input:checked + label {
                        color: #000000;
                        border: 1px solid #C0C0C0;
                        border-bottom: 1px solid #FFFFFF;
                        background: #FFFFFF;
                    }
                    #tab_1:checked ~ #txt_1,
                    #tab_2:checked ~ #txt_2,
                    #tab_3:checked ~ #txt_3,
                    #tab_4:checked ~ #txt_4 { display: block; }
                </style>

                <div class="tabs">
                    <br>
                    <input type="radio" name="inset" value="" id="tab_1" checked="">
                    <input type="radio" name="inset" value="" id="tab_2">
                    <label for="tab_1">Страница 1</label>
                    <label for="tab_2">Страница 2</label>
                    <div id="txt_1" style="text-align: center;">
                        <div class="alert alert-info" role="alert"">
                            <b>Приемная<br>
                            </b><b>+7 (8352) 25-92-33</b><br>
                            Факс: <b>+7 (8352) 51-86-85</b><br>
                            Почта:&nbsp;<a href="mailto:etker@mail.ru">etker@mail.ru</a><br>
                            - понедельник - пятница&nbsp;с 8.00 до 17.00. Перерыв на обед&nbsp;с 12.00 до 13.00.<br>
                            - суббота, воскресенье выходные дни.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Аварийно-диспетчерская служба<br>
                            </b><b>+7 (8352) 53-22-66</b> (Круглосуточно)<br>
                            - понедельник с 17.00 до 8.00.<br>
                            - вторник, четверг с 17.00 до 10.00.<br>
                            - среда, пятница с 19.00 до 8.00.<br>
                            - суббота, воскресенье с 8.00 до 8.00.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Расчетная бухгалтерия</b><br>
                            <b>+7 (8352) 53-06-43</b><br>
                            - понедельник, вторник, четверг с 8.00 до 18.00.<br>
                            - среда с 8.00 до 19.00.<br>
                            - пятница с 8.00 до 18.00.<br>
                            - суббота с 8.00 до 13.00.<br>
                            <br>
                        </div>
                        <hr>

                        <div class="alert alert-info" role="alert">
                            <b>Касса<br>
                            </b>- понедельник, вторник, четверг с 8.00 до 18.00. Перерыв на обед с 12.00 до 13.00.<br>
                            - среда с 8.00 до 19.00. Перерыв на обед с 13.00 до 14.00.<br>
                            - пятница с 8.00 до 18.00. Перерыв на обед с 12.00 до 13.00.<br>
                            - суббота с 8.00 до 13.00. Без перерыва на обед.<br>
                            <b><br>
                            </b>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Паспортный стол<br>
                            </b><b>+7 (8352) 25-92-26</b><br>
                            Выдача справок производится только в установленное время по следующему графику:<br>
                            - вторник с 14.00 до 17.00.<br>
                            - среда с 15.00 до 19.00.<br>
                            - пятница с 15.00 до 18.00.<br>
                            - суббота с 8.00 до 12.00.<br>
                            По вопросам регистрации и снятия с места жительства обращаться в МФЦ.<br>
                            <br>
                        </div>



                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Юридический отдел</b> <br>
                            <b>+7 (8352) 25-91-10</b><br>
                            - понедельник - пятница&nbsp;с 8.00 до 17.00. Перерыв на обед&nbsp;с 12.00 до 13.00.<br>
                            - суббота, воскресенье выходные дни.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Производственно-технический отдел</b> <br>
                            <b>+7 (8352) 25-92-26</b><br>
                            - понедельник - пятница&nbsp;с 8.00 до 17.00. Перерыв на обед&nbsp;с 12.00 до 13.00.<br>
                            - суббота, воскресенье выходные дни.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Планово-экономиченский отдел</b> <br>
                            <b>+7 (8352) 25-91-10</b><br>
                            - понедельник - пятница&nbsp;с 8.00 до 17.00. Перерыв на обед&nbsp;с 12.00 до 13.00.<br>
                            - суббота, воскресенье выходные дни.<br>
                            <br>
                        </div>
                    </div>
                    <div id="txt_2" style="text-align: center">
                        <div class="alert alert-info" role="alert">
                            <b>Технический участок ООО "Наследие":<br>
                            </b><b>+7 (8352) 53-18-84</b>. <br>
                            Мастер технического участка - <b>48-08-63</b>.<br>
                            - понедельник, вторник, четверг: с 8.00 до 17:00. Перерыв с 12.00 до 13.00.<br>
                            - среда, пятница с 10.00 до 19.00. Перерыв с 14.00 до 15.00.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Технический участок ООО "Достояние"</b>:<br>
                            <b>+7 (8352) 53-30-90</b>. <br>
                            Мастер технического участка - <b>48-08-61</b>.<br>
                            - понедельник, вторник, четверг: с 8.00 до 17:00. Перерыв с 12.00 до 13.00.<br>
                            - среда, пятница с 10.00 до 19.00. Перерыв с 14.00 до 15.00.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Мастер по санитарному содержанию МКД</b> <br><b>44-16-78</b><br>
                            - вторник, среда, четверг, пятница, суббота с 8.00 до 17.00. Перерыв на обед с 12.00 до 13.00.<br>
                            - воскресенье, понедельник выходные дни.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b>Мастер лифтового хозяйства</b> <br>
                            <b>44-97-84</b> <br>
                            <b>+7 (8352) 25-91-10</b><br>
                            - понедельник - пятница&nbsp;с 8.00 до 17.00. Перерыв на обед&nbsp;с 12.00 до 13.00.<br>
                            - суббота, воскресенье выходные дни.<br>
                            <br>
                        </div>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <b> Личный прием населения</b><br>
                            Руководитель предприятия - Павлов В.А.:<br>
                            - среда с 15.00 до 19.00<br>
                            <br>
                            Главный инженер - Никифоров В.В.:<br>
                            - пятница с 15.00 до 19.00<br>
                            <br>
                            Заместитель директора по производству - Анисимов С.П.:<br>
                            - среда с 15.00 до 19.00<br>
                            <br>
                            Начальник отдела по работе с потребителями - Козлов А.В.:<br>
                            - вторник с 14.00 до 17.00.<br>
                            - среда с 15.00 до 19.00.<br>
                            - пятница с 15.00 до 18.00.<br>
                            - суббота с 8.00 до 12.00.<br>
                        </div>
                    </div>
                </div>
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