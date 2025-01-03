<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Client Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Main Container */
        /* Main Container */
.client-login-container {
    display: flex;
    flex-direction: row;
    width: 100vw;
    height: 100vh;
    background-color: #fff;
}

/* Left Section */
.client-login-left-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #000;
    overflow: hidden;
    position: relative;
    text-align: center; /* Centering text horizontally */
}


.client-login-left-section img {
    width: 100%;
    height: 80%;
    object-fit: cover;
}

.client-login-left-section .overlay-text {
    color: #fff;
    padding: 20px;
}

.client-login-left-section .overlay-text h1 {
    font-size: 2rem;
    color: #d0a94e;
    margin-bottom: 1rem;
    position: relative;
    display: inline-block;
    margin-top: -20px;
}

.client-login-left-section .overlay-text h1::after {
    content: "";
    display: block;
    width: 55%;
    height: 2px;
    background-color: #d0a94e;
    margin: 10px auto 0;
    margin-bottom: 10px;
}

.client-login-left-section .overlay-text h2 {
    font-size: 1.9rem;
    color: #d0a94e;
    margin-top: -20px;
}

.client-login-left-section .overlay-text p {
    font-size: 0.9rem;
    line-height: 1.5;
}

/* Right Section */
.client-login-right-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f9f9f9;
    padding: 20px;
}

.login-card {
    background-color: #fff;
    padding: 40px 30px; /* Increased padding */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%; /* Full width */
    max-width: 400px; /* Increased max-width */
}

.login-heading {
    text-align: center;
    font-size: 2rem; /* Increased font size */
    color: #000;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 20px;
    position: relative;
}

.input-group input {
    width: calc(100% - 40px);
    padding: 12px 40px 12px 12px; /* Increased padding */
    border: 1px solid #ccc;
    border-radius: 30px;
    font-size: 16px; /* Increased font size */
    position: relative;
}

.input-group input:focus {
    border-color: #d0a94e;
    box-shadow: 0 0 8px rgba(208, 169, 78, 0.4);
}

.input-group input:hover {
    border-color: #c19b3a;
    box-shadow: 0 0 5px rgba(193, 155, 58, 0.4);
}

.input-group .icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.1rem;
    color: #888;
    cursor: pointer;
}

.input-group .icon:hover {
    color: #555;
}

/* Floating Label Style */
.floating-label {
    font-size: 0.9rem;
    color: #888;
    position: absolute;
    top: -20px;
    left: 12px;
    transition: all 0.3s ease;
    background: #fff;
    padding: 0 5px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
}

.input-group input:focus ~ .floating-label,
.input-group input:not(:placeholder-shown) ~ .floating-label {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    color: #d0a94e;
    font-size: 0.8rem;
}

.options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.options .forgot {
    color: #d0a94e;
    text-decoration: none;
    font-size: 0.9rem;
}

.options .forgot:hover {
    text-decoration: underline;
}

.btn {
    display: block;
    width: 100%;
    padding: 12px;
    border-radius: 30px;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 15px;
}

.login-btn {
    background-color: #d0a94e;
    color: #fff;
    border: none;
}

.login-btn:hover {
    background-color: #c19b3a;
}

.social-btn {
    background-color: #f9f9f9;
    color: #333;
    border: 1px solid #ccc;
}

.social-btn:hover {
    background-color: #e6e6e6;
}

.text-center {
    text-align: center;
}

.text-center a {
    color: #d0a94e;
    text-decoration: none;
}

.text-center a:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .client-login-container {
        flex-direction: column;
    }

    .client-login-left-section {
        height: auto;
        order: 1;
    }

    .client-login-right-section {
        height: auto;
        order: 2;
        justify-content: flex-start;
        padding-top: 40px;
    }

    .login-card {
        width: 95%;
        padding: 25px;
    }

    .client-login-left-section .overlay-text h1 {
        font-size: 1.8rem;
    }

    .client-login-left-section .overlay-text h2 {
        font-size: 1.6rem;
    }

    .client-login-left-section .overlay-text p {
        font-size: 0.8rem;
    }
}

@media (max-width: 480px) {
    .login-heading {
        font-size: 1.6rem;
    }

    .input-group input {
        font-size: 14px;
    }

    .btn {
        padding: 10px;
        font-size: 14px;
    }
}

/* Additional Media Query for 375px screens */
@media (max-width: 375px) {
    .client-login-container {
        flex-direction: column; /* Stack elements vertically */
    }

    .client-login-left-section {
        height: auto;
        order: 1;
        text-align: center; /* Centering text */
    }

    .client-login-left-section img {
        width: 100%;
        height: 60%;
        object-fit: cover;
    }

    .client-login-right-section {
        padding: 20px;
    }

    .login-card {
        width: 100%;
        max-width: 420px; /* Adjusted max-width for small screens */
        padding: 35px 30px; /* Increased padding */
    }

    .login-heading {
        font-size: 1.6rem; /* Adjusted for better readability */
    }

    .input-group input {
        padding: 10px 15px;
        font-size: 15px;
    }

    .btn {
        padding: 12px;
        font-size: 14px;
    }

    /* Adjust the overlay text size */
    .client-login-left-section .overlay-text h1 {
        font-size: 1.5rem;
    }

    .client-login-left-section .overlay-text h2 {
        font-size: 1.3rem;
    }

    .client-login-left-section .overlay-text p {
        font-size: 0.9rem;
    }
}

    </style>
</head>

<body>
    <div class="client-login-container">
        <div class="client-login-left-section">
            <img src="img/Login.png" alt="Investment Image">
            <div class="overlay-text">
                <h1>Welcome</h1>
                <h2>Dhanavruksha</h2>
                <p>
                    Manage your finances with ease, security, and flexibility.<br>
                    Stay on top of your financial goals with confidence.<br>
                    Your journey to financial freedom starts here.
                </p>
            </div>
        </div>
        <div class="client-login-right-section">
            <div class="login-card">
                <h1 class="login-heading">Client Login</h1>
                <form>
                    <div class="input-group">
                        <input type="email" id="email" placeholder="Email" required>
                        <label for="email" class="floating-label">Username</label>
                        <i class="fas fa-envelope icon"></i>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" placeholder="Password" required>
                        <label for="password" class="floating-label">Password</label>
                        <i id="togglePassword" class="fas fa-eye icon"></i>
                    </div>
                    <div class="options">
                        <label>
                            <input type="checkbox" id="remember-me"> Remember Me
                        </label>
                        <a href="#" class="forgot">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn login-btn">Login</button>
                    <div class="text-center">--- Or ---</div>
                    <button type="button" class="btn social-btn"><i class="fab fa-google"></i> Login with Google</button>
                    <button type="button" class="btn social-btn"><i class="fas fa-mobile-alt"></i> Login with OTP</button>
                </form>
                <div class="text-center">
                    Don't have an account? <a href="#">Sign up</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordInput = document.getElementById("password");

        togglePassword.addEventListener("click", function () {
            const isPasswordVisible = passwordInput.type === "password";
            passwordInput.type = isPasswordVisible ? "text" : "password";
            this.classList.toggle("fa-eye-slash", isPasswordVisible);
            this.classList.toggle("fa-eye", !isPasswordVisible);
        });
    </script>
</body>

</html>