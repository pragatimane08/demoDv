<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dhanavruksha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
        .cards-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 50px 20px;
            /* Adjusted padding for better responsiveness */
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
            max-width: 400px;
            /* Reduced max-width for better layout on smaller screens */
            height: auto;
            /* Let height adjust based on content */
            margin: 20px;
            /* Added margin for spacing between cards */
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
            max-width: 200px;
            /* Reduced max-width for responsiveness */
            max-height: 100px;
            width: 100%;
            height: auto;
            object-fit: contain;
            margin-top: 10px;
        }

        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .cards-section {
                padding: 40px 15px;
                /* Reduced padding for medium-sized screens */
            }

            .card {
                max-width: 350px;
                /* Adjusted max-width for tablets */
            }
        }

        @media (max-width: 768px) {
            .cards-section {
                justify-content: center;
                /* Center cards on smaller screens */
                padding: 30px 10px;
                /* Reduced padding */
            }

            .card {
                max-width: 100%;
                /* Full width on smaller screens */
                margin: 15px 0;
                /* Stack cards with vertical spacing */
            }
        }

        @media (max-width: 480px) {
            .card {
                padding: 15px;
                /* Reduced padding on mobile */
            }

            .card img {
                max-width: 150px;
                /* Smaller image size on mobile */
            }
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
    <div class="Topbar-container-fluid text-white d-none d-lg-flex" style="background-color: #06060b;">
        <div class="Topbar-container py-3">
            <div class="Topbar-d-flex align-items-center">
                <!-- Logo Section -->
                <a href="index.html" class="d-flex align-items-center">
                    <img src="img/dhanavruksha-logo-new.png" alt="Logo" class="img-fluid" style="max-height: 60px; margin-left: 50px;">
                </a>
                <!-- Right Section -->
                <div class="Topbar-right d-flex align-items-center ms-3" style="flex-wrap: nowrap;">
                    <small class="d-flex align-items-center me-3">
                        <i class="fa fa-envelope me-2"></i>customerservice@dhanavruksha.in
                    </small>
                    <small class="d-flex align-items-center me-3">
                        <i class="fa fa-phone-alt me-2"></i>+91 7305888454
                    </small>
                    <a href="{{ route('schedulemeeting') }}" class="nav-item nav-link d-flex align-items-center me-3">
                        <i class="fa fa-calendar-alt me-2"></i>Schedule Meeting
                    </a>
                    <a href="{{ route('opendemata') }}" class="nav-item nav-link d-flex align-items-center">
                        <i class="fa fa-briefcase me-2"></i>Open Demat Account
                    </a>
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
     
    <!-- Sidebar start -->
<div class="float-slider-page">
    <div class="floating-buttons">
        <a href="https://www.facebook.com/people/DhanaVruksha-Financial-services/100086682897556/" target="_blank" class="button facebook">
            <span class="tooltip facebook">Facebook</span>
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.linkedin.com/company/dhanavruksha-financial-services-private-ltd/" target="_blank" class="button linkedin">
            <span class="tooltip">LinkedIn</span>
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a href="https://www.instagram.com/dhanavruksha_" target="_blank" class="button instagram">
            <span class="tooltip instagram">Instagram</span>
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://twitter.com/dhanavruksha" target="_blank" class="button twitter">
            <span class="tooltip twitter">Twitter</span>
            <i class="fa-brands fa-twitter"></i>
        </a>
    </div>

    <div class="contact-buttons">
        <a href="https://wa.me/917305888454" target="_blank" class="contact-button whatsapp">
            <span class="tooltip whatsapp">WhatsApp</span>
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="tel:+917305888454" class="contact-button phone">
            <span class="tooltip phone">Phone</span>
            <i class="fa-solid fa-phone"></i>
        </a>
        <div class="contact-button hide" onclick="toggleContactButtons()">
            <span class="tooltip">Hide</span>
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</div>
<!-- /Sidebar end -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <script>
        function toggleContactButtons() {
            const whatsappButton = document.querySelector('.contact-button.whatsapp');
            const phoneButton = document.querySelector('.contact-button.phone');
            const hideButtonIcon = document.querySelector('.contact-button.hide i');

            whatsappButton.classList.toggle('hidden');
            phoneButton.classList.toggle('hidden');

            // Change icon
            if (whatsappButton.classList.contains('hidden')) {
                hideButtonIcon.classList.replace('fa-bars', 'fa-eye');
            } else {
                hideButtonIcon.classList.replace('fa-eye', 'fa-bars');
            }
        }
    </script>
    <!-- /Sidebar end -->



  



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">PMS/AIF</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">PMS/AIF</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- pms-start -->
    <section class="portfolio-section">
        <div class="portfolio-container">
            <div class="portfolio-text">
                <h1>Portfolio Management Services</h1>
                <p>Dhanavruksha PMS Services strives to beat returns of the market index</p>
                <div class="cta-buttons">
                    <button class="book-call">📅 Book an expert call</button>
                    <button class="chat-whatsapp">💬 Chat with us</button>
                </div>
            </div>
            <div class="portfolio-graph">
                <h2>₹1 cr invested on Sept 2022 would have been:</h2>
                <div class="graph-bars">
                    <!-- First bar -->
                    <div class="bar">
                        <div class="bar-value-wrapper">
                            <p class="bar-text">₹1.39 Cr</p> <!-- Text above the bar -->
                            <div class="bar-value" style="--bar-height: 100px;"></div>
                        </div>
                        <p>Market Index: BSE 500 TRI</p>
                    </div>

                    <!-- Second bar -->
                    <div class="bar">
                        <div class="bar-value-wrapper">
                            <p class="bar-text">₹1.51 Cr</p> <!-- Text above the bar -->
                            <div class="bar-value green-bar" style="--bar-height: 120px;"></div>
                        </div>
                        <p>Dezerv Equity Revival Strategy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pms-end -->

    <!-- pms -info -->
    <!-- PMS Info Section -->
<div class="pms-info-container" id="pms-info-section1">
    <h1 class="pms-info-heading">Portfolio Management Services</h1>
    <p class="pms-info-content">
        Portfolio Management Services (PMS) is a customized and professionally managed investment vehicle that uses
        different investment strategies to take advantage of market-linked opportunities.

        PMS is ideal for high-net worth individuals (HNI’s) who are willing to take on risk and gain market
        exposure by investing directly into a basket of securities such as equities, fixed income, structured
        products, etc.
    </p>
    <p class="pms-info-content">
        A quality portfolio is one that is not too much diversified, yet still offers the best risk-adjusted
        returns. With us, this is identified through unbiased selection based on our proprietary analytics. It’s
        easy to socialize and sell products, which is what most wealth managers do. We’re reshaping the wealth
        management industry by sticking to basics, in-depth analytics. We maintain insight + integrity and aim at
        the long-term prosperity of clients.

        Dhana Vruksha is empaneled with a wide range of reputed third-party PMS providers across India, such as
        AMCs and financial institutions which provide their specialized PMS offerings.
    </p>
</div>

    <!--pms-info-end -->

    <!-- why-choose-pms-start -->
    <section class="portfolio-management">
        <div class="container">
            <h2>Why Choose Portfolio Management Services?</h2>
            <p class="intro-text">Our Portfolio Managers possess a deep understanding of equity markets, financial
                operations, fundamental analysis, and stock selection. Geojit became a SEBI-registered PMS in 1997, and
                our expert team has access to comprehensive technical and fundamental research to help you achieve your
                financial goals.</p>

            <div class="features">
                <div class="feature-item">
                    <img src="img/pms1.png" alt="Professional Management">
                    <h3>Professional Management</h3>
                    <p>Our professional management team makes informed decisions about where to invest and when to buy
                        or sell assets, ensuring that your investments are handled with expertise and care.</p>
                </div>

                <div class="feature-item">
                    <img src="img/pms2.png" alt="Risk Management">
                    <h3>Risk Management</h3>
                    <p>Mainaining risk is one of the core principles of our Portfolio Management Services. We focus on
                        maintaining stable returns over the long term by employing various risk management strategies
                        tailored to your investment profile.</p>
                </div>

                <div class="feature-item">
                    <img src="img/pms3.png" alt="Regular Updates">
                    <h3>Regular Updates</h3>
                    <p>Geojit's PMS provides weekly portfolio reviews with performance summaries and the latest Net
                        Asset Value (NAV). Clients receive market insights and alerts for significant changes, ensuring
                        they stay informed and engaged with their investments.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- why-choose-pms-end -->

    <!-- AIF Section Start -->
    <!-- AIF Section Start -->
<div class="aif-container" id="aif-section1">
    <h1 class="aif-heading">Alternate Investment Funds (AIFs)</h1>
    <p class="aif-content">
        Alternate Investment Funds (AIFs) usually include real estate, private equity, hedge funds, and venture
        capital funds or investments in stocks and bonds using strategies that go beyond traditional ways of
        investing, such as long/short or arbitrage strategies. Because alternatives tend to behave differently than
        typical stock and bond investments, adding them to a portfolio may provide broader diversification, reduce
        risk, and enhance returns.
    </p>

    <p class="aif-content">
        AIFs combine the operational ease of a mutual fund and the flexibility of a PMS, making it a perfect blend
        geared for generating optimum performance for a stipulated investment objective. To enhance risk-adjusted
        performance, these products can use complex strategies like unlisted equity investments, long-short hedging
        styles of investments, etc.
    </p>
</div>
<!-- AIF Section End -->
    <!-- AIF Section End -->
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
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
        document.addEventListener('DOMContentLoaded', function () {
            const elements = document.querySelectorAll('.bar');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add animation class
                        entry.target.classList.add('bar-animate');
                        // Stop observing once animation is triggered
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1 // Trigger when 10% of the element is visible
            });

            elements.forEach(el => {
                observer.observe(el); // Observe each element
            });
        });



    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const bars = document.querySelectorAll(".bar-value");

            // Function to check if an element is in the viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;
                return rect.top >= 0 && rect.top < windowHeight; // Check if the bar is visible
            }

            // Animate bars
            function animateBars() {
                bars.forEach(bar => {
                    if (isInViewport(bar)) {
                        bar.classList.add("raised");
                    }
                });
            }

            // Trigger animation on scroll and load
            window.addEventListener("scroll", animateBars);
            window.addEventListener("load", animateBars);
        });


    </script>

    <!-- Template Javascript -->
    <script src="js/main.js">
        document.addEventListener("DOMContentLoaded", function () {
            const circularBars = document.querySelectorAll('.circular-bar');

            circularBars.forEach(bar => {
                const progressValue = bar.dataset.progress;
                const maxValue = 20000000; // Maximum value for full circle (2 Cr)
                const percentage = (progressValue / maxValue) * 100;

                const progressRing = document.createElement('div');
                progressRing.classList.add('progress-ring');
                const degree = percentage * 3.6; // Convert percentage to degrees
                progressRing.style.transform = `rotate(${degree}deg)`;

                bar.querySelector('.circle').appendChild(progressRing);
            });
        });

        //js for bars
        window.addEventListener('scroll', function () {
            // Select all bar elements
            const bars = document.querySelectorAll('.bar-value');

            // Get the viewport height
            const viewportHeight = window.innerHeight;

            bars.forEach(bar => {
                // Get the top position of the bar relative to the viewport
                const barPosition = bar.getBoundingClientRect().top;

                // Trigger the animation when the bar is visible in the viewport
                if (barPosition < viewportHeight) {
                    bar.style.height = bar.dataset.height; // Set the height to the actual value
                }
            });
        });

    </script>
</body>

</html>