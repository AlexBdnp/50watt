@extends('front.layout')

@section('title')
    Тонировка в Днепре - 50watt
@endsection

@section('main')
    <div class="article-name">
        <h1>ТОНИРОВКА АВТОМОБИЛЯ</h1>
    </div>
    <div class="article-brands">
        <img src="{{ asset('images/brands/UltraVision.png') }}">
        <img src="{{ asset('images/brands/xpel.png') }}">
        <img src="{{ asset('images/brands/lumar.png') }}">
        <img src="{{ asset('images/brands/3m.png') }}">
    </div>
    <hr>
    <div class="article-image">
        <img src="{{ asset('images/window-tint-lexus4.png') }}" alt="Варианты тонировки">
    </div>
    <article>
        <section>
            <b>Тонировка качественными американскими пленками</b> UltraVision  Xpel  Llumar  3M
        </section>
        <section>
            <h3>Варианты тонировки:</h3>
            <ul>
                <li>Стандартная (все стекла БЕЗ лобового)</li>
                <li>Тонировка лобового стекла</li>
                <li>ЕвроТонировка (без передних стекол, без лобового)</li>
                <li>Тонировка Атермальной пленкой (прозрачная, по ГОСТу)</li>
            </ul>
        </section>
        <section>
            <h3>Антигравийная пленка:</h3>
            <ul>
                <li>Защита лакокрасочного покрытия автомобиля 
                    капот, бампер, зеркала, крылья, двери </li>
                <li>Защита фар</li>
                <li>Полировка фар</li>
            </ul>
        </section>
        <section>
            <h3>Автостекло:</h3>
            <ul>
                <li>Продажа стёкол и установка на авто в Днепре</li>
                <li>Ремонт сколов и трещин на лобовом стекле</li>
            </ul>
        </section>
    </article>
    <div class="client-form">
        <span>Оставьте свой номер и мы Вам перезвоним</span>
        <form action="/" method="post">
            @csrf
            <input type="tel" name="tel" id="tel">
            <input type="submit" value="OK">
        </form>
    </div>
@endsection
