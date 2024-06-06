@extends('layouts.market')

@section('title', 'MobileFlow')

@section('content')
    <section class="mainpage">
        <div class="mainpage_block1_enjoy">
            <img src="{{ asset('css/img/logo2.png') }}" alt="" class="mainpade_block1_enjoy_photo">
            <p class="mainpage_bl1_enjoy_title">Поток технологий в ваших руках.</p>
            <p class="mainpage_bl1_enjoy_sub">MobileFlow: Ваш лучший помощник в цифровом мире!</p>
        </div>
        <div class="mainpage_block1_photo">
            <img src="{{ asset('css/img/phones.png') }}" alt="">
        </div>
    </section>
    <section class="top">
        <p class="title">Our Top <span class="text_color">Dishes</span></p>
        <div class="top_blocks">
            <div class="top_block">
                <img src="{{ asset('css/img/Food Image.png') }}" alt="" class="top_img">
                <p class="bl_sub bl_sub_yel bl_sub_yel--bcg">Healthy</p>
                <p class="top_name">Chicken Hell</p>
                <div class="top_timenstar">
                    <span class="timenstar">24min •</span>
                    <img src="{{ asset('css/img/star.png') }}" alt="" class="star">
                    <span class="timenstar">4.8</span>
                </div>
                <p class="price">$12.<span class="price_size">99</span></p>
            </div>
            <div class="top_block">
                <img src="{{ asset('css/img/f2.png') }}" alt="" class="top_img">
                <p class="bl_sub bl_sub_red bl_sub_red--bcg">Trending</p>
                <p class="top_name">Swe Dish</p>
                <div class="top_timenstar">
                    <span class="timenstar">34min •</span>
                    <img src="{{ asset('css/img/star.png') }}" alt="" class="star">
                    <span class="timenstar">4.9</span>
                </div>
                <p class="price">$19.<span class="price_size">99</span></p>
            </div>
            <div class="top_block">
                <img src="{{ asset('css/img/f3.png') }}" alt="" class="top_img">
                <p class="bl_sub bl_sub_green bl_sub_green--bcg">Supreme</p>
                <p class="top_name">Swe Dish</p>
                <div class="top_timenstar">
                    <span class="timenstar">34min •</span>
                    <img src="{{ asset('css/img/star.png') }}" alt="" class="star">
                    <span class="timenstar">4.7</span>
                </div>
                <p class="price">$10.<span class="price_size">99</span></p>
            </div>
            <div class="top_block">
                <img src="{{ asset('css/img/Food Image.png') }}" alt="" class="top_img">
                <p class="bl_sub bl_sub_yel bl_sub_yel--bcg">Healthy</p>
                <p class="top_name">Chicken Hell</p>
                <div class="top_timenstar">
                    <span class="timenstar">24min •</span>
                    <img src="{{ asset('css/img/star.png') }}" alt="" class="star">
                    <span class="timenstar">4.8</span>
                </div>
                <p class="price">$12.<span class="price_size">99</span></p>
            </div>
            <div class="top_block">
                <img src="{{ asset('css/img/f2.png') }}" alt="" class="top_img">
                <p class="bl_sub bl_sub_red bl_sub_red--bcg">Trending</p>
                <p class="top_name">Swe Dish</p>
                <div class="top_timenstar">
                    <span class="timenstar">34min •</span>
                    <img src="{{ asset('css/img/star.png') }}" alt="" class="star">
                    <span class="timenstar">4.9</span>
                </div>
                <p class="price">$19.<span class="price_size">99</span></p>
            </div>
        </div>
    </section>
    <section class="customer">
        <input type="radio" name="butt" id="r1" checked>
        <input type="radio" name="butt" id="r2">
        <input type="radio" name="butt" id="r3">
        <p class="title"><span class="text_color">Customer</span> Say</p>
        <div class="slider">
            <div class="opinion">
                <div class="opinion_note">
                    <div class="note_names">
                        <img src="{{ asset('css/img/man.png') }}" alt="" class="note_names_pers">
                        <div class="note_names_pers_text">
                            <span class="note_names_pers_text_name">Alexander R.</span>
                            <span class="note_names_pers_withus">01 Year With Us </span>
                        </div>
                    </div>
                    <img src="{{ asset('css/img/Path 173.png') }}" alt="" class="note_img">
                </div>
                <span class="opinion_text">“ Online invoice payment helps companies save time, are faster and save
                    maximum effort for the clients and save maximum effort. Online invoice payment helps companies
                    save
                    time ”</span>
                <img src="{{ asset('css/img/Stars.png') }}" alt="" class="opinion_stars">
            </div>
            <div class="opinion">
                <div class="opinion_note">
                    <div class="note_names">
                        <img src="{{ asset('css/img/man.png') }}" alt="" class="note_names_pers">
                        <div class="note_names_pers_text">
                            <span class="note_names_pers_text_name">Alexander R.</span>
                            <span class="note_names_pers_withus">01 Year With Us </span>
                        </div>
                    </div>
                    <img src="{{ asset('css/img/Path 173.png') }}" alt="" class="note_img">
                </div>
                <span class="opinion_text">“ Online invoice payment helps companies save time, are faster and save
                    maximum effort for the clients and save maximum effort. Online invoice payment helps companies
                    save
                    time ”</span>
                <img src="{{ asset('css/img/Stars.png') }}" alt="" class="opinion_stars">
            </div>
            <div class="opinion">
                <div class="opinion_note">
                    <div class="note_names">
                        <img src="{{ asset('css/img/man.png') }}" alt="" class="note_names_pers">
                        <div class="note_names_pers_text">
                            <span class="note_names_pers_text_name">Alexander R.</span>
                            <span class="note_names_pers_withus">01 Year With Us </span>
                        </div>
                    </div>
                    <img src="{{ asset('css/img/Path 173.png') }}" alt="" class="note_img">
                </div>
                <span class="opinion_text">“ Online invoice payment helps companies save time, are faster and save
                    maximum effort for the clients and save maximum effort. Online invoice payment helps companies
                    save
                    time ”</span>
                <img src="{{ asset('css/img/Stars.png') }}" alt="" class="opinion_stars">
            </div>
        </div>
        <div id="labels">
            <label for="r1"></label>
            <label for="r2"></label>
            <label for="r3"></label>
        </div>
    </section>
    <section class="get">
        <p class="get_text">GET 50%</p>
        <form action="{{ route('products.index') }}">
            <input type="email" class="get_input" placeholder=" Enter Your Email Address">
            <a href="/" class="input_text">SUBSCRIBE</a>
        </form>
        <img src="{{ asset('css/img/fdget.png') }}" alt="" class="get_img">
    </section>
@endsection
