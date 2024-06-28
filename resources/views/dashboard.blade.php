@extends('layouts.market')

@section('title', 'MobileFlow')

@section('cart_butt')
<a href="{{ route('cart.show') }}" class="nav_li_a_img decnone"><img src="{{ asset('css/img/cart.svg') }}" alt=""></a>
@endsection

@section('order_butt')
<a href="{{ route('orders.index') }}" class="nav_li_a decnone">Orders</a>
@endsection

@section('content')
{{-- <x-app-layout> --}}
{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot> --}}
{{-- </x-app-layout> --}}

<section class="mainpage">
    <div class="mainpage_block1_enjoy">
        <img src="{{ asset('css/img/logo2.png') }}" alt="" class="mainpade_block1_enjoy_photo">
        <p class="mainpage_bl1_enjoy_title">Поток технологий в ваших руках.</p>
        <p class="mainpage_bl1_enjoy_sub">MobileFlow: Ваш лучший помощник в цифровом мире!</p>
    </div>
    <div class="mainpage_block1_photo">
        <img src="{{ asset('css/img/phones.svg') }}" alt="">
    </div>
</section>
<section class="top">
    <input type="radio" name="butt" id="r1" checked>
    <input type="radio" name="butt" id="r2">
    <input type="radio" name="butt" id="r3">
    <p class="title">Новинки</p>
    <div class="slider">
        <div class="top_block--width">
            <img src="{{ asset('css/img/ap.jpg') }}" alt="" class="top_img">
            <p class="top_name">Apple iPhone 15 Plus</p>
            <p class="price">122 090₽</p>
        </div>
        <div class="top_block--width">
            <img src="{{ asset('css/img/sm.jpg') }}" alt="" class="top_img">
            <p class="top_name">Samsung Galaxy A15</p>
            <p class="price">17 990₽</p>
        </div>
        <div class="top_block--width">
            <img src="{{ asset('css/img/p5.png') }}" alt="" class="top_img">
            <p class="top_name">Huawei P60 Pro</p>
            <p class="price">74 990₽</p>
        </div>
        <div class="top_block--width">
            <img src="{{ asset('css/img/t4.png') }}" alt="" class="top_img">
            <p class="top_name">Tecno SPARK 20C</p>
            <p class="price">10 499₽</p>
        </div>
        <div class="top_block--width">
            <img src="{{ asset('css/img/hu.png') }}" alt="" class="top_img">
            <p class="top_name">Huawei Pura 70 Pro</p>
            <p class="price">89 990₽</p>
        </div>
    </div>
    <div id="labels">
        <label for="r1"></label>
        <label for="r2"></label>
        <label for="r3"></label>
    </div>
</section>
@endsection