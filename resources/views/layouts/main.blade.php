<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drogeria Alicja</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/splide.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style2.css')}}" />
   
    <script src="{{asset('js/app.js')}}" defer></script>
</head>

<body>
    @include('elements.header')
    @yield('content')
    @include('elements.footer')
    <script src="{{asset('js/splide.min.js')}}"></script>
    <script>
  new Splide( '.splide' ,{
    type   : 'loop',
    perPage: 5,
    perMove: 1,
    autoplay: true,
    breakpoints: {
        1024: {
            perPage: 4,
        },

        768: {
            perPage: 3,
        },
        
        640: {
            perPage: 1,
        },
    }
  }).mount();
</script>
</body>

</html>
