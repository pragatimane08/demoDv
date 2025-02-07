@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Equity Advisory</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item"><a href="#">Equity Advisory</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!--Equity Advisory-info-start -->
    <section class="equity-advisory-section">
    <div class="equity-advisory-container">
        <header class="equity-advisory-header">
            <h1>Equity Advisory Services</h1>
            <p class="equity-advisory-tagline">Your trusted partner in navigating the stock market.</p>
        </header>
        <div class="equity-advisory-overview">
            <p>Our Equity Advisory Services are designed to help you navigate the complexities of the stock market with confidence and precision. At Dhanavruksha, we provide personalized investment strategies tailored to your financial goals, risk tolerance, and market outlook.</p>
        </div>
    </div>
</section>
 <!--Equity Advisory-info-end -->

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
<!--Equity Advisory-How We Help-end -->

<div class="equity-advisorycta">
                    <h3>Start Your Investment Journey with Us!</h3>
                    <a href="contact.html" class="cta-button">Contact Our Experts</a>
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
        /*Equity Advisory*/
/* Section for Equity Advisory Services */
.equity-advisory-section {
  background-color: #f7f4ec; /* Subtle cream tone for a clean and elegant look */
  padding: 40px;
  border-radius: 20px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
  margin: 40px auto;
  text-align: center;
  max-width: 1200px;
  overflow: hidden;
  border: 2px solid #d0a94e; /* Gold border added */
}

/* Container for better layout control */
.equity-advisory-container {
  max-width: 100%;
  margin: 0 auto;
  padding: 0 25px;
}

/* Header styles */
.equity-advisory-header h1 {
  font-size: 2rem; /* Updated size */
  color: #d0a94e; /* Golden tone for a premium feel */
  margin-bottom: 20px;
  font-weight: 500;
  letter-spacing: 1.5px;
}

/* Tagline styles */
.equity-advisory-tagline {
  font-size: 1.5rem; /* Updated size */
  color: #6d6d6d; /* Neutral gray for balance */
  font-style: italic;
  margin-bottom: 30px;
  line-height: 1.8;
}

/* Overview section styles */
.equity-advisory-overview p {
  font-size: 1rem; /* Updated size */
  color: #333; /* Darker gray for readability */
  max-width: 850px;
  margin: 0 auto;
  line-height: 1.9;
  padding: 25px;
  background-color: #ffffff; /* Pure white for contrast */
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  border: 2px solid #d0a94e; /* Gold border added to overview */
}

.equity-advisory-overview p:hover {
  transform: scale(1.03); /* Hover effect applied only to the overview section */
}

/* Responsive Design */

/* For medium screens (tablets and small desktops) */
@media (max-width: 1024px) {
  .equity-advisory-header h1 {
    font-size: 1.8rem; /* Adjusted for medium screens */
  }

  .equity-advisory-tagline {
    font-size: 1.4rem;
  }

  .equity-advisory-overview p {
    font-size: 0.95rem;
  }
}

/* For small screens (mobile devices) */
@media (max-width: 768px) {
  .equity-advisory-header h1 {
    font-size: 1.6rem; /* Adjusted for smaller screens */
  }

  .equity-advisory-tagline {
    font-size: 1.3rem;
  }

  .equity-advisory-overview p {
    font-size: 0.9rem;
  }

  .equity-advisory-section {
    padding: 30px;
  }
}

/* For extra small screens (very small devices) */
@media (max-width: 480px) {
  .equity-advisory-header h1 {
    font-size: 1.5rem; /* Adjusted for extra small screens */
  }

  .equity-advisory-tagline {
    font-size: 1.2rem;
  }

  .equity-advisory-overview p {
    font-size: 0.85rem;
  }

  .equity-advisory-section {
    padding: 25px;
  }
}

/*Equity Advisory-How we help*/
.equity-advisory-how-we-help-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
  text-align: center;
}

.equity-advisory-how-we-help-heading {
  font-size: 2rem; /* Updated size */
  margin-bottom: 1rem;
  color: #2c3e50;
  font-weight: bold;
}

.equity-advisory-how-we-help-subheading {
  font-size: 1.5rem; /* Updated size */
  color: #6c757d;
  margin-bottom: 2rem;
}

.equity-advisory-how-we-help-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
}

.equity-advisory-how-we-help-card {
  position: relative;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  transition: transform 0.3s, box-shadow 0.3s;
  overflow: hidden;
}

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

.equity-advisory-how-we-help-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.equity-advisory-how-we-help-icon {
  font-size: 2.5rem;
  color: #3498db;
  margin-bottom: 1rem;
}

.equity-advisory-how-we-help-card-title {
  font-size: 1rem; /* Updated size */
  font-weight: bold;
  margin-bottom: 0.5rem;
  color: #2c3e50;
}

.equity-advisory-how-we-help-card-text {
  font-size: 1rem; /* Updated size */
  line-height: 1.6;
  color: #6c757d;
}

.equity-advisory-how-we-help-footer {
  margin-top: 3rem;
  background-color: #2c3e50;
  color: #fff;
  text-align: center;
  padding: 1rem;
}

.equity-advisory-how-we-help-footer p {
  font-size: 1rem; /* Updated size */
}

/* Responsive Design */
@media (max-width: 768px) {
  .equity-advisory-how-we-help-heading {
    font-size: 1.8rem; /* Slightly smaller for smaller screens */
  }

  .equity-advisory-how-we-help-subheading {
    font-size: 1.3rem; /* Adjusted for responsiveness */
  }

  .equity-advisory-how-we-help-cards {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
  }

  .equity-advisory-how-we-help-card {
    padding: 1.5rem;
  }

  .equity-advisory-how-we-help-card-title {
    font-size: 1rem; /* Consistent across responsive design */
  }

  .equity-advisory-how-we-help-card-text {
    font-size: 1rem; /* Consistent across responsive design */
  }

  .equity-advisory-how-we-help-footer p {
    font-size: 0.9rem; /* Slightly smaller */
  }
}

@media (max-width: 480px) {
  .equity-advisory-how-we-help-heading {
    font-size: 1.6rem; /* Further reduced for smaller screens */
  }

  .equity-advisory-how-we-help-subheading {
    font-size: 1.2rem; /* Adjusted for smaller screens */
  }

  .equity-advisory-how-we-help-cards {
    grid-template-columns: 1fr;
  }

  .equity-advisory-how-we-help-card {
    padding: 1rem;
  }

  .equity-advisory-how-we-help-card-title {
    font-size: 1rem;
  }

  .equity-advisory-how-we-help-card-text {
    font-size: 1rem;
  }
}

/*Equity Advisory -End section*/
.equity-advisorycta {
  text-align: center;
  margin-top: 30px; /* Added margin-top */
}

.equity-advisorycta h3 {
  font-size: 1.5rem;
  color: #333;
  margin-bottom: 20px;
  font-weight: 500;
  letter-spacing: 1px;
}

.equity-advisorycta .cta-button {
  background-color: #d0a94e; /* Golden tone for button */
  color: white;
  font-size: 1.2rem;
  padding: 15px 30px;
  text-decoration: none;
  /* border-radius: 8px; Slightly rounded corners */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transition for hover effects */
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.equity-advisorycta .cta-button:hover {
  transform: translateY(-3px); /* Lift the button slightly on hover */
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Add a more pronounced shadow */
}

/* Responsive Design for CTA Section */

/* For medium screens (tablets and small desktops) */
@media (max-width: 1024px) {
  .equity-advisorycta h3 {
    font-size: 1.4rem;
  }

  .equity-advisorycta .cta-button {
    font-size: 1.1rem;
    padding: 12px 25px;
  }
}

/* For small screens (mobile devices) */
@media (max-width: 768px) {
  .equity-advisorycta h3 {
    font-size: 1.3rem;
  }

  .equity-advisorycta .cta-button {
    font-size: 1rem;
    padding: 10px 20px;
  }
}

/* For extra small screens (very small devices) */
@media (max-width: 480px) {
  .equity-advisorycta h3 {
    font-size: 1.2rem;
  }

  .equity-advisorycta .cta-button {
    font-size: 0.9rem;
    padding: 8px 15px;
  }
}
    </style>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection