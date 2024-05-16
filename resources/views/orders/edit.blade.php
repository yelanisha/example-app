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
                <p class="title">Edit <span class="text_color">Order</span></p>
                <form action="{{ route('orders.update', $order->id) }}" class="support_info" method="post">
                    @csrf
                    @method('PUT')
                    <input class="comm_input" placeholder="Comment" name="comment" value="{{ $order->comment }}">
                    <input hidden value="1" name="user_id">
                    <select class="form-select comm_input"
                        style="border-radius: 17px;border: 2px solid #6C5FBC;font-weight: 600;font-size: 17px;line-height: 24px;color: #6e6e6e;padding-left: 21px;"
                        aria-label="Default select example" name="status_id">
                        @foreach ($statuses as $key => $value)
                            <option {{ $key == $order->status_id ? 'selected' : '' }} value="{{ $key }}">
                                {{ $value }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="support_butt">Send</button>
                </form>
            </div>
        </div>
    </section>
@endsection

<?php
/*
if(условие){
    делайте 1
} 
else {
    делайте 2
}

(условие) ? (делайте 1) : (делайте 2)
*/
?>
