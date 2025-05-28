@extends('layouts.app')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/sipcalculator.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">SIP+Lumpsum Calculator</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Financial Calculator</a></li>
                  <li class="breadcrumb-item"><a href="#">SIP+Lumpsum Calculator</a></li>
              </ol>
           </nav>
      </div> -->
   </div>
</div>

<!-- lumpsum start -->
<!-- Page Header End -->

<!-- Calculator Section -->
<div id="calculator" class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">SIP+Lumpsum Calculator</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Smart Tool</div>
            </div>
        </div>
        <div class="card-body p-5">
            <p class="mb-4">This calculator will help you visualize accumulation of corpus if you combine monthly SIP with Lumpsum investment.</p>
            
            <!-- Input Fields with Enhanced Sliders -->
            @php 
            $inputs = [
                [
                    'label' => 'One Time Investment Amount (₹)',
                    'id' => 'lumpsum',
                    'min' => 1000,
                    'max' => 10000000,
                    'step' => 1000,
                    'default' => 200000,
                    'marks' => [1000,2500000, 5500000, 10000000]
                ],
                [
                    'label' => 'Monthly Investment (₹)',
                    'id' => 'monthly',
                    'min' => 0,
                    'max' => 500000,
                    'step' => 0,
                    'default' => 2000,
                   'marks' => [0,100000, 250000, 500000]
                ],
                [
                    'label' => 'Expected Rate of Return (% p.a)',
                    'id' => 'rate',
                    'min' => 1,
                    'max' => 50,
                    'step' => 0.1,
                    'default' => 12,
                    'marks' => [1,10,20,30,40,50]
                ],
                [
                    'label' => 'Period of Investment (years)',
                    'id' => 'years',
                    'min' => 1,
                    'max' => 50,
                    'step' => 1,
                    'default' => 10,
                    'marks' => [1, 10,20,30,40,50]
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

            <!-- Error Message -->
            <div id="error" class="error mb-3 text-danger fw-semibold"></div>

            <!-- Buttons -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="calculateInvestment()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
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
                <h3 class="mb-0" style="color: white;">Your Investment Results</h3>
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
                                    <h6 class="text-muted mb-2">Lumpsum Investment Grows To</h6>
                                    <h3 class="mb-0" style="color: #b8860b;">₹<span id="lumpsum-result">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Total Monthly Invested</h6>
                                    <h3 class="mb-0" style="color: #28a745;">₹<span id="monthly-invested">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Monthly Investment Grows To</h6>
                                    <h3 class="mb-0" style="color: #8a6d3b;">₹<span id="monthly-result">0</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Total Invested Amount</h6>
                                    <h3 class="mb-0" style="color: #343a40;">₹<span id="total-invested">0</span></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3">
                                    <h6 class="text-muted mb-2">Total Future Value</h6>
                                    <h3 class="mb-0" style="color: #dc3545;">₹<span id="total-value">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart -->
            <div class="mt-5 chart-container" style="position: relative; height:400px;">
                <canvas id="investmentChart"></canvas>
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

    /* Chart Styles */
    .chart-container {
        min-height: 300px;
    }
    
    @media (max-width: 768px) {
        .chart-container {
            height: 350px !important;
        }
    }
    
    @media (max-width: 576px) {
        .chart-container {
            height: 320px !important;
            margin-bottom: 15px;
        }
    }
    
    @media (max-width: 400px) {
        .chart-container {
            height: 280px !important;
        }
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

    /* Mobile-Specific Styles */
    @media (max-width: 576px) {
        .chart-container {
            height: 300px !important;
            margin-bottom: 20px;
        }
        .gap-3 {
            gap: 1rem !important;
        }
        
        #investmentChart {
            max-height: 280px;
        }
        
        /* Adjust result boxes for mobile */
        #resultBox .row {
            flex-direction: column;
        }
        
        #resultBox .col-md-4, #resultBox .col-md-6 {
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
    lumpsum: 200000,
    monthly: 2000,
    rate: 12.0,
    years: 10
};

let chart = null;

document.addEventListener('DOMContentLoaded', function() {
    initializeSliders();
    window.addEventListener('resize', adjustChartForMobile);
});

function initializeSliders() {
    const sliders = ['lumpsum', 'monthly', 'rate', 'years'];
    
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
            label.textContent = id === 'lumpsum' || id === 'monthly' ? 
                formatCurrency(value) : 
                (id === 'rate' ? parseFloat(value).toFixed(1) : value);
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
            label.textContent = id === 'lumpsum' || id === 'monthly' ? 
                formatCurrency(value) : 
                (id === 'rate' ? parseFloat(value).toFixed(1) : value);
            track.style.setProperty('--fill-percent', `${percent}%`);
        });
        
        // Initialize values
        const initialPercent = (defaultValues[id] - slider.min) / (slider.max - slider.min) * 100;
        slider.value = defaultValues[id];
        input.value = defaultValues[id];
        label.textContent = id === 'lumpsum' || id === 'monthly' ? 
            formatCurrency(defaultValues[id]) : 
            (id === 'rate' ? parseFloat(defaultValues[id]).toFixed(1) : defaultValues[id]);
        track.style.setProperty('--fill-percent', `${initialPercent}%`);
    });
}

function calculateInvestment() {
    // Clear previous errors
    document.getElementById('error').textContent = '';
    
    try {
        // Get input values
        const lumpsum = parseFloat(document.getElementById('lumpsumSlider').value);
        const monthly = parseFloat(document.getElementById('monthlySlider').value);
        const rate = parseFloat(document.getElementById('rateSlider').value);
        const years = parseInt(document.getElementById('yearsSlider').value);
        
        // Validate inputs
        if (isNaN(lumpsum) || lumpsum < 0) {
            throw new Error("Please enter a valid lump sum amount");
        }
        if (isNaN(monthly) || monthly < 0) {
            throw new Error("Please enter a valid monthly investment amount");
        }
        if (isNaN(rate) || rate <= 0) {
            throw new Error("Please enter a valid positive rate of return");
        }
        if (isNaN(years) || years <= 0) {
            throw new Error("Please enter a valid investment period");
        }
        
        // Calculate results
        const monthlyRate = rate / 100 / 12;
        const months = years * 12;
        
        // Lumpsum calculation (compound interest)
        const lumpsumResult = lumpsum * Math.pow(1 + (rate / 100), years);
        
        // Monthly SIP calculation (future value of annuity)
        let sipResult = 0;
        if (monthlyRate > 0) {
            sipResult = monthly * ((Math.pow(1 + monthlyRate, months) - 1) / monthlyRate) * (1 + monthlyRate);
        } else {
            sipResult = monthly * months;
        }
        
        // Total monthly invested
        const totalMonthlyInvested = monthly * months;
        const totalInvested = lumpsum + totalMonthlyInvested;
        const totalValue = lumpsumResult + sipResult;
        
        // Display results
        document.getElementById('lumpsum-result').textContent = formatCurrency(lumpsumResult);
        document.getElementById('monthly-invested').textContent = formatCurrency(totalMonthlyInvested);
        document.getElementById('monthly-result').textContent = formatCurrency(sipResult);
        document.getElementById('total-invested').textContent = formatCurrency(totalInvested);
        document.getElementById('total-value').textContent = formatCurrency(totalValue);
        
        // Hide calculator and show results
        document.getElementById('calculator').classList.add('d-none');
        document.getElementById('resultSection').classList.remove('d-none');
        
        // Prepare data for chart
        const labels = [];
        const lumpsumData = [];
        const sipData = [];
        const totalData = [];
        
        for (let year = 1; year <= years; year++) {
            labels.push(`Year ${year}`);
            
            // Lumpsum value at each year
            const lumpsumValue = lumpsum * Math.pow(1 + (rate / 100), year);
            lumpsumData.push(lumpsumValue);
            
            // SIP value at each year
            const sipMonths = year * 12;
            let sipValue = 0;
            if (monthlyRate > 0) {
                sipValue = monthly * ((Math.pow(1 + monthlyRate, sipMonths) - 1) / monthlyRate) * (1 + monthlyRate);
            } else {
                sipValue = monthly * sipMonths;
            }
            sipData.push(sipValue);
            
            // Total value
            totalData.push(lumpsumValue + sipValue);
        }
        
        // Create or update chart
        createOrUpdateChart(labels, lumpsumData, sipData, totalData);
        
        // Smooth scroll to results
        document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'center' });
    } catch (error) {
        document.getElementById('error').textContent = error.message;
    }
}

function createOrUpdateChart(labels, lumpsumData, sipData, totalData) {
    const ctx = document.getElementById('investmentChart').getContext('2d');
    const isMobile = window.innerWidth <= 768;
    
    if (chart) {
        // Update existing chart data
        chart.data.labels = labels;
        chart.data.datasets[0].data = lumpsumData;
        chart.data.datasets[1].data = sipData;
        chart.data.datasets[2].data = totalData;
        
        // Update options for mobile/desktop
        updateChartOptions(isMobile);
        chart.update();
    } else {
        // Create new chart
        chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Lumpsum Investment',
                        data: lumpsumData,
                        borderColor: '#d0a94e',
                        backgroundColor: 'rgba(208, 169, 78, 0.05)',
                        borderWidth: isMobile ? 2 : 2,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#d0a94e',
                        pointBorderWidth: isMobile ? 1 : 2,
                        pointRadius: isMobile ? 3 : 4,
                        pointHoverRadius: isMobile ? 4 : 6,
                        fill: true,
                        tension: 0.3
                    },
                    {
                        label: 'Monthly SIP',
                        data: sipData,
                        borderColor: '#28a745',
                        backgroundColor: 'rgba(40, 167, 69, 0.05)',
                        borderWidth: isMobile ? 2 : 2,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#28a745',
                        pointBorderWidth: isMobile ? 1 : 2,
                        pointRadius: isMobile ? 3 : 4,
                        pointHoverRadius: isMobile ? 4 : 6,
                        fill: true,
                        tension: 0.3
                    },
                    {
                        label: 'Total Value',
                        data: totalData,
                        borderColor: '#dc3545',
                        backgroundColor: 'rgba(220, 53, 69, 0.05)',
                        borderWidth: isMobile ? 3 : 3,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#dc3545',
                        pointBorderWidth: isMobile ? 2 : 2,
                        pointRadius: isMobile ? 3 : 4,
                        pointHoverRadius: isMobile ? 4 : 6,
                        fill: true,
                        tension: 0.3
                    }
                ]
            },
            options: getChartOptions(isMobile)
        });
    }
}

function updateChartOptions(isMobile) {
    if (!chart) return;
    
    chart.options = getChartOptions(isMobile);
    
    // Update dataset styles for mobile/desktop
    chart.data.datasets.forEach((dataset, index) => {
        if (index === 2) { // Total Value dataset
            dataset.borderWidth = isMobile ? 3 : 3;
            dataset.pointBorderWidth = isMobile ? 2 : 2;
        } else {
            dataset.borderWidth = isMobile ? 2 : 2;
            dataset.pointBorderWidth = isMobile ? 1 : 2;
        }
        dataset.pointRadius = isMobile ? 3 : 4;
        dataset.pointHoverRadius = isMobile ? 4 : 6;
    });
}

function getChartOptions(isMobile) {
    return {
        responsive: true,
        maintainAspectRatio: true,
        aspectRatio: isMobile ? 1.5 : 2,
        plugins: {
            legend: {
                position: 'top',
                labels: {
                    usePointStyle: true,
                    padding: isMobile ? 10 : 20,
                    font: {
                        size: isMobile ? 12 : 14
                    },
                    boxWidth: isMobile ? 10 : 12
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
                padding: isMobile ? 8 : 12,
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
                        if (value >= 10000000) return '₹' + (value/10000000).toFixed(1) + 'Cr';
                        if (value >= 100000) return '₹' + (value/100000).toFixed(1) + 'L';
                        if (value >= 1000) return '₹' + (value/1000).toFixed(1) + 'K';
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
                    autoSkip: true,
                    maxRotation: isMobile ? 0 : 45,
                    minRotation: isMobile ? 0 : 45,
                    font: {
                        size: isMobile ? 10 : 12
                    }
                }
            }
        },
        interaction: {
            mode: 'nearest',
            axis: 'x',
            intersect: false
        }
    };
}

function adjustChartForMobile() {
    if (chart) {
        const isMobile = window.innerWidth <= 768;
        updateChartOptions(isMobile);
        chart.update();
    }
}

function showCalculator() {
    // Hide results and show calculator
    document.getElementById('resultSection').classList.add('d-none');
    document.getElementById('calculator').classList.remove('d-none');
    
    // Smooth scroll to calculator
    document.getElementById('calculator').scrollIntoView({ behavior: 'smooth', block: 'center' });
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
        label.textContent = id === 'lumpsum' || id === 'monthly' ? 
            formatCurrency(defaultValues[id]) : 
            (id === 'rate' ? parseFloat(defaultValues[id]).toFixed(1) : defaultValues[id]);
        
        // Update slider track
        const min = parseFloat(slider.min);
        const max = parseFloat(slider.max);
        const percent = (defaultValues[id] - min) / (max - min) * 100;
        track.style.setProperty('--fill-percent', `${percent}%`);
    });
    
    // Clear error
    document.getElementById('error').textContent = '';
    
    // Destroy existing chart
    if (chart) {
        chart.destroy();
        chart = null;
    }
}

function formatCurrency(amount) {
    // Format number with commas and round to nearest integer
    return Math.round(amount).toLocaleString('en-IN');
}
</script>
@endsection