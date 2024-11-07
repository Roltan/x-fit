<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/main.css" />
		<script src="/js/slaider.js" defer></script>
		<script src="/js/scroll.js" defer></script>
		<script src="/js/header.js" defer></script>
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
			</nav>
			<span class="Inter-text rem15">+7 (383) 312 07 43</span>
			<div class="buter" id="buter" onclick="HeaderAct()">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="navMabail" id="navMabail">
				<a class="Inter-text rem15" onclick="Scroll('info-container')">О СТУДИИ</a>
				<a class="Inter-text rem15" onclick="Scroll('boy-card')">КАРТЫ</a>
				<a class="Inter-text rem15" onclick="Scroll('ad')">ВАША ПОЛЬЗА</a>
				<a class="Inter-text rem15" onclick="Scroll('application')">ЗАЯВКА</a>
				<span class="Inter-text rem15">+7 (383) 312 07 43</span>
			</div>
		</header>

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
					<div class="slaider-item">
						<img src="/img/тренажерный зал.jpg" />
						<div class="disc">
							<span class="Inter-text rem15" style="text-align: left">Самые современные тренажеры LIFE FITNESS и HAMMER STRENGTH: беговые дорожки, силовые тренажеры для всех групп мышц.</span>
							<span class="Inter-text rem3" style="text-align: right">ТРЕНАЖЕРНЫЙ ЗАЛ</span>
						</div>
					</div>
					<div class="slaider-item">
						<img src="/img/бассейн с морской водой.jpg" alt="" />
						<div class="disc">
							<span class="Inter-text rem15" style="text-align: left">Бассейн 25 метров. Детский бассейн. Аквааэробика, классическое плавание, реабилитационные курсы.</span>
							<span class="Inter-text rem3" style="text-align: right">БАССЕЙН С МОРСКОЙ ВОДОЙ</span>
						</div>
					</div>
					<div class="slaider-item">
						<img src="/img/детский фитнес.jpg" alt="" />
						<div class="disc">
							<span class="Inter-text rem15" style="text-align: left">Плавание, спортивные игры, соревнования, персональные тренировки и групповые занятия премиум-класса.</span>
							<span class="Inter-text rem3" style="text-align: right">ДЕТСКИЙ ФИТНЕС</span>
						</div>
					</div>
					<div class="slaider-item">
						<img src="/img/салон красоты spa.jpg" alt="" />
						<div class="disc">
							<span class="Inter-text rem15" style="text-align: left">Большой выбор программ, косметический и спортивный массаж, салон красоты и солярий.</span>
							<span class="Inter-text rem3" style="text-align: right">САЛОН КРАСОТЫ & SPA</span>
						</div>
					</div>
					<div class="slaider-item">
						<img src="/img/фитнес-бар.jpg" alt="" />
						<div class="disc">
							<span class="Inter-text rem15" style="text-align: left">Возможность подкрепиться и сохранить эффект от тренировок. Питание для здорового образа жизни!</span>
							<span class="Inter-text rem3" style="text-align: right">ФИТНЕС-БАР FRESH-FIT</span>
						</div>
					</div>
					<div class="slaider-item">
						<img src="/img/функциональный тренинг.jpeg" alt="" />
						<div class="disc">
							<span class="Inter-text rem15" style="text-align: left">Вы сможете действительно быстро скинуть лишний вес, увеличить или повысить эластичность мышечной массы.</span>
							<span class="Inter-text rem3" style="text-align: right">ФУНКЦИОНАЛЬНЫЙ ТРЕНИНГ</span>
						</div>
					</div>
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
	</body>
</html>
