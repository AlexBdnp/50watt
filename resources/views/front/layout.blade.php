<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
    
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class="phones">
            <img src="{{ asset('images/phone.png') }}">
            <ul>
                <li><a href="tel:0986693510">098-669-35-10</a></li>
                <li><a href="tel:0996693510">099-669-35-10</a></li>
            </ul>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="/tonirovka">Тонировка</a></li>
                <li><a href="/ustanovka-signalizacii">Сигнализации</a></li>
                <li><a href="/avtozvuk">Автозвук</a></li>
                <!-- <li><a href="/">Контакты</a></li> -->
            </ul>
        </nav>
    </header>

    <div class="container-2">
        <main>
            @yield('main')
        </main>
    </div>

        <footer>
            <div class="client-form">
                <p>Оставьте Ваш номер и мы обязательно перезвоним</p>
                <form action="/" method="post">
                    @csrf
                    <input type="tel" name="tel" id="tel" placeholder="Введите номер телефона">
                    <input type="submit" value="OK">
                </form>
            </div>
            <hr>
            <div class="container">
                <p>Наш адрес<br>
                    <b>Днепр, ул. Казака Мамая 41 (р-н 12 квартал)</b>
                </p>
                <div class="phones">
                    <img src="{{ asset('images/phone.png') }}">
                    <ul>
                        <li><a href="tel:0986693510">098-669-35-10</a></li>
                        <li><a href="tel:0996693510">099-669-35-10</a></li>
                    </ul>
                </div>
            </div>
            <div class="map-google">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6004.103004347908!2d35.00887812377721!3d48.400877070045404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf847fe13d13a07f3!2z0JDQstGC0L7QodGC0LXQutC70L4sINCQ0LLRgtC-0JzRg9C30YvQutCw!5e0!3m2!1sru!2sua!4v1616993845236!5m2!1sru!2sua"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </footer>
</body>
</html>