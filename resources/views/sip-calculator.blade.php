@extends('layouts.app')
@section('content')
<!-- page header start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Financial Calculator</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">SIP Calculator</li> <!-- Corrected active state -->
                </ol>
            </nav>
        </div>
    </div>
    
    <h1 class="why-planning-h2"> SIP Calculator</h1>

<iframe src="https://www.investwell.in/updation/parameter/Calculator/par_sip_calculatorN.jsp?share=N" width="100%" height="1150" frameborder="0" scrolling="auto"></iframe>
   

    <!-- JavaScript libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection