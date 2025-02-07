@extends('layouts.app')
@section('content')

<!-- Include Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Bonds</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Bonds</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- bond-info-start -->
    <div class="bond-content">
    <img src="/img/bond_left2.webp" alt="Bond Representation" class="bond-image">

    <div class="bond-text">
        <h3>Bonds</h3>
        <p>An investment avenue in which an investor loans money to an entity (government or corporate) that borrows
            funds for a defined period of time at a fixed interest rate. Bond market has not attracted retail
            investors to it. But in recent times, lackluster equity markets and low rate of interest have attracted
            retail investors towards bonds issued by corporate.</p>
    </div>
</div>
    <!-- bond-info-end -->

<!-- Types of Bonds Section Start -->
<div class="bonds-section bond-type">
    <h1 class="bond-type__title">Types of Bonds</h1>
    <div class="bonds-list bond-type__list">
        <div class="bond-item bond-type__item">
            <div class="icon-wrapper bond-type__icon">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
            <h2 class="bond-type__heading">7.15% Taxable RBI Bonds</h2>
            <p class="bond-type__description">Secure investments with a fixed interest rate offered by the Reserve Bank of India.</p>
        </div>
        <div class="bond-item bond-type__item">
            <div class="icon-wrapper bond-type__icon">
                <i class="fas fa-infinity"></i>
            </div>
            <h2 class="bond-type__heading">Perpetual Bonds</h2>
            <p class="bond-type__description">Bonds with no maturity date, providing steady income indefinitely.</p>
        </div>
        <div class="bond-item bond-type__item">
            <div class="icon-wrapper bond-type__icon">
                <i class="fas fa-building"></i>
            </div>
            <h2 class="bond-type__heading">Corporate Bonds</h2>
            <p class="bond-type__description">Issued by companies to raise capital, offering attractive returns with varying risk levels.</p>
        </div>
        <div class="bond-item bond-type__item">
            <div class="icon-wrapper bond-type__icon">
                <i class="fas fa-industry"></i>
            </div>
            <h2 class="bond-type__heading">PSU Bonds</h2>
            <p class="bond-type__description">Public sector undertaking bonds backed by government-owned corporations.</p>
        </div>
        <div class="bond-item bond-type__item">
            <div class="icon-wrapper bond-type__icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h2 class="bond-type__heading">State Guaranteed Bonds</h2>
            <p class="bond-type__description">Investments backed by state governments, ensuring safety and stability.</p>
        </div>
        <div class="bond-item bond-type__item">
            <div class="icon-wrapper bond-type__icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <h2 class="bond-type__heading">High Yielding Private Bonds</h2>
            <p class="bond-type__description">Private sector bonds offering higher returns but carrying higher risk.</p>
        </div>
    </div>
</div>
<!-- Types of Bonds Section End -->

<!--Government-bond-section-start-->
<div class="Government-bond-section">
    <div class="Government-bond-content">
      <h4>Government securities</h4>
      <p>Retail investors have not tapped this investment avenue as much as others. It is good for investors looking for reasonable returns with no risk of default as the securities the Government offers these securities. These securities can be held in a demat format. The market is limited so liquidity can be a problem. Investors need to have a thorough knowledge of this investment format to invest in them. Well, then if you are the one who prefer the comforts of safety to the greed of high returns all the above debt instruments are yours to invest in.</p>
    </div>
    <div class="image-content">
      <img src="/img/bond-gov-img1.webp" alt="Team Collaboration">
    </div>
  </div>
<!--Government-bond-section-end-->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection