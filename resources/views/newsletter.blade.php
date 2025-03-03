@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Newsletter</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Newsletter</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Include CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-custom">Our Newsletter</p>
            <h1 class="display-5 mb-5">Stay Updated With Our Newsletter</h1>
        </div>

        <!-- Newsletter Subscription Section -->
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <button id="subscribeBtn" class="btn btn-primary-1">Subscribe</button>
        </div>

        <!-- Subscription Form Popup -->
        <div id="subscriptionPopup" class="newsletter-pop-up-form-subscription-container" style="display: none;">
            <button type="button" id="closePopup" class="close-btn">&times;</button>
            <h2>Subscribe Now</h2>
            <form id="subscribeForm" action="{{ route('newsletter.subscribe') }}" method="POST" class="subscription-form">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone (10 digits)" maxlength="10" oninput="validatePhone(this)">
                    <small id="phoneError" class="text-danger" style="display: none;">Please enter a valid 10-digit phone number.</small>
                </div>
                <button type="submit" class="btn-primary-1">Subscribe</button>
                <!-- Loading Indicator -->
                <div id="loadingIndicator" style="display: none;">
                    <p>Submitting...</p>
                </div>
            </form>
        </div>

        <!-- Success Popup -->
        <div id="successPopup" class="newsletter-pop-up-form-subscription-container" style="display: none;">
            <button type="button" id="closeSuccessPopup" class="close-btn">&times;</button>
            <h2>Subscription Successful!</h2>
            <p>Thank you for subscribing to our newsletter. Please check your email to verify your subscription.</p>
        </div>

        <!-- Verification Message (Initially Hidden) -->
        <div id="verificationMessage" class="wow fadeInUp" data-wow-delay="0.1s" style="display: none;">
            <p>Please verify your email to receive the latest newsletter.</p>
        </div>
    </div>
</div>

<!-- Carousel Start -->
<div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
    @foreach($newsletters as $newsletter)
        <div class="project-item mb-5">
            <div class="position-relative">
                <img class="img-fluid" src="{{ asset('storage/' . $newsletter->image) }}" alt="{{ $newsletter->title }}">
                <div class="project-overlay">
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('storage/' . $newsletter->image) }}" data-lightbox="project">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('storage/' . $newsletter->pdf) }}" target="_blank">
                        <i class="fa fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="p-4">
                <a class="d-block h5" href="#">{{ $newsletter->title }}</a>
                <span>{{ $newsletter->description }}</span>
            </div>
        </div>
    @endforeach
</div>
<!-- Carousel End -->

<!-- Overlay Background -->
<div class="popup-overlay"></div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
<style>
    /* Subscription form popup styling */
    #subscribeBtn {
        background-color: #D4AF37; /* Golden color */
        color: white; /* White text */
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 500;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-bottom: 30px; /* Add margin-bottom */
        margin-left: 190%; /* Push button to the right */
        display: block; /* Ensure it takes full width */
        width: fit-content; /* Fit content width */
    }

    #subscribeBtn:hover {
        background-color: #B8860B; /* Darker golden color on hover */
    }

    #subscriptionPopup, #successPopup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
        width: 500px;
        max-width: 100%;
        text-align: center;
        animation: fadeIn 0.8s ease-in-out;
        z-index: 1000;
        position: relative;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        background: none;
        border: none;
        cursor: pointer;
        color: #333;
    }

    .close-btn:hover {
        color: #B8860B;
    }

    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 999;
    }

    .subscription-form {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
        text-align: left;
    }

    .form-group label {
        font-weight: bold;
        color: #333;
        display: block;
        margin-bottom: 5px;
    }

    .form-control {
        border: 2px solid #D4AF37;
        border-radius: 10px;
        padding: 12px;
        width: 100%;
        font-size: 16px;
        transition: all 0.3s ease-in-out;
        background-color: #fff;
    }

    .form-control:focus {
        border-color: #B8860B;
        outline: none;
        box-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
    }

    .btn-primary-1 {
        background-color: #D4AF37;
        color: white;
        border: none;
        padding: 14px 22px;
        font-size: 18px;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        width: 100%;
        text-transform: uppercase;
    }

    .btn-primary-1:hover {
        background-color: #B8860B;
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(180, 134, 11, 0.5);
    }

    #loadingIndicator {
        text-align: center;
        margin-top: 20px;
        font-size: 18px;
        color: #D4AF37;
    }

    #successPopup h2 {
        color: #D4AF37;
        margin-bottom: 20px;
    }

    #successPopup p {
        font-size: 16px;
        color: #333;
    }

    #phoneError {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        #subscriptionPopup, #successPopup {
            width: 90%;
            padding: 20px;
        }
        .btn-primary {
            font-size: 16px;
            padding: 12px 18px;
        }
    }

    @media (max-width: 480px) {
        #subscriptionPopup, #successPopup {
            padding: 20px;
        }
        .form-control {
            padding: 10px;
        }
        .btn-primary {
            font-size: 16px;
            padding: 12px;
        }
    }

    #verificationMessage p {
        color: #D4AF37; /* Golden text */
        font-size: 16px;
        font-weight: 500;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const subscribeBtn = document.getElementById('subscribeBtn');
        const closePopup = document.getElementById('closePopup');
        const subscriptionPopup = document.getElementById('subscriptionPopup');
        const popupOverlay = document.querySelector('.popup-overlay');
        const loadingIndicator = document.getElementById('loadingIndicator');
        const successPopup = document.getElementById('successPopup');
        const closeSuccessPopup = document.getElementById('closeSuccessPopup');

        // Function to validate phone number
        function validatePhone(input) {
            const phoneError = document.getElementById('phoneError');
            const phoneValue = input.value;

            // Allow only digits and limit to 10 characters
            input.value = phoneValue.replace(/\D/g, '').slice(0, 10);

            // Show error if the length is not 10
            if (input.value.length !== 10) {
                phoneError.style.display = 'block';
            } else {
                phoneError.style.display = 'none';
            }
        }

        // Open subscription popup
        subscribeBtn.addEventListener('click', function () {
            subscriptionPopup.style.display = 'block';
            popupOverlay.style.display = 'block';
        });

        // Close subscription popup
        closePopup.addEventListener('click', function () {
            subscriptionPopup.style.display = 'none';
            popupOverlay.style.display = 'none';
        });

        // Close success popup
        closeSuccessPopup.addEventListener('click', function () {
            successPopup.style.display = 'none';
            popupOverlay.style.display = 'none';
        });

        // Close popups when clicking outside
        popupOverlay.addEventListener('click', function () {
            subscriptionPopup.style.display = 'none';
            successPopup.style.display = 'none';
            popupOverlay.style.display = 'none';
        });

        // Form submission logic
        document.getElementById('subscribeForm').addEventListener('submit', function (e) {
            const phoneInput = document.getElementById('phone');
            const phoneError = document.getElementById('phoneError');

            // Validate phone number before submission
            if (phoneInput.value.length !== 10) {
                e.preventDefault(); // Prevent form submission
                phoneError.style.display = 'block'; // Show error message
                return;
            }

            // Show loading indicator
            loadingIndicator.style.display = 'block';

            fetch(this.action, {
                method: 'POST',
                body: new FormData(this),
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data); // Log the response for debugging
                if (data.success) {
                    // Hide loading indicator and subscription form
                    loadingIndicator.style.display = 'none';
                    subscriptionPopup.style.display = 'none';
                    popupOverlay.style.display = 'none';

                    // Show success pop-up
                    successPopup.style.display = 'block';
                    popupOverlay.style.display = 'block';
                } else {
                    alert(data.message || 'Subscription failed. Please try again.');
                    loadingIndicator.style.display = 'none';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
                loadingIndicator.style.display = 'none';
            });
        });

        // Initialize Owl Carousel
        $(".project-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: { items: 1 },
                576: { items: 2 },
                992: { items: 3 }
            }
        });
    });
</script>