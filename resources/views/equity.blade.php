@extends('layouts.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Equity And Derivatives</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Equity And Derivatives</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Equities - For Long Term Investment start -->
    <div class="equity-info-container" id="equities-section">
        <h1 class="equity-info-heading">Equities - For Long Term Investment</h1>
        <p class="equity-info-content">
            Long term investments in Equities offer one of the highest returns which are quite significant even after
            adjusting to the impact of inflation, as compared to other assets. This makes it possible for the investors
            to keep up with the lifestyle without cutting down on any expenses even when the prices of goods are
            gradually increasing.
        </p>
        <p class="equity-info-content">
            Equity investments have the potential to offer returns in multiples of the invested capital when held for a
            longer period over 5 years. The longer one holds equity investments, the risk could minimize from low to
            nil. Equity investments can make achieving Financial Goals much easier, if invested from a very early age
            regularly, holding for long.
        </p>
    </div>

    <!-- Equities - For Long Term Investment end -->
<!-- Steps Start -->
<div class="eq1-steps">
  <h1 class="section-heading">Understanding Equity Derivatives</h1>
  <div class="eq1-steps-container">
    <div class="st1">
      <a href="#equity-section1" class="step-link">
        <div class="eq1-circle" id="step1">01</div>
        <h3>What is an Equity Derivative?</h3>
      </a>
    </div>
    <div class="st3">
      <a href="#undertsanding-section3" class="step-link">
        <div class="eq1-circle" id="step3">02</div>
        <h3>Understanding Equity Derivative</h3>
      </a>
    </div>
    <div class="st4">
      <a href="#risk-section2" class="step-link">
        <div class="eq1-circle" id="step4">03</div>
        <h3>Risks of Equity Derivatives</h3>
      </a>
    </div>
  </div>
</div>
<!-- Steps End -->

    <!-- What is an Equity Derivative start -->
    <section id="equity-section1" class="what-is-equi">
        <div class="content-container">
            <div class="image-container">
                <img src="img/equi-img-1.jpg" alt="Equity Derivative">
            </div>
            <div class="text-container">
                <h4>What is an Equity Derivative?</h4>
                <h1>Empowering investments, one equity derivative at a time.</h1>
                <p>
                    An equity derivative is a financial instrument whose value is based on the equity movements of the underlying asset.
                    For example, a stock option is an equity derivative, because its value is based on the price movements of the underlying stock.
                </p>
            </div>
        </div>
    </section>

    <!-- What is an Equity Derivative end -->

    <!-- eq-understanding - start -->
    <div class="eq-understanding-container" id="undertsanding-section3">
        <!-- Left Section: Content -->
        <div class="eq-understanding-left-section">
            <h1>Understanding Equity Derivative</h1>
            <p class="eq-understanding-subheading">Come around some beautiful photos</p>
            <div class="eq-understanding-content-description">
                <p>Equity derivatives can act like an insurance policy. The investor receives a potential payout by paying the cost of the derivative contract, which is referred to as a premium in the options market. An investor that purchases a stock, can protect against a loss in share value by purchasing a put
                    option. On the other hand, an investor that has shorted shares can hedge against an upward move in the share price by purchasing a call option.</p>
                <p>Equity derivative can also be used for speculation purposes. For example, a trader can buy equity options, instead of actual stock, to generate profits from the underlying asset’s price movements. </p>
            </div>

        </div>

        <!-- Right Section: Image -->
        <div class="eq-understanding-right-section">
            <img src="img/equi-img-2.webp" alt="Group of People" class="right-image">
        </div>
    </div>
    <!-- eq-understanding - end -->

     <!-- Risk Section Start -->
<div class="risk-container" id="risk-section2">
  <div class="image-container">
    <img src="img/risk1.jpeg" alt="Image representing risks" class="left-image">
  </div>
  <div class="content-container">
    <h2>Risks in Equity and Derivatives</h2>
    <ul>
      <li>
        <strong>1. Equities</strong>
        <p class="description">
          Market volatility can lead to significant price fluctuations, and there's a risk of losing invested capital if the stock price declines.
        </p>
      </li>
      <li>
        <strong>2. Derivatives</strong>
        <p class="description">
          Highly leveraged positions can amplify losses, and complex pricing can introduce counterparty and liquidity risks.
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- Risk Section End -->

    <!-- Risk Section End -->


    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection