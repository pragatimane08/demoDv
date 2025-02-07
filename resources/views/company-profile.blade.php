<!-- @extends('layouts.app') -->
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Company Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Company Profile</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Header Start -->
    <div class="container-fluid header  p-0 mb-5" style="background-color: #d0a94e;">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Empowering Your Financial Future, One Smart Decision at a Time.
                </h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 id="counter-trusted" class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Trusted By</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 id="counter-leaders" class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Industry Leaders</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 id="counter-clients" class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/header=5.jpg" alt="">
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


    <!-- Ethics Section with Image -->
    </div>
    <!--Ethics--->
    <div class=" container-xxl">
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
                            <h3>Build financial</h3>
                            <p>Innovative ideas the core team desires to implement across all walks of Financial Services. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature d-flex">
                        <span class="bi-wallet-fill"></span>
                        <div>
                            <h3>Invest for the future</h3>
                            <p>Thrive on feedback received from customers in various organizations the team has worked with. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature d-flex">
                        <span class="bi-pie-chart-fill"></span>
                        <div>
                            <h3>Responsible banking</h3>
                            <p>Implement Learnings from Various events that have influenced & impacted investments. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!--Ethics-end-->

<!-- Card Section -->
<div class="company-profile-cards-section">
    <div class="company-profile-card">
        <img src="img/target.png" alt="Card Image 1">
        <h2>Our Mission</h2>
        <ul>
            <li>To deliver innovative financial solutions that drive growth and success for our clients.</li>
        </ul>
    </div>
    <div class="company-profile-card">
        <img src="img/value.png" alt="Card Image 2">
        <h2>Our Values</h2>
        <ul>
            <li>Integrity, client focus, innovation, and excellence guide everything we do.</li>
        </ul>
    </div>
    <div class="company-profile-card">
        <img src="img/determination.png" alt="Card Image 3">
        <h2>Our Strengths</h2>
        <ul>
            <li>Our expert team, tailored solutions, proven success, and advanced technology set us apart.</li>
        </ul>
    </div>
</div>
<!-- card section end -->
 
    <!-- Favicon -->
    
    <!-- <link href="css/ionicons.min.css" rel="stylesheet"> -->

<style>
    /* Adjust the size of the images */
.owl-carousel .owl-carousel-item {
    position: relative;
    overflow: hidden; /* Ensure images don't overflow their container */
}

.owl-carousel .owl-carousel-item img {
    width: 100%; /* Ensure the image takes up the full width of the item */
    height: 500px; /* Maintain the aspect ratio of the image */
    object-fit: cover; /* Ensure the image covers the container without distortion */
}

/* Custom navigation buttons */
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
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    color: #fff; /* White color for the icons */
    border: none;
    border-radius: 50%; /* Round buttons */
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px; /* Adjust icon size */
    cursor: pointer;
}

.owl-prev {
    left: 10px;
}

.owl-next {
    right: 10px;
}

.owl-prev:hover, .owl-next:hover {
    background: rgba(0, 0, 0, 0.8); /* Darker background on hover */
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