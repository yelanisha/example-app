@extends('layouts.market')

@section('title', 'Редактирование товара')

@section('content')
    <section class="comments">
        <div class="contacts">
            <img src="{{ asset('css/img/blest.png') }}" alt="" class="contacts_glitter">
            <span class="contacts_text">Just Edit</span>
            <img src="{{ asset('css/img/ar2.png') }}" alt="" class="cont_arr">
        </div>
        <div class="support">
            <img src="{{ asset('css/img/ar3.png') }}" alt="" class="supp_arr">
            <div>
                <p class="title">Edit <span class="text_color">Product</span></p>
                <form action="{{ route('products.update', $product->id) }}" class="support_info" method="post">
                    @csrf
                    @method('PUT')
                    <input class="comm_input" placeholder="Product Name" name="name" value="{{ $product->name }}">
                    <input class="comm_input" placeholder="Description" name="description"
                        value="{{ $product->description }}">
                    <button type="submit" class="support_butt">Send</button>
                </form>
            </div>
        </div>
    </section>
@endsection
