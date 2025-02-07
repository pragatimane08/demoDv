<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dhanavruksha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Add this in your <head> section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
    <link rel='stylesheet' id='wpo_min-header-0-css' href='https://dhanavruksha.in/wp-content/cache/wpo-minify/1732761678/assets/wpo-minify-header-8631a9c9.min.css' media='all'/>
        <link rel='stylesheet' id='genericons-css' href='https://dhanavruksha.in/wp-content/themes/twentysixteen/genericons/genericons.css' media='all'/>
        
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- Include Flatpickr CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <!-- <link href="css/ionicons.min.css" rel="stylesheet"> -->
    <script>
        new WOW().init();

        //loader
        window.addEventListener('load', function () {
            const loader = document.getElementById('loader');
            const content = document.getElementById('content');

            // Fade out the loader after a brief delay
            setTimeout(function () {
                loader.classList.add('loader-hidden');
                content.style.display = 'block';  // Show the main content
            }, 1500);  // Adjust delay time as necessary
        });
    </script>
    <script>
        new WOW().init();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
 <!-- navbar -->
    @include('partials.navbar')

    
    @yield('content')
    

    <!-- Footer -->
    @include('partials.footer')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: [' Growth', ' Financial Freedom'],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        // JavaScript to move and scale the golden curve based on scroll
        window.addEventListener('scroll', function () {
            const serviceContainer = document.querySelector('.service-container');
            const goldenCurve = document.querySelector('.golden-curve');
    
            const containerRect = serviceContainer.getBoundingClientRect(); // Get the container position
    
            // If the service container is in view, move the curve
            if (containerRect.top < window.innerHeight && containerRect.bottom > 0) {
                const scrollPosition = (window.innerHeight - containerRect.top) * 0.3; // Calculate scroll movement
                const scaleSize = 1 + scrollPosition / 1000; // Scale the curve based on scroll
    
                goldenCurve.style.transform = `translateY(${scrollPosition}px) rotate(360deg) scale(${scaleSize})`;
            }
        });
    </script>

</body>
</html>