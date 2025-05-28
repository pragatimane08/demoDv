@extends('layouts.app')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  style="background: url('{{Vite::asset('resources/theme/img/contactushead1.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
        <!-- <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
                <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
            </ol>
        </nav> -->
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Us Start -->
<div class="contact-us-contact-container">
    <div class="contact-us-contact-left">
        <h1>Contact Us</h1>
        <p>We would like to hear from you. Please send us a message by filling out the form below and we will get back to you shortly.</p>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form action="{{ route('sendMail') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
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
            <a href="https://www.facebook.com/people/DhanaVruksha-Financial-services/100086682897556/" target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://x.com/i/flow/login?redirect_after_login=%2Fdhanavruksha" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/dhanavruksha_/#" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/dhanavruksha-financial-services-private-ltd/" target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</div>

<!-- Map -->
<div class="map-contact-us-map-container">
    <h2>Our Location</h2>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0966610181126!2d80.2741673748424!3d13.029516187291216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f811dfd9efbe305%3A0xef0bfda9dfa891e1!2sDhanavruksha!5e0!3m2!1sen!2sin!4v1735560544898!5m2!1sen!2sin"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<!-- Popup Message JS -->
<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            showPopupMessage("{{ $error }}", "error");
        @endforeach
    @endif

    @if (session('success'))
        showPopupMessage("{{ session('success') }}", "success");
    @elseif (session('error'))
        showPopupMessage("{{ session('error') }}", "error");
    @endif

    function showPopupMessage(message, type) {
        let popup = document.createElement('div');
        popup.classList.add('popup-message', type, 'show');

        let heading = document.createElement('h3');
        heading.textContent = type.charAt(0).toUpperCase() + type.slice(1);
        popup.appendChild(heading);

        let body = document.createElement('p');
        body.textContent = message;
        popup.appendChild(body);

        let closeButton = document.createElement('button');
        closeButton.classList.add('close-btn');
        closeButton.innerHTML = '&times;';
        closeButton.onclick = () => popup.remove();
        popup.appendChild(closeButton);

        document.body.appendChild(popup);

        setTimeout(() => {
            popup.classList.remove('show');
        }, 5000); // Hide the popup after 5 seconds
    }
</script>

<!-- CSS for Popup Message -->
<style>
    .popup-message {
        position: fixed;
        top: 10vh;
        right: 2vw;
        max-width: 400px;
        width: 90%;
        padding: 1rem;
        background-color: #333;
        color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 9999;
    }

    .popup-message.success { background-color: #4CAF50; }
    .popup-message.error { background-color: #f44336; }
    .popup-message.info { background-color: #2196F3; }

    .popup-message h3 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
    }

    .popup-message p {
        margin: 5px 0;
        font-size: 1rem;
    }

    .popup-message .close-btn {
        position: absolute;
        top: 5px;
        right: 10px;
        font-size: 1.2rem;
        color: #fff;
        background: transparent;
        border: none;
        cursor: pointer;
    }

    .popup-message.show {
        opacity: 1;
        visibility: visible;
    }
</style>

<!-- Back to Top Button -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
    <i class="bi bi-arrow-up"></i>
</a>

<!-- Template Javascript -->
<script src="js/main.js"></script>

@endsection
