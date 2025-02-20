@extends('layouts.app')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Unlock <span class="auto-type" style="color: #faeb95;"></span></h1>
                                <a href="#" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 2 -->
            <div class="carousel-item">
                <video class="w-100" autoplay loop muted playsinline>
                    <source src="img/save.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-5 animated fadeIn">Unlock Financial Freedom</h1>
                                <a href="#" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 3 - Investment (Left-aligned) -->
            <div class="carousel-item">
                <img class="w-100" src="img/investement.jpg" alt="Investment" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Secure Your Future with Smart Investments</h1>
                                <a href="#" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Start Investing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 4 - Newsletter (Right-aligned) -->
            <div class="carousel-item">
                <img class="w-100" src="img/newsletterheder.jpg" alt="Newsletter" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Stay Informed with Our Newsletter</h1>
                                <a href="#" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 5 - Portfolio (Left-aligned) -->
            <div class="carousel-item">
                <img class="w-100" src="img/portfolioheader.jpg" alt="Portfolio" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Build and Manage Your Portfolio</h1>
                                <a href="#" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">View Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>

<!-- About Us - Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/aboutus-3.jpg" alt="About Us" style="object-fit: cover;" loading="lazy">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/project-3.jpg" alt="Project" style="width: 200px; height: 200px;" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-custom text-uppercase mb-2">About Us</h6>
                    <h1 class="display-6 mb-4">We Help Clients to Achieve Financial Freedom</h1>
                    <p>Our team provides strategic financial planning and expert advice to help you secure your future.</p>
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6"><i class="fa fa-check text-custom me-2"></i>Expertise</div>
                        <div class="col-sm-6"><i class="fa fa-check text-custom me-2"></i>Technical Proficiency</div>
                        <div class="col-sm-6"><i class="fa fa-check text-custom me-2"></i>Strategic Thinking</div>
                        <div class="col-sm-6"><i class="fa fa-check text-custom me-2"></i>Risk Management Expertise</div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn custom-outline-btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us - End -->
<!-- why-choose-pms-start -->
   <!-- Updated Why Choose Us Section -->
   <section class="why-choose-us">
  <h2>Why <span class="highlight">choose</span> us?</h2>
  <div class="why-choose-uscards-container">
    <!-- <div class="why-choose-uscard">
      <div class="icon">&#8377;</div>
      <h3>&#8377;10,000 Cr+</h3>
      <p>Assets managed in 2 years</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">📈</div>
      <h3>30.67% CAGR</h3>
      <p>Returns since inception</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">%</div>
      <h3>0% Fixed Fee</h3>
      <p>Pay only on profits made</p>
    </div> -->
    <div class="why-choose-uscard">
      <div class="icon">⏳</div>
      <h3>13 Decades</h3>
      <p>Relevant industry experience of core team</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">💰</div>
      <h3>&#8377;250 Cr+</h3>
      <p>Assets under management in just 2 years</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">🔍</div>
      <h3>Active Monitoring</h3>
      <p>Execution to deliver top-quartile returns</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">⚖️</div>
      <h3>Unbiased Selection</h3>
      <p>Truly unbiased product selection</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">💻</div>
      <h3>Tech-Enabled</h3>
      <p>Seamless transactions & report generation</p>
    </div>
  </div>
</section>

<script>
// Function to check if an element is in the viewport
// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Function to reveal cards when they scroll into view
function revealCardsOnScroll() {
  const cards = document.querySelectorAll('.why-choose-uscard');
  cards.forEach(card => {
    if (isInViewport(card)) {
      card.classList.add('visible'); // Add the 'visible' class to trigger the animation
    } else {
      card.classList.remove('visible'); // Remove the class to reset animation
    }
  });
}

// Add event listeners for page load and scroll
window.addEventListener('scroll', revealCardsOnScroll);
window.addEventListener('load', revealCardsOnScroll);

</script>
<!-- why-choose-pms-end -->
<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="videoModalLabel">YouTube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->
 <!-- service start -->
  <!-- golden curve -->
<div class="service-container">
        <div class="golden-curve"></div>
        </div>
    
<!-- Service Start -->
<div class="home-services offered-container">
    <div class="home-text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 mb-5">Our Services</h1>
    </div>
    <div class="home-services offered-row">
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-piggy-bank" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Wealth Management</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('wealth-management') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-chart-line" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Financial Planning</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('financial-planning') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-hand-holding-usd" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Insurance & Investment Portfolio Restructuring</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('Insurance_pr') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-search-dollar" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Free Review of External Portfolio</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('external-Portfolio') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
    </div>

    <div class="home-services offered-row">
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-balance-scale" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Equity Advisory</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('equity-advisory') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-file-invoice-dollar" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Tax Planning</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('tax-planning') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-user-clock" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Retirement Planning</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('retirmentplanning') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <i class="fas fa-file-signature" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>
                </div>
                <h5>Estate Planning</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('estate-planning') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<!-- Service End -->



<!-- Products Offered Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<div class="home-products-section-container">
    <h2 class="products-heading">Products Offered</h2>
    @foreach ([
        ['fa-chart-line', '#ff5733', 'Mutual Funds', 'Professional management of pooled funds invested in diversified portfolios.'],
        ['fa-sack-dollar', '#3498db', 'Equities', 'Stock market investments in publicly traded companies.'],
        ['fa-building', '#27ae60', 'Unlisted Stocks', 'Investment opportunities in private company shares.'],
        ['fa-briefcase', '#f39c12', 'PMS & AIFs', 'Professional portfolio management and alternative investment funds.'],
        ['fa-globe', '#8e44ad', 'Gift City Investments', 'International financial services and investment opportunities.'],
        ['fa-file-contract', '#2ecc71', 'Bonds', 'Fixed income securities with regular interest payments.'],
        ['fa-piggy-bank', '#e74c3c', 'Corporate Deposits', 'Fixed deposits in corporate entities with attractive returns.'],
        ['fa-user-shield', '#16a085', 'Term Insurance', 'Life coverage protection for financial security.'],
        ['fa-heartbeat', '#d35400', 'Health Insurance', 'Comprehensive medical coverage for healthcare needs.'],
        ['fa-rocket', '#9b59b6', 'Venture Capital', 'Investment in early-stage and high-growth potential startups.'],
        ['fa-hand-holding-usd', '#2980b9', 'Business Loans', 'Financial solutions for business growth and expansion.']
    ] as $product)
    <div class="home-products-section-card" style="cursor: pointer;" onclick="window.location.href='{{ route('schedulemeeting') }}'">
        <div class="home-products-section-image">
            <i class="fa-solid {{ $product[0] }}" style="color: {{ $product[1] }}; font-size: 40px;"></i>
        </div>
        <h3>{{ $product[2] }}</h3>
        <p>{{ $product[3] }}</p>
    </div>
    @endforeach
</div>
<!-- Products Offered End -->
<!-- How It Works Start -->
<div class="home-dv-how-it-work">
  <h2 class="home-section-title">How It Works</h2>
  <div class="home-steps-container">
    <!-- Step 1 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-img-1.png" alt="Step 1 Icon" class="home-step-icon">
        <span class="home-step-number">1</span>
      </div>
      <h3 class="home-step-title">Register</h3>
      <p class="home-step-description">Register with us to kickstart your financial journey.</p>
    </div>
    <!-- Step 2 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-2.png" alt="Step 2 Icon" class="home-step-icon">
        <span class="home-step-number">2</span>
      </div>
      <h3 class="home-step-title">Engage on Financials & Investments</h3>
      <p class="home-step-description">Understand your financial situation and goals to create a tailored strategy.</p>
    </div>
    <!-- Step 3 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-3.png" alt="Step 3 Icon" class="home-step-icon">
        <span class="home-step-number">3</span>
      </div>
      <h3 class="home-step-title">Assess Risk Profile</h3>
      <p class="home-step-description">Analyze your risk appetite for the best investment approach.</p>
    </div>
    <!-- Step 4 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/financialplst4.png" alt="Step 4 Icon" class="home-step-icon">
        <span class="home-step-number">4</span>
      </div>
      <h3 class="home-step-title">Financial Planning</h3>
      <p class="home-step-description"> Comprehensive Financial Planning done for your financial journey to meet each of your financial goals.</p>
    </div>
    <!-- Step 5 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-4.png" alt="Step 5 Icon" class="home-step-icon">
        <span class="home-step-number">5</span>
      </div>
      <h3 class="home-step-title">Portfolio Construction</h3>
      <p class="home-step-description">Build or optimize your investment portfolio.</p>
    </div>
    <!-- Step 6 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-5.png" alt="Step 6 Icon" class="home-step-icon">
        <span class="home-step-number">6</span>
      </div>
      <h3 class="home-step-title">Map Investments to Goals</h3>
      <p class="home-step-description">Align investments with financial milestones.</p>
    </div>
    <!-- Step 7 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-6.png" alt="Step 7 Icon" class="home-step-icon">
        <span class="home-step-number">7</span>
      </div>
      <h3 class="home-step-title">Monitor & Review Portfolio</h3>
      <p class="home-step-description">Track and evaluate investments for optimal performance.</p>
    </div>
    <!-- Step 8 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-7.png" alt="Step 8 Icon" class="home-step-icon">
        <span class="home-step-number">8</span>
      </div>
      <h3 class="home-step-title">Market Updates</h3>
      <p class="home-step-description">Stay informed about market trends and their impact.</p>
    </div>
  </div>
</div>
<!-- How It Works End -->
<!-- Blog Start -->

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
    
</div>
</div>
</div>

    <!-- Blog End -->
    <!-- Blog Section End -->

    <!-- Blog End -->


<!-- Optimized Testimonial Section Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-custom">Testimonial</p>
            <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
        </div>
        <div class="testimonials-container">
            <div class="nav-buttons">
                <button id="prev">&#x2039;</button>
                <button id="next">&#x203A;</button>
            </div>
            @foreach ([
                ['img/home-testi.png', 'Santhosh Krishna', 'Dallas, Texas, USA<br>Management Consultant, Autodesk Inc.', 'I am pleased to provide a testimonial for Dhanavruksha, whose exemplary service and expertise in the financial sector have been invaluable to my financial success. Demonstrating an in-depth understanding of market dynamics, their strategic guidance has been instrumental in aligning my investment decisions with my long-term financial objectives. Their professionalism and dedication to client success are commendable, and under their advisement, my portfolio has achieved remarkable growth. I unreservedly recommend Dhanavruksha to any individual or organization seeking proficient and dependable financial consulting services.'],
                ['img/home-testi2.png', 'Anand & Divya', 'USA', 'Choosing Dhanavruksha was one of the best decisions I have made for my financial future. Their personalized approach stood out immediately. They took the time to understand my unique financial situation, risk tolerance, and long-term objectives before crafting a tailored investment strategy for me. Not only did they provide comprehensive investment options, but they also offered insightful guidance every step of the way. I\'ve seen significant growth in my investments and feel secure in my financial future. I wholeheartedly recommend Dhanavruksha Financial Services to anyone looking to build and protect their wealth with a trusted partner by their side.'],
                ['img/home-testi3.png', 'Dr. Saravana Raja', 'Urologist, Tirunelveli, Tamil Nadu', 'I trust Dhanavruksha for my complete Wealth Management requirements. They have helped me to organise my finances effectively and to generate great returns. While the construction of my hospital building was going on, I suddenly needed urgent funds and reached out to DV. I was pleasantly surprised that my investments had grown to a sizeable value and that amount came as a huge relief to fund the construction. I would strongly recommend DV for wealth creation.'],
                ['img/home-testi4.png', 'M. Venkataramana', 'EX-Indian Cricketer and Current Coach, Chennai', 'Being a part of Dhanavruksha has been an incredibly rewarding experience. Their expertise and strategic insights have significantly enhanced my investment journey. I highly recommend their services to anyone seeking reliable and knowledgeable financial guidance.'],
                ['img/home-testi5.png', 'Dr. Nambi Appadurai', 'Director, WRI India, Chennai', 'Dhanavruksha has been managing my wealth ever since its inception. I always found them honest and professional in their approach. They have a very good understanding of today\'s complex issues surrounding wealth management. They maintain their benchmark for integrity in the sphere of financial advisory and wealth management - a quality which is very rare these days but essential to establish customer confidence. I am extremely happy to be associated with Dhanavruksha. I wish them all the best in their future endeavors.'],
                ['img/home-testi6.png', 'A. Sivakumar', 'Principal Engineer, Bangalore', 'Dhanavruksha has been extremely useful and reliable finance management firm catering to all my financial management requirements. Their communication is simple and good. Very professional in their approach. Always available for any quick wealth investment decisions too. On a whole I would recommend anybody to use their services and benefit.'],
                ['img/home-testi7.png', 'Rajagopalan Venkataraman', 'Ex - Chairman, Mastek Ltd, UK', 'I was introduced to Dhanavruksha by one of many of their diligent employees. I had expressed very clear performance expectations for my portfolio with them. My returns have far exceeded what I expected. Their client management is unique and treats my funds as their own. My experience over the last year gives me great confidence, and I intend enhancing my funds under their management substantially over the next few months. My best wishes for Dhanavruksha to grow substantially so that many more investors are benefitted by their financial acumen.'],
                ['img/home-testi8.png', 'Swathi Balasubramanian', 'Business Development Manager, Government of Western Australia', 'My experience with Dhanavruksha has made my life easy in planning my overall finances. Savings and investment plans were tailor-made and customized as per my preference and comfort with the support of their expert team. They simplified the concept of financial planning and I have witnessed a substantial improvement in the way my assets and income have been managed. For anyone who is looking for sustainable and consistent financial support or a planner, this team is a definite go from my side.']
            ] as $index => $testimonial)
            <div class="testimonial {{ $index === 0 ? '' : 'hidden' }}">
                <img src="{{ $testimonial[0] }}" alt="Testimonial Photo">
                <div class="testimonial-content">
                    <h3>{{ $testimonial[1] }}</h3>
                    <h4>{!! $testimonial[2] !!}</h4>
                    <div class="stars">★★★★★</div>
                    <p>{{ $testimonial[3] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const testimonials = document.querySelectorAll('.testimonial');
        let currentIndex = 0;

        const updateTestimonials = () => {
            testimonials.forEach((testimonial, index) => {
                testimonial.classList.toggle('hidden', index !== currentIndex);
            });
        };

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateTestimonials();
        });

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateTestimonials();
        });

        updateTestimonials();
    });
</script>
<!-- Optimized Testimonial Section End -->


<!-- Our Partners Start -->
<div class="home-our-partners-section">
    <div class="home-our-partners-container">
        <div class="home-our-partners-text">
            <h3>Our Partners</h3>
            <p>We're fortunate to have incredible Partners</p>
        </div>
        <iframe src="https://resources.investwellonline.com/websiteitem/amc-logos-new/amc.html" 
                class="home-our-partners-iframe" title="AMC Logos" frameborder="0">
        </iframe>
    </div>
</div>
<!-- Our Partners End -->

<!-- CSS Optimization -->
<style>
  /*** Service-home-start ***/
/* Global Styling for Services Section */
.home-services.offered-container {
  width: calc(100% - 100px);
  padding: 0 20px;
  margin: 0 auto;
  overflow: hidden; /* Prevents any overflow issues */
}

/* Center the heading */
.home-text-center {
  text-align: center;
  margin-bottom: 32px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.home-text-center h1 {
  font-size: 2rem;
  color: white;
  text-align: center;
}

/* Services Row Styling - Display in Horizontal Row */
.home-services.offered-row {
  display: flex;
  gap: 20px;
  flex-wrap: wrap; /* Allow wrapping on smaller screens */
  justify-content: center; /* Center items */
  padding-bottom: 10px;
}

/* Service Item Styling */
.home-service-item {
  flex: 0 0 calc(25% - 20px); /* Show 4 items in a row */
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s, box-shadow 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  overflow: hidden;
  height: 250px; /* Ensure equal height for desktop */
}

.home-service-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.home-service-text {
  padding: 24px;
}

/* Service Button Styling */
.home-btn-square {
  width: 64px;
  height: 64px;
  margin: 0 auto 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f4f4f4;
  border-radius: 50%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.home-btn-square img {
  width: 32px;
  height: 32px;
}

.home-service-btn a {
  display: inline-block;
  background: #fff;
  padding: 12px 16px;
  border: 1px solid #f0f0f0;
  border-radius: 5px;
  text-decoration: none;
  font-size: 1rem;
  color: #B37F2B;
  font-weight: 600;
  transition: all 0.3s;
}

.home-service-btn a:hover {
  background: #f4f4f4;
  color: #b37228;
}

/* Responsive Design */
@media (max-width: 1200px) {
  .home-service-item { flex: 0 0 calc(33.33% - 20px); } /* Show 3 items */
}

@media (max-width: 991px) {
  .home-service-item { flex: 0 0 calc(50% - 20px); } /* Show 2 items */
}

@media (max-width: 767px) {
  .home-services.offered-container {
      width: 100%;
      padding: 0 20px;
  }
  .home-text-center h1 { 
      font-size: 1.8rem; 
      color: #d0a94e;
      text-align: center;
  }
  .home-services.offered-row {
      flex-direction: column; /* Stack items one by one */
      align-items: center; /* Center items */
      gap: 20px;
  }
  .home-service-item {
      flex: 1 1 auto; /* Equal height for all items */
      width: 80%; /* Reduce width for better appearance */
      max-width: 400px; /* Limit max size */
      margin: 0 auto 30px; /* Center align and add bottom spacing */
      height: auto; /* Adjust height dynamically */
  }
}

@media (max-width: 576px) {
  .home-text-center h1 { 
      font-size: 1.6rem; 
      color: #000;
      text-align: center;
  }
  .home-services.offered-row {
      flex-direction: column;
      align-items: center;
      gap: 20px;
  }
  .home-service-item {
      flex: 1 1 auto; /* Ensure equal height for all items */
      width: 90%; /* Further reduce width for small screens */
      max-width: 350px; /* Set max width */
      margin: 0 auto 30px; /* Maintain spacing with bottom margin */
      height: auto; /* Allow dynamic height */
  }
}

</style>
    @endsection