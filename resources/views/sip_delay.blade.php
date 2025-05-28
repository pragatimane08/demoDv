@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  style="background: url('{{ Vite::asset('resources/theme/img/sipcalculator.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">SIP Delay Calculator</h1>
    </div>
</div>
<!-- Page Header End -->
<!-- Calculator Section -->
<div id="calculator" class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">SIP Delay Calculator</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Smart Tool</div>
            </div>
        </div>
        <div class="card-body p-5">
            <p class="mb-4">This calculator illustrates how much you stand to lose in case you delay the starting of your SIP by even a few months!</p>
            
            <!-- Input Fields with Enhanced Sliders -->
            @php 
            $inputs = [
                [
                    'label' => 'Monthly Investment (₹)',
                    'id' => 'monthlyInvestment',
                    'min' => 1000,
                    'max' => 500000,
                    'step' => 500,
                    'default' => 5000,
                     'marks' => [500, 10000, 100000, 250000, 500000]
                ],
                [
                    'label' => 'Investment Period (Years)',
                    'id' => 'investmentPeriod',
                    'min' => 1,
                    'max' => 50,
                    'step' => 1,
                    'default' => 5,
                    'marks' => [1, 10, 20,30,40,50]
                ],
                [
                    'label' => 'Expected Return (%)',
                    'id' => 'rateOfReturn',
                    'min' => 1,
                    'max' => 55,
                    'step' => 0.5,
                    'default' => 12,
                    'marks' => [1, 10, 20,30,40,50]
                ],
                [
                    'label' => 'Delay in Starting SIP (Months)',
                    'id' => 'delayMonths',
                    'min' => 1,
                    'max' => 120,
                    'step' => 1,
                    'default' => 6,
                    'marks' => [1,24,48,72,96,120]
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

            <!-- Buttons -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="calculateDelay()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
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
                <h3 class="mb-0" style="color: white;">Your SIP Delay Analysis</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Results</div>
            </div>
        </div>
        <div class="card-body p-5">
            <!-- Result -->
            <div id="resultBox">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm mb-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: 1px solid rgba(215, 157, 21, 0.96) !important;">
                    <div class="card-body p-4">
                        <h5 class="text-center mb-4" id="delayResultText"></h5>
                        <div class="row text-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Start Today Value</h6>
                                    <h3 class="mb-0" style="color: #28a745;">₹<span id="normalValue">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Delayed Start Value</h6>
                                    <h3 class="mb-0" style="color: #b8860b;">₹<span id="delayedValue">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Notional Loss</h6>
                                    <h3 class="mb-0" style="color: #dc3545;">₹<span id="lossValue">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart -->
            <div class="mt-5 chart-container" style="position: relative; height:400px;">
                <canvas id="delayChart"></canvas>
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
    box-shadow: 0 2px 10px rgba(169, 123, 17, 0.99);
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
    
    #delayChart {
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
        font-size: 14px;
        padding: 5px;
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
    monthlyInvestment: 5000,
    investmentPeriod: 5,
    rateOfReturn: 12,
    delayMonths: 6
};

let chart = null;

document.addEventListener('DOMContentLoaded', function() {
    initializeSliders();
    window.addEventListener('resize', adjustChartForMobile);
});

function initializeSliders() {
    const sliders = ['monthlyInvestment', 'investmentPeriod', 'rateOfReturn', 'delayMonths'];
    
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
            label.textContent = value;
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
            label.textContent = value;
            track.style.setProperty('--fill-percent', `${percent}%`);
        });
        
        // Initialize values
        const initialPercent = (defaultValues[id] - slider.min) / (slider.max - slider.min) * 100;
        slider.value = defaultValues[id];
        input.value = defaultValues[id];
        label.textContent = defaultValues[id];
        track.style.setProperty('--fill-percent', `${initialPercent}%`);
    });
}

function calculateDelay() {
    const P = parseFloat(document.getElementById('monthlyInvestmentSlider').value);
    const n = parseInt(document.getElementById('investmentPeriodSlider').value);
    const r = parseFloat(document.getElementById('rateOfReturnSlider').value) / 100 / 12;
    const delay = parseInt(document.getElementById('delayMonthsSlider').value);

    const totalMonths = n * 12;
    const normalMonths = totalMonths;
    const delayedMonths = totalMonths - delay;

    // Calculate future value for normal SIP
    const fvNormal = P * (((Math.pow(1 + r, normalMonths) - 1) / r) * (1 + r));
    
    // Calculate future value for delayed SIP
    const fvDelayed = P * (((Math.pow(1 + r, delayedMonths) - 1) / r) * (1 + r));

    const loss = fvNormal - fvDelayed;

    // Format numbers with commas
    document.getElementById('normalValue').textContent = Math.round(fvNormal).toLocaleString('en-IN');
    document.getElementById('delayedValue').textContent = Math.round(fvDelayed).toLocaleString('en-IN');
    document.getElementById('lossValue').textContent = Math.round(loss).toLocaleString('en-IN');
    
    // Set the result text
    document.getElementById('delayResultText').innerHTML = `
        <strong>Delay of <span style="color:#b8860b;">${delay} months</span> in starting your SIP will cause a notional Loss of: 
        <span style="color: #dc3545;">₹${Math.round(loss).toLocaleString('en-IN')}</span> in the final value of your investment.</strong>
    `;

    // Hide calculator and show results
    document.getElementById('calculator').classList.add('d-none');
    document.getElementById('resultSection').classList.remove('d-none');

    // Create chart data for each year
    let labels = [];
    let normalData = [];
    let delayedData = [];
    
    for (let year = 1; year <= n; year++) {
        labels.push("Year " + year);
        
        // Calculate normal value up to this year
        const months = year * 12;
        const normalValue = P * (((Math.pow(1 + r, months) - 1) / r) * (1 + r));
        normalData.push(normalValue);
        
        // Calculate delayed value up to this year (if applicable)
        if (months > delay) {
            const delayedMonths = months - delay;
            const delayedValue = P * (((Math.pow(1 + r, delayedMonths) - 1) / r) * (1 + r));
            delayedData.push(delayedValue);
        } else {
            delayedData.push(0);
        }
    }

    // Create or update chart
    if (chart) chart.destroy();
    
    const ctx = document.getElementById('delayChart').getContext('2d');
    chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Start Today',
                    data: normalData,
                    backgroundColor: '#28a745',
                    borderColor: '#28a745',
                    borderWidth: 1
                },
                {
                    label: 'Delayed Start',
                    data: delayedData,
                    backgroundColor: '#b8860b',
                    borderColor: '#b8860b',
                    borderWidth: 1
                }
            ]
        },
        options: getChartOptions()
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
    const isMobile = window.innerWidth <= 576;
    
    return {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: isMobile ? 'bottom' : 'top',
                labels: {
                    usePointStyle: true,
                    padding: 20,
                    font: {
                        size: isMobile ? 12 : 14
                    },
                    boxWidth: isMobile ? 12 : 16
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
                padding: 12,
                usePointStyle: true,
                bodyFont: {
                    size: isMobile ? 12 : 14
                },
                callbacks: {
                    label: function(context) {
                        return context.dataset.label + ': ₹' + Math.round(context.raw).toLocaleString('en-IN');
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
                        if (isMobile && value >= 100000) return '₹' + (value/100000).toFixed(1) + 'L';
                        if (isMobile && value >= 1000) return '₹' + (value/1000).toFixed(1) + 'K';
                        return '₹' + value.toLocaleString('en-IN');
                    },
                    padding: 10,
                    font: {
                        size: isMobile ? 10 : 12
                    }
                }
            },
            x: {
                grid: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    padding: 10,
                    autoSkip: isMobile,
                    maxRotation: isMobile ? 0 : 45,
                    minRotation: isMobile ? 0 : 45,
                    font: {
                        size: isMobile ? 10 : 12
                    }
                }
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

function resetCalculator() {
    // Reset all inputs to default values
    Object.keys(defaultValues).forEach(id => {
        const slider = document.getElementById(`${id}Slider`);
        const input = document.getElementById(`${id}Input`);
        const label = document.getElementById(`${id}Value`);
        
        slider.value = defaultValues[id];
        input.value = defaultValues[id];
        label.textContent = defaultValues[id];
    });
    
    // Destroy existing chart
    if (chart) {
        chart.destroy();
        chart = null;
    }
    
    // Show calculator if on results page
    if (document.getElementById('resultSection').classList.contains('d-none') === false) {
        showCalculator();
    }
}
</script>
@endsection