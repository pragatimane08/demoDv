@extends('layouts.app')
@section('content')
<!-- public/img/estateplanning.webp -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
    style="background: url('{{ Vite::asset('resources/theme/img/estateplanning.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Estate Planning</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Estate Planning</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->

     <!-- Estate Planning Hero Section -->
    <div class="estate-planning1-hero">
        <div class="estate-planning1-herocontainer">
            <!-- Left Side: Image -->
            <div class="estate-planning1-heroimage">
                <img src="{{Vite::asset('resources/theme/img/ep-img-1.webp')}}" alt="Legal document showing estate planning and wealth transferstrategies.">
            </div>

            <!-- Right Side: Text -->
            <div class="estate-planning1-hero-text">
                <h1>Secure Your Legacy with Thoughtful Estate Planning</h1>
                <p>Our experts provide tailored solutions to safeguard your assets for your loved ones and hassle free transfer of wealth to your next generation.</p>
                  <a href="{{ route('schedulemeeting') }}" class="estate-planning-cta-button">Schedule a Free Consultation</a>
            </div>
        </div>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function () {
  const textSection = document.querySelector(".estate-planning1-hero-text");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          textSection.classList.add("visible");
        } else {
          textSection.classList.remove("visible"); // Remove class to re-trigger effect
        }
      });
    },
    { threshold: 0.5 } // Triggers when 50% of the element is visible
  );

  observer.observe(textSection);
});

</script>
  <!-- Estate Planning-Header end -->

 <!-- Estate Planning-Services start -->
<div id="estate-planning-services" class="services">
  <div class="estate-planning-container">
    <h2>Our Key Services</h2>
    <div class="estate-planning-service-grid">
      <div class="estate-planning-service-item">
        <i class="fas fa-file-alt fa-3x"></i> <!-- FontAwesome icon for Wills -->
        <h3>Wills</h3>
        <p>Ensure your assets are distributed according to your wishes.</p>
      </div>
      <div class="estate-planning-service-item">
        <i class="fas fa-gavel fa-3x"></i> <!-- FontAwesome icon for Trusts -->
        <h3>Trusts</h3>
        <p>Establish trusts to protect and manage your wealth efficiently.</p>
      </div>
      <div class="estate-planning-service-item">
        <i class="fas fa-users fa-3x"></i> <!-- FontAwesome icon for Succession Planning -->
        <h3>Succession Planning</h3>
        <p>Strategize for smooth transitions and secure your family's future.</p>
      </div>
    </div>
  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const serviceSection = document.getElementById("estate-planning-services");
    const serviceItems = document.querySelectorAll(".estate-planning-service-item");

    function fadeInOnScroll() {
        const sectionPosition = serviceSection.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionPosition < windowHeight - 50) {
            serviceItems.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add("fade-in");
                }, index * 200); // Staggered animation
            });
        } else {
            serviceItems.forEach(item => {
                item.classList.remove("fade-in"); // Reset effect when leaving
            });
        }
    }

    window.addEventListener("scroll", fadeInOnScroll);
    fadeInOnScroll(); // Trigger once on load
});

</script>
<!-- Estate Planning-Services end -->

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
/**Estate Planning**/
/* Estate Planning Header */
.estate-planning1-hero {
  background:rgb(223, 179, 78);
  color: white;
  padding: 20px 30px;
  border-radius: 10px;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
  max-width: 1200px;
  margin: 50px auto;
}

/* Container */
.estate-planning1-herocontainer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
  flex-direction: row;
}

/* Left Side - Image */
.estate-planning1-heroimage {
  flex-basis: 45%;
  max-width: 50%;
  order: 1;
}

.estate-planning1-heroimage img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease-in-out;
}

/* Hover Effect */
.estate-planning1-heroimage img:hover {
  transform: scale(1.05);
}

/* Right Side - Text */
.estate-planning1-hero-text {
  flex-basis: 45%;
  text-align: left;
  opacity: 0;
  transform: translateX(-50px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.estate-planning1-hero-text.visible {
  opacity: 1;
  transform: translateX(0);
}

.estate-planning1-hero-text h1 {
  font-size: 2.2rem;
  font-weight: bold;
  margin-bottom: 15px;
  text-transform: uppercase;
}

.estate-planning1-hero-text p {
  font-size: 1.2rem;
  margin-bottom: 20px;
  line-height: 1.6;
}

/* CTA Button */
.estate-planning-cta-button {
  background-color: white;
  color: #d0a94e;
  padding: 12px 25px;
  font-size: 1rem;
  font-weight: bold;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  transition: background 0.3s, transform 0.2s;
}

.estate-planning-cta-button:hover {
  background-color: #f8f8f8;
  transform: translateY(-3px);
  color: #d0a94e;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .estate-planning1-hero {
    margin: 50px 20px;
  }
}

@media (max-width: 768px) {
  .estate-planning1-herocontainer {
    flex-direction: column;
    text-align: center;
  }

  .estate-planning1-hero {
    margin: 50px 20px;
  }

  .estate-planning1-heroimage {
    max-width: 80%;
    margin-bottom: 20px;
  }

  .estate-planning1-hero-text {
    flex: 1;
    text-align: center;
  }

  .estate-planning1-hero-text h1 {
    font-size: 2rem;
  }

  .estate-planning1-hero-text p {
    font-size: 1rem;
  }

  .estate-planning-cta-button {
    padding: 10px 20px;
    display: block;
    margin: 0 auto;
  }
}

/* Estate planning - Our Key Services */
/* Estate planning - Our Key Services */
#estate-planning-services {
  background-color: #f6f6f6;
  padding: 50px 0;
  text-align: center;
  margin-left: 60px;
  margin-right: 60px;
  border-radius: 10px;
}

.estate-planning-container {
  width: 80%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.estate-planning-container h2 {
  font-size: 2rem;
  color: #d4af37;
  margin-bottom: 40px;
  text-align: center;
}

.estate-planning-service-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  justify-items: center;
  max-width: 1200px;
  margin: 0 auto;
}

/* Fade-in Effect */
.estate-planning-service-item {
  background-color: #f8f8f8;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
  opacity: 0;
  transform: translateX(50px);
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  width: 100%;
  max-width: 400px; /* Uniform width for all devices */
}

.estate-planning-service-item.fade-in {
  opacity: 1;
  transform: translateX(0);
}

.estate-planning-service-item:hover {
  transform: translateY(-10px);
}

.estate-planning-service-item i {
  color: #d4af37;
  margin-bottom: 20px;
}

.estate-planning-service-item h3 {
  font-size: 1.5rem;
  color: #d4af37;
  margin-bottom: 10px;
}

.estate-planning-service-item p {
  font-size: 1rem;
  color: #333;
}

/* Tablet devices (2 columns with centered last item) */
@media (max-width: 1024px) {
  #estate-planning-services {
    margin-left: 40px;
    margin-right: 40px;
  }

  .estate-planning-service-grid {
    grid-template-columns: repeat(2, 1fr);
    max-width: 800px;
  }

  .estate-planning-service-item:nth-child(3) {
    grid-column: span 2;
    justify-self: center;
    max-width: 400px;
  }
}

/* Smaller tablets */
@media (max-width: 768px) {
  #estate-planning-services {
    margin-left: 20px;
    margin-right: 20px;
  }

  .estate-planning-service-grid {
    grid-template-columns: 1fr;
    max-width: 500px;
  }

  .estate-planning-service-item:nth-child(3) {
    grid-column: span 1;
    max-width: 100%;
  }

  .estate-planning-service-item {
    padding: 25px;
    max-width: 400px;
  }
}

/* Mobile devices */
@media (max-width: 480px) {
  #estate-planning-services {
    margin-left: 15px;
    margin-right: 15px;
    padding: 30px 0;
  }

  .estate-planning-container {
    width: 95%;
  }

  .estate-planning-container h2 {
    font-size: 1.8rem;
    margin-bottom: 30px;
  }

  .estate-planning-service-item {
    padding: 20px;
    max-width: 400px;
  }
}

/* iPad and iPad Mini (portrait) - treat like tablets */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 834px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1) {

  #estate-planning-services {
    margin-left: 30px;
    margin-right: 30px;
  }

  .estate-planning-service-grid {
    grid-template-columns: repeat(2, 1fr);
    max-width: 800px;
  }

  .estate-planning-service-item:nth-child(3) {
    grid-column: span 2;
    justify-self: center;
    max-width: 400px;
  }

  .estate-planning-service-item {
    max-width: 400px;
  }
}
</style>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection