@extends('layouts.main')

@section('content')

<section class="offer">
    <p class="offer__header">Drogeria Alicja</p>
    <p class="offer__description">
        Firma Handlowa "Alicja" powstała w 1993 roku. Specjalizuje się w sprzedaży produktów renomowanych marek.
    </p>
</section>
<div class="nine" id="produkty-premium">
    <h1>Produkty<span>Marka premium</span></h1>
</div>
<section class="products">
    @foreach($premium_products as $premium_product)
    <div class="products__tile">
        <a href="{{route('premium.product', $premium_product)}}"
            class="products__header--gold">{{ $premium_product->name }}</a>
        <img src="{{asset('storage/'.$premium_product->main_image)}}" alt="" />
        <div class="products__buttons">
            <a class="products__buttons--gold" href="#">Nowość!</a>
            <a class="products__buttons--gold" href="#">Promocja!</a>
        </div>
        <div class="products__description">
            <p class="products__description__heading">
                {{ $premium_product->name }} - {{ $premium_product->volume }}ml
            </p>
            <p class="products__description__text">
                Pojemność: {{ $premium_product->volume }}ml<br />
                Cena: {{ $premium_product->price }}zł<br />
                @php
                $price_per_100ml = $premium_product->price / $premium_product->volume * 100;
                $price_per_100ml = number_format($price_per_100ml, 2, '.', ' ');
                @endphp
                Cena za 100ml: {{$price_per_100ml}}zł<br />
                Najniższa cena w ostatnich 30 dniach:
            </p>
        </div>
    </div>
    @endforeach

</section>


<div class="nine" id="produkty">
    <h1>Produkty<span>PROMOCJE</span></h1>
</div>
<section class="products">

    @foreach($products as $product)
    <div class="products__tile">
        <a href="{{route('product', $product)}}" class="products__header">{{ $product->name }}</a>
        <img src="{{asset('storage/'.$product->main_image)}}" alt="" />
        <div class="products__buttons">
            <a class="products__buttons--rose" href="#">Nowość!</a>
            <a class="products__buttons--rose" href="#">Promocja!</a>
        </div>
        <div class="products__description">
            <p class="products__description__heading">
                {{ $product->name }} - {{ $product->volume }}ml
            </p>
            <p class="products__description__text">
                Pojemność: {{ $product->volume }}ml<br />
                Cena: {{ $product->price }}zł<br />
                @php
                $product_price_per_100ml = $product->price / $product->volume * 100;
                $product_price_per_100ml = number_format($product_price_per_100ml, 2, '.', ' ');
                @endphp
                Cena za 100ml: {{$product_price_per_100ml}}zł<br />
                Najniższa cena w ostatnich 30 dniach:
            </p>
        </div>
    </div>
    @endforeach

</section>

<section class="advices">
    <p class="advices__button-gold">Porady kosmetyczki</p>
</section>

<section class="newsletter">
    <p class="newsletter__text">Zobacz naszą gazetkę!</p>
</section>
<div class="promotional-section">
    <h2>Najnowsze promocje w Drogeria Alicja</h2>
    <p>Sprawdź naszą gazetkę promocyjną i skorzystaj z niezwykłych ofert na kosmetyki.</p>
    @foreach($papers as $paper)
    @php
    $new_file = json_decode($paper->file)[0];
    $new_file_path = Voyager::image($new_file->download_link);
    $new_file_name = $new_file->original_name;
    @endphp
    <a target="_blank" href="{{$new_file_path}}" class="advices__button-gold">Zobacz gazetkę</a>
    @endforeach
</div>



<section class="brands">
    <p class="brands__text">Marki dostępne w naszej drogerii!</p>

    <div style="width: 100%" class="splide" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($brands as $brand)
                <li class="splide__slide">
                    <div class="brands__brand">
                        <a href="{{$brand->link}}">
                            <img src="{{asset('storage/'.$brand->logo)}}" alt="" />
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</section>

@endsection
