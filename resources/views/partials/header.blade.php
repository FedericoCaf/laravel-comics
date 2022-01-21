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
         <li class="fc-flex-align-center">
            <a :class="" href=" {{ route('characters')}} ">CHARACTERS</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('comics')}}">COMICS</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('movies')}}">MOVIES</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('tv')}}">TV</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('games')}}">GAMES</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('collectibles')}}">COLLECTIBLES</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('videos')}}">VIDEOS</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('fans')}}">FANS</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('news')}}">NEWS</a>
         </li>
         <li class="fc-flex-align-center">
            <a :class="" href="{{ route('shop')}}">SHOP</a>
         </li>
       </ul>
   </nav>
  </div>
</div>
</header>