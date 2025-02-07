@extends('layouts.app')
@section('content')
  
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
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
    <!-- Page Header End -->

<!-- Header Start -->

<div class="mutual-fund-full-height">
  <div class="mutual-fund-container">
    <div class="mutual-fund-left">
      <img class="img-fluid" src="img/mutual_fund.webp" alt="Mutual Fund">
    </div>
    <div class="mutual-fund-right">
      <h1>What is Mutual Fund?</h1>
      <p>
        A mutual fund is a financial vehicle that pools money from multiple investors to purchase securities like stocks, bonds, and other assets. Managed by professional portfolio managers, mutual funds provide individual investors access to diversified portfolios and professional management, which can help reduce the risks associated with individual security investments. By investing in a mutual fund, you own shares in the fund, which represents a portion of the fund’s holdings.
      </p>
    </div>
  </div>
</div>


  <!-- Header End -->
   
 <!-- How It Works Section -->
<section id="how-it-works" class="how-it-works mutual-fund-hiw">
    <div class="container">
        <h2 class="section-title">How It Works</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">01</div>
                <p class="step-text">The pooled funds are managed by a professional investment company, which makes decisions on behalf of the investors to generate returns through interest, dividends, or capital gains.</p>
            </div>
            <div class="step">
                <div class="step-number">02</div>
                <p class="step-text">The pooled funds are managed by a professional investment company, which makes decisions on behalf of the investors to generate returns through interest, dividends, or capital gains.</p>
            </div>
            <div class="step">
                <div class="step-number">03</div>
                <p class="step-text">The pooled funds are managed by a professional investment company, which makes decisions on behalf of the investors to generate returns through interest, dividends, or capital gains.</p>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector('#how-it-works');
  
  // Create an Intersection Observer
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add the class to trigger the animation
        entry.target.classList.add('slide-in');
        observer.unobserve(entry.target); // Stop observing once the animation is triggered
      }
    });
  }, { threshold: 0.5 }); // Trigger when 50% of the element is visible
  
  // Observe the container
  observer.observe(container);
});
</script>
<!-- How It Works Section-end -->


    <!-- Advantages of Mutual Fund-start -->
    <div class="mutual-fund-section">
        <div class="left-image-container">
            <img src="./img/mutual_fund_adv.webp" alt="Mutual Fund Benefits">
        </div>
        <div class="content">
            <h2>Advantages of Mutual Fund</h2>
            <div class="advantage-item">
                <div class="icon">
                    <img src="./img/mututal-1-resized.png" alt="Professional Management">
                </div>
                <div class="text">
                    <h3>Professional Management</h3>
                    <p>The primary advantage of funds is the professional management of your money. Investors purchase
                        funds because they do not have the time or the expertise to manage their own portfolio. A mutual
                        fund is a relatively inexpensive way for a small investor to get a full-time manager to make and
                        monitor the investments.</p>
                </div>
            </div>
            <div class="advantage-item">
                <div class="icon">
                    <img src="./img/mututal-2-resized.png" alt="Economies of Scale">
                </div>
                <div class="text">
                    <h3>Economies of Scale</h3>
                    <p>Because a mutual fund buys and sells large amounts of securities at a time, its transaction costs
                        are lower than you as an individual would pay.</p>
                </div>
            </div>
            <div class="advantage-item">
                <div class="icon">
                    <img src="./img/mututal-3-resized.png" alt="Simplicity">
                </div>
                <div class="text">
                    <h3>Simplicity</h3>
                    <p>Buying a mutual fund is easy! The minimum investment is also very small. As little as Rs. 500 can
                        be invested on a monthly basis. Just contact us to know more.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Advantages of Mutual Fund-end -->

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