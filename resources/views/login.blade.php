<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4B8B3B; /* Green background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logo {
            margin-bottom: 20px;
        }

        /* Updated logo size */
        .logo img {
            margin-top: -100px;
            width:330px; /* Change this to your desired width */
            height: auto; /* Maintain aspect ratio */
        }

        .login-container {
            background: white;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        .login-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .login-button {
            background-color: #4B8B3B; /* Green button */
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 15px;
        }

        .login-button:hover {
            background-color: #3A6E2F;
        }

        .google-button {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            background-color: white;
            color: #4B8B3B;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .google-button img {
            width: 20px;
            margin-right: 10px;
        }

        .google-button:hover {
            background-color: #f0f0f0;
        }

        .forgot-password {
            text-align: right;
            font-size: 14px;
        }

        .forgot-password a {
            color: #4B8B3B;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Logo Section -->
    <div class="logo">
        <img src="{{ asset('logo.png') }}" alt="App Logo">
    </div>

    <!-- Login Container -->
    <div class="login-container">
        <h1 class="login-title">Log in</h1>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="remember-me">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="login-button">Log in</button>
        </form>
        <div>
            <a href="{{ route('google.login') }}" class="google-button">
                <img src="{{ asset('google.webp') }}" alt="Google Icon"> Log in with Google
            </a>
        </div>
    </div>
</body>
</html>
