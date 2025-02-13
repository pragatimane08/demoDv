@extends('layouts.app')
@section('content')
  
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/mututal fund-header-img1 (2).jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Mutual Fund</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Mutual Fund</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->

<!-- Header Start -->
<!-- Mutual Fund Section Start -->
<div class="mutual-fund-section">
    <div class="mutual-fund-container">
        <!-- Left Column: Image -->
        <div class="mutual-fund-left">
            <img src="img/mutual_fund.webp" alt="Mutual Fund" class="mutual-fund-img">
        </div>
        <!-- Right Column: Content -->
        <div class="mutual-fund-right">
            <h1>What is a Mutual Fund?</h1>
            <p>
                A mutual fund is a financial vehicle that pools money from multiple investors to purchase securities 
                like stocks, bonds, and other assets. Managed by professional portfolio managers, mutual funds 
                provide individual investors access to diversified portfolios and professional management, 
                helping to reduce risks associated with individual security investments.
            </p>
        </div>
    </div>
</div>
<!-- Mutual Fund Section End -->

<!-- How It Works Section -->
<section id="how-it-works" class="how-it-works mutual-fund-hiw">
    <div class="container">
        <h2 class="section-title">How It Works</h2>
        <div class="steps">
            <div class="step" data-step="01">
                <div class="step-number">01</div>
                <p class="step-text">The pooled funds are managed by a professional investment company, which makes decisions on behalf of the investors to generate returns through interest, dividends, or capital gains.</p>
            </div>
            <div class="step" data-step="02">
                <div class="step-number">02</div>
                <p class="step-text">The pooled funds are managed by a professional investment company, which makes decisions on behalf of the investors to generate returns through interest, dividends, or capital gains.</p>
            </div>
            <div class="step" data-step="03">
                <div class="step-number">03</div>
                <p class="step-text">The pooled funds are managed by a professional investment company, which makes decisions on behalf of the investors to generate returns through interest, dividends, or capital gains.</p>
            </div>
        </div>
    </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector('#how-it-works');
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    observer.observe(container);
});
</script>

<!-- How It Works Section-end -->

<!-- Advantages of Mutual Fund - Start -->
<div class="mutual-fund-container-adv">
    <div class="mutual-fund-section-adv">
        <div class="left-image-container-adv">
            <img src="./img/mutual_fund_adv.webp" alt="Mutual Fund Benefits">
        </div>
        <div class="content-adv">
            <h2>Advantages of Mutual Fund</h2>
            <ul class="advantages-list-adv">
                <li class="advantage-item-adv">
                    <img src="./img/mututal-1-resized.png" alt="Professional Management" class="icon-adv">
                    <div class="text-adv">
                        <h3>Professional Management</h3>
                        <p>Mutual funds provide professional money management, making them ideal for investors who lack 
                            the time or expertise to manage their portfolios.</p>
                    </div>
                </li>
                <li class="advantage-item-adv">
                    <img src="./img/mututal-2-resized.png" alt="Economies of Scale" class="icon-adv">
                    <div class="text-adv">
                        <h3>Economies of Scale</h3>
                        <p>Mutual funds buy and sell large quantities of securities, resulting in lower transaction costs for investors.</p>
                    </div>
                </li>
                <li class="advantage-item-adv">
                    <img src="./img/mututal-3-resized.png" alt="Economies of Scale" class="icon-adv">
                    <div class="text-adv">
                        <h3>Simplicity</h3>
                        <p>Investing in mutual funds is simple, with minimum investments starting as low as Rs. 500 per month.</p>
                    </div>
                </li>
                <li class="advantage-item-adv">
                    <img src="./img/mututal-4-resized (2).png" alt="Economies of Scale" class="icon-adv">
                    <div class="text-adv">
                        <h3>Easy Online Access</h3>
                        <p>Invest, track, and manage your mutual fund investments effortlessly through our online platform.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Advantages of Mutual Fund - End -->

    <!-- History of Mutual Fund -->
    <div class="centered-container">
        <div class="mutual-fund-history">
            <h1>History of Mutual Fund</h1>
            <p>The origin of the mutual fund industry in India was with the introduction of the concept of mutual funds
                by UTI in the year 1963. It accelerated from the year 1987 when non-UTI players entered the industry. In
                the past decade, the Indian mutual fund industry has seen dramatic improvements, both quality-wise and
                quantity-wise.</p>
        </div>
    </div>
    <!-- history of mututal end -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
     <script>
        window.addEventListener('scroll', function () {
            const elements = document.querySelectorAll('.step');
            const windowHeight = window.innerHeight;

            elements.forEach(el => {
                const position = el.getBoundingClientRect().top;

                if (position < windowHeight - 100) {
                    el.classList.add('fade-in');
                }
            });
        });

    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection