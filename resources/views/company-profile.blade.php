@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Company Profile</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Company Profile</li>
                </ol>
            </nav>
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
                    <img class="img-fluid" src="{{ asset('img/header=5.jpg') }}" alt="Header Image">
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
                        <img class="img-fluid rounded w-75 align-self-end" src="img/team-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/handsh-3.jpeg" alt=""
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
                    <p><i class="far fa-check-circle text-primary me-3"></i>Regulatory Compliance</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Client-Centric Approach</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Expertise and Knowledge</p>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Ethics Section -->
<div class="container-xxl">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; padding-top:20px">
        <p class="fs-5 fw-medium" style="color: #B37F2B;">Our Ethics</p>
    </div>
    <div class="section sec-features">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex">
                        <span class="bi-bag-check-fill"></span>
                        <div>
                            <h3>Build Financial</h3>
                            <p>Innovative ideas the core team desires to implement across all walks of Financial Services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature d-flex">
                        <span class="bi-wallet-fill"></span>
                        <div>
                            <h3>Invest for the Future</h3>
                            <p>Thrive on feedback received from customers in various organizations the team has worked with.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature d-flex">
                        <span class="bi-pie-chart-fill"></span>
                        <div>
                            <h3>Responsible Banking</h3>
                            <p>Implement learnings from various events that have influenced & impacted investments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature d-flex">
                        <span class="bi-graph-up-arrow"></span>
                        <div>
                            <h3>Customer-Centric Service</h3>
                            <p>Before and after-sales service expectation of customers in Investment Advisory.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature d-flex">
                        <span class="bi-globe"></span>
                        <div>
                            <h3>Vision for Economic Growth</h3>
                            <p>Vision of the founders to take quality investment advisory to the possible last mile for progressive economic development of the country.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ethics Section End -->

<!-- Card Section -->
<div class="company-profile">
        <div class="company-profile-container">
            <h1 class="company-profile-heading">Our Vision & Strength</h1>
            <div class="company-profile-cards-section">
                <div class="company-profile-card">
                    <img src="img/target.png" alt="Mission">
                    <h2>Our Mission</h2>
                    <ul>
                        <li>Build a base of 1 lakh customers each with a minimum portfolio of Rs.1 crore and scale up</li>
                        <li>Create wealth for investors through uncompromised advisory quality and quality products</li>
                        <li>Ethical Advisory keeping the customers’ interest as paramount</li>
                        <li>Synergize the power of technology and excellence of human advisory</li>
                        <li>Financial inclusion through quality Wealth Management to the masses</li>
                        <li>Build and train a large team of Business Associates for faster penetration</li>
                    </ul>
                </div>
                <div class="company-profile-card">
                    <img src="img/value.png" alt="Values">
                    <h2>Our Values</h2>
                    <ul>
                        <li>To educate the youth right from early days to empower them to make quality investments</li>
                        <li>To groom and Build a large team of professionals through regular training and mentoring</li>
                    </ul>
                </div>
                <div class="company-profile-card">
                    <img src="img/determination.png" alt="Strengths">
                    <h2>Our Strengths</h2>
                    <ul>
                        <li>Best of both worlds of Corporate Advisory and Individual Financial Advisors (IFA)</li>
                        <li>High level of accountability of IFAs with the aim of having long-term relationships through quality and unbiased advisory</li>
                        <li>Institutionalization of strategy, ideas, and research as the team has a combined work experience of 132 years in the Financial Services sector</li>
                        <li>Human interface-based Financial Advisory</li>
                        <li>Customizes advice based on dynamic psychological shifts of investors with technology support</li>
                        <li>Widen the reach, simplify processes, and ensure faster communication during market crises</li>
                        <li>Course correct with appropriate realignment of portfolio</li>
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