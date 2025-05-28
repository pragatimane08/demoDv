<!-- @extends('layouts.app') If you have a layout -->


@section('content')
     
<!-- schudle-meeting start --> 
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/schedulemeetingheader.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Schedule Meeting</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Schedule Meeting</a></li>
                  <li class="breadcrumb-item"><a href="#">Schedule Meeting</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>

<!-- schudle-meeting start --> 
<!-- Schedule Meeting Section -->
<!-- Schedule Meeting Section -->
<div class="schedule-meeting-container">
    <!-- Left Panel with Image -->
    <div class="schedule-image">
        <img src="{{ Vite::asset('resources/theme/img/schedule-meeting.webp') }}" alt="Schedule a Meeting">
    </div>

    <!-- Right Panel (Form) -->
    <div class="schedule-form">
        <h2>Schedule a Meeting</h2>
        <p>Let's connect and discuss your requirements!</p>

        <!-- Form -->
        <form method="POST" action="{{ route('schedule.meeting') }}" onsubmit="return validateForm()">
            @csrf

            <!-- Name Field -->
            <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" required oninput="validateName(this)">
<div class="error-message" id="name-error"></div>
<!-- Email Field -->
            @error('name')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <!-- Email Field -->
            <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required>
            <div class="error-message" id="email-error"></div>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <!-- Phone Field -->
            <input type="tel" id="phone" name="phone" placeholder="Your Phone" value="{{ old('phone') }}" required pattern="\d{10}" maxlength="10" oninput="validatePhoneNumber(this)">
            <div class="error-message" id="phone-error"></div>
            @error('phone')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <!-- Date Field -->
            <label class="schedule-label" for="date">Meeting Date</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}" required>
            <div class="error-message" id="date-error"></div>
            @error('date')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <!-- Time Field -->
            <label class="schedule-label" for="time">Meeting Time</label>
            <input type="time" name="time" id="time" value="{{ old('time') }}" required>
            <div class="error-message" id="time-error"></div>
            @error('time')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <button type="submit">Schedule Now</button>
        </form>
    </div>
</div>
<script>

function validateName(input) {
    let nameValue = input.value.trim();
    let nameError = document.getElementById('name-error');

    // Check if the input contains any numbers
    if (/\d/.test(nameValue)) {
        nameError.textContent = "Name should not contain numbers.";
        nameError.style.color = "red"; // Style the error message
        return false; // Return false if validation fails
    } else {
        nameError.textContent = ""; // Clear the error message if valid
        return true; // Return true if validation passes
    }
}

// Validate Entire Form
function validateForm() {
    let nameValid = validateName(document.getElementById('name'));
    let emailValid = validateEmail(document.getElementById('email'));
    let phoneValid = validatePhoneNumber(document.getElementById('phone'));
    let dateValid = validateDate(document.getElementById('date'));
    let timeValid = validateTime(document.getElementById('time'));

    // Prevent form submission if any validation fails
    if (!nameValid || !emailValid || !phoneValid || !dateValid || !timeValid) {
        return false; // Stop form submission
    }
    return true; // Allow form submission
}
// Validate Email Format
function validateEmail(input) {
    let emailValue = input.value.trim();
    let emailError = document.getElementById('email-error');
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(emailValue)) {
        emailError.textContent = "Please enter a valid email address.";
        return false;
    } else {
        emailError.textContent = "";
        return true;
    }
}

// Validate Phone Number (Exactly 10 Digits)
function validatePhoneNumber(input) {
    let phoneValue = input.value;
    let phoneError = document.getElementById('phone-error');

    // Remove non-numeric characters
    input.value = phoneValue.replace(/\D/g, '');

    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10); // Limit to 10 digits
    }

    // Check if it is exactly 10 digits
    if (input.value.length < 10) {
        phoneError.textContent = "Enter a valid 10-digit number.";
        return false;
    } else {
        phoneError.textContent = "";
        return true;
    }
}

// Validate Date (Future Date Only)
function validateDate(input) {
    let dateValue = new Date(input.value);
    let currentDate = new Date();
    let dateError = document.getElementById('date-error');

    if (dateValue <= currentDate) {
        dateError.textContent = "Please select a future date.";
        return false;
    } else {
        dateError.textContent = "";
        return true;
    }
}

// Validate Time (Future Time Only)
function validateTime(input) {
    let timeValue = input.value;
    let dateValue = document.getElementById('date').value;
    let currentDate = new Date();
    let selectedDateTime = new Date(`${dateValue}T${timeValue}`);
    let timeError = document.getElementById('time-error');

    if (selectedDateTime <= currentDate) {
        timeError.textContent = "Please select a future time.";
        return false;
    } else {
        timeError.textContent = "";
        return true;
    }
}

// Validate Entire Form
function validateForm() {
    let nameValid = validateName(document.getElementById('name'));
    let emailValid = validateEmail(document.getElementById('email'));
    let phoneValid = validatePhoneNumber(document.getElementById('phone'));
    let dateValid = validateDate(document.getElementById('date'));
    let timeValid = validateTime(document.getElementById('time'));

    return nameValid && emailValid && phoneValid && dateValid && timeValid;
}
</script>



<!-- JavaScript for Popup Message -->
<script>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        showPopupMessage("{{ $error }}", "error");
    @endforeach
@endif

@if (session('success'))
    showPopupMessage("{{ session('success') }}", "success");
@elseif (session('error'))
    showPopupMessage("{{ session('error') }}", "error");
@endif

function showPopupMessage(message, type) {
    let popup = document.createElement('div');
    popup.classList.add('popup-message', type, 'show');

    let heading = document.createElement('h3');
    heading.textContent = type.charAt(0).toUpperCase() + type.slice(1);
    popup.appendChild(heading);

    let body = document.createElement('p');
    body.textContent = message;
    popup.appendChild(body);

    let closeButton = document.createElement('button');
    closeButton.classList.add('close-btn');
    closeButton.innerHTML = '&times;';
    closeButton.onclick = () => popup.remove();
    popup.appendChild(closeButton);

    document.body.appendChild(popup);

    setTimeout(() => {
        popup.classList.remove('show');
    }, 5000); // Hide the popup after 5 seconds
}
</script>
<style>
    /* Error Message Styling */
.error-message {
    color: #f44336; /* Red color for error message text */
    font-size: 1rem; /* Responsive font size */
    margin-top: 0.5rem;
    font-weight: bold;
    display: block;
    margin-left: 0.5rem; 
}

/* Input Field with Error Styling */
input[type="text"].input-error {
    border-color: #f44336;
    background-color: #ffe6e6;
    padding: 0.8rem;
    font-size: 1rem;
    width: 100%; /* Ensure input takes full width */
    max-width: 400px;
}

/* Input Field Focus when Invalid */
input[type="text"].input-error:focus {
    outline: none;
    border-color: #f44336;
}

/* Pop-up Message Container */
.popup-message {
    position: fixed;
    top: 10vh; /* 10% from the top */
    right: 2vw; /* 2% from the right */
    max-width: 400px;
    width: 90%; /* Adjust width for smaller screens */
    padding: 1rem;
    background-color: #333;
    color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    z-index: 9999;
}

/* Success Message */
.popup-message.success { background-color: #4CAF50; }

/* Error Message */
.popup-message.error { background-color: #f44336; }

/* Information Message */
.popup-message.info { background-color: #2196F3; }

/* Pop-up Message Heading */
.popup-message h3 {
    margin: 0;
    font-size: 1.2rem;
    font-weight: 600;
}

/* Pop-up Message Body */
.popup-message p {
    margin: 5px 0;
    font-size: 1rem;
}

/* Close Button */
.popup-message .close-btn {
    position: absolute;
    top: 5px;
    right: 10px;
    font-size: 1.2rem;
    color: #fff;
    background: transparent;
    border: none;
    cursor: pointer;
}

/* Pop-up Display - Showing the pop-up */
.popup-message.show {
    opacity: 1;
    visibility: visible;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .popup-message {
        width: 90%;
        top: 5vh;
        right: 5vw;
        max-width: 90%;
    }

    input[type="text"].input-error {
        max-width: 100%;
    }
}

@media screen and (max-width: 480px) {
    .popup-message {
        font-size: 0.9rem;
        padding: 0.8rem;
    }

    .popup-message h3 {
        font-size: 1rem;
    }

    .popup-message p {
        font-size: 0.9rem;
    }

    .popup-message .close-btn {
        font-size: 1rem;
    }
}

</style>
   
<!-- Font Awesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- schudle-meeting end --> 
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.auto-type', {
          strings: [' Growth', ' Financial Freedom'],
          typeSpeed: 150,
          backSpeed:150,
            loop:true,
        });
      </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    @endsection