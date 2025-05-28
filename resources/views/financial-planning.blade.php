@extends('layouts.app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Page Header Start -->
       <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ Vite::asset('resources/theme/img/financialpanning.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Financial Planning</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Financial Planning</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
   
<!-- public/img/financialpanning.webp -->
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
          <img src="{{Vite::asset('resources/theme/img/financial-planning-img2.webp')}}" alt="Planner analyzing financial goals and savings strategies
for clients." class="hero-image">
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
<script>
document.addEventListener("DOMContentLoaded", function () {
  const stepCards = document.querySelectorAll(".fp-step-card");

  function handleScroll() {
    stepCards.forEach((card) => {
      const cardPosition = card.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      // Add 'fade-in' class when the card is in view
      if (cardPosition < windowHeight - 100) {
        card.classList.add("fade-in");
      } else {
        // Remove 'fade-in' class when the card goes out of view
        card.classList.remove("fade-in");
      }
    });
  }

  // Add a slight delay to smooth the transition
  let scrollTimeout;
  function debounceHandleScroll() {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(handleScroll, 70); // Adjust delay for smooth effect
  }

  // Run on scroll with a delay
  window.addEventListener("scroll", debounceHandleScroll);

  // Run once on page load to check visibility
  handleScroll();
});
</script>
  <!-- Steps end -->

 <!-- Benefits of Financial Planning Section-start -->
<div class="financial-planning-bef">
  <div class="financial-planning-bef-heading-container">
    <h1 class="financial-planning-bef-section-heading">Benefits of Financial Planning</h1>
  </div>
  <div class="financial-planning-bef-image-section">
    <div class="financial-planning-bef-image-background">
      <img src="{{Vite::asset('resources/theme/img/fp-bef-2.webp')}}" alt="Person smiling,Planner analyzing financial goals and savings strategies
for clients." class="profile-image">
    </div>
  </div>
  <div class="financial-planning-bef-content-section">
    <div class="financial-planning-bef-card-container">
      <div class="financial-planning-bef-card">
        <h2>Direction & Clarity</h2>
        <p>Financial planning serves as a roadmap for your financial future, giving clarity to your financial decisions. It helps you understand how each decision, whether it's investing in a product or managing your budget, influences other aspects of your finances.</p>
      </div>
      <div class="financial-planning-bef-card">
        <h2>Long-Term Vision</h2>
        <p>A solid financial plan helps you evaluate how each choice aligns with your long-term goals. For example, buying an investment product could fast-track your mortgage repayment or delay your retirement, allowing you to make more informed decisions for the future.</p>
      </div>
      <div class="financial-planning-bef-card">
        <h2>Adaptability</h2>
        <p>Financial planning helps you adapt to changing circumstances by creating a structured approach that allows flexibility when needed.</p>
      </div>
      <div class="financial-planning-bef-card">
        <h2>Security & Confidence</h2>
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
    
    <div class="cards-container">
      <!-- Card 1 -->
      <div class="planning-card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
          </svg>
        </div>
        <div class="card-content">
          <h3>Wealth Management</h3>
          <p>Building, managing, and preserving wealth is not an easy task. Maybe you have recently retired and are concerned about outliving your nest egg.</p>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="planning-card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zm0-12H5V5h14v2zM9.29 17.47l2.44-2.44 2.44 2.44 1.06-1.06-2.44-2.44 2.44-2.44-1.06-1.06-2.44 2.44-2.44-2.44-1.06 1.06 2.44 2.44-2.44 2.44z"/>
          </svg>
        </div>
        <div class="card-content">
          <h3>Retirement Planning</h3>
          <p>Perhaps you are a baby boomer trying to plan for a secure retirement. Maybe you are part of the "sandwich generation".</p>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="planning-card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zm1-11h-2v3H8v2h3v3h2v-3h3v-2h-3V8z"/>
          </svg>
        </div>
        <div class="card-content">
          <h3>Life Transitions</h3>
          <p>Maybe you are recently widowed or divorced with all of the complications that these life challenges bring.</p>
        </div>
      </div>
      
      <!-- Card 4 -->
      <div class="planning-card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
          </svg>
        </div>
        <div class="card-content">
          <h3>Asset Protection</h3>
          <p>Maybe you have accumulated substantial wealth and want to protect your assets from lawsuits, spendthrift relatives, or divorce.</p>
        </div>
      </div>
      
      <!-- Card 5 -->
      <div class="planning-card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z"/>
          </svg>
        </div>
        <div class="card-content">
          <h3>Expert Guidance</h3>
          <p>Further complicating the financial landscape is the vast array of advisors and publications that typically offer conflicting opinions.</p>
        </div>
      </div>
      
      <!-- Card 6 -->
      <div class="planning-card">
        <div class="card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z"/>
          </svg>
        </div>
        <div class="card-content">
          <h3>Comprehensive Planning</h3>
          <p>Selecting appropriate investments is simply one ingredient in the recipe for an effective financial plan.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
 document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".planning-card");

  function fadeInCards() {
    cards.forEach((card) => {
      const cardPosition = card.getBoundingClientRect().top;
      const screenPosition = window.innerHeight - 100;

      if (cardPosition < screenPosition) {
        card.classList.add("fade-in");
      } else {
        // Remove fade-in when card goes out of view to re-trigger the effect
        card.classList.remove("fade-in");
      }
    });
  }
  window.addEventListener("scroll", fadeInCards);
  fadeInCards();
});

</script>

<style>
/* Financial Planning Section */
.financial-planning-section {
  padding: 30px 0;
  background-color: #f9f9f9;
  margin-left: 50px;
  margin-right: 50px;
  border-radius: 20px;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Section Heading */
.section-heading {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #333;
  position: relative;
}

.section-heading:after {
  content: '';
  display: block;
  width: 80px;
  height: 4px;
  background: #D4AF37;
  margin: 15px auto;
}

/* Section Introduction */
.section-introduction {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 50px;
  font-size: 1.1rem;
  line-height: 1.6;
  color: #555;
}

/* Cards Container */
.cards-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

/* Planning Card */
.planning-card {
  background: white;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  height: 100%;
  border-top: 4px solid #D4AF37;
}

.planning-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

/* Card Icon */
.card-icon {
  padding: 25px 25px 0;
  color: #D4AF37;
}

.card-icon svg {
  width: 40px;
  height: 40px;
}

/* Card Content */
.card-content {
  padding: 20px 25px 30px;
}

.card-content h3 {
  margin-top: 0;
  margin-bottom: 15px;
  color: #333;
  font-size: 1.3rem;
}

.card-content p {
  color: #666;
  line-height: 1.6;
  margin: 0;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .container {
    padding: 0 15px;
  }
  .section-heading {
    font-size: 2.2rem;
  }
  .cards-container {
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  }
}

@media (max-width: 768px) {
  .financial-planning-section {
    margin-left: 20px;
    margin-right: 20px;
  }
  .cards-container {
    grid-template-columns: 1fr;
  }
  .section-heading {
    font-size: 2rem;
  }
  .section-introduction {
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .financial-planning-section {
    margin-left: 20px;
    margin-right: 20px;
  }
  .container {
    padding: 0 10px;
  }
  .section-heading {
    font-size: 1.8rem;
  }
  .section-introduction {
    font-size: 0.95rem;
  }
  .planning-card {
    border-radius: 8px;
  }
  .card-content h3 {
    font-size: 1.2rem;
  }
}
/* Initial state for fade-in effect */
.planning-card {
  opacity: 0;
  transform: translateX(-50px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/* Active state when element is in viewport */
.planning-card.fade-in {
  opacity: 1;
  transform: translateX(0);
}

</style>
<!-- FP Need -end -->

<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Typewriter Effect for Wealth Content Only (Paragraph)
            (function () {
                const wealthContent = document.querySelectorAll(".wealth-content");

                wealthContent.forEach((element) => {
                    const text = element.textContent;
                    element.textContent = ""; 

                    let index = 0;

                    function typeEffect() {
                        if (index < text.length) {
                            element.textContent += text[index];
                            index++;
                            setTimeout(typeEffect, 50); 
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