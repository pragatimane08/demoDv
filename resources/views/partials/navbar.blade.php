<!-- Spinner Start -->
<div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    @if(request()->is('/')) <!-- Check if it's the homepage -->
        <!-- Loader Start -->
        <div id="loader">
            <h3 class="animate__animated animate__fadeIn">
                <span class="welcome-text">Welcome to</span>
                <span class="dhanvruksha-text">Dhanvruksha</span>
            </h3>
        </div>
        <!-- Loader End -->
    @endif



<style>
 /* Default styling */
.topabar-h1 {
    background: linear-gradient(135deg, #AE8625 0%, #F7EF8A 30%, #D2AC47 60%, #EDC967 100%);
    font-weight: bold;
    -webkit-background-clip: text; /* Clips the gradient inside the text */
    -webkit-text-fill-color: transparent; /* Makes text transparent to show the gradient */
    text-transform: uppercase;
    white-space: nowrap; /* Prevents text wrapping */
    font-size: 13.8px;
    margin-right: 31px;
}

/* Tablet View (769px <= Screen width <= 1024px) */
@media (min-width: 769px) and (max-width: 1024px) {
    .topabar-h1 {
        font-size: 10.35px; /* Slightly larger font size for tablets */
        margin-right: 20px; /* Adjusted margin for better spacing */
    }
}

/* Smaller Tablet View (Screen width <= 768px) */
@media (max-width: 768px) {
    .topabar-h1 {
        font-size: 9.5px;
        text-align: center;
        margin-right: 0;
    }
}

/* Mobile View (Screen width <= 480px) */
@media (max-width: 480px) {
    .topabar-h1 {
        font-size: 10px;
        text-align: center;
        white-space: normal; /* Allows text wrapping on small screens */
    }
}


</style>
        
           <!-- Topbar Start -->
<div class="Topbar-container-fluid text-white d-flex d-lg-flex" style="background-color: #06060b;">
    <div class="Topbar-container py-3">
        <div class="Topbar-d-flex align-items-center">
            <!-- Logo Section -->
            <div class="logo-container">
                <a href="index.html" class="logo-link">
                    <img src="img/cropped-logo_Dhanavruksha-01.jpg" alt="DV Logo" class="logo-img">
                </a>
                <div class="logo-text">
                    <span class="logo-title">DHANAVRUKSHA</span>
                    <span class="logo-subtitle">FINANCIAL SERVICES PVT. LTD.</span>
                    <h6 class="topabar-h1">YOUR GATEWAY TO FINANCIAL WELLNESS</h6>
                </div>
            </div>

            <!-- Toggler Navbar for Mobile View -->
            <button class="navbar-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNav" aria-controls="topbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right Section (Hidden on Mobile) -->
            <div class="Topbar-right d-none d-lg-flex align-items-center ms-3" style="flex-wrap: nowrap;">
                <small class="d-flex align-items-center me-3 hide-on-mobile">
                    <i class="fa fa-envelope me-2" color="#cb9f42"></i>customerservice@dhanavruksha.in
                </small>
                <small class="d-flex align-items-center me-3 hide-on-mobile">
                    <i class="fa fa-phone-alt me-2" color="#cb9f42"></i>+91 7305888454
                </small>
                <a href="{{ route('schedulemeeting') }}" class="nav-item nav-link d-flex align-items-center me-3">
                    <i class="fa fa-calendar-alt me-2" color="#cb9f42"></i>Schedule Meeting for Free Portfolio Review
                </a>
                <a href="{{ route('opendemata') }}" class="nav-item nav-link d-flex align-items-center">
                    <i class="fa fa-briefcase me-2" color="#cb9f42"></i>Open Demat Account
                </a>
            </div>
        </div>

        <!-- Collapsible Navbar for Mobile View -->
        <div class="collapse navbar-collapse d-lg-none" id="topbarNav">
            <div class="navbar-nav">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('schedulemeeting') }}" class="nav-item nav-link">Schedule Meeting for Free Portfolio Review</a>
                <a href="{{ route('opendemata') }}" class="nav-item nav-link">Open Demat Account</a>
                <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->



      <!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0"></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

                    <!-- About Us Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('company-profile') || request()->routeIs('team') ? 'active' : '' }}" data-bs-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('company-profile') }}" class="dropdown-item {{ request()->routeIs('company-profile') ? 'active' : '' }}">Company Profile</a>
                            <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Our Team</a>
                        </div>
                    </div>

                    <!-- Products Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('mutual-funds') || request()->routeIs('equity') || request()->routeIs('pms-aif') || request()->routeIs('fixed-deposits') || request()->routeIs('bonds') ? 'active' : '' }}" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('mutual-funds') }}" class="dropdown-item {{ request()->routeIs('mutual-funds') ? 'active' : '' }}">Mutual Funds</a>
                            <a href="{{ route('equity') }}" class="dropdown-item {{ request()->routeIs('equity') ? 'active' : '' }}">Equity And Derivatives</a>
                            <a href="{{ route('pms-aif') }}" class="dropdown-item {{ request()->routeIs('pms-aif') ? 'active' : '' }}">PMS-AIF</a>
                            <a href="{{ route('fixed-deposits') }}" class="dropdown-item {{ request()->routeIs('fixed-deposits') ? 'active' : '' }}">Fixed Deposits</a>
                            <a href="{{ route('bonds') }}" class="dropdown-item {{ request()->routeIs('bonds') ? 'active' : '' }}">Bonds</a>
                            <a href="{{ route('nps') }}" class="dropdown-item {{ request()->routeIs('nps') ? 'active' : '' }}">NPS</a>
                            <a href="{{ route('lifeinsurance') }}" class="dropdown-item {{ request()->routeIs(' lifeinsurance') ? 'active' : '' }}">Life Insurance</a>
                           <a href="{{ route('healthinsurance') }}" class="dropdown-item {{ request()->routeIs(' healthinsurance') ? 'active' : '' }}">Health Insurance</a>
                            <a href="{{ route('giftcityfund') }}" class="dropdown-item {{ request()->routeIs('giftcityfund') ? 'active' : '' }}">Gift city Fund</a>
                            <a href="{{ route('unlistedshares') }}" class="dropdown-item {{ request()->routeIs('unlistedshares') ? 'active' : '' }}"> Unlisted Shares</a>
                            <a href="{{ route('loan') }}" class="dropdown-item {{ request()->routeIs('loan') ? 'active' : '' }}"> Business Loans</a>
                        </div>
                    </div>

                    <!-- Services Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('wealth-management') || request()->routeIs('financial-planning') || request()->routeIs('tax-planning') || request()->routeIs('portfolio-restucturing') || request()->routeIs('child-future-saving') || request()->routeIs('retirmentplanning') || request()->routeIs('seminars') || request()->routeIs('external-Portfolio') || request()->routeIs('equity-advisory') || request()->routeIs('estate-planning') || request()->routeIs('Insurance_pr') ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('wealth-management') }}" class="dropdown-item {{ request()->routeIs('wealth-management') ? 'active' : '' }}">Wealth Management</a>
                            <a href="{{ route('financial-planning') }}" class="dropdown-item {{ request()->routeIs('financial-planning') ? 'active' : '' }}">Financial Planning</a>
                            <a href="{{ route('tax-planning') }}" class="dropdown-item {{ request()->routeIs('tax-planning') ? 'active' : '' }}">Tax Planning</a>
                            <a href="{{ route('portfolio-restucturing') }}" class="dropdown-item {{ request()->routeIs('portfolio-restucturing') ? 'active' : '' }}">Portfolio Restructuring</a>
                            <a href="{{ route('child-future-saving') }}" class="dropdown-item {{ request()->routeIs('child-future-saving') ? 'active' : '' }}">Child Future Saving</a>
                            <a href="{{ route('retirmentplanning') }}" class="dropdown-item {{ request()->routeIs('retirmentplanning') ? 'active' : '' }}">Retirement Planning</a>
                            <a href="{{ route('seminars') }}" class="dropdown-item {{ request()->routeIs('seminars') ? 'active' : '' }}">Investment Seminar <br>For Youth</a>
                            <a href="{{ route('external-Portfolio') }}" class="dropdown-item {{ request()->routeIs('external-Portfolio') ? 'active' : '' }}">Free Review of External <br>Portfolio</a>
                            <a href="{{ route('equity-advisory') }}" class="dropdown-item {{ request()->routeIs('equity-advisory') ? 'active' : '' }}">Equity Advisory</a>
                            <a href="{{ route('estate-planning') }}" class="dropdown-item {{ request()->routeIs('estate-planning') ? 'active' : '' }}">Estate Planning</a>
                            <a href="{{ route('Insurance_pr') }}" class="dropdown-item {{ request()->routeIs('Insurance_pr') ? 'active' : '' }}">Insurance Advisory</a>
                        </div>
                    </div>

                    <!-- Investor Zone Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('financial-calculator') || request()->routeIs('downloads') || request()->routeIs('blogs') || request()->routeIs('learning') ? 'active' : '' }}" data-bs-toggle="dropdown">Investor Zone</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('financial-calculator') }}" class="dropdown-item {{ request()->routeIs('financial-calculator') ? 'active' : '' }}">Financial calculator</a>
                            <a href="{{ route('downloads') }}" class="dropdown-item {{ request()->routeIs('downloads') ? 'active' : '' }}">Downloads</a>
                            <a href="{{ route('blogs') }}" class="dropdown-item {{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs</a>
                            <a href="{{ route('learning') }}" class="dropdown-item {{ request()->routeIs('learning') ? 'active' : '' }}">Learning</a>
                        </div>
                    </div>
                    <a href="{{ route('newsletter') }}" class="nav-item nav-link {{ request()->routeIs('newsletter') ? 'active' : '' }}">Newsletter</a>

                    <a href="{{ route('kyc') }}" class="nav-item nav-link {{ request()->routeIs('kyc') ? 'active' : '' }}">KYC</a>
                    <a href="{{ route('contact-us') }}" class="nav-item nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}">Contact</a>

                    <!-- Mobile View Only: Schedule Meeting and Open Demat Account -->
                    <div class="d-lg-none">
                        <a href="{{ route('schedulemeeting') }}" class="nav-item nav-link d-flex align-items-center">
                            <i class="fa fa-calendar-alt me-2" color="#cb9f42"></i>Schedule Meeting for Free Portfolio Review
                        </a>
                        <a href="{{ route('opendemata') }}" class="nav-item nav-link d-flex align-items-center">
                            <i class="fa fa-briefcase me-2" color="#cb9f42"></i>Open Demat Account
                        </a>
                    </div>
                </div>

                <div class="ms-auto d-none d-lg-block">
                    <a href="https://dhanavruksha.investwell.app/app/#/login" class="btn custom-btn rounded-pill py-2 px-3">Client Login</a>
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