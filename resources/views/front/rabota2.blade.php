@extends('front.layout')

@section('title')
    Работа Автоэлектриком в Днепре
@endsection

@section('main')
    <div class="announcement" style="background: yellow;
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-around;">
        <p style=" margin: 0; font-size: 5vw; font-weight: bolder; color: red">ТРЕБУЕТСЯ АВТОЭЛЕКТРИК</p>
    </div>
    <div>
    <div class="article-image" style="margin-top: 10px; display: flex;
                                    align-items: center;
                                    justify-content: space-around;">
            <img src="{{ asset('images/avtoelectric.png') }}">
        </div>
            
        <p>СТО ищет мастера по установке сигнализаций: односторонних, двусторонних, с GPS.</p>
        <p>Ищем мастера по установке камер заднего вида, видеорегистраторов</p>
        <p>Ищем мастера по установке автосвета: ксенон, LED лампы</p>
        <p>Ищем мастера по установке автозвука: динамиков, усилителей, магнитов, сабвуферов, шумовиброизоляции.</p>
        <!-- <p>
            <ul>
                <li>Устанавливать сигнализации</li>
                <li>Установка автозвука (магнитолы, динамики, усилители, сабвуферы)</li>
                <li>Установка камер заднего вида</li>
            </ul>
        </p> -->
        <p>Мы предлагаем: </p>
        <p>
            <ul>
                <li>Бокс с отоплением и кондиционером</li>
                <li>Зарплата высокая</li>
            </ul>
        </p>
        <p>Звоните по номеру <a href="tel:0668373031">066-837-30-31</a></p>
    </div>
@endsection