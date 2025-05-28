@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ Vite::asset('resources/theme/img/giftcityfund.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Gift City Funds</h1>
      </div>
   </div>
</div>
    
<!-- Page Header End -->

<section id="about-gift-city" class="about-gift-city-section">
  <div class="about-container">
    <h2 class="section-heading slide-in-from-left">Discover GIFT City</h2>
    <p class="section-description fade-in">
      GIFT City (Gujarat International Financial-Tec City) is India's premier International Financial Services Centre (IFSC), approved and regulated by the government under the Special Economic Zones Act, 2005. It offers world-class financial services to both residents and non-residents in foreign currency, fostering global economic growth.
    </p>

    <div class="timeline-features">
      <div class="timeline-item">
        <div class="timeline-icon gradient-animation">
          <i class="fas fa-globe"></i>
        </div>
        <div class="timeline-content slide-in-from-right">
          <h3 class="feature-title">Global Reach</h3>
          <p class="feature-text">Connecting businesses and investors across the globe with seamless financial services.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-icon gradient-animation">
          <i class="fas fa-building"></i>
        </div>
        <div class="timeline-content slide-in-from-left">
          <h3 class="feature-title">World-Class Infrastructure</h3>
          <p class="feature-text">State-of-the-art facilities designed to support international financial operations.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-icon gradient-animation">
          <i class="fas fa-handshake"></i>
        </div>
        <div class="timeline-content slide-in-from-right">
          <h3 class="feature-title">Favourable Regulations</h3>
          <p class="feature-text">A business-friendly environment with streamlined policies and tax benefits.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Advantage of GIFT City Funds -->
<div class="adv-gift-city-container">
  <h2 class="section-heading">Key Advantages of GIFT City Funds</h2>
  <div class="adv-gift-city-grid">
    <!-- Advantage 1 -->
    <div class="adv-gift-city-card">
      <div class="adv-gift-city-icon">
        <i class="fas fa-dollar-sign"></i>
      </div>
      <h3>Invest in USD</h3>
      <p>Invest in USD and redeem in USD, protecting from rupee depreciation.</p>
    </div>
    <!-- Advantage 2 -->
    <div class="adv-gift-city-card">
      <div class="adv-gift-city-icon">
        <i class="fas fa-hand-holding-usd"></i>
      </div>
      <h3>No TDS on Returns</h3>
      <p>No Tax Deducted at Source from returns generated, unlike Mutual Funds.</p>
    </div>
    <!-- Advantage 3 -->
    <div class="adv-gift-city-card">
      <div class="adv-gift-city-icon">
        <i class="fas fa-percent"></i>
      </div>
      <h3>GST-Free</h3>
      <p>Gift City Funds are free from the levy of GST.</p>
    </div>
    <!-- Advantage 4 -->
    <div class="adv-gift-city-card">
      <div class="adv-gift-city-icon">
        <i class="fas fa-chart-line"></i>
      </div>
      <h3>Diverse Investment Options</h3>
      <p>Invest in Funds that invest in listed equities, unlisted equities, real estate, and more.</p>
    </div>
  </div>
</div>

<!--Advantage of GIFT City Funds-end-->

<style>
/* GIFT City Section Styling */
.about-gift-city-section {
  padding: 20px 0;
  background-color: rgba(255, 215, 0, 0.1);
  text-align: center;
  max-width: 1400px;
  margin: 0 50px 30px; 
  opacity: 1;
  visibility: visible;
  border-radius: 20px;
}

.about-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Section Heading */
.section-heading {
  font-size: 2.5rem;
  color: #2c3e50;
  margin-bottom: 20px;
  position: relative;
}

.section-heading::after {
  content: '';
  display: block;
  width: 60px;
  height: 3px;
  background: #d4af37;
  margin: 10px auto 0;
}

/* Section Description */
.section-description {
  font-size: 1.1rem;
  color: #555;
  margin: 0 auto 30px;
  line-height: 1.9;
  text-align: justify;
}

/* Timeline Features */
.timeline-features {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.timeline-item {
  display: flex;
  align-items: center;
  margin-bottom: 40px;
}

.timeline-icon {
  width: 60px;
  height: 60px;
  background: #d4af37;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  font-size: 1.5rem;
  margin-right: 20px;
  flex-shrink: 0;
}

.timeline-content {
  text-align: left;
}

.feature-title {
  font-size: 1.5rem;
  color: #2c3e50;
  margin-bottom: 10px;
}

.feature-text {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

/* Timeline Vertical Line */
.timeline-features::before {
  content: '';
  position: absolute;
  top: 0;
  left: 30px;
  width: 2px;
  height: 100%;
  background: #d4af37;
  z-index: 1;
}

/* Responsive Design */
@media (max-width: 1200px) {
  .about-gift-city-section {
    margin: 0 50px 20px; 
    padding: 60px 0;
  }

  .section-heading {
    font-size: 2.2rem;
  }

  .section-description {
    font-size: 1rem;
  }
}

@media (max-width: 768px) {
  .about-gift-city-section {
    padding: 50px 0;
    width: calc(100% - 40px); 
    margin: 0 auto 20px; 
    max-width: 100%;
  }

  .section-heading {
    font-size: 2rem;
  }

  .section-description {
    font-size: 0.95rem;
    text-align: left;
  }
}

@media (max-width: 480px) {
  .about-gift-city-section {
    padding: 40px 0;
    width: calc(100% - 40px); 
    margin: 0 auto 20px; 
    max-width: 100%;
  }

  .section-heading {
    font-size: 1.8rem;
  }

  .section-description {
    font-size: 0.9rem;
    line-height: 1.8;
  }
}

@media (max-width: 400px) {
  .about-gift-city-section {
    padding: 30px 0;
    width: calc(100% - 40px);
    margin: 0 auto 20px; 
    max-width: 100%;
  }

  .section-heading {
    font-size: 1.6rem;
  }

  .section-heading::after {
    width: 40px;
    height: 2px;
  }

  .section-description {
    font-size: 0.85rem;
    line-height: 1.7;
  }
}

/* Animation Fixes - Ensure Visibility */
.slide-in-from-left, .slide-in-from-right, .fade-in {
  opacity: 1 !important;
  visibility: visible !important;
  transform: translateX(0) !important;
  transition: all 0.5s ease-in-out;
}

/* *** advantage of gift city funds starts ****/
/* General Styles */
.adv-gift-city-container {
    max-width: 1250px;
    margin: 30px auto; 
    padding: 40px 20px;
    background-color: rgb(247, 238, 213);
    text-align: center;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Section Heading */
.section-heading {
    font-size: 2.2rem;
    font-weight: bold;
    color: #D2AC47;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Grid Layout */
.adv-gift-city-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); 
    gap: 25px;
    padding: 20px;
    justify-content: center;
}

/* Cards */
.adv-gift-city-card {
    background-color: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    position: relative;
    overflow: hidden;
}

.adv-gift-city-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    background: linear-gradient(135deg, #fff6e5, rgb(253, 223, 147));
}

/* Icons */
.adv-gift-city-icon {
    font-size: 2.5rem;
    color: white;
    background: linear-gradient(135deg, #D2AC47, #b79135);
    padding: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    margin: 0 auto 15px auto;
    box-shadow: 0 5px 12px rgba(210, 172, 71, 0.5);
    transition: transform 0.3s ease-in-out;
}

.adv-gift-city-card:hover .adv-gift-city-icon {
    transform: rotate(360deg) scale(1.1);
}

/* Text Content */
.adv-gift-city-card h3 {
    font-size: 1.5rem;
    color: #D2AC47;
    margin-bottom: 10px;
    font-weight: 700;
    transition: color 0.3s ease-in-out;
}

.adv-gift-city-card p {
    font-size: 1rem;
    color: #444;
    line-height: 1.6;
    transition: color 0.3s ease-in-out;
}

.adv-gift-city-card:hover h3, .adv-gift-city-card:hover p {
    color: #8f7230;
}

/* Responsive Design */

/* iPad Pro (1024px width) */
@media (max-width: 1024px) {
    .adv-gift-city-grid {
        grid-template-columns: repeat(2, 1fr); 
    }

    .adv-gift-city-container {
        margin: 0 50px; 
        padding: 50px 20px;
    }

    .adv-gift-city-card {
        padding: 22px; 
    }

    .adv-gift-city-icon {
        width: 75px;
        height: 75px;
        font-size: 2.3rem;
    }

    .adv-gift-city-card h3 {
        font-size: 1.4rem;
    }

    .adv-gift-city-card p {
        font-size: 0.95rem;
    }
}

/* Tablets (Medium screens) */
@media (max-width: 992px) {
    .adv-gift-city-grid {
        grid-template-columns: repeat(2, 1fr); 
    }
    
    .adv-gift-city-container {
        margin: 0 20px; 
    }
}

/* Mobile (Small screens) */
@media (max-width: 600px) {
    .adv-gift-city-grid {
        grid-template-columns: 1fr; 
    }

    .adv-gift-city-container {
        margin: 0 20px; 
    }

    .adv-gift-city-card {
        padding: 20px;
    }

    .adv-gift-city-icon {
        width: 60px;
        height: 60px;
        font-size: 2rem;
    }

    .adv-gift-city-card h3 {
        font-size: 1.3rem;
    }

    .adv-gift-city-card p {
        font-size: 0.9rem;
    }
}

/**advantage of gift city funds ends **/
/* gift city funds ends */
</style>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection