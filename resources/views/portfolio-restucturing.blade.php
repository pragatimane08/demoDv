@extends('layouts.app')
@section('content')
<!-- public/img/portfoiliofreehd.jpeg -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/portfoliofreereviewhd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Portfolio Restructuring</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Portfolio Restructuring</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    
    <!-- Page Header End -->
   
    <div class="portfolio-restructuring-info-section">
        <div class="portfolio-restructuring-info-container">
            <!-- Left Images Section -->
            <div class="portfolio-restructuring-info-images">
                <div class="portfolio-restructuring-info-image-top">
                    <img src="img/about.jpg" alt="Investment portfolio being optimized for better returns
and lower risks." class="portfolio-restructuring-info-image">
                </div>
                <div class="portfolio-restructuring-info-image-bottom">
                    <img src="img/project-3.jpg" alt="Graphs and Analysis,Investment portfolio being optimized for better returns
and lower risks." class="portfolio-restructuring-info-image">
                </div>
            </div>
            <!-- Right Content Section -->
            <div class="portfolio-restructuring-info-content">
                <h6 class="portfolio-restructuring-info-subtitle text-uppercase mb-2">What is Portfolio Restructuring?
                </h6>
                <h1 class="portfolio-restructuring-info-title display-6 mb-4">We Help Clients to Achieve Financial
                    Freedom</h1>
                <p class="portfolio-restructuring-info-description">
                    Portfolio restructuring is the process of reviewing and reorganizing your investments to ensure they
                    align with your current financial goals, risk tolerance, and market conditions. Over time, personal
                    goals and market dynamics change, making it necessary to adjust your investment strategy to stay on
                    track.
                </p>
                <div class="portfolio-restructuring-info-row g-2 mb-4 pb-2">
                    <div class="portfolio-restructuring-info-col-sm-6">
                        <i class="fa fa-check portfolio-restructuring-info-icon me-2"></i>Adjusting investments for
                        changing
                        financial goals
                    </div>
                    <div class="portfolio-restructuring-info-col-sm-6">
                        <i class="fa fa-check portfolio-restructuring-info-icon me-2"></i>Improving risk-reward balance.
                    </div>
                    <div class="portfolio-restructuring-info-col-sm-6">
                        <i class="fa fa-check portfolio-restructuring-info-icon me-2"></i>Adapting to market trends.
                    </div>
                </div>
                <!-- <div class="portfolio-restructuring-info-row g-4">
                    <div class="portfolio-restructuring-info-col-sm-6">
                        <a class="btn portfolio-restructuring-info-btn" href="">Read More</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    
    <script>
        // Initialize Typed.js for auto-typing text
        var typed = new Typed('.auto-type', {
            strings: ['Growth', 'Financial Freedom'],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });

        // JavaScript to Dynamically Replace "Benefits" with "Work"
        document.addEventListener("DOMContentLoaded", () => {
            const sectionTitle = document.querySelector(".work-title");
            const sectionDescription = document.querySelector(".work-description");

            // Ensure the elements exist before changing text
            if (sectionTitle && sectionDescription) {
                sectionTitle.textContent = "Our Work Process";  // Change "Benefits" to "Work"
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
       
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection