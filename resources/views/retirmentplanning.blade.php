@extends('layouts.app')
@section('content')
  <!-- Page Header Start -->
      <!-- Page Header Start -->
      <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite:: asset('resources/theme/img/retirmentplanninghd.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Retirement Planning</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item"><a href="#">Retirement Planning</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->

   <!-- retirement-saving-info-container-start -->
   <div class="retirement-planning-section1">
    <div class="retirement-planning-container">
        <div class="retirement-planning-content">
            <h2 class="retirement-planning-heading">Retirement Planning</h2>
            <p class="retirement-planning-text">
                Retirement saving is a much sought and discussed subject in our time. It is said that retirement assessment is never too late, though ideal if you start it at a very young age. Retirement is the ultimate reality that happens to a working professional, and it should be the most enjoyable phase of an individual. Effective retirement assessment gives individuals the benefit of retaining their financial independence even after their work life. Thus, retirement assessment is as important as your education and marriage. We must understand that the future largely depends on the choices that we make today. An individual will be able to maintain high standards of living with the help of effective retirement assessment.
            </p>
            <a href="{{ route('schedulemeeting') }}" class="schedule-meeting-btn">Schedule Meeting</a>
        </div>
        <div class="retirement-planning-image">
            <img src="{{Vite::asset('resources/theme/img/retirement2.webp')}}" alt="Elderly couple enjoying a peaceful retirement with smart
investments.">
        </div>
    </div>
</div>

  <!-- retirement-saving-info-container-end -->

  <!-- Retirement-Saving-feature-start -->
  <section class="Retirement-Saving-feature">
        <div class="Retirement-Saving-feature-image-container">
            <img src="{{Vite::asset('resources/theme/img/retirement-planning-feature.webp')}}" alt="Elderly couple enjoying a peaceful retirement with smart
investments.">
        </div>
        <div class="Retirement-Saving-feature-content">
            <span class="Retirement-Saving-feature-subheading">About Retirement Saving</span>
            <h2 class="Retirement-Saving-feature-heading">Features of <br> Retirement Saving</h2>
            <p class="Retirement-Saving-feature-description">
                We must overcome one obstacle which is that no clue is available with us for how long we are going to live. There are certain things for an effective retirement like you must decide how much money you require to live a comfortable life after retirement and ascertain how much you require investing to achieve this goal.
                You should invest in a right investment cum retirement plan to build determined corpus.
                Most of the retirement plans offered in the market either provide you with a fixed monthly income or a lump sum after you retire from your professional life.
            </p>
            <a href="{{ route('schedulemeeting') }}" class="schedule-meeting-btn">Schedule Meeting</a>
        </div>
    </section>
 <!-- Retirement-Saving-feature-end -->

<style>


</style>
<!-- retirement code start -->
 
<div class="retirement-container">
    <div class="retirement-content">
    <h3>Key Benefits of Retirement Planning</h3>
        <p>Retirement plans helps us to make large corpuses that can be utilized to achieve any financial goal after we stop working.An individual can start investing with a very low sum at a very early age. Retirement assesment starts at a point when you know your life goals and then to accompany these goals with a sound financial plan that helps you to meet these objectives upon retirement.</p>
        <div class="infographic-container">
    <!-- Start Early -->
    <div class="infographic-item">
      <div class="circle-ret">
        <img src="img/time.webp" alt="Clock Icon">
      </div>
      <div class="title-ret info-below">Start Early</div>
      <div class="description-ret info-below">An early start gives more time for your money to grow.</div>
     
    </div>
    <!-- Save More -->
    <div class="infographic-item">
      <div class="title-ret info-above">Save More</div>
      <div class="description-ret info-above">Try to save at least 20% of your income every month.</div>
      <div class="circle-ret">
        <img src="img/compound-interest.webp" alt="Save Icon">
      </div>
     
    </div>

    <!-- Factor in Inflation -->
    <div class="infographic-item">
      <div class="circle-ret">
        <img src="img/asymmetry.webp" alt="Inflation Icon">
      </div>
      <div class="title-ret info-below">Factor in Inflation</div>
      <div class="description-ret info-below">Ensure you don't end up having an inadequate corpus.</div>
     
    </div>

    <!-- Gauge Risk Appetite -->
    <div class="infographic-item">
      <div class="title-ret info-above">Gauge Your Risk Appetite</div>
      <div class="description-ret info-above">Choose financial instruments to accumulate the desired wealth.</div>
      <div class="circle-ret">
        <img src="img/danger.webp" alt="Risk Icon">
      </div>
    </div>
  </div>

     <!-- retirement-section-imp-container-start -->
  <div class="retirement-section-imp-container">
    <div class="retirement-section-imp-box">
        <p class="retirement-section-imp-text">
            Accumulation of wealth through SIPs of Mutual Funds & recurring investment in equities, 
            Retirement Solutions of Life Insurance Companies, Bonds, Fixed Deposits, and NPS are 
            essential components for various stages of Retirement Planning.
        </p>
    </div>
</div>
<!-- retirement-section-imp-container-end -->
    </div>

   
</div>
</div>
<h1 class="why-planning-h2"> Retirement Calculator</h1>

<!-- Calculator Section -->
<div id="calculator" class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 850px; margin: auto;">
        <div class="card-header bg-golden py-4" style="background-color: #b8860b;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0" style="color: white;">Retirement Calculator</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Smart Tool</div>
            </div>
        </div>
        <div class="card-body p-5">
            <!-- Input Fields with Enhanced Sliders -->
            @php 
            $inputs = [
                [
                    'label' => 'Current Age (Years)',
                    'id' => 'currentAge',
                    'min' => 18,
                    'max' => 70,
                    'step' => 1,
                    'default' => 30,
                    'marks' => [18, 25, 30, 40, 50, 60, 70]
                ],
                [
                    'label' => 'Retirement Age (Years)',
                    'id' => 'retirementAge',
                    'min' => 25,
                    'max' => 80,
                    'step' => 1,
                    'default' => 60,
                    'marks' => [25, 35, 45, 55, 65, 75, 80]
                ],
                [
                    'label' => 'Monthly Expense (₹)',
                    'id' => 'monthlyExpense',
                    'min' => 1000,
                    'max' => 500000,
                    'step' => 1000,
                    'default' => 30000,
                    'marks' => [1000, 150000,350000, 500000]
                ],
                [
                    'label' => 'Inflation Rate (%)',
                    'id' => 'inflationRate',
                    'min' => 1,
                    'max' => 15,
                    'step' => 0.1,
                    'default' => 6,
                    'marks' => [1, 3, 5, 7, 9, 11, 13, 15]
                ],
                [
                    'label' => 'Monthly Savings (₹)',
                    'id' => 'monthlySavings',
                    'min' => 0,
                    'max' => 500000,
                    'step' => 1000,
                    'default' => 5000,
                    'marks' => [0, 150000,350000, 500000]
                ],
                [
                    'label' => 'Existing Corpus (₹)',
                    'id' => 'existingCorpus',
                    'min' => 0,
                    'max' => 10000000,
                    'step' => 10000,
                    'default' => 100000,
                    'marks' => [0,2000000, 5000000, 10000000]
                ],
                [
                    'label' => 'Pre-Return Rate (%)',
                    'id' => 'preRetReturn',
                    'min' => 1,
                    'max' => 50,
                    'step' => 0.1,
                    'default' => 12,
                    'marks' => [1,10,20,30,40,50]
                ],
                [
                    'label' => 'Post-Return Rate (%)',
                    'id' => 'postRetReturn',
                    'min' => 1,
                    'max' => 50,
                    'step' => 0.1,
                    'default' => 12,
                    'marks' => [1,10,20,30,40,50]
                ],
                [
                    'label' => 'Life Expectancy (Years)',
                    'id' => 'lifeExpectancy',
                    'min' => 60,
                    'max' => 100,
                    'step' => 1,
                    'default' => 80,
                    'marks' => [60,65, 70, 75, 80, 85, 90, 95, 100]
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
                <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="calculateRetirement()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
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
                <h3 class="mb-0" style="color: white;">Your Retirement Plan Results</h3>
                <div class="badge fs-6 px-3 py-2" style="background-color: white; color: #b8860b;">Analysis</div>
            </div>
        </div>
        <div class="card-body p-5">
            <!-- Result -->
            <div id="resultBox">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: 1px solid rgba(215, 157, 21, 0.96) !important;">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4" style="color: #b8860b;">Retirement Plan Summary</h4>
                        
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">Years left for retirement</td>
                                        <td class="text-end" id="yearsLeft">0 years</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Monthly expenses after retirement</td>
                                        <td class="text-end" id="expenseAfterRetirement">₹0</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Targeted savings at retirement</td>
                                        <td class="text-end" id="targetCorpus">₹0</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Future value of current savings</td>
                                        <td class="text-end" id="futureSavings">₹0</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Growth of existing corpus</td>
                                        <td class="text-end" id="existingGrowth">₹0</td>
                                    </tr>
                                    <tr class="border-top">
                                        <td class="fw-bold">Total savings at retirement</td>
                                        <td class="text-end fw-bold" id="totalCorpus">₹0</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Shortfall in savings</td>
                                        <td class="text-end text-danger fw-semibold" id="shortfall">₹0</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">One-time extra required</td>
                                        <td class="text-end" id="oneTimeExtra">₹0</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Extra monthly savings required</td>
                                        <td class="text-end" id="monthlyExtra">₹0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Charts Section -->
            <div class="mt-5">
                <div class="row g-4">
                    <!-- Corpus Comparison Donut Chart -->
                    <div class="col-lg-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100" style="border: 1px solid rgba(215, 157, 21, 0.2) !important;">
                            <div class="card-body p-4">
                                <h5 class="text-center mb-4" style="color: #b8860b;">Corpus Comparison</h5>
                                <div class="chart-container" style="position: relative; height: 300px;">
                                    <canvas id="corpusDonutChart"></canvas>
                                </div>
                                <div id="donutLegend" class="mt-3 d-flex justify-content-center flex-wrap"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Savings Growth Line Chart -->
                    <div class="col-lg-6">
                        <div class="card border-0 rounded-4 shadow-sm h-100" style="border: 1px solid rgba(215, 157, 21, 0.2) !important;">
                            <div class="card-body p-4">
                                <h5 class="text-center mb-4" style="color: #b8860b;">Savings Growth Projection</h5>
                                <div class="chart-container" style="position: relative; height: 300px;">
                                    <canvas id="savingsLineChart"></canvas>
                                </div>
                                <div class="mt-3 text-center">
                                    <small class="text-muted">Projected growth from current age to retirement</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recalculate Button -->
            <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                <button class="btn btn-lg px-5 rounded-pill glow-on-hover" onclick="showCalculator()" style="background-color: #b8860b; border-color: #b8860b; color: white;">
                    <i class="bi bi-arrow-repeat me-2"></i> Recalculate
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

/* Table Styles */
.table {
    margin-bottom: 0;
}

.table-borderless tbody tr:not(:last-child) {
    border-bottom: 1px solid #e9ecef;
}

/* Enhanced Chart Styles */
.chart-container {
    position: relative;
    height: 300px;
}

/* Donut Chart Legend */
.legend-item {
    display: flex;
    align-items: center;
    margin-right: 15px;
    margin-bottom: 8px;
}

.legend-color {
    width: 16px;
    height: 16px;
    border-radius: 3px;
    margin-right: 8px;
    border: 2px solid rgba(255,255,255,0.3);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .chart-container {
        height: 250px;
    }
}

@media (max-width: 576px) {
    .chart-container {
        height: 220px;
    }
    
    .legend-item {
        margin-right: 10px;
        margin-bottom: 5px;
        font-size: 14px;
    }
    
    .legend-color {
        width: 14px;
        height: 14px;
    }
    
    .gap-3 {
    gap: 1rem !important;
    }
    
    /* Mobile-Specific Chart Styles */
    .chart-container {
        height: 300px !important;
        margin-bottom: 20px;
    }
    
    /* Adjust result boxes for mobile */
    #resultBox .row {
        flex-direction: column;
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
    
    .table td {
        padding: 8px 4px;
        font-size: 14px;
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
    
    .table td {
        padding: 6px 2px;
        font-size: 12px;
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
    currentAge: 30,
    retirementAge: 60,
    monthlyExpense: 30000,
    inflationRate: 6,
    monthlySavings: 5000,
    existingCorpus: 100000,
    preRetReturn: 12,
    postRetReturn: 7,
    lifeExpectancy: 80
};

let donutChart = null;
let lineChart = null;

document.addEventListener('DOMContentLoaded', function() {
    initializeSliders();
    window.addEventListener('resize', adjustChartsForMobile);
});

function initializeSliders() {
    const sliders = Object.keys(defaultValues);
    
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

function formatINR(n) {
    return "₹" + n.toLocaleString("en-IN", { maximumFractionDigits: 0 });
}

function calculateRetirement() {
    const age = +document.getElementById("currentAgeSlider").value;
    const retireAge = +document.getElementById("retirementAgeSlider").value;
    const monthlyExpense = +document.getElementById("monthlyExpenseSlider").value;
    const inflationRate = +document.getElementById("inflationRateSlider").value / 100;
    const monthlySavings = +document.getElementById("monthlySavingsSlider").value;
    const existingCorpus = +document.getElementById("existingCorpusSlider").value;
    const preReturn = +document.getElementById("preRetReturnSlider").value / 100;
    const postReturn = +document.getElementById("postRetReturnSlider").value / 100;
    const lifeExpect = +document.getElementById("lifeExpectancySlider").value;

    const yearsToRetire = retireAge - age;
    const yearsAfterRetire = lifeExpect - retireAge;

    // Step 1: Monthly expense at retirement age adjusted for inflation
    const expenseAfterRetire = monthlyExpense * Math.pow(1 + inflationRate, yearsToRetire);
    const yearlyExpenseAtRetire = expenseAfterRetire * 12;

    // Step 2: Targeted corpus using real rate (postReturn - inflationRate)
    const realReturn = ((1 + postReturn) / (1 + inflationRate)) - 1;
    const targetCorpus = yearlyExpenseAtRetire * (1 - Math.pow(1 + realReturn, -yearsAfterRetire)) / realReturn;

    // Step 3: Future value of monthly savings
    const fvMonthly = monthlySavings * ((Math.pow(1 + preReturn / 12, yearsToRetire * 12) - 1) / (preReturn / 12));

    // Step 4: Future value of existing corpus
    const fvCorpus = existingCorpus * Math.pow(1 + preReturn, yearsToRetire);

    const totalCorpus = fvMonthly + fvCorpus;
    const shortfall = Math.max(0, targetCorpus - totalCorpus);

    // Step 5: Extra monthly savings needed to fill the shortfall
    const monthlyExtra = shortfall > 0
        ? shortfall / ((Math.pow(1 + preReturn / 12, yearsToRetire * 12) - 1) / (preReturn / 12))
        : 0;

    // Step 6: One-time lump sum needed today
    const oneTimeExtra = shortfall > 0
        ? shortfall / Math.pow(1 + preReturn, yearsToRetire)
        : 0;

    // Display results
    document.getElementById("yearsLeft").innerText = yearsToRetire + " years";
    document.getElementById("expenseAfterRetirement").innerText = formatINR(Math.round(expenseAfterRetire));
    document.getElementById("targetCorpus").innerText = formatINR(Math.round(targetCorpus));
    document.getElementById("futureSavings").innerText = formatINR(Math.round(fvMonthly));
    document.getElementById("existingGrowth").innerText = formatINR(Math.round(fvCorpus));
    document.getElementById("totalCorpus").innerText = formatINR(Math.round(totalCorpus));
    document.getElementById("shortfall").innerText = formatINR(Math.round(shortfall));
    document.getElementById("oneTimeExtra").innerText = formatINR(Math.round(oneTimeExtra));
    document.getElementById("monthlyExtra").innerText = formatINR(Math.round(monthlyExtra));

    // Show results and hide calculator
    document.getElementById("calculator").classList.add("d-none");
    document.getElementById("resultSection").classList.remove("d-none");

    // Create the new charts
    createDonutChart(totalCorpus, targetCorpus, shortfall);
    createLineChart(age, retireAge, existingCorpus, monthlySavings, preReturn);
    
    // Smooth scroll to results
    document.getElementById("resultSection").scrollIntoView({ behavior: "smooth", block: "center" });
}

function showCalculator() {
    // Show calculator and hide results
    document.getElementById("calculator").classList.remove("d-none");
    document.getElementById("resultSection").classList.add("d-none");
    
    // Destroy charts
    if (donutChart) {
        donutChart.destroy();
        donutChart = null;
    }
    
    if (lineChart) {
        lineChart.destroy();
        lineChart = null;
    }
    
    // Clear legend
    document.getElementById('donutLegend').innerHTML = '';
    
    // Scroll to calculator
    document.getElementById("calculator").scrollIntoView({ behavior: "smooth", block: "center" });
}

function createDonutChart(yourCorpus, neededCorpus, shortfall) {
    const ctx = document.getElementById('corpusDonutChart').getContext('2d');
    if (donutChart) donutChart.destroy();
    
    const hasShortfall = shortfall > 0;
    const labels = hasShortfall 
        ? ['Your Corpus', 'Required Corpus', 'Shortfall'] 
        : ['Your Corpus', 'Required Corpus'];
    
    const data = hasShortfall 
        ? [yourCorpus, neededCorpus - shortfall, shortfall] 
        : [yourCorpus, neededCorpus];
    
    const backgroundColors = hasShortfall 
        ? ['#d0a94e', '#5cb85c', '#d9534f'] 
        : ['#d0a94e', '#5cb85c'];
    
    const borderColors = hasShortfall 
        ? ['#b8860b', '#4cae4c', '#d43f3a'] 
        : ['#b8860b', '#4cae4c'];

    donutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 2,
                cutout: '65%'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.raw || 0;
                            return `${label}: ${formatINR(value)}`;
                        }
                    }
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    });

    // Create custom legend
    const legendContainer = document.getElementById('donutLegend');
    legendContainer.innerHTML = '';
    
    labels.forEach((label, index) => {
        const legendItem = document.createElement('div');
        legendItem.className = 'legend-item';
        
        const colorBox = document.createElement('div');
        colorBox.className = 'legend-color';
        colorBox.style.backgroundColor = backgroundColors[index];
        
        const text = document.createElement('span');
        text.textContent = `${label}: ${formatINR(data[index])}`;
        
        legendItem.appendChild(colorBox);
        legendItem.appendChild(text);
        legendContainer.appendChild(legendItem);
    });
}

function createLineChart(currentAge, retireAge, existingCorpus, monthlySavings, preReturn) {
    const ctx = document.getElementById('savingsLineChart').getContext('2d');
    if (lineChart) lineChart.destroy();
    
    const years = retireAge - currentAge;
    const labels = [];
    const corpusData = [];
    const savingsData = [];
    
    let corpus = existingCorpus;
    let totalSavings = 0;
    
    // Calculate data points for each year
    for (let i = 0; i <= years; i++) {
        const age = currentAge + i;
        labels.push(age);
        
        // Calculate corpus growth
        corpus = corpus * (1 + preReturn);
        corpusData.push(corpus);
        
        // Calculate savings growth
        if (i > 0) {
            totalSavings += monthlySavings * 12 * Math.pow(1 + preReturn, years - i);
        }
        savingsData.push(totalSavings);
    }
    
    lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Existing Corpus Growth',
                    data: corpusData,
                    borderColor: '#d0a94e',
                    backgroundColor: 'rgba(208, 169, 78, 0.1)',
                    borderWidth: 3,
                    tension: 0.3,
                    fill: true
                },
                {
                    label: 'Monthly Savings Growth',
                    data: savingsData,
                    borderColor: '#5cb85c',
                    backgroundColor: 'rgba(92, 184, 92, 0.1)',
                    borderWidth: 3,
                    tension: 0.3,
                    fill: true
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: window.innerWidth <= 576 ? 12 : 14
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.dataset.label || '';
                            const value = context.raw || 0;
                            return `${label}: ${formatINR(value)}`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Age',
                        font: {
                            weight: 'bold'
                        }
                    },
                    grid: {
                        display: false
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Amount (₹)',
                        font: {
                            weight: 'bold'
                        }
                    },
                    ticks: {
                        callback: function(value) {
                            if (value >= 10000000) return '₹' + (value/10000000).toFixed(1) + 'Cr';
                            if (value >= 100000) return '₹' + (value/100000).toFixed(1) + 'L';
                            if (value >= 1000) return '₹' + (value/1000).toFixed(1) + 'K';
                            return '₹' + value.toLocaleString('en-IN');
                        }
                    }
                }
            }
        }
    });
}

function adjustChartsForMobile() {
    if (donutChart) donutChart.update();
    if (lineChart) lineChart.update();
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
        label.textContent = defaultValues[id];
        track.style.setProperty('--fill-percent', `${initialPercent}%`);
    });
    
    // Destroy charts if they exist
    if (donutChart) {
        donutChart.destroy();
        donutChart = null;
    }
    
    if (lineChart) {
        lineChart.destroy();
        lineChart = null;
    }
    
    // Clear legend
    document.getElementById('donutLegend').innerHTML = '';
}
</script>


    <script src="js/main.js"></script>
@endsection