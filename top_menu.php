<style>
@import url(https://fonts.googleapis.com/css?family=Lora);
nav {
  width: 660px;
  margin: 0 auto 30px;
}
ul {
  list-style: none; 
  margin: 0;
  padding: 0;
}
.topmenu > li {
  display: inline-block;
  margin-right: 20px;
  position: relative;
}
.topmenu > li:last-child {
  margin-right: 0;
}
a {  
  padding: 10px 15px;
  text-decoration: none;
  outline: none;
  font-family: 'Lora', serif;
  transition: .5s linear;
}
.fa {
  font-family: "FontAwesome";
  color: inherit;
  padding-left: 10px;
}
.submenu {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  z-index: 10;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}
.one ul a {
  color: #FFF;
  font-weight: bold;
}
.one .submenu {
  display: none;
  background: #373a3c;
}
.one ul li:hover .submenu {
  display: block;
}
.submenu li a {
  color: white;
}
</style>
<div class="container">
                    <div class="row menu">
                        <div class="col-xl-8 col-md-12 navig nav">
                                <nav class="one">
									<ul class="topmenu">
										<li><a href="/">ГЛАВНАЯ</a></li>										
										<li><a href="#">О КОМПАНИИ<i class="fa fa-angle-down"></i></a>
										  <ul class="submenu">
											<li><a href="">НОВОСТИ</a></li>
											<li><a href="">ОБЪЯВЛЕНИЯ</a></li>
											<li><a href="">УСЛУГИ</a></li>
											<li><a href="">ВАКАНСИИ</a></li>
											<li><a href="">ПЛАТНЫЕ РАБОТЫ</a></li>
											<li><a href="">ДОКУМЕНТЫ</a></li>
										  </ul>
										</li>
										<li><a href="#">КОНТАКТНАЯ ИНФОРМАЦИЯ<i class="fa fa-angle-down"></i></a>
										  <ul class="submenu">
											<li><a href="">ГРАФИК РАБОТЫ</a></li>
											<li><a href="">РЕКВИЗИТЫ</a></li>
										  </ul>
										</li>
										<li><a href="#">ДОМА В ОБСЛУЖИВАНИИ<i class="fa fa-angle-down"></i></a>
										  <ul class="submenu">
											<li><a href="">ООО "Достояние"</a></li>
											<li><a href="">ООО "Наследие"</a></li>
										  </ul>
										</li>
										<li><a href="#">ЗАДАТЬ ВОПРОС?</a></li>
									</ul>
								</nav>
                        </div>

                        <div class="col-xl-4 col-md-12 navig-2">
						
                            <li class="navigation-items">
							<img class="vector" src="./img/Vector.png" alt="">
							<a href="/lk.php">ВХОД В ЛИЧНЫЙ КАБИНЕТ</a></li>
							
                            <li class="navigation-items">
							<img class="vector" src="./img/Vector-pencil.svg" alt="">
							<a href="">РЕГИСТРАЦИЯ</a> </li>
                        </div>
						
                    </div>
                </div>
				
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
				<script>				
					$(".five li ul").hide();
					$(".five li:has('.submenu')").hover(
					  function(){
					  $(".five li ul").stop().fadeToggle(300);}
					);							
				</script>