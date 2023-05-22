@extends('layouts.main')

@section('content')

<div class="wrapper-calendar">
    <div class="calendar">
        <div class="calendar__today">
            <p class="calendar__title">HITY DNIA!!</p>
            <p class="calendar__subtitle">W każdy dzień coś innego !!!</p>
            <div class="calendar__today__promotion">
                <p class="calendar__today__title">PROMOCJA DNIA!</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" alt="" class="calendar__today__img">
                <div class="calendar__today__product">
                    <a class="calendar__today__button" href="#">Nowość!</a>
                    <a class="calendar__today__button" href="#">Promocja!</a>
                </div>
            </div>
        </div>
        <div class="calendar__incoming">
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">17</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99)</p>
            </div>
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">18</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99 zł)</p>
            </div>
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">19</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99 zł)</p>
            </div>
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">20</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99 zł)</p>
            </div>
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">21</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99 zł)</p>
            </div>
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">22</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99 zł)</p>
            </div>
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">23</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99 zł)</p>
            </div>

            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">24</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price  price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price  previous">(7,99 zł)</p>
            </div>
            <div class="calendar__incoming__day">
                <p class="calendar__incoming__date">25</p>
                <img src="{{asset('img/product-photos/perfume-pink.jpg')}}" class="calendar__incoming__photo" alt="">
                <p class="calendar__incoming__title">Perfum</p>
                <p class="calendar__incoming__volume">200ml</p>
                <p class="calendar__incoming__price price--buttons">7,99 zł</p>
                <p class="calendar__incoming__price previous">(7,99 zł)</p>
            </div>
        </div>
    </div>
</div>
@endsection
