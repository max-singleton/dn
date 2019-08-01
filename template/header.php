<div class="container ">
    <div class="row header">
        <div class="col-xl-3 col-lg-3 col-md-3 ">
            <div class="container logo">
                <a href="/"><img class="logos" src="../img/Logo.png" alt=""></a>
            </div>
        </div>
        <div class="col-xl-9 col-md-9">
            <!-- Включение блока с контактной информацией -->
            <?php include './template/top_contacts.php'; ?>
            <!-- Вход в личный кабинет и регистрация -->
            <div class="container">
                <div class="row menu">
                    <div class="col-xl-8 col-md-12 navig nav">
                    </div>
                    <div class="col-xl-4 col-md-12 navig-2">
                        <li class="navigation-items">
                            <img class="vector" src="../img/Vector.png" alt="">
                            <a href="/pages/personal/auth.php">ВХОД В ЛИЧНЫЙ КАБИНЕТ</a></li>
                        <li class="navigation-items">
                            <img class="vector" src="../img/Vector-pencil.svg" alt="">
                            <a href="/pages/personal/reqistration.php">РЕГИСТРАЦИЯ</a> </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div><!-- Закрытие блока с логотипом и со входом в личный кабинет и регистрацию -->
    <div class="row">
        <div class="col-md-12">
            <!-- Включение верхнего меню -->
            <?php include './template/top_menu.php'; ?>
        </div>
    </div>
</div>