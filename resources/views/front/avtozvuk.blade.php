@extends('front.layout')

@section('title')
    Автозвук в Днепре - 50watt
@endsection

@section('main')
    <div class="article-name" style="background: center / cover url('{{ asset('images/avtozvuk-background.png') }}');">
        <h1 style="font-size: 24pt;">СТО АВТОЗВУК</h1>
    </div>
    @if(session('status'))
        <div class="tel-status">
            <p>Мы получили Ваш номер телефона, ожидайте обратной связи</p>
        </div>
    @endif
    <div class="article-image">
        <img src="{{ asset('images/avtozvuk-2.jpg') }}" alt="Автозвук">
    </div>
    <article>
        <!-- <section>
            <h3>В наличии имеются все типы акустики:</h3>
            <ul>
                <li>Коаксиальные динамики</li>
                <li>Компонентная акустика</li>
                <li>Пищалки, мидбасы, среднечастотники</li>
                <li>Сабвуферы (в копусе и безкорпусные)</li>
                <li>Сабвуферы активные</li>
                <li>Усилители звука и конденсаторы</li>
            </ul>
        </section>
        <section>
            <h3>Большой выбор магнитол</h3>
            <p>Выбор магнитол: бездисковые (радио + флешка), с диском, магнитолы с блютузом.</p>
            <p>Широкие 2-DIN магнитолы с GPS и подключением камеры заднего вида.</p>
        </section> -->
        <section>
            <h3>Производим работы с автозвуком:</h3>
            <ul>
                <li>Установка магнитол штатных и универсальных</li>
                <li>Установка динамиков в полку и двери</li>
                <li>Подключение усилителя</li>
                <li>Сабвуферы (в копусе и безкорпусные)</li>
                <li>Обесшумливание автомобиля</li>
            </ul>
        </section>
        <section>
            <p>Продажа и установка автозвука от известных брендов:</p>
            <hr>            
            <div class="article-brands">
                <img src="{{ asset('images/brands/jbl.png') }}">
                <img src="{{ asset('images/brands/gz-logo.png') }}">
                <img src="{{ asset('images/brands/focal.png') }}">
            </div>
            <div class="article-brands">
                <img src="{{ asset('images/brands/alpine-logo.png') }}">
                <img src="{{ asset('images/brands/jvc.png') }}">
                <img src="{{ asset('images/brands/blaupunkt.png') }}">
            </div>
            <div class="article-brands">
                <img src="{{ asset('images/brands/Pioneer-logo.png') }}">
                <img src="{{ asset('images/brands/kenwood.jpg') }}">
            </div>
                </section>
            </article>
@endsection
