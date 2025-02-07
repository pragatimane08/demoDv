@extends('layouts.app') <!-- If you have a layout -->

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>Dhanavruksha</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock <span
                                            class="auto-type" style="color: #faeb95;"> </span></h1>
                                    <a href=""
                                        class="btn custom-btn rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <video class="w-100" autoplay loop muted playsinline>
                        <!-- The 'w-100' class ensures the video takes the full width of its container -->
                        <source src="img/save.mp4" type="video/mp4">
                        <!-- Provide a fallback message if the video format is not supported -->
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to
                                        <strong>Dhanavruksha</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Unlock Financial Freedom
                                    </h1>
                                    <a href=""
                                        class="btn custom-btn rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



<!-- About Us - Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/aboutus-3.jpg" alt=""
                        style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/project-3.jpg" alt=""
                        style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-custom text-uppercase mb-2">About Us</h6>
                    <h1 class="display-6 mb-4">We Help Clients to Achieve Financial Freedom</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                        Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                        diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet</p>
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-custom me-2"></i>Expertise
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-custom me-2"></i>Technical Proficiency
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-custom me-2"></i>Strategic Thinking
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-custom me-2"></i>Risk Management Expertise
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn custom-outline-btn" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us - End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->
    <div class="service-container">
        <div class="golden-curve"></div>
        </div>

<!-- services  start-->
 <!-- Service Start -->
 <div class="home-services home-offer-container">
    <div class="home-text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 mb-5">Our Services</h1>
    </div>
    <div class="home-services home-offer-row">
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <img src="img/icon/mutual fund.png" alt="Wealth Management Icon">
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
                    <img src="img/icon/equity.png" alt="Financial Planning Icon">
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
                    <img src="img/icon/seminar.png" alt="Portfolio Restructuring Icon">
                </div>
                <h5>Insurance and Investment Portfolio Restructuring</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('Insurance_pr') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <img src="img/icon/mutual fund.png" alt="Wealth Management Icon">
                </div>
                <h5>Free Review of External Portfolio</h5>
            </div>
            <div class="home-service-btn">
                <a href="{{ route('external-Portfolio') }}">Read More <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </div>
    </div>

    <div class="home-services home-offer-row">
        <div class="home-service-item">
            <div class="home-service-text">
                <div class="home-btn-square">
                    <img src="img/icon/mutual fund.png" alt="Wealth Management Icon">
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
                    <img src="img/icon/equity.png" alt="Financial Planning Icon">
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
                    <img src="img/icon/seminar.png" alt="Portfolio Restructuring Icon">
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
                    <img src="img/icon/mutual fund.png" alt="Wealth Management Icon">
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

 <!-- services end -->
<!--Produces Offered Start-->
<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="home-products-section-container">
    <h2 class="products-heading">Products Offered</h2>

    <!-- Mutual Funds -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-chart-line" style="color: #ff5733; font-size: 40px;"></i>
        </div>
        <h3>Mutual Funds</h3>
        <p>Professional management of pooled funds invested in diversified portfolios.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- Equities -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-sack-dollar" style="color: #3498db; font-size: 40px;"></i>
        </div>
        <h3>Equities</h3>
        <p>Stock market investments in publicly traded companies.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- Unlisted Stocks -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-building" style="color: #27ae60; font-size: 40px;"></i>
        </div>
        <h3>Unlisted Stocks</h3>
        <p>Investment opportunities in private company shares.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- PMS & AIFs -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-briefcase" style="color: #f39c12; font-size: 40px;"></i>
        </div>
        <h3>PMS & AIFs</h3>
        <p>Professional portfolio management and alternative investment funds.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>
</div>

<div class="home-products-section-container">
    <!-- Gift City Investments -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-globe" style="color: #8e44ad; font-size: 40px;"></i>
        </div>
        <h3>Gift City Investments</h3>
        <p>International financial services and investment opportunities.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- Bonds -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-file-contract" style="color: #2ecc71; font-size: 40px;"></i>
        </div>
        <h3>Bonds</h3>
        <p>Fixed income securities with regular interest payments.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- Corporate Deposits -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-piggy-bank" style="color: #e74c3c; font-size: 40px;"></i>
        </div>
        <h3>Corporate Deposits</h3>
        <p>Fixed deposits in corporate entities with attractive returns.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- Term Insurance -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-user-shield" style="color: #16a085; font-size: 40px;"></i>
        </div>
        <h3>Term Insurance</h3>
        <p>Life coverage protection for financial security.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>
</div>

<div class="home-products-section-container">
    <!-- Health Insurance -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-heartbeat" style="color: #d35400; font-size: 40px;"></i>
        </div>
        <h3>Health Insurance</h3>
        <p>Comprehensive medical coverage for healthcare needs.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- Venture Capital -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-rocket" style="color: #9b59b6; font-size: 40px;"></i>
        </div>
        <h3>Venture Capital</h3>
        <p>Investment in early-stage and high-growth potential startups.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>

    <!-- Business Loans -->
    <div class="home-products-section-card">
        <div class="home-products-section-image">
            <i class="fa-solid fa-hand-holding-usd" style="color: #2980b9; font-size: 40px;"></i>
        </div>
        <h3>Business Loans</h3>
        <p>Financial solutions for business growth and expansion.</p>
        <!-- <div class="home-products-section-dots">
            <span class="home-products-section-dot active"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
            <span class="home-products-section-dot"></span>
        </div> -->
    </div>
</div>

<!--Products offered end -->
<!-- How It Works Section -->

    <!-- How It Works - Start -->
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
      <h3 class="home-step-title">Elaborate Engagement on Your Financials & Investments</h3>
      <p class="home-step-description">Understand your financial situation, investment goals, and aspirations to create a tailored strategy.</p>
    </div>
    <!-- Step 3 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-3.png" alt="Step 3 Icon" class="home-step-icon">
        <span class="home-step-number">3</span>
      </div>
      <h3 class="home-step-title">Assessment of Your Risk Profile</h3>
      <p class="home-step-description">Analyze your risk appetite to determine the best investment approach for you.</p>
    </div>
    <!-- Step 4 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-4.png" alt="Step 4 Icon" class="home-step-icon">
        <span class="home-step-number">4</span>
      </div>
      <h3 class="home-step-title">Constructing/Reconstructing Your Portfolio</h3>
      <p class="home-step-description">Build or optimize your investment portfolio to align with your financial objectives.</p>
    </div>
    <!-- Step 5 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-5.png" alt="Step 5 Icon" class="home-step-icon">
        <span class="home-step-number">5</span>
      </div>
      <h3 class="home-step-title">Mapping Investments to Financial Goals</h3>
      <p class="home-step-description">Ensure your investments are strategically mapped to achieve specific financial milestones.</p>
    </div>
    <!-- Step 6 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-6.png" alt="Step 6 Icon" class="home-step-icon">
        <span class="home-step-number">6</span>
      </div>
      <h3 class="home-step-title">Regular Monitoring & Review of Portfolio</h3>
      <p class="home-step-description">Continuously track and evaluate your investments for optimal performance.</p>
    </div>
    <!-- Step 7 -->
    <div class="home-step">
      <div class="home-icon-container">
        <img src="img/hiw-home-img-7.png" alt="Step 7 Icon" class="home-step-icon">
        <span class="home-step-number">7</span>
      </div>
      <h3 class="home-step-title">Timely Updates on Market Events & Their Impact on Investments</h3>
      <p class="home-step-description">Stay informed about market trends and how they affect your portfolio, ensuring proactive financial decision-making.</p>
    </div>
  </div>
</div>
<!-- How It Works - End -->
    <!-- How It works end section -->

    

<!-- Blog Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ $blog->link }}" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
                            <div class="meta-date text-center p-2">
                                <span class="day">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</span>
                                <span class="mos">{{ \Carbon\Carbon::parse($blog->created_at)->format('F') }}</span>
                                <span class="yr">{{ \Carbon\Carbon::parse($blog->created_at)->format('Y') }}</span>
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

    <!-- Blog End -->

    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-custom">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
         
    <div class="testimonials-container">
  <div class="nav-buttons">
    <button id="prev">&#x2039;</button>
    <button id="next"> &#x203A;</button>
  </div>
   <!-- Testimonial 1 -->
   <div class="testimonial">
    <img src="img/home-testi.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>Santhosh Krishna</h3>
      <h4>Dallas, Texas, USA<br>Management Consultant, Autodesk Inc.</h4>
      <div class="stars">★★★★★</div>
      <p>
        I am pleased to provide a testimonial for Dhanavruksha, whose exemplary service and expertise in the financial sector have been invaluable to my financial success. Demonstrating an in-depth understanding of market dynamics, their strategic guidance has been instrumental in aligning my investment decisions with my long-term financial objectives. Their professionalism and dedication to client success are commendable, and under their advisement, my portfolio has achieved remarkable growth. I unreservedly recommend Dhanavruksha to any individual or organization seeking proficient and dependable financial consulting services.
      </p>
    </div>
  </div>

  <!-- Testimonial 2 -->
  <div class="testimonial hidden">
    <img src="img/home-testi2.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>Anand & Divya</h3>
      <h4>USA</h4>
      <div class="stars">★★★★★</div>
      <p>
        Choosing Dhanavruksha was one of the best decisions I've made for my financial future. Their personalized approach stood out immediately. They took the time to understand my unique financial situation, risk tolerance, and long-term objectives before crafting a tailored investment strategy for me. I wholeheartedly recommend Dhanavruksha Financial Services.
      </p>
    </div>
  </div>
  
  <!-- Testimonial 3 -->
  <div class="testimonial hidden">
    <img src="img/home-testi3.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>Dr. Saravana Raja</h3>
      <h4>Urologist, Tirunelveli, Tamil Nadu</h4>
      <div class="stars">★★★★★</div>
      <p>
        I trust Dhanavruksha for my complete wealth management requirements. They have helped me to organize my finances effectively and to generate great returns. I strongly recommend DV for wealth creation.
      </p>
    </div>
  </div>
  
  <!-- Testimonial 4 -->
  <div class="testimonial hidden">
    <img src="img/home-testi4.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>M. Venkataramana</h3>
      <h4>EX-Indian Cricketer and Current Coach, Chennai</h4>
      <div class="stars">★★★★★</div>
      <p>
        Being a part of Dhanavruksha has been an incredibly rewarding experience. Their expertise and strategic insights have significantly enhanced my investment journey. I highly recommend their services.
      </p>
    </div>
  </div>
  
  <!-- Testimonial 5 -->
  <div class="testimonial hidden">
    <img src="img/home-testi5.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>Dr. Nambi Appadurai</h3>
      <h4>Director, World Resources Institute (WRI India), Chennai</h4>
      <div class="stars">★★★★★</div>
      <p>
        Dhanavruksha has been managing my wealth ever since its inception. They maintain their benchmark for integrity in the sphere of financial advisory and wealth management, and I am extremely happy to be associated with them.
      </p>
    </div>
  </div>
  
  <!-- Testimonial 6 -->
  <div class="testimonial hidden">
    <img src="img/home-testi6.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>A. Sivakumar</h3>
      <h4>Principal Engineer, Bangalore</h4>
      <div class="stars">★★★★★</div>
      <p>
        Dhanavruksha has been extremely useful and reliable. Their communication is simple and professional. On the whole, I would recommend anybody to use their services and benefit.
      </p>
    </div>
  </div>
  
  <!-- Testimonial 7 -->
  <div class="testimonial hidden">
    <img src="img/home-testi7.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>Rajagopalan Venkataraman</h3>
      <h4>Ex - Chairman, Mastek Ltd, UK</h4>
      <div class="stars">★★★★★</div>
      <p>
        My experience with Dhanavruksha over the last year gives me great confidence, and I intend to enhance my funds under their management substantially. My best wishes for Dhanavruksha's growth.
      </p>
    </div>
  </div>
  
  <!-- Testimonial 8 -->
  <div class="testimonial hidden">
    <img src="img/home-testi8.png" alt="Testimonial Photo">
    <div class="testimonial-content">
      <h3>Swathi Balasubramanian</h3>
      <h4>Business Development Manager, Government of Western Australia</h4>
      <div class="stars">★★★★★</div>
      <p>
        My experience with Dhanavruksha has made my life easy in planning my overall finances. I have witnessed a substantial improvement in the way my assets and income have been managed. Highly recommended!
      </p>
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
    <!-- Testimonial End -->

        </div>
    </div>


    <!-- Our Partner Start -->
    <div class="home-our-partners-section">
  <div class="home-our-partners-container">
    <div class="home-our-partners-text">
      <h3>Our Partners</h3>
      <p>We're fortunate to have incredible Partners</p>
    </div>
    <iframe 
      src="https://resources.investwellonline.com/websiteitem/amc-logos-new/amc.html" 
      class="home-our-partners-iframe" 
      title="AMC Logos" 
      frameborder="0">
    </iframe>
  </div>
</div>
<!-- Our Partner End -->
<style>
  /*** Service ***/
/* Global Styling for Services Section */
.home-services.home-offer-container {
  width: calc(100% - 100px); /* 50px left and right margins */
  height: auto;
  padding: 0 20px; /* Optional padding for inner spacing */
  /* background-color: #f9f9f9; */
  box-sizing: border-box;
  margin-left: 50px;
  margin-right: 50px;
}

/* Center the heading in the middle of the page */
.home-text-center {
  text-align: center;
  margin-bottom: 32px;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 10vh; /* Set the minimum height to take up 60% of the viewport */
}

.home-text-center h1 {
  font-size: 40px;
  margin: 0;
  color: #333333;
}

/* Services Row Styling */
.home-services.home-offer-row {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  margin-bottom: 32px;
  flex-wrap: wrap;
}

/* Service Item Styling */
.home-service-item {
  flex: 1 1 calc(25% - 30px); /* Adjusted to account for margin and gap */
  max-width: calc(25% - 30px); /* Ensuring the card doesn’t overflow */
  background: #FFFFFF;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  overflow: hidden;
  height: 250px;
}

.home-service-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.home-service-text {
  padding: 24px;
}

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

.home-service-text h5 {
  margin-bottom: 16px;
  font-size: 19px;
  color: #333333;
  font-weight: bold;
}

.home-service-text p {
  margin: 0;
  font-size: 16px;
  color: #666666;
  line-height: 1.5;
}

.home-service-btn {
  margin: 0;
  width: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}

.home-service-btn a {
  display: inline-block;
  background: #ffffff;
  padding: 12px 16px;
  border: 1px solid #f0f0f0;
  border-radius: 5px;
  text-decoration: none;
  font-size: 16px;
  color: #B37F2B;
  font-weight: 600;
  transition: all 0.3s ease;
  margin: 0 10px;
}

.home-service-btn a:hover {
  background: #f4f4f4;
  color: #b37228;
}

.home-service-btn a i {
  margin-left: 8px;
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
  .home-service-item {
      flex: 1 1 calc(33.33% - 30px);
      max-width: calc(33.33% - 30px);
  }
}

@media (max-width: 991px) {
  .home-service-item {
      flex: 1 1 calc(50% - 30px);
      max-width: calc(50% - 30px);
  }
}

@media (max-width: 767px) {
  .home-service-item {
      flex: 1 1 100%;
      max-width: 100%;
  }

  .home-text-center h1 {
      font-size: 32px;
  }
}

@media (max-width: 576px) {
  .home-text-center h1 {
      font-size: 28px;
  }
}
</style>

    @endsection