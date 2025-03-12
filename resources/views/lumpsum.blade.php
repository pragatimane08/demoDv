
@extends('layouts.app')
@section('content')

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/sipcalculator.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">SIP+Lumpsum Calculator</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Financial Calculator</a></li>
                  <li class="breadcrumb-item"><a href="#">SIP+Lumpsum Calculator</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>

<!-- lumpsum start -->
<h1 class="why-planning-h2"> SIP+Lumpsum Calculator</h1>

<iframe src="https://www.investwell.in/updation/parameter/Calculator/par_lumpsum_calculatorN.jsp?bbg=ffffff&ff=verdana&fs=12&fsh=14&bt=000000&ht=ffffff&lc=cccccc&ocl=455a64" width="90%" height="800" frameborder="0" scrolling="auto"></iframe>
  
  <!-- lumpsum end -->
  <style>
    iframe{
        margin-left: 5%;
    }
  </style>

  



    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection