@extends('layouts.app')
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/opendemat.jpeg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Open Demat Account</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Open Demat Account</a></li>
                  <li class="breadcrumb-item"><a href="#">Open Demat Account</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>

<!-- Page Header End -->
<style>
    /* Open demat account start */
     /* Open Demat Account Section */
  /* Open Demat Account Section - Responsive */
.open-demat-acc-container {
    background-color: #f0f2f5;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    margin: 0 auto;
    max-width: 1200px;
    border-radius: 5px;
    box-sizing: border-box;
}

.open-demat-acc-header {
    text-align: center;
    margin-bottom: 20px;
    width: 100%;
}

.open-demat-acc-header h1 {
    font-size: clamp(1.5rem, 4vw, 2rem);
    color: #d4af37;
    margin-bottom: 10px;
}

.open-demat-acc-header p {
    font-size: clamp(0.9rem, 2.5vw, 1rem);
    color: #555;
    max-width: 800px;
    margin: 0 auto;
}

.open-demat-acc-content {
    display: flex;
    flex-direction: column;
    width: 100%;
}

.open-demat-acc-image-section {
    width: 100%;
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
}

.open-demat-acc-image-section img {
    width: 100%;
    height: auto;
    max-width: 600px;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.open-demat-acc-form-container {
    width: 100%;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    margin-top: 20px;
}

/* Form elements styles */
.open-demat-acc-form-group {
    margin-bottom: 15px;
    text-align: left;
}

.open-demat-acc-form-group label {
    font-size: clamp(0.9rem, 2.5vw, 1rem);
    color: #d4af37;
    font-weight: bold;
}

.open-demat-acc-form-group input,
.open-demat-acc-form-group textarea {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: clamp(0.9rem, 2.5vw, 1rem);
    transition: all 0.3s ease;
    box-sizing: border-box;
}

.open-demat-acc-form-group input:focus,
.open-demat-acc-form-group textarea:focus {
    border-color: #d4af37;
    box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
    outline: none;
}

.open-demat-acc-form-group textarea {
    min-height: 100px;
    max-height: 200px;
    resize: vertical;
    overflow-y: auto;
}

.submit-btn {
    background-color: #d4af37;
    color: white;
    padding: 15px;
    border: none;
    border-radius: 8px;
    width: 100%;
    cursor: pointer;
    font-size: clamp(0.9rem, 2.5vw, 1rem);
    font-weight: bold;
    transition: all 0.3s ease;
}

.submit-btn:hover {
    background-color: #c39a2b;
}

.submit-btn:active {
    background-color: #a87e1f;
}

/* Media Queries */
/* Mobile devices - stacked layout */
@media only screen and (max-width: 767px) {
    .open-demat-acc-image-section img {
        max-width: 100%;
    }
}

/* Desktop - side by side layout */
@media only screen and (min-width: 1025px) {
    .open-demat-acc-content {
        flex-direction: row;
        align-items: flex-start;
    }
    
    .open-demat-acc-image-section {
        flex: 1;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .open-demat-acc-form-container {
        flex: 1.2;
        margin-top: 0;
        margin-left: 20px;
    }
    
    .open-demat-acc-image-section img {
        max-height: 500px;
        object-fit: contain;
    }
}

/* iPad Air and Pro - stacked layout */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .open-demat-acc-content {
        flex-direction: column;
    }
    
    .open-demat-acc-image-section {
        margin-bottom: 30px;
    }
    
    .open-demat-acc-image-section img {
        max-width: 80%;
    }
    
    .open-demat-acc-form-container {
        width: 80%;
        margin: 0 auto;
        padding: 30px;
    }
}

/* Adjustments for very small screens */
@media only screen and (max-width: 320px) {
    .open-demat-acc-container {
        padding: 15px;
    }
    
    .open-demat-acc-form-container {
        padding: 15px;
    }
    
    .open-demat-acc-form-group input,
    .open-demat-acc-form-group textarea {
        padding: 10px;
    }
    
    .submit-btn {
        padding: 12px;
    }
}
  /* What is a Demat Account Section */
   /*what is oda ? */
/* General Container for the Section */
.wida-demat-container {
    margin: 40px auto;
    max-width: 1200px;
    padding: 20px;
    box-sizing: border-box;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    margin-top: 50px; /* Increased top margin to avoid overlap with the previous section */
   
}

/* Header Styling */
.wida-demat-header {
    text-align: center;
    margin-bottom: 40px;
    padding: 10px;
}

.wida-demat-title {
    font-size: 2rem;
    color: #d4af37; /* Gold color for the title */
    font-weight: 500;
    letter-spacing: 2px;
    line-height: 1.4;
}

/* Description Section Styling */
.wida-demat-description {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    align-items: flex-start;  /* Ensures text starts from top */
    margin-top: 20px;
}

.wida-demat-image {
    flex: 1;
    max-width: 500px;
}

.wida-demat-image img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.wida-demat-image img:hover {
    transform: scale(1.05);
}

.wida-demat-text {
    flex: 1.5rem;
    max-width: 600px;
}

.wida-demat-text p {
    margin-top: 20px;
    font-size: 1.5rem;
    line-height: 2.0;
    color: #555; /* Default color for the paragraph text */
    text-align: justify;
    font-family: 'Arial', sans-serif;
}

/* Apply gold color to highlighted words in the paragraph */
.wida-demat-text p strong,
.wida-demat-text p em {
    color: #d4af37; /* Gold color for the highlighted words */
}

/* Highlight Box Styling */
.wida-demat-highlight-box {
    margin-top: 40px;
    background-color: #fff9e6;
    padding: 20px;
    font-size: 1.2rem;
    text-align: center;
    color: #d0a94e;  /* Gold color for the text */
    border-left: 6px solid #d4af37;  /* Gold border */
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

/* Add clear both property for clearing float if needed */
.wida-demat-container::after {
    content: "";
    display: block;
    clear: both;
}

/* Media Queries for Responsiveness */
/* Desktop Layout (side by side) */
@media (min-width: 1024px) {
    .wida-demat-description {
        flex-direction: row;
        align-items: flex-start;
    }
    
    .wida-demat-image {
        flex: 1;
        max-width: 500px;
        margin-bottom: 0;
    }
    
    .wida-demat-text {
        flex: 1;
        max-width: none;
        padding-left: 30px;
    }
}

/* iPad Pro/Air Specific (stacked layout with centered image) */
@media (min-width: 768px) and (max-width: 1024px) {
    .wida-demat-description {
        flex-direction: column;
        align-items: center;
    }
    
    .wida-demat-image {
        max-width: 80%;
        display: flex;
        justify-content: center;
    }
    
    .wida-demat-image img {
        width: auto;
        max-height: 350px;
    }
    
    .wida-demat-text {
        max-width: 90%;
        text-align: left;
    }
    
    .wida-demat-highlight-box {
        max-width: 90%;
    }
}

/* Mobile adjustments */
@media (max-width: 767px) {
    .wida-demat-container {
        padding: 15px;
        margin-top: 30px;
    }
    
    .wida-demat-header {
        margin-bottom: 20px;
    }
    
    .wida-demat-image {
        max-width: 100%;
    }
    
    .wida-demat-image img {
        width: 100%;
        height: auto;
        max-height: none;
    }
    
    .wida-demat-text {
        max-width: 100%;
    }
    
    .wida-demat-text p {
        text-align: left;
    }
    
    .wida-demat-highlight-box {
        margin-top: 30px;
        padding: 15px;
        font-size: 1rem;
    }
}
  /* Benefits Section */
  .odb-demat-benefits-section {
    text-align: center;
    padding: 40px 20px;
    background: #f0f2f5;
    margin-left: 20px;
  }

  .benefits-heading {
    font-size: 2rem;
    color: #333;
    font-weight: 700;
    margin-bottom: 30px;
  }

  .odb-demat-benefits-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
  }

  .odb-demat-benefit-card {
    background: linear-gradient(145deg, rgba(239, 197, 108, 0.8), rgba(245, 245, 245, 0.6));
    backdrop-filter: blur(12px);
    width: 30%;
    padding: 25px 20px;
    text-align: center;
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .odb-demat-benefit-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }

  .odb-demat-benefit-card i {
    font-size: 3rem;
    color: #f5a623;
    margin-bottom: 15px;
  }

  .odb-demat-benefit-card h3 {
    font-size: 1.5rem;
    color: #222;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .odb-demat-benefit-card p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
  }

  /* Advantages Section */
  .demat-advantages {
    padding: 60px 20px;
    background: #f0f2f5;
    text-align: center;
    margin-left: 18px;
  }

  .advantages-heading {
    font-size: 2rem;
    color: #222;
    font-weight: 700;
    margin-bottom: 40px;
  }

  .demat-features {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
  }

  .od-adv-demat-feature {
    background: linear-gradient(135deg, #fff5e1 30%, #f4d587 70%);
    padding: 25px;
    border-radius: 25px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    width: 30%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .od-adv-demat-feature:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  }

  .od-adv-demat-feature-icon {
    font-size: 3rem;
    color: #f5a623;
    margin-bottom: 15px;
  }

  .od-adv-demat-feature-content h2 {
    font-size: 1.5rem;
    color: #222;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .od-adv-demat-feature-content p {
    font-size: 1rem;
    color: #555;
    line-height: 1.5;
  }

  /* Steps Section */
  .oda-step-h1 {
    text-align: center;
    font-size: 2rem;
    color: #d0a94e;
    margin-top: 20px;
    margin-bottom: 40px;
  }

  .oda-steps-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 0 20px;
    max-width: 1200px;
    margin: 0 auto;
  }

  .oda-step {
    display: flex;
    align-items: center;
    background: white;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .oda-step:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
  }

  .oda-number {
    font-size: 1.5rem;
    color: #ffffff;
    background-color: #d0a94e;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-right: 20px;
  }

  .oda-icon {
    font-size: 2rem;
    color: #d0a94e;
    margin-right: 15px;
  }

  .oda-step p {
    font-size: 1rem;
    color: #333333;
    line-height: 1.5;
  }

  /* Documents Section */
  .oda-doc-wrapper-demat {
    max-width: 1200px;
    margin: 20px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    border: 3px solid #d0a94e;
    
  }

  .oda-doc-wrapper-demat h1 {
    text-align: center;
    font-size: 2rem;
    color: #d0a94e;
    margin-bottom: 30px;
  }

  .oda-doc-doc-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 25px;
  }

  .oda-doc-doc-item {
    background: linear-gradient(to bottom, #fff, #f7f3ea);
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    border: 2px solid #d0a94e;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .oda-doc-doc-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
  }

  .oda-doc-doc-icon {
    font-size: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    color: #fff;
    background-color: #d0a94e;
  }

  .oda-doc-doc-title {
    font-size: 1.3rem;
    font-weight: bold;
    color: #333;
  }

  .oda-doc-doc-desc {
    font-size: 1rem;
    color: #555;
  }

  /* Responsive Design */
  @media (max-width: 1024px) {
    .odb-demat-benefit-card,
    .od-adv-demat-feature {
      width: 45%;
    }

    .oda-step {
      flex-direction: column;
      text-align: center;
    }

    .oda-number {
      margin: 0 auto 15px;
    }

    .oda-icon {
      margin: 0 auto 10px;
    }
  }

  @media (max-width: 768px) {
    .odb-demat-benefit-card,
    .od-adv-demat-feature {
      width: 100%;
    }

    .open-demat-acc-content {
      flex-direction: column;
    }

    .open-demat-acc-form-container {
      margin-top: 20px;
    }

    .wida-demat-description {
      flex-direction: column;
      align-items: center;
    }

    .wida-demat-image {
      max-width: 80%;
    }

    .wida-demat-text {
      text-align: center;
      max-width: 80%;
    }

    .oda-doc-doc-list {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 480px) {
    .open-demat-acc-header h1 {
      font-size: 1.5rem;
    }

    .open-demat-acc-header p {
      font-size: 0.9rem;
    }

    .wida-demat-title {
      font-size: 1.5rem;
    }

    .wida-demat-text p {
      font-size: 0.9rem;
    }

    .benefits-heading,
    .advantages-heading,
    .oda-step-h1 {
      font-size: 1.5rem;
    }

    .odb-demat-benefit-card h3,
    .od-adv-demat-feature-content h2 {
      font-size: 1.2rem;
    }

    .odb-demat-benefit-card p,
    .od-adv-demat-feature-content p,
    .oda-step p,
    .oda-doc-doc-desc {
      font-size: 0.9rem;
    }

    .oda-doc-wrapper-demat h1 {
      font-size: 1.5rem;
    }
  }

</style>

<!-- Open demat account start -->
<div class="open-demat-acc-container">
    <div class="open-demat-acc-header">
        <h1>Open Demat Account</h1>
        <p>We would like to hear from you. Please fill out the form below, and we’ll get back to you promptly.</p>
    </div>

    <div class="open-demat-acc-content">
        <div class="open-demat-acc-image-section">
            <img src="img/oda-img4.jpg" alt="Demat Account">
        </div>
        <!-- Open Demat Account Form -->
<!-- Right Side (Fixed Form)-start -->
<div class="open-demat-acc-form-container">
    <form id="dematForm" action="/submit-demat-form" method="POST" onsubmit="return validateForm();">
        @csrf
        <div class="open-demat-acc-form-group">
            <h3>Open a Free Demat Account</h3>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <span class="error-message" id="nameError"></span>
        </div>
        <div class="open-demat-acc-form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <span class="error-message" id="emailError"></span>
        </div>
        <div class="open-demat-acc-form-group">
            <label for="phone">Phone No.</label>
            <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required maxlength="10">
<span class="error-message" id="phoneError"></span>

<script>
document.getElementById("phone").addEventListener("input", function (e) {
    let phoneInput = e.target.value;
    let phoneError = document.getElementById("phoneError");

    // Remove non-numeric characters
    phoneInput = phoneInput.replace(/\D/g, ""); 
    e.target.value = phoneInput; // Update the input value with only digits

    // Validate phone number length
    if (phoneInput.length > 10) {
        phoneError.textContent = "Enter only 10 digits.";
    } else {
        phoneError.textContent = "";
    }
});
</script>

        </div>
        <div class="open-demat-acc-form-group">
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>
    <span class="error-message" id="messageError"></span>
</div>
        <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>

<!-- JavaScript for Client-Side Validation -->
<script>
    function validateForm() {
        let isValid = true;

        // Clear existing error messages
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        // Get form values
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validate Name
        if (name === '') {
            document.getElementById('nameError').textContent = 'Name is required.';
            isValid = false;
        } else if (!/^[a-zA-Z\s]+$/.test(name)) {
            document.getElementById('nameError').textContent = 'Name can only contain letters and spaces.';
            isValid = false;
        }

        // Validate Email
        if (email === '') {
            document.getElementById('emailError').textContent = 'Email is required.';
            isValid = false;
        } else if (!/^\S+@\S+\.\S+$/.test(email)) {
            document.getElementById('emailError').textContent = 'Enter a valid email address.';
            isValid = false;
        }

        // Validate Phone
        if (phone === '') {
            document.getElementById('phoneError').textContent = 'Phone number is required.';
            isValid = false;
        } else if (!/^\d{10}$/.test(phone)) {
            document.getElementById('phoneError').textContent = 'Enter a valid 10-digit phone number.';
            isValid = false;
        }

        // Validate Message
        if (message === '') {
            document.getElementById('messageError').textContent = 'Message is required.';
            isValid = false;
        } else if (message.length < 10) {
            document.getElementById('messageError').textContent = 'Message must be at least 10 characters.';
            isValid = false;
        }

        // Return the overall validation status
        return isValid;
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

<!-- Styles for Popup Messages -->
<style>
  /* Error Message Styling */
.error-message {
    color: #f44336; /* Red color for error messages */
    font-size: 1rem; /* Responsive font size */
    margin-top: 0.5rem;
    font-weight: bold;
}

/* Pop-up Message Container */
.popup-message {
    position: fixed;
    top: 5vh; /* 5% from the top */
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
.popup-message.success {
    background-color: #4CAF50; /* Green */
}

/* Error Message */
.popup-message.error {
    background-color: #f44336; /* Red */
}

/* Pop-up Message Heading */
.popup-message h3 {
    margin: 0;
    font-size: 1.2rem;
    font-weight: 600;
    color: #fff;
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
        width: 80%;
        right: 10%;
        top: 5vh;
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

@media screen and (max-width: 480px) {
    .popup-message {
        width: 90%;
        right: 5%;
        top: 5vh;
        padding: 0.8rem;
    }

    .popup-message h3 {
        font-size: 0.9rem;
    }

    .popup-message p {
        font-size: 0.85rem;
    }

    .popup-message .close-btn {
        font-size: 0.9rem;
    }
}

</style>
    </div>
</div>

 <!-- What is a Demat Account? -->
 <div class="wida-demat-container">
    <header class="wida-demat-header">
        <h2 class="wida-demat-title">What is a Demat Account?</h2>
    </header>

    <section class="wida-demat-description">
        <div class="wida-demat-image">
            <img src="img/open-demat-img-1.jpg" alt="Demat Account Image">
        </div>
        <div class="wida-demat-text">
            <p>A Demat account is an <strong>electronic account</strong> that holds all your investments in <em>shares, government securities, exchange-traded funds, bonds,</em> and <em>mutual funds</em> in one place. It enables the digitization of the stock trading market and enforces better governance.</p>
        </div>
    </section>

    <div class="wida-demat-highlight-box">
        "A Demat account simplifies trading by converting physical share certificates into electronic form, making transactions secure and hassle-free."
    </div>
</div>

<!-- Benefits of Opening a Demat Account -->
<!-- Benefits Section -->
<section class="odb-demat-benefits-section">
    <h2 class="benefits-heading">Benefits of Opening a Demat Account</h2>
    <div class="odb-demat-benefits-container">
        <!-- Benefit Card 1 -->
        <div class="odb-demat-benefit-card">
            <i class="fas fa-chart-line"></i> <!-- Example icon -->
            <h3>Easy Trading</h3>
            <p>Trading becomes simple with easy access to your stocks, securities, and other investments directly from your Demat account.</p>
        </div>

        <!-- Benefit Card 2 -->
        <div class="odb-demat-benefit-card">
            <i class="fas fa-shield-alt"></i> <!-- Example icon -->
            <h3>Safe and Secure</h3>
            <p>Your investments are stored electronically, providing a secure environment and reducing the risks associated with physical share certificates.</p>
        </div>

        <!-- Benefit Card 3 -->
        <div class="odb-demat-benefit-card">
            <i class="fas fa-sync-alt"></i> <!-- Example icon -->
            <h3>Quick Transfers</h3>
            <p>Transfer securities seamlessly with the click of a button. Demat accounts enable fast and hassle-free transactions.</p>
        </div>
    </div>
</section>
</br>
<!-- Benefits of Opening a Demat Account-end -->

<!--advantage - start -->
<!-- Advantages Section -->
<section class="demat-advantages">
  <h1 class="advantages-heading">Advantages</h1>
  <div class="demat-features">
    <!-- Advantage 1 -->
    <div class="od-adv-demat-feature demat-feature1">
      <div class="od-adv-demat-feature-icon">🔍</div>
      <div class="od-adv-demat-feature-content">
        <h2>Easy Access</h2>
        <p>Access your assets and statements easily through online banking.</p>
      </div>
    </div>

    <!-- Advantage 2 -->
    <div class="od-adv-demat-feature demat-feature2">
      <div class="od-adv-demat-feature-icon">📄</div>
      <div class="od-adv-demat-feature-content">
        <h2>Dematerialization</h2>
        <p>Convert physical documents into electronic form for seamless management.</p>
      </div>
    </div>

    <!-- Advantage 3 -->
    <div class="od-adv-demat-feature demat-feature3">
      <div class="od-adv-demat-feature-icon">💹</div>
      <div class="od-adv-demat-feature-content">
        <h2>Automatic Credit</h2>
        <p>Shares are credited automatically during mergers, bonuses, or consolidations.</p>
      </div>
    </div>

    <!-- Advantage 4 -->
    <div class="od-adv-demat-feature demat-feature1">
      <div class="od-adv-demat-feature-icon">💰</div>
      <div class="od-adv-demat-feature-content">
        <h2>Low Transaction Costs</h2>
        <p>Save money with low transaction costs and no stamp duty on securities.</p>
      </div>
    </div>

    <!-- Advantage 5 -->
    <div class="od-adv-demat-feature demat-feature2">
      <div class="od-adv-demat-feature-icon">🗃️</div>
      <div class="od-adv-demat-feature-content">
        <h2>Streamlined Process</h2>
        <p>Streamline share trading and eliminate unnecessary paperwork.</p>
      </div>
    </div>

    <!-- Advantage 6 -->
    <div class="od-adv-demat-feature demat-feature3">
      <div class="od-adv-demat-feature-icon">🔒</div>
      <div class="od-adv-demat-feature-content">
        <h2>Security and Convenience</h2>
        <p>Enjoy maximum security and convenience for your investments.</p>
      </div>
    </div>
  </div>
</section>

    <!--advantage - end -->

 <!--open-demat-steps-->
 <h1 class="oda-step-h1">Steps to Open a Demat Account</h1> 

<div class="oda-steps-container">
    <!-- Step 1 -->
    <div class="oda-step">
        <div class="oda-number">01</div>
        <div class="oda-icon"><i class="fas fa-building"></i></div>
        <p>Choose a Depository Participant (DP) to open the account.</p>
    </div>

    <!-- Step 2 -->
    <div class="oda-step">
        <div class="oda-number">02</div>
        <div class="oda-icon"><i class="fas fa-user-edit"></i></div>
        <p>Submit your personal details like Name, Mobile, and City.</p>
    </div>

    <!-- Step 3 -->
    <div class="oda-step">
        <div class="oda-number">03</div>
        <div class="oda-icon"><i class="fas fa-mobile-alt"></i></div>
        <p>Verify your mobile number using an OTP.</p>
    </div>

    <!-- Step 4 -->
    <div class="oda-step">
        <div class="oda-number">04</div>
        <div class="oda-icon"><i class="fas fa-id-card"></i></div>
        <p>Complete eKYC and upload required documents:   Proof of Address, Identity, Income.</p>
    </div>

    <!-- Step 5 -->
    <div class="oda-step">
        <div class="oda-number">05</div>
        <div class="oda-icon"><i class="fas fa-credit-card"></i></div>
        <p>Ensure you have a PAN card, as it is mandatory.</p>
    </div>
</div>
    <!--open-demat-end-->

     <!--Document -Open demat-acc -start -->
     <div class="oda-doc-wrapper-demat"> 
  <h1>Documents Required to Open a Demat Account</h1>
  <div class="oda-doc-doc-list">
    <div class="oda-doc-doc-item">
      <div class="oda-doc-doc-icon">📇</div>
      <div>
        <div class="oda-doc-doc-title">Identity Proof</div>
        <div class="oda-doc-doc-desc">PAN card is mandatory. Please ensure your photo and sign on the card are clearly visible.</div>
      </div>
    </div>
    <div class="oda-doc-doc-item">
      <div class="oda-doc-doc-icon">🏦</div>
      <div>
        <div class="oda-doc-doc-title">Bank Proof</div>
        <div class="oda-doc-doc-desc">Bank account statements of last 6 months, cancelled cheque and passbook. (any of these)</div>
      </div>
    </div>
    <div class="oda-doc-doc-item">
      <div class="oda-doc-doc-icon">🏠</div>
      <div>
        <div class="oda-doc-doc-title">Address Proof</div>
        <div class="oda-doc-doc-desc">Aadhaar, Passport, Driving Licence, Voter ID, or bank account statements of last 6 months.</div>
      </div>
    </div>
    <div class="oda-doc-doc-item">
      <div class="oda-doc-doc-icon">💵</div>
      <div>
        <div class="oda-doc-doc-title">Income Proof</div>
        <div class="oda-doc-doc-desc">Bank statements of last 6 months, salary slips or ITR. (any of these)</div>
      </div>
    </div>
    <div class="oda-doc-doc-item">
      <div class="oda-doc-doc-icon">✍️</div>
      <div>
        <div class="oda-doc-doc-title">Signature</div>
        <div class="oda-doc-doc-desc">Photo of your signature on a white paper. It must match the one on your PAN card.</div>
      </div>
    </div>
    <div class="oda-doc-doc-item">
      <div class="oda-doc-doc-icon">📸</div>
      <div>
        <div class="oda-doc-doc-title">Photograph</div>
        <div class="oda-doc-doc-desc">One passport size photo is required. Ensure it is clear and recent.</div>
      </div>
    </div>
  </div>
</div>

<!--Document -Open demat-acc -end -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- Template Javascript -->
<script src="js/main.js"></script>

@endsection