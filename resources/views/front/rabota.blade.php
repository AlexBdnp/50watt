@extends('front.layout')

@section('title')
    Работа Тонировщиком в Днепре
@endsection

@section('main')
    <div class="announcement" style="background: yellow;
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-around;">
        <p style=" margin: 0; font-size: 5vw; font-weight: bolder; color: red">ТРЕБУЕТСЯ ТОНИРОВЩИК</p>
    </div>
    <div>
    <div style="margin-top: 10px; display: flex;
                                    align-items: center;
                                    justify-content: space-around;">
            <img src="{{ asset('images/rabotnik.png') }}" width="100%">
        </div>
            
        <p>На СТО "50watt" требуется Тонировщик автомобилей.</p>
        <p>
            <ul>
                <li>Бокс с отоплением и кондиционером</li>
                <li>Зарплата сдельная, высокая</li>
            </ul>
        </p>
        <p>Звоните по номеру <a href="tel:0668373031">066-837-30-31</a></p>
    </div>
@endsection