@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/npshd1new.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 67vh; min-height:350px;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">NPS</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">NPS</a></li>
              </ol>
           </nav>
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
        <li>The only exempted investment in the New Regime of Income Tax</li>
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
            item.classList.remove("show"); // Reset animation
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

        <p class="nps-fund-text"><strong>Key Allocation Rules:</strong></p>
        <ul>
            <li class="nps-fund-text">Alternative Investment Funds (<span class="nps-fund-highlight">Class A</span>) cannot exceed <span class="nps-fund-highlight">5%</span>.</li>
            <li class="nps-fund-text">Total allocation across all classes must be <span class="nps-fund-highlight">100%</span>.</li>
            <li class="nps-fund-text">For <span class="nps-fund-highlight">Tier-II</span>, you can allocate <span class="nps-fund-highlight">100% to Equity</span>.</li>
            <li class="nps-fund-text">For <span class="nps-fund-highlight">Tier-I</span>, you can allocate up to <span class="nps-fund-highlight">75% to Equity</span>.</li>
        </ul>

        <p class="nps-fund-text">Contact us to open your <span class="nps-fund-highlight">NPS account</span> or actively manage your NPS funds.</p>

        <a href="mailto:your-email@example.com" class="nps-fund-button">Contact Us</a>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".nps-fund-text");
    
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
        }, index * 300); // 300ms delay for each element
    });
});
</script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection