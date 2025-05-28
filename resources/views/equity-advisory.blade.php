@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
        style="background: url('{{Vite::asset('resources/theme/img/equityderihd.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown"> Equity Solutions</h1>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Equity Advisory Section Start -->
    <section class="equity-advisory-overview-new-section">
        <div class="equity-advisory-overview-new-container">
            <header class="equity-advisory-overview-new-header">
                <h1>Equity Advisory Services</h1>
                <p class="equity-advisory-overview-new-tagline">Your trusted partner in navigating the stock market.</p>
            </header>
            <div class="equity-advisory-overview-new-content">
                <header class="equity-advisory-overview-new-subheader">
                    <h2>Overview</h2>
                </header>
                <p class="equity-advisory-overview-new-text">Our Equity Advisory Services are designed to help you navigate the complexities of the stock market with confidence and precision. At Dhanavruksha, we provide personalized investment strategies tailored to your financial goals, risk tolerance, and market outlook.</p>
            </div>
        </div>
    </section>
    
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const section = document.querySelector(".equity-advisory-overview-new-section");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        section.classList.add("show");
                    } else {
                        section.classList.remove("show"); 
                    }
                });
            },
            { threshold: 0.2 } 
        );

        observer.observe(section);
    });
    </script>
    <!-- Equity Advisory Section End -->

    <!--Equity Advisory-How We Help-start -->
    <div class="equity-advisory-how-we-help-container">
        <h1 class="equity-advisory-how-we-help-heading">How We Help</h1>
        <p class="equity-advisory-how-we-help-subheading">Empowering your financial journey with tailored strategies and support.</p>
        <div class="equity-advisory-how-we-help-cards">
            <div class="equity-advisory-how-we-help-card">
                <div class="equity-advisory-how-we-help-icon">📈</div>
                <h3 class="equity-advisory-how-we-help-card-title">Personalized Investment Strategies</h3>
                <p class="equity-advisory-how-we-help-card-text">Tailored to your financial goals and risk profile.</p>
            </div>
            <div class="equity-advisory-how-we-help-card">
                <div class="equity-advisory-how-we-help-icon">🔍</div>
                <h3 class="equity-advisory-how-we-help-card-title">Research & Analysis</h3>
                <p class="equity-advisory-how-we-help-card-text">In-depth research to identify high-potential opportunities across sectors.</p>
            </div>
            <div class="equity-advisory-how-we-help-card">
                <div class="equity-advisory-how-we-help-icon">📊</div>
                <h3 class="equity-advisory-how-we-help-card-title">Diversified Portfolio</h3>
                <p class="equity-advisory-how-we-help-card-text">Ensuring a balanced mix of investments for long-term growth and tactical gains.</p>
            </div>
            <div class="equity-advisory-how-we-help-card">
                <div class="equity-advisory-how-we-help-icon">🤝</div>
                <h3 class="equity-advisory-how-we-help-card-title">Ongoing Support</h3>
                <p class="equity-advisory-how-we-help-card-text">Continuous monitoring and adjustments to maximize returns while managing risk.</p>
            </div>
        </div>
    </div>

    <div class="equity-advisorycta">
        <h3>Start Your Investment Journey with Us!</h3>
        <a href="{{ route('contact-us') }}" class="cta-button">Contact Our Experts</a>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(".equity-advisory-how-we-help-card");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("fade-in-right");
                    } else {
                        entry.target.classList.remove("fade-in-right");
                    }
                });
            },
            { threshold: 0.2 }
        );

        cards.forEach((card) => observer.observe(card));
    });
    </script>
    <!--Equity Advisory-How We Help-end -->

    <!-- Include Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    
    <script>
        var typed = new Typed('.auto-type', {
            strings: ['Growth', 'Financial Freedom'],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });

        document.addEventListener("DOMContentLoaded", () => {
            const sectionTitle = document.querySelector(".work-title");
            const sectionDescription = document.querySelector(".work-description");

            if (sectionTitle && sectionDescription) {
                sectionTitle.textContent = "Our Work Process";  
                sectionDescription.textContent =
                    "Learn how our portfolio restructuring approach helps you achieve your financial goals.";
            }
        });
    </script>
    
    <script>
        $(document).ready(function () {
            $(".testimonial-section-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 1000,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });
        });
    </script>
       
    <style>
    /*Equity Advisory*/
    /* Section for Equity Advisory Services */
    .equity-advisory-overview-new-section {
        background-color: #f7f4ec;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
        margin: 40px auto;
        text-align: center;
        max-width: 1200px;
        overflow: hidden;
        border: 2px solid #d0a94e;
    }

    /* Container for layout */
    .equity-advisory-overview-new-container {
        max-width: 100%;
        margin: 0 auto;
        padding: 0 25px;
    }

    /* Header styles */
    .equity-advisory-overview-new-header h1 {
        font-size: 2rem;
        color: #d0a94e;
        margin-bottom: 20px;
        font-weight: 500;
        letter-spacing: 1.5px;
    }

    /* Tagline styles */
    .equity-advisory-overview-new-tagline {
        font-size: 1.5rem;
        color: #6d6d6d;
        font-style: italic;
        margin-bottom: 30px;
        line-height: 1.8;
    }

    /* Overview content styles */
    .equity-advisory-overview-new-content {
        max-width: 850px;
        margin: 0 auto;
        padding: 25px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        border: 2px solid #d0a94e;
    }

    .equity-advisory-overview-new-content:hover {
        transform: scale(1.03);
    }

    /* Subheader styles */
    .equity-advisory-overview-new-subheader h2 {
        font-size: 1.8rem;
        color: #d0a94e;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .equity-advisory-overview-new-text {
        font-size: 1rem;
        color: #333;
        line-height: 1.9;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .equity-advisory-overview-new-header h1 {
            font-size: 1.8rem;
        }
        .equity-advisory-overview-new-tagline {
            font-size: 1.4rem;
        }
        .equity-advisory-overview-new-subheader h2 {
            font-size: 1.6rem;
        }
        .equity-advisory-overview-new-text {
            font-size: 0.95rem;
        }
        .equity-advisory-overview-new-section {
            padding: 30px;
            margin-right: 20px;
            margin-left: 20px;
        }
    }

    @media (max-width: 820px) { 
        .equity-advisory-overview-new-section {
            padding: 30px;
            margin-right: 20px;
            margin-left: 20px;
        }
        .equity-advisory-overview-new-header h1 {
            font-size: 1.7rem;
        }
        .equity-advisory-overview-new-tagline {
            font-size: 1.35rem;
        }
        .equity-advisory-overview-new-subheader h2 {
            font-size: 1.55rem;
        }
        .equity-advisory-overview-new-text {
            font-size: 0.92rem;
        }
    }

    @media (max-width: 768px) {
        .equity-advisory-overview-new-header h1 {
            font-size: 1.6rem;
        }
        .equity-advisory-overview-new-tagline {
            font-size: 1.3rem;
        }
        .equity-advisory-overview-new-subheader h2 {
            font-size: 1.5rem;
        }
        .equity-advisory-overview-new-text {
            font-size: 0.9rem;
        }
        .equity-advisory-overview-new-section {
            padding: 30px;
            margin-right: 20px;
            margin-left: 20px;
        }
    }

    @media (max-width: 480px) {
        .equity-advisory-overview-new-header h1 {
            font-size: 1.5rem;
        }
        .equity-advisory-overview-new-tagline {
            font-size: 1.2rem;
        }
        .equity-advisory-overview-new-subheader h2 {
            font-size: 1.4rem;
        }
        .equity-advisory-overview-new-text {
            font-size: 0.85rem;
        }
        .equity-advisory-overview-new-section {
            padding: 25px;
            margin-right: 20px;
            margin-left: 20px;
        }
    }
    /* Fade-in from left animation */
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
/* iPad Pro specific media query (landscape & portrait) */
@media only screen and (min-width: 1024px) and (max-width: 1366px) {
    .equity-advisory-overview-new-section {
        margin-left: 50px;
        margin-right: 50px;
    }
}

    /* Initially hide the section */
    .equity-advisory-overview-new-section {
        opacity: 0;
        transform: translateX(-50px);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    /* Class to trigger animation */
    .equity-advisory-overview-new-section.show {
        opacity: 1;
        transform: translateX(0);
    }

/** Equity Advisory - How we help **/
/** Equity Advisory - How we help **/
/* Container */
.equity-advisory-how-we-help-container {
    max-width: 1200px;
    margin: 0 auto; /* Centering */
    padding: 2rem;
    text-align: center;
    margin-top: 0px;
    background-color: rgb(249, 247, 244);
    border-radius: 20px;
}

/* Heading & Subheading */
.equity-advisory-how-we-help-heading {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #2c3e50;
    font-weight: bold;
}

.equity-advisory-how-we-help-subheading {
    font-size: 1.5rem;
    color: #6c757d;
    margin-bottom: 2rem;
}

/* Cards Grid */
.equity-advisory-how-we-help-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

/* Individual Cards */
.equity-advisory-how-we-help-card {
    position: relative;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;

    /* Initial state for fade-in effect */
    opacity: 0;
    transform: translateX(50px);
}

/* Left border gradient */
.equity-advisory-how-we-help-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 8px;
    background: linear-gradient(45deg, #f9c74f, #f39c12);
    border-radius: 12px 0 0 12px;
}

/* Hover effect */
.equity-advisory-how-we-help-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Icons */
.equity-advisory-how-we-help-icon {
    font-size: 2.5rem;
    color: #3498db;
    margin-bottom: 1rem;
}

/* Titles */
.equity-advisory-how-we-help-card-title {
    font-size: 1rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #2c3e50;
}

/* Text */
.equity-advisory-how-we-help-card-text {
    font-size: 1rem;
    line-height: 1.6;
    color: #6c757d;
}

/* Fade-in from Right Animation */
.fade-in-right {
    opacity: 1 !important;
    transform: translateX(0) !important;
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/* Mobile Devices (up to 767px) */
@media (max-width: 767px) {
    .equity-advisory-how-we-help-container {
        padding-left: 20px;
        padding-right: 20px;
        margin-right: 20px;
        margin-left: 20px;
    }

    .equity-advisory-how-we-help-cards {
        grid-template-columns: 1fr;
    }
}

/* Tablet Devices (768px to 1024px) */
@media (min-width: 768px) and (max-width: 1024px) {
    .equity-advisory-how-we-help-container {
        padding-left: 20px;
        padding-right: 20px;
        margin-right: 20px;
        margin-left: 20px;
    }

    .equity-advisory-how-we-help-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* iPad Pro (Portrait & Landscape) and Surface Pro 7 */
@media (min-width: 768px) and (max-width: 1366px) {
    .equity-advisory-how-we-help-container {
        padding-left: 20px;
        padding-right: 20px;
        margin-right: 20px;
        margin-left: 20px;
    }
    
    /* Specific adjustment for iPad Pro landscape */
    @media (min-width: 1024px) and (max-width: 1366px) and (orientation: landscape) {
        .equity-advisory-how-we-help-cards {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    
    /* Specific adjustment for iPad Pro portrait */
    @media (min-width: 1024px) and (max-width: 1366px) and (orientation: portrait) {
        .equity-advisory-how-we-help-cards {
            grid-template-columns: repeat(2, 1fr);
        }
    }
}

/* Nest Hub (1024px) */
@media (width: 1024px) {
    .equity-advisory-how-we-help-container {
        padding-left: 20px;
        padding-right: 20px;
        margin-right: 20px;
        margin-left: 20px;s
    }
    
    .equity-advisory-how-we-help-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Small Desktop Devices (1025px to 1200px) */
@media (min-width: 1025px) and (max-width: 1200px) {
    .equity-advisory-how-we-help-container {
        padding-left: 2rem;
        padding-right: 2rem;
        margin-right: 20px;
        margin-left: 20px;
    }

    .equity-advisory-how-we-help-cards {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Large Desktop Devices (1201px and up) */
@media (min-width: 1201px) {
    .equity-advisory-how-we-help-container {
        padding-left: 2rem;
        padding-right: 2rem;
       
    }

    .equity-advisory-how-we-help-cards {
        grid-template-columns: repeat(4, 1fr);
    }
}


   /* Equity Advisory - End section */
.equity-advisorycta {
    text-align: center;
    margin-top: 30px; 
}

.equity-advisorycta h3 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 20px;
    font-weight: 500;
    letter-spacing: 1px;
}

.equity-advisorycta .cta-button {
    background-color: #d0a94e; 
    color: white;
    font-size: 1.2rem;
    padding: 15px 30px;
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); 
    display: inline-block;
    width: auto;
    max-width: 100%;
    border: none;
    border-radius: 6px;
}

/* Hover effect */
.equity-advisorycta .cta-button:hover {
    transform: translateY(-3px); 
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); 
}

/* Tablets and medium devices */
@media (max-width: 1024px) {
    .equity-advisorycta h3 {
        font-size: 1.4rem;
    }

    .equity-advisorycta .cta-button {
        font-size: 1.1rem;
        padding: 12px 25px;
        width: 70%;
    }
}

/* Small tablets and large phones */
@media (max-width: 768px) {
    .equity-advisorycta h3 {
        font-size: 1.3rem;
    }

    .equity-advisorycta .cta-button {
        font-size: 1rem;
        padding: 10px 20px;
        width: 80%;
    }
}

/* Mobile phones */
@media (max-width: 480px) {
    .equity-advisorycta h3 {
        font-size: 1.2rem;
    }

    .equity-advisorycta .cta-button {
        font-size: 0.95rem;
        padding: 10px 18px;
        width: 90%;
    }
}

/* Very small screens */
@media (max-width: 360px) {
    .equity-advisorycta h3 {
        font-size: 1.1rem;
    }

    .equity-advisorycta .cta-button {
        font-size: 0.9rem;
        padding: 8px 15px;
        width: 95%;
    }
}
    </style>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection