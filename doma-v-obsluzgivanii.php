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
        <div class="col-xl-2 ">
        </div>
        <div class="col">
            <div class="col-md-8">
                <div style="text-align: center;">
                    <h2 class="alert-heading">Как определить, к какой организации относится ваш дом?</h2>
                </div>
                <div style="text-align: center;">
                    <h4 class="alert-heading">Выберите ваш дом из списка ниже и нажмите "Узнать название организации":</h4>
                </div>

                <br>
                <div class="col-md-8 offset-md-2">
                    <form method="GET">
                        <div class="form-group">
                            <select name="name" class="custom-select" aria-label="Example select with button addon" style="width:100%">
                                <option value="x" selected="">Выберите свой дом из списка ...</option>
                                <option value="d">улица Ленинского Комсомола, дом 68, корпус 1</option>
                                <option value="d">улица Ленинского Комсомола, дом 68, корпус 2</option>
                                <option value="d">улица Ленинского Комсомола, дом 68, корпус 3</option>
                                <option value="d">улица Ленинского Комсомола, дом 76</option>
                                <option value="d">улица Ленинского Комсомола, дом 80</option>
                                <option value="d">улица Ленинского Комсомола, дом 84, корпус 1</option>
                                <option value="d">улица Ленинского Комсомола, дом 88, корпус 87</option>
                                <option value="d">улица Гастелло, дом 9</option>
                                <option value="d">улица Гастелло, дом 11</option>
                                <option value="d">улица Гастелло, дом 13</option>
                                <option value="d">улица Гастелло, дом 15</option>
                                <option value="d">улица Гастелло, дом 17</option>
                                <option value="d">улица Гастелло, дом 17, корпус 1</option>
                                <option value="d">улица Гастелло, дом 19</option>
                                <option value="d">улица Гастелло, дом 23</option>
                                <option value="d">проспект Тракторостроителей, дом 47, корпус 9</option>
                                <option value="d">проспект Тракторостроителей, дом 48</option>
                                <option value="d">проспект Тракторостроителей, дом 49</option>
                                <option value="d">проспект Тракторостроителей, дом 52</option>
                                <option value="d">проспект Тракторостроителей, дом 54</option>
                                <option value="d">проспект Тракторостроителей, дом 56</option>
                                <option value="d">проспект Тракторостроителей, дом 59</option>
                                <option value="d">проспект Тракторостроителей, дом 60</option>
                                <option value="d">проспект Тракторостроителей, дом 61</option>
                                <option value="d">проспект Тракторостроителей, дом 67, корпус 1</option>
                                <option value="d">проспект Тракторостроителей, дом 68</option>
                                <option value="d">проспект Тракторостроителей, дом 75</option>
                                <option value="d">проспект Тракторостроителей, дом 79</option>
                                <option value="d">проспект Тракторостроителей, дом 85</option>
                                <option value="d">проспект 9-ой Пятилетки, дом 32, корус 1</option>

                                <option value="n">улица Ленинского Комсомола, дом 84</option>
                                <option value="n">улица Гастелло, дом 1, корпус 72</option>
                                <option value="n">проспект Тракторостроителей, дом 34 , корпус 2</option>
                                <option value="n">проспект Тракторостроителей, дом 54, корпус 1</option>
                                <option value="n">проспект Тракторостроителей, дом 63 , корпус 21</option>
                                <option value="n">проспект Тракторостроителей, дом 67</option>
                                <option value="n">проспект Тракторостроителей, дом 71</option>
                                <option value="n">проспект Тракторостроителей, дом 73</option>
                                <option value="n">проспект Тракторостроителей, дом 77</option>
                                <option value="n">проспект Тракторостроителей, дом 81</option>
                                <option value="n">проспект Тракторостроителей, дом 83</option>
                                <option value="n">улица Шумилова, дом 37</option>
                                <option value="n">улица Пролетарская, дом 8</option>
                                <option value="n">улица Пролетарская, дом 16</option>
                                <option value="n">улица Семашко, дом 6</option>
                            </select>
                        </div><center>
                    <button name="submit" value="submit" class="btn btn-danger" type="submit" style="width: 100%">Узнать название организации</button>
                </center>
                    </form>
                    <br>
                    <?php
                    $uk=$_GET[name];
                    if ($uk==d){
                        echo "<center><div class=\"alert alert-info\" role=\"alert\">
                        <h4>Ваша организация:</h4> <br> <b><h2>ООО \"Достояние\"</b></h2>
                    </div>
                    </center>";
                    }

                    if ($uk==n){
                        echo "<center><div class=\"alert alert-info\" role=\"alert\">
                        <h4>Ваша организация:</h4> <br> <b><h2>ООО \"Наследие\"</b></h2>
                    </div>
                    </center>";
                    }

                    if ($uk==x){
                        echo "<center><div class=\"alert alert-info\" role=\"alert\">
                        <h2>Вы не выбрали свой дом из списка</h2>
                    </div>
                    </center>";
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="col-xl-2 ">
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