
@extends('layouts.app')
@section('content')

  <!-- Page Header Start -->

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/sipcalculator.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">EMI Calculator</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Financial Calculator</a></li>
                  <li class="breadcrumb-item"><a href="#">EMI Calculator</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
  
<!-- Page Header End -->


<!-- Emi start -->
<h1 class="why-planning-h2"> EMI Calculator</h>
<div style="margin-bottom: -140px;">
<iframe loading="lazy" src="https://www.investwell.in/updation/parameter/Calculator/par_emi_calculatorN.jsp?g1=00bfff&amp;g2=0086b3&amp;sbg=000000&amp;share=N" width="100%" height="750" frameborder="0" scrolling="auto"></iframe>
                                
</div>
 <!-- emi end -->


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection