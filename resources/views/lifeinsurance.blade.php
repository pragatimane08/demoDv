@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/lifeheader.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Life Insurance</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Life Insurance</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    
    <!-- Page Header End -->
    <div class="insurance-card">
    <h2>What Is Life Insurance?</h2>
    <p>
      Life insurance is a contract that pledges payment of an amount to the person assured (or their nominee) on the happening of the event insured against. The contract is valid for payment of the insured amount during:
    </p>
    <div class="icon-container">
      <div class="icon" title="Maturity Date">
        <i class="fas fa-calendar-check"></i>
      </div>
      <div class="icon" title="Periodic Intervals">
        <i class="fas fa-coins"></i>
      </div>
      <div class="icon" title="Unfortunate Death">
        <i class="fas fa-heartbeat"></i>
      </div>
    </div>
    <div class="info-boxes">
      <div class="info-box">
        <h3>Maturity Date</h3>
        <p>The insured amount is paid on the date of maturity, ensuring financial security for the future.</p>
      </div>
      <div class="info-box">
        <h3>Periodic Intervals</h3>
        <p>Payments can be made at specified intervals, providing regular financial support.</p>
      </div>
      <div class="info-box">
        <h3>Unfortunate Death</h3>
        <p>In case of the policyholder's untimely death, the nominee receives the insured amount.</p>
      </div>
    </div>
   
    <button class="cta-button" onclick="window.location.href='{{ route('schedulemeeting') }}'">
    Get quick advice
</button>

  </div>
  <div class="insurance-wrapper">
    <h2>Protecting What Matters Most</h2>
    <div class="image-content">
      <img src="img/lifeinsurance.jpg" alt="Happy family secured with life insurance protection and
financial security.">
    </div>
    <div class="info-content">
      <h3>Why It Matters</h3>
      <p>
        Among other things, the contract also provides for the payment of premium periodically to the Corporation by the policyholder. Life insurance is universally acknowledged to be an institution that eliminates <span class="highlight">'risk'</span>, substituting certainty for uncertainty and comes to the timely aid of the family in the unfortunate event of death of the breadwinner.
      </p>
      <p>
        By and large, life insurance is civilisation's partial solution to the problems caused by death. Life insurance, in short, is concerned with two hazards that stand across the life-path of every person:
      </p>
      <ul>
        <li><i class="fas fa-user-times"></i>That of dying prematurely leaving a dependent family to fend for itself.</li>
        <li><i class="fas fa-user-clock"></i>That of living till old age without visible means of support.</li>
      </ul>
    </div>
  </div>
  <style>
 /* Base Styles */
.insurance-wrapper {
  background: linear-gradient(135deg, #fff7e6, #fff);
  border-radius: 15px;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
  padding: 40px;
  max-width: 1350px;
  text-align: center;
  border: 2px solid #ffd700;
  position: relative;
  overflow: hidden;
  margin-top: 2%;
  margin-left: 7%;
  height: auto; /* Changed from fixed height to auto for responsiveness */
}

.insurance-wrapper::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255, 215, 0, 0.1), transparent);
  transform: rotate(45deg);
  z-index: 1;
  animation: rotateBackground 10s linear infinite;
}

@keyframes rotateBackground {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.insurance-wrapper h2 {
  color: #d4af37;
  font-size: 32px;
  margin-bottom: 50px;
  position: relative;
  z-index: 2;
}

.insurance-wrapper p {
  font-size: 18px;
  line-height: 1.8;
  color: #555;
  margin-bottom: 25px;
  position: relative;
  z-index: 2;
}

.highlight {
  color: #d4af37;
  font-weight: bold;
}

.info-content {
  text-align: left;
  margin-bottom: 30px;
  position: relative;
  z-index: 2;
}

.info-content h3 {
  color: #d4af37;
  font-size: 24px;
  margin-bottom: 15px;
}

.info-content p {
  font-size: 16px;
  color: #555;
}

.action-button {
  background-color: #d4af37;
  color: white;
  border: none;
  padding: 15px 30px;
  border-radius: 30px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.3s ease;
  position: relative;
  z-index: 2;
}

.action-button:hover {
  background-color: #b8860b;
  transform: scale(1.05);
}

.image-content {
  margin-bottom: 30px;
  position: relative;
  z-index: 2;
}

.image-content img {
  width: 100%;
  max-width: 100%;
  height:397px; /* Changed from fixed height to auto for responsiveness */
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* Style for list items with icons */
.info-content ul {
  list-style: none;
  padding-left: 0;
}

.info-content ul li {
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 10px;
  color: #555;
}

.info-content ul li i {
  color: #d4af37;
  font-size: 18px;
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
  .insurance-wrapper {
    margin-left: 5%;
    margin-right: 5%;
    padding: 30px;
  }

  .insurance-wrapper h2 {
    font-size: 28px;
    margin-bottom: 40px;
  }

  .insurance-wrapper p {
    font-size: 16px;
  }

  .info-content h3 {
    font-size: 22px;
  }

  .info-content p {
    font-size: 14px;
  }

  .action-button {
    padding: 12px 25px;
    font-size: 14px;
  }
}

@media (max-width: 768px) {
  .insurance-wrapper {
    margin-left: 3%;
    margin-right: 3%;
    padding: 20px;
  }

  .insurance-wrapper h2 {
    font-size: 24px;
    margin-bottom: 50px;
  }

  .insurance-wrapper p {
    font-size: 14px;
  }

  .info-content h3 {
    font-size: 20px;
  }

  .info-content p {
    font-size: 12px;
  }

  .action-button {
    padding: 10px 20px;
    font-size: 12px;
  }

  .image-content img {
    height: auto; /* Ensure the image scales properly */
  }
}

@media (max-width: 480px) {
  .insurance-wrapper {
    margin-left: 2%;
    margin-right: 2%;
    padding: 15px;
  }

  .insurance-wrapper h2 {
    font-size: 20px;
    margin-bottom: 40px;
  }

  .insurance-wrapper p {
    font-size: 12px;
  }

  .info-content h3 {
    font-size: 18px;
  }

  .info-content p {
    font-size: 10px;
  }

  .action-button {
    padding: 8px 16px;
    font-size: 10px;
  }

  .info-content ul li {
    font-size: 12px;
  }

  .info-content ul li i {
    font-size: 14px;
  }
}
  </style>

    <script src="js/main.js"></script>
@endsection