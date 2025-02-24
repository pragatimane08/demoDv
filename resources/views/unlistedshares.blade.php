@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/unlistedsharedimg.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Unlisted Share</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Unlisted Shares</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    
    <!-- Page Header End -->

    <section class="Retirement-Saving-feature">
        <div class="Retirement-Saving-feature-image-container">
            <img src="img/unlistedsharenew.jpg" alt="Retirement Saving Image">
        </div>
        <div class="Retirement-Saving-feature-content">
            <span class="Retirement-Saving-feature-subheading">Unlisted Shares</span>
            <p class="Retirement-Saving-feature-description">
            Invest in companies that are not yet listed on the stock exchange and be a part of their growth story. Unlisted shares provide exclusive investment opportunities in promising private companies with the potential for high returns.   
            </p>
            <a href="{{ route('schedulemeeting') }}" class="schedule-meeting-btn">Schedule Meeting</a>
        </div>
    </section>

    <div class="container-unlisted">
    <div class="image-section" style="background-image: url('img/unlist1.jpg');"></div>
    <div class="content-unlisted">
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
    .container-unlisted {
        display: flex;
        flex-wrap: wrap; /* Allow wrapping on smaller screens */
        max-width: 1200px;
        width: 100%;
        background: #fff8dc;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin: 0 auto; /* Center the container */
    }

    .image-section {
        width: 50%;
        background: url('img/unlist1.jpg') no-repeat center center/cover;
    }

    .content-unlisted {
        width: 50%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .wyhunlisted-shares-section {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        padding: 15px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .wyhunlisted-shares-section:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .wyhunlisted-shares-ribbon {
        position: absolute;
        left: 0;
        width: 10px;
        height: 100%;
        background: #D4AF37;
    }

    .wyhunlisted-shares-icon {
        font-size: 2rem;
        color: #D4AF37;
        margin-right: 15px;
    }

    .wyhunlisted-shares-text {
        flex: 1;
    }

    .wyhunlisted-shares-title {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .wyhunlisted-shares-description {
        font-size: 0.9rem;
        color: #555;
        line-height: 1.4;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .container-unlisted {
            flex-direction: column; /* Stack sections vertically on smaller screens */
        }

        .image-section,
        .content-unlisted {
            width: 100%; /* Full width on smaller screens */
        }

        .image-section {
            height: 200px; /* Set a fixed height for the image section */
        }

        .content-unlisted {
            padding: 15px; /* Reduce padding for smaller screens */
        }

        .wyhunlisted-shares-section {
            flex-direction: column; /* Stack icon and text vertically */
            align-items: flex-start;
        }

        .wyhunlisted-shares-icon {
            margin-bottom: 10px; /* Add space between icon and text */
        }
    }

    @media (max-width: 480px) {
        .wyhunlisted-shares-title {
            font-size: 1rem; /* Smaller font size for mobile */
        }

        .wyhunlisted-shares-description {
            font-size: 0.8rem; /* Smaller font size for mobile */
        }
    }
</style>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection