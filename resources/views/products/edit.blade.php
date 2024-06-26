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
        <svg width="119" height="120" class="supp_arr" viewBox="0 0 119 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M95.739 68.8063C83.9881 77.6807 70.0916 83.528 54.9353 80.7864C41.2551 78.3116 32.246 68.4984 40.7513 55.1835C44.7775 48.8805 53.7643 44.0985 61.1534 47.1079C69.3855 50.4606 63.5067 60.5223 58.4885 63.6233C46.768 70.8663 29.6851 68.8517 20.7465 56.686C10.1611 42.2789 26.4881 33.812 26.5054 33.9331" stroke="#DCE5E2" stroke-width="2.09329" stroke-miterlimit="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M93.8969 85.1085C93.3808 83.5637 93.5598 81.9756 93.657 80.3816C93.9758 75.1478 95.9923 69.6128 99.9116 65.9574C94.6402 68.39 86.9766 69.7716 81.9191 66.3603" stroke="#DCE5E2" stroke-width="2.09329" stroke-miterlimit="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div>
            <p class="title">Edit <span class="text_color">Product</span></p>
            <form action="{{ route('products.update', $product->id) }}" class="support_info" method="post">
                @csrf
                @method('PUT')
                <input class="comm_input" placeholder="Product Name" name="name" value="{{ $product->name }}">
                <input class="comm_input" placeholder="Description" name="description" value="{{ $product->description }}">
                <button type="submit" class="support_butt">Send</button>
            </form>
        </div>
    </div>
</section>
@endsection