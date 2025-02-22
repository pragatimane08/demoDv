@extends('layouts.app')
@section('content')
    

       <!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/pmshd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">PMS-AIF</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Product</a></li>
                  <li class="breadcrumb-item"><a href="#">PMS-AIF</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->

    <!-- pms-start -->
    <section class="portfolio-section">
        <div class="portfolio-container">
            <div class="portfolio-text">
                <h1>Portfolio Management Services</h1>
                <p>PMS Services strives to beat returns of the market index</p>
                <div class="cta-buttons">
                    <a href="{{ route('schedulemeeting') }}"  class="tp-unique-cta-button">📅 Book an expert call</a>
                    <button class="chat-whatsapp">💬 Chat with us</button>
                </div>
            </div>
            <div class="portfolio-graph">
                <h2>₹1 cr invested on Sept 2022 would have been:</h2>
                <div class="graph-bars">
                    <!-- First bar -->
                    <div class="bar">
    <div class="bar-value-wrapper">
        <p class="bar-text">₹1.39 Cr</p> 
        <div class="bar-value" style="--bar-height: 100px;"></div>
    </div>
    <p class="bar-label">Benchmark:( BSE 500 TRI)</p> 
</div>


                    <!-- Second bar -->
                    <div class="bar">
    <div class="bar-value-wrapper">
        <p class="bar-text">₹1.51 Cr</p> <!-- Text above the bar -->
        <div class="bar-value green-bar" style="--bar-height: 120px;"></div>
    </div>
    <p class="bar-label">Prosperity Equity Revival Strategy</p> <!-- Move this outside bar-value-wrapper -->
</div>

                </div>
            </div>
        </div>
    </section>
    <!-- pms-end -->
<style>
.bar-label {
    display: block;
    text-align: center;
    margin-top: 5px; /* Space above text */
    font-size: 14px;
    color: black; /* Adjust as needed */
    font-weight: bolder;
}

</style>

<!-- PMS Info Section -->
<div class="pms-info-container" id="pms-info-section1">
    <h1 class="pms-info-heading">Portfolio Management Services (PMS)</h1>
    <p class="pms-info-content">
        <span class="highlight">Portfolio Management Services (PMS)</span> is a customized, professionally managed investment solution designed to leverage market-linked opportunities through diverse investment strategies. Tailored for <span class="highlight">high-net-worth individuals (HNIs)</span>, PMS allows direct investment in a curated basket of securities, including equities, fixed income, and structured products, offering market exposure and risk-adjusted returns.
    </p>
    <p class="pms-info-content">
        At <span class="highlight">Dhana Vruksha</span>, we focus on creating high-quality portfolios that strike the right balance between diversification and optimal returns. Our <span class="highlight">proprietary analytics</span> ensure an <span class="highlight">unbiased selection</span> of investments, backed by <span class="highlight">in-depth research</span> and a commitment to long-term client prosperity. Unlike traditional wealth managers, we prioritize <span class="highlight">insight and integrity</span>, reshaping the wealth management industry by sticking to the basics.
    </p>
    <p class="pms-info-content">
        We are empaneled with a wide range of reputed <span class="highlight">third-party PMS providers</span> across India, including AMCs and financial institutions, to offer specialized PMS solutions tailored to your financial goals.
    </p>
</div>
<!-- pms-info-end -->

    <!--pms-sidebar-start-->
    <div class="pms-sidebar-container">
        <div class="pms-sidebar-section">
            <!-- Left Sidebar -->
            <div class="pms-sidebar">
                <h4>Existing Investments</h4>
                <h2>Analyse & improve your current portfolio</h2>
                <div class="pms-sidebar-item active" data-step="1">Evaluate your portfolio v/s current market</div>
                <div class="pms-sidebar-item" data-step="2">Check your portfolio for risk and diversification</div>
                <div class="pms-sidebar-item" data-step="3">Get all your questions answered for free in a 1-1 call</div>
                <button class="pms-review-button">Expert Guidance Awaits →</button>
                <a href="{{ route('contact-us') }}" class="pms-contact-button">Contact Us</a>

            </div>

            <!-- Right Content -->
            <div class="pms-right-content">
                <div class="pms-image-container">
                    <img src="img/aboutus-3.jpg" alt="Step 1" class="pms-step-image active" id="image1">
                    <img src="img/aboutus-2.jpg" alt="Step 2" class="pms-step-image" id="image2">
                    <img src="img/aboutus-1.jpg" alt="Step 3" class="pms-step-image" id="image3">
                </div>
            </div>
        </div>
    </div>
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
    <script>
        const sidebarItems = document.querySelectorAll('.pms-sidebar-item');
        const stepImages = document.querySelectorAll('.pms-step-image');
        let currentStep = 0;

        // Function to update active step
        function updateStep(index) {
            sidebarItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });

            stepImages.forEach((image, i) => {
                if (i === index) {
                    image.classList.add('active');
                } else {
                    image.classList.remove('active');
                }
            });
        }

        // Function to move to the next step
        function nextStep() {
            currentStep = (currentStep + 1) % sidebarItems.length;
            updateStep(currentStep);
        }

        // Rotate steps every 3 seconds
        setInterval(nextStep, 3000);

        // Add click event for manual selection
        sidebarItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                currentStep = index;
                updateStep(currentStep);
            });
        });
    </script>
    <!--pms-sidebar-end-->

  <!-- why-choose-pms-start -->
   <!-- Updated Why Choose Us Section -->
   <section class="why-choose-us">
  <h2>Why <span class="highlight">choose</span> us?</h2>
  <div class="why-choose-uscards-container">
    <!-- <div class="why-choose-uscard">
      <div class="icon">&#8377;</div>
      <h3>&#8377;10,000 Cr+</h3>
      <p>Assets managed in 2 years</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">📈</div>
      <h3>30.67% CAGR</h3>
      <p>Returns since inception</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">%</div>
      <h3>0% Fixed Fee</h3>
      <p>Pay only on profits made</p>
    </div> -->
    <div class="why-choose-uscard">
      <div class="icon">⏳</div>
      <h3>13 Decades</h3>
      <p>Relevant industry experience of core team</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">💰</div>
      <h3>&#8377;250 Cr+</h3>
      <p>Assets under management in just 2 years</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">🔍</div>
      <h3>Active Monitoring</h3>
      <p>Execution to deliver top-quartile returns</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">⚖️</div>
      <h3>Unbiased Selection</h3>
      <p>Truly unbiased product selection</p>
    </div>
    <div class="why-choose-uscard">
      <div class="icon">💻</div>
      <h3>Tech-Enabled</h3>
      <p>Seamless transactions & report generation</p>
    </div>
  </div>
</section>

<script>
// Function to check if an element is in the viewport
// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Function to reveal cards when they scroll into view
function revealCardsOnScroll() {
  const cards = document.querySelectorAll('.why-choose-uscard');
  cards.forEach(card => {
    if (isInViewport(card)) {
      card.classList.add('visible'); // Add the 'visible' class to trigger the animation
    } else {
      card.classList.remove('visible'); // Remove the class to reset animation
    }
  });
}

// Add event listeners for page load and scroll
window.addEventListener('scroll', revealCardsOnScroll);
window.addEventListener('load', revealCardsOnScroll);

</script>
<!-- why-choose-pms-end -->

<!-- AIF Section Start -->
<div class="aif-container" id="aif-section1">
    <h1 class="aif-heading text-to-animate">Alternate Investment Funds (AIFs)</h1>
    <p class="aif-content text-to-animate">
      Alternate Investment Funds (AIFs) usually include real estate, private equity, hedge funds, and venture
      capital funds or investments in stocks and bonds using strategies that go beyond traditional ways of
      investing, such as long/short or arbitrage strategies. Because alternatives tend to behave differently than
      typical stock and bond investments, adding them to a portfolio may provide broader diversification, reduce
      risk, and enhance returns.
    </p>

    <p class="aif-content text-to-animate">
      AIFs combine the operational ease of a mutual fund and the flexibility of a PMS, making it a perfect blend
      geared for generating optimum performance for a stipulated investment objective. To enhance risk-adjusted
      performance, these products can use complex strategies like unlisted equity investments, long-short hedging
      styles of investments, etc.
    </p>
  </div>

<script>
 // Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.bottom >= 0
  );
}

// Function to reveal text elements inside the container on scroll
function revealTextOnScroll() {
  const textElements = document.querySelectorAll('.text-to-animate');
  textElements.forEach((element) => {
    if (isInViewport(element)) {
      element.classList.add('visible'); // Add the 'visible' class to trigger the animation
    } else {
      element.classList.remove('visible'); // Reset animation when it leaves the viewport
    }
  });
}

// Add event listeners for page load and scroll
window.addEventListener('scroll', revealTextOnScroll);
window.addEventListener('load', revealTextOnScroll);
</script>
<!-- AIF Section End -->

    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
@endsection