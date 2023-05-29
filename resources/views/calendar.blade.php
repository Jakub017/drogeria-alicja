@extends('layouts.main')

@section('content')

<div class="wrapper-calendar">
    <div class="calendar">
        @foreach($today_promotions as $today_promotion)
        @if($loop->first)
        <div class="calendar__today">
            <p class="calendar__title">HITY DNIA!!</p>
            <p class="calendar__subtitle">W każdy dzień coś innego !!!</p>
            <div class="calendar__today__promotion">
                <p class="calendar__today__title">PROMOCJA DNIA!</p>
                <img src="{{asset('storage/'.$today_promotion->image)}}" alt="" class="calendar__today__img">
                <h2>{{ $today_promotion->name }}</h2>
                <p>{{ $today_promotion->price }}zł</p>
                @php
                $price_per_100ml = $today_promotion->price / $today_promotion->volume * 100;
                $price_per_100ml = number_format($price_per_100ml, 2, '.', ' ');
                @endphp
                <p>Pojemność: {{ $today_promotion->volume }}ml</p>
                <p>Cena za 100ml: {{ $price_per_100ml }}zł</p>
                <p>Najniższa cena w ostatnich 30 dniach: {{ $today_promotion->lowest_price }}zł</p>

                <div class="calendar__today__product">
                    <a class="calendar__today__button" href="#">Nowość!</a>
                    <a class="calendar__today__button" href="#">Promocja!</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        <div class="calendar__incoming">
            @foreach($promotions as $promotion)
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">{{ \Carbon\Carbon::parse($promotion->date)->format('d.m') }}</p>

                <img src="{{asset('storage/'.$promotion->image)}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">{{ $promotion->name }}</p>
                <p class="calendar__incoming__volume">{{ $promotion->volume }}ml</p>
                @php
                $product_price_per_100ml = $promotion->price / $promotion->volume * 100;
                $promotion_price_per_100ml = number_format($product_price_per_100ml, 2, '.', ' ');
                @endphp
                <p class="calendar__incoming__price  price--buttons">{{ $promotion->price }}zł</p>
                <p class="calendar__incoming__price  previous">(Cena za 100ml: {{ $promotion_price_per_100ml }}zł)</p>
                <p class="calendar__incoming__price  previous">(Najniższa cena w ostatnich 30 dniach:
                    {{ $promotion->lowest_price }}zł)</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
