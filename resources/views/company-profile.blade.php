<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dhanavruksha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

<style>
 /* Cards Section */
.cards-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 50px 20px; /* Adjusted padding for better responsiveness */
    background-color: #ffffff;
    margin: 20px;
    margin-bottom: 50px;
}

.card {
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    width: 100%;
    max-width: 400px; /* Reduced max-width for better layout on smaller screens */
    height: auto; /* Let height adjust based on content */
    margin: 20px; /* Added margin for spacing between cards */
    padding: 20px;
    transition: transform 0.3s ease;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    text-align: center;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    display: block;
    margin: 0 auto;
    max-width: 200px; /* Reduced max-width for responsiveness */
    max-height: 100px;
    width: 100%;
    height: auto;
    object-fit: contain;
    margin-top: 10px;
}

/* Responsive Adjustments */
@media (max-width: 1024px) {
    .cards-section {
        padding: 40px 15px; /* Reduced padding for medium-sized screens */
    }
    .card {
        max-width: 350px; /* Adjusted max-width for tablets */
    }
}

@media (max-width: 768px) {
    .cards-section {
        justify-content: center; /* Center cards on smaller screens */
        padding: 30px 10px; /* Reduced padding */
    }
    .card {
        max-width: 100%; /* Full width on smaller screens */
        margin: 15px 0; /* Stack cards with vertical spacing */
    }
}

@media (max-width: 480px) {
    .card {
        padding: 15px; /* Reduced padding on mobile */
    }
    .card img {
        max-width: 150px; /* Smaller image size on mobile */
    }
}

</style>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid text-white d-none d-lg-flex" style="background-color: #06060b;">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <img src="img/dhanavruksha-logo-new.png" alt="Logo" class="img-fluid" style="max-height: 60px;">

                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


       <!-- Navbar Start -->
   <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0"></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('company-profile') }}" class="dropdown-item">Company Profile</a>
                                <a href="{{ route('team') }}" class="dropdown-item">Team</a>

                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('equity') }}" class="dropdown-item">Equity And Derivatives</a>
                                <a href="{{ route('mutual-funds') }}" class="dropdown-item">Mutual Funds</a>
                                <a href="{{ route('pms-aif') }}" class="dropdown-item">PMS-AIF</a>
                                <a href="{{ route('fixed-deposits') }}" class="dropdown-item">Fixed Deposits</a>
                                <a href="{{ route('bonds') }}" class="dropdown-item">Bonds</a>
                                

                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('wealth-management') }}" class="dropdown-item">Wealth Management</a>
                            <a href="{{ route('financial-planning') }}" class="dropdown-item">Financial Planning</a>
                            <a href="{{ route('tax-planning') }}" class="dropdown-item">Tax Planning</a>
                            <a href="{{ route('portfolio-restucturing') }}" class="dropdown-item">Portfolio Restructuring</a>
                            <a href="{{ route('child-future-saving') }}" class="dropdown-item"> Child Future Saving</a>    
                            <a href="{{ route('retirmentplanning') }}" class="dropdown-item">Retirement Planning</a>
                            <a href="{{ route('seminars') }}" class="dropdown-item">Investment Seminar For Youth</a>


                            </div>
                        </div>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Investor Zone</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('newsletter') }}" class="dropdown-item">Newsletter</a>
                                <a href="{{ route('financial-calculator') }}" class="dropdown-item">Financial calculator</a>
                                <a href="{{ route('downloads') }}" class="dropdown-item">Downloads</a>
                                <a href="{{ route('blogs') }}" class="dropdown-item">Blogs</a>
                                <a href="{{ route('learning') }}" class="dropdown-item">Learning</a>

                            </div>
                        </div>
                        <a href="{{route('kyc')}}" class="nav-item nav-link">KYC</a>
                        <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact</a>

                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{ route('login-page') }}" class="btn custom-btn rounded-pill py-2 px-3">Client Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

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
     <!-- Card Section -->
     <div class="cards-section">
        <div class="card">
            <img src="img/target.png" alt="Card Image 1">
            <h2>Our Mission</h2>
            <ul>
                <li>To deliver innovative financial solutions that drive growth and success for our clients.</li>
            </ul>
        </div>
        <div class="card">
            <img src="img/value.png" alt="Card Image 2">
            <h2>Our Values</h2>
            <ul>
                <li>Integrity, client focus, innovation, and excellence guide everything we do.</li>
            </ul>
        </div>
        <div class="card">
            <img src="img/determination.png" alt="Card Image 3">
            <h2>Our Strengths</h2>
            <ul>
                <li> Our expert team, tailored solutions, proven success, and advanced technology set us apart.</li>
            </ul>
        </div>
    </div>
    <!-- Ethics Section with Image END -->
    <script src="js/company_main.js"></script>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Dhanavruksha</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: [' Growth', ' Financial Freedom'],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>