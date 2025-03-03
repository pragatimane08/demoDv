<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        /* Add styles as you see fit */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fff;
}

.container {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    max-width: 400px;
    width: 100%;
    padding: 25px 45px 25px 25px;
    box-sizing: border-box;
    border: 2px solid #d0a94e;
}

h2 {
    text-align: center;
    color: #d0a94e;
    font-size: 2rem;
    font-weight: bold;
}

.form-group {
    margin-bottom: 18px;
}

label {
    display: block;
    margin-bottom: 6px;
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #d0a94e;
    border-radius: 5px;
    font-size: 14px;
    background-color: #fff;
    color: #333;
    transition: border 0.3s ease-in-out;
}

input[type="password"]:focus {
    border-color: #b8913b;
    outline: none;
}

button {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #d0a94e, #b8913b);
    color: #fff;
    border: none;
    border-radius: 30px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-left: 15px;
}

button:hover {
    background: linear-gradient(135deg, #b8913b, #a37d2e);
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
}

.alert {
    padding: 12px;
    margin: 12px 0;
    color: white;
    background-color: #f44336;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
}

.footer {
    text-align: center;
    margin-top: 20px;
    font-size: 13px;
    color: #777;
    font-style: italic;
}
    </style>
</head>
<body>
    <div class="container">
        <h2>Change Password</h2>
        
        <!-- Display success or error messages -->
        @if (session('status'))
            <div class="alert" style="background-color: #4CAF50;">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/change-password">
            @csrf

            <!-- Current Password Field -->
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" id="current_password" name="current_password" required placeholder="Enter current password">
            </div>

            <!-- New Password Field -->
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter new password">
            </div>

            <!-- Confirm New Password Field -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your new password">
            </div>

            <button type="submit">Change Password</button>
        </form>
        
        <div class="footer">
            <p>&copy; 2025 DhanaVruksha Financial services Pvt Ltd . All rights reserved.</p>
        </div>
    </div>
</body>
</html>
