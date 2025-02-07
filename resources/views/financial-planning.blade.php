@extends('layouts.app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  <div class="heading-container">
    <h1 class="section-heading">Benefits of Financial Planning</h1>
  </div>
  <div class="image-section">
    <div class="image-background">
      <img src="img/fp-bef-2.jpeg" alt="Person smiling" class="profile-image">
    </div>
  </div>
  <div class="content-section">
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
        <p>Knowing your financial goals are on track provides peace of mind. A comprehensive financial plan ensures you're prepared for the future and boosts your confidence in making proactive decisions towards achieving a secure financial future.</p>
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
      <p class="sequential-item">1. Building, managing, and preserving wealth is not an easy task. Maybe you have recently retired and are concerned about outliving your nest egg.</p>
      <p class="sequential-item">2. Perhaps you are a baby boomer trying to plan for a secure retirement. Maybe you are part of the “sandwich generation”, caring for your own children at home while also caring for the needs of aging parents.</p>
      <p class="sequential-item">3. Maybe you are recently widowed or divorced with all of the complications that these life challenges bring.</p>
      <p class="sequential-item">4. Maybe you have accumulated substantial wealth and want to protect your assets from lawsuits, spendthrift relatives, divorce, or other potential threats not only to yourself but also to your heirs.</p>
      <p class="sequential-item">5. Further complicating the financial landscape is the vast array of advisors and publications that typically offer conflicting opinions and advice.</p>
      <p class="sequential-item">6. Selecting appropriate investments is simply one ingredient in the recipe for an effective financial plan that should also include retirement and estate planning.</p>
    </div>
  </div>
</section>


  <script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".sequential-item");

  // Function to check if an element is in the viewport
  const isInView = (element) => {
    const rect = element.getBoundingClientRect();
    return rect.top >= 0 && rect.bottom <= window.innerHeight;
  };

  // Function to reveal items sequentially on scroll
  const showItemsSequentiallyOnScroll = () => {
    let delay = 0;

    items.forEach((item) => {
      if (isInView(item) && !item.classList.contains("show")) {
        setTimeout(() => {
          item.classList.add("show");
        }, delay);

        delay += 500; // Increment delay for sequential effect
      }
    });
  };

  // Trigger on scroll and initial page load
  window.addEventListener("scroll", showItemsSequentiallyOnScroll);
  window.addEventListener("load", showItemsSequentiallyOnScroll);
});

  </script>
<!-- FP Need -end -->

    
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
@endsection