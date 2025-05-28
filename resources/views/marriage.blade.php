@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/sipcalculator.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Marriage Calculator</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Financial Calculator</a></li>
                  <li class="breadcrumb-item"><a href="#">Marriage Calculator</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
<!-- Page Header End -->


<!-- Calculator Section -->
<div id="calculator" class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">Marriage Cost Calculator</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Smart Tool</div>
            </div>
        </div>
        <div class="card-body p-4 p-md-5">
            <!-- Calculator Inputs Section -->
            <div id="calculatorInputs">
                <!-- Input Fields with Enhanced Sliders -->
                @php 
                $inputs = [
                    [
                        'label' => "Child's Current Age (Years)",
                        'id' => 'ageNow',
                        'min' => 1,
                        'max' => 25,
                        'step' => 1,
                        'default' => 2,
                        'marks' => [1, 5, 10, 15, 20, 25]
                    ],
                    [
                        'label' => "Expected Marriage Age (Years)",
                        'id' => 'ageMarriage',
                        'min' => 18,
                        'max' => 35,
                        'step' => 1,
                        'default' => 25,
                        'marks' => [18, 21, 25, 30, 35]
                    ],
                    [
                        'label' => "Today's Wedding Cost (₹)",
                        'id' => 'costNow',
                        'min' => 0,
                        'max' => 15000000,
                        'step' => 100000,
                        'default' => 1000000,
                        'marks' => [0,5000000, 10000000, 15000000]
                    ],
                    [
                        'label' => "Annual Savings (₹)",
                        'id' => 'annualSavings',
                        'min' => 0,
                        'max' => 1000000,
                        'step' => 1000,
                        'default' => 30000,
                        'marks' => [0,250000, 500000, 750000, 1000000]
                    ],
                    [
                        'label' => "Current Savings (₹)",
                        'id' => 'currentSavings',
                        'min' => 0,
                        'max' => 10000000,
                        'step' => 10000,
                        'default' => 100000,
                        'marks' => [0,5000000, 10000000]
                    ],
                    [
                        'label' => "Expected Return (%)",
                        'id' => 'rateReturn',
                        'min' => 1,
                        'max' => 35,
                        'step' => 1,
                        'default' => 12,
                        'marks' => [1, 5, 10, 15, 20, 25,30,35]
                    ],
                    [
                        'label' => "Expected Inflation (%)",
                        'id' => 'inflationRate',
                        'min' => 0,
                        'max' => 14,
                        'step' => 1,
                        'default' => 6,
                        'marks' => [0, 3, 6, 9, 12, 14]
                    ],
                ];
                @endphp

                @foreach ($inputs as $input)
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-3">
                        <label class="form-label fw-semibold">{{ $input['label'] }}</label>
                        <span class="badge fs-6 px-3 py-1 slider-value-badge" id="{{ $input['id'] }}Value" style="background-color: #f8e8c0; color: #333; font-weight: 600; box-shadow: 0 2px 5px rgba(169, 123, 17, 0.99);">{{ number_format($input['default']) }}</span>
                    </div>
                    <div class="d-flex gap-3 align-items-center position-relative">
                        <div class="w-75 position-relative slider-container">
                            <input type="range" 
                                   min="{{ $input['min'] }}" 
                                   max="{{ $input['max'] }}" 
                                   step="{{ $input['step'] }}" 
                                   value="{{ $input['default'] }}" 
                                   id="{{ $input['id'] }}Slider" 
                                   class="form-range golden-slider w-100">
                            <div class="slider-track"></div>
                            <div class="slider-marks">
                                @foreach ($input['marks'] as $mark)
                                <div class="mark-container" style="left: {{ ($mark - $input['min']) / ($input['max'] - $input['min']) * 100 }}%">
                                    <div class="mark-line"></div>
                                    <span class="mark-label">{{ number_format($mark) }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <input type="number" 
                               id="{{ $input['id'] }}Input" 
                               class="form-control w-25" 
                               value="{{ $input['default'] }}"
                               min="{{ $input['min'] }}"
                               max="{{ $input['max'] }}"
                               step="{{ $input['step'] }}"
                               style="border-radius: 10px; border: 2px solid #e0e0e0; font-weight: 600; text-align: center; transition: all 0.3s ease; padding: 8px; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
                @endforeach

                <!-- Buttons -->
                <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                    <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="calculateMarriage()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                        <i class="bi bi-calculator me-2"></i> Calculate
                    </button>
                    <button class="btn btn-outline-dark btn-lg px-5 rounded-pill" onclick="resetCalculator()">
                        <i class="bi bi-arrow-counterclockwise me-2"></i> Reset
                    </button>
                </div>
            </div>

            <!-- Result and Chart Section (initially hidden) -->
            <div id="resultSection" class="d-none">
                <!-- Result -->
                <div id="resultBox" class="mt-4">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: 1px solid rgba(215, 157, 21, 0.96) !important;">
                        <div class="card-body p-3 p-md-4">
                            <div class="row g-2">
                                <div class="col-12 mb-3">
                                    <h4 class="text-center mb-4" style="color: #b8860b;">Marriage Cost Calculation Results</h4>
                                </div>
                                
                                <!-- Inflation adjusted future cost -->
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                        <span class="fw-semibold">Inflation adjusted future cost of marriage of your child</span>
                                        <span class="badge fs-6 px-3 py-2" style="background-color: #f8e8c0; color: #333;">₹<span id="futureCost">0</span></span>
                                    </div>
                                </div>
                                
                                <!-- Future value of annual savings -->
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                        <span class="fw-semibold">Future value of your annual savings</span>
                                        <span class="badge fs-6 px-3 py-2" style="background-color: #f8e8c0; color: #333;">₹<span id="futureSavings">0</span></span>
                                    </div>
                                </div>
                                
                                <!-- Existing savings growth -->
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                        <span class="fw-semibold">Your existing savings will grow to</span>
                                        <span class="badge fs-6 px-3 py-2" style="background-color: #f8e8c0; color: #333;">₹<span id="grownSavings">0</span></span>
                                    </div>
                                </div>
                                
                                <!-- Additional funds required - Updated for mobile responsiveness -->
                                <div class="col-12">
                                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center py-2">
                                        <span class="fw-semibold text-center text-md-start mb-2 mb-md-0">Additional funds required to meet expenses</span>
                                        <span class="badge fs-6 px-3 py-2 text-center" id="additionalFundsBadge" style="background-color: #f8e8c0; color: #333; white-space: nowrap;">
                                            <span id="additionalFundsText">Not Calculated</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recalculate Button -->
                    <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-4">
                        <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="showCalculator()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                            <i class="bi bi-arrow-counterclockwise me-2"></i> Recalculate
                        </button>
                    </div>
                </div>

                <!-- Chart -->
                <div class="mt-4 chart-container" style="position: relative; height: 60vh; min-height: 300px; max-height: 400px;">
                    <canvas id="marriageChart"></canvas>
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

    /* Responsive Adjustments */
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
        }
        
        .card-body {
            padding: 1.5rem !important;
        }
        
        .btn-lg {
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
        }
    }

    /* Mobile-Specific Styles */
    @media (max-width: 576px) {
        .chart-container {
            height: 50vh !important;
            min-height: 280px !important;
            max-height: 350px !important;
        }
        
        #marriageChart {
            max-height: 100%;
        }
        
        .card-body {
            padding: 1rem !important;
        }
        
        #resultBox .row {
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }
        
        #resultBox .col-12 {
            padding-left: 0.25rem;
            padding-right: 0.25rem;
        }
        
        #resultBox h4 {
            font-size: 1.2rem;
        }
        
        #resultBox .fw-semibold {
            font-size: 0.9rem;
        }
        
        .slider-value-badge {
            font-size: 0.8rem;
            padding: 0.25rem 0.5rem;
        }
        
        .form-label {
            font-size: 0.9rem;
        }
        
        .btn-lg {
            width: 100%;
            margin-bottom: 0.5rem;
        }
        
        .d-md-flex {
            flex-direction: column;
        }
        
        /* Specific styles for additional funds section on mobile */
        #additionalFundsBadge {
            font-size: 0.8rem;
            padding: 0.5rem;
            width: 100%;
            max-width: 100%;
            white-space: normal !important;
        }
        
        #additionalFundsText {
            white-space: normal;
            word-break: break-word;
        }
    }

    /* iPhone 5/SE and smaller */
    @media (max-width: 320px) {
        .chart-container {
            height: 45vh !important;
            min-height: 250px !important;
        }
        
        #resultBox h6 {
            font-size: 0.8rem;
        }
        
        #resultBox h3 {
            font-size: 1.1rem;
        }
        
        .form-control {
            font-size: 0.9rem;
            padding: 0.25rem;
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
    ageNow: 2,
    ageMarriage: 25,
    costNow: 1000000,
    annualSavings: 30000,
    currentSavings: 100000,
    rateReturn: 12,
    inflationRate: 6
};

let chart = null;
let resizeObserver = null;

document.addEventListener('DOMContentLoaded', function() {
    initializeSliders();
    window.addEventListener('resize', adjustChartForMobile);
    
    // Initialize resize observer
    resizeObserver = new ResizeObserver(() => {
        if (chart) {
            chart.resize();
            chart.update();
        }
    });
    
    // Initially hide the chart
    document.getElementById('marriageChart').style.display = 'none';
});

function initializeSliders() {
    const sliders = ['ageNow', 'ageMarriage', 'costNow', 'annualSavings', 'currentSavings', 'rateReturn', 'inflationRate'];
    
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
            label.textContent = formatNumber(value);
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
            label.textContent = formatNumber(value);
            track.style.setProperty('--fill-percent', `${percent}%`);
        });
        
        // Initialize values
        const initialPercent = (defaultValues[id] - slider.min) / (slider.max - slider.min) * 100;
        slider.value = defaultValues[id];
        input.value = defaultValues[id];
        label.textContent = formatNumber(defaultValues[id]);
        track.style.setProperty('--fill-percent', `${initialPercent}%`);
    });
}

function formatNumber(num) {
    num = parseFloat(num);
    if (num >= 10000000) return (num/10000000).toFixed(1) + 'Cr';
    if (num >= 100000) return (num/100000).toFixed(1) + 'L';
    if (num >= 1000) return (num/1000).toFixed(1) + 'K';
    return num.toLocaleString('en-IN');
}

function calculateMarriage() {
    // Hide calculator inputs
    document.getElementById('calculatorInputs').style.display = 'none';
    
    // Show results and chart section
    document.getElementById('resultSection').classList.remove('d-none');
    document.getElementById('marriageChart').style.display = 'block';
    
    const ageNow = parseInt(document.getElementById('ageNowSlider').value);
    const ageMarriage = parseInt(document.getElementById('ageMarriageSlider').value);
    const yearsToGrow = ageMarriage - ageNow;

    const costNow = parseFloat(document.getElementById('costNowSlider').value);
    const annualSavings = parseFloat(document.getElementById('annualSavingsSlider').value);
    const currentSavings = parseFloat(document.getElementById('currentSavingsSlider').value);
    const rateReturn = parseFloat(document.getElementById('rateReturnSlider').value) / 100;
    const inflationRate = parseFloat(document.getElementById('inflationRateSlider').value) / 100;

    // Calculate future values
    const futureCost = costNow * Math.pow(1 + inflationRate, yearsToGrow);
    const futureSavings = annualSavings * ((Math.pow(1 + rateReturn, yearsToGrow) - 1) / rateReturn);
    const grownSavings = currentSavings * Math.pow(1 + rateReturn, yearsToGrow);

    const totalAvailable = futureSavings + grownSavings;
    const additionalFunds = futureCost - totalAvailable;

    // Display results in the new format
    document.getElementById('futureCost').textContent = formatNumber(futureCost);
    document.getElementById('futureSavings').textContent = formatNumber(futureSavings);
    document.getElementById('grownSavings').textContent = formatNumber(grownSavings);
    
    // Handle additional funds display
    const additionalFundsElement = document.getElementById('additionalFundsText');
    const additionalFundsBadge = document.getElementById('additionalFundsBadge');
    
    if (additionalFunds <= 0) {
        additionalFundsElement.textContent = "Not Required, You have surplus savings.";
        additionalFundsBadge.style.backgroundColor = "#d4edda";
        additionalFundsBadge.style.color = "#155724";
    } else {
        additionalFundsElement.textContent = "₹" + formatNumber(additionalFunds);
        additionalFundsBadge.style.backgroundColor = "#f8d7da";
        additionalFundsBadge.style.color = "#721c24";
    }

    // Prepare data for chart
    const labels = [];
    const costData = [];
    const savingsData = [];
    const currentSavingsData = [];
    
    for (let year = 0; year <= yearsToGrow; year++) {
        labels.push(year === 0 ? "Now" : year % 2 === 0 || year === yearsToGrow ? `Year ${year}` : '');
        costData.push(costNow * Math.pow(1 + inflationRate, year));
        
        // Calculate savings growth year by year
        let yearlySavings = 0;
        for (let y = 1; y <= year; y++) {
            yearlySavings += annualSavings * Math.pow(1 + rateReturn, year - y);
        }
        savingsData.push(yearlySavings);
        
        currentSavingsData.push(currentSavings * Math.pow(1 + rateReturn, year));
    }

    // Create or update chart
    if (chart) chart.destroy();
    
    const ctx = document.getElementById('marriageChart').getContext('2d');
    chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Future Cost of Marriage',
                    data: costData,
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
                    label: 'Future Value of Annual Savings',
                    data: savingsData,
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
                    label: 'Current Savings Growth',
                    data: currentSavingsData,
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
            id: 'customCanvasBackgroundColor',
            beforeDraw: (chart, args, options) => {
                const {ctx, chartArea: {top, bottom, left, right, width, height}} = chart;
                ctx.save();
                ctx.globalCompositeOperation = 'destination-over';
                ctx.fillStyle = 'white';
                ctx.fillRect(left, top, width, height);
                ctx.restore();
            }
        }]
    });
    
    // Observe chart container for resize
    resizeObserver.observe(document.getElementById('marriageChart'));
    
    // Smooth scroll to results
    setTimeout(() => {
        document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 100);
}

function showCalculator() {
    // Show calculator inputs
    document.getElementById('calculatorInputs').style.display = 'block';
    
    // Hide results section (including chart)
    document.getElementById('resultSection').classList.add('d-none');
    document.getElementById('marriageChart').style.display = 'none';
    
    // Stop observing chart container
    resizeObserver.unobserve(document.getElementById('marriageChart'));
}

function getChartOptions() {
    const isMobile = window.innerWidth <= 768;
    const isSmallMobile = window.innerWidth <= 400;
    
    return {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: isMobile ? 'bottom' : 'top',
                align: 'center',
                labels: {
                    usePointStyle: true,
                    padding: isSmallMobile ? 5 : 10,
                    font: {
                        size: isSmallMobile ? 10 : (isMobile ? 12 : 14)
                    },
                    boxWidth: isSmallMobile ? 8 : (isMobile ? 10 : 12),
                    boxHeight: isSmallMobile ? 8 : (isMobile ? 10 : 12)
                }
            },
            tooltip: {
                mode: 'index',
                intersect: false,
                backgroundColor: '#fff',
                titleColor: '#212529',
                bodyColor: '#495057',
                borderColor: 'rgba(0,0,0,0.1)',
                borderWidth: 1,
                padding: isSmallMobile ? 8 : 12,
                usePointStyle: true,
                bodyFont: {
                    size: isSmallMobile ? 10 : (isMobile ? 12 : 14)
                },
                callbacks: {
                    label: function(context) {
                        return context.dataset.label + ': ₹' + formatNumber(context.raw);
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
                        return '₹' + formatNumber(value);
                    },
                    padding: 10,
                    font: {
                        size: isSmallMobile ? 8 : (isMobile ? 10 : 12)
                    },
                    maxTicksLimit: isSmallMobile ? 4 : (isMobile ? 5 : 8)
                }
            },
            x: {
                grid: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    padding: 10,
                    autoSkip: true,
                    maxRotation: isMobile ? 0 : 45,
                    minRotation: isMobile ? 0 : 45,
                    font: {
                        size: isSmallMobile ? 8 : (isMobile ? 10 : 12)
                    },
                    maxTicksLimit: isSmallMobile ? 5 : (isMobile ? 6 : 10)
                }
            }
        },
        animation: {
            duration: isMobile ? 0 : 1000
        }
    };
}

function adjustChartForMobile() {
    if (chart) {
        chart.options = getChartOptions();
        chart.update();
    }
}

function resetCalculator() {
    // Reset all inputs to default values
    Object.keys(defaultValues).forEach(id => {
        const slider = document.getElementById(`${id}Slider`);
        const input = document.getElementById(`${id}Input`);
        const label = document.getElementById(`${id}Value`);
        const container = slider.closest('.slider-container');
        const track = container.querySelector('.slider-track');
        
        const initialPercent = (defaultValues[id] - slider.min) / (slider.max - slider.min) * 100;
        
        slider.value = defaultValues[id];
        input.value = defaultValues[id];
        label.textContent = formatNumber(defaultValues[id]);
        track.style.setProperty('--fill-percent', `${initialPercent}%`);
    });
    
    // Show calculator inputs
    document.getElementById('calculatorInputs').style.display = 'block';
    
    // Hide results section (including chart)
    document.getElementById('resultSection').classList.add('d-none');
    document.getElementById('marriageChart').style.display = 'none';
    
    // Destroy existing chart
    if (chart) {
        chart.destroy();
        chart = null;
    }
    
    // Stop observing chart container
    if (resizeObserver) {
        resizeObserver.unobserve(document.getElementById('marriageChart'));
    }
}
</script>
@endsection