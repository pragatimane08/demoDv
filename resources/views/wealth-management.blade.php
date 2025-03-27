@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/wealthhd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Wealth Management</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item"><a href="#">wealth Management</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->

    <!-- Wealth Management Section Start -->
    <div class="wealth-container" id="wealth-section1">
        <h1 class="wealth-heading">Successful Wealth Management</h1>
        <p class="wealth-content">
            <span>
            <strong>Successful Wealth Management</strong> is an ever-changing ideal. It demands an in-depth consultative process that
                delivers customized solutions across the broad array of financial needs as well as asset classes.
                It ensures <strong>financial security</strong> for the future by aligning investment strategies with individual goals and
                priorities.
                Don’t let short-term hiccups and the ups and downs of business cycles come between you and your wealth
                creation.
                Wealth Management is an <strong>ongoing process</strong> and our commitment to your wealth creation.
            </span>
        </p>
    </div>
    <!-- Wealth Management Section End -->

    <!-- steps Section start -->
     <!-- Parallax Section -->
<div class="wealth-mng-parallax"></div>

<!-- Wealth Management Heading Above the Cards -->
<div class="wealth-mng-wealth-mng">
  <h1>Wealth Management</h1>
  <p>Take the First Step Toward Your Financial Goals with Us.</p>
  <p>Wealth Management is an ongoing process and reflects our commitment to your wealth creation.</p>
</div>



<!-- Steps Section -->
<div class="wealth-mng-steps-container">
    <div class="wealth-mng-step-row">
        <!-- Step 1 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">1</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Client Profiling & Segmentation</p>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">2</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Asset Allocation</p>
            </div>
        </div>
        <!-- Step 3 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">3</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Review of Existing Portfolio</p>
            </div>
        </div>
        <!-- Step 4 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">4</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Implementing / Optimising Asset Allocation</p>
            </div>
        </div>
    </div>

    <div class="wealth-mng-step-row">
        <!-- Step 5 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">5</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Investment Proposal</p>
            </div>
        </div>
        <!-- Step 6 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">6</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Execution</p>
            </div>
        </div>
        <!-- Step 7 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">7</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Monitoring & Updation</p>
            </div>
        </div>
        <!-- Step 8 -->
        <div class="wealth-mng-step-card">
            <div class="wealth-mng-step-left">
                <div class="wealth-mng-step-number">8</div>
                <div class="wealth-mng-partition"></div>
                <p class="wealth-mng-step-name">Periodic Portfolio Restructuring</p>
            </div>
        </div>
    </div>
</div>
<!-- Steps Section End -->
    <!-- steps Section End -->
     
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
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
@endsection