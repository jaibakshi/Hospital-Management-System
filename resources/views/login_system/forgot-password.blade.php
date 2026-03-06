<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot-password</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Forgot Password</h1>
            <p>Welcome back! Please enter your email</p>
        </div>
        <form action="/forgot-password" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required value="{{ old('email') }}">
            </div>
                <button type="submit" class="login-btn"> Send Reset Link</button>
        </form>
    
</body>
</html>