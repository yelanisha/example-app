@extends('layouts.market')

@section('title', 'Просмотр товара')

@section('cart_butt')
<a href="{{ route('cart.show') }}" class="nav_li_a_img decnone"><img src="{{ asset('css/img/cart.svg') }}" alt=""></a>
@endsection

@section('order_butt')
<a href="{{ route('orders.index') }}" class="nav_li_a decnone">Orders</a>
@endsection

@section('content')
    <div class="container-sm justfify-content-center mt-2">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Owner</th>
                <th scope="col">Comment</th>
                <th scope="col">Contains</th>
                <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->owner->name }}</td>
                    <td>{{ $order->comment }}</td>
                    <td>
                        @foreach ($order->products as $item)
                            {{ $item->name }}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection