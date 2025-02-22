@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/giftcityfund.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
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
    <div class="nps-container">
        <div class="nps-header">National Pension System (NPS)</div>
        <div class="nps-content">
            <p>NPS was introduced by the <span class="highlight">Central Government</span> to help individuals create
                income in the form of a pension to take care of their retirement needs.</p>
            <p>The <span class="highlight">Pension Fund Regulatory and Development Authority (PFRDA)</span> regulates
                and administers NPS under the PFRDA Act, 2013.</p>
            <p>NPS is a <span class="highlight">market-linked defined contribution scheme</span> that helps you save for
                your retirement. The scheme is <span class="highlight">simple, voluntary, portable, and flexible</span>.
                It is one of the most efficient ways of boosting your retirement income and saving tax.</p>
            <p>It allows you to plan for a financially secure retirement with systematic savings in a planned way.</p>
        </div>
    </div>
    <!--NPS-Info-end--->

    <!--NPS-model-start--->
    <div class="nps-mode-info-container-main">
        <div class="nps-mode-info-heading">
            <h2>National Pension System (NPS) Models</h2>
            <p>NPS is available to all citizens of India and offers different models depending on the following user
                segments:</p>
        </div>
        <div class="nps-mode-info-container">
            <div class="nps-mode-info-card">
                <h2>Government Employees</h2>
                <p>As per the Ministry of Finance notification (5/7/2003-ECB-PR) dated 22nd December 2003, NPS is
                    mandatory for Central Government employees who joined on or after January 1, 2004, except for armed
                    forces personnel. It is also extended to employees of Central and State Autonomous Bodies if opted
                    by the respective State/UT.</p>
            </div>
            <div class="nps-mode-info-card">
                <h2>Corporate Employees</h2>
                <p>NPS can be voluntarily adopted by corporations for their employees, with contributions made as per
                    the terms of employment.</p>
            </div>
            <div class="nps-mode-info-card">
                <h2>Voluntary Citizens Model</h2>
                <p>NPS is available to all Indian citizens, including those residing abroad, between the age of 18 and
                    70 years, under a voluntary model.</p>
            </div>
        </div>
    </div>
    <!--NPS-model-end--->

    <!--NPS-benefit-start--->
    <div class="nps-benefit-container">
        <h2>Benefits of NPS</h2>
        <ul class="nps-benefit-benefits">
            <li>Flexible</li>
            <li>Highly Tax Efficient (Exemption)</li>
            <li>Portable</li>
            <li>Regulated and Transparent</li>
            <li>Dual Benefit of Low Cost and Power of Compounding</li>
            <li>Online Access</li>
        </ul>
    </div>
    <!--NPS-benefit-end--->

    <style>
        /*Main info*/
        /* NPS-info-model Responsive CSS */

        .nps-mode-info-container-main {
            background-color: #ebdede;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 0 5%;
        }

        .nps-mode-info-heading {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
        }

        .nps-mode-info-heading h2 {
            color: #d4af37;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .nps-mode-info-heading p {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        .nps-mode-info-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: 0 auto;
        }

        .nps-mode-info-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
            max-width: 300px;
            text-align: center;
            border-top: 5px solid #d4af37;
            animation: fadeIn 1s ease-in-out;
            overflow: hidden;
            position: relative;
        }

        .nps-mode-info-card h2 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .nps-mode-info-card p {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
            opacity: 0;
            font-size: 1rem;
            color: #555;
        }

        .nps-mode-info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .nps-mode-info-card:hover p {
            max-height: 200px;
            opacity: 1;
        }

        .nps-container {
            max-width: 1200px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            margin-left: 50px;
            margin-right: 50px;
        }

        .nps-header {
            color: #d0a94e;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }

        .nps-subheader {
            color: #333;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .nps-content {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
        }

        .highlight {
            color: #d0a94e;
            font-weight: bold;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .nps-mode-info-container {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nps-mode-info-card {
                width: 45%;
            }
        }

        @media (max-width: 768px) {
            .nps-mode-info-heading h2 {
                font-size: 1.8rem;
            }

            .nps-mode-info-heading p {
                font-size: 1.2rem;
            }

            .nps-mode-info-card {
                width: 90%;
            }
        }

        @media (max-width: 480px) {
            .nps-mode-info-heading h2 {
                font-size: 1.5rem;
            }

            .nps-mode-info-heading p {
                font-size: 1rem;
            }

            .nps-mode-info-card {
                width: 100%;
            }

            .nps-container {
                margin-left: 20px;
                margin-right: 20px;
            }
        }

        /*NPS-info-model*/
        /* NPS-info-model Responsive CSS */

        .nps-mode-info-container-main {
            background-color: #ebdede;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 0 5%;
        }

        .nps-mode-info-heading {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
        }

        .nps-mode-info-heading h2 {
            color: #d4af37;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .nps-mode-info-heading p {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        .nps-mode-info-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: 0 auto;
        }

        .nps-mode-info-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
            max-width: 300px;
            text-align: center;
            border-top: 5px solid #d4af37;
            animation: fadeIn 1s ease-in-out;
            overflow: hidden;
            position: relative;
        }

        .nps-mode-info-card h2 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .nps-mode-info-card p {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
            opacity: 0;
            font-size: 1rem;
            color: #555;
        }

        .nps-mode-info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .nps-mode-info-card:hover p {
            max-height: 200px;
            opacity: 1;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .nps-mode-info-container {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nps-mode-info-card {
                width: 45%;
            }
        }

        @media (max-width: 768px) {
            .nps-mode-info-heading h2 {
                font-size: 1.8rem;
            }

            .nps-mode-info-heading p {
                font-size: 1.2rem;
            }

            .nps-mode-info-card {
                width: 90%;
            }
        }

        @media (max-width: 480px) {
            .nps-mode-info-heading h2 {
                font-size: 1.5rem;
            }

            .nps-mode-info-heading p {
                font-size: 1rem;
            }

            .nps-mode-info-card {
                width: 100%;
            }
        }

        /*NPS-Benefits*/
        .nps-benefit-container {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            margin: 50px auto;
            border: 5px solid #d4af37;
            text-align: left;
        }

        h2 {
            color: #d4af37;
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .nps-benefit-benefits {
            list-style-type: none;
            padding: 0;
            font-size: 1rem;
            color: #333;
        }

        .nps-benefit-benefits li {
            background: #fff6d6;
            margin: 10px 0;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            display: flex;
            align-items: center;
            border-left: 5px solid #d4af37;
        }

        .nps-benefit-benefits li::before {
            content: "✔";
            color: #d4af37;
            font-weight: bold;
            margin-right: 10px;
            font-size: 1.3rem;
        }
    </style>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection