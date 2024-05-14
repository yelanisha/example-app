@extends('layouts.market')

@section('title', 'Eatly')

@section('content')
    <section class="mainpage">
        <div class="mainpage_block1">
            <div class="mainpage_block1_enjoy">
                <img src="{{ asset('css/img/Over 1000.png') }}" alt="" class="mainpade_block1_enjoy_photo">
                <p class="mainpage_bl1_enjoy_title">Enjoy Foods All<br>
                    Over The <span class="text_color">World</span></p>
                <p class="mainpage_bl1_enjoy_sub">EatLy help you set saving goals, earn cash back offers, Go<br> to
                    disclaimer for more details and get paychecks up to two<br> days early. Get a <span
                        class="text_color">$20 bonus.</span></p>
                <img src="{{ asset('css/img/Trust Reviews.png') }}" alt="" class="mainpage_bl1_enjoy_photo">
            </div>
            <div class="mainpage_block1_photo">
                <img src="{{ asset('css/img/Hero.png') }}" alt="">
            </div>
        </div>
        <div class="mainpage_block2">
            <div class="mainpage_bl2_items">
                <span class="mainpage_bl2_title">10K+</span>
                <span class="mainpage_bl2_sub">Satisfied Costumers<br>
                    All Great Over The World </span>
            </div>
            <div class="mainpage_bl2_items mainpage_bl2_items--border">
                <span class="mainpage_bl2_title">4M</span>
                <span class="mainpage_bl2_sub">Healthy Dishes Sold <br>Including Milk Shakes Smooth</span>
            </div>
            <div class="mainpage_bl2_items">
                <span class="mainpage_bl2_title">99.99%</span>
                <span class="mainpage_bl2_sub">Reliable Customer Support<br> We Provide Great Experiences</span>
            </div>
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
        <form action="#">
            <input type="email" class="get_input" placeholder=" Enter Your Email Address">
            <a href="index.html" class="input_text">SUBSCRIBE</a>
        </form>
        <img src="{{ asset('css/img/fdget.png') }}" alt="" class="get_img">
    </section>
@endsection
