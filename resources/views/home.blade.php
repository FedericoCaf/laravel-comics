<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
  <title>Comics</title>
</head>
<body>

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
              <a :class="" href="">CHARACTERS</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">COMICS</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">MOVIES</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">TV</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">GAMES</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">COLLECTIBLES</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">VIDEOS</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">FANS</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">NEWS</a>
           </li>
           <li class="fc-flex-align-center">
              <a :class="" href="">SHOP</a>
           </li>
         </ul>
     </nav>
    </div>
 </div>
</header>

  <main>
    <div class="jumbo">
       
    </div>
     <div class="fc-container card-container">
        <div class="fc-container button-container-series">
          <button class="button-series">CURRENT SERIES</button>
        </div>
       {{-- <ProductCard
       v-for="(product, index) in externalList" :key="index"
       :product="product"   
       />    --}}

       <div class="div-temporaneo"></div>

    </div>
  
    <div class="fc-container fc-button">
      <button>LOAD MORE</button>
    </div>
  </main>

  <div class="container-shop fc-flex-align-center">
    <div class="fc-container">
      <ul class="fc-flex-between-align-center">
 
        <li>
           <div class="icon-shop">
              <img src=" {{ asset('img/buy-comics-digital-comics.png') }} " alt="digital-comics">
           </div>
           <span>DIGITAL COMICS</span>        
        </li>
     
        <li>
           <div class="icon-shop">
              <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="digital-comics">
           </div>
           <span>DC MERCHANDISE</span>        
        </li>
     
        <li>
           <div class="icon-shop">
              <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="digital-comics">
           </div>
           <span>SUBSCRIPTION</span>        
        </li>
     
        <li>
           <div class="icon-shop">
              <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="digital-comics">
           </div>
           <span>COMIC SHOP LOCATOR</span>        
        </li>
     
        <li>
           <div class="icon-shop">
              <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="POWER VISA">
           </div>
           <span>DC POWER VISA</span>        
        </li>
     
      </ul>
   </div>
 </div>


  <footer>
  
    <div class="footer-top">
      <div class="fc-container fc-flex-between">
        <div class="footer-list-left">
          <div class="footer-list">
             <ul>
               <li> <strong> DC COMICS </strong> </li>
               <li>Characters</li>
               <li>Comics</li>
               <li>Movies</li>
               <li>Games</li>
               <li>videos</li>
               <li>News</li>
             </ul>
             <ul>
               <li> <strong> SHOP </strong> </li>
               <li>Shop DC</li>
               <li>Shop DC collectibles</li>
             </ul>
         </div>
         <div class="footer-list">
             <ul>
               <li> <strong> DC </strong> </li>
               <li>Terms of use</li>
               <li>Privacy policy(new)</li>
               <li>Ad Choices</li>
               <li>Advertising</li>
               <li>Jobs</li>
               <li>Subscription</li>
               <li>Talent Workshops</li>
               <li>CPSC Certificates</li>
               <li>Ratings</li>
               <li>Shop Help</li>
               <li>Contact Us</li>
             </ul>
         
         </div>
         <div class="footer-list">
             <ul>
               <li> <strong> SITES </strong> </li>
               <li>DC</li>
               <li>MAD magazine</li>
               <li>DC kids</li>
               <li>DC universe</li>
               <li>DC power visa</li>
             </ul>
         </div>
    
       </div>

       <div class="footer-img-right">
           <img src="../assets/img/dc-logo-bg.png" alt="">
       </div>
      </div>
       
 </div>



<div class="footer-bottom fc-flex-between-align-center">
  <div class="fc-container fc-flex-between-align-center">
    <div class="sign-up">
      <button>SIGN UP NOW!</button>
    </div>
    <div class="social fc-flex-between-align-center">
      <span>FOLLOW US</span>
      <div class="social-icon">
        <img src=" {{ asset('img/footer-facebook.png') }} " alt="facebook">
      </div>
      <div class="social-icon">
        <img src="{{ asset('img/footer-twitter.png') }}" alt="twitter">
      </div>
      <div class="social-icon">
        <img src="{{ asset('img/footer-youtube.png') }}" alt="youtube">
      </div>
      <div class="social-icon">
        <img src="{{ asset('img/footer-pinterest.png') }}" alt="pinterest">
      </div>
      <div class="social-icon">
        <img src="{{ asset('img/footer-periscope.png') }}" alt="periscope">
      </div>
    </div>
 </div>
</div>
 
   
</footer>


  
</body>
</html>