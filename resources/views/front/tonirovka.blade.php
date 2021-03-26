@extends('front.layout')

@section('title')
    Тонировка в Днепре - 50watt
@endsection

@section('main')
    <div class="article-name">
        <h1>ТОНИРОВКА АВТОМОБИЛЯ</h1>
    </div>
    @if(session('status'))
        <div class="tel-status">
            <p>Мы получили Ваш номер телефона, ожидайте обратной связи</p>
        </div>
    @endif
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
@endsection
