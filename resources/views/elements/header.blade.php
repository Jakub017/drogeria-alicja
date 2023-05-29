 <section class="navigation">
     <div class="nav-container">
         <div class="brand">
             <a href="#!"><img src="{{ asset('img/menu-logo/logo-drogeria.png') }}" alt=""></a>
         </div>
         <nav>
             <div class="nav-mobile">
                 <a id="nav-toggle" href="#"><span></span></a>
             </div>
             <ul class="nav-list">

                 <li class="nav__menu-item">
                     <a class="nav__menu-link" href="/"><img
                             src="{{ asset('img/menu-icons/home-page-icon.png') }}" />Start</a>
                 </li>

                 <li class="nav__menu-item">
                     <a class="nav__menu-link" href="/#produkty-premium"><img
                             src="{{ asset('img/menu-icons/premium-products-icon.png') }}" />Premium</a>
                 </li>
                 <li class="nav__menu-item">
                     <a class="nav__menu-link" href="/#produkty">
                         <img src="{{ asset('img/menu-icons/product-icon.png') }}" />Promocje
                     </a>
                 </li>
                 <li class="nav__menu-item">
                     <a class="nav__menu-link" href="/#">
                         <img src="{{ asset('img/menu-icons/makeup-icon.png') }}" />Porady</a>
                 </li>

                 <li class="nav__menu-item">
                     @foreach($papers as $paper)
                     @php
                     $new_file = json_decode($paper->file)[0];
                     $new_file_path = Voyager::image($new_file->download_link);
                     $new_file_name = $new_file->original_name;
                     @endphp
                     <a target="_blank" class="nav__menu-link" href="{{$new_file_path}}">
                         <img src="{{ asset('img/menu-icons/newsletter-icon.png') }}" />Gazetka</a>
                     @endforeach
                 </li>

                 <li class="nav__menu-item">
                     <a class="nav__menu-link" href="/kalendarz">
                         <img src="{{ asset('img/menu-icons/calendar-icon.png') }}" />Kalendarz</a>
                 </li>

                 <ul class="nav-dropdown">
                     <ul class="nav-dropdown">
                     </ul>
                 </ul>
         </nav>
     </div>
 </section>
