@extends('layouts.app')
@section('content')
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Financial-calculator</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">SIP step up Calculator</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- sip step up  start -->
<h1 class="why-planning-h2"> SIP Step Up Calculator</h1>

<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-872a35f" data-id="872a35f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-c37ef4c elementor-widget elementor-widget-text-editor" data-id="c37ef4c" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
                <iframe 
                    src="https://www.investwell.in/updation/parameter/Calculator/par_sip_stepup_calculatorN.jsp?share=N&amp;00000" 
                    width="100%" 
                    height="800" 
                    frameborder="0" 
                    scrolling="no" 
                    style="overflow: hidden;">
                </iframe>
            </div>
        </div>
    </div>
</div>


 <!-- sip step up end -->
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