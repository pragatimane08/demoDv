@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/fixdpostitehd1.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Fixed Deposits</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Fixed Deposits</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->

<!-- FD Header start -->
<section class="fd-intro">
    <div class="fd-intro-text">
        <h3>-- FIXED DEPOSIT --</h3>
        <h1>Start Investing <span>in Fixed Deposit</span></h1>
        <p>Secure Your Future with Fixed Returns</p>
        <p>
            Fixed Deposits are among the most reliable investment options. With assured returns and low risk, they help create wealth steadily. Company Fixed Deposits offer a fixed rate of return over a predefined period, ensuring peace of mind and financial stability.
        </p>
        <a href="{{ route('schedulemeeting') }}" class="fd-cta">Schedule Meeting</a>
    </div>
    <div class="fd-intro-image">
    <img src="{{Vite::asset('resources/theme/img/fixed_depo1.webp')}}" alt="Stack of coins symbolizing safe and secure fixed deposit investments">

    </div>
</section>
<!-- FD Header End -->

   <!-- types of fd-start -->
   <div class="fd-container">
        <h1 class="fd-title">Types of Companies Offering Fixed Deposits</h1>
        <div class="fd-companies">
            <div class="fd-company">
                <img src="{{Vite::asset('resources/theme/img/fd1.webp')}}" alt="Financial Institutions" class="fd-icon">
                <h3 class="fd-name">Financial Institutions</h3>
            </div>
            <div class="fd-divider"></div>
            <div class="fd-company">
                <img src="{{Vite::asset('resources/theme/img/fd2.webp')}}" alt="NBFC" class="fd-icon">
                <h3 class="fd-name">Non-Banking Finance Companies</h3>
            </div>
            <div class="fd-divider"></div>
            <div class="fd-company">
                <img src="{{Vite::asset('resources/theme/img/fd3.webp')}}" alt="Manufacturing Companies" class="fd-icon">
                <h3 class="fd-name">Manufacturing Companies</h3>
            </div>
            <div class="fd-divider"></div>
            <div class="fd-company">
                <img src="{{Vite::asset('resources/theme/img/fd4.webp')}}" alt="Housing Finance" class="fd-icon">
                <h3 class="fd-name">Housing Finance Companies</h3>
            </div>
            <div class="fd-divider"></div>
            <div class="fd-company">
                <img src="img/fd5.webp" alt="Government Companies" class="fd-icon">
                <h3 class="fd-name">Government Companies</h3>
            </div>
        </div>
    </div>
    <!-- types of fd-end -->

    <script>
// Function to check if an element is in view
function isInView(element) {
  const rect = element.getBoundingClientRect();
  return rect.top <= window.innerHeight && rect.bottom >= 0;
}

// Function to reveal elements on scroll
function revealCardsOnScroll() {
  const fdContainer = document.querySelector('.fd-container');
  
  if (isInView(fdContainer)) {
    fdContainer.classList.add('fd-visible');
  } else {
    fdContainer.classList.remove('fd-visible'); // Ensures the animation resets
  }
}

// Add event listeners for page load and scroll
window.addEventListener('scroll', revealCardsOnScroll);
window.addEventListener('load', revealCardsOnScroll);
</script>
<!-- types of fd-end -->

<!-- Feature Section Start -->
<div class="fd-feature">
  <div class="fd-feature-container">
    <!-- Left Section -->
    <div class="fd-feature-left">
      <h1>Our <span>Features</span></h1>
      <p>Company Fixed Deposits offer comparatively higher returns than banks.</p>
      <p>Choose the best tenure for you from a wide range as per your convenience.
        You can choose how frequently you want to receive your interest payments:
      </p>
    </div>

    <!-- Right Section -->
    <div class="fd-feature-right">
      <div class="fd-feature-steps-container">
        <div class="fd-feature-step">
          <a href="{{ route('newsletter') }}">
            <div class="fd-feature-icon">
              <img src="{{Vite::asset('resources/theme/img/fdb1.webp')}}" alt="Maturity">
            </div>
            <h3>Maturity</h3>
          </a>
        </div>
        <div class="fd-feature-step">
          <a href="{{ route('newsletter') }}">
            <div class="fd-feature-icon">
              <img src="{{Vite::asset('resources/theme/img/fdb2.webp')}}" alt="Yearly">
            </div>
            <h3>Yearly</h3>
          </a>
        </div>
        <div class="fd-feature-step">
          <a href="{{ route('newsletter') }}">
            <div class="fd-feature-icon">
              <img src="{{Vite::asset('resources/theme/img/fdb3.webp')}}" alt="Half-yearly">
            </div>
            <h3>Half-yearly</h3>
          </a>
        </div>
        <div class="fd-feature-step">
          <a href="{{ route('newsletter') }}">
            <div class="fd-feature-icon">
              <img src="{{Vite::asset('resources/theme/img/fdb4.webp')}}" alt="Quarterly">
            </div>
            <h3>Quarterly</h3>
          </a>
        </div>
        <div class="fd-feature-step">
          <a href="{{ route('newsletter') }}">
            <div class="fd-feature-icon">
              <img src="{{Vite::asset('resources/theme/img/fdb5.webp')}}" alt="Monthly">
            </div>
            <h3>Monthly</h3>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const featureSection = document.querySelector(".fd-feature-steps-container");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        featureSection.classList.add("show-feature");
      } else {
        featureSection.classList.remove("show-feature"); // Remove class when out of view
      }
    });
  }, { threshold: 0.2 });

  observer.observe(featureSection);
});

</script>
<!-- Feature Section End -->

<!--fd-benefits-start-->
<section class="benefit-fd-section">
  <div class="benefit-fd-container">
    <!-- Heading Section -->
    <div class="benefit-fd-heading">
      <h2>Our Benefits</h2>
    </div>

    <!-- Left Image Section -->
    <div class="benefit-fd-image">
      <img src="{{Vite::asset('resources/theme/img/fd-bef-img2.webp')}}" alt="Fixed Deposit Illustration">
    </div>

    <!-- Right Text Section -->
    <div class="benefit-fd-content">
      <div class="benefit-fd-description">
        <p>
          Company Fixed Deposits are non-transferable, which means there is no fear of the FD receipt being stolen. In case it falls into the wrong hands, it cannot be misused. Premature encashment of deposits is available at any time, subject to the payment of a prescribed penalty.
        </p>
      </div>
      <div class="benefit-fd-items">
        <div class="benefit-fd-item">
          <div class="benefit-fd-icon">
            <img src="{{Vite::asset('resources/theme/img/fd-benefit-img1.webp')}}" alt="Diversify Risk Icon">
          </div>
          <h5>Step 1: Diversify Risk</h5>
          <p>
            The deposits should be spread over a large number of companies engaged in different industries. This way, you’ll be able to diversify your risk among various industries/companies.
          </p>
        </div>
        <div class="benefit-fd-item">
          <div class="benefit-fd-icon">
            <img src="{{Vite::asset('resources/theme/img/fd-benefit-img-2.webp')}}" alt="Wide Choices Icon">
          </div>
          <h5>Step 2: Wide Choices</h5>
          <p>
            Many companies operate in the Company Deposit market. This will help you decide whether to renew or reshuffle the deposit. Attractive rates apply from time to time.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--fd-benefits-end-->

    <style>
      /*feature of fd*/

    </style>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection