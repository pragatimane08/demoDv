@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  style="background: url('{{ Vite::asset('resources/theme/img/sipcalculator.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">SIP Calculator</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Calculator Section -->
<div id="calculator" class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">SIP Calculator</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Smart Tool</div>
            </div>
        </div>
        <div class="card-body p-4 p-md-5">
            <!-- Input Fields with Enhanced Sliders -->
            @php 
            $inputs = [
                [
                    'label' => 'Monthly Investment (₹)',
                    'id' => 'investment',
                    'min' => 500,
                    'max' => 500000,
                    'step' => 500,
                    'default' => 5000,
                    'marks' => [500, 100000, 250000, 500000]
                ],
                [
                    'label' => 'Expected Return (%)',
                    'id' => 'return',
                    'min' => 1,
                    'max' => 50,
                    'step' => 0.1,
                    'default' => 12,
                    'marks' => [1,  10,20, 30, 40,50]
                ],
                [
                    'label' => 'Duration (Years)',
                    'id' => 'duration',
                    'min' => 1,
                    'max' => 50,
                    'step' => 1,
                    'default' => 10,
                    'marks' => [1, 10,20,30,40,50]
                ]
            ];
            @endphp

            @foreach ($inputs as $input)
            <div class="mb-4">
                <div class="d-flex justify-content-between mb-2 mb-md-3">
                    <label class="form-label fw-semibold">{{ $input['label'] }}</label>
                    <span class="badge fs-6 px-2 px-md-3 py-1 slider-value-badge" id="{{ $input['id'] }}Value" style="background-color: #f8e8c0; color: #333; font-weight: 600; box-shadow: 0 2px 5px rgba(169, 123, 17, 0.99);">{{ $input['default'] }}</span>
                </div>
                <div class="d-flex gap-2 gap-md-3 align-items-center position-relative">
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
            <div class="d-grid gap-2 gap-md-3 d-md-flex justify-content-md-center mt-4 mt-md-5">
                <button class="btn btn-lg px-4 px-md-5 rounded-pill glow-on-hover" onclick="calculateSip()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                    <i class="bi bi-calculator me-2"></i> Calculate
                </button>
                <button class="btn btn-outline-dark btn-lg px-4 px-md-5 rounded-pill" onclick="resetCalculator()">
                    <i class="bi bi-arrow-counterclockwise me-2"></i> Reset
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Results Section (Initially Hidden) -->
<div id="results" class="container py-5 d-none">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">SIP Calculation Results</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Results</div>
            </div>
        </div>
        <div class="card-body p-4 p-md-5">
            <!-- Result -->
            <div id="resultBox">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: 1px solid rgba(215, 157, 21, 0.96) !important;">
                    <div class="card-body p-3 p-md-4">
                        <div class="row text-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="p-2 p-md-3">
                                    <h6 class="text-muted mb-2">Total Invested</h6>
                                    <h3 class="mb-0" style="color: #b8860b;">₹<span id="investedAmt">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="p-2 p-md-3">
                                    <h6 class="text-muted mb-2">Estimated Returns</h6>
                                    <h3 class="mb-0" style="color: #28a745;">₹<span id="returnsAmt">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-2 p-md-3">
                                    <h6 class="text-muted mb-2">Total Value</h6>
                                    <h3 class="mb-0" style="color: #8a6d3b;">₹<span id="totalValue">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Details -->
                <div class="mt-3 mt-md-4 card border-0 rounded-4 overflow-hidden shadow-sm">
                    <div class="card-body p-3 p-md-4">
                        <p class="mb-2 mb-md-3" id="resultDetails"></p>
                        <p class="note text-muted"><small>Note: Based on monthly compounding. Returns are not guaranteed and are for illustration purposes only.</small></p>
                    </div>
                </div>
            </div>

            <!-- Chart -->
            <div class="mt-4 mt-md-5 chart-container" style="position: relative; height:400px;">
                <canvas id="sipChart"></canvas>
            </div>

            <!-- Recalculate Button -->
            <div class="d-grid gap-2 gap-md-3 d-md-flex justify-content-md-center mt-4 mt-md-5">
                <button class="btn btn-lg px-4 px-md-5 rounded-pill glow-on-hover" onclick="showCalculator()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                    <i class="bi bi-calculator me-2"></i> Recalculate
                </button>
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
    }

    /* Mobile-Specific Slider Mark Adjustments */
    @media (max-width: 576px) {
        .slider-marks {
            display: flex;
            justify-content: space-between;
        }
        
        .mark-container {
            display: none;
        }
        
        /* Show only key marks on mobile */
        .mark-container:nth-child(1),
        .mark-container:nth-child(3),
        .mark-container:nth-child(5),
        .mark-container:last-child {
            display: flex;
        }
        
        .mark-label {
            font-size: 9px;
            padding: 1px 3px;
            transform: translateX(-50%) rotate(-45deg);
            white-space: nowrap;
        }
        
        .chart-container {
            height: 300px !important;
            margin-bottom: 20px;
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
        
        /* Hide more marks on very small screens */
        .mark-container:nth-child(3) {
            display: none;
        }
        
        .mark-label {
            font-size: 8px;
            padding: 0 2px;
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
    duration: 10
};

let chart = null;

document.addEventListener('DOMContentLoaded', function() {
    initializeSliders();
    window.addEventListener('resize', adjustChartForMobile);
});

function initializeSliders() {
    const sliders = ['investment', 'return', 'duration'];
    
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

function calculateSip() {
    const P = parseFloat(document.getElementById('investmentSlider').value);
    const R = parseFloat(document.getElementById('returnSlider').value);
    const N = parseInt(document.getElementById('durationSlider').value);

    // Calculate monthly rate
    const monthlyRate = R / 12 / 100;
    const totalMonths = N * 12;
    
    // Calculate future value using SIP formula
    const fv = P * ((Math.pow(1 + monthlyRate, totalMonths) - 1) * (1 + monthlyRate)) / monthlyRate;
    const investedAmount = P * totalMonths;
    const estimatedReturns = fv - investedAmount;

    // Format numbers with commas
    document.getElementById('investedAmt').textContent = Math.round(investedAmount).toLocaleString('en-IN');
    document.getElementById('returnsAmt').textContent = Math.round(estimatedReturns).toLocaleString('en-IN');
    document.getElementById('totalValue').textContent = Math.round(fv).toLocaleString('en-IN');
    
    // Set detailed result text
    const resultDetails = document.getElementById('resultDetails');
    resultDetails.innerHTML = `
        If you invest <strong>₹${P.toLocaleString('en-IN')}/-</strong> per month for <strong>${N}</strong> years 
        at an expected return of <strong>${R}%</strong> p.a., your investment will grow to approximately 
        <strong>₹${Math.round(fv).toLocaleString('en-IN')}/-</strong>.
    `;
    
    // Hide calculator and show results
    document.getElementById('calculator').classList.add('d-none');
    document.getElementById('results').classList.remove('d-none');

    // Prepare data for chart
    const labels = Array.from({length: N}, (_, i) => `Year ${i + 1}`);
    const investedData = [];
    const valueData = [];
    
    for (let year = 1; year <= N; year++) {
        const months = year * 12;
        const yearlyInvested = P * months;
        const yearlyValue = P * ((Math.pow(1 + monthlyRate, months) - 1) * (1 + monthlyRate)) / monthlyRate;
        
        investedData.push(Math.round(yearlyInvested));
        valueData.push(Math.round(yearlyValue));
    }

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
                    data: valueData,
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
                    data: investedData,
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
        options: getChartOptions()
    });
    
    // Adjust chart for mobile if needed
    adjustChartForMobile();
    
    // Smooth scroll to results
    document.getElementById('results').scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function showCalculator() {
    // Show calculator and hide results
    document.getElementById('calculator').classList.remove('d-none');
    document.getElementById('results').classList.add('d-none');
    
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
}
</script>
@endsection