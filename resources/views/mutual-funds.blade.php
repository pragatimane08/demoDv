@extends('layouts.app')
@section('content')
  
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
        style="background: url('{{ asset('img/mututal fund-header-img1 (2).jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Mutual Fund</h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Mutual Fund</a></li>
                </ol>
            </nav> -->
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Mutual Fund Section Start -->
<div class="mutual-fund-section">
    <div class="mutual-fund-container">
        <!-- Left Column: Image -->
        <div class="mutual-fund-left">
            <img src="img/mutual_fund.webp" alt="Graph showing mutual fund growth over time with SIP investment" class="mutual-fund-img">
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

    <script>
  document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.3, // Trigger when 30% of the element is visible
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    document.querySelectorAll(".mutual-fund-left, .mutual-fund-right").forEach(el => {
        observer.observe(el);
    });
});

</script>
    <!-- Mutual Fund Section End -->

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
    <!-- How It Works Section End -->

    <!-- Advantages of Mutual Fund -->
    <div class="mutual-fund-container-adv">
        <div class="mutual-fund-section-adv">
            <div class="left-image-container-adv">
                <img src="./img/mutual_fund_adv.webp" alt="Illustration showing advantages of mutual funds including diversification and professional management">
            </div>
            <div class="content-adv">
                <h2>Advantages of Mutual Fund</h2>
                <ul class="advantages-list-adv">
                    <li class="advantage-item-adv">
                        <img src="./img/mututal-1-resized.png" alt="Professional money manager analyzing financial charts" class="icon-adv">
                        <div class="text-adv">
                            <h3>Professional Management</h3>
                            <p>Mutual funds provide professional money management, making them ideal for investors who lack 
                                the time or expertise to manage their portfolios.</p>
                        </div>
                    </li>
                    <li class="advantage-item-adv">
                        <img src="./img/mututal-2-resized.png" alt="Stacks of coins representing economies of scale in mutual funds" class="icon-adv">
                        <div class="text-adv">
                            <h3>Economies of Scale</h3>
                            <p>Mutual funds buy and sell large quantities of securities, resulting in lower transaction costs for investors.</p>
                        </div>
                    </li>
                    <li class="advantage-item-adv">
                        <img src="./img/mututal-3-resized.png" alt="Simple dashboard representation showing ease of mutual fund investing" class="icon-adv">
                        <div class="text-adv">
                            <h3>Simplicity</h3>
                            <p>Investing in mutual funds is simple, with minimum investments starting as low as Rs. 500 per month.</p>
                        </div>
                    </li>
                    <li class="advantage-item-adv">
                        <img src="./img/mututal-4-resized (2).png" alt="A person using a smartphone to invest online" class="icon-adv">
                        <div class="text-adv">
                            <h3>Ease Of Investing Online</h3>
                            <p>Online investing is quick, convenient, and accessible, with real-time data, low fees, and automated tools for easy decision-making.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
   document.addEventListener("DOMContentLoaded", function () {
    const advantages = document.querySelectorAll(".advantage-item-adv");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${index * 0.3}s`;
                    entry.target.classList.add("show-adv");
                } else {
                    entry.target.classList.remove("show-adv"); // Remove to restart animation
                }
            });
        },
        { threshold: 0.3 } // Trigger when 30% of the section is visible
    );

    advantages.forEach((advantage) => {
        observer.observe(advantage);
    });
});
</script>
    <!-- Advantages of Mutual Fund End -->

    <!-- History of Mutual Fund -->
    <div class="centered-container">
        <div class="mutual-fund-history">
            <h1>History of Mutual Fund</h1>
            <p>The origin of the mutual fund industry in India was with the introduction of the concept of mutual funds
                by UTI in the year 1963. It accelerated from the year 1987 when non-UTI players entered the industry. In
                the past decade, the Indian mutual fund industry has seen dramatic improvements, both quality-wise and
                quantity-wise.</p>
        </div>
    </div>
    <script>
   document.addEventListener("DOMContentLoaded", function () {
    const historySection = document.querySelector(".mutual-fund-history");

    function animateOnScroll() {
        const rect = historySection.getBoundingClientRect();
        if (rect.top < window.innerHeight * 0.8 && rect.bottom > 0) {
            historySection.style.transition = "opacity 1s ease-out, transform 1s ease-out";
            historySection.style.opacity = "1";
            historySection.style.transform = "translateX(0)";
        } else {
            historySection.style.transition = "none";
            historySection.style.opacity = "0";
            historySection.style.transform = "translateX(100%)";
        }
    }

    window.addEventListener("scroll", animateOnScroll);
    animateOnScroll();
});

</script>
    <!-- History of Mutual Fund End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
