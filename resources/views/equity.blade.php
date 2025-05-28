@extends('layouts.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
        style="background: url('{{Vite::asset('resources/theme/img/equtityderivatieshd.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Equities</h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Equity And Derivatives</a></li>
                </ol>
            </nav> -->
        </div>
    </div>
    <!-- Page Header End -->

   
    <div class="equity-gateway-section">
  <div class="equity-header">
    <h1 class="equity-main-title">Equities: Your Gateway to Long-Term Wealth Creation</h1>
    <div class="equity-divider"></div>
  </div>
  
  <div class="equity-intro">
    <p class="equity-intro-text">Equity investments have consistently delivered some of the highest long-term returns, even after factoring in inflation. Unlike other asset classes, equities help preserve and grow your purchasing power—allowing you to maintain and elevate your lifestyle over time.</p>
  </div>
  
  <div class="ewp-highlight-box">
  <h2 class="ewp-subtitle">Why Invest in Equities?</h2>
  <ul class="ewp-features">
    <li class="ewp-feature-item">
      <span class="ewp-feature-icon">✓</span>
      <span class="ewp-feature-text"><strong>Power of Compounding:</strong> Over long holding periods (typically 5+ years), equities have the potential to multiply your invested capital.</span>
    </li>
    <li class="ewp-feature-item">
      <span class="ewp-feature-icon">✓</span>
      <span class="ewp-feature-text"><strong>Lower Risk Over Time:</strong> The longer you stay invested, the more the risk reduces—especially when investing in high-quality businesses.</span>
    </li>
    <li class="ewp-feature-item">
      <span class="ewp-feature-icon">✓</span>
      <span class="ewp-feature-text"><strong>Achieve Life Goals:</strong> Starting early and staying invested can significantly simplify your journey to financial milestones like retirement, home ownership, or children's education.</span>
    </li>
  </ul>
</div>
  <div class="equity-india-opportunity">
    <h2 class="equity-subtitle">India's Equity Opportunity</h2>
    <p class="equity-india-text">Despite their potential, equity investments remain underutilized in India, with penetration levels still around 5%—far behind developed economies. This represents a massive untapped opportunity for Indian investors.</p>
  </div>
  
  <div class="equity-invest-wisely">
    <h2 class="equity-subtitle">Choose Wisely, Invest Smartly</h2>
    <p class="equity-wisely-text">Success in equity investing depends on selecting the right companies. Key factors include:</p>
    
    <div class="equity-factors-grid">
      <div class="equity-factor-item">
        <span class="equity-factor-bullet"></span>
        <span>Management quality</span>
      </div>
      <div class="equity-factor-item">
        <span class="equity-factor-bullet"></span>
        <span>Business scalability & profitability</span>
      </div>
      <div class="equity-factor-item">
        <span class="equity-factor-bullet"></span>
        <span>Competitive advantage</span>
      </div>
      <div class="equity-factor-item">
        <span class="equity-factor-bullet"></span>
        <span>Industry trends and valuation metrics</span>
      </div>
    </div>
    
    <div class="equity-caps-container">
      <h3 class="equity-caps-title">Equities are classified by market capitalization:</h3>
      
      <div class="equity-caps-grid">
        <div class="equity-cap-card">
          <h4 class="equity-cap-name">Large Cap</h4>
          <p class="equity-cap-desc">More stable, lower risk</p>
        </div>
        
        <div class="equity-cap-card">
          <h4 class="equity-cap-name">Mid & Small Cap</h4>
          <p class="equity-cap-desc">Higher growth potential, but come with higher volatility</p>
        </div>
        
        <div class="equity-cap-card">
          <h4 class="equity-cap-name">Micro Cap</h4>
          <p class="equity-cap-desc">High risk, high reward</p>
        </div>
      </div>
    </div>
    
    <div class="equity-conclusion">
      <p class="equity-conclusion-text">A well-diversified equity portfolio—aligned to your risk appetite and goals—can be a powerful tool for long-term wealth creation.</p>
    </div>
  </div>
</div>

<style>
    .ewp-highlight-box {
  background-color: #f9f9f9;
  border-left: 4px solid #D4AF37;
  padding: 25px;
  margin-bottom: 40px;
  border-radius: 0 5px 5px 0;
}

.ewp-subtitle {
  font-size: 1.8rem;
  color: #333333;
  margin-bottom: 20px;
  font-weight: 600;
}

.ewp-features {
  list-style: none;
  padding: 0;
}

.ewp-feature-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 15px;
  line-height: 1.5;
}

.ewp-feature-icon {
  color: #D4AF37;
  font-weight: bold;
  margin-right: 15px;
  font-size: 1rem;
}

.ewp-feature-text {
  flex: 1;
}

@media (max-width: 768px) {
  .ewp-subtitle {
    font-size: 1rem;
  }
}
.equity-gateway-section {
 
  max-width: 1200px;
  margin: 0 auto;
  padding: 0px 20px;
  color: #333;
  background-color: #fff;
}

.equity-header {
  text-align: center;
  margin-bottom: 40px;
}

.equity-main-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 20px;
  position: relative;
  display: inline-block;
}

.equity-main-title:after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background-color: #D4AF37;
}

.equity-intro-text {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #555;
  text-align: center;
  max-width: 800px;
  margin: 0 auto 40px;
}

.equity-subtitle {
  font-size: 1.8rem;
  color: #333;
  margin-bottom: 25px;
  position: relative;
  padding-bottom: 10px;
}

.equity-subtitle:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 2px;
  background-color: #D4AF37;
}

.equity-benefits-container {
  margin-bottom: 60px;
}

.equity-benefit-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 30px;
  margin-bottom: 30px;
  background-color: #f9f9f9;
  border-radius: 8px;
  transition: all 0.3s ease;
  border: 1px solid #eee;
}

.equity-benefit-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  border-color: #D4AF37;
}

.equity-icon-box {
  width: 60px;
  height: 60px;
  background-color: #D4AF37;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
}

.equity-icon {
  width: 30px;
  height: 30px;
  fill: #fff;
}

.equity-benefit-title {
  font-size: 1.3rem;
  color: #333;
  margin-bottom: 15px;
}

.equity-benefit-desc {
  font-size: 1rem;
  line-height: 1.6;
  color: #666;
  margin: 0;
}

.equity-india-opportunity {
  margin-bottom: 60px;
}

.equity-india-text {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #555;
}

.equity-invest-wisely {
  margin-bottom: 40px;
}

.equity-wisely-text {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #555;
  margin-bottom: 25px;
}

.equity-factors-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin-bottom: 40px;
}

.equity-factor-item {
  display: flex;
  align-items: center;
  padding: 10px 15px;
  background-color: #f9f9f9;
  border-radius: 6px;
}

.equity-factor-bullet {
  display: inline-block;
  width: 8px;
  height: 8px;
  background-color: #D4AF37;
  border-radius: 50%;
  margin-right: 15px;
}

.equity-caps-container {
  margin: 50px 0;
}

.equity-caps-title {
  font-size: 1.2rem;
  color: #333;
  margin-bottom: 20px;
}

.equity-caps-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}

.equity-cap-card {
  padding: 25px;
  border-radius: 8px;
  background-color: #f5f5f5;
  border-left: 4px solid #D4AF37;
}

.equity-cap-name {
  font-size: 1.2rem;
  color: #333;
  margin-bottom: 10px;
}

.equity-cap-desc {
  font-size: 1rem;
  color: #666;
  line-height: 1.5;
  margin: 0;
}

.equity-conclusion {
  text-align: center;
  padding: 30px;
  background-color: #f9f9f9;
  border-radius: 8px;
  margin-top: 40px;
}

.equity-conclusion-text {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #555;
  font-style: italic;
  margin: 0;
}

@media (min-width: 768px) {
  .equity-benefits-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
  }
  
  .equity-benefit-card {
    margin-bottom: 0;
  }
}

@media (max-width: 767px) {
  .equity-main-title {
    font-size: 2rem;
  }
  
  .equity-subtitle {
    font-size: 1.5rem;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Animate benefit cards on scroll
  const benefitCards = document.querySelectorAll('.equity-benefit-card');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.1 });
  
  benefitCards.forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(card);
  });
  
  // Add hover effect to cap cards
  const capCards = document.querySelectorAll('.equity-cap-card');
  capCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-5px)';
      this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
    });
    
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
      this.style.boxShadow = 'none';
    });
  });
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  // Animation for feature items
  const featureItems = document.querySelectorAll('.ewp-feature-item');
  featureItems.forEach((item, index) => {
    item.style.opacity = '0';
    item.style.transform = 'translateX(-20px)';
    item.style.transition = `all 0.5s ease ${index * 0.1}s`;
    
    setTimeout(() => {
      item.style.opacity = '1';
      item.style.transform = 'translateX(0)';
    }, 500 + (index * 100));
  });
});
</script>
    <!-- Equities - For Long Term Investment End -->

    <!-- Steps Start -->
    <!-- <div class="eq1-steps">
        <h1 class="section-heading">Understanding Equity Derivatives</h1>
        <div class="eq1-steps-container">
            <div class="st1">
                <a href="#equity-section1" class="step-link">
                    <div class="eq1-circle" id="step1">01</div>
                    <h3>What is an Equity Derivative?</h3>
                </a>
            </div>
            <div class="st3">
                <a href="#undertsanding-section3" class="step-link">
                    <div class="eq1-circle" id="step3">02</div>
                    <h3>Understanding Equity Derivative</h3>
                </a>
            </div>
            <div class="st4">
                <a href="#risk-section2" class="step-link">
                    <div class="eq1-circle" id="step4">03</div>
                    <h3>Risks of Equity Derivatives</h3>
                </a>
            </div>
        </div>
    </div>
    Steps End -->

    <!-- What is an Equity Derivative Start -->
    <section id="equity-section1" class="what-is-equi">
        <div class="content-container">
            <div class="image-container">
                <img src="{{Vite::asset('resources/theme/img/equi-img-1.webp')}}" alt="Stock market trading concept with equity derivative charts">
            </div>
            <div class="text-container">
                <h4>What is an Equity Derivative?</h4>
                <h1>Empowering investments, one equity derivative at a time.</h1>
                <p>
                    An equity derivative is a financial instrument whose value is derived from the price movements of an underlying equity asset, such as a stock. For example, a stock option is an equity derivative because its value is based on the price movements of the underlying stock.
                </p>
            </div>
        </div>
    </section>
    <!-- What is an Equity Derivative End -->

    <!-- Understanding Equity Derivatives Start -->
    <div class="eq-understanding-container" id="undertsanding-section3">
        <!-- Left Section: Content -->
        <div class="eq-understanding-left-section">
            <h1>Understanding Equity Derivative</h1>
            <div class="eq-understanding-content-description">
                <p>
                    Equity derivatives can act like an insurance policy. The investor pays a premium (the cost of the derivative contract) to receive a potential payout. This allows investors to manage risk or speculate on price movements without directly owning the underlying asset.
                </p>
                <p>
                    For example:
                    <ul>
                        <li>An investor holding a stock can protect against a decline in its value by purchasing a <strong>put option</strong>.</li>
                        <li>An investor who has shorted a stock can hedge against a price increase by purchasing a <strong>call option</strong>.</li>
                    </ul>
                </p>
                <p>
                    Equity derivatives can also be used for speculative purposes. Traders can buy equity options instead of the actual stock to profit from the underlying asset’s price movements. This strategy has two advantages:
                    <ul>
                        <li><strong>Cost Efficiency</strong>: Options are cheaper than buying the actual stock.</li>
                        <li><strong>Risk Management</strong>: Traders can hedge risks by placing both put and call options on the stock’s price.</li>
                    </ul>
                </p>
            </div>
        </div>

        <!-- Right Section: Image -->
        <div class="eq-understanding-right-section">
            <img src="{{Vite::asset('resources/theme/img/equi-img-2.webp')}}" alt="Group of financial analysts discussing stock trends" class="right-image">
        </div>
    </div>
    <!-- Understanding Equity Derivatives End -->

    <!-- Risk Section Start -->
    <div class="risk-container" id="risk-section2">
        <div class="image-container">
            <img src="{{Vite::asset('resources/theme/img/risk1.webp')}}" alt="Stock market risk representation with declining graphs" class="left-image">
        </div>
        <div class="content-container">
            <h2>Risks in Equity and Derivatives</h2>
            <ul>
                <li>
                    <strong>1. Equities</strong>
                    <p class="description">
                        Market volatility can lead to significant price fluctuations, and there's a risk of losing invested capital if the stock price declines.
                    </p>
                </li>
                <li>
                    <strong>2. Derivatives</strong>
                    <p class="description">
                        Highly leveraged positions can amplify losses, and complex pricing can introduce counterparty and liquidity risks.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <!-- Risk Section End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
