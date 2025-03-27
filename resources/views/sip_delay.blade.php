@extends('layouts.app')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/sipcalculator.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">SIP Delay Calculator</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Financial Calculator</a></li>
                  <li class="breadcrumb-item"><a href="#">SIP Delay Calculator</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
<!-- Page Header End -->

<!-- sip delay start -->
 
<h1 class="why-planning-h2"> SIP Delay Calculator</h1>

    <iframe src="https://www.investwell.in/updation/parameter/Calculator/par_sipdelay_calculatorN.jsp?obgl=eeeeee&amp;fs=14&amp;ol=222222&amp;obgr=dddddddd&amp;or=111111&amp;share=N" 
            width="100%" height="800px" frameborder="0" scrolling="auto"></iframe>


                                    
 <!-- sip delay end -->
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

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection