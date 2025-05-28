@extends('layouts.app')
@section('content')
  
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-4 wow fadeIn" data-wow-delay="0.1s" 
        style="background: url('{{ Vite::asset('resources/theme/img/mututal fund-header-img1 (2).webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Mutual Fund</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Mutual Fund Section Start -->
    <div class="mutual-fund-section">
        <div class="mutual-fund-container">
            <!-- Left Column: Image -->
            <div class="mutual-fund-left">
                <img src="{{Vite::asset('resources/theme/img/mutual_fund.webp')}}" alt="Graph showing mutual fund growth over time with SIP investment" class="mutual-fund-img">
            </div>
            <!-- Right Column: Content -->
            <div class="mutual-fund-right">
                <h1>What is a Mutual Fund?</h1>
                <p>
                    A mutual fund is a financial vehicle that pools money from multiple investors to purchase securities 
                    like stocks, bonds, and other assets. Managed by professional portfolio managers, mutual funds 
                    provide individual investors access to diversified portfolios and professional management, 
                    helping to reduce risks associated with individual security investments.
                </p>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works mutual-fund-hiw">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <div class="horizontal-timeline">
                <div class="timeline-line"></div>
                <div class="steps">
                    <div class="step" data-step="01">
                        <div class="step-icon">
                            <div class="icon-circle"></div>
                            <div class="step-number">01</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">Fund Management</h3>
                            <p class="step-text">The pooled funds are managed by a professional investment company, which makes decisions on behalf of the investors to generate returns through interest, dividends, or capital gains.</p>
                        </div>
                    </div>
                    <div class="step" data-step="02">
                        <div class="step-icon">
                            <div class="icon-circle"></div>
                            <div class="step-number">02</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">Investment Strategy</h3>
                            <p class="step-text">A well-planned strategy helps diversify risk and optimize potential returns based on market trends and investor goals.</p>
                        </div>
                    </div>
                    <div class="step" data-step="03">
                        <div class="step-icon">
                            <div class="icon-circle"></div>
                            <div class="step-number">03</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">Returns Generation</h3>
                            <p class="step-text">Investors earn returns through capital appreciation, dividends, and interest based on their chosen mutual fund scheme.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages of Mutual Fund -->
    <div class="mutual-fund-container-adv">
        <div class="mutual-fund-section-adv">
            <div class="left-image-container-adv">
                <img src="{{Vite::asset('resources/theme/img/mutual_fund_adv.webp')}}" alt="Illustration showing advantages of mutual funds including diversification and professional management">
            </div>
            <div class="content-adv">
                <h2>Advantages of Mutual Fund</h2>
                <ul class="advantages-list-adv">
                    <li class="advantage-item-adv">
                        <img src="{{Vite::asset('resources/theme/img/mututal-1-resized.webp')}}" alt="Professional money manager analyzing financial charts" class="icon-adv">
                        <div class="text-adv">
                            <h3>Professional Management</h3>
                            <p>Mutual funds provide professional money management, making them ideal for investors who lack 
                                the time or expertise to manage their portfolios.</p>
                        </div>
                    </li>
                    <li class="advantage-item-adv">
                        <img src="{{Vite::asset('resources/theme//img/mututal-2-resized.webp')}}" alt="Stacks of coins representing economies of scale in mutual funds" class="icon-adv">
                        <div class="text-adv">
                            <h3>Economies of Scale</h3>
                            <p>Mutual funds buy and sell large quantities of securities, resulting in lower transaction costs for investors.</p>
                        </div>
                    </li>
                    <li class="advantage-item-adv">
                        <img src="{{Vite::asset('resources/theme/img/mututal-3-resized.webp')}}" alt="Simple dashboard representation showing ease of mutual fund investing" class="icon-adv">
                        <div class="text-adv">
                            <h3>Simplicity</h3>
                            <p>Investing in mutual funds is simple, with minimum investments starting as low as Rs. 500 per month.</p>
                        </div>
                    </li>
                    <li class="advantage-item-adv">
                        <img src="{{Vite::asset('resources/theme/img/mututal-4-resized (2).webp')}}" alt="A person using a smartphone to invest online" class="icon-adv">
                        <div class="text-adv">
                            <h3>Ease Of Investing Online</h3>
                            <p>Online investing is quick, convenient, and accessible, with real-time data, low fees, and automated tools for easy decision-making.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- History of Mutual Fund -->

<div class="centered-container">
    <div class="mutual-fund-history">
        <h1>History of Mutual Funds in India</h1>
        <p>The mutual fund industry in India has evolved through five key phases, marked by regulatory reforms, technological advancements, and growing investor participation.</p>
        
        <div class="history-phase">
            <h2>1st Phase (1964 – 1987): The Foundation</h2>
            <p>The origin of mutual funds in India began with the establishment of the <strong>Unit Trust of India (UTI)</strong> in <strong>1963</strong>. UTI launched its first scheme in <strong>1964</strong>, attracting small investors with its focus on <strong>safety and assured returns</strong>. This phase laid the foundation for mutual funds in India, with UTI being the sole player.</p>
        </div>
        
        <div class="history-phase">
            <h2>2nd Phase (1987 – 1993): Entry of Public Sector Players</h2>
            <p>In <strong>1987</strong>, <strong>SBI Mutual Fund</strong> became the first non-UTI mutual fund, marking the entry of public sector banks and financial institutions into the industry. This phase introduced new schemes, expanding investment options for retail investors.</p>
        </div>
        
        <div class="history-phase">
            <h2>3rd Phase (1993 – 2003): Private Sector Participation</h2>
            <p>A major <strong>turning point</strong> came in <strong>1993</strong> when SEBI opened the industry to <strong>private players</strong>, leading to increased competition and innovation. The introduction of <strong>Systematic Investment Plans (SIPs)</strong> in 1993 revolutionized retail investing, though SIPs gained significant traction only post-2000.</p>
        </div>
        
        <div class="history-phase">
            <h2>4th Phase (2003 – 2014): Regulatory Reforms & Transparency</h2>
            <p>SEBI introduced reforms to enhance <strong>transparency</strong> and <strong>investor protection</strong>. Key developments included the <strong>New Fund Offer (NFO)</strong> process and consolidation of schemes, streamlining the industry and improving investor experience.</p>
        </div>
        
        <div class="history-phase">
            <h2>5th Phase (2014 – Present): Digital Growth & Expansion</h2>
            <p>The current phase is characterized by rapid growth, driven by <strong>Direct Plans</strong> (low-cost investing) and the adoption of <strong>digital platforms</strong>. The industry has seen exponential growth in assets under management (AUM) and investor participation.</p>
        </div>
        
        <div class="history-snapshot">
            <h3>Indian Mutual Fund Industry Snapshot – April 2025</h3>
            <ul>
                <li><strong>Average AUM:</strong> ₹69.50 lakh crore (6.5x growth since 2015)</li>
                <li><strong>Major AUM Milestones:</strong> Crossed ₹10 lakh crore (2014), ₹30 lakh crore (2020), and ₹69.50 lakh crore (2025)</li>
                <li><strong>Investor Base:</strong> 23.63 crore folios (18.71 crore in equity/hybrid schemes)</li>
                <li><strong>SIP Growth:</strong> Monthly inflows surged from ₹4,335 Cr (2016) to ₹26,632 Cr (2025), with 8.38 crore active SIP accounts</li>
            </ul>
        </div>
    </div>

</div>
<style>
    /* ===== History Section ===== */
.history-main-title {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
}

.history-main-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, #d4af37, #f5f5f5, #d4af37);
}

.history-intro {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 40px;
    text-align: center;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.history-phase {
    margin: 30px 0;
    padding: 25px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    border-left: 4px solid #d4af37;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.history-phase:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.phase-header {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.phase-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    background-color: #d4af37;
    color: white;
    border-radius: 50%;
    font-weight: bold;
    margin-right: 15px;
    flex-shrink: 0;
}

.history-phase h2 {
    color: #333;
    font-size: 1.3rem;
    margin: 0;
}

.history-phase p {
    color: #666;
    line-height: 1.7;
    margin-top: 15px;
}

.history-snapshot {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 5px;
    margin-top: 50px;
    border-top: 3px solid #d4af37;
    position: relative;
}

.snapshot-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.snapshot-header i {
    color: #d4af37;
    font-size: 1.5rem;
    margin-right: 15px;
}

.history-snapshot h3 {
    color: #333;
    font-size: 1.3rem;
    margin: 0;
}

.history-snapshot ul {
    list-style-type: none;
    padding-left: 0;
    margin-top: 20px;
}

.history-snapshot li {
    padding: 10px 0;
    font-size: 1rem;
    line-height: 1.7;
    position: relative;
    padding-left: 30px;
    color: #555;
    border-bottom: 1px dashed #eee;
}

.history-snapshot li:last-child {
    border-bottom: none;
}

.history-snapshot li:before {
    content: '';
    position: absolute;
    left: 0;
    top: 15px;
    width: 15px;
    height: 15px;
    background-color: #d4af37;
    border-radius: 3px;
    transform: rotate(45deg);
}

/* Animation */
@keyframes phaseEntry {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.history-phase {
    opacity: 0;
    animation: phaseEntry 0.6s ease forwards;
}

.history-phase:nth-child(2) { animation-delay: 0.2s; }
.history-phase:nth-child(3) { animation-delay: 0.4s; }
.history-phase:nth-child(4) { animation-delay: 0.6s; }
.history-phase:nth-child(5) { animation-delay: 0.8s; }
.history-snapshot { animation: phaseEntry 0.6s ease 1s forwards; }

/* Responsive Design */
@media (max-width: 768px) {
    .history-main-title {
        font-size: 1.6rem;
    }
    
    .history-phase {
        padding: 20px 15px;
    }
    
    .history-phase h2 {
        font-size: 1.2rem;
    }
    
    .history-snapshot {
        padding: 20px;
    }
}
</style>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript -->
    <script>
        // Intersection Observer for mutual fund section
        document.addEventListener("DOMContentLoaded", function () {
            const mutualFundObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, { threshold: 0.3 });

            document.querySelectorAll(".mutual-fund-left, .mutual-fund-right").forEach(el => {
                mutualFundObserver.observe(el);
            });

            // Advantages section animation
            const advantagesObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationDelay = `${index * 0.3}s`;
                        entry.target.classList.add("show-adv");
                    }
                });
            }, { threshold: 0.3 });

            document.querySelectorAll(".advantage-item-adv").forEach(advantage => {
                advantagesObserver.observe(advantage);
            });

            // History section animation
            const historySection = document.querySelector(".mutual-fund-history");
            function animateHistory() {
                const rect = historySection.getBoundingClientRect();
                if (rect.top < window.innerHeight * 0.8) {
                    historySection.style.opacity = "1";
                    historySection.style.transform = "translateX(0)";
                }
            }
            window.addEventListener("scroll", animateHistory);
            animateHistory();
        });
    </script>
@endsection