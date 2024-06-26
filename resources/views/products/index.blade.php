@extends('layouts.market')

@section('title', 'All products')

@section('create_butt')
<a href="{{ route('products.create') }}" class="nav_li_a decnone">Create</a>
@endsection

@section('content')
<div class="container-sm justfify-content-center mt-2" style="width: 90%;margin: auto;padding: 0;gap: 55px;">
    @foreach ($products as $product)
        @include('card', compact('product'))
    @endforeach

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
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}">
                                <button class="btn btn-success">Show</button>
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" class="form_margin" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <form action="{{ route('cart.update') }}" class="form_margin" method="POST">
                                @csrf
                                @method('PUT')
                                <input hidden value="{{ $product->id }}" name="product_id">
                                <button type="submit" class="btn btn-primary">Add to cart</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> -->
</div>
@endsection