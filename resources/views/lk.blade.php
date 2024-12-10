<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/lk.css">
    <script src="/js/header.js" defer></script>
    <script src="/js/lk.js" defer></script>
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
            <span class="Inter-text rem15">+7 (383) 312 07 43</span>
        </nav>
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

    <section>
        <div class="mini-container">
            <h2 class="Inter-text">Профиль</h2>
            <div class="profile-info">
                <p><strong>Имя:</strong> Иван Иванов</p>
                <p><strong>Email:</strong> ivan@example.com</p>
                <p><strong>Телефон:</strong> +7 123 456-78-90</p>
            </div>
            <form class="edit-profile hidden" method="POST" action="/">
                <div class="input">
					<label for="name_login">Имя</label>
					<input type="text" name="name" id="name_login" class="input-form" />
				</div>
                <div class="input">
					<label for="email_login">Почта</label>
					<input type="email" name="email" id="email_login" class="input-form" />
				</div>
                <div class="input">
					<label for="phone_login">Почта</label>
					<input type="text" name="phone" id="phone_login" class="input-form" />
				</div>
                <div class="edit-buttons">
                    <button type="submit" id="saveProfile" class="rem15 openModalBtn">Сохранить</button>
                    <button type="button" id="cancelEdit" class="cancel rem15 openModalBtn">Отмена</button>
                </div>
            </form>
            <button type="button" id="editProfile" class="rem15 openModalBtn">Редактировать профиль</button>
        </div>
    </section>
</body>
</html>
