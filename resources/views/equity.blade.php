<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dhanavruksha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
    <link href="css/equ.css" rel="stylesheet">

    <!-- <link href="css/ionicons.min.css" rel="stylesheet"> -->
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Equity And Derivatives</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Equity And Derivatives</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Equities - For Long Term Investment start -->
    <div class="equity-info-container" id="equities-section">
        <h1 class="equity-info-heading">Equities - For Long Term Investment</h1>
        <p class="equity-info-content">
            Long term investments in Equities offer one of the highest returns which are quite significant even after
            adjusting to the impact of inflation, as compared to other assets. This makes it possible for the investors
            to keep up with the lifestyle without cutting down on any expenses even when the prices of goods are
            gradually increasing.
        </p>
        <p class="equity-info-content">
            Equity investments have the potential to offer returns in multiples of the invested capital when held for a
            longer period over 5 years. The longer one holds equity investments, the risk could minimize from low to
            nil. Equity investments can make achieving Financial Goals much easier, if invested from a very early age
            regularly, holding for long.
        </p>
    </div>

    <!-- Equities - For Long Term Investment end -->
<!-- Steps Start -->
<div class="eq1-steps">
  <h1 class="section-heading">Understanding Equity Derivatives</h1>
  <div class="eq1-steps-container">
    <div class="st1">
      <a href="#equity-section1" class="step-link">
        <div class="eq1-circle" id="step1">01</div>
        <h3>What is an Equity Derivative?</h3>
      </a>
    </div>
    <div class="st3">
      <a href="#undertsanding-section3" class="step-link">
        <div class="eq1-circle" id="step3">02</div>
        <h3>Understanding Equity Derivative</h3>
      </a>
    </div>
    <div class="st4">
      <a href="#risk-section2" class="step-link">
        <div class="eq1-circle" id="step4">03</div>
        <h3>Risks of Equity Derivatives</h3>
      </a>
    </div>
  </div>
</div>
<!-- Steps End -->


    <!-- What is an Equity Derivative start -->
    <section id="equity-section1" class="what-is-equi">
        <div class="content-container">
            <div class="image-container">
                <img src="img/mfhiw-1.jpeg" alt="Equity Derivative">
            </div>
            <div class="text-container">
                <h4>What is an Equity Derivative?</h4>
                <h1>Empowering investments, one equity derivative at a time.</h1>
                <p>
                    An equity derivative is a financial instrument whose value is based on the equity movements of the underlying asset.
                    For example, a stock option is an equity derivative, because its value is based on the price movements of the underlying stock.
                </p>
            </div>
        </div>
    </section>

    <!-- What is an Equity Derivative end -->



    <!-- eq-understanding - start -->
    <div class="eq-understanding-container" id="undertsanding-section3">
        <!-- Left Section: Content -->
        <div class="eq-understanding-left-section">
            <h1>Understanding Equity Derivative</h1>
            <p class="eq-understanding-subheading">Come around some beautiful photos</p>
            <div class="eq-understanding-content-description">
                <p>Equity derivatives can act like an insurance policy. The investor receives a potential payout by paying the cost of the derivative contract, which is referred to as a premium in the options market. An investor that purchases a stock, can protect against a loss in share value by purchasing a put
                    option. On the other hand, an investor that has shorted shares can hedge against an upward move in the share price by purchasing a call option.</p>
                <p>Equity derivative can also be used for speculation purposes. For example, a trader can buy equity options, instead of actual stock, to generate profits from the underlying asset’s price movements. </p>
            </div>

        </div>

        <!-- Right Section: Image -->
        <div class="eq-understanding-right-section">
            <img src="img/aboutus-3.jpg" alt="Group of People" class="right-image">
        </div>
    </div>
    <!-- eq-understanding - end -->

    <!-- Risk Section Start -->
    <div class="risk-container" id="risk-section2">
        <div class="image-container">
            <img src="img/risk1.jpeg" alt="Image representing risks" class="left-image">
        </div>
        <div class="content-container">
            <h2>Risks in Equity and Derivatives</h2>
            <ul>
                <li>
                    <strong>Equities</strong>
                    <p class="description">
                        Market volatility can lead to significant price fluctuations, and there's a risk of losing invested capital if the stock price declines.
                    </p>
                </li>
                <li>
                    <strong>Derivatives</strong>
                    <p class="description">
                        Highly leveraged positions can amplify losses, and complex pricing can introduce counterparty and liquidity risks.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <!-- Risk Section End -->


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
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        var typed = new Typed('.auto-type', {
            strings: [' Growth', ' Financial Freedom'],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });

        // Add scroll behavior for each circle
        document.getElementById('step1').addEventListener('click', function() {
            document.querySelector('.st1 h2').scrollIntoView({
                behavior: 'smooth'
            });
        });
        document.getElementById('step2').addEventListener('click', function() {
            document.querySelector('.st2 h2').scrollIntoView({
                behavior: 'smooth'
            });
        });
        document.getElementById('step3').addEventListener('click', function() {
            document.querySelector('.st3 h2').scrollIntoView({
                behavior: 'smooth'
            });
        });
        document.getElementById('step4').addEventListener('click', function() {
            document.querySelector('.st4 h2').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>