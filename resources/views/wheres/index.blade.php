@extends('layouts.market')

@section('title', 'Where are we')

@section('content')
    <section class="where">
        <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A097111cc18ba8f1388d2dd774425515526be7eca0bb8efa20ee077062d1df230&amp;source=constructor"
            width="722" height="400" frameborder="0"></iframe>
        <div class="info">
            <span class="price">Казань, Савинский Район, Ул.Батурина, 4, 155710</span>
            <a href="tel:+79212488719" class="price info_line">+7 (921) 248-87-19</a>
            <a href="mailto:mobileflow@mail.ru" class="price info_line">mobileflow@mail.ru</a>
        </div>
    </section>
@endsection
