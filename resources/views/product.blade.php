@extends('layouts.main')

@section('content')

<section class="product">
    <div class="product__photo">
        <div class="photo-container">
            <div class="photo-main">
                <div class="controls">
                </div>
                <img src="{{asset('storage/'.$product->main_image)}}" alt="green apple slice">
            </div>
            <div class="photo-album">
                <ul>
                    <li><img src="{{asset('img/product-photos/perfume-pink.jpg')}}" alt="green apple"></li>
                    <li><img src="{{asset('img/product-photos/perfume-pink.jpg')}}" alt="half apple"></li>
                    <li><img src="{{asset('img/product-photos/perfume-pink.jpg')}}" alt="green apple"></li>
                    <li><img src="{{asset('img/product-photos/perfume-pink.jpg')}}" alt="apple top"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product__info">
        <div class="title">
            <h1>{{ $product->name }}</h1>
        </div>
        <div class="price">
            <span>{{ $product->price }}zł</span><br>
            <p>Pojemność: {{$product->volume}}ml</p>
            @php
            $product_price_per_100ml = $product->price / $product->volume * 100;
            $product_price_per_100ml = number_format($product_price_per_100ml, 2, '.', ' ');
            @endphp
            <p>Cena za 100ml: {{$product_price_per_100ml}}zł</p>
            <p>Cena w ostatnich 30 dniach: {{ $product->lowest_price }}</p>
        </div>

        <div class="description">
            <h3>Opis produktu</h3>
            <p>{!! $product->description !!}</p>
        </div>
        <button class="buy--btn">Nowość!</button>
    </div>
</section>

@endsection
