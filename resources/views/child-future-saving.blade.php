@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
 <!-- {{ Vite::asset('resources/theme/img/bond_left2.webp') }} -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  style="background: url('{{Vite::asset('resources/theme/img/childfurutesavingheader.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; min-height: 55vh; width: 100%;">
  <div class="container text-center py-5 h-100 d-flex align-items-center justify-content-center">
    <h1 class="display-2 text-white mb-4 animated slideInDown">Child Future Planning</h1>
  </div>
</div>
    <!-- Page Header End -->




<!-- Child Future Saving Section-1 -->
<div class="pms-info-container" id="pms-info-section1">
    <h1 class="pms-info-heading">Child Future Saving</h1>
    <p class="pms-info-content">
        <span class="highlight">The birth of a child is one of the most important events in one’s life</span> other than the celebration; it brings maturity and responsibility to the parents. It also brings seriousness regarding our financial life and if we talk about priority of goals, sometimes Child Future Plan is even a shade above retirement planning.

        <span class="highlight">There has been a paradigm shift </span> in the thought process of people and generally they don’t make any distinction between <span class="highlight">sons and daughters.</span> Socially their thinking may have changed but financially they still belong to that old school which is happy with buying insurance policies or some bonds in name of the children.
        Few new age parents have started buying child <span class="highlight">Unit Linked Insurance Plans (ULIPs)</span> rather than <span class="highlight">money-back policies.</span> But is it actually a smart strategy? The simple answer is NO. Emotional sales take place where investors take decisions based on their emotions.</p>
    <p class="pms-info-content">
     <span class="highlight">As a parent you want to be the pillar of strength and support</span>  for your child, making sure that his/her future plans remain undisturbed even when you are not around.
    We can help you to make you child future safe and secure.  
    </p>
</div>
<!-- child future -heading -->

<!-- Child Future Saving Section-2 -->
<section class="child-future-saving-section">
    <div class="child-future-saving-container">
        <div class="child-future-saving-image">
            <img src="{{Vite::asset('resources/theme/img/childfuturesaving.webp')}}" alt="Parents planning a secure financial future for their child’s
education.">
        </div>
        <div class="child-future-saving-content">
            <h1>Secure Your Child's Future</h1>
            <p>
                The birth of a child is a life-changing moment. Beyond the joy and celebration, it brings responsibility and financial planning to ensure a bright future. While many parents opt for traditional insurance plans, it's essential to explore smarter investment strategies.
            </p>
            <p>
                <strong>Plan wisely</strong> and ensure your child's education and future dreams are secured with modern financial instruments that offer better returns and flexibility.
            </p>
            <a href="{{ route('schedulemeeting') }}" class="child-future-saving-btn">Schedule Meeting</a>
        </div>
    </div>
</section>

    <!-- Why Planning Section with Moving Circular Structure -->
<section class="why-planning">
    <div class="container">
      <h1 class="why-planning-h1">Why is Child Future Planning Important?</h1>
      <div class="moving-circle">
        <div class="circle-item">
          <div class="icon">🎉</div>
          <p>Joy of Parenthood</p>
        </div>
        <div class="circle-item">
          <div class="icon">💼</div>
          <p>Need for Responsibility</p>
        </div>
        <div class="circle-item">
          <div class="icon">📈</div>
          <p>Financial Planning</p>
        </div>
        <div class="circle-item">
          <div class="icon">🧑‍🎓</div>
          <p>Education</p>
        </div>
      </div>
    </div>
    
  </section>
  <!-- Calculator Section -->
<div id="calculator" class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 1000px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">Education Planning Calculator</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Smart Tool</div>
            </div>
        </div>
        <div class="card-body p-5">
            <!-- Input Fields with Enhanced Sliders -->
            <div id="inputFields">
                @php 
                $inputs = [
                    [
                        'label' => "Child's age today (Years)",
                        'id' => 'childAge',
                        'min' => 0,
                        'max' => 24,
                        'step' => 1,
                        'default' => 8,
                        'marks' => [0, 5, 10, 15, 20, 24],
                        'mobile_marks' => [0, 10, 20, 24]
                    ],
                    [
                        'label' => "Join College at age (Years)",
                        'id' => 'collegeAge',
                        'min' => 16,
                        'max' => 25,
                        'step' => 1,
                        'default' => 18,
                        'marks' => [16, 18, 20, 22, 25],
                        'mobile_marks' => [16, 20, 25]
                    ],
                    [
                        'label' => "Duration of education (Years)",
                        'id' => 'eduDuration',
                        'min' => 1,
                        'max' => 20,
                        'step' => 1,
                        'default' => 5,
                        'marks' => [1, 5, 10, 15, 20],
                        'mobile_marks' => [1, 10, 20]
                    ],
                    [
                        'label' => "Current Cost per year (₹)",
                        'id' => 'costPerYear',
                        'min' => 100000,
                        'max' => 10000000,
                        'step' => 100000,
                        'default' => 200000,
                        'marks' => [100000, 1000000, 2500000, 5000000, 7500000, 10000000],
                        'mobile_marks' => [100000, 5000000, 10000000]
                    ],
                    [
                        'label' => "Existing savings (₹)",
                        'id' => 'savings',
                        'min' => 0,
                        'max' => 10000000,
                        'step' => 100000,
                        'default' => 0,
                        'marks' => [0, 1000000, 2500000, 5000000, 7500000, 10000000],
                        'mobile_marks' => [0,  5000000, 10000000]
                    ],
                    [
                        'label' => "Expected return rate (%)",
                        'id' => 'rateReturn',
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                        'default' => 12,
                        'marks' => [0, 10,20,30,40,50],
                        'mobile_marks' => [0,10,20, 30,40, 50]
                    ],
                    [
                        'label' => "Expected inflation rate (%)",
                        'id' => 'inflation',
                        'min' => 0,
                        'max' => 15,
                        'step' => 1,
                        'default' => 6,
                        'marks' => [0, 3, 6, 9, 12, 15],
                        'mobile_marks' => [0, 6, 15]
                    ]
                ];
                @endphp

                @foreach ($inputs as $input)
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-3">
                        <label class="form-label fw-semibold">{{ $input['label'] }}</label>
                        <span class="badge fs-6 px-3 py-1 slider-value-badge" id="{{ $input['id'] }}Value" style="background-color: #f8e8c0; color: #333; font-weight: 600; box-shadow: 0 2px 5px rgba(169, 123, 17, 0.99);">{{ number_format($input['default']) }}</span>
                    </div>
                    <div class="d-flex gap-3 align-items-center position-relative">
                        <div class="w-100 position-relative slider-container">
                            <input type="range" 
                                   min="{{ $input['min'] }}" 
                                   max="{{ $input['max'] }}" 
                                   step="{{ $input['step'] }}" 
                                   value="{{ $input['default'] }}" 
                                   id="{{ $input['id'] }}Slider" 
                                   class="form-range golden-slider w-100">
                            <div class="slider-track"></div>
                            <div class="slider-marks desktop-marks">
                                @foreach ($input['marks'] as $mark)
                                <div class="mark-container" style="left: {{ ($mark - $input['min']) / ($input['max'] - $input['min']) * 100 }}%">
                                    <div class="mark-line"></div>
                                    <span class="mark-label">{{ number_format($mark) }}</span>
                                </div>
                                @endforeach
                            </div>
                            <div class="slider-marks mobile-marks d-none">
                                @foreach ($input['mobile_marks'] as $mark)
                                <div class="mark-container" style="left: {{ ($mark - $input['min']) / ($input['max'] - $input['min']) * 100 }}%">
                                    <div class="mark-line"></div>
                                    <span class="mark-label">{{ number_format($mark) }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <input type="number" 
                               id="{{ $input['id'] }}Input" 
                               class="form-control" 
                               value="{{ $input['default'] }}"
                               min="{{ $input['min'] }}"
                               max="{{ $input['max'] }}"
                               step="{{ $input['step'] }}"
                               style="width: 120px; border-radius: 10px; border: 2px solid #e0e0e0; font-weight: 600; text-align: center; transition: all 0.3s ease; padding: 8px; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
                @endforeach

                <!-- Buttons -->
                <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                    <button id="calculateBtn" class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="calculateEducation()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                        <i class="bi bi-calculator me-2"></i> Calculate
                    </button>
                    <button class="btn btn-outline-dark btn-lg px-5 rounded-pill" onclick="resetCalculator()">
                        <i class="bi bi-arrow-counterclockwise me-2"></i> Reset
                    </button>
                </div>
            </div>

            <!-- Loading Indicator -->
            <div id="loadingIndicator" class="text-center py-5 d-none">
                <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;"></div>
                <p class="mt-3 fs-5">Calculating...</p>
                <div class="progress mt-3" style="height: 6px;">
                    <div id="calculationProgress" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 0%"></div>
                </div>
            </div>

            <!-- Result -->
            <div id="resultBox" class="mt-5 d-none">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: 1px solid rgba(215, 157, 21, 0.96) !important;">
                    <div class="card-body p-4">
                        <div class="row text-center">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Corpus Required at College Start</h6>
                                    <h3 class="mb-0" style="color: #b8860b;">₹<span id="corpusAmt">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Existing Savings Growth</h6>
                                    <h3 class="mb-0" style="color: #28a745;">₹<span id="savingsGrowthAmt">0</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Shortfall to be Covered</h6>
                                    <h3 class="mb-0" style="color: #dc3545;">₹<span id="shortfallAmt">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Required Monthly Investment</h6>
                                    <h3 class="mb-0" style="color: #8a6d3b;">₹<span id="monthlyInvestmentAmt">0</span></h3>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Chart -->
                        <div class="mt-5 chart-container" style="position: relative; height:400px; width:100%;">
                            <canvas id="educationChart"></canvas>
                        </div>
                        
                        <!-- Recalculate Button -->
                        <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                            <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="showInputFields()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                                <i class="bi bi-pencil me-2"></i> Recalculate
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Slider Styles */
    .slider-container {
        position: relative;
        height: 50px;
        flex-grow: 1;
        margin-right: 15px;
    }

    .golden-slider {
        -webkit-appearance: none;
        width: 100%;
        height: 8px;
        background: transparent;
        outline: none;
        position: relative;
        z-index: 5;
        margin-top: 15px;
    }

    .slider-track {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 6px;
        background: #e0e0e0;
        border-radius: 3px;
        transform: translateY(-50%);
        z-index: 1;
        overflow: hidden;
        color:#b8860b;
    }

    .slider-track::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: var(--fill-percent, 0%);
        background: linear-gradient(90deg, #d0a94e 0%, #f8e8c0 100%);
        border-radius: 3px;
    }

    .golden-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #fff;
        cursor: pointer;
        border: 4px solid #b8860b;
        box-shadow: 0 2px 10px rgba(199, 145, 20, 0.96);
        transition: all 0.3s ease;
        position: relative;
        z-index: 10;
    }

    .golden-slider::-moz-range-thumb {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #fff;
        cursor: pointer;
        border: 4px solid #b8860b;
        box-shadow: 0 2px 10px rgba(198, 140, 7, 0.95);
    }

    /* Slider Marks */
    .slider-marks {
        position: absolute;
        top: 30px;
        left: 0;
        right: 0;
        height: 20px;
        pointer-events: none;
        z-index: 2;
    }

    .mark-container {
        position: absolute;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .mark-line {
        width: 2px;
        height: 10px;
        background: #b8860b;
        margin-bottom: 4px;
    }

    .mark-label {
        font-size: 11px;
        color: #6c757d;
        font-weight: 500;
        white-space: nowrap;
        background: rgba(255, 255, 255, 0.9);
        padding: 2px 6px;
        border-radius: 10px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Input Focus */
    .form-control:focus {
        border-color: #b8860b;
        box-shadow: 0 0 0 0.25rem rgba(197, 144, 21, 0.93), inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Button Effects */
    .glow-on-hover {
        transition: all 0.3s ease;
    }

    .glow-on-hover:hover {
        background-color: #a67c10 !important;
        border-color: #a67c10 !important;
        box-shadow: 0 0 15px rgb(203, 146, 11);
    }

    /* Chart Container */
    .chart-container {
        position: relative;
        height: 400px;
        width: 100%;
        min-width: 280px;
    }

    /* Loading Spinner */
    .loading-spinner {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .card-body {
            padding: 30px !important;
        }
        
        .slider-container {
            margin-right: 10px;
        }
        
        .form-control {
            width: 100px !important;
        }
    }

    @media (max-width: 768px) {
        .golden-slider::-webkit-slider-thumb {
            width: 20px;
            height: 20px;
            border-width: 3px;
        }
        
        .mark-label {
            font-size: 9px;
            padding: 1px 4px;
        }
        
        .form-control {
            padding: 6px;
            width: 80px !important;
        }
        
        /* Show mobile marks and hide desktop marks */
        .desktop-marks {
            display: none !important;
        }
        
        .mobile-marks {
            display: block !important;
        }

        /* Adjust chart container */
        .chart-container {
            height: 350px;
            margin: 0 -15px;
            width: calc(100% + 30px);
        }

        #resultBox .row {
            flex-direction: column;
        }
        
        #resultBox .col-md-6 {
            margin-bottom: 15px;
        }
    }

    @media (max-width: 576px) {
        .chart-container {
            height: 300px;
            margin-bottom: 20px;
        }
        
        /* Adjust result boxes for mobile */
        #resultBox .row {
            flex-direction: column;
        }
        
        #resultBox .col-md-6 {
            margin-bottom: 15px;
        }
        
        /* Make slider inputs more compact */
        .slider-value-badge {
            font-size: 14px;
            padding: 2px 8px;
        }
        
        .form-control {
            font-size: 9px;
            padding: 5px;
            width: 70px !important;
        }
        
        .slider-container {
            margin-right: 8px;
        }
    }

    @media (max-width: 400px) {
        .chart-container {
            height: 280px;
        }
        
        /* Further simplify for very small screens */
        .card-body {
            padding: 20px !important;
        }
        
        .btn-lg {
            padding-left: 20px !important;
            padding-right: 20px !important;
            font-size: 14px;
        }
        
        .form-control {
            width: 60px !important;
        }
    }

    @media (max-width: 350px) {
        .chart-container {
            height: 250px;
        }
        
        .mark-label {
            font-size: 8px;
            padding: 0 2px;
        }
        
        .form-control {
            width: 55px !important;
            font-size: 12px;
            padding: 4px;
        }
    }
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- JavaScript -->
<script>
// Default values for each input
const defaultValues = {
    childAge: 8,
    collegeAge: 18,
    eduDuration: 5,
    costPerYear: 200000,
    savings: 0,
    rateReturn: 12,
    inflation: 6
};

let chart = null;
let calculationTimeout = null;

document.addEventListener('DOMContentLoaded', function() {
    initializeSliders();
    window.addEventListener('resize', handleResize);
    checkMobileMarks(); // Check on initial load
    
    // Disable calculate button during calculation
    document.getElementById('calculateBtn').addEventListener('click', function() {
        this.disabled = true;
        setTimeout(() => {
            this.disabled = false;
        }, 2000); // Prevent double clicks for 2 seconds
    });
});

function initializeSliders() {
    const sliders = ['childAge', 'collegeAge', 'eduDuration', 'costPerYear', 'savings', 'rateReturn', 'inflation'];
    
    sliders.forEach(id => {
        const slider = document.getElementById(`${id}Slider`);
        const input = document.getElementById(`${id}Input`);
        const label = document.getElementById(`${id}Value`);
        const container = slider.closest('.slider-container');
        const track = container.querySelector('.slider-track');
        
        // Update all elements when slider changes
        slider.addEventListener('input', function() {
            const value = this.value;
            const min = this.min;
            const max = this.max;
            const percent = (value - min) / (max - min) * 100;
            
            input.value = value;
            label.textContent = value.toLocaleString('en-IN');
            track.style.setProperty('--fill-percent', `${percent}%`);
        });

        // Update all elements when input changes
        input.addEventListener('input', function() {
            const min = parseFloat(slider.min);
            const max = parseFloat(slider.max);
            let value = parseFloat(this.value) || min;
            
            // Ensure value stays within bounds
            value = Math.min(Math.max(value, min), max);
            const percent = (value - min) / (max - min) * 100;
            
            slider.value = value;
            this.value = value;
            label.textContent = value.toLocaleString('en-IN');
            track.style.setProperty('--fill-percent', `${percent}%`);
        });
        
        // Initialize values
        const initialPercent = (defaultValues[id] - slider.min) / (slider.max - slider.min) * 100;
        slider.value = defaultValues[id];
        input.value = defaultValues[id];
        label.textContent = defaultValues[id].toLocaleString('en-IN');
        track.style.setProperty('--fill-percent', `${initialPercent}%`);
    });
}

function checkMobileMarks() {
    const isMobile = window.innerWidth <= 768;
    document.querySelectorAll('.desktop-marks').forEach(el => {
        el.style.display = isMobile ? 'none' : 'block';
    });
    document.querySelectorAll('.mobile-marks').forEach(el => {
        el.style.display = isMobile ? 'block' : 'none';
    });
}

function handleResize() {
    checkMobileMarks();
    adjustChartForMobile();
    
    // Force chart resize on orientation change
    if (chart) {
        setTimeout(() => {
            chart.resize();
        }, 200);
    }
}

function calculateEducation() {
    // Clear any pending calculations
    if (calculationTimeout) {
        clearTimeout(calculationTimeout);
    }
    
    // Show loading indicator
    document.getElementById('inputFields').style.display = 'none';
    document.getElementById('loadingIndicator').classList.remove('d-none');
    document.getElementById('resultBox').classList.add('d-none');
    
    // Update progress bar
    const progressBar = document.getElementById('calculationProgress');
    progressBar.style.width = '30%';
    
    // Scroll to loading indicator
    document.getElementById('loadingIndicator').scrollIntoView({ behavior: 'smooth', block: 'center' });
    
    // Use setTimeout to allow UI to update before heavy calculation
    calculationTimeout = setTimeout(() => {
        try {
            // Update progress
            progressBar.style.width = '60%';
            
            // Perform calculations in chunks to prevent UI freezing
            setTimeout(() => {
                performCalculations();
                progressBar.style.width = '100%';
                
                // Hide loading indicator after a brief delay
                setTimeout(() => {
                    document.getElementById('loadingIndicator').classList.add('d-none');
                }, 300);
            }, 50);
        } catch (error) {
            console.error("Calculation error:", error);
            document.getElementById('loadingIndicator').innerHTML = `
                <div class="alert alert-danger">
                    <i class="bi bi-exclamation-triangle-fill"></i> Calculation failed. Please try again.
                </div>
                <button class="btn btn-warning mt-3" onclick="showInputFields()">
                    <i class="bi bi-arrow-left"></i> Back to Calculator
                </button>
            `;
        }
    }, 100);
}

function performCalculations() {
    // Get input values
    const childAge = parseInt(document.getElementById('childAgeSlider').value);
    const collegeAge = parseInt(document.getElementById('collegeAgeSlider').value);
    const eduDuration = parseInt(document.getElementById('eduDurationSlider').value);
    const costPerYear = parseInt(document.getElementById('costPerYearSlider').value);
    const savings = parseInt(document.getElementById('savingsSlider').value);
    const rateReturn = parseFloat(document.getElementById('rateReturnSlider').value);
    const inflation = parseFloat(document.getElementById('inflationSlider').value);

    // Calculate years until college starts
    const yearsToCollege = collegeAge - childAge;
    
    // Calculate inflated cost at college start
    const inflatedCost = costPerYear * Math.pow(1 + (inflation / 100), yearsToCollege);
    
    // Calculate corpus required (considering inflation during education years)
    let corpusRequired = 0;
    for (let year = 0; year < eduDuration; year++) {
        corpusRequired += inflatedCost * Math.pow(1 + (inflation / 100), year);
    }
    corpusRequired = Math.round(corpusRequired);
    
    // Calculate how much existing savings will grow
    const grownSavings = Math.round(savings * Math.pow(1 + (rateReturn / 100), yearsToCollege));
    
    // Calculate shortfall
    const shortfall = corpusRequired - grownSavings;
    
    // Calculate required monthly investment to cover shortfall
    const monthlyRate = rateReturn / 12 / 100;
    const monthsToCollege = yearsToCollege * 12;
    const monthlyInvestment = Math.round(shortfall * monthlyRate / (Math.pow(1 + monthlyRate, monthsToCollege) - 1));
    
    // Update result display
    document.getElementById('corpusAmt').textContent = corpusRequired.toLocaleString('en-IN');
    document.getElementById('savingsGrowthAmt').textContent = grownSavings.toLocaleString('en-IN');
    document.getElementById('shortfallAmt').textContent = shortfall.toLocaleString('en-IN');
    document.getElementById('monthlyInvestmentAmt').textContent = monthlyInvestment.toLocaleString('en-IN');
    
    // Show results
    document.getElementById('resultBox').classList.remove('d-none');
    
    // Prepare data for chart - simplified for mobile
    const isMobile = window.innerWidth <= 768;
    const labels = [];
    const investmentData = [];
    const corpusData = [];
    const savingsData = [];
    
    // Use fewer data points on mobile
    const step = isMobile ? Math.max(1, Math.floor(yearsToCollege / 5)) : 1;
    
    for (let year = 0; year <= yearsToCollege; year += step) {
        // Ensure we include the final year
        if (year + step > yearsToCollege && year < yearsToCollege) {
            year = yearsToCollege;
        }
        
        labels.push(childAge + year + " years");
        
        // Calculate investment growth if started now
        let investmentValue = 0;
        if (year > 0) {
            const months = year * 12;
            investmentValue = monthlyInvestment * (Math.pow(1 + monthlyRate, months) - 1) / monthlyRate;
        }
        investmentData.push(Math.round(investmentValue));
        
        // Calculate corpus required at this point (future value)
        const yearsRemaining = yearsToCollege - year;
        let futureCorpus = 0;
        for (let eduYear = 0; eduYear < eduDuration; eduYear++) {
            futureCorpus += inflatedCost * Math.pow(1 + (inflation / 100), eduYear) / Math.pow(1 + (rateReturn / 100), yearsRemaining + eduYear);
        }
        corpusData.push(Math.round(futureCorpus));
        
        // Calculate savings growth
        savingsData.push(Math.round(savings * Math.pow(1 + (rateReturn / 100), year)));
    }
    
    // Create or update chart
    if (chart) chart.destroy();
    
    const chartContainer = document.querySelector('.chart-container');
    chartContainer.style.minWidth = '280px';

    const ctx = document.getElementById('educationChart').getContext('2d');
    chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Required Corpus',
                    data: corpusData,
                    borderColor: '#dc3545',
                    backgroundColor: 'rgba(220, 53, 69, 0.05)',
                    borderWidth: 3,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#dc3545',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Your Investments',
                    data: investmentData,
                    borderColor: '#28a745',
                    backgroundColor: 'rgba(40, 167, 69, 0.05)',
                    borderWidth: 3,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#28a745',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Existing Savings',
                    data: savingsData,
                    borderColor: '#b8860b',
                    backgroundColor: 'rgba(184, 134, 11, 0.05)',
                    borderWidth: 3,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#b8860b',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: getChartOptions(),
        plugins: [{
            id: 'mobileOptimization',
            beforeDraw: function(chart) {
                if (window.innerWidth <= 768) {
                    chart.options.maintainAspectRatio = false;
                    chart.aspectRatio = 1.5;
                } else {
                    chart.options.maintainAspectRatio = true;
                }
            }
        }]
    });
    
    // Adjust chart for mobile if needed
    adjustChartForMobile();
    
    // Smooth scroll to results
    document.getElementById('resultBox').scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function getChartOptions() {
    const isMobile = window.innerWidth <= 768;
    const isSmallMobile = window.innerWidth <= 400;
    const isTinyMobile = window.innerWidth <= 350;
    
    return {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                top: isMobile ? 5 : 20,
                right: isMobile ? 5 : 20,
                bottom: isMobile ? 10 : 30,
                left: isMobile ? 5 : 20
            }
        },
        plugins: {
            legend: {
                position: isMobile ? 'bottom' : 'top',
                align: 'center',
                labels: {
                    usePointStyle: true,
                    padding: isMobile ? 5 : 20,
                    font: {
                        size: isTinyMobile ? 8 : (isSmallMobile ? 10 : (isMobile ? 12 : 14))
                    },
                    boxWidth: isMobile ? 8 : 12
                }
            },
            tooltip: {
                mode: 'nearest',
                intersect: true,
                backgroundColor: '#fff',
                titleColor: '#212529',
                bodyColor: '#495057',
                borderColor: 'rgba(0,0,0,0.1)',
                borderWidth: 1,
                padding: 10,
                usePointStyle: true,
                bodyFont: {
                    size: isMobile ? 10 : 14
                },
                callbacks: {
                    label: function(context) {
                        return context.dataset.label + ': ₹' + context.raw.toLocaleString('en-IN');
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    drawBorder: false,
                    color: 'rgba(0,0,0,0.05)'
                },
                ticks: {
                    callback: function(value) {
                        if (value >= 10000000) return '₹' + (value/10000000).toFixed(1) + 'Cr';
                        if (value >= 100000) return '₹' + (value/100000).toFixed(1) + 'L';
                        if (value >= 1000) return '₹' + (value/1000).toFixed(0) + 'K';
                        return '₹' + value;
                    },
                    padding: 5,
                    font: {
                        size: isTinyMobile ? 8 : (isSmallMobile ? 9 : (isMobile ? 10 : 12))
                    },
                    maxTicksLimit: isTinyMobile ? 3 : (isSmallMobile ? 4 : (isMobile ? 5 : 8))
                }
            },
            x: {
                grid: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    padding: 5,
                    autoSkip: true,
                    maxRotation: 0,
                    minRotation: 0,
                    font: {
                        size: isTinyMobile ? 8 : (isSmallMobile ? 9 : (isMobile ? 10 : 12))
                    },
                    maxTicksLimit: isTinyMobile ? 3 : (isSmallMobile ? 4 : (isMobile ? 5 : 12)),
                    callback: function(value, index, values) {
                        // Show fewer labels on mobile to prevent crowding
                        if (isTinyMobile && index % 3 !== 0) return '';
                        if (isSmallMobile && index % 2 !== 0) return '';
                        return this.getLabelForValue(value);
                    }
                }
            }
        },
        elements: {
            point: {
                radius: isTinyMobile ? 2 : (isMobile ? 3 : 4),
                hoverRadius: isTinyMobile ? 3 : (isMobile ? 4 : 6)
            },
            line: {
                borderWidth: isMobile ? 2 : 3
            }
        }
    };
}

function adjustChartForMobile() {
    if (chart) {
        chart.options = getChartOptions();
        chart.update();
    }
}

function showInputFields() {
    // Show input fields and hide results
    document.getElementById('inputFields').style.display = 'block';
    document.getElementById('resultBox').classList.add('d-none');
    document.getElementById('loadingIndicator').classList.add('d-none');
    
    // Smooth scroll to top of calculator
    document.getElementById('calculator').scrollIntoView({ behavior: 'smooth' });
}

function resetCalculator() {
    // Reset all inputs to default values
    Object.keys(defaultValues).forEach(id => {
        const slider = document.getElementById(`${id}Slider`);
        const input = document.getElementById(`${id}Input`);
        const label = document.getElementById(`${id}Value`);
        const container = slider.closest('.slider-container');
        const track = container.querySelector('.slider-track');
        
        slider.value = defaultValues[id];
        input.value = defaultValues[id];
        label.textContent = defaultValues[id].toLocaleString('en-IN');
        
        // Update slider track
        const min = parseFloat(slider.min);
        const max = parseFloat(slider.max);
        const percent = (defaultValues[id] - min) / (max - min) * 100;
        track.style.setProperty('--fill-percent', `${percent}%`);
    });
    
    // Destroy existing chart
    if (chart) {
        chart.destroy();
        chart = null;
    }
    
    // Show input fields
    showInputFields();
}
</script>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
