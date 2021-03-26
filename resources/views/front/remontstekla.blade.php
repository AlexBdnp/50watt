@extends('front.layout')

@section('title')
    Ремонт сколов трещин в Днепре - 50watt
@endsection

@section('main')
    <div class="article-name">
        <h1>РЕМОНТ АВТОСТЕКЛА</h1>
    </div>
    @if(session('status'))
        <div class="tel-status">
            <p>Мы получили Ваш номер телефона, ожидайте обратной связи</p>
        </div>
    @endif
    <hr>
    <div class="article-image">
        <img src="{{ asset('images/skol-na-stekle.jpg') }}" alt="Варианты тонировки">
    </div>
    <article>
        <section>
            <ul>
                <li>Ремонт сколов на лобовом стекле авто</li>
                <li>Ремонт трещин на лобовом автостекле</li>
            </ul>
        </section>
    </article>
@endsection
