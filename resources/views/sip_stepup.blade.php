@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/sipcalculator.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">SIP Step Up Calculator</h1>
      </div>
   </div>
</div>
<!-- Page Header End -->
<!-- Calculator Section -->
<div id="calculator" class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">SIP Step-Up Calculator</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Smart Tool</div>
            </div>
        </div>
        <div class="card-body p-5">
            <!-- Input Fields with Enhanced Sliders -->
            @php 
            $inputs = [
                [
                    'label' => 'Monthly Investment (₹)',
                    'id' => 'investment',
                    'min' => 1000,
                    'max' => 500000,
                    'step' => 1000,
                    'default' => 5000,
                    'marks' => [1000,100000,300000, 500000]
                ],
                [
                    'label' => 'Expected Return (%)',
                    'id' => 'return',
                    'min' => 1,
                    'max' => 50,
                    'step' => 1,
                    'default' => 12,
                    'marks' => [1, 10, 20, 30, 40, 50]
                ],
                [
                    'label' => 'Duration (Years)',
                    'id' => 'duration',
                    'min' => 1,
                    'max' => 50,
                    'step' => 1,
                    'default' => 10,
                    'marks' => [1, 10, 20,30, 40, 50]
                ],
            ];
            @endphp

            @foreach ($inputs as $input)
            <div class="mb-4">
                <div class="d-flex justify-content-between mb-3">
                    <label class="form-label fw-semibold">{{ $input['label'] }}</label>
                    <span class="badge fs-6 px-3 py-1 slider-value-badge" id="{{ $input['id'] }}Value" style="background-color: #f8e8c0; color: #333; font-weight: 600; box-shadow: 0 2px 5px rgba(169, 123, 17, 0.99);">{{ $input['default'] }}</span>
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
                                <span class="mark-label">{{ $mark }}</span>
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

            <!-- Step Up Options -->
            <div class="mb-4">
                <div class="d-flex justify-content-between mb-3">
                    <label class="form-label fw-semibold">Annual Step-Up</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Step-up type" style="gap: 10px;">
                        <input type="radio" class="btn-check" name="stepUpType" id="stepUpPercent" autocomplete="off" checked>
                        <label class="btn btn-outline-secondary rounded-pill" for="stepUpPercent" id="stepUpPercentLabel">Percentage (%)</label>
                        
                        <input type="radio" class="btn-check" name="stepUpType" id="stepUpFixed" autocomplete="off">
                        <label class="btn btn-outline-secondary rounded-pill" for="stepUpFixed" id="stepUpFixedLabel">Fixed Amount (₹)</label>
                    </div>
                </div>
                
                <!-- Percentage Step-Up -->
                <div id="percentStepUpContainer" class="mt-3">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="badge fs-6 px-3 py-1 slider-value-badge" id="stepUpPercentValue" style="background-color: #f8e8c0; color: #333; font-weight: 600; box-shadow: 0 2px 5px rgba(169, 123, 17, 0.99);">10</span>
                    </div>
                    <div class="d-flex gap-3 align-items-center position-relative">
                        <div class="w-75 position-relative slider-container">
                            <input type="range" 
                                   min="0" 
                                   max="100" 
                                   step="1" 
                                   value="10" 
                                   id="stepUpPercentSlider" 
                                   class="form-range golden-slider w-100">
                            <div class="slider-track"></div>
                            <div class="slider-marks">
                                @foreach ([0,20,40,60,80,100] as $mark)
                                <div class="mark-container" style="left: {{ ($mark - 0) / (100 - 0) * 100 }}%">
                                    <div class="mark-line"></div>
                                    <span class="mark-label">{{ $mark }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <input type="number" 
                               id="stepUpPercentInput" 
                               class="form-control w-25" 
                               value="10"
                               min="0"
                               max="100"
                               step="1"
                               style="border-radius: 10px; border: 2px solid #e0e0e0; font-weight: 600; text-align: center; transition: all 0.3s ease; padding: 8px; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
                
                <!-- Fixed Amount Step-Up -->
                <div id="fixedStepUpContainer" class="mt-3 d-none">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="badge fs-6 px-3 py-1 slider-value-badge" id="stepUpFixedValue" style="background-color: #f8e8c0; color: #333; font-weight: 600; box-shadow: 0 2px 5px rgba(169, 123, 17, 0.99);">1000</span>
                    </div>
                    <div class="d-flex gap-3 align-items-center position-relative">
                        <div class="w-75 position-relative slider-container">
                            <input type="range" 
                                   min="0" 
                                   max="50000" 
                                   step="500" 
                                   value="1000" 
                                   id="stepUpFixedSlider" 
                                   class="form-range golden-slider w-100">
                            <div class="slider-track"></div>
                            <div class="slider-marks">
                                @foreach ([0,10000, 20000, 30000, 40000, 50000] as $mark)
                                <div class="mark-container" style="left: {{ ($mark - 0) / (50000 - 0) * 100 }}%">
                                    <div class="mark-line"></div>
                                    <span class="mark-label">{{ $mark }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <input type="number" 
                               id="stepUpFixedInput" 
                               class="form-control w-25" 
                               value="1000"
                               min="0"
                               max="50000"
                               step="500"
                               style="border-radius: 10px; border: 2px solid #e0e0e0; font-weight: 600; text-align: center; transition: all 0.3s ease; padding: 8px; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="calculateSip()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                    <i class="bi bi-calculator me-2"></i> Calculate
                </button>
                <button class="btn btn-outline-dark btn-lg px-5 rounded-pill" onclick="resetCalculator()">
                    <i class="bi bi-arrow-counterclockwise me-2"></i> Reset
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Result Section -->
<div id="resultSection" class="container py-5 d-none">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">Your SIP Step-Up Results</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Analysis</div>
            </div>
        </div>
        <div class="card-body p-5">
            <!-- Result -->
            <div id="resultBox">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: 1px solid rgba(215, 157, 21, 0.96) !important;">
                    <div class="card-body p-4">
                        <div class="row text-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Total Invested</h6>
                                    <h3 class="mb-0" style="color: #b8860b;">₹<span id="investedAmt">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Estimated Returns</h6>
                                    <h3 class="mb-0" style="color: #28a745;">₹<span id="returnsAmt">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Total Value</h6>
                                    <h3 class="mb-0" style="color: #8a6d3b;">₹<span id="totalValue">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart -->
            <div class="mt-5 chart-container" style="position: relative; height:400px;">
                <canvas id="sipChart"></canvas>
            </div>

            <!-- Recalculate Button -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="showCalculator()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                    <i class="bi bi-arrow-left me-2"></i> Recalculate
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .gap-3 {
    gap: 2rem !important;
    }
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

/* Step Up Toggle Buttons */
.btn-group .btn {
    padding: 8px 20px;
    font-size: 14px;
    border-radius: 20px !important;
    border: 1px solid #dee2e6;
    transition: all 0.3s ease;
}

.btn-group .btn.active {
    background-color: #b8860b;
    color: white;
    border-color: #b8860b;
}

.btn-group .btn:not(.active):hover {
    background-color: #f8f9fa;
}

/* Chart Container Styles */
.chart-container {
    position: relative;
    height: 400px;
    width: 100%;
    margin: 0 auto;
    padding: 10px;
}

@media (max-width: 992px) {
    .chart-container {
        height: 350px;
    }
}

@media (max-width: 768px) {
    .chart-container {
        height: 300px;
    }
}

@media (max-width: 576px) {
    .chart-container {
        height: 280px;
        padding: 5px;
    }
}

@media (max-width: 400px) {
    .chart-container {
        height: 250px;
    }
}

/* Ensure chart canvas fills container */
#sipChart {
    width: 100% !important;
    height: 100% !important;
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
    
    .btn-group .btn {
        padding: 6px 15px;
        font-size: 13px;
    }
}

/* Mobile-Specific Chart Styles */
@media (max-width: 576px) {
    .chart-container {
        height: 300px !important;
        margin-bottom: 20px;
    }
    .gap-3 {
    gap: 1rem !important;
    
}
    
    #sipChart {
        max-height: 280px;
    }
    
    /* Adjust result boxes for mobile */
    #resultBox .row {
        flex-direction: column;
    }
    
    #resultBox .col-md-4 {
        margin-bottom: 15px;
    }
    
    /* Make slider inputs more compact */
    .slider-value-badge {
        font-size: 14px;
        padding: 2px 8px;
    }
    
    .form-control {
        font-size: 11px;
        padding: 5px;
    }
    
    .btn-group .btn {
        padding: 5px 12px;
        font-size: 8px;
    }
}

@media (max-width: 400px) {
    .chart-container {
        height: 250px !important;
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
    investment: 5000,
    return: 12,
    duration: 10,
    stepUpPercent: 10,
    stepUpFixed: 1000
};

let chart = null;

document.addEventListener('DOMContentLoaded', function() {
    initializeSliders();
    setupStepUpToggle();
    window.addEventListener('resize', adjustChartForMobile);
});

function initializeSliders() {
    const sliders = ['investment', 'return', 'duration', 'stepUpPercent', 'stepUpFixed'];
    
    sliders.forEach(id => {
        const slider = document.getElementById(`${id}Slider`);
        if (!slider) return;
        
        const input = document.getElementById(`${id}Input`);
        const label = document.getElementById(`${id}Value`);
        const container = slider.closest('.slider-container');
        const track = container ? container.querySelector('.slider-track') : null;
        
        // Update all elements when slider changes
        slider.addEventListener('input', function() {
            const value = this.value;
            const min = this.min;
            const max = this.max;
            const percent = (value - min) / (max - min) * 100;
            
            if (input) input.value = value;
            if (label) label.textContent = value;
            if (track) track.style.setProperty('--fill-percent', `${percent}%`);
        });

        
        // Update all elements when input changes
        if (input) {
            input.addEventListener('input', function() {
                const min = parseFloat(slider.min);
                const max = parseFloat(slider.max);
                let value = parseFloat(this.value) || min;
                
                // Ensure value stays within bounds
                value = Math.min(Math.max(value, min), max);
                const percent = (value - min) / (max - min) * 100;
                
                slider.value = value;
                this.value = value;
                if (label) label.textContent = value;
                if (track) track.style.setProperty('--fill-percent', `${percent}%`);
            });
        }
        
        // Initialize values
        const initialPercent = (defaultValues[id] - slider.min) / (slider.max - slider.min) * 100;
        slider.value = defaultValues[id];
        if (input) input.value = defaultValues[id];
        if (label) label.textContent = defaultValues[id];
        if (track) track.style.setProperty('--fill-percent', `${initialPercent}%`);
    });
}

function setupStepUpToggle() {
    const percentRadio = document.getElementById('stepUpPercent');
    const fixedRadio = document.getElementById('stepUpFixed');
    const percentContainer = document.getElementById('percentStepUpContainer');
    const fixedContainer = document.getElementById('fixedStepUpContainer');
    
    // Set initial state
    percentContainer.classList.remove('d-none');
    fixedContainer.classList.add('d-none');
    document.getElementById('stepUpPercentLabel').classList.add('active');
    
    // Add event listeners
    percentRadio.addEventListener('change', function() {
        if (this.checked) {
            percentContainer.classList.remove('d-none');
            fixedContainer.classList.add('d-none');
            document.getElementById('stepUpPercentLabel').classList.add('active');
            document.getElementById('stepUpFixedLabel').classList.remove('active');
        }
    });
    
    fixedRadio.addEventListener('change', function() {
        if (this.checked) {
            percentContainer.classList.add('d-none');
            fixedContainer.classList.remove('d-none');
            document.getElementById('stepUpPercentLabel').classList.remove('active');
            document.getElementById('stepUpFixedLabel').classList.add('active');
        }
    });
}

function calculateSip() {
    const P = parseFloat(document.getElementById('investmentSlider').value);
    const R = parseFloat(document.getElementById('returnSlider').value);
    const N = parseInt(document.getElementById('durationSlider').value);
    
    // Determine which step-up type is selected
    const isPercentStepUp = document.getElementById('stepUpPercent').checked;
    let stepUpValue;
    
    if (isPercentStepUp) {
        stepUpValue = parseFloat(document.getElementById('stepUpPercentSlider').value) / 100;
    } else {
        stepUpValue = parseFloat(document.getElementById('stepUpFixedSlider').value);
    }

    let invested = 0, futureValue = 0;
    let monthlyRate = R / 12 / 100;
    let dataInvested = [], dataValue = [], labels = [];
    let yearlyInvestment = P * 12; // Initial yearly investment without step-up

    for (let year = 1; year <= N; year++) {
        // Calculate the investment for this year (with step-up)
        if (isPercentStepUp) {
            // Percentage-based step-up
            yearlyInvestment = P * Math.pow(1 + stepUpValue, year - 1) * 12;
        } else {
            // Fixed amount step-up
            yearlyInvestment = (P + (stepUpValue * (year - 1))) * 12;
        }
        
        invested += yearlyInvestment;
        
        // Calculate future value of all investments up to this year
        let valueForYear = 0;
        for (let y = 1; y <= year; y++) {
            let monthlyInvestment;
            if (isPercentStepUp) {
                monthlyInvestment = P * Math.pow(1 + stepUpValue, y - 1);
            } else {
                monthlyInvestment = P + (stepUpValue * (y - 1));
            }
            
            let monthsInvested = (year - y) * 12 + 12; // How long this year's investments have grown
            
            for (let m = 1; m <= 12; m++) {
                let monthsLeft = monthsInvested - m;
                valueForYear += monthlyInvestment * Math.pow(1 + monthlyRate, monthsLeft);
            }
        }

        dataInvested.push(Math.round(invested));
        dataValue.push(Math.round(valueForYear));
        labels.push("Year " + year);
    }

    futureValue = dataValue[N - 1];
    let estimatedReturns = futureValue - invested;

    // Format numbers with commas
    document.getElementById('investedAmt').textContent = Math.round(invested).toLocaleString('en-IN');
    document.getElementById('returnsAmt').textContent = Math.round(estimatedReturns).toLocaleString('en-IN');
    document.getElementById('totalValue').textContent = Math.round(futureValue).toLocaleString('en-IN');

    // Hide calculator and show results
    document.getElementById('calculator').classList.add('d-none');
    document.getElementById('resultSection').classList.remove('d-none');

    // Create or update chart
    if (chart) chart.destroy();
    
    const ctx = document.getElementById('sipChart').getContext('2d');
    chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Total Value',
                    data: dataValue,
                    borderColor: '#d0a94e',
                    backgroundColor: 'rgba(208, 169, 78, 0.05)',
                    borderWidth: 3,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#d0a94e',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Total Invested',
                    data: dataInvested,
                    borderColor: '#000000',
                    backgroundColor: 'rgba(0, 0, 0, 0.05)',
                    borderWidth: 3,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#000000',
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
                const {ctx} = chart;
                ctx.save();
                ctx.globalCompositeOperation = 'destination-over';
                ctx.fillStyle = options.color || '#ffffff';
                ctx.fillRect(0, 0, chart.width, chart.height);
                ctx.restore();
            }
        }]
    });
    
    // Adjust chart for mobile if needed
    adjustChartForMobile();
    
    // Smooth scroll to results
    document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function showCalculator() {
    // Hide results and show calculator
    document.getElementById('resultSection').classList.add('d-none');
    document.getElementById('calculator').classList.remove('d-none');
    
    // Smooth scroll to calculator
    document.getElementById('calculator').scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function getChartOptions() {
    const isMobile = window.innerWidth <= 768;
    const isSmallMobile = window.innerWidth <= 576;
    
    return {
        responsive: true,
        maintainAspectRatio: false, // Changed to false for better control
        layout: {
            padding: {
                top: 20,
                right: isMobile ? 10 : 20,
                bottom: isMobile ? 30 : 40,
                left: isMobile ? 10 : 20
            }
        },
        plugins: {
            legend: {
                position: isMobile ? 'bottom' : 'top',
                align: 'center',
                labels: {
                    usePointStyle: true,
                    padding: isMobile ? 15 : 20,
                    font: {
                        size: isMobile ? (isSmallMobile ? 10 : 12) : 14,
                        weight: 'bold'
                    },
                    boxWidth: isMobile ? 10 : 14,
                    boxHeight: isMobile ? 10 : 14
                },
                onClick: (e) => e.stopPropagation() // Disable toggling datasets on click
            },
            tooltip: {
                mode: 'index',
                intersect: false,
                backgroundColor: 'rgba(0,0,0,0.85)',
                titleColor: '#fff',
                bodyColor: '#fff',
                borderColor: 'rgba(255,255,255,0.1)',
                borderWidth: 1,
                padding: 12,
                usePointStyle: true,
                bodyFont: {
                    size: isMobile ? 12 : 14
                },
                titleFont: {
                    size: isMobile ? 12 : 14
                },
                callbacks: {
                    label: function(context) {
                        return context.dataset.label + ': ₹' + context.raw.toLocaleString('en-IN');
                    }
                },
                position: 'nearest'
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
                        if (value >= 1000) return '₹' + (value/1000).toFixed(1) + 'K';
                        return '₹' + value.toLocaleString('en-IN');
                    },
                    padding: 10,
                    font: {
                        size: isMobile ? (isSmallMobile ? 10 : 11) : 12
                    },
                    maxTicksLimit: isMobile ? 5 : 8
                }
            },
            x: {
                grid: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    padding: isMobile ? 5 : 10,
                    autoSkip: true,
                    maxRotation: isMobile ? 0 : 45,
                    minRotation: isMobile ? 0 : 45,
                    font: {
                        size: isMobile ? (isSmallMobile ? 9 : 10) : 12
                    },
                    maxTicksLimit: isMobile ? (isSmallMobile ? 5 : 8) : 12,
                    callback: function(value, index, values) {
                        // Show every nth label based on screen size
                        if (isSmallMobile && values.length > 8) {
                            return index % 2 === 0 ? 'Y' + (index + 1) : '';
                        } else if (isMobile && values.length > 12) {
                            return index % 2 === 0 ? 'Year ' + (index + 1) : '';
                        }
                        return 'Year ' + (index + 1);
                    }
                }
            }
        },
        interaction: {
            intersect: false,
            mode: 'index'
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
        if (!slider) return;
        
        const input = document.getElementById(`${id}Input`);
        const label = document.getElementById(`${id}Value`);
        
        slider.value = defaultValues[id];
        if (input) input.value = defaultValues[id];
        if (label) label.textContent = defaultValues[id];
    });
    
    // Reset step-up toggle to percentage
    document.getElementById('stepUpPercent').checked = true;
    document.getElementById('stepUpPercentLabel').classList.add('active');
    document.getElementById('stepUpFixedLabel').classList.remove('active');
    document.getElementById('percentStepUpContainer').classList.remove('d-none');
    document.getElementById('fixedStepUpContainer').classList.add('d-none');
    
    // Destroy existing chart
    if (chart) {
        chart.destroy();
        chart = null;
    }
}
</script>
@endsection