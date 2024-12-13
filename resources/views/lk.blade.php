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
            <a class="Inter-text rem15" href="/#info-container">О СТУДИИ</a>
            <a class="Inter-text rem15" href="/#boy-card">КАРТЫ</a>
            <a class="Inter-text rem15" href="/#ad">ВАША ПОЛЬЗА</a>
            <a class="Inter-text rem15" href="/#application">ЗАЯВКА</a>
            <span class="Inter-text rem15">+7 (383) 312 07 43</span>
            <a class="Inter-text rem15" href="/api/logout">Выйти</a>
        </nav>
        <div class="buter" id="buter" onclick="HeaderAct()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="navMabail" id="navMabail">
            <a class="Inter-text rem15" href="/#info-container">О СТУДИИ</a>
            <a class="Inter-text rem15" href="/#boy-card">КАРТЫ</a>
            <a class="Inter-text rem15" href="/#ad">ВАША ПОЛЬЗА</a>
            <a class="Inter-text rem15" href="/#application">ЗАЯВКА</a>
            <span class="Inter-text rem15">+7 (383) 312 07 43</span>
            <a class="Inter-text rem15" href="/api/logout">Выйти</a>
        </div>
    </header>

    <section>
        <div class="mini-container">
            <h2 class="Inter-text">Профиль</h2>
            <div class="profile-info">
                <p><strong>Имя:</strong> {{$user->name}}</p>
                <p><strong>Email:</strong> {{$user->email}}</p>
            </div>
            <form class="edit-profile hidden">
                <div class="input">
					<label for="name">Имя</label>
					<input type="text" name="name" id="name" class="input-form" value="{{$user->name}}"/>
				</div>
                <div class="input">
					<label for="email">Почта</label>
					<input type="email" name="email" id="email" class="input-form" value="{{$user->email}}"/>
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
