@extends('layouts.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
        style="background: url('{{ asset('img/equtityderivatieshd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Equity And Derivatives</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Equity And Derivatives</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Equities - For Long Term Investment Start -->
    <div class="equity-info-container" id="equities-section">
        <h1 class="equity-info-heading">Equities - For Long Term Investment</h1>
        <p class="equity-info-content">
            Long-term investments in equities offer some of the highest returns, which remain significant even after adjusting for inflation, compared to other asset classes. This allows investors to maintain their lifestyle without cutting expenses, even as the prices of goods and services gradually increase.
        </p>
        <p class="equity-info-content">
            Equity investments have the potential to deliver returns that are multiples of the invested capital when held for a longer period, typically over five years. The longer an investor holds equity investments, the lower the risk becomes, potentially minimizing it to nil. Starting equity investments early and holding them for the long term can make achieving financial goals much easier.
        </p>
        <p class="equity-info-content">
            Despite the high return potential, Indians are significantly underinvested in equities, with only about 5% penetration. This is much lower than most developing and developed nations.
        </p>
        <p class="equity-info-content">
            The choice of stock is crucial in equity investing. It should be based on factors such as management quality, the nature of the business, the future potential of the business model, market share, profitability, and competitive advantage. Equity shares are categorized by market capitalization into large-cap, mid-cap, small-cap, and micro-cap. Larger market cap stocks generally offer higher stability and lower risk, while smaller market cap stocks have higher return potential but also higher risk.
        </p>
        <p class="equity-info-content">
            Investors can invest in equities through the <strong>primary market</strong> (via IPOs before a stock is listed) or the <strong>secondary market</strong> (after the stock is listed). In addition to capital appreciation, investors can also earn regular returns through dividends.
        </p>
    </div>
    <!-- Equities - For Long Term Investment End -->

    <!-- Steps Start -->
    <div class="eq1-steps">
        <h1 class="section-heading">Understanding Equity Derivatives</h1>
        <div class="eq1-steps-container">
            <div class="st1">
                <a href="#equity-section1" class="step-link">
                    <div class="eq1-circle" id="step1">01</div>
                    <h3>What is an Equity Derivative?</h3>
                </a>
            </div>
            <div class="st3">
                <a href="#undertsanding-section3" class="step-link">
                    <div class="eq1-circle" id="step3">02</div>
                    <h3>Understanding Equity Derivative</h3>
                </a>
            </div>
            <div class="st4">
                <a href="#risk-section2" class="step-link">
                    <div class="eq1-circle" id="step4">03</div>
                    <h3>Risks of Equity Derivatives</h3>
                </a>
            </div>
        </div>
    </div>
    <!-- Steps End -->

    <!-- What is an Equity Derivative Start -->
    <section id="equity-section1" class="what-is-equi">
        <div class="content-container">
            <div class="image-container">
                <img src="img/equi-img-1.jpg" alt="Stock market trading concept with equity derivative charts">
            </div>
            <div class="text-container">
                <h4>What is an Equity Derivative?</h4>
                <h1>Empowering investments, one equity derivative at a time.</h1>
                <p>
                    An equity derivative is a financial instrument whose value is derived from the price movements of an underlying equity asset, such as a stock. For example, a stock option is an equity derivative because its value is based on the price movements of the underlying stock.
                </p>
            </div>
        </div>
    </section>
    <!-- What is an Equity Derivative End -->

    <!-- Understanding Equity Derivatives Start -->
    <div class="eq-understanding-container" id="undertsanding-section3">
        <!-- Left Section: Content -->
        <div class="eq-understanding-left-section">
            <h1>Understanding Equity Derivative</h1>
            <div class="eq-understanding-content-description">
                <p>
                    Equity derivatives can act like an insurance policy. The investor pays a premium (the cost of the derivative contract) to receive a potential payout. This allows investors to manage risk or speculate on price movements without directly owning the underlying asset.
                </p>
                <p>
                    For example:
                    <ul>
                        <li>An investor holding a stock can protect against a decline in its value by purchasing a <strong>put option</strong>.</li>
                        <li>An investor who has shorted a stock can hedge against a price increase by purchasing a <strong>call option</strong>.</li>
                    </ul>
                </p>
                <p>
                    Equity derivatives can also be used for speculative purposes. Traders can buy equity options instead of the actual stock to profit from the underlying asset’s price movements. This strategy has two advantages:
                    <ul>
                        <li><strong>Cost Efficiency</strong>: Options are cheaper than buying the actual stock.</li>
                        <li><strong>Risk Management</strong>: Traders can hedge risks by placing both put and call options on the stock’s price.</li>
                    </ul>
                </p>
            </div>
        </div>

        <!-- Right Section: Image -->
        <div class="eq-understanding-right-section">
            <img src="img/equi-img-2.webp" alt="Group of financial analysts discussing stock trends" class="right-image">
        </div>
    </div>
    <!-- Understanding Equity Derivatives End -->

    <!-- Risk Section Start -->
    <div class="risk-container" id="risk-section2">
        <div class="image-container">
            <img src="img/risk1.jpeg" alt="Stock market risk representation with declining graphs" class="left-image">
        </div>
        <div class="content-container">
            <h2>Risks in Equity and Derivatives</h2>
            <ul>
                <li>
                    <strong>1. Equities</strong>
                    <p class="description">
                        Market volatility can lead to significant price fluctuations, and there's a risk of losing invested capital if the stock price declines.
                    </p>
                </li>
                <li>
                    <strong>2. Derivatives</strong>
                    <p class="description">
                        Highly leveraged positions can amplify losses, and complex pricing can introduce counterparty and liquidity risks.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <!-- Risk Section End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection