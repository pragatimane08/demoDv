<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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

        .container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            width: 90%;
            padding: 30px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.5px;
            position: relative;
        }

        h2::after {
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

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
            font-weight: 500;
        }

        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            color: #333;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="password"]:focus,
        input[type="email"]:focus {
            border-color: #d4af37;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.3);
            outline: none;
        }

        button {
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

        button:hover {
            background-color: #b38f2a;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        /* Alert Messages */
        .alert {
            padding: 12px;
            margin: 15px 0;
            border-radius: 10px;
            font-size: 14px;
            color: #fff;
            text-align: center;
        }

        .alert.success {
            background-color: #4CAF50;
        }

        .alert.error {
            background-color: #f44336;
        }

        .alert ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .alert ul li {
            margin: 5px 0;
        }

        /* Footer */
        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #888;
        }

        .footer a {
            color: #d4af37;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            h2 {
                font-size: 24px;
            }

            .container {
                padding: 20px;
            }

            input[type="password"],
            input[type="email"] {
                padding: 10px 12px;
                font-size: 13px;
            }

            button {
                padding: 12px;
                font-size: 14px;
            }

            .alert {
                padding: 10px;
                font-size: 13px;
            }

            .footer {
                font-size: 11px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>

        <!-- Display success or error messages -->
        @if (session('status'))
            <div class="alert success">
                {{ session('status') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Reset Password Form -->
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email', $email) }}" autofocus placeholder="Enter your email" readonly>
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter new password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your new password">
            </div>

            <button type="submit">Reset Password</button>
        </form>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2025 DhanaVruksha Financial services Pvt Ltd. All rights reserved. | <a href="#">Privacy Policy</a></p>
        </div>
    </div>
</body>
</html>