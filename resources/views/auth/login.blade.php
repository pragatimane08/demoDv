<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Login Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      
      color: #333;
    }

    .container {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      padding: 40px;
      width: 100%;
      max-width: 400px;
    }

    .brand-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .brand-logo img {
      width: 300px;
    }

    h2 {
      text-align: center;
      margin-bottom: 10px;
      color: #333;
    }

    h4 {
      text-align: center;
      margin-bottom: 30px;
      color: #666;
      font-weight: 400;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-control:focus {
      border-color: #1e3c72;
      outline: none;
    }

    .btn {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      font-weight: 500;
      color: #fff;
      background: #d0a94e;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background:#d0a94e;
    }

    .auth-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 20px 0;
    }

    .auth-options a {
      color: #d0a94e;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
    }

    .auth-options a:hover {
      text-decoration: underline;
    }

    .create-account {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .create-account a {
      color: #d0a94e;
      text-decoration: none;
      font-weight: 500;
    }

    .create-account a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      body {
        padding: 20px;
      }

      .container {
        padding: 30px;
      }

      .brand-logo img {
        width: 100px;
      }

      h4 {
        font-size: 20px;
      }

      h6 {
        font-size: 14px;
      }

      .btn {
        font-size: 14px;
        padding: 10px;
      }

      .auth-options a {
        font-size: 12px;
      }

      .create-account {
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  
  <div class="container">
    <div class="brand-logo">
      <img src="Dashboard/images/dhanavruksha-logo-new-1.png" alt="Dhanavruksha Logo">
    </div>
    <h2>Welcome To Dhanavruksha</h2>
    <h4>Sign in to your account</h4>
        <!-- Success Message -->
        <!-- Success Message -->
    @if (session('status'))
      <div id="successMessage" class="alert" style="background-color: #4CAF50; color: white; padding: 10px; margin-bottom: 20px;">
        {{ session('status') }}
      </div>
    @endif

    <!-- Error Messages -->
    @if ($errors->any())
      <div id="errorMessage" class="alert" style="background-color: #f44336; color: white; padding: 10px; margin-bottom: 20px;">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="/login" method="POST">
    @csrf
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn">Sign In</button>
</form>


      <div class="auth-options">
        <div>
          <!-- <label>
            <input type="checkbox"> Remember me
          </label> -->
        </div>
        <a href="password/reset">Forgot password?</a>
      </div>
    </form>
   
  </div>

  <script>
  // Function to hide messages after 5 seconds
  window.onload = function() {
    setTimeout(function() {
      var successMessage = document.getElementById('successMessage');
      var errorMessage = document.getElementById('errorMessage');
      if (successMessage) successMessage.style.display = 'none';
      if (errorMessage) errorMessage.style.display = 'none';
    }, 5000);
  };
</script>
</body>

</html>
