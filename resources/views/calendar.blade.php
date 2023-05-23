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
                <p>{{ $today_promotion->price }}</p>
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
                <p class="calendar__incoming__volume">{{ $promotion->volume }}</p>
                <p class="calendar__incoming__price  price--buttons">{{ $promotion->price }}</p>
                <p class="calendar__incoming__price  previous">({{ $promotion->price }})</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
