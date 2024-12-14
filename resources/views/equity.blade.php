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
    <!-- steps start -->
    <div class="eq1-steps">
        <h1 class="section-heading">Understanding Equity Derivatives</h1>
        <div class="eq1-steps-container">
            <div class="st1">
                <div class="eq1-circle" id="step1">01</div>
                <h2>What is an Equity Derivative?</h2>
            </div>
            <div class="st2">
                <div class="eq1-circle" id="step2">02</div>
                <h2>Types of Equity Derivatives</h2>
            </div>
            <div class="st3">
                <div class="eq1-circle" id="step3">03</div>
                <h2>Benefits of Equity Derivatives</h2>
            </div>
            <div class="st4">
                <div class="eq1-circle" id="step4">04</div>
                <h2>Risks of Equity Derivatives</h2>
            </div>
        </div>
    </div>
    <!-- steps end -->

    <!-- What is an Equity Derivative start -->
    <div id="equity-section">
        <div class="container">
            <h1 class="equity-heading">What is an Equity Derivative?</h1>
            <p class="equity-content">
                An equity derivative is a financial instrument whose value is based on the equity movements of the
                underlying asset. For example, a stock option is an equity derivative, because its value is based on the
                price movements of the underlying stock.
            </p>
        </div>
    </div>
    <!-- What is an Equity Derivative end -->

    <!-- Benefits section - start  -->
    <div class="benefits-container">
    <div class="benefits-section">
        <h2 class="benefits-heading">Benefits of Equity and Derivatives</h2>
        <div class="benefits-container">
            <div class="container-benefits">
                <div class="palette-benefits">
                    <div class="color" id="color1-benefits">
                        <span>Liquidity</span>
                        <p class="benefit-info">Ensures quick buying or selling of assets without affecting their price.</p>
                    </div>
                    <div class="color" id="color2-benefits">
                        <span>Diversification</span>
                        <p class="benefit-info">Spreads investments across different asset classes to reduce risk.</p>
                    </div>
                    <div class="color" id="color3-benefits">
                        <span>Hedging</span>
                        <p class="benefit-info">Helps protect investments from market volatility and losses.</p>
                    </div>
                    <div class="color" id="color4-benefits">
                        <span>Risk Management</span>
                        <p class="benefit-info">Mitigates potential losses and enhances portfolio stability.</p>
                    </div>
                    <div id="color-code-benefits">
                        <div id="color-code-bg-benefits"></div>
                        <div id="color-code-text-benefits">
                            <p>Benefits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Benefits section - end  -->

             <!-- risk start -->
        <div class="risk-container">
            <div class="image-container">
                <img src="img/risk1.jpeg" alt="Image representing risks" class="left-image">
            </div>
            <div class="content-container">
                <h2>Risks in Equity and Derivatives</h2>
                <ul>
                    <li><strong>Equities</strong>
                        <p class="description">Market volatility can lead to significant price fluctuations, and there's
                            a risk of losing invested capital if the stock price declines.</p>
                    </li>
                    <li><strong>Derivatives</strong>
                        <p class="description">Highly leveraged positions can amplify losses, and complex pricing can
                            introduce counterparty and liquidity risks.</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- risk end -->

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
                document.getElementById('step1').addEventListener('click', function () {
                    document.querySelector('.st1 h2').scrollIntoView({ behavior: 'smooth' });
                });
                document.getElementById('step2').addEventListener('click', function () {
                    document.querySelector('.st2 h2').scrollIntoView({ behavior: 'smooth' });
                });
                document.getElementById('step3').addEventListener('click', function () {
                    document.querySelector('.st3 h2').scrollIntoView({ behavior: 'smooth' });
                });
                document.getElementById('step4').addEventListener('click', function () {
                    document.querySelector('.st4 h2').scrollIntoView({ behavior: 'smooth' });
                });

            </script>


            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>