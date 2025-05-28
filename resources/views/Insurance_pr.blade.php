@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/insuranceprhd.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Insurance Services</h1>
      </div>
   </div>
</div>
    <!-- Page Header End -->

     <!-- insurance-investment-pr start -->
     <section class="iipr-portfolio-section">
    <div class="iipr-split-container">
      <div class="iipr-image-side">
        <div class="iipr-decorative-shape iipr-shape-1"></div>
        <div class="iipr-decorative-shape iipr-shape-2"></div>
        <img src="{{Vite::asset('resources/theme/img/iipr-img-1.webp')}}" alt="Client comparing insurance policies with expert guidance.">
      </div>

      <div class="iipr-content-side">
        <h2 class="iipr-section-title">
          Structured <span class="iipr-highlight">Portfolio</span> Construction
        </h2>

        <p class="iipr-description">
          <span class="iipr-highlight">Structured portfolio construction</span> is a very essential part in the process of wealth creation. The investments and insurance products which a person holds need to be aligned to the age, risk appetite, cash flow requirement, and financial goals.
        </p>

        <p class="iipr-description">
          We help our customers to <span class="iipr-highlight">restructure</span> their existing investment and insurance portfolio held across advisors to ensure all these requirements are met with the right diversification spread and asset allocation.
        </p>

        <div class="iipr-features-list">
          <div class="iipr-feature-item">
            <div class="iipr-feature-icon">&#10003;</div>
            <div>Personalized Investment Strategy</div>
          </div>
          <div class="iipr-feature-item">
            <div class="iipr-feature-icon">&#10003;</div>
            <div>Risk-Aligned Portfolio</div>
          </div>
          <div class="iipr-feature-item">
            <div class="iipr-feature-icon">&#10003;</div>
            <div>Strategic Asset Allocation</div>
          </div>
        </div>


        <a href="{{ route('schedulemeeting') }}"  class="tp-unique-cta-button">Schedule a call</a>
      </div>
     
    </div>
    
  </section>
  <!-- insurance-investment-pr end -->

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
                sectionTitle.textContent = "Our Work Process";  
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
  /**Insurance Investment-pr**/
  .iipr-portfolio-section {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
    font-family: system-ui, -apple-system, sans-serif;
  }

  .iipr-split-container {
    display: flex;
    gap: 60px;
    align-items: center;
  }

  .iipr-image-side {
    flex: 1;
    position: relative;
  }

  .iipr-image-side img {
    width: 100%;
    height: auto;  /* Maintain aspect ratio */
    max-height: 500px;  /* Set a max-height for larger screens */
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .iipr-decorative-shape {
    position: absolute;
    width: 100px;
    height: 100px;
    background: #d0a94e;
    border-radius: 50%;
    z-index: -1;
    opacity: 0.2;
  }

  .iipr-shape-1 {
    top: -20px;
    left: -20px;
  }

  .iipr-shape-2 {
    bottom: -20px;
    right: -20px;
  }

  .iipr-content-side {
    flex: 1;
    padding: 20px;
  }

  .iipr-section-title {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 25px;
    line-height: 1.2;
  }

  .iipr-highlight {
    color: #d0a94e;
    font-weight: bold;
  }

  .iipr-description {
    color: #555;
    line-height: 1.8;
    font-size: 1.1rem;
    margin-bottom: 30px;
  }

  .iipr-features-list {
    display: grid;
    gap: 20px;
    margin-top: 30px;
  }

  .iipr-feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .iipr-feature-icon {
    width: 40px;
    height: 40px;
    background: #d0a94e;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
  }

  .tp-unique-cta-button {
    display: inline-block;
    padding: 15px 30px;
    background: #d0a94e;
    color: white;
    text-decoration: none;
    border-radius: 30px;
    margin-top: 30px;
    font-weight: 500;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .tp-unique-cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(208, 169, 78, 0.3);
  }

  /** Mobile Devices (Portrait) **/
  @media (max-width: 767px) {
    .iipr-split-container {
      flex-direction: column;
      gap: 20px;
    }

    .iipr-image-side img {
      width: 240px;  /* Increase width to cover screen more */
      height: auto;
      max-height: none; /* Remove max-height to allow the image to expand */
    }

    .iipr-section-title {
      font-size: 2rem;
    }

    .iipr-description {
      font-size: 1rem;
    }

    .iipr-features-list {
      grid-template-columns: 1fr;
      gap: 10px;
    }

    .tp-unique-cta-button {
      padding: 12px 24px;
      font-size: 1rem;
    }
  }

  /** Tablets (Landscape) **/
  @media (min-width: 768px) and (max-width: 1024px) {
    .iipr-split-container {
      flex-direction: column; 
      gap: 40px;
    }

    /* Reorder content: Image first */
    .iipr-image-side {
      order: 1; 
    }

    .iipr-content-side {
      order: 2;  
    }

    .iipr-image-side img {
      width: 450px; 
      height: auto;
      max-height: 450px;
    }

    .iipr-section-title {
      font-size: 2.2rem;
    }

    .iipr-description {
      font-size: 1.1rem;
    }

    .iipr-features-list {
      grid-template-columns: repeat(2, 1fr);
    }

    .tp-unique-cta-button {
      padding: 14px 28px;
      font-size: 1.1rem;
    }
  }

  /** Desktop (Wide Screens) **/
  @media (min-width: 1025px) {
    .iipr-split-container {
      flex-direction: row;
      gap: 60px;
    }

    .iipr-image-side img {
      width: 100%;
      height: auto;
    }

    .iipr-section-title {
      font-size: 2.5rem;
    }

    .iipr-description {
      font-size: 1.1rem;
    }

    .iipr-features-list {
      grid-template-columns: repeat(3, 1fr);
    }

    .tp-unique-cta-button {
      padding: 15px 30px;
      font-size: 1.2rem;
    }
  }
</style>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection