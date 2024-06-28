@extends('layouts.market')

@section('title', 'Просмотр товара')

@section('content')
<div class="product__show justfify-content-center mt-2">
    <img class="roseimg" src="{{ asset('css/img/ap.jpg') }}" alt="">
    <div class="product__info">
        <p class="product__info__name">{{ $product->name }}</p>
        <span class="product__info__more">{{ $product->info }}</span>
        <form action="{{ route('cart.update') }}" class="form_margin" method="POST">
            @csrf
            @method('PUT')
            <input hidden value="{{ $product->id }}" name="product_id">
            <button type="submit" class="btn btn-primary butt--margin">Add to cart</button>
        </form>
    </div>
</div>
<!-- <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table> -->
</div>
@endsection