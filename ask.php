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
                <!--work_area. Начало -->
                    <div class="col-md-4">

                        <div style="text-align: center;">
                            <h4>Часто задаваемые вопросы</h4>
                        </div>
                        <ul class="list-group"  style="z-index: 200">
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                    Как пройти регистрацию?
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Как пройти регистрацию?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&#215;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">1. На главной странице нажмите кнопку
                                                        "Регистрация".
                                                    </li>
                                                    <li class="list-group-item">2. Заполните все требуемые поля и нажмите
                                                        "Зарегистрироваться".
                                                    </li>
                                                    <li class="list-group-item">3. Появится окошко "Привязка к лицевому счету",
                                                        пройдите по этой ссылке. Если вы случайно закрыли окошко, то нажмите в
                                                        меню на раздел "Привязка к лицевому счету".
                                                    </li>
                                                    <li class="list-group-item">4. Следуйте указаниям формы привязки.
                                                    </li>
                                                    <li class="list-group-item">5. Нажмите несколько раз "Далее", затем "Готово". Появится информармация о
                                                        владельце счета. Нажмите еще раз "Далее".
                                                    </li>
                                                    <li class="list-group-item">6. Теперь вы завершили регистрацию и можете
                                                        воспользоваться личным кабинетом.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2">
                                    Если забыли или не подходит пароль
                                </button>
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Если забыли или не подходит
                                                    пароль</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&#215;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">1. На главной странице нажмите кнопку "Вход в
                                                        личный кабинет".
                                                    </li>
                                                    <li class="list-group-item">2. Нажмите на ссылку "Забыл пароль".</li>
                                                    <li class="list-group-item">3. Укажите ваш логин и почту, с которой
                                                        регистрировались. Если не помните логин, укажите только почту. Если не
                                                        помните почту, укажите только логин.
                                                    </li>
                                                    <li class="list-group-item">4. К вам придет письмо на почту. Пройдите по
                                                        ссылке, указанной в письме.
                                                    </li>
                                                    <li class="list-group-item">5. На открывшейся странице укажите свой новый
                                                        пароль для доступа в личный кабинет.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal3">
                                    Не могу войти в аккаунт
                                </button>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Не могу войти в аккаунт</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&#215;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">1. Нажмите "Забыл пароль" и создайте новый
                                                        пароль для входа.
                                                    </li>
                                                    <li class="list-group-item">2. Если первый пункт не помог , пройдите
                                                        регистрацию на сайте еще раз.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal4">
                                    Как привязать лицевой счет?
                                </button>
                                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Как привязать лицевой счет?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&#215;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">1. Нажмите в меню на раздел "Привязка к лицевому счету".</li>
                                                    <li class="list-group-item">2. Следуйте указаниям формы привязки.</li>
                                                    <li class="list-group-item">3. Нажмите несколько раз "Далее", затем "Готово". Появится информация о владельце счета. Нажмите еще раз "Далее".</li>
                                                    <li class="list-group-item">4. Теперь вы завершили регистрацию и можете воспользоваться личным кабинетом.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal5">
                                    Как узнать свой лицевой счет?
                                </button>
                                <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Как узнать свой лицевой
                                                    счет?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&#215;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">1. Посмотрите свой номер лицевого счета на
                                                        квитанции. Он состоит из 6 цифр.
                                                    </li>
                                                    <li class="list-group-item">2. Если под рукой нет квитанции, позвоните в
                                                        Приемную и назовите свой адрес.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal6">
                                    Другая проблема с сайтом
                                </button>
                                <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Другая проблема с сайтом</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&#215;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">Если у вас возникли вопросы иного характера,
                                                        сообщите нам на почту <b>admin@достояние-наследие.рф</b></li>
                                                    <li class="list-group-item">Мы постараемся как можно оперативно ответить вам
                                                        по электронной почте на ваш вопрос или решить вашу проблему.
                                                    </li>
                                                    <li class="list-group-item">Если у вас есть предложения по улучшению работы
                                                        сайта, мы будем рады узнать о них и сделать что-то новое на сайте для
                                                        улучшения вашего удобства.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-8">



                    </div>
                <!--work_area. Конец -->
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