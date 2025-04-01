@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  style="background: url('{{ asset('img/comapnyprofilehed.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Company Profile</h1>
        <!-- <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
                <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
            </ol>
        </nav> -->
    </div>
</div>
    <!-- Page Header End -->

    <!-- Header Start -->
<div class="container-fluid header p-0 mb-5" style="background-color: #d0a94e;">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-4 text-white mb-5">
                Empowering Your Financial Future, One Smart Decision at a Time.
            </h1>
            <div class="row g-4">
                @foreach ([['counter-trusted', 123, 'Trusted By'], ['counter-leaders', 1234, 'Industry Leaders'], ['counter-clients', 12345, 'Clients']] as $counter)
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 id="{{ $counter[0] }}" class="text-white mb-1" data-toggle="counter-up">{{ $counter[1] }}</h2>
                            <p class="text-light mb-0">{{ $counter[2] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('img/header=5.webp') }}" alt="Header Image">
                    <div class="owl-carousel-text">
                        <h4 class="display-1 text-white mb-0"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/team-1.webp" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/handsh-3.webp" alt=""
                            style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                    <div class="info-card">
                        <p>Dhana- (Money), Vruksha(Tree) – Vision of founders is to nurture & grow wealth for investors
                            at various life
                            stages, through quality advice and curated research, handholding throughout the wealth
                            creation journey by
                            periodic and intense portfolio reviews ensuring ideal asset allocation to meet their
                            financial goals.</p>
                    </div>
                   
                    <p><i class="far fa-check-circle text-primary me-3"></i>Client-Centric Approach</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Expertise and Knowledge</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Regulatory Compliance</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<!-- USP Section Start -->
<div class="container-xxl">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; padding-top:20px">
        <p class="fs-5 fw-medium" style="color: #B37F2B;">Our USP</p>
    </div>
    <div class="section sec-features">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex">
                        <span class="bi-shield-fill-check"></span>
                        <div>
                            <h3>Foundation of Trust</h3>
                            <p>Committed with our knowledge-driven and client-centric advisory to be the most trusted Wealth Management Specialist for our customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature d-flex">
                        <span class="bi-book-fill"></span>
                        <div>
                            <h3>Comprehensive Knowledge</h3>
                            <p>Thrive to be well-updated on every development related to Personal Finance to be the go-to resource for wealth solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature d-flex">
                        <span class="bi-binoculars-fill"></span>
                        <div>
                            <h3>Micro-optics to Risk</h3>
                            <p>In-depth assessment of the risk of every investment product to ensure our customers remain in utmost peace regarding risk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- USP Section End -->

<!-- Card Section -->
<div class="company-profile">
        <div class="company-profile-container">
            <h1 class="company-profile-heading">Our Vision & Strength</h1>
            <div class="company-profile-cards-section">
                <div class="company-profile-card">
                    <img src="img/c1.png" alt="Mission">
                    <h2>Our Mission</h2>
                    <ul>
                        <li>Build a base of 1 lakh customers each with a minimum portfolio of Rs.1 crore and scale up</li>
                        <li>Create wealth for investors through uncompromised advisory and quality products</li>
                        <li>Ethical Advisory keeping the customers’ interest as paramount</li>
                        <li>Synergize the power of technology and excellence of human advisory</li>
                        <li>Financial inclusion through quality Wealth Management to the masses</li>
                        <li>Build and train a large team of Business Associates for faster penetration</li>
                        </ul>
                </div>
                <div class="company-profile-card">
                    <img src="img/c2.png" alt="Values">
                    <h2>Our Values</h2>
                    <ul>
                        <li>To educate the youth right from their college to empower them to make quality investments</li>
                        <li>Conduct regular sessions on Financial Literacy to the youth at Educational institutions and Corporates</li>
                        <li>Regular Social Media Communication to guide all sections of investors</li>
                        <li>To groom and build a large team of committed Wealth Management professionals through constant training and mentoring</li>
                    </ul>
                </div>
                <div class="company-profile-card">
                    <img src="img/c3.png" alt="Strengths">
                    <h2>Our Strengths</h2>
                    <ul>
                        <li>Best of both worlds of Corporate Advisory and Individual Financial Advisors (IFA)</li>
                        <li>High level of accountability of IFAs with the aim of having long-term relationships through quality and unbiased advisory</li>
                       <li>Institutionalization of strategy, ideas, and research with the team’s combined work
                       experience of over 13 decades across the spectrum of Financial Services industry</li>    
                      <li>Personal Financial Advisory complemented by technology for fast and seamless
                      execution</li>
                      <li>Constant communication with customers by instantly updating on every important
                      market event and lucrative product opportunities</li>
                    <li>Swift action to replace products slipping into prolonged underperformance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- card section end -->

<style>
.owl-carousel .owl-carousel-item {
    position: relative;
    overflow: hidden; 
}

.owl-carousel .owl-carousel-item img {
    width: 100%; 
    height: 500px;
    object-fit: cover; 
}

.owl-nav {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
    z-index: 10;
}

.owl-prev, .owl-next {
    background: rgba(0, 0, 0, 0.5); 
    color: #fff; 
    border: none;
    border-radius: 50%; 
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px; 
    cursor: pointer;
}

.owl-prev {
    left: 10px;
}

.owl-next {
    right: 10px;
}

.owl-prev:hover, .owl-next:hover {
    background: rgba(0, 0, 0, 0.8); 
}

    </style>

    <!-- Ethics Section with Image END -->
    <script src="js/company_main.js"></script>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection