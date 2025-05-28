@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.webp -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ Vite::asset('resources/theme/img/unlistedsharedimg.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Unlisted Shares</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Unlisted Shares</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->

    <section class="Retirement-Saving-feature">
        <div class="Retirement-Saving-feature-image-container">
            <img src="{{Vite::asset('resources/theme/img/unlistedsharenew.webp')}}" alt="Private equity investor reviewing pre-IPO and unlisted shares
portfolio.">
        </div>
        <div class="Retirement-Saving-feature-content">
            <span class="Retirement-Saving-feature-subheading">Unlisted Shares</span>
            <p class="Retirement-Saving-feature-description">
            Invest in companies that are not yet listed on the stock exchange and be a part of their growth story. Unlisted shares provide exclusive investment opportunities in promising private companies with the potential for high returns.   
            </p>
            <a href="{{ route('schedulemeeting') }}" class="schedule-meeting-btn">Schedule Meeting</a>
        </div>
    </section>

    <!-- Unlisted Shares Section -->
    <div class="wyhunlisted-shares-section-container-unlisted">
    <div class="image-section" style="background-image: url('{{Vite::asset('resources/theme/img/unlist1.webp')}}');" aria-label="Pre-IPO and unlisted shares portfolio"></div>
    <div class="wyhunlisted-shares-section-content-unlisted">
        <h2 class="section-heading">Why Unlisted Shares?</h2>
        <div class="wyhunlisted-shares-section">
            <div class="wyhunlisted-shares-ribbon"></div>
            <div class="wyhunlisted-shares-icon">
                <i class="fas fa-seedling"></i>
            </div>
            <div class="wyhunlisted-shares-text">
                <h2 class="wyhunlisted-shares-title">Early Stage Investments</h2>
                <p class="wyhunlisted-shares-description">Invest in high-growth companies before they go public. Gain early access to potential unicorns and high-return ventures.</p>
            </div>
        </div>
        <div class="wyhunlisted-shares-section">
            <div class="wyhunlisted-shares-ribbon"></div>
            <div class="wyhunlisted-shares-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="wyhunlisted-shares-text">
                <h2 class="wyhunlisted-shares-title">High Return Potential</h2>
                <p class="wyhunlisted-shares-description">Unlisted shares offer the potential for significant returns, often outperforming traditional listed investments.</p>
            </div>
        </div>
        <div class="wyhunlisted-shares-section">
            <div class="wyhunlisted-shares-ribbon"></div>
            <div class="wyhunlisted-shares-icon">
                <i class="fas fa-globe"></i>
            </div>
            <div class="wyhunlisted-shares-text">
                <h2 class="wyhunlisted-shares-title">Unique Industries</h2>
                <p class="wyhunlisted-shares-description">Diversify your portfolio by investing in unique sectors and industries not represented in the current market listings.</p>
            </div>
        </div>
    </div>
</div>
<style>
/**why unlisted shares starts  **/
.wyhunlisted-shares-section-container-unlisted {
  display: flex;
  flex-wrap: wrap;
  max-width: 1200px;
  width: calc(100% - 30px);
  margin: 20px auto;
  background: #fff8dc;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  backface-visibility: hidden;
  transform: translateZ(0);
  will-change: transform;
}

.image-section {
  width: 100%;
  height: 250px;
  background: url('{{Vite::asset('resources/theme/img/unlist1.jpg')}}') no-repeat center center/cover;
}

.wyhunlisted-shares-section-content-unlisted {
  width: 100%;
  padding: 20px 15px;
  display: flex;
  flex-direction: column;
  gap: 15px;
  min-height: 400px;
  font-family: 'Inter', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

/* Each shares section box */
.wyhunlisted-shares-section {
  display: flex;
  align-items: center;
  padding: 18px 15px;
  background: #ffffff;
  border-radius: 15px;
  border: 1px solid #eee;
  position: relative;
  transition: box-shadow 0.2s ease, transform 0.3s ease;
  cursor: pointer;
  will-change: transform;
  backface-visibility: hidden;
}

.wyhunlisted-shares-section:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
  transform: translateY(-3px);
}

.wyhunlisted-shares-ribbon {
  position: absolute;
  left: 0;
  width: 8px;
  height: 100%;
  background: #D4AF37;
  border-radius: 15px 0 0 15px;
}

.wyhunlisted-shares-icon {
  font-size: 1.8rem;
  color: #D4AF37;
  margin-right: 12px;
  min-width: 30px;
  transition: transform 0.3s ease;
}

.wyhunlisted-shares-text {
  flex: 1;
}

.wyhunlisted-shares-title {
  font-size: 1.1rem;
  color: #333;
  margin-bottom: 6px;
  font-weight: 600;
  line-height: 1.3;
  font-family:'Montserrat';
}

.wyhunlisted-shares-description {
  font-size: 1rem;
  color: black;
  line-height: 1.6;
  font-family: 'Montserrat';
  font-weight: 500;
}

/* Tablet View */
@media (min-width: 768px) {
  .image-section {
    width: 45%;
    height: 750px;
  }

  .wyhunlisted-shares-section-content-unlisted {
    width: 55%;
    padding: 30px 25px;
  }

  .wyhunlisted-shares-section {
    padding: 20px 18px;
  }

  .wyhunlisted-shares-icon {
    font-size: 2rem;
  }

  .wyhunlisted-shares-title {
    font-size: 1.2rem;
  }
}

/* Desktop View */
@media (min-width: 1024px) {
  .wyhunlisted-shares-section-container-unlisted {
    flex-wrap: nowrap;
  }

  .image-section {
    width: 40%;
    height: 620px;
  }

  .wyhunlisted-shares-section-content-unlisted {
    width: 60%;
  }
}

/* Large Screens */
@media (min-width: 1200px) {
  .wyhunlisted-shares-section-container-unlisted {
    margin: 30px auto;
  }
}

/* Mobile Enhancements - Fix blur & improve clarity */
@media (max-width: 767px) {
  .wyhunlisted-shares-section-content-unlisted,
  .wyhunlisted-shares-title,
  .wyhunlisted-shares-description {
    font-size: 1.05rem;
    font-weight: 500;
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto;
    text-rendering: auto;
  }
}

</style>
<!--united share end-->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection