@extends('layouts.app')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Disclosure</h1>
        <!-- <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Disclosure</a></li>
            </ol>
        </nav> -->
    </div>
</div>
<!-- Page Header End -->

<div class="Disclosure-table-container">
        <table>
            <thead>
                <tr>
                    <th>Scheme Type</th>
                    <th>Trail - 1st Year Onwards</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Liquid/Ultra Short Term Schemes</td>
                    <td>0.05% - 0.70%</td>
                </tr>
                <tr>
                    <td>Short Term Income Funds</td>
                    <td>0.50% - 0.90%</td>
                </tr>
                <tr>
                    <td>Income Funds</td>
                    <td>0.40% - 1.00%</td>
                </tr>
                <tr>
                    <td>Gilt Funds</td>
                    <td>0.15% - 0.90%</td>
                </tr>
                <tr>
                    <td>Hybrid Debt/Monthly Income Plans</td>
                    <td>0.90% - 1.20%</td>
                </tr>
                <tr>
                    <td>Arbitrage Funds</td>
                    <td>0.55% - 0.70%</td>
                </tr>
                <tr>
                    <td>Fund of Funds</td>
                    <td>0.25% - 0.50%</td>
                </tr>
                <tr>
                    <td>ELSS</td>
                    <td>0.65% - 2.00%</td>
                </tr>
                <tr>
                    <td>Index Funds</td>
                    <td>0.30% - 1.00%</td>
                </tr>
                <tr>
                    <td>Equity/Hybrid Equity/Balance Funds</td>
                    <td>0.65% - 2.00%</td>
                </tr>
                <tr>
                    <td>Fixed Maturity Plans</td>
                    <td>Variable</td>
                </tr>
            </tbody>
        </table>
        <p class="Disclosure-notes">
            Details of scheme-level commission on mutual funds are available with the Relationship Managers and would be produced on demand.<br>
            This is on a best-effort basis, and rates are updated as and when actual rates are received from AMCs.<br>
            We are a NISM certified/AMFI registered mutual fund distributor and not an RIA. We get compensated/incentivized by AMCs. We don’t charge any fees for our services.
        </p>
    </div>
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection