
@extends('layouts.app')
@section('content')

  <!-- Page Header Start -->
 <!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/kychd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">KYC</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">KYC</a></li>
                  <li class="breadcrumb-item"><a href="#">KYC</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
<!-- public/img/kychd.jpg -->
<!-- kyc start -->
 <!-- KYC Compliance Portal -->
<div id="download-kyc-page" class="section" style="display: block;">

<!-- Hero Section -->
<h1 class="download-kyc-page-hero-title">KYC Compliance Portal</h1>
<p class="kyc-hero-description">Complete your KYC formalities to comply with SEBI regulations and invest securely in mutual funds.</p>

<!-- Buttons to switch between sections -->
<div class="kyc-buttons">
    <button class="kyc-btn" onclick="showSection('checkkyc'); toggleActiveButton(this);">Check KYC Status</button>
    <button class="kyc-btn" onclick="showSection('validatekyc'); toggleActiveButton(this);">Validate KYC</button>
    <button class="kyc-btn" onclick="showSection('downloadform'); toggleActiveButton(this);">Download Forms</button>
</div>

<script>
    function toggleActiveButton(button) {
        var buttons = document.querySelectorAll('.kyc-btn');
        buttons.forEach(function(btn) {
            btn.classList.remove('active');  // Remove active class from all buttons
        });
        button.classList.add('active');  // Add active class to the clicked button
    }
</script>

<style>
    .kyc-btn.active {
        background-color: white; /* Example active color */
        color: #cb9f42; /* Active button text color */
    }
</style>


<!-- Cards Section -->
<div class="kyc-cards-section">

    <!-- Check KYC Status -->
    <div class="kyc-card" id="checkkyc" style="display: block;">
        <h3 class="kyc-card-title">Check KYC Status</h3>
        <div class="kyc-card-icon">✅</div>
        <p class="kyc-card-description">Verify your KYC details across multiple platforms.</p>
        <a class="kyc-card-link" href="https://www.cvlkra.com" target="_blank">
                <img src="img/cvl_logo.jpg" alt="CVL KRA Icon" width="80" height="25"> CVL KRA
            </a><br>
            <a class="kyc-card-link" href="https://kra.ndml.in/kra-web/jsps/pos/KYCClientInquiry_NEW.jsp" target="_blank">
                <img src="img/nsdl-logo.jpg" alt="NSDL KRA Icon" width="80" height="25"> NSDL KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.camskra.com/" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> CAMS KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.nsekra.com/" target="_blank">
                <img src="img/nse.jpg" alt="NSE KRA Icon" width="80" height="25"> NSE KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.karvykra.com/index.aspx?ReturnUrl=%2f" target="_blank">
                <img src="img/Karvy_Logo.jpg" alt="Karvy KRA Icon" width="80" height="25"> Karvy KRA
            </a>    
    </div>

    <!-- Validate KYC -->
    <div class="kyc-card" id="validatekyc" style="display: none;">
        <h3 class="kyc-card-title">Validate KYC</h3>
        <div class="kyc-card-icon">🔍</div>
        <p class="kyc-card-description">Ensure your KYC details are up-to-date.</p>
        <a class="kyc-card-link" href="https://validate.cvlindia.com/CVLKRAVerification_V1/" target="_blank">
                <img src="img/cvl_logo.jpg" alt="CVL KRA Icon" width="80" height="25"> CVL KRA
            </a><br>
            <a class="kyc-card-link" href="https://kra.ndml.in/kra/ckyc/#/initiate" target="_blank">
                <img src="img/nsdl-logo.jpg" alt="NSDL KRA Icon" width="80" height="25"> NSDL KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.camskra.com/PanDetailsUpdate.aspx" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> CAMS KRA
            </a><br>
            <a class="kyc-card-link" href="https://www.karvykra.com/KYC_Validation/Default.aspx" target="_blank">
                <img src="img/Karvy_Logo.jpg" alt="Karvy KRA Icon" width="80" height="25"> Karvy KRA
            </a>    
    </div>

    <!-- Download Forms -->
    <div class="kyc-card" id="downloadform" style="display: none;">
        <h3 class="kyc-card-title">Download Forms</h3>
        <div class="kyc-card-icon">📂</div>
        <p class="kyc-card-description">Access and download important KYC forms.</p>
        <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMSKRA_Non_Individual.pdf" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> KYC Non-Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/Individual_KYC.pdf" target="_blank">
                <img src="img/cams-kra.jpg" alt="CAMS KRA Icon" width="80" height="25"> KYC Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMS_FATCA_Non_Individual.pdf" target="_blank">
                <img src="img/cams.jpg" alt="CVL KRA Icon" width="80" height="25"> FATCA Non-Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMS_FATCA-Individuals.pdf" target="_blank">
                <img src="img/cams.jpg" alt="CVL KRA Icon" width="80" height="25"> FATCA Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/CAMS_UBO_Declaration_Non_Indvidual.pdf" target="_blank">
                <img src="img/cams.jpg" alt="CVL KRA Icon" width="80" height="25"> UBO Declaration
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/KFINTECH_FATCA_CRS_Declaration_form_Individual.pdf" target="_blank">
                <img src="img/kfintehch (1).jpg" alt="kfintehch Icon" width="80" height="25"> FATCA CRS Declaration Form Individual
            </a><br>
            <a class="kyc-card-link" href="https://resources.investwellonline.com/forms/KFINTECH_FATCA_UBO_NON_INDIVIDUALS.pdf" target="_blank">
                <img src="img/kfintehch (1).jpg" alt="kfintehch Icon" width="80" height="25"> FATCA UBO Non-Individual
            </a><br>    
    </div>
</div>
</div>

<!-- JavaScript to Toggle Sections -->
<script>
function showSection(sectionId) {
    // Hide all KYC cards
    var sections = document.querySelectorAll('.kyc-card');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    // Show the selected section
    var activeSection = document.getElementById(sectionId);
    if (activeSection) {
        activeSection.style.display = 'block';
    }
}
</script>


<!-- kyc end -->
   

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection