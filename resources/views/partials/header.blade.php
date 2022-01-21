<header>
  <div class="fc-container fc-flex-between">
  <div class="logo-header">
    <a href="#">
      <img src=" {{ asset('img/dc-logo.png') }} " alt="logo">
    </a>
  </div>
  <div class="menu-header">
    <nav>
       <ul class="fc-flex-between-align-center">
         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'characters') ? 'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'characters') ? 'active-text' : '' }}" 
               href=" {{ route('characters')}} ">CHARACTERS</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'comics') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'comics') ?
            'active-text' : '' }}" href="{{ route('comics')}}">COMICS</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'movies') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'movies') ?
            'active-text' : '' }}" href="{{ route('movies')}}">MOVIES</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'tv') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'tv') ?
            'active-text' : '' }}" href="{{ route('tv')}}">TV</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'games') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'games') ?
            'active-text' : '' }}" href="{{ route('games')}}">GAMES</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'collectibles') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'collectibles') ?
            'active-text' : '' }}" href="{{ route('collectibles')}}">COLLECTIBLES</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'videos') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'videos') ?
            'active-text' : '' }}" href="{{ route('videos')}}">VIDEOS</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'fans') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'fans') ?
            'active-text' : '' }}" href="{{ route('fans')}}">FANS</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'news') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'news') ?
            'active-text' : '' }}" href="{{ route('news')}}">NEWS</a>
         </li>

         <li class="fc-flex-align-center {{ (Route::currentRouteName() === 'shop') ?
          'active-border' : '' }} ">
            <a class="{{ (Route::currentRouteName() === 'shop') ?
            'active-text' : '' }}" href="{{ route('shop')}}">SHOP</a>
         </li>

         

       </ul>
   </nav>
  </div>
</div>
</header>