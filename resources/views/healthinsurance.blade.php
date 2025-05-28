@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.webp -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/healthh1.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Health Insurance</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Health Insurance</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->
    
<!--info-start-->
    <div class="health-insurance-container fade-in">
        <h1 class="health-insurance-heading fade-in">What is Health Insurance?</h1>
        <p>Health insurance definition is the coverage an insurance company provides for a regular premium you pay. The insurance plan covers medical services such as consultation, hospitalisation, surgeries, nursing, ambulance, etc. It also bears the prescription medicine, pre and post-hospitalisation expenses etc. Medical emergencies can drain your savings without proper planning.</p>
        <p>Health insurance lets you know that you can manage treatment costs without financial stress. With medical expenses soaring high, medical insurance is a valuable addition to your financial planning that ensures your financial as well as overall well-being.</p>

        <div class="health-insurance-features">
            <ul>
                <li class="fade-in"><i class="fas fa-hospital"></i>Cashless treatments</li>
                <li class="fade-in"><i class="fas fa-heartbeat"></i> Pre and post hospitalisation expenses covered</li>
                <li class="fade-in"><i class="fas fa-shield-alt"></i> Enhanced protection through top-up policy</li>
                <li class="fade-in"><i class="fas fa-file-medical"></i>Choose the policy that suits you among insurance companies</li>
            </ul>
        </div>

        <div class="health-insurance-cta-buttons">
            <a href="{{ route('schedulemeeting') }}" id="advisorButton" class="fade-in">
                <i class="fas fa-headset"></i> TALK TO OUR ADVISOR
            </a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll(".fade-in");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show");
                    } else {
                        entry.target.classList.remove("show"); // Removes effect when out of view
                    }
                });
            }, { threshold: 0.2 });

            elements.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
<!--info-end-->

<!-- benefits of health insurance -->
<div class="benefithealthinsurance-container">
        <div class="benefithealthinsurance-heading">Benefits of a Health Insurance Policy</div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-hospital"></i>
            <div class="benefithealthinsurance-content">
                <h3>Hospitalisation Coverage</h3>
                <p>Covers in-hospitalisation and pre/post-hospitalisation expenses up to a set limit.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-home"></i>
            <div class="benefithealthinsurance-content">
                <h3>Home & Daycare Treatments</h3>
                <p>Provides coverage for treatments taken at home and daycare procedures.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-coins"></i>
            <div class="benefithealthinsurance-content">
                <h3>Tax Benefits</h3>
                <p>Tax savings for the premium paid towards the policy.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-shield-alt"></i>
            <div class="benefithealthinsurance-content">
                <h3>Add-on Covers</h3>
                <p>Enhance your policy with add-ons like critical illness cover, hospital cash, and more.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-sync-alt"></i>
            <div class="benefithealthinsurance-content">
                <h3>Sum Reinstatement</h3>
                <p>Restores your sum insured if exhausted during the policy year.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-hand-holding-usd"></i>
            <div class="benefithealthinsurance-content">
                <h3>Income Loss Compensation</h3>
                <p>Compensation in case of income loss due to accidental disability.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const items = document.querySelectorAll(".benefithealthinsurance-item");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show");
                    } else {
                        entry.target.classList.remove("show");
                    }
                });
            }, { threshold: 0.3 });
            
            items.forEach(item => {
                observer.observe(item);
            });
        });
    </script>
<!-- benefits of health insurance end -->
    <script src="js/main.js"></script>
@endsection