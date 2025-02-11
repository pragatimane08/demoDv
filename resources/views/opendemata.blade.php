@extends('layouts.app')
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Open Demat Account</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Open Demat Account</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<style>
    /* Open demat account start */
    .open-demat-acc-container {
        font-family: 'Poppins', Arial, sans-serif;
        background-color: #f0f2f5;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: calc(100% - 100px); /* Account for 50px margin on both sides */
        min-height: 100vh;
        padding: 20px;
        margin-left: 50px;
        margin-right: 50px;
        color: #333;
        border-radius: 5px;
    }

    .open-demat-acc-container .open-demat-acc-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .open-demat-acc-container .open-demat-acc-header h1 {
        font-size: 2rem !important; /* Maintain 2rem for all screen sizes */
        color: #d4af37; /* Golden */
        margin-bottom: 10px;
    }

    .open-demat-acc-container .open-demat-acc-header p {
        font-size: 1rem !important; /* Maintain 1rem for all screen sizes */
        color: #555;
    }

    .open-demat-acc-container .open-demat-acc-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        flex-wrap: wrap; /* Wrap items to prevent overflow */
    }

    .open-demat-acc-container .open-demat-acc-image-section {
        flex: 1;
        text-align: center;
        padding: 20px;
    }

    .open-demat-acc-container .open-demat-acc-image-section img {
        width: 100%;
        height: 50%;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        object-fit: cover;
        max-width: 100%; /* Ensure no overflow */
    }

    .open-demat-acc-container .open-demat-acc-form-container {
        flex: 1.5;
        background: #f9f9f9;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .open-demat-acc-container .open-demat-acc-form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .open-demat-acc-container .open-demat-acc-form-group label {
        font-size: 1rem;
        color: #d4af37; /* Golden */
        font-weight: bold;
    }

    .open-demat-acc-container .open-demat-acc-form-group input,
    .open-demat-acc-container .open-demat-acc-form-group textarea {
        width: calc(100% - 20px); /* Reduce width by 20px */
        padding: 12px;
        margin-top: 5px;
        border-radius: 8px;
        border: 1px solid #ddd;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .open-demat-acc-container .open-demat-acc-form-group input:focus,
    .open-demat-acc-container .open-demat-acc-form-group textarea:focus {
        border-color: #d4af37; /* Golden */
        box-shadow: 0 0 5px rgba(212, 175, 55, 0.5); /* Golden glow */
        outline: none;
    }

    .open-demat-acc-container .open-demat-acc-form-group textarea {
        height: 100px;
        resize: vertical;
    }

    .open-demat-acc-container .submit-btn {
        background-color: #d4af37; /* Golden */
        color: white;
        padding: 15px;
        border: none;
        border-radius: 8px;
        width: calc(100% - 20px); /* Reduce width by 20px */
        cursor: pointer;
        font-size: 1rem;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .open-demat-acc-container .submit-btn:hover {
        background-color: #c39a2b; /* Slightly darker golden */
    }

    .open-demat-acc-container .submit-btn:active {
        background-color: #a87e1f; /* Even darker golden */
    }

    @media (max-width: 1024px) {
        .open-demat-acc-container .open-demat-acc-content {
            flex-direction: column;
            text-align: center;
        }

        .open-demat-acc-container .open-demat-acc-image-section {
            padding: 10px;
        }

        .open-demat-acc-container .open-demat-acc-form-container {
            padding: 15px;
        }
    }

    @media (max-width: 768px) {
        .open-demat-acc-container {
            padding: 10px;
        }

        /* Ensure consistent font sizes */
        .open-demat-acc-container .open-demat-acc-header h1 {
            font-size: 2rem !important;
        }

        .open-demat-acc-container p {
            font-size: 1rem !important;
        }

        .open-demat-acc-container label,
        .open-demat-acc-container input,
        .open-demat-acc-container textarea,
        .open-demat-acc-container .submit-btn {
            font-size: 0.9rem;
        }

        .open-demat-acc-container .submit-btn {
            padding: 12px;
        }
    }

    @media (max-width: 480px) {
        /* Ensure consistent font sizes */
        .open-demat-acc-container .open-demat-acc-header h1 {
            font-size: 2rem !important;
        }

        .open-demat-acc-container p {
            font-size: 1rem !important;
        }

        .open-demat-acc-container label,
        .open-demat-acc-container input,
        .open-demat-acc-container textarea,
        .open-demat-acc-container .submit-btn {
            font-size: 0.8rem;
        }

        .open-demat-acc-container .submit-btn {
            padding: 10px;
        }
    }

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
@media (max-width: 1024px) {
    .wida-demat-description img {
        max-width: 450px;
    }
}

@media (max-width: 768px) {
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

    .wida-demat-description p {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .wida-demat-container {
        padding: 10px;
    }

    .wida-demat-title {
        font-size: 2rem;
    }

    .wida-demat-description p {
        font-size: 0.9rem;
    }

    .wida-demat-highlight-box {
        font-size: 1rem;
    }
}

/*benefits*/
/* Benefits Section Styling */
.odb-demat-benefits-section {
  text-align: center;
  padding: 40px 20px;
  background:rgb(238, 235, 235);
  margin-left: 50px;
  margin-right: 50px;
}

/* Section Heading */
.benefits-heading {
  font-size: 2rem;
  color: #333;
  font-weight: 700;
  margin-bottom: 30px;
  letter-spacing: 1px;
  font-family: 'Poppins', sans-serif;
}

/* General Styling for the Parent Container of Benefit Cards */
.odb-demat-benefits-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin: 0 auto;
  max-width: 1200px;
}

/* Benefit Card Styling with Modern Glassmorphism Effect */
.odb-demat-benefit-card {
  background: linear-gradient(145deg, rgba(239, 197, 108, 0.8), rgba(245, 245, 245, 0.6));
  backdrop-filter: blur(12px);
  width: 30%;
  padding: 25px 20px;
  text-align: center;
  border-radius: 15px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  position: relative;
  transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
  font-family: 'Poppins', sans-serif;
  overflow: hidden;
}

/* Hover Effect for Benefit Cards */
.odb-demat-benefit-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  background: linear-gradient(145deg, rgba(255, 255, 255, 0.9), rgba(250, 250, 250, 0.8));
}

/* Subtle Glow Effect */
.odb-demat-benefit-card::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255, 215, 0, 0.3), transparent);
  transition: all 0.5s ease;
  opacity: 0;
}

.odb-demat-benefit-card:hover::before {
  opacity: 1;
  transform: rotate(30deg);
}

/* Icon Styling inside Benefit Cards */
.odb-demat-benefit-card i {
  font-size: 3.5rem;
  color: #f5a623;
  margin-bottom: 15px;
  transition: transform 0.3s ease, color 0.3s ease;
}

.odb-demat-benefit-card:hover i {
  color: #ff9800;
  transform: scale(1.2);
}

/* Title Styling inside Benefit Cards */
.odb-demat-benefit-card h3 {
  font-size: 1.8rem;
  color: #222;
  font-weight: 600;
  margin-bottom: 15px;
  letter-spacing: 1px;
}

/* Paragraph Styling inside Benefit Cards */
.odb-demat-benefit-card p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 15px;
}

/* Responsive Media Queries */
@media (max-width: 1024px) {
  .odb-demat-benefit-card {
    width: 45%;
  }
}

@media (max-width: 768px) {
  .odb-demat-benefit-card {
    width: 80%;
  }
}

@media (max-width: 480px) {
  .odb-demat-benefit-card {
    width: 100%;
  }
}

/*advantage*/
/* Advantages Section Container */
.demat-advantages {
  padding: 60px 50px;
  background:rgb(233, 233, 233) /* Light Gold and White Gradient */
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  margin-top: 30px; /* Added margin top for the section */
}

/* Heading Styling */
.advantages-heading {
  font-size: 2.5rem;
  color: #222; /* Black for the heading */
  font-weight: 700;
  margin-bottom: 40px;
  font-family: 'Poppins', sans-serif;
}

/* Advantages Features Grid */
.demat-features {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 cards per row */
  gap: 30px;
  justify-items: center;
  max-width: 1200px;
  margin: 0 auto;
}

/* Individual Advantage Styling */
.od-adv-demat-feature {
  position: relative;
  background: linear-gradient(135deg, #fff5e1 30%,rgb(244, 213, 135) 70%);
  padding: 25px;
  border-radius: 25px; /* Rounded design */
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
  background-color: white;
}

/* Hover Effect with Background */
.od-adv-demat-feature:hover {
  transform: scale(1.05);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  background: ;
}

/* Icon Styling */
.od-adv-demat-feature-icon {
  font-size: 3.5rem;
  color: #f5a623; /* Gold color for the icon */
  margin-bottom: 15px;
  transition: transform 0.3s ease, color 0.3s ease;
}

/* Icon hover effect */
.od-adv-demat-feature:hover .od-adv-demat-feature-icon {
  color: #ffcc00; /* Lighter gold when hovered */
  transform: scale(1.2);
}

/* Content Styling */
.od-adv-demat-feature-content h2 {
  font-size: 1.6rem;
  color: #222; /* Black for text */
  font-weight: 600;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 10px;
}

.od-adv-demat-feature-content p {
  font-size: 1rem;
  color: #555; /* Dark Grey for text */
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
  text-align: center;
}

/* Responsive Adjustments */
@media (max-width: 1024px) {
  .demat-features {
    grid-template-columns: repeat(2, 1fr); /* 2 cards per row on medium screens */
  }
}

@media (max-width: 768px) {
  .demat-features {
    grid-template-columns: 1fr; /* 1 card per row on small screens */
  }

  .od-adv-demat-feature {
    padding: 20px;
  }

  .advantages-heading {
    font-size: 2rem; /* Slightly smaller heading for mobile */
  }
}

/* Margin Right and Left for the Section */
.demat-advantages {
  margin-right: 50px;
  margin-left: 50px;
}

/* Add margin-top to card's container */
.demat-features {
  margin-top: 30px; /* Add margin top to the grid container */
}

/**Steps for oda**/
/*open-demat-steps*/
/*open-demat-steps*/
.oda-step-h1 {
  text-align: center;
  font-size: 2.5rem;
  color: #d0a94e;
  margin-top: 20px;
  margin-bottom: 40px;
  font-weight: bold;
}

.oda-steps-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
  padding: 0 20px;
}

.oda-step {
  display: flex;
  align-items: center;
  background: white;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  padding: 20px;
  margin: 0 50px; /* Added margin on left and right */
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
  width: 60px; /* Adjusted size */
  height: 60px; /* Maintain a perfect circle */
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  margin-right: 20px; /* Adjusted spacing */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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
  margin: 0;
}

@media (max-width: 1024px) {
  .oda-step {
    flex-direction: column;
    text-align: center;
    margin: 0 30px; /* Adjusted for medium screens */
  }

  .oda-number {
    margin: 0 auto 15px;
  }

  .oda-icon {
    margin: 0 auto 10px;
  }
}

@media (max-width: 768px) {
  .oda-step {
    width: 100%;
    margin: 0 10px; /* Adjusted for small screens */
  }
}

/*Document of open-demat-acc*/
.oda-doc-wrapper-demat {
      font-family: Arial, sans-serif;
      max-width: 1200px;
      margin: 20px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      border: 3px solid #d0a94e;
    }

    h1 {
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

    @media (max-width: 768px) {
      .oda-doc-doc-list {
        grid-template-columns: 1fr;
      }

      .oda-doc-wrapper-demat {
        padding: 20px;
      }

      .oda-doc-doc-item {
        flex-direction: column;
        text-align: center;
      }
    }
/* open demat acccount end */

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
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
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