@extends('layouts.app')
@section('content')
<!-- public/img/estateplanning.jpeg -->
    <!-- Page Header Start -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/estateplanning.jpeg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Estate Planning</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Estate Planning</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->

     <!-- Estate Planning-Header start -->
     <!-- Estate Planning Hero Section -->
    <div class="estate-planning1-hero"> 
        <div class="estate-planning1-herocontainer">
            <!-- Left Side: Image -->
            <div class="estate-planning1-heroimage">
                <img src="img/ep-img-1.webp" alt="Legal document showing estate planning and wealth transfer
strategies.">
            </div>

            <!-- Right Side: Text -->
            <div class="estate-planning1-hero-text">
                <h1>Secure Your Legacy with Thoughtful Estate Planning</h1>
                <p>Our experts provide tailored solutions to safeguard your assets and care for your loved ones.</p>
                <a href="#services" class="estate-planning-cta-button">Schedule a Free Consultation</a>
            </div>
        </div>
    </div> 
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
       
    <style>/**Estate Planning**/
/*estate planning header*/
/* Estate Planning Hero Section */
.estate-planning1-hero {
  background: linear-gradient(135deg, #d0a94e 0%, #d0a94e 100%);
  color: white;
  padding: 60px 30px;
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
  flex-wrap: wrap; /* Ensure the content wraps on smaller screens */
  flex-direction: row; /* Default to row direction */
}

/* Left Side - Image */
.estate-planning1-heroimage {
  flex-basis: 45%; /* Assign a fixed percentage for image width */
  max-width: 50%; /* Control image size in desktop view */
  order: 1; /* Ensure the image stays on the left */
}

.estate-planning1-heroimage img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease-in-out; /* Smooth transition */
}

/* Hover Effect */
.estate-planning1-heroimage img:hover {
  transform: scale(1.05); /* Slightly enlarge on hover */
}

/* Right Side - Text */
.estate-planning1-hero-text {
  flex-basis: 45%; /* Assign a fixed width for text block */
  text-align: left;
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
}

/* Responsive Design */
@media (max-width: 768px) {
  .estate-planning1-herocontainer {
    flex-direction: column;
    text-align: center;
  }

  .estate-planning1-heroimage {
    max-width: 80%;
    margin-bottom: 20px;
  }

  .estate-planning1-hero-text {
    flex: 1;
  }

  .estate-planning1-hero-text h1 {
    font-size: 2rem;
  }

  .estate-planning1-hero-text p {
    font-size: 1rem;
  }

  .estate-planning-cta-button {
    padding: 10px 20px;
  }
}


/* Estate planning - Our Key Services */
#estate-planning-services {
  background-color: #f6f6f6;
  padding: 50px 0;
  text-align: center; /* Center the content of the section */
  margin-left: 60px;
  margin-right: 60px;
  border-radius: 10px;
}

.estate-planning-container {
  width: 80%;
  margin: 0 auto;
  display: flex; /* Enable flexbox */
  flex-direction: column; /* Stack items vertically */
  align-items: center; /* Center the heading and grid horizontally */
}

.estate-planning-container h2 {
  font-size: 36px;
  color: #d4af37; /* Gold */
  margin-bottom: 40px;
  text-align: center; /* Center the text inside h2 */
}

.estate-planning-service-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  justify-items: center; /* Center the items in the grid */
}

.estate-planning-service-item {
  background-color: #f8f8f8;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
  text-align: center;
}

.estate-planning-service-item:hover {
  transform: translateY(-10px);
}

.estate-planning-service-item i {
  color: #d4af37; /* Gold for the icons */
  margin-bottom: 20px;
}

.estate-planning-service-item h3 {
  font-size: 24px;
  color: #d4af37; /* Gold */
  margin-bottom: 10px;
}

.estate-planning-service-item p {
  font-size: 16px;
  color: #333;
}

/* Responsive Design */
@media (max-width: 1200px) {
  #estate-planning-services {
    margin-left: 30px;
    margin-right: 30px;
  }

  .estate-planning-service-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 columns on medium screens */
  }

  .estate-planning-container h2 {
    font-size: 32px;
  }

  .estate-planning-service-item {
    padding: 20px;
  }
}

@media (max-width: 768px) {
  #estate-planning-services {
    margin-left: 20px;
    margin-right: 20px;
  }

  .estate-planning-service-grid {
    grid-template-columns: 1fr; /* 1 column on small screens */
  }

  .estate-planning-container h2 {
    font-size: 28px;
  }

  .estate-planning-service-item {
    padding: 15px;
  }
}

@media (max-width: 480px) {
  #estate-planning-services {
    margin-left: 10px;
    margin-right: 10px;
  }

  .estate-planning-container {
    width: 100%; /* Full width on very small screens */
  }

  .estate-planning-service-item {
    padding: 10px;
  }

  .estate-planning-container h2 {
    font-size: 24px;
  }
}
</style>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection