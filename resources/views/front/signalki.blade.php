@extends('front.layout')

@section('title')
    Сигнализации на авто в Днепре с установкой - СТО 50watt
@endsection

@section('main')
    <div class="article-name" style="background: center / cover url('{{ asset('images/gorod.png') }}'); font-size: 18pt; ">
        <h1>АВТОСИГНАЛИЗАЦИИ</h1>
    </div>
    @if(session('status'))
        <div class="tel-status">
            <p>Мы получили Ваш номер телефона, ожидайте обратной связи</p>
        </div>
    @endif
    <hr>
    <div class="article-image">
        <img src="{{ asset('images/signalizacia-dlia-avto-535x300.jpg') }}" alt="Сигнализация с блютузом">
    </div>
    <article>
        <section>
            <p>
                Продажа и Установка Сигнализаций от известных брендов: <br>
                <b style="font-size: large;">Pandora   StarLine   SHERIFF   Cyclone<br>Nextone   Tiger   Convoy   DaVinci</b>  
            </p>
            <p>
                <span>Установка:</span>
                <ul>
                    <li>Сигнализаций (односторонние, двусторонние, с автозапуском)</li>
                    <li>Центральных замков в двери</li>
                    <li>Стеклоподъёмников</li>
                </ul>
            </p>
            <p>Охранные системы Пандора(Pandora), Старлайн(StarLine) имеют возможность подключения к современным автомобилям посредством цифровой CAN-шины, что исключает вмешательства в бортовую сеть автомобиля не нарушая гарантии.</p>
        </section>
        <section>
            <p>Что мы предлагает клиентам:</p>
            <ul>
                <li>Большой выбор оригинальной продукции проверенных брендов.</li>
                <li>Выгодные цены. Мы прямые партнеры сказанных ранее брендов, поэтому можем установить самую минимальную наценку на продукцию.  Цена на установку сигнализации в Днепре определяется индивидуально.</li>
            </ul>
        </section>
        <!-- <section>
            <p>Примерная стоимость установки:</p>
            <ul>
                <li>1000 грн - установка односторонней сигнализации</li>
                <li>1300 грн - установить двустороннюю сигнализацию</li>
                <li>2000 грн - установка сигнализации Pandora или Starline</li>
            </ul>
        </section> -->
    </article>
@endsection
