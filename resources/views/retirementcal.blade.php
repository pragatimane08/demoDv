@extends('layouts.app')
@section('content')


    
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/sipcalculator.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Retirement Calculator</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Financial Calculator</a></li>
                  <li class="breadcrumb-item"><a href="#">Retirement Calculator</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
<!-- Page Header End -->

<h1 class="why-planning-h2"> Retirement Calculator</h1>

<iframe src="https://www.investwell.in/updation/parameter/Calculator/par_retirement_calculatorN.jsp" width="100%" height="1150" frameborder="0" scrolling="auto"></iframe>
    </div>                  
   
                   
                   
 

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection