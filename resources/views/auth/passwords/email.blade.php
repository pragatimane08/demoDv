<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        /* General Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #f9f9f9, #f0f0f0);
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        /* Container */
        .forgot-password-container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
            padding: 40px;
            text-align: center;
            border: 1px solid #e0e0e0;
            background: linear-gradient(145deg, #ffffff, #f9f9f9);
        }

        /* Heading */
        .forgot-password-heading {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.5px;
            position: relative;
        }

        .forgot-password-heading::after {
            content: '';
            width: 60px;
            height: 4px;
            background: #d4af37;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* Subheading */
        .forgot-password-subheading {
            text-align: center;
            color: #555;
            font-size: 14px;
            margin-bottom: 25px;
            font-weight: 500;
        }

        /* Form Group */
        .forgot-password-form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .forgot-password-form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
            font-weight: 600;
        }

        .forgot-password-form-group input[type="email"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            color: #333;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .forgot-password-form-group input[type="email"]:focus {
            border-color: #d4af37;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.3);
            outline: none;
        }

        /* Button */
        .forgot-password-button {
            width: 100%;
            padding: 14px;
            background-color: #d4af37;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .forgot-password-button:hover {
            background-color: #b38f2a;
            transform: translateY(-2px);
        }

        .forgot-password-button:active {
            transform: translateY(0);
        }

        /* Alert Messages */
        .forgot-password-alert {
            padding: 12px;
            margin: 15px 0;
            border-radius: 10px;
            font-size: 14px;
            color: #fff;
            text-align: center;
        }

        .forgot-password-alert.success {
            background-color: #4CAF50;
        }

        .forgot-password-alert.error {
            background-color: #f44336;
        }

        .forgot-password-alert ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .forgot-password-alert ul li {
            margin: 5px 0;
        }

        /* Footer */
        .forgot-password-footer {
            margin-top: 25px;
            font-size: 12px;
            color: #888;
        }

        .forgot-password-footer a {
            color: #d4af37;
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-password-footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .forgot-password-heading {
                font-size: 24px;
            }

            .forgot-password-container {
                padding: 25px;
            }

            .forgot-password-form-group input[type="email"] {
                padding: 10px 12px;
                font-size: 13px;
            }

            .forgot-password-button {
                padding: 12px;
                font-size: 14px;
            }

            .forgot-password-alert {
                padding: 10px;
                font-size: 13px;
            }

            .forgot-password-footer {
                font-size: 11px;
            }
        }
    </style>
</head>
<body>
    <div class="forgot-password-container">
        <h2 class="forgot-password-heading">Forgot Password</h2>
        <p class="forgot-password-subheading">Enter your email to reset your password</p>

        <!-- Display success message if available -->
        @if (session('success'))
            <div class="forgot-password-alert success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display error message if any -->
        @if ($errors->any())
            <div class="forgot-password-alert error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('password.email') }}" method="POST" id="forgot-password-form">
            @csrf
            <div class="forgot-password-form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <button type="submit" class="forgot-password-button" id="submit-button">Send Reset Link</button>
        </form>

        <!-- Footer -->
        <div class="forgot-password-footer">
            <p>&copy; 2025 DhanaVruksha Financial services Pvt Ltd. All rights reserved. | <a href="#">Privacy Policy</a></p>
        </div>
    </div>

    <script>
        // Capture form submission
        document.getElementById('forgot-password-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var form = event.target;
            var button = document.getElementById('submit-button');

            // Disable the button immediately
            button.disabled = true;
            button.textContent = 'Sending...'; // Change button text

            // Create a new FormData object to send form data
            var formData = new FormData(form);

            // Use Fetch API to handle form submission via AJAX
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Enable button after successful response
                button.disabled = false;
                button.textContent = 'Send Reset Link';

                if (data.success) {
                    // Show success message
                    alert('A reset link has been sent to your email!');
                } else {
                    // Show error message
                    alert('There was an error. Please try again!');
                }
            })
            .catch(error => {
                // Handle network or other errors
                button.disabled = false;
                button.textContent = 'Send Reset Link';
                alert('There was an error. Please try again!');
            });
        });
    </script>
</body>
</html>