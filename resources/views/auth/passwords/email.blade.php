<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        .container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
        .alert {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <p>Enter your email to reset your password</p>
        
        <!-- Display success message if available -->
        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Display error message if any -->
        @if ($errors->any())
            <div class="alert" style="background-color: #f44336;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST" id="reset-password-form">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <button type="submit" id="submit-button">Send Reset Link</button>
        </form>

        <div class="footer">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Capture form submission
        document.getElementById('reset-password-form').addEventListener('submit', function(event) {
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
