@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Free Review of External Portfolio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item"><a href="#">Free Review of External Portfolio</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!--FREP: Heading text-start  -->
    <div class="frep-container">
    <div class="frep-image">
      <img src="img/fepr-1.jpg" alt="Portfolio Review">
    </div>
    <div class="frep-content">
      <h1>Free External Portfolio Review</h1>
      <p>
        We offer a <span class="frep-highlight">Free Review</span> of your 
        <span class="frep-highlight">External Portfolio</span> to help you gain 
        a deeper understanding of your investments and ensure they align with 
        your <span class="frep-highlight">financial goals</span>.
      </p>

      <a href="{{ route('schedulemeeting') }}"  class="tp-unique-cta-button">Schedule a call</a>
    </div>
  </div>
<!--FREP: Heading text-end  -->
<!--FREP: wealth-analysis-start-->
<div class="external-portfolio-container">
    <div class="external-portfolio-header">
        <h1>Our Wealth Management Expertise</h1>
        <p>We conduct a thorough and unbiased analysis of your externally held assets, evaluating performance, risk exposure, diversification, and cost efficiency.</p>
    </div>
    <div class="external-portfolio-content">
        <div class="external-portfolio-card">
            <div class="external-portfolio-icon">📊</div>
            <h2>Performance Analysis</h2>
            <p>Detailed evaluation of your asset performance to ensure optimal growth.</p>
            <div class="external-portfolio-hover-effect"></div>
        </div>
        <div class="external-portfolio-card">
            <div class="external-portfolio-icon">⚠️</div>
            <h2>Risk Exposure</h2>
            <p>Comprehensive assessment of potential risks and mitigation strategies.</p>
            <div class="external-portfolio-hover-effect"></div>
        </div>
        <div class="external-portfolio-card">
            <div class="external-portfolio-icon">🌍</div>
            <h2>Diversification</h2>
            <p>Strategies to diversify your portfolio and reduce risk.</p>
            <div class="external-portfolio-hover-effect"></div>
        </div>
        <div class="external-portfolio-card">
            <div class="external-portfolio-icon">💸</div>
            <h2>Cost Efficiency</h2>
            <p>Optimizing costs to maximize your returns.</p>
            <div class="external-portfolio-hover-effect"></div>
        </div>
    </div>
</div>
<!--FREP: wealth-analysis-end  -->


<!-- FREP:Portfolio Optimization Section-start -->
<div class="fepr-portfolio-section">
    <h1>Optimize Your Portfolio</h1>
    <h2>Actionable Insights & Tailored Recommendations</h2>

    <p>We provide <strong>actionable insights</strong> and tailored <strong>recommendations</strong> to optimize your portfolio, address underperformance, and mitigate risks.</p>

    <!-- Info Cards Section -->
    <div class="fepr-info-cards">
      <div class="fepr-info-card">
        <i class="fas fa-check-circle"></i>
        <h3>Optimize Your Portfolio</h3>
        <p>Gain personalized strategies to maximize returns and minimize risk in your investments.</p>
      </div>

      <div class="fepr-info-card">
        <i class="fas fa-shield-alt"></i>
        <h3>Mitigate Risks</h3>
        <p>Identify potential risks and take proactive measures to safeguard your wealth.</p>
      </div>

      <div class="fepr-info-card">
        <i class="fas fa-chart-line"></i>
        <h3>Address Underperformance</h3>
        <p>Get insights into underperforming assets and actionable steps to improve results.</p>
      </div>
    </div>

    <p><strong>Our free review</strong> empowers you with clarity and confidence in managing your wealth effectively.</p>

    <button class="fepr-cta-button">Get Your Free Review</button>
  </div>

  <!-- Include Font Awesome for Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- FREP:Portfolio Optimization Section-end -->

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
       <style>
        /***Services***/
/*Free External Portfolio Review-start*/
/* Main Container */
.frep-container {
  display: flex;
  align-items: center;
  justify-content: space-between; /* Ensures content is spaced properly */
  width: 100%;
  max-width: 1200px;
  margin: 30px auto;
  padding: 25px;
  background: #fff;
  border: 2px solid #d0a94e;
  border-radius: 20px;
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
  box-sizing: border-box;
  gap: 20px; /* Add space between image and content */
}

/* Image Section */
.frep-image {
  flex: 1;
  max-width: 40%; /* Restricts image size */
  border-radius: 15px;
  overflow: hidden;
}

.frep-image img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 15px;
}

/* Content Section */
.frep-content {
  flex: 2;
  text-align: left;
}

.frep-content h1 {
  font-size: 2.5rem;
  color: #d0a94e;
  margin: 10px 0;
}

.frep-content p {
  font-size: 1.2rem;
  line-height: 1.8;
  color: #555;
  margin-bottom: 20px; /* Add spacing below paragraph */
}

.frep-highlight {
  font-weight: bold;
  color: #d0a94e;
}

/* Button Styling */
.frep-button {
  display: inline-block;
  margin-top: 20px;
  padding: 12px 25px;
  font-size: 1rem;
  /* font-weight: bold; */
  color: #fff;
  background-color: #d0a94e;
  border: none;
  border-radius: 30px;
  text-decoration: none;
  text-align: center;
  cursor: pointer;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.frep-button:hover {
  background-color: #b88941;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  transform: translateY(-3px); /* Adds a lift effect on hover */
  color: white;
}

/* Responsive Design for Tablets */
@media (max-width: 768px) {
  .frep-container {
    flex-direction: column; /* Stacks content vertically */
    padding: 20px;
    gap: 15px;
  }

  .frep-image {
    max-width: 100%; /* Ensures image takes full width */
    margin-bottom: 20px; /* Adds spacing below the image */
  }

  .frep-content h1 {
    font-size: 2rem;
  }

  .frep-content p {
    font-size: 1rem;
  }

  .frep-button {
    font-size: 0.9rem;
    padding: 10px 20px;
  }
}

/* Responsive Design for Mobile */
@media (max-width: 480px) {
  .frep-container {
    padding: 15px;
  }

  .frep-content h1 {
    font-size: 1.8rem;
  }

  .frep-content p {
    font-size: 0.9rem;
    line-height: 1.5;
  }

  .frep-button {
    font-size: 0.8rem;
    padding: 8px 15px;
  }
}

/*FREP: wealth-analysis*/
/* Wealth Analysis Section */
.fepr-cwr-wealth-analysis.fepr-cwr {
  text-align: center;
  padding: 40px;
  background-color: #f9f9f9;
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  margin: 40px auto;
  max-width: 1200px;
  border: 2px solid #d0a94e; /* Add border to give more definition */
}

/* Heading */
.fepr-cwr-wealth-analysis.fepr-cwr h2 {
  font-size: 2rem;
  color: #333;
  margin-bottom: 20px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 2px;
}

/* Paragraph Description */
.fepr-cwr-wealth-analysis.fepr-cwr p {
  font-size: 1rem;
  color: #555;
  margin-bottom: 30px;
  font-weight: 400;
  line-height: 1.6;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

/* Sub-text Description */
.fepr-cwr-wealth-analysis.fepr-cwr .sub-text {
  font-size: 1.5rem;
  color: #777;
  margin-bottom: 30px;
  font-weight: 400;
  line-height: 1.6;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

/* Circle Container */
.fepr-cwr-circle-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
  gap: 30px;
}

/* Circle Styling */
.fepr-cwr-circle.fepr-cwr {
  width: 180px;
  height: 180px;
  background-color: #d0a94e;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  margin: 15px;
  transition: all 0.3s ease;
  padding: 20px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}

/* Circle Text */
.fepr-cwr-circle.fepr-cwr h3 {
  font-size: 1.3rem;
  text-align: center;
  font-weight: bold;
  margin: 0;
  letter-spacing: 1px;
  text-transform: capitalize;
}

/* Hover Effect */
.fepr-cwr-circle.fepr-cwr:hover {
  background-color: #b88941;
  transform: scale(1.1);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.fepr-cwr-circle.fepr-cwr h3 {
  font-size: 1.4rem;
  color: #fff;
  transition: color 0.3s ease;
}

.fepr-cwr-circle.fepr-cwr:hover h3 {
  color: #fff;
  transform: scale(1.05);
}

/* Responsive Design */

/* Large Screens (Desktops and Laptops) */
@media (min-width: 1200px) {
  .fepr-cwr-wealth-analysis.fepr-cwr {
    padding: 50px;
    max-width: 1200px;
  }
  .fepr-cwr-wealth-analysis.fepr-cwr h2 {
    font-size: 2.5rem;
  }
  .fepr-cwr-wealth-analysis.fepr-cwr p {
    font-size: 1.2rem;
  }
  .fepr-cwr-circle.fepr-cwr {
    width: 200px;
    height: 200px;
  }
  .fepr-cwr-circle.fepr-cwr h3 {
    font-size: 1.5rem;
  }
}

/* Medium Screens (Tablets and smaller Laptops) */
@media (min-width: 768px) and (max-width: 1199px) {
  .fepr-cwr-wealth-analysis.fepr-cwr {
    padding: 40px;
  }
  .fepr-cwr-wealth-analysis.fepr-cwr h2 {
    font-size: 2.2rem;
  }
  .fepr-cwr-wealth-analysis.fepr-cwr p {
    font-size: 1.1rem;
  }
  .fepr-cwr-circle.fepr-cwr {
    width: 180px;
    height: 180px;
  }
  .fepr-cwr-circle.fepr-cwr h3 {
    font-size: 1.4rem;
  }
}

/* Small Screens (Phones) */
@media (max-width: 767px) {
  .fepr-cwr-wealth-analysis.fepr-cwr {
    padding: 30px;
    margin: 20px auto;
  }
  .fepr-cwr-wealth-analysis.fepr-cwr h2 {
    font-size: 1.8rem;
    margin-bottom: 15px;
  }
  .fepr-cwr-wealth-analysis.fepr-cwr p {
    font-size: 1rem;
    margin-bottom: 25px;
  }
  .fepr-cwr-wealth-analysis.fepr-cwr .sub-text {
    font-size: 1.3rem;
  }
  .fepr-cwr-circle-container {
    flex-direction: column;
    align-items: center;
  }
  .fepr-cwr-circle.fepr-cwr {
    width: 160px;
    height: 160px;
    margin-bottom: 20px;
  }
  .fepr-cwr-circle.fepr-cwr h3 {
    font-size: 1.3rem;
  }
}

/*/*FREP: Portfolio Optimization Section*/
/* Container for the whole portfolio section */
.fepr-portfolio-section {
  max-width: 1200px;
  margin: 50px auto;
  padding: 30px;
  background-color: wheat;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

/* Main Title */
.fepr-portfolio-section h1 {
  font-size: 36px;
  color: #2d2d2d;
  text-align: center;
  margin-bottom: 10px;
}

/* Subheading */
.fepr-portfolio-section h2 {
  font-size: 24px;
  color: #d0a94e;
  text-align: center;
  margin-bottom: 20px;
}

/* Paragraphs */
.fepr-portfolio-section p {
  font-size: 18px;
  color: #5a5a5a;
  line-height: 1.6;
  text-align: center;
  margin-bottom: 20px;
}

/* Call to Action Button */
.fepr-cta-button {
  background-color: #d0a94e;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  text-align: center;
  display: block;
  width: 200px;
  margin: 20px auto;
  font-size: 18px;
  transition: background-color 0.3s ease;
}

.fepr-cta-button:hover {
  background-color: #b38b3e;
}

/* Info Cards Section */
.fepr-info-cards {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  flex-wrap: wrap;
  margin-top: 40px;
  margin-bottom: 20px;
}

/* Individual Info Cards */
.fepr-info-card {
  background-color: #f9f9f9;
  padding: 20px;
  text-align: center;
  border-radius: 8px;
  width: 30%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.fepr-info-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.fepr-info-card i {
  font-size: 40px;
  color: #d0a94e;
  margin-bottom: 20px;
}

.fepr-info-card h3 {
  font-size: 20px;
  color: #2d2d2d;
  margin-bottom: 10px;
}

.fepr-info-card p {
  font-size: 16px;
  color: #5a5a5a;
}

/* Responsive Design */
@media (max-width: 768px) {
  /* Stack elements on smaller screens */
  .fepr-info-card {
    width: 48%;
    margin-bottom: 20px;
  }

  .fepr-cta-button {
    width: 180px;
  }

  .fepr-portfolio-section h1 {
    font-size: 32px;
  }

  .fepr-portfolio-section h2 {
    font-size: 20px;
  }

  .fepr-portfolio-section p {
    font-size: 16px;
  }
}

@media (max-width: 480px) {
  /* Stack elements further on extra small screens */
  .fepr-info-card {
    width: 100%;
  }

  .fepr-cta-button {
    width: 150px;
    padding: 10px;
  }

  .fepr-portfolio-section h1 {
    font-size: 28px;
  }

  .fepr-portfolio-section h2 {
    font-size: 18px;
  }

  .fepr-portfolio-section p {
    font-size: 14px;
  }
}
       </style>

    


<style>
.external-portfolio-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    
    border: 2px solid #D4AF37; /* Adding a gold-colored border */
    border-radius: 15px; /* Optional: add rounded corners */
    background-color: whitesmoke;
}

.external-portfolio-header {
    text-align: center;
    margin-bottom: 60px;
}

.external-portfolio-header h1 {
    font-size: 2.5rem;
    color: #D4AF37; /* Gold color */
    margin-bottom: 10px;
}

.external-portfolio-header p {
    font-size: 1.2rem;
    color: #666;
    max-width: 1200px;
    margin: 0 auto;
}

.external-portfolio-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.external-portfolio-card {
    background: white;
    padding: 30px;
    width: calc(27% - 40px);
    height: 317px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.external-portfolio-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: #D4AF37;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease;
}

.external-portfolio-card:hover::before {
    transform: scaleX(1);
}

.external-portfolio-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.external-portfolio-icon {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #D4AF37;
}

.external-portfolio-card h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

.external-portfolio-card p {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
}

.external-portfolio-hover-effect {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(212, 175, 55, 0.1);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.external-portfolio-card:hover .external-portfolio-hover-effect {
    opacity: 1;
}

@media (max-width: 768px) {
    .external-portfolio-card {
        width: calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .external-portfolio-card {
        width: 100%;
    }
}
</style> 


@endsection