<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/css/main.css" />
		<script defer src="/js/slaider.js"></script>
		<script defer src="/js/scroll.js"></script>
		<script defer src="/js/header.js"></script>
        <script defer src="/js/modal.js"></script>
        <script defer src="/js/register.js"></script>
        <script defer src="/js/order.js"></script>
        <script defer src="/js/login.js"></script>
		<title>Xfit</title>
	</head>
	<body>
		<header>
			<nav>
				<img class="header-logo" src="/img/X-FIT.png" />
				<a class="Inter-text rem15" onclick="Scroll('info-container')">О СТУДИИ</a>
				<a class="Inter-text rem15" onclick="Scroll('boy-card')">КАРТЫ</a>
				<a class="Inter-text rem15" onclick="Scroll('ad')">ВАША ПОЛЬЗА</a>
				<a class="Inter-text rem15" onclick="Scroll('application')">ЗАЯВКА</a>
                @if (Auth::check())
                    <a class="Inter-text rem15" href="/lk">ЛИЧНЫЙ КАБИНЕТ</a>
                @else
                    <div class="header--buttons">
    					<button class="rem15 openModalBtn" data-modal="modal1">Вход</button>
	    				<button class="rem15 openModalBtn" data-modal="modal2">Регистрация</button>
		    		</div>
                @endif
			</nav>
			<div class="buter" id="buter" onclick="HeaderAct()">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="navMabail" id="navMabail">
                @if (Auth::check())
                    <a class="Inter-text rem15" href="/lk">ЛИЧНЫЙ КАБИНЕТ</a>
                @else
    			    <button class="rem15 openModalBtn" data-modal="modal1">Вход</button>
	    			<button class="rem15 openModalBtn" data-modal="modal2">Регистрация</button>
                @endif
				<a class="Inter-text rem15" onclick="Scroll('info-container')">О СТУДИИ</a>
				<a class="Inter-text rem15" onclick="Scroll('boy-card')">КАРТЫ</a>
				<a class="Inter-text rem15" onclick="Scroll('ad')">ВАША ПОЛЬЗА</a>
				<a class="Inter-text rem15" onclick="Scroll('application')">ЗАЯВКА</a>
				<span class="Inter-text rem15">+7 (383) 312 07 43</span>
			</div>
		</header>

        <div class="modalka modalka--wrapper" id="modal1">
			<form class="form--login" id="login">
				<h1>Вход</h1>
				<div class="input">
					<label for="email_login">Почта</label>
					<input type="email" name="email" id="email_login" class="input-form" />
				</div>
				<div class="input">
					<label for="password_login">Пароль</label>
					<input type="password" name="password" id="password_login" class="input-form" />
				</div>
				<button type="submit" class="submit-form rem25 Inter-text">Войти</button>
			</form>
		</div>
		<div class="modalka modalka--wrapper" id="modal2">
			<form class="form--login" id="register">
				<h1>Регистрация</h1>
				<div class="input">
					<label for="name">Имя</label>
					<input type="text" name="name" id="name" class="input-form" />
				</div>
				<div class="input">
					<label for="email_reg">Почта</label>
					<input type="email" name="email" id="email_reg" class="input-form" />
				</div>
				<div class="input">
					<label for="password_reg">Пароль</label>
					<input type="password" name="password" id="password_reg" class="input-form" />
				</div>
				<div class="input">
					<label for="password_confirmation">Повторите пароль</label>
					<input type="password" name="password_confirmation" id="password_confirmation" class="input-form" />
				</div>
				<div class="input input__checkbox">
					<input type="checkbox" name="rule" id="rule" />
					<label for="rule">
						<span>
							Я соглашаюсь на обработку
							<a href="#">персональных данных</a>
						</span>
					</label>
				</div>
				<button type="submit" class="submit-form rem25 Inter-text">Зарегистрироваться</button>
			</form>
		</div>
		<div class="modalka modalka--wrapper" id="modal3">
			<form class="form" id="order">
				<h1>Форма обратной связи</h1>
				<div class="input">
					<label for="name_order">Имя</label>
					<input type="text" name="name" id="name_order" class="input-form" required />
				</div>
				<div class="input">
					<label for="email_reg">Почта</label>
					<input type="email" name="email" id="email_order" class="input-form" required />
				</div>
				<div class="input">
					<label for="order-text">Заявка</label>
					<textarea name="text" class="input-form" id="order-text" required></textarea>
				</div>
				<div class="input input__checkbox">
					<input type="checkbox" name="rule" id="order-rule" required />
					<label for="order-rule">
						<span>
							Я соглашаюсь на обработку
							<a href="#">персональных данных</a>
						</span>
					</label>
				</div>
				<button type="submit" class="submit-form rem25 Inter-text">Оставить заявку</button>
			</form>
		</div>

		<section class="baner">
			<span class="title-baner Inter-text rem4"> До конца года фитнес на наш счет! </span>
			<form action="">
				<div>
					<img src="/img/name.svg" alt="" />
					<input type="text" placeholder="имя" class="input-form" />
				</div>
				<div>
					<img src="/img/phone.svg" alt="" />
					<input type="text" placeholder="телефон" class="input-form" />
				</div>
				<button type="submit" class="submit-form Inter-text rem25">узнать цену</button>
			</form>
			<div class="usor parl1 usor1"></div>
			<div class="usor parl1 usor2"></div>
			<div class="usor parl2 usor3"></div>
			<div class="usor parl2 usor4"></div>
			<div class="eleps"></div>
		</section>

		<section class="info-container Inter-text" id="info-container">
			<div class="title rem4">Все, что нужно для эффективных тренировок</div>
			<div class="info-text rem3">Фитнес клуб мирового уровня: бассейн с морской водой и отдельный детский бассейн, отдельная студия йоги и пилатеса, зал персональных тренировок. Для вашего удобства работает фитнес-куратор, открыт фитнес-бар, при клубе есть собственная автостоянка.</div>
		</section>

		<section class="slaider-box">
			<div class="slaider">
				<div class="slaider-img">
                    @foreach ($slider as $slide)
                        <div class="slaider-item">
                            <img src="/{{$slide->img}}" />
                            <div class="disc">
                                <span class="Inter-text rem15" style="text-align: left">{{$slide->text}}</span>
                                <span class="Inter-text rem3" style="text-align: right">{{$slide->title}}</span>
                            </div>
                        </div>
                    @endforeach
				</div>
				<div class="slaider-btn">
					<img src="/img/prev.svg" onclick="Prev()" />
					<img src="/img/next.svg" onclick="Next()" />
				</div>
			</div>
			<button class="submit-form Inter-text rem25">Купить гостевой визит</button>
			<img src="/img/fon-slaider.svg" class="fon-slaider" />
		</section>

		<section class="boy-card" id="boy-card">
			<div class="blur"></div>
			<div class="card">
				<div>
					<img src="/img/карта.png" alt="" />
					<span class="Inter-text rem15">ГОДОВАЯ КАРТА С ЗАМОРОЗКОЙ</span>
					<ul>
						<li class="Inter-text">посещение фитнес клуба без ограничений</li>
						<li class="Inter-text">посещение зоны бассейна</li>
						<li class="Inter-text">посещение групповых программ</li>
						<li class="Inter-text">посещение парных и саун</li>
						<li class="Inter-text">30 дней заморозки</li>
					</ul>
				</div>
				<button type="submit" class="submit-form Inter-text rem25">узнать цену</button>
			</div>
			<div class="card">
				<div>
					<img src="/img/карта.png" alt="" />
					<span class="Inter-text rem15">ГОДОВАЯ КАРТА БЕЗ ЗАМОРОЗКИ</span>
					<ul>
						<li class="Inter-text">посещение фитнес клуба без ограничений</li>
						<li class="Inter-text">посещение зоны бассейна</li>
						<li class="Inter-text">посещение групповых программ</li>
						<li class="Inter-text">посещение парных и саун</li>
					</ul>
				</div>
				<button type="submit" class="submit-form Inter-text rem25">узнать цену</button>
			</div>
			<div class="card">
				<div>
					<img src="/img/карта.png" alt="" />
					<span class="Inter-text rem15">РАССРОЧКА</span>
					<ul>
						<li class="Inter-text">Первоначальный внос от 0%</li>
					</ul>
				</div>
				<button type="submit" class="submit-form Inter-text rem25">узнать цену</button>
			</div>
		</section>

		<section class="ad" id="ad">
			<span class="Inter-text rem4" style="text-align: right"> X-Fit Сан Сити в Новосибирске </span>
			<span class="Inter-text rem4 white-text" style="text-align: left">
				Фитнес-клуб
				<br />
				премиум-класса
			</span>
			<span class="Inter-text rem25 white-text" style="text-align: left"> Если вы ищете качественные, профессиональные, продуманные и при этом доступные фитнес-услуги. </span>
			<span class="Inter-text rem25" style="text-align: right">
				И все это можно найти
				<br />
				в фитнес-центре X-Fit
				<br />
				Новосибирск уже сегодня!
			</span>

			<div>
				<div>
					<div>
						<img src="/img/buss.svg" alt="" />
					</div>
					<span class="Inter-text white-text" style="text-align: right">Трехуровневая система очистки воды и поддержание ее постоянной температуры.</span>
				</div>
				<span class="Inter-text magenta-text">БАССЕЙН 25М</span>
			</div>
			<div>
				<div>
					<div>
						<img src="/img/couch.svg" alt="" />
					</div>
					<span class="Inter-text white-text" style="text-align: right">У нас самый звездный тренерский состав! Мастера спорта и кандидаты в мастера спорта.</span>
				</div>
				<span class="Inter-text magenta-text">ЛУЧШИЙ ТРЕНЕРСКИЙ СОСТАВ</span>
			</div>
			<div>
				<div>
					<div>
						<img src="/img/news.svg" alt="" />
					</div>
					<span class="Inter-text white-text" style="text-align: right">Тренажеры премиум класса от компаний LIFE FITNESS, HAMMER STRENGTH, FOREMAN!</span>
				</div>
				<span class="Inter-text magenta-text">НОВЕЙШЕЕ ОБОРУДОВАНИЕ</span>
			</div>
			<div>
				<div>
					<div>
						<img src="/img/smartfitnes.svg" alt="" />
					</div>
					<span class="Inter-text white-text" style="text-align: right">Лучшие программы на основе уникальных методик наших фитнес-специалистов.</span>
				</div>
				<span class="Inter-text magenta-text">SMART FITNESS</span>
			</div>

			<img src="/img/fon-ad.svg" class="fon-ad" />
		</section>

		<section class="application" id="application">
			<form action="">
				<div>
					<img src="/img/name.svg" alt="" />
					<input type="text" placeholder="имя" class="input-form" />
				</div>
				<div>
					<img src="/img/phone.svg" alt="" />
					<input type="text" placeholder="телефон" class="input-form" />
				</div>
				<div>
					<img src="/img/mail.svg" alt="" />
					<input type="text" placeholder="электронная почта" class="input-form" />
				</div>
				<div class="submit-div">
					<button type="submit" class="submit-form Inter-text rem25">оставить заявку</button>
					<span class="Inter-text rem15">Нажимая кнопку, вы даете согласие на обработку персональных данных</span>
				</div>
			</form>
			<div class="aplication-img">
				<img src="/img/aplication-img.svg" />
				<img src="/img/aplication-img.svg" />
			</div>
			<img src="/img/aplication-fon.svg" class="aplication-fon" />
		</section>

		<footer>
			<span class="Inter-text" style="font-size: 2rem">Федеральная сеть фитнес-клубов</span>
			<img src="/img/X-FIT.png" />
			<div class="app-links">
				<span class="Inter-text">Скачать приложение</span>
				<img src="/img/Available_on_the_App_Store.png" alt="" />
				<img src="/img/google-play.jpg" alt="" />
			</div>
		</footer>

        <section class="footer__fixed">
            <button class="feedback-button submit-form openModalBtn" data-modal="modal3">
                <img src="/img/chat.png" alt="Оставить отзыв" />
            </button>
            <button id="scrollToTopButton" onclick="ScrollToTop()" class="ScrollBTN submit-form openModalBtn">
                <img src="/img/up.png" alt="">
            </button>
        </section>
	</body>
</html>
