@extends('layouts.main')

@section('content1')
    <main>
      <div class="jumbo">
        
      </div>
      <div class="fc-container card-container">
          <div class="fc-container button-container-series">
            <button class="button-series">CURRENT SERIES</button>
          </div>

        <div class="div-temporaneo"></div>

      </div>

      <div class="fc-container fc-button">
        <button>LOAD MORE</button>
      </div>
    </main>
@endsection


@section('content2')
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
@endsection

 




  
