<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Login</h1>
            <p>Welcome back! Please login to your account</p>
        </div>

        <form method="POST" action="/login">
            @csrf
            @if(session('error'))
                <div style ="color: red; margin-bottom: 15px; text-align: center;">
                    {{ session('error') }}
                </div>
            @endif
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="remember-forgot">
                <label style="margin: 0;">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="/forgot-password">Forgot password?</a>
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <div class="signup-link">
            Don't have an account? <a href="/register">Sign up here</a>
        </div>
    </div>
</body>
</html>