@extends('layouts.main')

@section('content')

<section class="product">
    <div class="product__photo">
        <div class="photo-container">
            <div class="photo-main">
                <div class="controls">
                </div>
                <img src="{{asset('storage/'.$premium_product->main_image)}}" alt="green apple slice">
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
            <h1>{{ $premium_product->name }}</h1>
        </div>
        <div class="price">
            <span>{{ $premium_product->price }} </span>
        </div>

        <div class="description">
            <h3>Opis produktu</h3>
            <p>{!! $premium_product->description !!}</p>
        </div>
        <button class="buy--btn">Nowość!</button>
    </div>
</section>

@endsection
