
@extends('layouts.app')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- contact-us-start -->
<!-- contact-us-start -->
<div class="contact-us-contact-container">
    <div class="contact-us-contact-left">
        <h1>Contact Us</h1>
        <p>We would like to hear from you. Please send us a message by filling out the form below and we will get back with you shortly.</p>
        <form>
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="tel" placeholder="Phone Number" required> <!-- Added phone number field -->
            <textarea placeholder="Message" rows="5"></textarea>
            <button type="submit">SEND</button>
        </form>
    </div>
    <div class="contact-us-contact-right">
        <h2>Address</h2>
        <ul>
            <li><i class="fas fa-envelope"></i> customerservice@dhanavruksha.in</li>
            <li><i class="fas fa-phone-alt"></i> +917305888454</li>
            <li><i class="fas fa-map-marker-alt"></i> 75/77, 1D, KG Marina Bay, Santhome High Road, Chennai 600004</li>
            <li><i class="fas fa-clock"></i> 09:00 - 18:00</li>
        </ul>
        <!-- Social Media Links -->
        <div class="contact-us-social-links">
            <a href="https://www.facebook.com" target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</div>
<!-- contact-us-end -->


     <!-- contact-us-end -->

     <!-- map-start -->
<div class="map-contact-us-map-container">
    <h2>Our Location</h2>
    
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0966610181126!2d80.2741673748424!3d13.029516187291216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f811dfd9efbe305%3A0xef0bfda9dfa891e1!2sDhanavruksha!5e0!3m2!1sen!2sin!4v1735560544898!5m2!1sen!2sin"
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>
<!-- map-end -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection