@extends('layouts.app')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Page Header Start -->
       <!-- Page Header Start -->
       <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/taxplanninghd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Tax Planning</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Tax Planning</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->
<!-- Tax Sections Start -->

<!--heading - start -->
<div class="tp-outer-container">
  <div class="tp-rounded-container">
    <div class="tp-left-content">
      <h1 class="tp-unique-tax-heading">
        Our<span class="tp-unique-highlight"> Unique Approach To</span> <br />
         Tax Planning
      </h1>
    </div>
    <div class="tp-right-content">
      <a href="{{ route('schedulemeeting') }}"  class="tp-unique-cta-button">📅 Schedule an expert call</a>
    </div>
  </div>
</div>

<!--heading - end -->


<!-- Navbar Start -->
<nav class="tax-cal-navbar">
  <ul class="tabs">
    <li><button class="tab-button button active" onclick="showContent('tax-saving')">Tax Saving</button></li>
    <li><button class="tab-button button" onclick="showContent('tax-calculator')">Tax Calculator</button></li>
    <li><button class="tab-button button" onclick="showContent('tax-slab')">Tax Slab</button></li>
  </ul>
</nav>
<!-- Navbar End -->

<!-- Tax Sections Start -->
<div id="tax-saving" class="tax-section" style="display: none;">
  <div class="tax-saving-section-wrapper">
    <div class="tax-saving-container">
      <!-- Left Side: Image -->
      <div class="tax-saving-image">
        <img src="img/tax-saving-1.webp" alt="Tax Saving,Tax consultant helping a client with tax-saving investment
options." />
      </div>

      <!-- Right Side: Text Content -->
      <div class="tax-saving-content">
        <h1 class="section-title">Understanding Tax Saving</h1>
        <p class="intro-text">
          There is more to tax saving than the exemptions available on investments made by you...
        </p>
        <ul class="tax-components">
          <li>HRA (House Rent Allowance)</li>
          <li>Home Loans</li>
          <li>LTA (Leave Travel Allowance)</li>
          <li>Section 80D</li>
          <li>Reimbursements</li>
        </ul>
        <p class="intro-text">
          Investments like ELSS schemes of Mutual Funds, NPS (National Pension System), Life Insurance, and Health Insurance schemes also enable tax savings.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Tax Sections End -->

<!-- tax-calculator start -->
<div id="tax-calculator" class="tax-section" style="display: none;">
<iframe src="https://www.investwell.in/updation/parameter/Calculator/par_incometaxcalculator.jsp?bbg=ffffff&hbg=eeeeee&bt=000000&ht=550000&fs=11&share=N%22%20width=%22100%%22%20height=%221505px%22%20frameborder=%220%22%20scrolling=%22auto%22%20class=%22taxifrm%22%3E%3C/iframe%3E" width="100%" height="1500" frameborder="0" scrolling="auto" ></iframe>
</div>

<script>
  // Function to toggle between New and Old Tax Scheme forms
function toggleTaxForms() {
  // Get the value of the selected tax scheme (New or Old)
  const selectedScheme = document.querySelector('input[name="scheme"]:checked').value;

  // Get the New and Old Tax Scheme sections
  const newTaxSection = document.getElementById("tax-new");
  const oldTaxSection = document.getElementById("tax-old");

  // Toggle visibility based on the selected scheme
  if (selectedScheme === "new") {
    newTaxSection.style.display = "block";
    oldTaxSection.style.display = "none";
  } else {
    newTaxSection.style.display = "none";
    oldTaxSection.style.display = "block";
  }
}

// Show the "Tax Slab" when its tab is clicked
function showContent(contentId) {
  // Hide all sections
  const allSections = document.querySelectorAll('.tax-section');
  allSections.forEach(section => section.style.display = 'none');

  // Show the selected section
  const activeSection = document.getElementById(contentId);
  if (activeSection) {
    activeSection.style.display = 'block';
  }

  // Remove 'active' class from all buttons
  const allButtons = document.querySelectorAll('.tab-button');
  allButtons.forEach(button => button.classList.remove('active'));

  // Add 'active' class to the clicked button
  const activeButton = document.querySelector(`button[onclick="showContent('${contentId}')"]`);
  if (activeButton) {
    activeButton.classList.add('active');
  }
}

// Display "Tax Saving" by default
window.onload = function() {
  showContent('tax-saving');
};
</script>
</div>
<!-- tax-calculator end -->


<!-- Tax Slab Section Start -->
<div class="tax-section" id="tax-slab" style="display: none;">
  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-872a35f" data-id="872a35f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-widget-wrap elementor-element-populated">
      <div class="elementor-element elementor-element-74baf70 elementor-widget elementor-widget-text-editor" data-id="74baf70" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
          <iframe src="https://www.investwell.in/updation/parameter/par_taxslab.jsp?tbg=eeeeee&#038;hbg=cccccc&#038;hbg2=aaaaaa&#038;fs=11&#038;bt=222222&#038;ht=111111&#038;ht2=000000&#038;fsl=a1a1a0" width="100%" height="6900" frameborder="0" scrolling="auto"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Tax Slab Section End -->

<!-- Tax Sections End -->

<script>
  function showContent(contentId) {
    // Hide all sections
    const allSections = document.querySelectorAll('.tax-section');
    allSections.forEach(section => section.style.display = 'none');

    // Show the selected section
    const activeSection = document.getElementById(contentId);
    if (activeSection) {
      activeSection.style.display = 'block';
    }

    // Remove 'active' class from all buttons
    const allButtons = document.querySelectorAll('.tab-button');
    allButtons.forEach(button => button.classList.remove('active'));

    // Add 'active' class to the clicked button
    const activeButton = document.querySelector(`button[onclick="showContent('${contentId}')"]`);
    if (activeButton) {
      activeButton.classList.add('active');
    }
  }

  // Display "Tax Saving" by default
  window.onload = function() {
    showContent('tax-saving');
  };
</script>

  
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


   
    <script>
 function showContent(sectionId) {
  const sections = document.querySelectorAll('.tax-section');
  sections.forEach(section => {
    section.classList.remove('show');
    section.style.display = 'none';
  });

  const selectedSection = document.getElementById(sectionId);
  if (selectedSection) {
    selectedSection.style.display = 'block';
    setTimeout(() => selectedSection.classList.add('show'), 0);
  }

  const buttons = document.querySelectorAll('.tab-button');
  buttons.forEach(button => button.classList.remove('active'));

  const activeButton = document.querySelector(`button[onclick="showContent('${sectionId}')"]`);
  if (activeButton) {
    activeButton.classList.add('active');
  }
}

function calculateTax() {
  const grossIncome = parseFloat(document.getElementById("grossIncome").value) || 0;
  const scheme = document.querySelector('input[name="scheme"]:checked').value;

  // Standard Deduction
  const standardDeduction = 50000;
  const netTaxableIncome = grossIncome - standardDeduction;

  document.getElementById("netTaxableIncome").value = netTaxableIncome;

  // Tax Calculation Logic
  let tax = 0;
  let taxMessage = "Tax is <strong>NIL</strong>";
  let taxDetails = "As the net taxable income is under Rs. 7,00,000/-, tax rebate u/s 87A is applicable.";

  if (netTaxableIncome > 700000) {
    if (scheme === "new") {
      tax = calculateNewSchemeTax(netTaxableIncome);
    } else {
      tax = calculateOldSchemeTax(netTaxableIncome);
    }

    taxMessage = `Tax is <strong>Rs. ${tax.toFixed(2)}</strong>`;
    taxDetails = "Tax calculated based on the selected scheme.";
  }

  document.getElementById("taxMessage").innerHTML = taxMessage;
  document.getElementById("taxDetails").innerText = taxDetails;
}

function calculateNewSchemeTax(income) {
  // Add logic for new tax regime slabs
  if (income <= 700000) return 0;
  if (income <= 900000) return (income - 700000) * 0.1;
  if (income <= 1200000) return 20000 + (income - 900000) * 0.15;
  if (income <= 1500000) return 65000 + (income - 1200000) * 0.2;
  return 125000 + (income - 1500000) * 0.3;
}

function calculateOldSchemeTax(income) {
  // Add logic for old tax regime slabs
  if (income <= 250000) return 0;
  if (income <= 500000) return (income - 250000) * 0.05;
  if (income <= 1000000) return 12500 + (income - 500000) * 0.2;
  return 112500 + (income - 1000000) * 0.3;
}

</script>
  
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
 function showContent(sectionId) {
  const sections = document.querySelectorAll('.tax-section');
  sections.forEach(section => {
    section.classList.remove('show');
    section.style.display = 'none';
  });

  const selectedSection = document.getElementById(sectionId);
  if (selectedSection) {
    selectedSection.style.display = 'block';
    setTimeout(() => selectedSection.classList.add('show'), 0);
  }

  const buttons = document.querySelectorAll('.tab-button');
  buttons.forEach(button => button.classList.remove('active'));

  const activeButton = document.querySelector(`button[onclick="showContent('${sectionId}')"]`);
  if (activeButton) {
    activeButton.classList.add('active');
  }
}

function calculateTax() {
  const grossIncome = parseFloat(document.getElementById("grossIncome").value) || 0;
  const scheme = document.querySelector('input[name="scheme"]:checked').value;

  // Standard Deduction
  const standardDeduction = 50000;
  const netTaxableIncome = grossIncome - standardDeduction;

  document.getElementById("netTaxableIncome").value = netTaxableIncome;

  // Tax Calculation Logic
  let tax = 0;
  let taxMessage = "Tax is <strong>NIL</strong>";
  let taxDetails = "As the net taxable income is under Rs. 7,00,000/-, tax rebate u/s 87A is applicable.";

  if (netTaxableIncome > 700000) {
    if (scheme === "new") {
      tax = calculateNewSchemeTax(netTaxableIncome);
    } else {
      tax = calculateOldSchemeTax(netTaxableIncome);
    }

    taxMessage = `Tax is <strong>Rs. ${tax.toFixed(2)}</strong>`;
    taxDetails = "Tax calculated based on the selected scheme.";
  }

  document.getElementById("taxMessage").innerHTML = taxMessage;
  document.getElementById("taxDetails").innerText = taxDetails;
}

function calculateNewSchemeTax(income) {
  // Add logic for new tax regime slabs
  if (income <= 700000) return 0;
  if (income <= 900000) return (income - 700000) * 0.1;
  if (income <= 1200000) return 20000 + (income - 900000) * 0.15;
  if (income <= 1500000) return 65000 + (income - 1200000) * 0.2;
  return 125000 + (income - 1500000) * 0.3;
}

function calculateOldSchemeTax(income) {
  // Add logic for old tax regime slabs
  if (income <= 250000) return 0;
  if (income <= 500000) return (income - 250000) * 0.05;
  if (income <= 1000000) return 12500 + (income - 500000) * 0.2;
  return 112500 + (income - 1000000) * 0.3;
}

</script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection