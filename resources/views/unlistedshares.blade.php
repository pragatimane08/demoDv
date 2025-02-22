@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/unlistedsharedimg.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Unlisted Share</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Unlisted Shares</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    
    <!-- Page Header End -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Information</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>Secure Your Future with Insurance</h1>
        <p>Providing Financial Protection and Peace of Mind</p>
    </header>
    <section class="insurance-container">
        <div class="insurance-card term-insurance">
            <div class="image-container">
                <img src="term-insurance-banner.jpg" alt="Term Insurance">
            </div>
            <div class="insurance-content">
                <div class="icon"><i class="fas fa-user-shield"></i></div>
                <h2>Term Insurance</h2>
                <p>Term insurance ensures your family's financial security in case of an unfortunate event. It is an affordable and straightforward life insurance policy that provides a lump sum to beneficiaries.</p>
                <h3>Key Benefits:</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Affordable premiums with high coverage</li>
                    <li><i class="fas fa-check-circle"></i> Customizable policy terms (10-40 years)</li>
                    <li><i class="fas fa-check-circle"></i> Additional riders for critical illness & disability</li>
                    <li><i class="fas fa-check-circle"></i> Tax benefits under Section 80C</li>
                    <li><i class="fas fa-check-circle"></i> Payout options: Lump sum or monthly income</li>
                </ul>
                <button class="learn-more">Learn More</button>
            </div>
        </div>
        <div class="insurance-card health-insurance">
            <div class="image-container">
                <img src="health-insurance-banner.jpg" alt="Health Insurance">
            </div>
            <div class="insurance-content">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h2>Health Insurance</h2>
                <p>Health insurance protects you from high medical costs, covering hospitalization, treatments, and preventive healthcare services.</p>
                <h3>Key Benefits:</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Cashless treatment at network hospitals</li>
                    <li><i class="fas fa-check-circle"></i> Coverage for pre-existing diseases</li>
                    <li><i class="fas fa-check-circle"></i> Critical illness & maternity coverage</li>
                    <li><i class="fas fa-check-circle"></i> Free annual health check-ups</li>
                    <li><i class="fas fa-check-circle"></i> Tax benefits under Section 80D</li>
                </ul>
                <button class="learn-more">Learn More</button>
            </div>
        </div>
    </section>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #fff4e6, #d4af37);
        color: #333;
        margin: 0;
        padding: 0;
    }
    header {
        text-align: center;
        padding: 20px;
        background: #d4af37;
        color: white;
    }
    .insurance-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }
    .insurance-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        max-width: 400px;
        text-align: center;
    }
    .image-container img {
        width: 100%;
        height: auto;
    }
    .insurance-content {
        padding: 20px;
    }
    .icon {
        font-size: 40px;
        color: #d4af37;
        margin-bottom: 10px;
    }
    h2 {
        color: #333;
    }
    ul {
        list-style: none;
        padding: 0;
    }
    ul li {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .learn-more {
        background: #d4af37;
        border: none;
        color: white;
        padding: 10px 20px;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 5px;
    }
    .learn-more:hover {
        background: #b8952a;
    }
</style>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection