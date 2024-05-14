@extends('layouts.market')

@section('title', 'Создание товара')

@section('content')
    <section class="comments">
        <div class="contacts">
            <img src="{{ asset('css/img/blest.png') }}" alt="" class="contacts_glitter">
            <span class="contacts_text">Just Create</span>
            <img src="{{ asset('css/img/ar2.png') }}" alt="" class="cont_arr">
        </div>
        <div class="support">
            <img src="{{ asset('css/img/ar3.png') }}" alt="" class="supp_arr">
            <div >
                <p class="title">Create <span class="text_color">Product</span></p>
                <form action="{{ route('products.store') }}" class="support_info" method="post">
                    @csrf
                    <input class="comm_input" placeholder="Product Name" name="name">
                    <input class="comm_input" placeholder="Description" name="description">
                    <button type="submit" class="support_butt">Send</button>
                </form>
            </div>
        </div>
    </section>
@endsection
