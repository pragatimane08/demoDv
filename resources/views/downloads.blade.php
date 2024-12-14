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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

    <!-- <link href="css/ionicons.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
        <h1 class="display-2 text-white mb-4 animated slideInDown">Downloads</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Investor Zone</a></li>
                <li class="breadcrumb-item"><a href="#">Downloads</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Navigation Tabs -->
<nav class="nav1">
    <ul class="tabs">
        <li><button class="tab-button button active" data-section="current">MF Forms</button></li>
        <li><button class="tab-button button" data-section="kyc">KYC / FATCA</button></li>
    </ul>
</nav>
<!-- Navigation Tabs -->

<!-- Section: MF Forms-start -->
<div id="current" class="section" style="display: block;">
    <div class="downloads-section">
        <h1 class="downloads-title">Downloads</h1>
        <p class="downloads-description">
            Our vision is to digitally deliver a range of financial products to promote the financial well-being of the people of India.
        </p>

        <div class="document-selection">
            <label for="document-dropdown">Choose Document:</label>
            <select id="document-dropdown" class="dropdown">
                <option value="newspaper">Newspaper Adv notice of hearing</option>
                <option value="company-info">Group Company Information</option>
                <option value="material-creditors">Material Creditors</option>
                <option value="info-memo">Information Memorandum-JFSL</option>
            </select>
        </div>

        <div class="document-selection">
            <label for="document-dropdown">Choose Document:</label>
            <select id="document-dropdown" class="dropdown">
                <option value="newspaper">Newspaper Adv notice of hearing</option>
                <option value="company-info">Group Company Information</option>
                <option value="material-creditors">Material Creditors</option>
                <option value="info-memo">Information Memorandum-JFSL</option>
            </select>
        </div>

        <!-- Download Button -->
        <button class="download-button" onclick="downloadDocument()">Download</button>
    </div>
</div>
<!-- Section: MF Forms-end -->

<!-- Section 3 : Kyc -->
<div id="kyc" class="section" style="display: none;">

    <!-- Hero Section -->
    <h1 class="kyc-hero-title">KYC Compliance Portal</h1>
    <p class="kyc-hero-description">Complete your KYC formalities to comply with SEBI regulations and invest securely in mutual funds.</p>

    <!-- Buttons to switch between sections -->
    <div class="kyc-buttons">
        <button class="kyc-btn" onclick="showSection('checkkyc')">Check KYC Status</button>
        <button class="kyc-btn" onclick="showSection('validatekyc')">Validate KYC</button>
        <button class="kyc-btn" onclick="showSection('downloadform')">Download Forms</button>
    </div>

    <!-- Cards Section -->
    <div class="kyc-cards-section">
        <!-- Check KYC Status -->
        <div class="kyc-card" id="checkkyc" style="display: block;">
            <div class="kyc-card-icon">✅</div>
            <h3 class="kyc-card-title">Check KYC Status</h3>
            <p class="kyc-card-description">Verify your KYC details across multiple platforms.</p>
            <a class="kyc-card-link" href="https://www.cvlkra.com" target="_blank">
                <img src="img/cvl_logo.jpg" alt="CVL KRA Icon" width="80" height="25"> CVL KRA
            </a><br>
            <a class="kyc-card-link" href="https://kra.ndml.in/kra-web/jsps/pos/KYCClientInquiry_NEW.jsp" target="_blank">
                <img src="img/nsdl-logo.jpg" alt="NSDL KRA Icon" width="80" height="25"> NSDL KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.camskra.com/" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> CAMS KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.nsekra.com/" target="_blank">
                <img src="img/nse.jpg" alt="NSE KRA Icon" width="80" height="25"> NSE KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.karvykra.com/index.aspx?ReturnUrl=%2f" target="_blank">
                <img src="img/Karvy_Logo.jpg" alt="Karvy KRA Icon" width="80" height="25"> Karvy KRA
            </a>
        </div>

        <!-- Validate KYC -->
        <div class="kyc-card" id="validatekyc" style="display: none;">
            <div class="kyc-card-icon">🔍</div>
            <h3 class="kyc-card-title">Validate KYC</h3>
            <p class="kyc-card-description">Ensure your KYC details are up-to-date.</p>
            <a class="kyc-card-link" href="https://validate.cvlindia.com/CVLKRAVerification_V1/" target="_blank">
                <img src="img/cvl_logo.jpg" alt="CVL KRA Icon" width="80" height="25"> CVL KRA
            </a><br>
            <a class="kyc-card-link" href="https://kra.ndml.in/kra/ckyc/#/initiate" target="_blank">
                <img src="img/nsdl-logo.jpg" alt="NSDL KRA Icon" width="80" height="25"> NSDL KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.camskra.com/PanDetailsUpdate.aspx" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> CAMS KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.karvykra.com/KYC_Validation/Default.aspx" target="_blank">
                <img src="img/Karvy_Logo.jpg" alt="Karvy KRA Icon" width="80" height="25"> Karvy KRA
            </a>
        </div>

        <!-- Download Forms -->
        <div class="kyc-card" id="downloadform" style="display: none;">
            <div class="kyc-card-icon">📂</div>
            <h3 class="kyc-card-title">Download Forms</h3>
            <p class="kyc-card-description">Access and download important KYC forms.</p>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMSKRA_Non_Individual.pdf" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> KYC Non-Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/Individual_KYC.pdf" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> KYC Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMS_FATCA_Non_Individual.pdf" target="_blank">
                <img src="img/cams.jpg" alt="CVL KRA Icon" width="80" height="25"> FATCA Non-Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMS_FATCA-Individuals.pdf" target="_blank">
                <img src="img/cams.jpg" alt="CVL KRA Icon" width="80" height="25"> FATCA Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMS_UBO_Declaration_Non_Indvidual.pdf" target="_blank">
                <img src="img/cams.jpg" alt="CVL KRA Icon" width="80" height="25"> UBO Declaration
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/KFINTECH_FATCA_CRS_Declaration_form_Individual.pdf" target="_blank">
                <img src="img/kfintehch (1).jpg" alt="kfintehch Icon" width="80" height="25"> FATCA CRS Declaration Form Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/KFINTECH_FATCA_UBO_NON_INDIVIDUALS.pdf" target="_blank">
                <img src="img/kfintehch (1).jpg" alt="kfintehch Icon" width="80" height="25"> FATCA UBO Non-Individual
            </a><br>
        </div>
    </div>
</div>

<!-- JavaScript Function to Toggle the Form Display -->
<script>
    function showSection(sectionId) {
        // Hide all sections
        var sections = document.querySelectorAll('.kyc-card');
        sections.forEach(function(section) {
            section.style.display = 'none';
        });

        // Show the selected section
        var activeSection = document.getElementById(sectionId);
        if (activeSection) {
            activeSection.style.display = 'block';
        }
    }
</script>


</div>



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
 // Attach event listeners to buttons
 document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            const sectionId = button.getAttribute('data-section');

            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = 'none';
            });

            // Remove 'active' class from all buttons
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';

            // Add 'active' class to the clicked button
            button.classList.add('active');
        });
    });

    // Set default tab (Downloads)
    window.onload = () => {
        const defaultSection = 'current';
        document.getElementById(defaultSection).style.display = 'block';
        document.querySelector(`.tab-button[data-section="${defaultSection}"]`).classList.add('active');
    };
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>