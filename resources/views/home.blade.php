@extends('layouts.app')
@section('content')


<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="{{Vite::asset('resources/theme/img/h13.webp')}}" alt="Image" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Unlock <span class="auto-type" style="color: #faeb95;"></span></h1>
                                <a href="{{ route('home') }}" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 2 -->
            <div class="carousel-item">
                <video class="w-100" autoplay loop muted playsinline>
                    <source src="{{Vite::asset('resources/theme/img/save.mp4')}}" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-5 animated fadeIn">Unlock Financial Freedom</h1>
                                <a href="{{ route('opendemata') }}" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 3 - Investment (Left-aligned) -->
            <div class="carousel-item">
                <img class="w-100" src="{{Vite::asset('resources/theme/img/investement.webp')}}" alt="Investment" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Secure Your Future with Smart Investments</h1>
                                <a href="{{ route('seminars') }}" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Start Investing</a>
                            </div>
                            <!-- seminars -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 4 - Newsletter (Right-aligned) -->
            <div class="carousel-item">
                <img class="w-100" src="{{Vite::asset('resources/theme/img/newsletterheder.webp')}}" alt="Newsletter" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Stay Informed with Our Newsletter</h1>
                                <a href="{{ route('newsletter') }}" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 5 - Portfolio (Left-aligned) -->
            <div class="carousel-item">
                <img class="w-100" src="{{Vite::asset('resources/theme/img/portfolioheader.webp')}}" alt="Portfolio" loading="lazy">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated fadeIn">Welcome to <strong>Dhanavruksha</strong></p>
                                <h1 class="display-1 text-white mb-4 animated fadeIn">Build and Manage Your Portfolio</h1>
                                <a href="{{ route('portfolio-restucturing') }}" class="btn custom-btn rounded-pill py-3 px-5 animated fadeIn">View Portfolio</a>
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
                    <img class="position-absolute w-100 h-100" src="{{Vite::asset('resources/theme/img/aboutus-3.webp')}}" alt="About Us" style="object-fit: cover;" loading="lazy">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="{{Vite::asset('resources/theme/img/project-3.webp')}}" alt="Project" style="width: 200px; height: 200px;" loading="lazy">
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
                            <a class="btn custom-outline-btn" href="{{ route('company-profile') }}">Read More</a>
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
// Intersection Observer for better visibility detection on mobile
document.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // Stop observing once it's visible
        }
      });
    },
    { threshold: 0.2 } // Trigger when at least 20% of the card is visible
  );

  document.querySelectorAll(".why-choose-uscard").forEach((card) => {
    observer.observe(card);
  });
});
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
        <!--<div class="home-service-item">-->
        <!--    <div class="home-service-text">-->
        <!--        <div class="home-btn-square">-->
        <!--            <i class="fas fa-hand-holding-usd" style="color: #d0a94e; font-size: 2rem; align-items: center;"></i>-->
        <!--        </div>-->
        <!--        <h5>Insurance & Investment Portfolio Restructuring</h5>-->
        <!--    </div>-->
        <!--    <div class="home-service-btn">-->
        <!--        <a href="{{ route('Insurance_pr') }}">Read More <i class="bi bi-chevron-double-right"></i></a>-->
        <!--    </div>-->
        <!--</div>-->
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

<!-- Products Offered Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<div class="home-products-section-container">
    <h2 class="products-heading">Products Offered</h2>
    @php
        $products = [
            ['fa-chart-line', '#ff5733', 'Mutual Funds', 'Professional management of pooled funds invested in diversified portfolios.'],
            ['fa-sack-dollar', '#3498db', 'Equities', 'Stock market investments in publicly traded companies.'],
            ['fa-building', '#27ae60', 'Unlisted Stocks', 'Investment opportunities in private company shares.'],
            ['fa-briefcase', '#f39c12', 'PMS & AIFs', 'Professional portfolio management and alternative investment funds.'],
            ['fa-globe', '#8e44ad', 'Gift City Investments', 'International financial services and investment opportunities.'],
            ['fa-file-contract', '#2ecc71', 'Bonds', 'Fixed income securities with regular interest payments.'],
            ['fa-piggy-bank', '#e74c3c', 'Corporate Deposits', 'Fixed deposits in corporate entities with attractive returns.'],
            // ['fa-user-shield', '#16a085', 'Term Insurance', 'Life coverage protection for financial security.'],
            // ['fa-heartbeat', '#d35400', 'Health Insurance', 'Comprehensive medical coverage for healthcare needs.'],
            ['fa-rocket', '#9b59b6', 'Venture Capital', 'Investment in early-stage and high-growth potential startups.'],
            ['fa-hand-holding-usd', '#2980b9', 'Business Loans', 'Financial solutions for business growth and expansion.']
        ];
    @endphp

    @foreach ($products as $product)
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
        <img src="{{Vite::asset('resources/theme/img/hiw-img-1.webp')}}" alt="Step 1 Icon" class="home-step-icon">
        <span class="home-step-number">1</span>
      </div>
      <h3 class="home-step-title">Register</h3>
      <p class="home-step-description">To Kickstart your Financial Journey.</p>
    </div>
    <!-- Step 2 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="{{Vite::asset('resources/theme/img/hiw-home-img-2.webp')}}" alt="Step 2 Icon" class="home-step-icon">
        <span class="home-step-number">2</span>
      </div>
      <h3 class="home-step-title">Analyse Finances</h3>
      <p class="home-step-description">Analysing income, liabilities, assets, and goals.</p>
    </div>
    <!-- Step 3 -->
    <div class="home-step">
        
      <div class="home-icon-container">
        <img src="{{Vite::asset('resources/theme/img/hiw-home-img-3.webp')}}" alt="Step 3 Icon" class="home-step-icon">
        <span class="home-step-number">3</span>
      </div>
      <h3 class="home-step-title">Risk Profiling</h3>
      <p class="home-step-description">Determining Risk Profile.</p>
    </div>
    <!-- Step 4 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="{{Vite::asset('resources/theme/img/financialplst4.webp')}}" alt="Step 4 Icon" class="home-step-icon">
        <span class="home-step-number">4</span>
      </div>
      <h3 class="home-step-title">Portfolio Construction</h3>
      <p class="home-step-description">Construct portfolio based on risk profile, surplus, and goals.</p>
    </div>
    <!-- Step 5 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="{{Vite::asset('resources/theme/img/hiw-home-img-4.webp')}}" alt="Step 5 Icon" class="home-step-icon">
        <span class="home-step-number">5</span>
      </div>
      <h3 class="home-step-title">Mapping Goals</h3>
      <p class="home-step-description">Connecting maturity of investments to goals.</p>
    </div>
    <!-- Step 6 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="{{Vite::asset('resources/theme/img/hiw-home-img-5.webp')}}" alt="Step 6 Icon" class="home-step-icon">
        <span class="home-step-number">6</span>
      </div>
      <h3 class="home-step-title">Regular Review</h3>
      <p class="home-step-description">Periodic engagement to review portfolio.</p>
    </div>
  </div>
</div>
<!-- How It Works End -->
    
<!-- Blog Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ $blog->link }}" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
                        <div class="meta-date text-center p-2">
    <span class="day">{{ \Carbon\Carbon::parse($blog->published_date)->format('d') }}</span>
    <span class="mos">{{ \Carbon\Carbon::parse($blog->published_date)->format('F') }}</span>
    <span class="yr">{{ \Carbon\Carbon::parse($blog->published_date)->format('Y') }}</span>
</div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="{{ $blog->link }}">{{ $blog->title }}</a></h3>
                            <p>{{ Str::limit($blog->description, 150) }}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{ $blog->link }}" class="btn custom-outline-btn">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>

    <!-- Blog End -->

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
                ['img/11.webp', 'Santhosh Krishna', 'Dallas, Texas, USA<br>Management Consultant, Autodesk Inc.', 'I am pleased to provide a testimonial for Dhanavruksha, whose exemplary service and expertise in the financial sector have been invaluable to my financial success. Demonstrating an in-depth understanding of market dynamics, their strategic guidance has been instrumental in aligning my investment decisions with my long-term financial objectives. Their professionalism and dedication to client success are commendable, and under their advisement, my portfolio has achieved remarkable growth. I unreservedly recommend Dhanavruksha to any individual or organization seeking proficient and dependable financial consulting services.'],
                ['img/12.webp', 'Anand & Divya', 'USA', 'Choosing Dhanavruksha was one of the best decisions I have made for my financial future. Their personalized approach stood out immediately. They took the time to understand my unique financial situation, risk tolerance, and long-term objectives before crafting a tailored investment strategy for me. Not only did they provide comprehensive investment options, but they also offered insightful guidance every step of the way. I\'ve seen significant growth in my investments and feel secure in my financial future. I wholeheartedly recommend Dhanavruksha Financial Services to anyone looking to build and protect their wealth with a trusted partner by their side.'],
                ['img/13.webp', 'Dr. Saravana Raja', 'Urologist, Tirunelveli, Tamil Nadu', 'I trust Dhanavruksha for my complete Wealth Management requirements. They have helped me to organise my finances effectively and to generate great returns. While the construction of my hospital building was going on, I suddenly needed urgent funds and reached out to DV. I was pleasantly surprised that my investments had grown to a sizeable value and that amount came as a huge relief to fund the construction. I would strongly recommend DV for wealth creation.'],
                ['img/14.webp', 'M. Venkataramana', 'EX-Indian Cricketer and Current Coach, Chennai', 'Being a part of Dhanavruksha has been an incredibly rewarding experience. Their expertise and strategic insights have significantly enhanced my investment journey. I highly recommend their services to anyone seeking reliable and knowledgeable financial guidance.'],
                ['img/15.webp', 'Dr. Nambi Appadurai', 'Director, WRI India, Chennai', 'Dhanavruksha has been managing my wealth ever since its inception. I always found them honest and professional in their approach. They have a very good understanding of today\'s complex issues surrounding wealth management. They maintain their benchmark for integrity in the sphere of financial advisory and wealth management - a quality which is very rare these days but essential to establish customer confidence. I am extremely happy to be associated with Dhanavruksha. I wish them all the best in their future endeavors.'],
                ['img/16.webp', 'A. Sivakumar', 'Principal Engineer, Bangalore', 'Dhanavruksha has been extremely useful and reliable finance management firm catering to all my financial management requirements. Their communication is simple and good. Very professional in their approach. Always available for any quick wealth investment decisions too. On a whole I would recommend anybody to use their services and benefit.'],
                ['img/17.webp', 'Rajagopalan Venkataraman', 'Ex - Chairman, Mastek Ltd, UK', 'I was introduced to Dhanavruksha by one of many of their diligent employees. I had expressed very clear performance expectations for my portfolio with them. My returns have far exceeded what I expected. Their client management is unique and treats my funds as their own. My experience over the last year gives me great confidence, and I intend enhancing my funds under their management substantially over the next few months. My best wishes for Dhanavruksha to grow substantially so that many more investors are benefitted by their financial acumen.'],
                ['img/18.webp', 'Swathi Balasubramanian', 'Business Development Manager, Government of Western Australia', 'My experience with Dhanavruksha has made my life easy in planning my overall finances. Savings and investment plans were tailor-made and customized as per my preference and comfort with the support of their expert team. They simplified the concept of financial planning and I have witnessed a substantial improvement in the way my assets and income have been managed. For anyone who is looking for sustainable and consistent financial support or a planner, this team is a definite go from my side.']
            ] as $index => $testimonial)
            <div class="testimonial {{ $index === 0 ? '' : 'hidden' }}">
                <img src="{{ Vite::asset('resources/theme/'.$testimonial[0]) }}" alt="Testimonial Photo">
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
<!-- JavaScript for Auto-Scroll & Navigation -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const testimonials = document.querySelectorAll('.testimonial');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        let currentIndex = 0;
        let autoScroll;

        const updateTestimonials = () => {
            testimonials.forEach((testimonial, index) => {
                testimonial.classList.toggle('hidden', index !== currentIndex);
            });
        };

        const startAutoScroll = () => {
            autoScroll = setInterval(() => {
                currentIndex = (currentIndex + 1) % testimonials.length;
                updateTestimonials();
            }, 7000);
        };

        prevButton.addEventListener('click', () => {
            clearInterval(autoScroll);
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateTestimonials();
            startAutoScroll();
        });

        nextButton.addEventListener('click', () => {
            clearInterval(autoScroll);
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateTestimonials();
            startAutoScroll();
        });

        updateTestimonials();
        startAutoScroll();

        // Hide navigation buttons on small screens
        function handleResize() {
            if (window.innerWidth <= 880) {
                prevButton.style.display = 'none';
                nextButton.style.display = 'none';
            } else {
                prevButton.style.display = 'block';
                nextButton.style.display = 'block';
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize();
    });
</script>
<!-- Optimized Testimonial Section End -->


<!-- Our Partners Start -->
<div class="home-our-partners-section">
  <div class="home-our-partners-container">
    <div class="home-our-partners-text">
      <h3>Our Clients</h3>
      <p>We're fortunate to have incredible clients.</p>
    </div>
    
    <!-- Iframe Instead of Logos -->
    <iframe  
      src="https://resources.investwellonline.com/websiteitem/amc-logos-new/amc.html" 
      class="home-our-partners-iframe" 
      title="AMC Logos" 
      frameborder="0" 
      width="100%" 
      height="120"> <!-- Adjust height as needed -->
    </iframe>

  </div>
</div>
<!-- Our Partners End -->


<style>
/* Our Partners Section */
.home-our-partners-section {
  margin: 50px auto;
  padding: 20px;
  background-color: white;
  color: #333;
  width: 100%;
  max-width: 1200px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.home-our-partners-text h3 {
  font-size: 2rem;
  color: #d4af37;
  text-align: left;
}

.home-our-partners-marquee-container {
  overflow: hidden;
  width: 100%;
  position: relative;
}

.home-our-partners-marquee {
  display: flex;
  width: 200%;
  animation: scroll-left 10s linear infinite;
}

.logo-wrapper {
  display: flex;
  gap: 20px;
}

.logo-wrapper img {
  height: 40px;
  width: auto;
  transition: transform 0.3s ease;
}

.logo-wrapper img:hover {
  transform: scale(1.2);
}

/* Keyframes for Continuous Scrolling */
@keyframes scroll-left {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50%);
  }
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .home-our-partners-text h3 {
    font-size: 1.5rem;
  }
  .logo-wrapper img {
    height: 30px;
  }
}

@media (max-width: 480px) {
  .home-our-partners-text h3 {
    font-size: 1.3rem;
  }
  .logo-wrapper img {
    height: 25px;
  }
}
</style>

<!-- Our Partners End -->
<!-- Our Partners End -->

<style>
    .home-our-partners-iframe {
    animation: slowScroll linear infinite;
    animation-duration: 20s; /* Adjust timing */
}

</style>
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