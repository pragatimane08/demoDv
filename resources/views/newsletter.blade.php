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

        <!-- Newsletter Subscription Section -->
        <div class="container-xxl pt-5">
            <div class="container">
                <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="fs-5 fw-medium text-custom">Subscribe to Our Newsletter</p>
                    <button id="subscribeBtn" class="btn btn-primary">Subscribe</button>
                </div>

                <!-- Subscription Form (Initially Hidden) -->
                <div id="subscriptionForm" class="wow fadeInUp" data-wow-delay="0.1s" style="display: none;">
                    <form id="subscribeForm" action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Verification Message (Initially Hidden) -->
                <div id="verificationMessage" class="wow fadeInUp" data-wow-delay="0.1s" style="display: none;">
                    <p>Please verify your email to receive the latest newsletter.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('subscribeBtn').addEventListener('click', function () {
            document.getElementById('subscriptionForm').style.display = 'block';
            this.style.display = 'none';
        });

        document.getElementById('subscribeForm').addEventListener('submit', function (e) {
            e.preventDefault();

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
                if (data.success) {
                    document.getElementById('subscriptionForm').style.display = 'none';
                    document.getElementById('verificationMessage').style.display = 'block';
                } else {
                    alert('Subscription failed. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        });

        // Initialize Owl Carousel
        $(document).ready(function () {
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
    });
</script>

<style>
    /* news section start */
.news-container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-left: 5px solid gold;
}

.section-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
    color: #333;
}

.news-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.news-item {
    padding: 15px;
    border-radius: 8px;
    background-color: black;
    color: white;
    border: 1px solid gold;
    transition: transform 0.3s;
}

.news-item:hover {
    transform: scale(1.02);
}

.news-item h3 {
    margin: 0 0 10px;
    font-size: 18px;
    color: gold;
}

.news-item p {
    margin: 0;
    font-size: 14px;
    line-height: 1.5;
}

.news-item a {
    color: gold;
    text-decoration: none;
    font-weight: bold;
}

.news-item a:hover {
    text-decoration: underline;
}
</style>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection 