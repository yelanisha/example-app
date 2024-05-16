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
            <div>
                <p class="title">Create <span class="text_color">Order</span></p>
                <form action="{{ route('orders.store') }}" class="support_info" method="post">
                    @csrf
                    <input class="comm_input" placeholder="Name" name="name">
                    <input class="comm_input" placeholder="Comment" name="comment">
                    <input hidden class="comm_input" name="user_id" value="1">
                    <select class="form-select comm_input"
                        style="border-radius: 17px;border: 2px solid #6C5FBC;font-weight: 600;font-size: 17px;line-height: 24px;color: #6e6e6e;padding-left: 21px;"
                        aria-label="Default select example" name="status_id">
                        @foreach ($statuses as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="support_butt">Send</button>
                </form>
            </div>
        </div>
    </section>
@endsection
