
@extends('layouts.app')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/finahd.avif') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Financial Calculator</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Investor Zone</a></li>
                  <li class="breadcrumb-item"><a href="#">Financial Calculator</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->

<section class="financial-calculators">
    <!-- <h1>Financial Calculators</h1> -->
    
    <!-- Row 1 - First Four Cards (now circles) -->
    <div class="calculator-row">
        <div class="calculator-card">
            <img src="img/sip.jpg" alt="SIP Icon">
            <h2>SIP</h2>
            <p>It tells you how much wealth you can create by making monthly investment.</p>
            <!-- <button onclick="showAlert('SIP Calculator')">Click here</button> -->
            <button onclick="window.location.href='{{ route('sip-calculator')}}'">Click here</button>

            <!-- <button onclick="window.location.href='sip-calculator.html'">Click here</button> -->
        </div>
        

        <div class="calculator-card">
            <img src="img/education.png" alt="Education Icon">
            <h2>Education</h2>
            <p>It helps you calculate for the future expenditure for your child's higher education.</p>
            <button onclick="window.location.href='{{ route('educationcal')}}'">Click here</button>
            <!-- <button onclick="window.location.href='marriage.html'">Click here</button> -->
        </div>

        <div class="calculator-card">
            <img src="img/wedding_13527036.png" alt="Marriage Icon">
            <h2>Marriage</h2>
            <p>It helps you see the future expenditure which would be incurred at the time of marriage of your children.</p>
            <button onclick="window.location.href='{{ route('marriage')}}'">Click here</button>
            <!-- <button onclick="window.location.href='marriage.html'">Click here</button> -->
        </div>

        <div class="calculator-card">
            <img src="img/retirement.png" alt="Retirement Icon">
            <h2>Retirement</h2>
            <p>It helps you to calculate for saving sufficient amount to take care of your post-retirement expenses.</p>
            <button onclick="window.location.href='{{ route('retirementcal')}}'">Click here</button>

            <!-- 
            <button onclick="window.location.href='retirement.html'">Click here</button> -->
        </div>
    </div>
    
    <!-- Row 2 - Next Four Cards (now circles) -->
    <div class="calculator-row">
        <div class="calculator-card">
            <img src="img/delayed-gratification.png" alt="SIP Delay Icon">
            <h2>SIP Delay</h2>
            <p>It illustrates how much you stand to lose if you delay your SIP by a few months!</p>
            <button onclick="window.location.href='{{ route('sip_delay')}}'">Click here</button>
            <!-- <button onclick="window.location.href='sip_delay'">Click here</button> -->
        </div>

        <div class="calculator-card">
            <img src="img\success (1).png" alt="SIP Step Up Icon">
            <h2>SIP Step Up</h2>
            <p>It helps you visualize the amount accumulated with regular investment with an annual increase.</p>
            <button onclick="window.location.href='{{ route('sip_stepup')}}'">Click here</button>
            <!-- <button onclick="window.location.href='sipstepup.html'">Click here</button> -->
        </div>

        <div class="calculator-card">
            <img src="img/laumpsum.png" alt="Lumpsum Icon">
            <h2>Sip+Lumpsum</h2>
            <p>It helps you visualize the amount you have invested in lumpsum and monthly basis.</p>
            <!-- <button onclick="window.location.href='lumpsum.html'">Click here</button> -->
            <button onclick="window.location.href='{{ route('lumpsum')}}'">Click here</button>
        </div>

        <div class="calculator-card">
            <img src="img/shopping.png" alt="EMI Icon">
            <h2>EMI</h2>
            <p>This calculator helps you know how much you need to pay every month towards the loan EMI.</p>
            <button onclick="window.location.href='{{ route('emi')}}'">Click here</button>
            <!-- <button onclick="window.location.href='emi.html'">Click here</button> -->
        </div>
    </div>

</section>
<br>
<br>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

   




    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection