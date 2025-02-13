@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/bloghd.avif') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Blog</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Investor Zone</a></li>
                  <li class="breadcrumb-item"><a href="#">Blog</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->

    <!-- Blog Section Start -->
    
    <div class="container">

<div class="row justify-content-center mb-5 pb-2">
    <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Recent</span> Blog</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
            necessary regelialia. It is a paradisematic country</p>
    </div>
</div>
<!-- img/houseb1.jpg',
                'img/bigifgblog2.png',
                'img/fixdepoblo3.png',
                'img/incomtablog4.jpg -->
<div class="row">
  
    <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
                style="background-image: url('img/incomtablog4.jpg');">
                <div class="meta-date text-center p-2">
                    <span class="day">11</span>
                    <span class="mos">feb</span>
                    <span class="yr">2025</span>
                </div>
            </a>
            <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Income Tax Changes in Budget 2024: Dos and don’ts for individual taxpayers.</a></h3>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0">
                        <a href="https://www.livemint.com/budget/income-tax-changes-in-budget-2024-dos-and-don-ts-for-individual-taxpayers-gold-nps-real-estate-retirement-equities-11721819477187.html" class="btn custom-outline-btn">Read More <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </p>

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
                style="background-image: url('img/bigifgblog2.png');">
                <div class="meta-date text-center p-2">
                    <span class="day">11</span>
                    <span class="mos">feb</span>
                    <span class="yr">2025</span>
                </div>
            </a>
            <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">How big a gift are GIFT city funds to NRIs? MintGenie explores.</a></h3>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0">
                        <a href="https://www.livemint.com/mutual-fund/mutual-funds-how-big-a-gift-are-gift-city-funds-to-nris-mintgenie-explore-11722323164277.html" class="btn custom-outline-btn">Read More <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </p>

                </div>

            </div>
        </div>
    </div>
    <!-- img/fixdepoblo3.png',
                'img/incomtablog4.jpg -->
    <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
                style="background-image: url('img/fixdepoblo3.png');">
                <div class="meta-date text-center p-2">
                    <span class="day">11</span>
                    <span class="mos">Feb</span>
                    <span class="yr">2025</span>
                </div>
            </a>
            <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Fixed Deposits: Safe investment or risky gamble? What you need to understand</a></h3>

                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0">
                        <a href="https://www.livemint.com/money/personal-finance/fixed-deposits-safe-investment-or-risky-gamble-what-you-need-to-understand-11735537809836.html" class="btn custom-outline-btn">Read More <span
                                class="ion-ios-arrow-round-forward"></span>
                        </a>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
                style="background-image: url('img/houseb1.jpg');">
                <div class="meta-date text-center p-2">
                    <span class="day">11</span>
                    <span class="mos">Feb</span>
                    <span class="yr">2025</span>
                </div>
            </a>
            <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Household savings plummet to 5-year low in FY23: Where did young India’s savings go?</a></h3>
        
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="https://www.livemint.com/money/personal-finance/household-savings-plummet-to-5-year-low-in-fy23-where-did-young-indias-savings-go-real-estate-gold-mutual-funds-11719903465707.html" class="btn custom-outline-btn">Read More <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

    <!-- Blog End -->
    <!-- Blog Section End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>
@endsection
