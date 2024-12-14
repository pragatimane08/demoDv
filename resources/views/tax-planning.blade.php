<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dhanavruksha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
     <!-- Include Font Awesome CDN in your HTML head -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

    <!-- <link href="css/ionicons.min.css" rel="stylesheet"> -->

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid text-white d-none d-lg-flex" style="background-color: #06060b;">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <img src="img/dhanavruksha-logo-new.png" alt="Logo" class="img-fluid" style="max-height: 60px;">

                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0"></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('company-profile') }}" class="dropdown-item">Company Profile</a>
                                <a href="{{ route('team') }}" class="dropdown-item">Team</a>

                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('equity') }}" class="dropdown-item">Equity And Derivatives</a>
                                <a href="{{ route('mutual-funds') }}" class="dropdown-item">Mutual Funds</a>
                                <a href="{{ route('pms-aif') }}" class="dropdown-item">PMS-AIF</a>
                                <a href="{{ route('fixed-deposits') }}" class="dropdown-item">Fixed Deposits</a>
                                <a href="{{ route('bonds') }}" class="dropdown-item">Bonds</a>
                                

                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('wealth-management') }}" class="dropdown-item">Wealth Management</a>
                            <a href="{{ route('financial-planning') }}" class="dropdown-item">Financial Planning</a>
                            <a href="{{ route('tax-planning') }}" class="dropdown-item">Tax Planning</a>
                            <a href="{{ route('portfolio-restucturing') }}" class="dropdown-item">Portfolio Restructuring</a>
                            <a href="{{ route('child-future-saving') }}" class="dropdown-item"> Child Future Saving</a>    
                            <a href="{{ route('retirmentplanning') }}" class="dropdown-item">Retirement Planning</a>
                            <a href="{{ route('seminars') }}" class="dropdown-item">Investment Seminar For Youth</a>


                            </div>
                        </div>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Investor Zone</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('newsletter') }}" class="dropdown-item">Newsletter</a>
                                <a href="{{ route('financial-calculator') }}" class="dropdown-item">Financial calculator</a>
                                <a href="{{ route('downloads') }}" class="dropdown-item">Downloads</a>
                                <a href="{{ route('blogs') }}" class="dropdown-item">Blogs</a>
                                <a href="{{ route('learning') }}" class="dropdown-item">Learning</a>

                            </div>
                        </div>
                        <a href="{{route('kyc')}}" class="nav-item nav-link">KYC</a>
                        <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact</a>

                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{ route('login-page') }}" class="btn custom-btn rounded-pill py-2 px-3">Client Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


<!-- Tax Sections Start -->
<!-- Tax Sections Start -->
<div id="tax-saving" class="tax-section" style="display: none;">
  <div class="tax-saving-section-wrapper">
    <div class="tax-saving-container">
      <!-- Left Side: Image -->
      <div class="tax-saving-image">
        <img src="img/tax-saving-1.webp" alt="Tax Saving" />
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

<!-- Tax-calculator start -->
<!-- tax-calculator start -->
<div id="tax-calculator" class="tax-section" style="display: none;">

  <!-- Wrapper container for tax calculator -->
  <div class="tax-calculator-container">
    <div class="tax-calculator-box">
      <h2>Income Tax Calculator FY 2024-25</h2>
      
      <!-- Tax Scheme Selection -->
      <div class="tax-scheme">
        <label>Select Tax Scheme:</label>
        <label>
          <input type="radio" name="scheme" value="new" checked onclick="toggleTaxForms()"> New
        </label>
        <label>
          <input type="radio" name="scheme" value="old" onclick="toggleTaxForms()"> Old
        </label>
      </div>

      <!-- New Tax Scheme Section -->
      <div id="tax-new">
        <table class="tax-table">
          <thead>
            <tr>
              <th>Particulars</th>
              <th>Details</th>
              <th>Amount (Rs)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Gross Income (CTC)</td>
              <td>Salary, Bonus, Allowances, Other income, etc</td>
              <td><input type="number" id="grossIncome" value="0"></td>
            </tr>
            <tr>
              <td class="highlight">Net Taxable Income</td>
              <td>Gross Income - Standard Deduction</td>
              <td><input type="number" id="netTaxableIncome" value="0" readonly></td>
            </tr>
          </tbody>
        </table>
        <button class="calculate-btn" onclick="calculateTax()">Calculate Tax</button>
        <div class="tax-result">
          <p id="taxMessage">Tax is <strong>NIL</strong></p>
          <p id="taxDetails">As the net taxable income is under Rs. 7,00,000/-, tax rebate u/s 87A is applicable.</p>
        </div>
      </div>

      <!-- Old Tax Scheme Section -->
      <div id="tax-old" style="display: none;">
        <table class="tax-table">
          <thead>
            <tr>
              <th>Particulars</th>
              <th>Details</th>
              <th>Amount (Rs)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Gross Income (CTC)</td>
              <td>Salary, Bonus, Allowances, Other income, etc.</td>
              <td><input type="number" id="grossIncomeOld" value="0"></td>
            </tr>
            <tr>
              <td>HRA Exemptions u/s 10A</td>
              <td>HRA Calculation [Calculate Now]</td>
              <td><input type="number" id="hraExemptionOld" value="0"></td>
            </tr>
            <tr>
              <td>Other Exemptions u/s 10A</td>
              <td>Medical, Conveyance, etc.</td>
              <td><input type="number" id="otherExemptionsOld" value="50000"></td>
            </tr>
            <tr>
              <td>Net Income under Salaries</td>
              <td>Gross Income - Exemptions</td>
              <td><input type="number" id="netIncomeOld" value="0" readonly></td>
            </tr>
            <tr>
              <td>Taxable Income</td>
              <td>Gross Income - Deductions</td>
              <td><input type="number" id="taxableIncomeOld" value="0" readonly></td>
            </tr>
          </tbody>
        </table>
        <button class="tax-planning-old-btn" onclick="calculateTax()">Calculate Tax</button>
        <div class="tax-planning-old-result">
          <p id="taxMessageOld">Tax is <strong>NIL</strong></p>
          <p id="taxDetailsOld">As the net taxable income is under Rs. 7,00,000/-, tax rebate u/s 87A is applicable.</p>
        </div>
      </div>

    </div>
  </div>

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

// Initialize the toggle function on page load (to handle the default checked value)
window.onload = function() {
  toggleTaxForms();
};
</script>
<!-- tax-calculator end -->


<div id="tax-slab-pdf" class="tax-slab-section" style="display: none;">
  <div class="pdf-container">
    <h2>Tax Slab</h2>
    <embed src="pdf/Aditya Birla Sun Life -BAL BHAVISHYA YOJNA FORM-ARN-249064 (2).pdf" type="application/pdf" width="100%" height="600px">
  </div>
</div>

<!-- Button to toggle visibility -->
<button onclick="toggleTaxSlabPdf()">Toggle Tax Slab PDF</button>

<script>
  function toggleTaxSlabPdf() {
  // Get the Tax Slab PDF section
  const taxSlabSection = document.getElementById("tax-slab-pdf");

  // Toggle the visibility of the Tax Slab PDF section
  if (taxSlabSection.style.display === "none") {
    taxSlabSection.style.display = "block";  // Show the section
  } else {
    taxSlabSection.style.display = "none";   // Hide the section
  }
}
</script>
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

  
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Dhanavruksha</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->
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
</body>

</html>