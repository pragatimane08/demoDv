@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/unlistedsharedimg.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Unlisted Shares</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Unlisted Shares</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    
    <!-- Page Header End -->

    <section class="Retirement-Saving-feature">
        <div class="Retirement-Saving-feature-image-container">
            <img src="img/unlistedsharenew.jpg" alt="Private equity investor reviewing pre-IPO and unlisted shares
portfolio.">
        </div>
        <div class="Retirement-Saving-feature-content">
            <span class="Retirement-Saving-feature-subheading">Unlisted Shares</span>
            <p class="Retirement-Saving-feature-description">
            Invest in companies that are not yet listed on the stock exchange and be a part of their growth story. Unlisted shares provide exclusive investment opportunities in promising private companies with the potential for high returns.   
            </p>
            <a href="{{ route('schedulemeeting') }}" class="schedule-meeting-btn">Schedule Meeting</a>
        </div>
    </section>

    <div class="container-unlisted">
    <div class="image-section" style="background-image: url('img/unlist1.jpg');" aria-label="Pre-IPO and unlisted shares portfolio"></div>
    <div class="content-unlisted">
        <h2 class="section-heading">Why Unlisted Shares?</h2>
        <div class="wyhunlisted-shares-section">
            <div class="wyhunlisted-shares-ribbon"></div>
            <div class="wyhunlisted-shares-icon">
                <i class="fas fa-seedling"></i>
            </div>
            <div class="wyhunlisted-shares-text">
                <h2 class="wyhunlisted-shares-title">Early Stage Investments</h2>
                <p class="wyhunlisted-shares-description">Invest in high-growth companies before they go public. Gain early access to potential unicorns and high-return ventures.</p>
            </div>
        </div>
        <div class="wyhunlisted-shares-section">
            <div class="wyhunlisted-shares-ribbon"></div>
            <div class="wyhunlisted-shares-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="wyhunlisted-shares-text">
                <h2 class="wyhunlisted-shares-title">High Return Potential</h2>
                <p class="wyhunlisted-shares-description">Unlisted shares offer the potential for significant returns, often outperforming traditional listed investments.</p>
            </div>
        </div>
        <div class="wyhunlisted-shares-section">
            <div class="wyhunlisted-shares-ribbon"></div>
            <div class="wyhunlisted-shares-icon">
                <i class="fas fa-globe"></i>
            </div>
            <div class="wyhunlisted-shares-text">
                <h2 class="wyhunlisted-shares-title">Unique Industries</h2>
                <p class="wyhunlisted-shares-description">Diversify your portfolio by investing in unique sectors and industries not represented in the current market listings.</p>
            </div>
        </div>
    </div>
</div>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection