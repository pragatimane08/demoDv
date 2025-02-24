@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/giftcityfund.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Gift City Funds</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Gift City Funds</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    
    <!-- Page Header End -->

    <!-- <section class="child-future-saving-section">
    <div class="child-future-saving-container">
        <div class="child-future-saving-image">
            <img src="img/giftcityfund.jpg" alt="Child Future Saving">
        </div>
        <div class="child-future-saving-content">
            <h1>Gifty City Funds</h1>
            <p>
                <strong> GIFT City (Gujarat International Financial-Tec City)</strong>
           , is India's first IFSC, or International Financial Services Centre. It is approved and regulated by the government under the Special Economic Zones Act, 2005. GIFT City is a jurisdiction that provides financial services to both residents and non-residents in foreign currency.
            </p>
            <p>
                <strong>The International Financial Services Centre (IFSC)</strong>  was established to attract overseas financial institutions and the overseas branches/subsidiaries of Indian financial institutions to India. The IFSC provides a compelling ecosystem for conducting financial services business, including a favourable regulatory environment and a world-class infrastructure. IFSC units are treated as non-residents under extant Foreign Exchange Management regulations. The International Financial Services Centres Authority (IFSCA) is a unified regulator for securities markets, banking, insurance, and pension funds in the IFSC.
                .
            </p>
            <a href="{{ route('schedulemeeting') }}" class="child-future-saving-btn">Schedule Meeting</a>
        </div>
    </div>
</section> -->.
<!-- About Section -->
<section id="about-gift-city" class="about-gift-city-section">
  <div class="about-container">
    <h2 class="section-heading">Discover GIFT City</h2>
    <p class="section-description">
      GIFT City (Gujarat International Financial-Tec City) is India's premier International Financial Services Centre (IFSC), approved and regulated by the government under the Special Economic Zones Act, 2005. It offers world-class financial services to both residents and non-residents in foreign currency, fostering global economic growth.
    </p>

    <div class="timeline-features">
      <div class="timeline-item">
        <div class="timeline-icon">
          <i class="fas fa-globe"></i>
        </div>
        <div class="timeline-content">
          <h3 class="feature-title">Global Reach</h3>
          <p class="feature-text">Connecting businesses and investors across the globe with seamless financial services.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-icon">
          <i class="fas fa-building"></i>
        </div>
        <div class="timeline-content">
          <h3 class="feature-title">World-Class Infrastructure</h3>
          <p class="feature-text">State-of-the-art facilities designed to support international financial operations.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-icon">
          <i class="fas fa-handshake"></i>
        </div>
        <div class="timeline-content">
          <h3 class="feature-title">Favourable Regulations</h3>
          <p class="feature-text">A business-friendly environment with streamlined policies and tax benefits.</p>
        </div>
      </div>
    </div>
    <!-- <p class="section-description">
      GIFT City (Gujarat International Financial-Tec City) is India's premier International Financial Services Centre (IFSC), approved and regulated by the government under the Special Economic Zones Act, 2005. It offers world-class financial services to both residents and non-residents in foreign currency, fostering global economic growth.
    </p> -->
  </div>
</section>
<!-- info section end -->
<!-- advantage of gift city  -->
<div class="zigzag-container">
    <h2 class="section-heading"> key advantages of Gifty City Funds </h2>
    <!-- Advantage 1 -->
    <div class="zigzag-item">
      <div class="zigzag-icon">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <div class="zigzag-content">
        <h3>Invest in USD</h3>
        <p>Invest in USD and redeem in USD, protecting from rupee depreciation.</p>
      </div>
    </div>
    <!-- Advantage 2 -->
    <div class="zigzag-item reverse">
      <div class="zigzag-icon">
        <i class="fas fa-hand-holding-usd"></i>
      </div>
      <div class="zigzag-content">
        <h3>No TDS on Returns</h3>
        <p>No Tax Deducted at Source from returns generated, unlike Mutual Funds.</p>
      </div>
    </div>
    <!-- Advantage 3 -->
    <div class="zigzag-item">
      <div class="zigzag-icon">
        <i class="fas fa-percent"></i>
      </div>
      <div class="zigzag-content">
        <h3>GST-Free</h3>
        <p>Gift City Funds are free from the levy of GST.</p>
      </div>
    </div>
    <!-- Advantage 4 -->
    <div class="zigzag-item reverse">
      <div class="zigzag-icon">
        <i class="fas fa-chart-line"></i>
      </div>
      <div class="zigzag-content">
        <h3>Diverse Investment Options</h3>
        <p>Invest in Funds that invest in listed equities, unlisted equities, real estate, and more.</p>
      </div>
    </div>
  </div>
    
<style>
  
</style>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection