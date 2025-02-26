@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/lifeheader.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Health Insurance</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Health Insurance</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->
    
    <div class="health-insurance-container">
        <h1 class="health-insurance-heading">What is Health Insurance?</h1>
        <p>Health insurance definition is the coverage an insurance company provides for a regular premium you pay. The insurance plan covers medical services such as consultation, hospitalisation, surgeries, nursing, ambulance, etc. It also bears the prescription medicine, pre and post-hospitalisation expenses etc. Medical emergencies can drain your savings without proper planning.</p>
        <p>Health insurance lets you know that you can manage treatment costs without financial stress. With medical expenses soaring high, medical insurance is a valuable addition to your financial planning that ensures your financial as well as overall well-being.</p>
        
        <div class="health-insurance-features">
            <ul>
                <li><i class="fas fa-hospital"></i>10,000+ network hospital in India</li>
                <li><i class="fas fa-heartbeat"></i>Covers 18 types of heart diseases</li>
                <li><i class="fas fa-shield-alt"></i>Cover of Rs.10 lakh for £ 15/Day²</li>
                <li><i class="fas fa-file-medical"></i>No Medicals Required</li>
            </ul>
        </div>

        <div class="health-insurance-cta-buttons">
        <a href="{{ route('schedulemeeting') }}" id="advisorButton">
    <i class="fas fa-headset"></i> TALK TO OUR ADVISOR
</a>
</div>
        </div>
    </div>
<!-- benefits of health insurance -->
    <div class="benefithealthinsurance-container">
        <div class="benefithealthinsurance-heading">Benefits of a Health Insurance Policy</div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-hospital"></i>
            <div class="benefithealthinsurance-content">
                <h3>Hospitalisation Coverage</h3>
                <p>The policy covers your in-hospitalisation and pre-and post-hospitalisation expenses up to a pre-determined amount.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-home"></i>
            <div class="benefithealthinsurance-content">
                <h3>Home and Daycare Treatments</h3>
                <p>Apart from hospitalisation expenses, you also get coverage for treatments taken at home and daycare procedures.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-coins"></i>
            <div class="benefithealthinsurance-content">
                <h3>Tax Benefits</h3>
                <p>You get tax benefit for the premium paid towards the health insurance policy.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-shield-alt"></i>
            <div class="benefithealthinsurance-content">
                <h3>Add-on Covers</h3>
                <p>You can enhance your health insurance policy with add-on covers like critical illness cover, DPD care, hospital cash cover, and more.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-sync-alt"></i>
            <div class="benefithealthinsurance-content">
                <h3>Sum Reinstatement</h3>
                <p>You can restore the sum insured with the sum reinstatement benefit. This benefit comes to help when you have exhausted the sum insured during a policy year.</p>
            </div>
        </div>
        <div class="benefithealthinsurance-item">
            <i class="benefithealthinsurance-icon fas fa-hand-holding-usd"></i>
            <div class="benefithealthinsurance-content">
                <h3>Income Loss Compensation</h3>
                <p>Some health insurance policies also offer compensation in case of income loss due to accidental disability.</p>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
@endsection