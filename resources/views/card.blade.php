<div class="top_block">
    <img src="{{ asset('css/img/ap.jpg') }}" alt="" class="top_img">
    <p class="top_name">{{ $product->name }}</p>
    <p class="price">{{ $product->description }}</p>
            <div class="card_buttons">
                <a href="{{ route('products.show', $product->id) }}">
                <button class="btn btn-success">Show</button>
            </a>
            <form action="{{ route('cart.update') }}" class="form_margin" method="POST">
                @csrf
                @method('PUT')
                <input hidden value="{{ $product->id }}" name="product_id">
                <button type="submit" class="btn btn-primary">Add to cart</button>
            </form>
        </div>
</div>