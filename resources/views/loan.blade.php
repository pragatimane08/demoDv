@extends('layouts.app')
@section('content')


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/loanheader.jpeg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown"> Business Loans</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#"> Business Loans</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->


<!-- Loan Cards Section -->
<div class="container">
    <div class="loan-card-grid">
        <div class="loan-card">
            <div class="loan-card-content">
                <div class="loan-card-image">
                    <div class="loan-glow"></div>
                    <i class="fas fa-building fa-3x"></i> <!-- Icon for Construction Finance -->
                </div>
                <h2><i class="fas fa-star"></i> Construction Finance</h2>
                <p class="loan-p">Real Value offers Construction Finance to Real Estate Developers for projects in select cities.</p>
                <!-- <button><i class="fas fa-arrow-right"></i>Quick Advice</button> -->
                <button onclick="window.location.href='{{ route('schedulemeeting') }}'"><i class="fas fa-arrow-right"></i> Quick Advice</button>
            </div>
        </div>
        <div class="loan-card">
            <div class="loan-card-content">
                <div class="loan-card-image">
                    <div class="loan-glow"></div>
                    <i class="fas fa-home fa-3x"></i> <!-- Icon for Loan Against Property -->
                </div>
                <h2><i class="fas fa-certificate"></i> Loan Against Property</h2>
                <p class="loan-p">Aspirations to continually grow/expand one's business are what define most businessmen.</p>
                <!-- <button><i class="fas fa-arrow-right"></i> Quick Advice</button> -->
                <button onclick="window.location.href='{{ route('schedulemeeting') }}'"><i class="fas fa-arrow-right"></i> Quick Advice</button>
            </div>
        </div>
        <div class="loan-card">
            <div class="loan-card-content">
                <div class="loan-card-image">
                    <div class="loan-glow"></div>
                    <i class="fas fa-briefcase fa-3x"></i> <!-- Icon for SME Loan -->
                </div>
                <h2><i class="fas fa-check-circle"></i> SME Loan</h2>
                <p class="loan-p">At Real Value, we understand how important investment is to ensure that businesses reach their full potential.</p>
                <button onclick="window.location.href='{{ route('schedulemeeting') }}'"><i class="fas fa-arrow-right"></i> Quick Advice</button>
                <!-- <button><i class="fas fa-arrow-right"></i>Quick Advice</button> -->
            </div>
        </div>
        <div class="loan-card">
            <div class="loan-card-content">
                <div class="loan-card-image">
                    <div class="loan-glow"></div>
                    <i class="fas fa-house-user fa-3x"></i> <!-- Icon for Home Loan -->
                </div>
                <h2><i class="fas fa-bolt"></i> Home Loan</h2>
                <p class="loan-p">They say your home is where your story begins. At Real Value, we pride ourselves in helping you begin this story.</p>
                <!-- <button><i class="fas fa-arrow-right"></i>quick advice</button> -->
                <button onclick="window.location.href='{{ route('schedulemeeting') }}'"><i class="fas fa-arrow-right"></i> Quick Advice</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll(".loan-card");
        cards.forEach(card => {
            card.addEventListener("mousemove", e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                card.style.setProperty("--mouse-x", `${x}px`);
                card.style.setProperty("--mouse-y", `${y}px`);
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
            });
            card.addEventListener("mouseleave", () => {
                card.style.transform = "";
            });
        });
    });
</script>

<!-- Styles -->
<style>
    :root {
        --loan-bg-dark: #0a0b0f;
        --loan-card-bg: rgba(18, 20, 28, 0.95);
        --loan-card-hover: #1a1d2a;
        --loan-text-primary: #ffffff;
        --loan-text-secondary: #ffffff;
        --loan-accent: #b8860b;
        --loan-gradient-1: #b8860b;
        --loan-gradient-2: #D4AF37;
        --loan-gradient-3: #f39c12;
        --loan-shadow-color: rgba(74, 144, 255, 0.1);
    }

    .loan-card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem;
        padding: 1rem;
    }

    .loan-card {
        position: relative;
        background: var(--loan-card-bg);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        transform-style: preserve-3d;
        border: 1px solid rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
    }

    .loan-card::before,
    .loan-card::after {
        content: '';
        position: absolute;
        inset: -2px;
        background: linear-gradient(45deg, 
            transparent 40%,
            rgba(74, 144, 255, 0.1),
            rgba(111, 66, 193, 0.1),
            transparent 60%
        );
        border-radius: inherit;
        z-index: -1;
        transition: all 0.5s ease;
        animation: loan-borderGlow 3s linear infinite;
    }

    .loan-card::after {
        filter: blur(20px);
    }

    @keyframes loan-borderGlow {
        0%, 100% {
            opacity: 0.5;
            transform: rotate(0deg);
        }
        50% {
            opacity: 1;
            transform: rotate(180deg);
        }
    }

    .loan-card:hover {
        transform: translateY(-10px) scale(1.02) rotateX(5deg) rotateY(5deg);
        background: var(--loan-card-hover);
        box-shadow: 
            0 20px 40px var(--loan-shadow-color),
            0 0 20px rgba(74, 144, 255, 0.1),
            0 0 0 1px rgba(74, 144, 255, 0.1);
    }

    .loan-card-content {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        height: 100%;
        position: relative;
        z-index: 1;
        color: #ffffff;
    }

    .loan-card-image {
        height: 120px; /* Adjusted height for better responsiveness */
        background: linear-gradient(45deg, 
            var(--loan-gradient-1), 
            var(--loan-gradient-2),
            var(--loan-gradient-3)
        );
        background-size: 200% 200%;
        border-radius: 12px;
        position: relative;
        overflow: hidden;
        animation: loan-gradientShift 8s ease infinite;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loan-card-image i {
        color: rgba(255, 255, 255, 0.9);
        text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        transform: translateY(0);
        transition: all 0.5s ease;
        z-index: 2;
    }

    .loan-card:hover .loan-card-image i {
        transform: translateY(-5px) scale(1.1);
        text-shadow: 0 5px 20px rgba(255, 255, 255, 0.8);
    }

    @keyframes loan-gradientShift {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .loan-glow {
        position: absolute;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at center, 
            rgba(255, 255, 255, 0.2) 0%,
            transparent 70%);
        opacity: 0;
        transition: all 0.5s ease;
        mix-blend-mode: overlay;
    }

    .loan-card:hover .loan-glow {
        opacity: 1;
        animation: loan-glowPulse 2s ease infinite;
    }

    @keyframes loan-glowPulse {
        0%, 100% {
            transform: scale(1);
            opacity: 0.5;
        }
        50% {
            transform: scale(1.1);
            opacity: 1;
        }
    }

    .loan-card h2 {
        color: var(--loan-text-primary);
        font-size: 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .loan-card h2 i {
        color: var(--loan-accent);
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }

    .loan-card:hover h2 {
        transform: translateZ(20px);
        text-shadow: 2px 2px 4px rgba(248, 246, 246, 0.3);
    }

    .loan-card:hover h2 i {
        transform: rotate(15deg) scale(1.2);
        color: var(--loan-gradient-1);
    }

    .loan-p {
        color: var(--loan-text-secondary);
        line-height: 1.4;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .loan-card:hover p {
        transform: translateZ(15px);
        color: hsla(0, 0.00%, 100.00%, 0.80);
    }

    .loan-card button {
        background: linear-gradient(45deg, 
            var(--loan-gradient-1), 
            var(--loan-gradient-2),
            var(--loan-gradient-3)
        );
        background-size: 200% 200%;
        border: none;
        padding: 0.8rem 1.5rem;
        color: var(--loan-text-primary);
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        width: fit-content;
        position: relative;
        overflow: hidden;
        animation: loan-gradientShift 8s ease infinite;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .loan-card button i {
        transition: transform 0.3s ease;
    }

    .loan-card button:hover i {
        transform: translateX(3px);
    }

    .loan-card button::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg,
            transparent,
            rgba(255, 255, 255, 0.2),
            transparent
        );
        transform: translateX(-100%);
        transition: transform 0.5s ease;
    }

    .loan-card:hover button::before {
        transform: translateX(100%);
    }

    .loan-card button:hover {
        transform: translateY(-2px) translateZ(25px);
        box-shadow: 
            0 5px 15px rgba(74, 144, 255, 0.3),
            0 0 20px rgba(74, 144, 255, 0.2);
        letter-spacing: 0.5px;
    }

    .loan-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(
            800px circle at var(--mouse-x) var(--mouse-y),
            rgba(255, 255, 255, 0.06),
            transparent 40%
        );
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .loan-card:hover::before {
        opacity: 1;
    }

    @media (max-width: 768px) {
        .loan-card-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .loan-card-content {
            padding: 1.5rem;
        }

        .loan-card-image {
            height: 100px; /* Adjusted height for smaller screens */
        }
    }

    @keyframes loan-float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .loan-card:hover .loan-card-content {
        animation: loan-float 3s ease infinite;
    }
</style>
<!-- resources/views/schedulemeeting.blade.php -->
@endsection