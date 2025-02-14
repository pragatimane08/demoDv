
@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/downloadshd.avif') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Downloads</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Investore Zone</a></li>
                  <li class="breadcrumb-item"><a href="#">Downloads</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->
<!-- public/img/downloadshd.avif -->
<!-- Navigation Tabs -->
<nav class="nav1">
    <ul class="tabs">
        <li><button class="tab-button button active" data-section="current">MF Forms</button></li>
        <li><button class="tab-button button" data-section="download-kyc-page">KYC / FATCA</button></li>
    </ul>
</nav>
<!-- Navigation Tabs -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".tab-button");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            // Remove 'active' class from all buttons
            buttons.forEach(btn => btn.classList.remove("active"));

            // Add 'active' class to the clicked button
            this.classList.add("active");
        });
    });
});


</script>
<style>
    .tab-button {
    padding: 10px 20px;
    border: none;
    background-color: #f0f0f0;
    cursor: pointer;
    transition: 0.3s;
}

.tab-button.active {
    background-color: #D2AC47; /* Active button color */
    color: white;
    font-weight: bold;
}

</style>
<!-- Section: MF Forms-start -->
<div id="current" class="section" style="display: block;">
  <div class="downloads-section">
    <h1 class="downloads-title">Downloads</h1>
    <p class="downloads-description">
      Our vision is to digitally deliver a range of financial products to promote the financial well-being of the people of India.
    </p>
    <iframe 
      id="mainframe1" 
      style="z-index: -1000;" 
      src="https://formprint.printwellonline.com/formprintpage.aspx?zp0k34=45A82F71-B1BC-4A97-8019-628D0C517A01" 
      name="mainframe1" 
      width="68%" 
      height="130px" 
      frameborder="0" 
      scrolling="auto">
    </iframe>
  </div>
</div>

<!-- Section: MF Forms-end -->

<!-- Section 2 : Kyc -->
<div id="download-kyc-page" class="section" style="display: none;">

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
            btn.classList.remove('active');
        });
        button.classList.add('active');
    }
</script>

<style>
    .kyc-btn.active {
        background-color: white; /* Example active color */
        color: #cb9f42;
    }
</style>


    <!-- Cards Section -->
    <div class="kyc-cards-section">
        <!-- Check KYC Status -->
        <div class="kyc-card" id="checkkyc" style="display: block;">
            <div class="kyc-card-icon">✅</div>
            <h3 class="kyc-card-title">Check KYC Status</h3>
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
            <div class="kyc-card-icon">🔍</div>
            <h3 class="kyc-card-title">Validate KYC</h3>
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
            <div class="kyc-card-icon">📂</div>
            <h3 class="kyc-card-title">Download Forms</h3>
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

<!-- JavaScript Function to Toggle the Form Display -->
<script>
    function showSection(sectionId) {
        // Hide all sections
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


</div>




    <script>
 // Attach event listeners to buttons
 document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            const sectionId = button.getAttribute('data-section');

            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = 'none';
            });

            // Remove 'active' class from all buttons
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';

            // Add 'active' class to the clicked button
            button.classList.add('active');
        });
    });

    // Set default tab (Downloads)
    window.onload = () => {
        const defaultSection = 'current';
        document.getElementById(defaultSection).style.display = 'block';
        document.querySelector(`.tab-button[data-section="${defaultSection}"]`).classList.add('active');
    };
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/scripts.js"></script>

@endsection