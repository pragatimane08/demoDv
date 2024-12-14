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
<!-- Include Font Awesome CDN in your HTML head -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Financial Planning</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item"><a href="#">Financial Planning</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- what is financial planning-start -->
    <div class="financial-intro-container">
    <section class="financial-intro">
      <div class="content">
        <div class="text-section">
          <h6 class="category-label">CAREER GUIDE</h6>
          <h1 class="title">WHAT IS FINANCIAL PLANNING?</h1>
          <p class="description">
            Financial planning involves looking at a client's entire financial picture and advising them on how to achieve their short- and long-term financial goals. 
            From saving for education and planning for retirement to effectively managing taxes and insurance, financial planners develop valuable relationships with their 
            clients to provide them with confidence today and a more secure tomorrow.
          </p>
        </div>
        <div class="image-section">
          <img src="img/financial-planning-img2.jpeg" alt="Financial Planning" class="hero-image">
        </div>
      </div>
    </section>
  </div>
    <!--what is financial planning-End -->

   <!-- Steps start -->
   <!-- Financial Planning Steps -->
   <div class="financial-planning">
  <div class="fp-steps">
    <h2 class="fp-title">Financial Planning</h2>
    <p class="fp-description">
      Achieve life goals through proper financial management.
    </p>
    <div class="fp-step-cards">
      <!-- Step 1 -->
      <div class="fp-step-card">
        <div class="fp-step-icon">1</div>
        <h3>Gather Information</h3>
        <p>Collect relevant financial details for a clear understanding.</p>
      </div>

      <!-- Step 2 -->
      <div class="fp-step-card">
        <div class="fp-step-icon">2</div>
        <h3>Set Life Goals</h3>
        <p>Define your objectives, such as retirement planning or education savings.</p>
      </div>

      <!-- Step 3 -->
      <div class="fp-step-card">
        <div class="fp-step-icon">3</div>
        <h3>Analyze Current Status</h3>
        <p>Assess your financial position to understand your starting point.</p>
      </div>

      <!-- Step 4 -->
      <div class="fp-step-card">
        <div class="fp-step-icon">4</div>
        <h3>Identify Strategies</h3>
        <p>Plan actionable steps to bridge the gap between your goals and current status.</p>
      </div>

      <!-- Step 5 -->
      <div class="fp-step-card">
        <div class="fp-step-icon">5</div>
        <h3>Implement Plan</h3>
        <p>Execute your financial strategies systematically and effectively.</p>
      </div>

      <!-- Step 6 -->
      <div class="fp-step-card">
        <div class="fp-step-icon">6</div>
        <h3>Monitor Progress</h3>
        <p>Regularly review your plan and make necessary adjustments.</p>
      </div>
    </div>
  </div>
</div>

  <!-- Steps end -->


    <!-- Benefits of Financial Planning Section-start -->
    <div class="financial-planning-bef">
  <div class="image-section">
    <div class="image-background">
      <img src="img/fp-bef-2.jpeg" alt="Person smiling" class="profile-image">
    </div>
  </div>
  <div class="content-section">
    <h1>Benefits of Financial Planning</h1>
    <div class="card-container">
      <div class="card">
        <h2>Direction & Clarity</h2>
        <p>Financial planning serves as a roadmap for your financial future, giving clarity to your financial decisions. It helps you understand how each decision, whether it's investing in a product or managing your budget, influences other aspects of your finances.</p>
      </div>
      <div class="card">
        <h2>Long-Term Vision</h2>
        <p>A solid financial plan helps you evaluate how each choice aligns with your long-term goals. For example, buying an investment product could fast-track your mortgage repayment or delay your retirement, allowing you to make more informed decisions for the future.</p>
      </div>
      <div class="card">
        <h2>Adaptability</h2>
        <p>Financial planning serves as a roadmap for your financial future, giving clarity to your financial decisions. It helps you understand how each decision, whether it's investing in a product or managing your budget, influences other aspects of your finances.</p>
      </div>
      <div class="card">
        <h2> Security & Confidence</h2>
        <p>Knowing your financial goals are on track provides peace of mind. A comprehensive financial plan ensures you're prepared for the future and boosts your confidence in making proactive decisions towards achieving a secure financial future.

</p>
      </div>
    </div>
  </div>
</div>


<!-- Benefits of Financial Planning Section-end -->


<!-- FP Need -start -->
<section class="financial-planning-section">
  <div class="container">
    <h2 class="section-heading">The Need for Financial Planning</h2>
    <p class="section-introduction">
      Financial Planning offers a coordinated and comprehensive approach to helping you achieve your personal and reasonable financial goals.
    </p>
    <div class="section-content">
      <p>
       1.  Building, managing, and preserving wealth is not an easy task. Maybe you have recently retired and are concerned about outliving your nest egg.
      </p>
      <p>
       2.  Perhaps you are a baby boomer trying to plan for a secure retirement. Maybe you are part of the “sandwich generation”, caring for your own children at home while also caring for the needs of aging parents.
      </p>
      <p>
       3.  Maybe you are recently widowed or divorced with all of the complications that these life challenges bring.
      </p>
      <p>
       4.  Maybe you have accumulated substantial wealth and want to protect your assets from lawsuits, spendthrift relatives, divorce, or other potential threats not only to yourself but also to your heirs.
      </p>
      <p>
       5. Further complicating the financial landscape is the vast array of advisors and publications that typically offer conflicting opinions and advice.
      </p>
      <p>
       6. Selecting appropriate investments is simply one ingredient in the recipe for an effective financial plan that should also include retirement and estate planning.
      </p>
    </div>
  </div>
</section>
<!-- FP Need -end -->

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
        document.addEventListener("DOMContentLoaded", function () {
            // Typewriter Effect for Wealth Content Only (Paragraph)
            (function () {
                const wealthContent = document.querySelectorAll(".wealth-content");

                wealthContent.forEach((element) => {
                    const text = element.textContent;
                    element.textContent = ""; // Clear the text initially

                    let index = 0;

                    function typeEffect() {
                        if (index < text.length) {
                            element.textContent += text[index];
                            index++;
                            setTimeout(typeEffect, 50); // Adjust typing speed for content
                        }
                    }

                    typeEffect();
                });
            })();

            // Intersection Observer for Wealth Management Benefit Cards
            (function () {
                const cards = document.querySelectorAll(".wealth-management-benefit-card");

                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("visible");
                            }
                        });
                    },
                    {
                        threshold: 0.1, // Trigger when 10% of the card is visible
                    }
                );

                cards.forEach((card) => observer.observe(card));
            })();
        });
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>