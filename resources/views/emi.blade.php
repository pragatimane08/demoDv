
@extends('layouts.app')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Financial-Calculator</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">EMI Calculator</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Emi start -->
<h1 class="why-planning-h2"> EMI Calculator</h>
<iframe loading="lazy" src="https://www.investwell.in/updation/parameter/Calculator/par_emi_calculatorN.jsp?g1=00bfff&amp;g2=0086b3&amp;sbg=000000&amp;share=N" width="100%" height="750" frameborder="0" scrolling="auto"></iframe>
                                
</div>
 <!-- emi end -->
  <style>
    .responsive-iframe-container {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* Default Aspect Ratio: 16:9 */
    overflow: hidden;
}

.responsive-iframe-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

/* Specific adjustments for iPhone 375px */
@media (max-width: 375px) {
    .responsive-iframe-container {
        padding-top: 55%; /* Adjust Aspect Ratio: 4:3 for better fit */
    }

    .responsive-iframe-container iframe {
        height: 100%; /* Ensure it uses full height within the container */
    }
}

  </style>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection