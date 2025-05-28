@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.webp -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ Vite::asset('resources/theme/img/npshd1new.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 67vh; min-height:350px;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">NPS</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">NPS</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
<!-- Page Header End -->

<!--NPS-Info-start--->
<div class="nps-info-container">
    <h1>National Pension System</h1>
    <p>NPS was introduced by the <span class="highlight">Central Government</span> to help individuals have income in the form of a <span class="highlight">pension</span> to take care of their retirement needs.</p>
    <p>NPS is a <span class="highlight">market-linked</span> voluntary contribution scheme that helps you save for your <span class="highlight">retirement</span>. The scheme is <span class="highlight">simple</span>, <span class="highlight">systematic</span>, <span class="highlight">portable</span>, and <span class="highlight">flexible</span>, making it one of the most efficient ways to boost your retirement income.</p>
    <ul id="nps-list">
        <li>Employer Contribution to EPF and NPS are the only exempted investments in the New Tax Regime</li>
        <li>Triple exemption under Old Tax Regime</li>
        <li>60% of maturity is tax-free</li>
        <li>The best retirement product with high returns & least charges</li>
    </ul>
</div>

<script>
    function showListItems() {
        const listItems = document.querySelectorAll("#nps-list li");
        let index = 0;
        
        listItems.forEach(item => {
            item.classList.remove("show"); 
        });
        
        function showNextItem() {
            if (index < listItems.length) {
                listItems[index].classList.add("show");
                index++;
                setTimeout(showNextItem, 800);
            }
        }
        showNextItem();
    }

    document.addEventListener("DOMContentLoaded", showListItems);
</script>
<!--NPS-Info-end--->


    <!--NPS-acc-start--->
    <div class="nps-type-acc-container">
        <div class="nps-type-acc-header">Types of Accounts</div>
        <div class="nps-type-acc-wrapper">
            <div class="nps-type-acc-tier1"> 
                <h3>Tier-I Account</h3>
                <p>This is the permanent retirement account into which the regular contributions made by the subscriber and/or their employer are credited and invested as per the scheme/fund manager chosen by you.</p>
            </div>
            <div class="nps-type-acc-tier2">
                <h3>Tier-II Account</h3>
                <p>This is a voluntary/optional withdrawable account which is allowed only if you have an active Tier-I account. The withdrawals are permitted from this account as and when you require.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".nps-type-acc-tier1, .nps-type-acc-tier2");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    } else {
                        entry.target.classList.remove("visible");
                    }
                });
            }, { threshold: 0.5 });

            cards.forEach(card => {
                observer.observe(card);
            });
        });
    </script>
    <!--NPS-acc-end--->

    <!--NPS-benefit-start--->
    <div class="nps-fund-container">
    <div class="nps-fund-header nps-fund-text">Manage Your NPS Funds</div>
    <div class="nps-fund-content">
        <p class="nps-fund-text">You need to choose the asset classes along with a Pension Fund Manager (PFM) and specify the percentage allocation.</p>
        <p class="nps-fund-text">There are four asset classes:</p>
        <ul>
            <li class="nps-fund-text"><span class="nps-fund-highlight">Asset Class E</span> – Equity and related instruments</li>
            <li class="nps-fund-text"><span class="nps-fund-highlight">Asset Class C</span> – Corporate debt and related instruments</li>
            <li class="nps-fund-text"><span class="nps-fund-highlight">Asset Class G</span> – Government Bonds and related instruments</li>
            <li class="nps-fund-text"><span class="nps-fund-highlight">Asset Class A</span> – Alternative Investment Funds (CMBS, MBS, REITS, etc.)</li>
            
        </ul>
        
        <!-- Add the pension fund managers list here -->
        <div class="nps-fund-text" style="margin: 20px 0;">
            <p><strong>List of Pension Fund Managers:</strong></p>
            <p>SBI, LIC, UTI, ICICI Prudential, HDFC, Kotak, Aditya Birla, TATA, Max Life, Axis and DSP</p>
            <p>Investors can choose between these pension fund managers and switch between them when needed.</p>
        </div>

       
        <p class="nps-fund-text"><strong>Key Allocation Rules:</strong></p>
        <ul>
            <li class="nps-fund-text">Alternative Investment Funds (<span class="nps-fund-highlight">Class A</span>) cannot exceed <span class="nps-fund-highlight">5%</span>.</li>
            <li class="nps-fund-text">Total allocation across all classes must be <span class="nps-fund-highlight">100%</span>.</li>
            <li class="nps-fund-text">For <span class="nps-fund-highlight">Tier-II</span>, you can allocate <span class="nps-fund-highlight">100% to Equity</span>.</li>
            <li class="nps-fund-text">For <span class="nps-fund-highlight">Tier-I</span>, you can allocate up to <span class="nps-fund-highlight">75% to Equity</span>.</li>
        </ul>

        <p class="nps-fund-text">Contact us to open your <span class="nps-fund-highlight">NPS account</span> or actively manage your NPS funds.</p>

        <a href="https://digital-onboard.finnate.app/iciciprupension/2" class="nps-fund-button">OPEN NPS ACCOUNT</a>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".nps-fund-text");
    
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
        }, index * 300); 
    });
});
</script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <style>
        /***NPS***/
/**NPS-Info**/
/* Base Styles */
.nps-info-container {
  max-width: 1200px;
  margin: 60px auto;
  padding: 25px;
  background: linear-gradient(135deg, #f7e7ce, #d0a94e);
  color: black;
  border-radius: 12px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  text-align: center;
  font-family: Arial, sans-serif;
}

.nps-info-container h1 {
  font-size: 2rem;
  margin-bottom: 15px;
  font-weight: bold;
}

.nps-info-container p {
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 15px;
}

.highlight {
  color:#d0a94e;
  font-weight: bold;
}

.nps-info-container ul {
  list-style-type: none;
  padding: 0;
}

.nps-info-container ul li {
  background-color: white;
  color: black;
  padding: 14px;
  margin: 12px 0;
  border-radius: 10px;
  font-size: 1rem;
  font-weight: bold;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
}

.nps-info-container ul li.show {
  opacity: 1;
  transform: translateY(0);
}

/* Responsive Design */
@media (max-width: 1200px) {
  .nps-info-container { max-width: 95%; margin: 50px auto; }
}

@media (max-width: 1023px) {
  .nps-info-container { max-width: 90%; margin: 50px auto; }
}

@media (max-width: 768px) {
  .nps-info-container { max-width: 85%; margin: 40px auto; }
}

@media (max-width: 480px) {
  .nps-info-container { max-width: calc(100% - 40px); margin: 40px 20px; }
}

/**NPS-types-acc**/
.nps-type-acc-container {
  max-width: 1400px;
  margin: auto;
  margin-right: 60px;
  margin-left: 60px;
  margin-bottom: 30px;
  padding: 20px;
  text-align: center;
  background-color: #e2e2e2;
  border-radius: 10px;
}

.nps-type-acc-header {
  font-size: 2rem;
  font-weight: bold;
  color: #D4AF37;
  margin-bottom: 20px;
}

.nps-type-acc-wrapper {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
}

.nps-type-acc-tier1,
.nps-type-acc-tier2 {
  width: 400px;
  max-width: 100%;
  height: 350px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  border: 2px solid #D4AF37;
  border-radius: 10px;
  background: #f9f9f9;
  padding: 15px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  transform: translateX(-100px);
  transition: all 0.8s ease-in-out;
}

.nps-type-acc-tier2 {
  transform: translateX(100px);
}

.visible {
  opacity: 1;
  transform: translateX(0);
}

/* Responsive Design */
@media (max-width: 1024px) {
  .nps-type-acc-container {
    margin-right: 30px;
    margin-left: 30px;
  }
}

@media (max-width: 768px) {
  .nps-type-acc-container {
    margin-right: 20px;
    margin-left: 20px;
  }

  .nps-type-acc-wrapper {
    flex-direction: column;
    align-items: center;
  }

  .nps-type-acc-tier1,
  .nps-type-acc-tier2 {
    width: 90%;
    height: auto;
  }
}
/**NPS-Fund**/
.nps-fund-container {
  width: calc(100% - 120px); 
  max-width: 1400px;
  margin: 20px 60px;
  padding: 20px;
  background: white;
  border: 2px solid #D4AF37;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  margin-top: 30px;
}

/* Heading */
.nps-fund-header {
  background: #D4AF37;
  padding: 15px;
  text-align: center;
  color: white;
  font-size: 2rem; 
  font-weight: bold;
  border-radius: 10px 10px 0 0;
}

/* Subheading */
.nps-fund-subheader {
  font-size: 1.5rem; 
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

/* Content */
.nps-fund-content {
  padding: 15px;
  color: #333;
  font-size: 1rem; 
  line-height: 1.6;
}

/* Highlighted Text */
.nps-fund-highlight {
  color: #D4AF37;
  font-weight: bold;
}

/* List */
.nps-fund-list {
  padding-left: 20px;
}

.nps-fund-list-item {
  margin-bottom: 10px;
  font-size: 1rem; 
}

/* Contact Button */
.nps-fund-button {
  display: block;
  width: 100%;
  text-align: center;
  padding: 12px;
  background: #D4AF37;
  color: white;
  text-decoration: none;
  font-weight: bold;
  border-radius: 5px;
  margin-top: 20px;
  font-size: 1rem; 
  transition: background 0.3s ease-in-out;
}

.nps-fund-button:hover {
  background: #b8962e;
  color: white;
}

/* Text Fade-in Animation */
.nps-fund-text {
  opacity: 0;
  transform: translateY(10px);
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

/* Responsive Design */
@media (max-width: 768px) {
  .nps-fund-container {
    width: calc(100% - 40px); 
    margin: 30px 20px !important; 
    padding: 15px;
  }

  .nps-fund-header {
    font-size: 1.5rem;
    padding: 12px;
  }

  .nps-fund-subheader {
    font-size: 1.25rem;
  }

  .nps-fund-content,
  .nps-fund-list-item,
  .nps-fund-button {
    font-size: 0.95rem;
  }
}
/* nps ends */
        </style>
@endsection